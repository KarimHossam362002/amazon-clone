import { productDatabase } from '../data/productDatabase.js';
import { setFilterConfigs } from '../core/appState.js';
import { formatNameToTitle } from '../utils/helpers.js';

function discoverFilters(products) {
    const discovered = {};
    const finalFilters = {};

    products.forEach(product => {
        for (const key in product) {
            const value = product[key];
            const type = typeof value;

            if (type === 'number' || type === 'boolean' || value === null) {
                continue;
            }

            if (!discovered[key]) {
                discovered[key] = new Set();
            }
            discovered[key].add(value);
        }
    });

    for (const key in discovered) {
        const uniqueValues = discovered[key];

        if (uniqueValues.size > 1 && uniqueValues.size < 15) {
            const title = formatNameToTitle(key);
            finalFilters[title] = [...uniqueValues].sort().map(val => ({ label: val, value: String(val) }));
        }
    }

    return finalFilters;
}

export function generateFilterConfigurations() {
    const newFilterConfigs = {};
    const departmentKeys = Object.keys(productDatabase);
    const departmentFilterOptions = {};

    departmentKeys.forEach(dept => {
        departmentFilterOptions[dept] = discoverFilters(productDatabase[dept]);
    });

    let sharedTitles = new Set(Object.keys(departmentFilterOptions[departmentKeys[0]] || {}));
    for (let i = 1; i < departmentKeys.length; i++) {
        const currentTitles = new Set(Object.keys(departmentFilterOptions[departmentKeys[i]]));
        sharedTitles.forEach(title => {
            if (!currentTitles.has(title)) {
                sharedTitles.delete(title);
            }
        });
    }

    newFilterConfigs['all'] = {};
    const allProducts = Object.values(productDatabase).flat();
    const allDiscovered = discoverFilters(allProducts);

    sharedTitles.forEach(title => {
        if (allDiscovered[title]) {
            newFilterConfigs['all'][title] = allDiscovered[title];
        }
    });

    departmentKeys.forEach(dept => {
        newFilterConfigs[dept] = departmentFilterOptions[dept];
    });

    setFilterConfigs(newFilterConfigs);
}