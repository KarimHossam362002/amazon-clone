export let currentDepartment = 'All';
export let currentFilters = {};
export let currentSort = 'relevance';
export let currentPage = 1;
export let itemsPerPage = 16;
export let cartCount = 0;
export let filterConfigs = {};

export function setDepartment(value) {
    currentDepartment = value;
}

export function setFilters(value) {
    currentFilters = value;
}

export function setSort(value) {
    currentSort = value;
}

export function setPage(value) {
    currentPage = value;
}

export function setCartCount(value) {
    cartCount = value;
}

export function setFilterConfigs(value) {
    filterConfigs = value;
}