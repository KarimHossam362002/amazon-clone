@extends('layout.app')
@section('title', 'Amazon.com Spend less. Smile more.')
@section('styles')
  <link rel="stylesheet" href="{{asset("assets/css/carsoul_style.css")}}" />
  {{--
  <link rel="stylesheet" href="{{ asset('assets/css/libs/animate.css') }}"> --}}
@endsection
@section('content')
  <main>
    <!-- Start Image Slider -->
    <div class="slider-container">
      <div class="slider" id="slider">
        <img src="{{asset("assets/img/Slider.jpg")}}" alt="Slide 1" />
        <img src="{{asset("assets/img/Slider.jpg")}}" alt="Slide 2" />
        <img src="{{asset("assets/img/Slider.jpg")}}" alt="Slide 3" />
      </div>
      <button class="prev" onclick="prevSlide()">
        <i class="fas fa-arrow-left"></i>
      </button>
      <button class="next" onclick="nextSlide()">
        <i class="fas fa-arrow-right"></i>
      </button>
    </div>
    <!-- End Image Slider -->

    <!-- Start Card section 1 -->
    <section class="card-row-container">
      <div class="card card-full wow fadeInDown">
        <h2>Get your game on</h2>
        <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Gaming setup" />
        <a href="#" class="link">Shop gaming</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Shop for home essentials</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
    </section>
    <!-- End Card section 1 -->

    <!-- Start Card section 2 -->
    <section class="card-row-container">
      <div class="card card-full">
        <h2>Get your game on</h2>
        <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Gaming setup" />
        <a href="#" class="link">Shop gaming</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Shop for home essentials</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
    </section>
    <!-- End Card section 2 -->
    <!-- ///////////// START CAROUSEL 1 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">Related to items you've viewed</h3>
      <a href="#" class="carousel-anchor">See more</a>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel1">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 1 /////////// -->
    <!-- ///////////// START CAROUSEL 2 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">Top picks for Egypt</h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel2">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 2 /////////// -->
    <!-- Start Card section 3 -->
    <section class="card-row-container">
      <div class="card card-full">
        <h2>Get your game on</h2>
        <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Gaming setup" />
        <a href="#" class="link">Shop gaming</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Shop for home essentials</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
    </section>
    <!-- End Card section 3 -->
    <!-- ///////////// START CAROUSEL 3 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">
        Best Sellers in Clothing, Shoes & Jewelry
      </h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel3">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 3 /////////// -->

    <!-- Start Card section 4 -->
    <section class="card-row-container">
      <div class="card card-full">
        <h2>Get your game on</h2>
        <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Gaming setup" />
        <a href="#" class="link">Shop gaming</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Shop for home essentials</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
    </section>
    <!-- End Card section 4 -->
    <!-- ///////////// START CAROUSEL 4 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">Best Sellers in Sports & Outdoors</h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel3">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 4 /////////// -->
    <!-- ///////////// START CAROUSEL 5 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">Best Sellers in Computers & Accessories</h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel3">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 5 /////////// -->

    <!-- Start Card section 5 -->
    <section class="card-row-container">
      <div class="card card-full">
        <h2>Get your game on</h2>
        <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Gaming setup" />
        <a href="#" class="link">Shop gaming</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/fashions/fashion_trend_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Shop for home essentials</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_1.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_2.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_3.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/home essentials/home_essentials_4.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
      <div class="card card-group">
        <div class="card-title">Fashion trends you like</div>
        <div class="grid-images">
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Dress" />
            <span>Dresses</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Knit" />
            <span>Knits</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jacket" />
            <span>Jackets</span>
          </div>
          <div class="image-box">
            <img src="{{asset("assets/img/Card1_image.jpg")}}" alt="Jewelry" />
            <span>Jewelry</span>
          </div>
        </div>
        <a href="#" class="link">Explore more</a>
      </div>
    </section>
    <!-- End Card section 5 -->

    <!-- ///////////// START CAROUSEL 6 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">Best Sellers in Books</h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel3">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 6 /////////// -->

    <!-- ///////////// START CAROUSEL 7 /////////// -->
    <div class="carousel-container">
      <h3 class="carousel-title">
        Customers who viewed items in your browsing history also viewed
      </h3>
      <hr class="divider" />

      <div class="carousel-wrapper">
        <button class="carousel-arrow left">&#10094;</button>

        <div class="carousel" id="carousel3">
          <!-- Product 1 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Paw Patrol World"
              class="product-image" />
            <div class="product-title">
              Paw Patrol World - Nintendo Switch
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 481</div>
            <div class="product-views">2K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$18.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 2 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Trolls Remix Rescue"
              class="product-image" />
            <div class="product-title">
              Trolls Remix Rescue - Nintendo Switch
            </div>
            <div class="product-publisher">Game Mill</div>
            <div class="product-rating">★★★★★ 471</div>
            <div class="product-views">4K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.87</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.18 shipping</div>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Barbie Dreamhouse Adventures"
              class="product-image" />
            <div class="product-title">
              Barbie Dreamhouse Adventures - Nintendo...
            </div>
            <div class="product-publisher">Nighthawk Interactive</div>
            <div class="product-rating">★★★★★ 888</div>
            <div class="product-views">5K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$19.99</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 8
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 4 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="TMNT Mutants Unleashed"
              class="product-image" />
            <div class="product-title">
              TMNT Mutants Unleashed - Standard Edition
            </div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 421</div>
            <div class="product-views">20K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$28.88</div>
            <div class="delivery-info">Get it as soon as Thursday, Aug 7</div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 5 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Bluey: The Videogame"
              class="product-image" />
            <div class="product-title">Bluey: The Videogame</div>
            <div class="product-publisher">Outright Games</div>
            <div class="product-rating">★★★★★ 975</div>
            <div class="product-views">30K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$35.45</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>

          <!-- Product 6 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="Sonic Superstars"
              class="product-image" />
            <div class="product-title">
              Sonic Superstars - Nintendo Switch
            </div>
            <div class="product-publisher">SEGA</div>
            <div class="product-rating">★★★★★ 4018</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$24.72</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.09 shipping</div>
          </div>

          <!-- Product 7 -->
          <div class="product-card">
            <img src="{{asset("assets/img/carsoul-products/carsoul_image_1.jpg")}}" alt="PAW Patrol Mission Impawsible"
              class="product-image" />
            <div class="product-title">
              PAW Patrol Mission Impawsible - Nintendo Switch
            </div>
            <div class="product-publisher">Mindscape</div>
            <div class="product-rating">★★★★★ 584</div>
            <div class="product-views">10K+ viewed in past month</div>
            <div class="product-platform">Nintendo Switch</div>
            <div class="product-price">$27.63</div>
            <div class="delivery-info">
              Get it as soon as Wednesday, Aug 6
            </div>
            <div class="shipping-cost">$12.00 shipping</div>
          </div>
        </div>

        <button class="carousel-arrow right">&#10095;</button>
      </div>
    </div>
    <!-- ///////////// END CAROUSEL 7 /////////// -->

    <div class="recommendation-section">
      <p>See personalized recommendations</p>
      <a href="{{ route("login") }}"> <button class="sign-in-button">Sign in</button></a>
      <span class="new-customer">New customer? <a class="start-here" href="{{ route("signup") }}">Start here.</a></span>
    </div>
  </main>
@endsection