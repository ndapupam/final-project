<!DOCTYPE html>
<html lang="en">

<head>
  <title>Landing Page Baju</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('/public/fonts/icomoon.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href=" {{ asset('/css/vendor.css')}}">
  <!--Bootstrap ================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Syne:wght@600;700;800&display=swap"
    rel="stylesheet">
</head>

<body class="hompage bg-accent-light">

  <header id="header" class=" content-light ">
    <div class="header-wrap container py-3">
      <div class="row align-items-center">
        <div class="primary-nav col-md-5 col-sm-2">
          <nav class="navbar">
            <div class="main-menu">
              <ul class="menu-list  list-unstyled d-flex m-0 ">
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Home </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="index.html">
                        Home version 1</a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="home-v2.html">Home version 2 &nbsp;<span class="badge bg-secondary">pro</span></a></li>
                  </ul>
                </li>
                <li class="menu-itemhome1">
                  <a href="about-us.html" class="text-uppercase item-anchor">About</a>
                </li>
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Shop </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="shop.html">Shop
                        sidebar &nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="single-product.html">Single product &nbsp;<span class="badge bg-secondary">pro</span></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> blog </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="blog.html">blog
                        classic&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="blog-with-sidebar.html">Blog sidebar&nbsp;<span class="badge bg-secondary">pro</span></a>
                    </li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="single-post.html">Single post&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                  </ul>
                </li>
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Pages </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="contact.html">contact&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="cart.html">cart&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="checkout.html">checkout&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="my-account.html">account&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                  </ul>
                </li>
              </ul>
              <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-md-2 col-sm-4 brand-block ">
          <div class="main-logo text-lg-center">
            <a href="index.html" style="font-size: 24px; font-weight:bold">
              {{-- <img src=" {{ asset('/images/main-logo.png')}}" alt="logo" class="brand-image"> --}}
              Nada
            </a>
          </div>
        </div>
        <div class="right-block col-md-5 col-sm-4">
          <nav class="navbar justify-content-end">
            <div class="user-items">
              {{-- <ul class="list-unstyled content-light d-flex align-items-center m-0">
                <li>
                  <i class="icon icon-user"></i>
                  <a href="/login" class="text-uppercase item-anchor">Login</a>
                </li>
                <li>
                  <i class="icon icon-user"></i>
                  <a href="/register" class="text-uppercase item-anchor">Register</a>
                </li>
                <li>
                    <i class="icon icon-user"></i>
                    <a href="/database-baju" class="text-uppercase item-anchor">Database</a>
                  </li>
                {{-- <li class="search-item">
                  <div class="search-bar">
                    <form action="/action_page.php" class="search-form d-flex no-margin">
                      <i class="icon icon-search"></i>
                      <input type="text" placeholder="SEARCH.." name="search"
                        class="title-placeholder no-margin text-light ">
                    </form>
                  </div>
                </li> --}}
                {{-- <li>
                  <a href="#" class="like">
                    <i class="icon icon-like"></i>
                    <span>(0)</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="cart for-buy">
                    <i class="icon icon-shopping-cart"></i>
                    <span>(0)</span>
                  </a>
                </li> --}}
              {{-- </ul> --}}
              <ul class="list-unstyled content-light d-flex align-items-center m-0">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown"><a href="/database-baju">Database Baju</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section id="billboard" class="padding-large no-padding-top position-relative">
    <div class="image-holder">
      <img src="{{ asset('/images/banner-image.jpg')}}" alt="banner" class="banner-image">
    </div>
    <div class="banner-content content-light style1 text-center col-md-6">
      <h2 class="banner-title">
        Make your fashion look swanky.
      </h2>
      <div class="btn-center">
        <a href="#" class="btn btn-medium btn-light">Shop Now</a>
      </div>
    </div>
  </section>
  <section id="company-services">
    <div class="container my-5">
      <div class="row">
        <div class="icon-box-wrapper d-flex flex-wrap justify-content-between">
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-shipping"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Quick delivery</h3>
                <p>Inside City delivery within 5 days</p>
              </div>
            </div>
          </div>
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-store"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Pick up in store</h3>
                <p>We have option of pick up in store.</p>
              </div>
            </div>
          </div>
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-package"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Special packaging</h3>
                <p>Our packaging is best for products.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="fashion-trending" class="product-store padding-large position-relative overflow-hidden">
    <div class="container mb-5">
      <div class="section-header text-center">
        <h2 class="section-title">What’s trending</h2>
        <p>These are the products that are trending now.</p>
      </div>
      <div class="row">
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src=" {{ asset('/images/product-item1.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Orange beanie</a>
                  </h3>
                  <span class="item-price text-primary">$12.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src=" {{ asset('/images/product-item2.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">leather coat</a>
                  </h3>
                  <span class="item-price text-primary">$14.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src=" {{ asset('/images/product-item3.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Oversize shirt</a>
                  </h3>
                  <span class="item-price text-primary">$12.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src=" {{ asset('/images/product-item4.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Flora print dress</a>
                  </h3>
                  <span class="item-price text-primary">$14.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item5.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Green outer</a>
                  </h3>
                  <span class="item-price text-primary">$16.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="btn-center">
          <a href="shop.html" class="btn btn-medium btn-black">Shop All</a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
  <section id="videos">
    <div class="video-item position-relative">
      <div class="video-player">
        <img src="{{ asset('/images/video-item.jpg')}}" alt="video" class="video-image">
        <a href="https://www.youtube.com/embed/rhcjYIPgpt8">
          <i class="icon icon-play"></i>
        </a>
      </div>
    </div>
  </section>
  <section id="testimonials" class="position-relative padding-large">
    <div class="container mt-5">
      <div class="row pt-5">
        <div class="review-content">
          <i class="icon-arrow icon-arrow-left"></i>
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center d-flex justify-content-center">
                <div class="review-item col-md-8">
                  <i class="icon icon-review"></i>
                  <blockquote>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi
                    mattis Pellen tesque pretium feugiat vel morbi suspen dise sagittis lorem habi tasse morbi sagittis
                    loreus oncu enim cursus.”</blockquote>
                  <div class="rating-star">
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star-line"></i>
                  </div>
                  <div class="author-detail">
                    <div class="name text-primary">Emma Chamberlin</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide text-center d-flex justify-content-center">
                <div class="review-item col-md-8">
                  <i class="icon icon-review"></i>
                  <blockquote>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi
                    mattis Pellen tesque pretium feugiat vel morbi suspen dise sagittis lorem habi tasse morbi sagittis
                    loreus oncu enim cursus.”</blockquote>
                  <div class="rating-star">
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star"></i>
                    <i class="icon icon-star-line"></i>
                  </div>
                  <div class="author-detail">
                    <div class="name text-primary">Joey Kimberland</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <i class="icon-arrow icon-arrow-right"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
  <section id="new-arrivals" class="product-store padding-large position-relative overflow-hidden">
    <div class="container mb-5">
      <div class="section-header text-center">
        <h2 class="section-title">New Arrivals</h2>
        <p>These are the products that are new.</p>
      </div>
      <div class="row">
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item5.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn
                          d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Green Outer</a>
                  </h3>
                  <span class="item-price text-primary">$12.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item6.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn
                          d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Dark Flower Onepiece</a>
                  </h3>
                  <span class="item-price text-primary">$14.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item7.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn
                          d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Cloche Men</a>
                  </h3>
                  <span class="item-price text-primary">$12.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item8.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn
                          d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Rawcut Outer</a>
                  </h3>
                  <span class="item-price text-primary">$14.00</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                  <img src="{{ asset('/images/product-item5.jpg')}}" alt="product-item" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                    <button type="button" class="btn btn-light wishlist-btn">
                      <i class="icon icon-like"></i>
                    </button>
                    <button type="button" class="btn btn-light view-btn
                          d-flex">
                      <i class="icon icon-crop"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail text-center">
                  <h3 class="product-title">
                    <a href="#">Green outer</a>
                  </h3>
                  <span class="item-price text-primary">$16.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="btn-center">
          <a href="#" class="btn btn-medium btn-black">Shop All</a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination1"></div>
  </section>
  <section id="categories" class="overflow-hidden">
    <div class="full-width-container d-flex flex-wrap">
      <div class="category-item left-block col-md-6 col-sm-12 no-padding-left position-relative">
        <div class="image-holder">
          <img src="{{ asset('/images/category-item1.jpg')}}" alt="fashion">
        </div>
        <div class="category-content content-light">
          <h3 class="category-title">Summer Outfits</h3>
          <div class="btn-left">
            <a href="#" class="btn btn-medium btn-light">Shop Collections</a>
          </div>
        </div>
      </div>
      <div class="right-block col-md-6 col-sm-12 no-padding-right">
        <div class="category-item top-block position-relative">
          <div class="image-holder">
            <img src="{{ asset('/images/category-item2.jpg')}}" alt="fashion">
          </div>
          <div class="category-content content-light">
            <h3 class="category-title">Guggles</h3>
            <div class="btn-left">
              <a href="#" class="btn btn-medium btn-outline-light">Shop it now</a>
            </div>
          </div>
        </div>
        <div class="category-item bottom-block position-relative">
          <div class="image-holder">
            <img src="{{ asset('/images/category-item3.jpg')}}" alt="fashion">
          </div>
          <div class="category-content content-light">
            <h3 class="category-title">Accessories</h3>
            <div class="btn-left">
              <a href="#" class="btn btn-medium btn-outline-light">Shop it now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="latest-blog" class="padding-large overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="section-title">Recent Blogs</h2>
          <p>Read Our News & articles about updates</p>
        </div>
        <div class="row d-flex flex-wrap">
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="{{ asset('/images/post-item1.jpg')}}" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Best Comfortable Clothes Ideas</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="{{ asset('/images/post-item2.jpg')}}" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Casual Denim Clothing for women</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="{{ asset('/images/post-item3.jpg')}}" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Best Poses for fashion photo</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="btn-center">
          <a href="#" class="btn btn-medium btn-black">Read All</a>
        </div>
      </div>
    </div>
  </section>
  {{-- <section id="brand-collection" class="padding-small border-top border-bottom overflow-hidden my-5">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between align-items-center py-3">
        <div class="col">
          <i class="icon icon-brand-item1"></i>
        </div>
        <div class="col">
          <i class="icon icon-brand-item2"></i>
        </div>
        <div class="col">
          <i class="icon icon-brand-item3"></i>
        </div>
        <div class="col">
          <i class="icon icon-brand-item4"></i>
        </div>
        <div class="col">
          <i class="icon icon-brand-item5"></i>
        </div>
      </div>
    </div>
  </section> --}}
  <section id="instagram" class="padding-large overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="section-title">Shop our insta</h2>
        </div>
        <div class="row d-flex flex-wrap">
          <figure class=" col instagram-item magnific position-relative">
            <a href="#" class="">
              <img src=" {{ asset('/images/product-item4.jpg')}}" alt="instagram" class="insta-image">
              <div class="icon-overlay d-flex justify-content-center">
                <i class="icon icon-instagram1"></i>
              </div>
            </a>
          </figure>
          <figure class=" col instagram-item magnific position-relative">
            <a href="#" class="">
              <img src="{{ asset('/images/insta-item2.JPG')}}" alt="instagram" class="insta-image">
              <div class="icon-overlay d-flex justify-content-center">
                <i class="icon icon-instagram1"></i>
              </div>
            </a>
          </figure>
          <figure class=" col instagram-item magnific position-relative">
            <a href="#" class="">
              <img src="{{ asset('/images/insta-item3.jpg')}}" alt="instagram" class="insta-image">
              <div class="icon-overlay d-flex justify-content-center">
                <i class="icon icon-instagram1"></i>
              </div>
            </a>
          </figure>
          <figure class=" col instagram-item magnific position-relative">
            <a href="#" class="">
              <img src="{{ asset('/images/insta-item4.jpg')}}" alt="instagram" class="insta-image">
              <div class="icon-overlay d-flex justify-content-center">
                <i class="icon icon-instagram1"></i>
              </div>
            </a>
          </figure>
          <figure class=" col instagram-item magnific position-relative">
            <a href="#" class="">
              <img src="{{ asset('/images/insta-item5.jpg')}}" alt="instagram" class="insta-image">
              <div class="icon-overlay d-flex justify-content-center">
                <i class="icon icon-instagram1"></i>
              </div>
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="overflow-hidden">
    <div class="container mt-5">
      <div class="row">
        <div class="footer-top-area">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu menu-001">
                {{-- <img src="{{ asset('/images/dark-logo.png')}}" alt="logo"> --}}<span style="font-size: 24px; font-weight:bold">Nada</span>
                <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat aenean odio
                  erat nullam fringilla.</p>
                <div
                  class="newsletter-button d-flex flex-wrap align-items-center justify-content-between border-bottom widget-menu">
                  <input type="text" name="Subscribe" placeholder="Enter your email address...">
                  <a href="#">
                    <i class="icon icon-send"></i>
                  </a>
                </div>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-instagram1"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-menu menu-002">
                <h5 class="widget-title">Quick Links</h5>
                <ul class="menu-list list-unstyled text-uppercase">
                  <li class="menu-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">About</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Shop</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Blogs</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu text-uppercase menu-003">
                <h5 class="widget-title">Help & Info</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="#">Track Your Order</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns Policies</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Shipping + Delivery</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Contact Us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Faqs</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu contact-item menu-004">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any queries or suggestions? <a href="mailto:">nadaputripambudi95@gmail.com</a>
                </p>
                <p>If you need support? Just give us a call. <a href="">+62 822 2889 8009</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </footer>
  <div id="footer-bottom">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between mb-3">
        <div class="col-md-4 col-sm-6">
          <div class="Shipping d-flex">
            <p>We ship with:</p>
            <div class="card-wrap">
              <img src=" {{ asset('/images/dhl.png')}}" alt="visa">
              <img src="{{ asset('/images/shippingcard.png')}}" alt="mastercard">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="payment-method d-flex justify-content-md-center">
            <p>Payment options:</p>
            <div class="card-wrap">
              <img src="{{ asset('/images/visa.jpg')}}" alt="visa">
              <img src="{{ asset('/images/mastercard.jpg')}}" alt="mastercard">
              <img src="{{ asset('/images/paypal.jpg')}}" alt="paypal">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="copyright text-md-end">
            {{-- <p>Freebies by <a href="https://templatesjungle.com/"> <u>Templates Jungle</u><br> </a> Distributed by <a href="https://themewagon.com"> <u>ThemeWagon</u></a>
            </p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- script ================================================== -->
  <script src=" {{ asset('/js/jquery-1.11.0.min.js')}}"></script>
  <script src=" {{ asset('/js/plugins.js')}}"></script>
  <script src="{{ asset('/js/script.js  ')}}"></script>

  <!-- Bootstarp script ================================================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


</body>

</html>
