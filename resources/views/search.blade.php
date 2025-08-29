@extends('layout.app')
@section('title', 'Amazon.com | Search Results')
@section('styles')
    <link rel="stylesheet" href="{{asset("assets/css/search_style.css")}}" />
@endsection

@section('content')
    <div class="container">
        <div class="sidebar">
            <label><strong>Fulfilled by Amazon <br></strong><input type="checkbox"> Fulfilled by Amazon</label><br>
            <br>
            <label><strong>Eligible for Free Shipping <br></strong><input type="checkbox"> Free Shipping <br>All customers
                get FREE Shipping on orders shipped by Amazon</label><br>
            <br>
            <label><strong>Delivery Day <br></strong><input type="checkbox"> Get it by Tomorrow</label><br>
            <br>
            <h3 style="margin-top: 0px;margin-bottom: 10px;">Category</h3>
            <label><input type="checkbox">Electronics</label><br>
            <label><input type="checkbox">Fashion & Clothing</label><br>
            <label><input type="checkbox">Beauty & Personal Care</label><br>
            <label><input type="checkbox">Home & Kitchen</label><br>
            <label><input type="checkbox">Books & Audible</label><br>
            <label><input type="checkbox">Sports & Outdoors</label><br>
            <label><input type="checkbox">Toys & Games</label><br>
            <label><input type="checkbox">Health & Household</label><br>
            <h3 style="margin-bottom: 10px;">Price</h3>
            <label><input type="checkbox">Under 500 EGP</label><br>
            <label><input type="checkbox">500 EGP – 1,000 EGP</label><br>
            <label><input type="checkbox">1,000 EGP – 5,000 EGP</label><br>
            <label><input type="checkbox">5,000 EGP – 10,000 EGP</label><br>
            <label><input type="checkbox">10,000 EGP & Above</label><br>
            <button style="font-weight: bold;">Submit</button>
        </div>
        <div class="main-content">
            <h2 style="margin-top: 0px;">Results</h2>
            <p>Check each product page for other buying options.</p>
            <div class="product-container">
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
                <div class="product">
                    <img src="#">
                    <h3>Product </h3>
                    <p>MacBooK Air 13" M3/8C CPU/8C GPU/8GB/256GB/Space Gray</p>
                    <p class="price">EGP 10</p>
                    <p>FREE delivery <strong>Tomorrow, 29 Aug</strong></p>
                    <p class="stock">Only 2 left in stock - order soon.</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="pagination">
                <a href="#">&laquo; Prev</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">Next &raquo;</a>
            </div>
        </div>
    </div>

    <div class="recommendation-section">
      <p>See personalized recommendations</p>
      <button class="sign-in-button">Sign in</button>
      <span class="new-customer">New customer? <a class="start-here" href="#">Start here.</a></span>
    </div>
@endsection