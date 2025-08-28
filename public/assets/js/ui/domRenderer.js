import { getFilteredAndSortedProducts } from '../services/productService.js';
import { createProductItem } from '../components/productItem.js';
import { updateDualSlider } from './priceSlider.js';
import { formatNameToTitle } from '../utils/helpers.js';
import { productDatabase } from '../data/productDatabase.js';
import {
    currentDepartment,
    currentFilters,
    currentPage,
    itemsPerPage,
    filterConfigs
} from '../core/appState.js';


export function renderPage() {
    renderSidebar();
    const products = getFilteredAndSortedProducts();
    renderBreadcrumbAndFilters();
    renderResultsHeader(products);
    renderProducts(products);
    renderPagination(products);
}

export function renderSidebar() {
    const sidebar = document.querySelector('.sidebar');
    if (!sidebar) return;
    sidebar.innerHTML = '';

    const deptKey = currentDepartment.toLowerCase().replace(/ & /g, '_&_');
    const baseProducts = (deptKey === 'all')
        ? Object.values(productDatabase).flat()
        : (productDatabase[deptKey] || []);

    let departmentHTML = '<h3>Department</h3>';
    if (currentDepartment.toLowerCase() !== 'all') {
        departmentHTML += `<div><a href="#" onclick="handleDepartmentChange('All')">‹ Any Department</a></div>`;
        departmentHTML += `<div><strong>${currentDepartment}</strong></div>`;
    } else {
        Object.keys(productDatabase).forEach(cat => {
            departmentHTML += `<div><a href="#" onclick="handleDepartmentChange('${formatNameToTitle(cat)}')">${formatNameToTitle(cat)}</a></div>`;
        });
    }
    sidebar.insertAdjacentHTML('beforeend', `<div class="filter-section">${departmentHTML}</div>`);

    let reviewHTML = `<h3>Customer Reviews</h3>`;
    [4, 3, 2, 1].forEach(stars => {
        const isSelected = currentFilters['Customer Reviews']?.[0] === String(stars);
        reviewHTML += `<div class="star-filter ${isSelected ? 'selected' : ''}" onclick="handleFilterToggle('Customer Reviews', '${stars}')"><span class="stars">${'★'.repeat(stars)}${'☆'.repeat(5 - stars)}</span> & Up</div>`;
    });
    sidebar.insertAdjacentHTML('beforeend', `<div class="filter-section">${reviewHTML}</div>`);

    const isPrimeChecked = currentFilters['Prime'];
    const primeHTML = `<h3>Amazon Prime</h3><label class="header-item-wrapper"><input type="checkbox" class="filter-checkbox" ${isPrimeChecked ? 'checked' : ''} onchange="handleFilterToggle('Prime', this.checked)"> <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Prime_logo.png" alt="Prime" style="height:15px;"></label>`;
    sidebar.insertAdjacentHTML('beforeend', `<div class="filter-section">${primeHTML}</div>`);

    const prices = baseProducts.length > 0 ? baseProducts.map(p => p.price) : [0];
    const minPrice = Math.floor(Math.min(...prices));
    const maxPrice = Math.ceil(Math.max(...prices));
    let [currentMin, currentMax] = currentFilters['Price'] ? currentFilters['Price'][0].split('-').map(Number) : [minPrice, maxPrice];

    const priceSliderHTML = `
        <h3>Price</h3>
        <div class="dual-slider-container">
             <div class="price-inputs-container">
                <div class="price-input-box">
                    <label>Min</label>
                    <div>$<span id="min-price-display">${currentMin}</span></div>
                </div>
                <span>-</span>
                <div class="price-input-box">
                    <label>Max</label>
                    <div>$<span id="max-price-display">${currentMax}</span></div>
                </div>
             </div>
             <div class="slider-wrapper">
                <div class="slider-track"></div>
                <div class="slider-range" id="slider-range"></div>
                <input type="range" id="min-slider" min="${minPrice}" max="${maxPrice}" value="${currentMin}" oninput="updateDualSlider(event)" onchange="handlePriceFilterApply()">
                <input type="range" id="max-slider" min="${minPrice}" max="${maxPrice}" value="${currentMax}" oninput="updateDualSlider(event)" onchange="handlePriceFilterApply()">
             </div>
        </div>`;
    sidebar.insertAdjacentHTML('beforeend', `<div class="filter-section">${priceSliderHTML}</div>`);
    updateDualSlider();

    const dynamicFilters = filterConfigs[deptKey] || {};
    Object.entries(dynamicFilters).forEach(([category, items]) => {
        let itemsHTML = `<h3>${category}</h3>`;
        items.forEach(item => {
            const isChecked = currentFilters[category]?.includes(item.value);
            itemsHTML += `<div><label><input type="checkbox" class="filter-checkbox" ${isChecked ? 'checked' : ''} onchange="handleFilterToggle('${category}', '${item.value}', this.checked)"><span>${item.label}</span></label></div>`;
        });
        sidebar.insertAdjacentHTML('beforeend', `<div class="filter-section">${itemsHTML}</div>`);
    });
}

