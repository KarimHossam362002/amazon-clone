import { productDatabase } from '../data/productDatabase.js';
import { currentDepartment, currentFilters, currentSort } from '../core/appState.js';
import { formatNameToTitle } from '../utils/helpers.js';

export function getFilteredAndSortedProducts() {
    let sourceProducts;
    if (currentDepartment.toLowerCase() === 'all') {
        sourceProducts = Object.values(productDatabase).flat();
    } else {
        const deptKey = Object.keys(productDatabase).find(key => formatNameToTitle(key) === currentDepartment);
        sourceProducts = productDatabase[deptKey] || [];
    }

    const query = document.querySelector('.search-input')?.value.toLowerCase().trim() || '';

    const baseProducts = query
        ? sourceProducts.filter(p => p.title.toLowerCase().includes(query))
        : sourceProducts;

    const activeFilterCategories = Object.keys(currentFilters);
    const filtered = activeFilterCategories.length > 0
        ? baseProducts.filter(product => {
            return activeFilterCategories.every(category => {
                const selectedValues = currentFilters[category];
                if (!selectedValues || selectedValues.length === 0) return true;
                if (category === "Prime") return product.prime;
                if (category === "Price") {
                    const [min, max] = selectedValues[0].split('-').map(Number);
                    return product.price >= min && product.price <= max;
                }
                if (category === "Customer Reviews") return product.rating >= parseInt(selectedValues[0]);

                const propName = Object.keys(product).find(p => formatNameToTitle(p) === category);
                if (!propName) return false;
                return selectedValues.includes(String(product[propName]));
            });
        })
        : baseProducts;

    return [...filtered].sort((a, b) => {
        switch (currentSort) {
            case 'price-low': return a.price - b.price;
            case 'price-high': return b.price - a.price;
            case 'rating': return b.rating - a.rating;
            default: return b.reviews - a.reviews;
        }
    });
}