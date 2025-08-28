import { setFilters, setPage, currentFilters } from '../core/appState.js';
import { renderPage } from './domRenderer.js';

export function updateDualSlider(event) {
    const minSlider = document.getElementById('min-slider');
    const maxSlider = document.getElementById('max-slider');
    if (!minSlider || !maxSlider) return;

    let minVal = parseInt(minSlider.value);
    let maxVal = parseInt(maxSlider.value);
    const priceGap = Math.round(minSlider.max * 0.05) || 10;

    if (maxVal - minVal < priceGap) {
        if (event && event.target.id === 'min-slider') {
            minSlider.value = maxVal - priceGap;
        } else {
            maxSlider.value = minVal + priceGap;
        }
    }

    minVal = parseInt(minSlider.value);
    maxVal = parseInt(maxSlider.value);

    if (minVal > maxVal) {
        if (event && event.target.id === 'max-slider') {
            minSlider.value = maxVal;
        } else {
            maxSlider.value = minVal;
        }
    }

    const minPriceDisplay = document.getElementById('min-price-display');
    const maxPriceDisplay = document.getElementById('max-price-display');
    if(minPriceDisplay) minPriceDisplay.textContent = minSlider.value;
    if(maxPriceDisplay) maxPriceDisplay.textContent = maxSlider.value;

    const range = document.getElementById('slider-range');
    if(range) {
        const minPercent = ((minSlider.value - minSlider.min) / (minSlider.max - minSlider.min)) * 100;
        const maxPercent = ((maxSlider.value - maxSlider.min) / (maxSlider.max - minSlider.min)) * 100;

        range.style.left = `${minPercent}%`;
        range.style.width = `${maxPercent - minPercent}%`;
    }
}

export function handlePriceFilterApply() {
    const minVal = document.getElementById('min-slider').value;
    const maxVal = document.getElementById('max-slider').value;

    const newFilters = { ...currentFilters };
    newFilters['Price'] = [`${minVal}-${maxVal}`];

    setFilters(newFilters);
    setPage(1);
    renderPage();
}