export function renderBreadcrumbAndFilters() {
    const breadcrumb = document.querySelector('.breadcrumb');
    if (breadcrumb) {
        breadcrumb.innerHTML = `<a href="#" onclick="handleDepartmentChange('All')">All Departments</a> ${currentDepartment.toLowerCase() !== 'all' ? `› <strong>${currentDepartment}</strong>` : ''}`;
    }

    const activeFiltersContainer = document.querySelector('.active-filters');
    if (!activeFiltersContainer) return;

    activeFiltersContainer.innerHTML = '';
    let hasFilters = false;
    Object.entries(currentFilters).forEach(([category, values]) => {
        hasFilters = true;
        values.forEach(value => {
            let label = value;
            if (category === "Prime") label = "Prime";
            if (category === "Customer Reviews") label = `${value} ★ & Up`;
            if (category === "Price") {
                const [min, max] = value.split('-');
                label = `$${min} - $${max}`;
            }
            activeFiltersContainer.insertAdjacentHTML('beforeend', `<div class="filter-tag"><span>${label}</span><span class="remove" onclick="removeFilter('${category}', '${value}')">✕</span></div>`);
        });
    });

    if (hasFilters) {
        activeFiltersContainer.insertAdjacentHTML('beforeend', `<button class="clear-filters-btn" onclick="handleClearAllFilters()">Clear All</button>`);
    }
}

export function renderResultsHeader(products) {
    const countElement = document.querySelector('.results-info');
    if (!countElement) return;

    const total = products.length;
    const query = document.querySelector('.search-input')?.value.trim() || '';
    const startIndex = total > 0 ? (currentPage - 1) * itemsPerPage + 1 : 0;
    const endIndex = Math.min(startIndex + itemsPerPage - 1, total);

    countElement.innerHTML = total === 0
        ? `No results for <span>"${query}"</span>`
        : `${startIndex}-${endIndex} of ${total.toLocaleString()} results ${query ? `for <span>"${query}"</span>` : ''}`;
}

export function renderProducts(products) {
    const grid = document.getElementById('product-grid');
    if (!grid) return;

    grid.innerHTML = '';
    products.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage)
        .forEach(product => grid.appendChild(createProductItem(product)));
}

export function renderPagination(products) {
    const pagination = document.getElementById('pagination');
    if (!pagination) return;

    const totalPages = Math.ceil(products.length / itemsPerPage);
    pagination.innerHTML = '';
    if (totalPages <= 1) return;

    let paginationHTML = currentPage > 1 ? `<button class="page-btn" onclick="handleChangePage(${currentPage - 1})">‹ Previous</button>` : '';

    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += i === currentPage
            ? `<span class="page-btn active">${i}</span>`
            : `<button class="page-btn" onclick="handleChangePage(${i})">${i}</button>`;
    }

    if (currentPage < totalPages) {
        paginationHTML += `<button class="page-btn" onclick="handleChangePage(${currentPage + 1})">Next ›</button>`;
    }

    pagination.innerHTML = paginationHTML;
}