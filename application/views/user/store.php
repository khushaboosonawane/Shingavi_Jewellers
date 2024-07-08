<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>


    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://www.weddingsutra.com/images/Vendor_Images/Bridal_Jewellery/Kalyan_Jewellers/Muslim_Nikkah.jpg');height:50rem;background-size:cover;background-repeat:no-repeat;background-position:center center">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Contact Us</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="<?= base_url() ?>usercontroller/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start contact section -->
        <section class="contact__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Contact Us</h2>
                </div>
                <div class="main__contact--area position__relative">
                    
                    <div class="contact__form">
                        <h3 class="contact__form--title mb-40">Contact Me</h3>
                        <form class="contact__form--inner" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input1">First Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="firstname" id="input1" placeholder="Your First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input2">Last Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="lastname" id="input2" placeholder="Your Last Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Phone Number <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="number" id="input3" placeholder="Phone number" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input4">Email <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="email" id="input4" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-15">
                                        <label class="contact__form--label" for="input5">Write Your Message <span class="contact__form--label__star">*</span></label>
                                        <textarea class="contact__form--textarea" name="message" id="input5" placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="contact__form--btn primary__btn" type="submit">Submit Now</button>  
                        </form>
                    </div>
                    <div class="contact__info border-radius-5">
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Contact Us</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.568" height="31.128" viewBox="0 0 31.568 31.128">
                                        <path id="ic_phone_forwarded_24px" d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z" transform="translate(-3 -1)" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="contact__info--content">
                                    <p class="contact__info--content__desc text-white">SHINGAVI JEWELERS Pvt. Ltd is one of the leading jewellers in western India carrying the fervours of crafting jewelleries for more than 6 Decades, as an organization we have been imparting trust among customers with a legacy of ethical business since 1959 
                                        <br>
                                    <br> <a href="tel:+01234-567890">(0241) 2553031
                                    </a> <br> <a href="tel:++01234-5688765">(+91) 8605500025</a>   </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Email Address</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                        <path id="ic_email_24px" d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z" transform="translate(-2 -4)" fill="currentColor"/>
                                    </svg>  
                                </div>
                                <div class="contact__info--content">
                                    <p class="contact__info--content__desc text-white"> <a href="mailto:info@example.com">contact@shingavijewellers.com</a> <br> <a href="mailto:info@example.com">info@shingavijewellers.com</a></p> 
                                </div>
                            </div>
                        </div>
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Shop Location</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                        <path id="ic_account_balance_24px" d="M5.323,14.341V24.718h4.985V14.341Zm9.969,0V24.718h4.985V14.341ZM2,32.13H33.57V27.683H2ZM25.262,14.341V24.718h4.985V14.341ZM17.785,1,2,8.412v2.965H33.57V8.412Z" transform="translate(-2 -1)" fill="currentColor"/>
                                    </svg> 
                                </div>
                                <div class="contact__info--content">
                                    <p class="contact__info--content__desc text-white">
                                    3155, Maha Prabuji Marg, Juna Kapad Bazaar Rd, Nalegaon, Ahmednagar, Maharashtra 414001.
                                    </p> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact section -->

        <!-- Start contact map area -->
        <div class="contact__map--area section--padding pt-0">
            <iframe class="contact__map--iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15078.97782524174!2d74.7169738554199!3d19.118863400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcba80e92dceb9%3A0xb4508942ab098a3!2sShingavi%20Jewellers%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1720414229213!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- End contact map area -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Branch Details</h2>
                </div>
                </div>
            </div>
        </div>
         <!-- Start brand logo section -->
         <div class="brand__logo--section bg__secondary section--padding">
            <div class="container-fluid">
                <div class="row row-cols-1">

                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-around align-items-center">
                            <div class="brand__logo--items text-md-center">
                                <h2 class="my-2 text-white mb-3">SAVEDI BRANCH
                                </h2>
                                <img class="brand__logo--items__thumbnail--img display-block" src="https://shingavijewellers.com/uploads/branch-1624419911-55088.png" style="height:65px;width:180px;object-fit:cover"  alt="brand logo">
                                <div>
                                    <table class="text-left my-3">
                                        <tr>
                                            <td><i class="ri-phone-fill"></i> +918605500025</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-phone-fill"></i> 02412553031</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-mail-fill"></i> contact@shingavijewellers.com</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-map-pin-fill"></i> Professor chowk , savedi</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="brand__logo--items text-md-center">
                                <h2 class="my-2 text-white mb-3">SAVEDI BRANCH
                                </h2>
                                <div class="d-flex justify-content-center">
                                <img class="brand__logo--items__thumbnail--img display-block" src="https://shingavijewellers.com/uploads/branch-1633438977-16749.webp" style="height:90px;width:100px;object-fit:fill"  alt="brand logo">
                                </div>
                                <div>
                                    <table class="text-center my-3">
                                        <tr>
                                            <td><i class="ri-phone-fill"></i> 8087343030</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-phone-fill"></i> 02412343030</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-mail-fill"></i> shingaviandsonsjewellers@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-map-pin-fill"></i> 3155, JUNA KAPAD BAZAR,AHMEDNAGAR, MAHARASHTRA, 414001</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand logo section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3 section--padding">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--content text-center">
                        <h2 class="shipping__items2--content__title h3">
                            <i class="ri-facebook-line" style="font-size:30px;font-weight:bold;color:#ffaa5f"></i>
                            </h2>
                            <p class="shipping__items2--content__desc">Follow Us On Facebook</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--content text-center">
                        <h2 class="shipping__items2--content__title h3">
                            <i class="ri-instagram-line" style="font-size:30px;font-weight:bold;color:#ffaa5f"></i>
                            </h2>
                            <p class="shipping__items2--content__desc">Follow Us On Instagram</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--content text-center">
                        <h2 class="shipping__items2--content__title h3">
                            <i class="ri-whatsapp-line" style="font-size:30px;font-weight:bold;color:#ffaa5f"></i>
                            </h2>
                            <p class="shipping__items2--content__desc">Contact With Us</p>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
        </section>
        <!-- End shipping section -->

    </main>