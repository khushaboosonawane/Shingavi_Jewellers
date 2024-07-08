<?php
defined("BASEPATH") or exit("no direct script access allowed");
?>

<main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://i.pinimg.com/474x/da/5e/3f/da5e3f4b42c0312e1d3a3bd9e8338277.jpg');height:45rem;background-size:cover;background-repeat:no-repeat;background-position:center center">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Wishlist</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="<?= base_url() ?>usercontroller/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Wishlist</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container">
                <div class="cart__section--inner">
                    <form action="#"> 
                        <h2 class="cart__title mb-40">Wishlist</h2>
                        <div class="cart__table">
                            <table class="cart__table--inner">
                                <thead class="cart__table--header">
                                    <tr class="cart__table--header__items">
                                        <th class="cart__table--header__list">Product</th>
                                        <th class="cart__table--header__list">Price</th>
                                        <th class="cart__table--header__list text-center">STOCK STATUS</th>
                                        <th class="cart__table--header__list text-right">ADD TO CART</th>
                                    </tr>
                                </thead>
                                <tbody class="cart__table--body">
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="cart__product d-flex align-items-center">
                                                <button class="cart__remove--btn" aria-label="search button" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                </button>
                                                <div class="cart__thumbnail">
                                                    <a href="product-details.html">
                                                        <img class="border-radius-5" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13403918/2021/2/12/8ef7233f-07d1-4792-89b7-8e1290c82ef01613143774160-Rubans-Set-Of-2-24K-Gold-Plated--Red-Stone-Studded-Handcraft-5.jpg" alt="cart-product">
                                                    </a>
                                                </div>
                                                <div class="cart__content">
                                                    <h4 class="cart__content--title"><a href="product-details.html">Bangales</a></h4>
                                                    <span class="cart__content--variant">CATEGORY : Gold</span>
                                                    <span class="cart__content--variant">WEIGHT: 2 Kg</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">&#8377; 50,000</span>
                                        </td>
                                        <td class="cart__table--body__list text-center">
                                            <span class="in__stock text__secondary">in stock</span>
                                        </td>
                                        <td class="cart__table--body__list text-right">
                                            <a class="wishlist__cart--btn primary__btn" href="<?= base_url() ?>usercontroller/add_cart">Add To Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="cart__product d-flex align-items-center">
                                                <button class="cart__remove--btn" aria-label="search button" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                </button>
                                                <div class="cart__thumbnail">
                                                    <a href="product-details.html"><img class="border-radius-5" src="https://www.wamanharipethesons.com/portalrepository/images/productsku/WHPS288755_0_r.jpg" alt="cart-product"></a>
                                                </div>
                                                <div class="cart__content">
                                                    <h4 class="cart__content--title"><a href="product-details.html">Vegetable-healthy</a></h4>
                                                    <span class="cart__content--variant">COLOR: Blue</span>
                                                    <span class="cart__content--variant">WEIGHT: 2 Kg</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">£65.00</span>
                                        </td>
                                        <td class="cart__table--body__list text-center">
                                            <span class="in__stock text__secondary">in stock</span>
                                        </td>
                                        <td class="cart__table--body__list text-right">
                                            <a class="wishlist__cart--btn primary__btn" href="cart.html">Add To Cart</a>
                                        </td>
                                    </tr>
                                 
                                </tbody>
                            </table> 
                           
                        </div> 
                    </form> 
                </div>
            </div>     
        </section>
        <!-- cart section end -->

         <!-- Start shipping section -->
         <section class="shipping__section2 shipping__style3 section--padding pt-0">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Follow Us On</h2>
                            <p class="shipping__items2--content__desc">Stay Connect With Us</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <a href="">
                                <i class="ri-whatsapp-line" style="color:#ffaa5f;font-size:45px;font-weight:normal"></i>
                            </a>
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Whatsapp</h2>
                            <p class="shipping__items2--content__desc">Connect with us on whatsapp</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <a href="">
                            <i class="ri-instagram-line" style="color:#ffaa5f;font-size:45px;font-weight:normal"></i>
                            </a>
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Instagram</h2>
                            <p class="shipping__items2--content__desc">Connect with us on instagram</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <a href="">
                            <i class="ri-facebook-line" style="color:#ffaa5f;font-size:45px;font-weight:normal"></i>
                            </a>
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Facebook</h2>
                            <p class="shipping__items2--content__desc">Connect with us on facebook</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End shipping section -->
    </main>