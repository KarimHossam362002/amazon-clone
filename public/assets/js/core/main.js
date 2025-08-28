import { productDatabase } from '../data/productDatabase.js';
import { generateFilterConfigurations } from '../services/filterService.js';
import { renderPage } from '../ui/domRenderer.js';
import { formatNameToTitle } from '../utils/helpers.js';
import * as eventHandlers from './eventHandlers.js';
import * as priceSlider from '../ui/priceSlider.js';


Object.assign(window, eventHandlers);
Object.assign(window, priceSlider);


function initializePage() {
    document.body.innerHTML = `
        <header class="header"></header>
        <nav class="nav-bar"></nav>
        <div class="container">
            <aside class="sidebar"></aside>
            <main class="main-content">
                <div class="breadcrumb"></div>
                <div class="active-filters"></div>
                <div class="results-header-bar">
                    <div class="results-info"></div>
                    <select class="sort-select" onchange="handleSortChange(this.value)">
                        <option value="relevance">Sort by: Featured</option>
                        <option value="price-low">Sort by: Price: Low to High</option>
                        <option value="price-high">Sort by: Price: High to Low</option>
                        <option value="rating">Sort by: Avg. Customer Review</option>
                    </select>
                </div>
                <div class="product-grid" id="product-grid"></div>
                <div class="pagination" id="pagination"></div>
            </main>
        </div>`;

    document.querySelector('.header').innerHTML = `
        <div class="header-item-wrapper header-logo" onclick="window.location.reload()">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon logo">
        </div>
        <div class="header-item-wrapper header-location">
            <div class="line-1">Deliver to</div>
            <div class="line-2">Egypt</div>
        </div>
        <div class="header-search">
            <div class="header-search-container">
                <select class="search-dropdown" onchange="handleDepartmentChange(this.value)"></select>
                <input type="text" class="search-input" placeholder="Search Amazon" onkeyup="if(event.key==='Enter')handleSearch()">
                <button class="search-btn" onclick="handleSearch()"><img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Search_Icon.svg" alt="Search"></button>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-item-wrapper header-nav-item">
                <div class="line-1">Hello, sign in</div>
                <div class="line-2">Account & Lists</div>
            </div>
            <div class="header-item-wrapper header-nav-item">
                <div class="line-1">Returns</div>
                <div class="line-2">& Orders</div>
            </div>
            <div class="header-item-wrapper header-cart" onclick="showCartSummary()">
                 <span class="cart-count" id="cart-count">0</span>
                 <svg class="cart-icon" viewBox="0 0 27 26"><path d="M22.023 20.246h-5.55a1 1 0 0 1 0-2h5.55a1 1 0 0 1 0 2zM9.5 24a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0-7a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm10 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0-7a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zM4.935 15.512L2.023 3.846h-1.05a1 1 0 0 1 0-2h2.05a1 1 0 0 1 .98.8l3.1 12.358a1 1 0 0 1-.98 1.2H5.935a1 1 0 0 1-.98-1.192zM23.023 3.846l-2.238 9.975a3 3 0 0 1-2.94 2.183H5.935a3 3 0 0 1-2.94-2.375L.023 2.846a1 1 0 0 1 1.96-.384L5.065 13.3a1 1 0 0 0 .98.788h12.89a1 1 0 0 0 .98-.713l2.128-9.48a1 1 0 1 1 1.96.44z"></path></svg>
            </div>
        </div>`;

    document.querySelector('.nav-bar').innerHTML = `<a href="#">All</a><a href="#">Today's Deals</a><a href="#">Customer Service</a>`;

    const deptDropdown = document.querySelector('.search-dropdown');
    deptDropdown.innerHTML = `<option value="All">All Departments</option>` + Object.keys(productDatabase).map(cat => `<option value="${formatNameToTitle(cat)}">${formatNameToTitle(cat)}</option>`).join('');

    generateFilterConfigurations();

    renderPage();
}

document.addEventListener('DOMContentLoaded', initializePage);