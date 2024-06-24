<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ninico - Minimal eCommerce HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/img/logo/favicon')}}'">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
</head>

<body>

   <!-- preloader -->
   <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
   <!-- preloader end  -->

   <!-- Scroll-top -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>
   <!-- Scroll-top-end-->

   <!-- header-area-start -->
   @include('layouts.front.nav')
  <!-- end header area
   <!-- sidebar-menu-area -->
   <div class="tpsideinfo">
      <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
      <div class="tpsideinfo__search text-center pt-35">
         <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
         <form action="#">
            <input type="text" placeholder="Search Products...">
            <button><i class="fal fa-search"></i></button>
         </form>
      </div>
      <div class="tpsideinfo__nabtab">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                  type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                  type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
            </li>
         </ul>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
               tabindex="0">
               <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
               tabindex="0">
               <div class="tpsidebar-categories">
                  <ul>
                     <li><a href="shop.html">Furniture</a></li>
                     <li><a href="shop.html">Wooden</a></li>
                     <li><a href="shop.html">Lifestyle</a></li>
                     <li><a href="shop-2.html">Shopping</a></li>
                     <li><a href="track.html">Track Product</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="tpsideinfo__account-link">
         <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
      </div>
      <div class="tpsideinfo__wishlist-link">
         <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- sidebar-menu-area-end -->

   <!-- header-cart-start -->
   <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="{{asset('front/assets/img/product/home-one/product-1.jpg')}}" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Miko Wooden Bluetooth
                                 Speaker</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$162.80</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="{{asset('front/assets/img/product/home-one/product-3.jpg')}}" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Evo Lightweight Granite
                                 Shirt</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$138.00</span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"> $300.00</span>
               </div>
               <div class="tpcart__checkout-btn">
                  <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                  <a class="tpcheck-btn" href="checkout.html">Checkout</a>
               </div>
            </div>
         </div>
         <div class="tpcart__free-shipping text-center">
            <span>Free shipping for orders <b>under 10km</b></span>
         </div>
      </div>
   </div>
   <div class="cartbody-overlay"></div>
   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>
    @yield('content')
   </main>
   <!-- main-area-end -->

   <!-- footer-area-start -->
   @include('layouts.front.footer')

   <!-- footer-area-end -->



   <!-- JS here -->
   <script src="{{asset('front/assets/js/jquery.js')}}"></script>
   <script src="{{asset('front/assets/js/waypoints.js')}}"></script>
   <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('front/assets/js/swiper-bundle.js')}}"></script>
   <script src="{{asset('front/assets/js/slick.js')}}"></script>
   <script src="{{asset('front/assets/js/magnific-popup.js')}}"></script>
   <script src="{{asset('front/assets/js/nice-select.js')}}"></script>
   <script src="{{asset('front/assets/js/counterup.js')}}"></script>
   <script src="{{asset('front/assets/js/wow.js')}}"></script>
   <script src="{{asset('front/assets/js/isotope-pkgd.js')}}"></script>
   <script src="{{asset('front/assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset('front/assets/js/countdown.js')}}"></script>
   <script src="{{asset('front/assets/js/ajax-form.js')}}"></script>
   <script src="{{asset('front/assets/js/meanmenu.js')}}"></script>
   <script src="{{asset('front/assets/js/jquery.knob.js')}}"></script>
   <script src="{{asset('front/assets/js/main.js')}}"></script>
</body>

</html>


