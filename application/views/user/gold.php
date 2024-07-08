<?php
defined("BASEPATH") or exit("no direct script access allowed");
?>
 <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://retailjewellerindia.com/wp-content/uploads/2020/01/3t8a7815-2.jpg');height:50rem">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Gold Products</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Gold Products</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start shop section -->
        <section class="shop__section section--padding">
            <div class="container-fluid">
                <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                    <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                        <svg  class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/><circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/></svg> 
                        <span class="widget__filter--btn__text">Filter</span>
                    </button>
                    <div class="product__view--mode d-flex align-items-center">
                        <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                            <label class="product__view--label">Prev Page :</label>
                            <div class="select shop__header--select">
                                <select class="product__view--select">
                                    <option selected value="1">65</option>
                                    <option value="2">40</option>
                                    <option value="3">42</option>
                                    <option value="4">57 </option>
                                    <option value="5">60 </option>
                                </select>
                            </div>
                        </div>
                        <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                            <label class="product__view--label">Sort By :</label>
                            <div class="select shop__header--select">
                                <select class="product__view--select">
                                    <option selected value="1">Sort by latest</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by  rating </option>
                                </select>
                            </div>
                        </div>
                        <div class="product__view--mode__list">
                            <div class="product__grid--column__buttons d-flex justify-content-center">
                                <button class="product__grid--column__buttons--icons active" aria-label="product grid button" data-toggle="tab" data-target="#product_grid">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                        <g  transform="translate(-1360 -479)">
                                          <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                          <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                          <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                          <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                        </g>
                                      </svg>
                                </button>
                                <button class="product__grid--column__buttons--icons" aria-label="product list button" data-toggle="tab" data-target="#product_list">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                        <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                          <g  transform="translate(12 -2)">
                                            <g id="Group_1326" data-name="Group 1326">
                                              <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                              <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                            </g>
                                            <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                              <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                              <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                            </g>
                                            <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                              <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                              <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                            </g>
                                          </g>
                                        </g>
                                      </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product__view--mode__list product__view--search d-none d-lg-block">
                            <form class="product__view--search__form" action="#">
                                <label>
                                    <input class="product__view--search__input border-0" placeholder="Search by" type="text">
                                </label>
                                <button class="product__view--search__btn" aria-label="shop button"  type="submit">
                                    <svg class="product__view--search__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  
                                </button>
                            </form>
                        </div>
                    </div>
                    <p class="product__showing--count">Showing 1–9 of 21 results</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">Gold Products</h2>
                                <ul class="widget__categories--menu">
                                    <li class="widget__categories--menu__list">
                                        <a href="<?= base_url() ?>usercontroller/bangales">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://i.pinimg.com/736x/7d/7f/a4/7d7fa494248afd1948224c3d2ae7b76f.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Bangales</span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <a href="<?= base_url() ?>usercontroller/fingure_ring">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVbhFmvckiJwt9py8rH45CEylaYedAiY_GVw&s" alt="categories-img">
                                            <span class="widget__categories--menu__text">Fingure Ring</span>
                                           
                                        </label>
                                        </a>
                                        
                                    </li>
                                    <li class="widget__categories--menu__list">
                                       <a href="<?= base_url() ?>usercontroller/chain">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://www.chidambaramcovering.com/image/cache/catalog/Chain/chn238-lg-30-inches-long-one-gram-gold-daily-wear-broad-gold-chain-for-men-1-850x1000.jpg.webp" alt="categories-img">
                                                <span class="widget__categories--menu__text">Chain</span>
                                                
                                            </label>
                                       </a>
                                        
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://images.meesho.com/images/products/170222028/v4ibk_512.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Chain Pendents</span>
                                                
                                            </label>
                                        </a>  
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://i.pinimg.com/236x/df/dd/59/dfdd59148d139c3863d138cad6c2186c.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Necklace</span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://i.pinimg.com/474x/21/dd/9d/21dd9dc43bb776a7d3fb9d42853b8f83.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Mangalsutra</span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://i.pinimg.com/474x/21/dd/9d/21dd9dc43bb776a7d3fb9d42853b8f83.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Mangalsutra</span>
                                            </label>
                                        </a>
                                    </li><li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://m.media-amazon.com/images/I/71DH2trx07L._AC_UY1100_.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Nath</span>
                                            </label>
                                        </a>
                                    </li>
                                    </li><li class="widget__categories--menu__list">
                                        <a href="">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="https://www.coinbazaar.in/40484-medium_default/kundan-edward-king-gold-coin-of-8-grams-in-24-karat-9999-purity-fineness.jpg" alt="categories-img">
                                                <span class="widget__categories--menu__text">Coin</span>
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                         
                            <div class="single__widget price__filter widget__bg">
                                <h2 class="widget__title h3">Filter By Price</h2>
                                <form class="price__filter--form" action="#"> 
                                    <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                                        <div class="price__filter--group">
                                            <label class="price__filter--label" for="Filter-Price-GTE2">From</label>
                                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                                <span class="price__filter--currency">$</span>
                                                <label>
                                                    <input class="price__filter--input__field border-0" name="filter.v.price.gte" type="number" placeholder="0" min="0" max="250.00">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="price__divider">
                                            <span>-</span>
                                        </div>
                                        <div class="price__filter--group">
                                            <label class="price__filter--label" for="Filter-Price-LTE2">To</label>
                                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                                <span class="price__filter--currency">$</span>
                                                <label>
                                                    <input class="price__filter--input__field border-0" name="filter.v.price.lte" type="number" min="0" placeholder="250.00" max="250.00"> 
                                                </label>
                                            </div>	
                                        </div>
                                    </div>
                                    <button class="price__filter--btn primary__btn" type="submit">Filter</button>
                                </form>
                            </div>
                           
                           
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop__product--wrapper">
                            <div class="tab_content">
                                <div id="product_grid" class="tab_pane active show">
                                    <div class="product__section--inner product__grid--inner">
                                        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">
                                            <div class="col mb-30">
                                                <div class="product__items ">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://i.pinimg.com/236x/df/dd/59/dfdd59148d139c3863d138cad6c2186c.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://i.pinimg.com/236x/df/dd/59/dfdd59148d139c3863d138cad6c2186c.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 56,780</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items ">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://t4.ftcdn.net/jpg/05/79/13/69/360_F_579136942_Bj9ReQ4A7CDNZaWU03vkrHeiHzBeXILe.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://t4.ftcdn.net/jpg/05/79/13/69/360_F_579136942_Bj9ReQ4A7CDNZaWU03vkrHeiHzBeXILe.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 1,50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://i.pinimg.com/736x/fd/93/20/fd93207d90d6df6f6457f0f6ef9f77e3.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://i.pinimg.com/736x/fd/93/20/fd93207d90d6df6f6457f0f6ef9f77e3.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Necklace</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/1gram-gold-chakor-2025225842-fpaqcmwl.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/1gram-gold-chakor-2025225842-fpaqcmwl.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Necklace</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/28494682/2024/3/26/306a76b4-4235-41ff-a994-739b31ed1c761711428568801Bangle1.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/28494682/2024/3/26/306a76b4-4235-41ff-a994-739b31ed1c761711428568801Bangle1.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Gold Bangales Design</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20230502/gd0i/6450e50a42f9e729d75f6e57/-473Wx593H-466115756-gold-MODEL.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20230502/gd0i/6450e50a42f9e729d75f6e57/-473Wx593H-466115756-gold-MODEL.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Bangales</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 2,50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20230420/hwG9/64413792907deb497af64ef6/-473Wx593H-466079560-gold-MODEL.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20230420/hwG9/64413792907deb497af64ef6/-473Wx593H-466079560-gold-MODEL.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Bangales</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 46,567</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20231223/Vo8s/6585f330afa4cf41f5e4dfef/-473Wx593H-466907890-gold-MODEL.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20231223/Vo8s/6585f330afa4cf41f5e4dfef/-473Wx593H-466907890-gold-MODEL.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Bangales</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 45,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://pngadgilandsons.com/wp-content/uploads/2015/01/nath-big.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://pngadgilandsons.com/wp-content/uploads/2015/01/nath-big.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Nath</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 4,500</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://aadyaa.com/cdn/shop/products/DSC02157.jpg?v=1707396188&width=1024" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://aadyaa.com/cdn/shop/products/DSC02157.jpg?v=1707396188&width=1024" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Nath</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 5,467</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/-5upo0erz.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/-5upo0erz.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Nath</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 2,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://wovensouls.com/cdn/shop/products/1122-old-gold-nath-indian-bride-nosering-jewelry.jpg?v=1633072332" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://wovensouls.com/cdn/shop/products/1122-old-gold-nath-indian-bride-nosering-jewelry.jpg?v=1633072332" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Nath</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 45,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/peacock-design-gold-mangalsutra-pendant-2184594664-xra64c87.jpg" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/peacock-design-gold-mangalsutra-pendant-2184594664-xra64c87.jpg" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Mangalsutre</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 4,50,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://www.sanvijewels.com/cdn/shop/products/original1.3743142.1.jpg?v=1603433759" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://www.sanvijewels.com/cdn/shop/products/original1.3743142.1.jpg?v=1603433759" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Mangalsutre</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 67,098</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://rukminim2.flixcart.com/image/850/1000/k4yhtow0/mangalsutra-tanmaniya/g/a/p/rnms6698-rn-original-imafnqrz9rqyr4qd.jpeg?q=90&crop=false" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://rukminim2.flixcart.com/image/850/1000/k4yhtow0/mangalsutra-tanmaniya/g/a/p/rnms6698-rn-original-imafnqrz9rqyr4qd.jpeg?q=90&crop=false" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h4 class="product__items--content__title"><a href="product-details.html">Mangalsutre</a></h4>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 67,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items">
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://rukminim2.flixcart.com/image/850/1000/xif0q/mangalsutra-tanmaniya/t/9/g/imitation-gold-plated-mangalsutra-for-women-axawa-original-imagdebgyt3agusq.jpeg?q=90&crop=false" alt="product-img">
                                                            <img class="product__items--img product__secondary--img" src="https://rukminim2.flixcart.com/image/850/1000/xif0q/mangalsutra-tanmaniya/t/9/g/imitation-gold-plated-mangalsutra-for-women-axawa-original-imagdebgyt3agusq.jpeg?q=90&crop=false" alt="product-img">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__items--content">
                                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Mangalsutre</a></h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">&#8377; 45,000</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="product_list" class="tab_pane">
                                    <div class="product__section--inner">
                                        <div class="row row-cols-1 mb--n30">
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://etimg.etb2bimg.com/thumb/msid-105058534,width-1200,resizemode-4/.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://etimg.etb2bimg.com/thumb/msid-105058534,width-1200,resizemode-4/.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  67,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Nath</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://t4.ftcdn.net/jpg/05/79/13/69/360_F_579136942_Bj9ReQ4A7CDNZaWU03vkrHeiHzBeXILe.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://t4.ftcdn.net/jpg/05/79/13/69/360_F_579136942_Bj9ReQ4A7CDNZaWU03vkrHeiHzBeXILe.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://i.pinimg.com/736x/fd/93/20/fd93207d90d6df6f6457f0f6ef9f77e3.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://i.pinimg.com/736x/fd/93/20/fd93207d90d6df6f6457f0f6ef9f77e3.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/1gram-gold-chakor-2025225842-fpaqcmwl.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://images.jdmagicbox.com/quickquotes/images_main/1gram-gold-chakor-2025225842-fpaqcmwl.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/28494682/2024/3/26/306a76b4-4235-41ff-a994-739b31ed1c761711428568801Bangle1.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/28494682/2024/3/26/306a76b4-4235-41ff-a994-739b31ed1c761711428568801Bangle1.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20230502/gd0i/6450e50a42f9e729d75f6e57/-473Wx593H-466115756-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20230502/gd0i/6450e50a42f9e729d75f6e57/-473Wx593H-466115756-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20230420/hwG9/64413792907deb497af64ef6/-473Wx593H-466079560-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20230420/hwG9/64413792907deb497af64ef6/-473Wx593H-466079560-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://assets.ajio.com/medias/sys_master/root/20231223/Vo8s/6585f330afa4cf41f5e4dfef/-473Wx593H-466907890-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://assets.ajio.com/medias/sys_master/root/20231223/Vo8s/6585f330afa4cf41f5e4dfef/-473Wx593H-466907890-gold-MODEL.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://pngadgilandsons.com/wp-content/uploads/2015/01/nath-big.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://pngadgilandsons.com/wp-content/uploads/2015/01/nath-big.jpg" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="product-details.html">
                                                            <img class="product__items--img product__primary--img" src="https://aadyaa.com/cdn/shop/products/DSC02157.jpg?v=1707396188&width=1024" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                            <img class="product__items--img product__secondary--img" src="https://aadyaa.com/cdn/shop/products/DSC02157.jpg?v=1707396188&width=1024" alt="product-img" style="height:50vh;width:100%;object-fit:cover">
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="product-details.html">Necklace</a></h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">&#8377;  65,890</span>
                                                        </div>
                                                        <ul class="rating product__rating d-flex">
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="rating__list">
                                                                <span class="rating__list--icon">
                                                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>Category</td>
                                                                <td>Gold</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Group</td>
                                                                <td>Necklace</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Purity</td>
                                                                <td>22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Metal Color</td>
                                                                <td>Yellow Gold</td>
                                                            </tr>
                                                        </table>
                                                       
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                                        <g transform="translate(0 0)">
                                                                        <g>
                                                                            <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                                            <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                                            <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                                        </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="add__to--cart__text"> + Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" href="wishlist.html">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                                                    <span class="visually-hidden">Wishlist</span> 
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    <span class="visually-hidden">Quick View</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination__area bg__gray--color">
                                <nav class="pagination justify-content-center">
                                    <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                        <li class="pagination__list">
                                            <a href="shop.html" class="pagination__item--arrow  link ">
                                                <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                                                <span class="visually-hidden">pagination arrow</span>
                                            </a>
                                        <li>
                                        <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                                        <li class="pagination__list"><a href="shop.html" class="pagination__item link">2</a></li>
                                        <li class="pagination__list"><a href="shop.html" class="pagination__item link">3</a></li>
                                        <li class="pagination__list"><a href="shop.html" class="pagination__item link">4</a></li>
                                        <li class="pagination__list">
                                            <a href="shop.html" class="pagination__item--arrow  link ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                                <span class="visually-hidden">pagination arrow</span>
                                            </a>
                                        <li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop section -->

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

         <!-- Quickview Wrapper -->
      <div class="modal" id="modal1" data-animation="slideInUp">
         <div class="modal-dialog quickview__main--wrapper">
            <header class="modal-header quickview__header">
               <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            <div class="quickview__inner">
               <div class="row row-cols-lg-2 row-cols-md-2">
                  <div class="col">
                     <div class="quickview__product--media product__details--media">
                        <div class="product__media--preview  swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="product__media--preview__items">
                                    <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="https://www.southjewellery.com/wp-content/uploads/2014/01/grand-diamond-necklace.jpg">
                                        <img class="product__media--preview__items--img" src="https://www.southjewellery.com/wp-content/uploads/2014/01/grand-diamond-necklace.jpg" alt="product-media-img">
                                    </a>
                                    <div class="product__media--view__icon">
                                       <a class="product__media--view__icon--link glightbox" href="https://www.southjewellery.com/wp-content/uploads/2014/01/grand-diamond-necklace.jpg" data-gallery="product-media-preview">
                                          <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                             <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="product__media--preview__items">
                                    <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png"><img class="product__media--preview__items--img" src="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png" alt="product-media-img"></a>
                                    <div class="product__media--view__icon">
                                       <a class="product__media--view__icon--link glightbox" href="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png" data-gallery="product-media-preview">
                                          <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                             <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="product__media--preview__items">
                                    <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="https://i.pinimg.com/originals/fb/4a/5b/fb4a5ba4c0871f68ec248480407152fe.jpg"><img class="product__media--preview__items--img" src="https://i.pinimg.com/originals/fb/4a/5b/fb4a5ba4c0871f68ec248480407152fe.jpg" alt="product-media-img"></a>
                                    <div class="product__media--view__icon">
                                       <a class="product__media--view__icon--link glightbox" href="https://i.pinimg.com/originals/fb/4a/5b/fb4a5ba4c0871f68ec248480407152fe.jpg" data-gallery="product-media-preview">
                                          <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                             <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="product__media--preview__items">
                                    <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png"><img class="product__media--preview__items--img" src="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png" alt="product-media-img"></a>
                                    <div class="product__media--view__icon">
                                       <a class="product__media--view__icon--link glightbox" href="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png" data-gallery="product-media-preview">
                                          <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                             <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="product__media--nav swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="product__media--nav__items">
                                    <img class="product__media--nav__items--img" src="https://www.southjewellery.com/wp-content/uploads/2014/01/grand-diamond-necklace.jpg" alt="product-nav-img">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="product__media--nav__items">
                                    <img class="product__media--nav__items--img" src="https://5.imimg.com/data5/GB/RG/MY-47311766/diamond-necklace-set-500x500.png" alt="product-nav-img">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="product__media--nav__items">
                                    <img class="product__media--nav__items--img" src="https://i.pinimg.com/originals/fb/4a/5b/fb4a5ba4c0871f68ec248480407152fe.jpg" alt="product-nav-img">
                                 </div>
                              </div>
                             
                              
                           </div>
                           <div class="swiper__nav--btn swiper-button-next"></div>
                           <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="quickview__info">
                        <form action="#">
                           <h2 class="product__details--info__title mb-15">Necklace</h2>
                           <div class="product__details--info__price mb-10">
                              <span class="current__price">&#8377; 56,780</span>
                           </div>
                           <div class="quickview__info--ratting d-flex align-items-center mb-10">
                              <ul class="rating d-flex justify-content-center">
                                 <li class="rating__list">
                                    <span class="rating__list--icon">
                                       <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                          <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </li>
                                 <li class="rating__list">
                                    <span class="rating__list--icon">
                                       <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                          <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </li>
                                 <li class="rating__list">
                                    <span class="rating__list--icon">
                                       <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                          <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </li>
                                 <li class="rating__list">
                                    <span class="rating__list--icon">
                                       <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                          <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </li>
                                 <li class="rating__list">
                                    <span class="rating__list--icon">
                                       <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                          <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </li>
                              </ul>
                              <span class="quickview__info--review__text">(5 reviews)</span>
                           </div>
                           <p class="product__details--info__desc mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit is. Deserunt totam dolores ea numquam labore! Illum magnam totam tenetur fuga quo dolor.</p>
                           <div class="product__variant">
                              
                              <div class="product__variant--list mb-15">
                                <table class="table">
                                    <tr>
                                        <td>Category</td>
                                        <td>Gold</td>
                                    </tr>
                                    <tr>
                                        <td>Group</td>
                                        <td>Necklace</td>
                                    </tr>
                                    <tr>
                                        <td>Purity</td>
                                        <td>22.00</td>
                                    </tr>
                                    <tr>
                                        <td>Metal Color</td>
                                        <td>Yellow Gold</td>
                                    </tr>
                                </table>
                                <table class="table my-2">
                                    <tr>
                                        <td>Metal Amt</td>
                                        <td>GST @3%</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>&#8377; 56,780</td>
                                        <td>&#8377;92.3</td>
                                        <td>=</td>
                                        <td>
                                            &#8377; 56780
                                        </td>
                                    </tr>
                                </table>
                              </div>
                              <div class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                 <div class="quantity__box">
                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                    <label>
                                    <input type="number" class="quantity__number quickview__value--number" value="1" data-counter/>
                                    </label>
                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                 </div>
                                 <button class="primary__btn quickview__cart--btn" type="submit">Add To Cart</button>  
                              </div>
                              <div class="quickview__variant--list variant__wishlist mb-15">
                                 <a class="variant__wishlist--icon" href="wishlist.html" title="Add to wishlist">
                                    <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512">
                                       <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                    </svg>
                                    Add to Wishlist
                                 </a>
                              </div>
                           </div>
                           <div class="quickview__social d-flex align-items-center">
                              <label class="quickview__social--title">Social Share:</label>
                              <ul class="quickview__social--wrapper mt-0 d-flex">
                                 <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/">
                                       <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                          <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                       </svg>
                                       <span class="visually-hidden">Facebook</span>
                                    </a>
                                 </li>
                                 <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://twitter.com/">
                                       <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                          <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                       </svg>
                                       <span class="visually-hidden">Twitter</span>
                                    </a>
                                 </li>
                                 <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com/">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492" viewBox="0 0 19.497 19.492">
                                          <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                       </svg>
                                       <span class="visually-hidden">Instagram</span> 
                                    </a>
                                 </li>
                                 <li class="quickview__social--list">
                                    <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com/">
                                       <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                          <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                       </svg>
                                       <span class="visually-hidden">Youtube</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Quickview Wrapper End -->
    </main>