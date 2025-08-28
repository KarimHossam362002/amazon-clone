import {
    setDepartment,
    setFilters,
    setSort,
    setPage,
    setCartCount,
    cartCount,
    currentFilters
} from './appState.js';
import { renderPage } from '../ui/domRenderer.js';

export function handleDepartmentChange(dept) {
    setDepartment(dept);
    setFilters({});
    setPage(1);
    document.querySelector('.search-dropdown').value = dept;
    renderPage();
}

export function handleSearch() {
    setPage(1);
    renderPage();
}

export function handleSortChange(sortType) {
    setSort(sortType);
    setPage(1);
    renderPage();
}

export function handleFilterToggle(category, value, isChecked) {
    const newFilters = { ...currentFilters };

    if (category === 'Prime') {
        if (value) {
            newFilters['Prime'] = ['true'];
        } else {
            delete newFilters['Prime'];
        }
    } else if (typeof isChecked === 'boolean') {
        if (!newFilters[category]) {
            newFilters[category] = [];
        }
        const index = newFilters[category].indexOf(String(value));
        if (isChecked && index === -1) {
            newFilters[category].push(String(value));
        } else if (!isChecked && index > -1) {
            newFilters[category].splice(index, 1);
        }
    } else {
        if (newFilters[category]?.[0] === value) {
            delete newFilters[category];
        } else {
            newFilters[category] = [value];
        }
    }

    if (newFilters[category]?.length === 0) {
        delete newFilters[category];
    }

    setFilters(newFilters);
    setPage(1);
    renderPage();
}

export function removeFilter(category, value) {
    const newFilters = { ...currentFilters };
    if (category === "Prime" || category === "Price" || category === "Customer Reviews") {
        delete newFilters[category];
    } else {
        if (newFilters[category]) {
            const index = newFilters[category].indexOf(value);
            if (index > -1) {
                newFilters[category].splice(index, 1);
            }
            if (newFilters[category].length === 0) {
                delete newFilters[category];
            }
        }
    }
    setFilters(newFilters);
    setPage(1);
    renderPage();
}

export function handleClearAllFilters() {
    setFilters({});
    setPage(1);
    renderPage();
}

export function handleChangePage(page) {
    setPage(page);
    window.scrollTo({ top: 0, behavior: 'smooth' });
    renderPage();
}

export function handleAddToCart() {
    const newCount = cartCount + 1;
    setCartCount(newCount);
    document.getElementById('cart-count').textContent = newCount;
}

export function showCartSummary() {
    alert(`Your cart has ${cartCount} item(s).`);
}