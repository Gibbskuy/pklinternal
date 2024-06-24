@extends('layouts.front')
@section('content')
       <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="front/assets/img/banner/breadcrumb-01.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="index.html">Home</a></span>
                        <span>Shop</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Shop Grid</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- product-filter-area-start -->
      <div class="product-filter-area pt-65 pb-80">
         <div class="container">
            <div class="product-filter-content mb-40">
               <div class="row align-items-center">
                  <div class="col-sm-6">
                     <div class="product-item-count">
                        <span><b>112</b> Item On List</span>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="product-navtabs d-flex justify-content-end align-items-center">
                        <div class="tp-shop-selector">
                           <select>
                              <option>Show 12</option>
                              <option>Show 14</option>
                              <option>Show 08</option>
                              <option>Show 20</option>
                           </select>
                        </div>
                        <div class="tpproductnav tpnavbar product-filter-nav">
                           <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                    aria-selected="true"><i class="fal fa-list-ul"></i></button>

                                 <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                    aria-selected="false"><i class="fal fa-th"></i></button>
                              </div>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mb-50">
               <div class="col-lg-12">
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details.html">
                                       <img src="front/assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-22.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Miko Wooden Bluetooth Shirt</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details-2.html">
                                       <img src="front/assets/img/product/home-two/product-23.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-24.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Gorgeous Aluminum Table</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="shop-details-2.html">
                                       <img src="front/assets/img/product/home-two/product-25.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-26.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-40">
                           <div class="col-lg-4 col-md-12">
                              <div class="tpproduct__thumb">
                                 <div class="tpproduct__thumbitem p-relative">
                                    <a href="#">
                                       <img src="front/assets/img/product/home-two/product-27.jpg" alt="product-thumb">
                                       <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-28.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-12">
                              <div class="filter-product ml-20 pt-30">
                                 <h3 class="filter-product-title"><a href="shop-details.html">Progash Durable Granite Hat</a></h3>
                                 <div class="tpproduct__ammount">
                                    <span>$31.00</span>
                                    <del>$25.00</del>
                                 </div>
                                 <div class="tpproduct__rating mb-15">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="fas fa-star"></i></a>
                                          <a href="#"><i class="far fa-star"></i></a>
                                       </li>
                                       <li>
                                          <span>(81)</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                 <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                 <div class="tpproduct__action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show active" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                        <div
                           class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-22.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Purab Enormous Miranda Bottle</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-31.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-32.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Pinkol Enormous Granite Bottle</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-27.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-28.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Gorgeous Aluminum Table</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-25.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-26.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-29.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-30.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">CLCo. Incredible Paper Car</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-33.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-34.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Purab Enormous Miranda Bottle</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-23.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-24.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Progash Durable Granite Hat</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-35.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-36.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Miklonda Co. Crafted Candles</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-37.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-38.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Purab Enormous Miranda Bottle</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="tpproduct tpproductitem mb-15 p-relative">
                                 <div class="tpproduct__thumb">
                                    <div class="tpproduct__thumbitem p-relative">
                                       <a href="shop-details-2.html">
                                          <img src="front/assets/img/product/home-two/product-39.jpg" alt="product-thumb">
                                          <img class="thumbitem-secondary" src="front/assets/img/product/home-two/product-40.jpg" alt="product-thumb">
                                       </a>
                                       <div class="tpproduct__thumb-bg">
                                          <div class="tpproductactionbg">
                                             <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                             <a href="#"><i class="fal fa-exchange"></i></a>
                                             <a href="#"><i class="fal fa-eye"></i></a>
                                             <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__content-area">
                                    <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Pinkol Enormous Granite Bottle</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__ammount">
                                          <span>$31.00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tpproduct__ratingarea">
                                    <div class="d-flex align-items-center justify-content-between">
                                       <div class="tpproductdot">
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg"></span>
                                                <span class="tpproductdot__termshape-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                <span class="tpproductdot__termshape-border red-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                <span class="tpproductdot__termshape-border orange-product-border"></span>
                                             </div>
                                          </a>
                                          <a class="tpproductdot__variationitem" href="shop-details.html">
                                             <div class="tpproductdot__termshape">
                                                <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                <span class="tpproductdot__termshape-border purple-product-border"></span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="tpproduct__rating">
                                          <ul>
                                             <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                             </li>
                                             <li>
                                                <span>(81)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="basic-pagination text-center">
                     <nav>
                        <ul>
                           <li>
                              <a href="shop.html">
                                 <i class="fal fa-long-arrow-left"></i>
                              </a>
                           </li>
                           <li>
                              <a href="shop.html">01</a>
                           </li>
                           <li>
                              <span class="current">02</span>
                           </li>
                           <li>
                              <a href="shop.html">- - -</a>
                           </li>
                           <li>
                              <a href="shop.html">07</a>
                           </li>
                           <li>
                              <a href="shop.html">08</a>
                           </li>
                           <li>
                              <a href="shop.html">
                                 <i class="fal fa-long-arrow-right"></i>
                              </a>
                           </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
          </div>
      </div>
      <!-- product-filter-area-end -->
@endsection

