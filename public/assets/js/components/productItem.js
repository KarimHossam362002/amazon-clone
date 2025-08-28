export function createProductItem(product) {
    const item = document.createElement('div');
    item.className = 'product-item';
    const priceParts = product.price.toFixed(2).split('.');
    const deliveryDate = new Date();
    deliveryDate.setDate(deliveryDate.getDate() + product.deliveryDays);
    const deliveryDateString = deliveryDate.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric' });

    item.innerHTML = `
        <div class="product-image-container"><a href="#"><img src="${product.image}" alt="${product.title}"></a></div>
        <div class="product-details">
            <h2 class="product-title"><a href="#">${product.title}</a></h2>
            <div class="product-rating">
                <span class="rating-stars">${'★'.repeat(Math.round(product.rating))}${'☆'.repeat(5 - Math.round(product.rating))}</span>
                <a href="#">${product.reviews.toLocaleString()}</a>
            </div>
            <div class="product-price">
                <span class="current-price"><span class="current-price-symbol">$</span>${priceParts[0]}<span class="current-price-decimal">${priceParts[1]}</span></span>
                ${product.oldPrice ? `<span class="old-price">List: $${product.oldPrice.toLocaleString()}</span>` : ''}
            </div>
            <div>${product.prime ? `<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Prime_logo.png" alt="Prime" style="height:15px; margin-right:5px">` : ''}<span>FREE delivery <strong>${deliveryDateString}</strong></span></div>
            <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>`;
    return item;
}