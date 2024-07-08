<?php
defined("BASEPATH") or exit("no dierct script access allowed");
?>

<main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://www.tanishq.co.in/dw/image/v2/BKCK_PRD/on/demandware.static/-/Sites-Tanishq-product-catalog/default/dwb6ad5be7/images/hi-res/554922SHZAAE09_1.jpg?sw=640&sh=640');background-repeat:no-repeat;background-size:cover;background-position:center center;object-fit:cover;height:50rem">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Shopping Cart</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Shopping Cart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                    <form action="#"> 
                        <h2 class="cart__title mb-40">Shopping Cart</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart__table">
                                    <table class="cart__table--inner">
                                        <thead class="cart__table--header">
                                            <tr class="cart__table--header__items">
                                                <th class="cart__table--header__list">Product</th>
                                                <th class="cart__table--header__list">Price</th>
                                                <th class="cart__table--header__list">Quantity</th>
                                                <th class="cart__table--header__list">Total</th>
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
                                                            <a href="product-details.html"><img class="border-radius-5" src="https://miro.medium.com/v2/resize:fit:600/1*ZjZJkwW6BE-5lxk_U-NTpA.jpeg" alt="cart-product"></a>
                                                        </div>
                                                        <div class="cart__content">
                                                            <h4 class="cart__content--title"><a href="product-details.html">Earings</a></h4>
                                                            <span class="cart__content--variant">COLOR: Blue</span>
                                                            <span class="cart__content--variant">WEIGHT: 2 Kg</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price">&#8377; 56,000</span>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <div class="quantity__box">
                                                        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                        <label>
                                                            <input type="number" class="quantity__number quickview__value--number" value="1" data-counter/>
                                                        </label>
                                                        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price end">&#8377; 56,000</span>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table> 
                                    <div class="continue__shopping d-flex justify-content-between">
                                        <a class="continue__shopping--link" href="shop.html">Continue shopping</a>
                                        <button class="continue__shopping--clear" type="submit">Clear Cart</button>
                                    </div>
                                </div>
                            </div>
                         
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
