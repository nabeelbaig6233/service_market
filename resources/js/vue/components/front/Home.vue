<template>
    <main>

        <!--hero section start-->
        <section class="banner fullscreen-banner o-hidden green-bg p-0">
            <div class="banner-bg" :data-bg-img="asset + 'assets/front/images/bg/02.jpg'"></div>
            <div class="align-center b-pl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class="head-1">Bartering is as <span>Old as Cavemen</span></h1>
                            <p class="text-light pra-1">A platform designed to help businesses exchange services.</p>
                            <!--  <a class="btn btn-white" href="#"><span>Learn More <i class="fas fa-plus-square"></i></span></a> -->


                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btnSearch" type="button"><i class="fas fa-search"></i></button>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--body content start-->
        <div id="main-page" class="page-content">

            <!--Process start-->
            <section class="ourProcess">
                <div class="container border-b padd-b">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><span>Our</span> process</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12 p1-mt wow fadeInUp">
                            <img :src="asset + 'assets/front/images/p-1.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                        <div class="col-lg-4 col-12 p2-mt wow fadeInDown">
                            <img :src="asset + 'assets/front/images/p-2.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                        <div class="col-lg-4 col-12 p3-mt wow fadeInUp">
                            <img :src="asset + 'assets/front/images/p-3.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--Process end-->


            <!--We Help start-->
            <section class="weHelp secPad-b-none">
                <div class="container border-b padd-b">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>We help all industries exchange services.</h2>
                            <div class="row">
                                <div class="col-lg-4 col-12 wow fadeInUp wh1-mt">
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/financial-icon.png'">
                                                <p>Financial</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/goverment.png'">
                                                <p>Goverment</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 wow fadeInDown wh2-mt">
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/healthcare-1.png'">
                                                <p>Healthcare</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/retail.png'">
                                                <p>Retail</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 wow fadeInUp wh3-mt">
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/manufacturing.png'">
                                                <p>Manufacturing</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="serviceBox wh4-mt">
                                        <a href="javascript:void(0)">
                                            <div class="hIcon">
                                                <img :src="asset + 'assets/front/images/media.png'">
                                                <p>Media</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img :src="asset + 'assets/front/images/help-img.png'" class="img-fluid wow fadeInRight">
                            <a class="btn wow fadeInUp wh1-mt btnSeeAllindustries" href="industries.html"><span>See All Industries</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!--We Help end-->

            <!--Video Content Start-->
            <section class="contOne">
                <div class="container-fluid pr-lg-0">
                    <div class="row align-items-center bgOne">
                        <div class="col-lg-4 col-12 ml-auto wow fadeInLeft">
                            <div class="section-title">
                                <div class="section-title">
                                    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5 mt-lg-0 wow fadeInRight">
                            <div class="pos-r imgOne">
                                <div class="img-bg">

                                </div>
                                <img :src="asset + 'assets/front/images/play-btn.png'" class="playBtn wow fadeInRight">
                                <img :src="asset + 'assets/front/images/laptop-img-3.png'">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Video Content End-->


            <!--Manage Business Start-->
            <section class="manageBusiness secPad-b-none">
                <div class="container border-b padd-b">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Manage all your business connections in one place</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6 p1-mt wow fadeInLeft">
                            <img :src="asset + 'assets/front/images/screen-1.jpg'" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-6 p1-mt wow fadeInRight">
                            <img :src="asset + 'assets/front/images/screen-2.jpg'" class="img-fluid">
                        </div>

                    </div>
                </div>
            </section>
            <!--Manage Business Start-->


            <!--Find Right Professional Start-->
            <section class="findRightProfessional">
                <div class="container border-b padd-b">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Find the right <span>Professional services</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris</p>
                        </div>
                    </div>
                    <div class="row p1-mt">
                        <div class="col-lg-12 col-12">
                            <div class="owl-carousel" data-items="3" data-md-items="1" data-sm-items="1" data-margin="30" data-autoplay="true">
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">4.5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">4.5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">4.5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row no-gutters post style-2">
                                        <div class="col-sm-12">
                                            <div class="post-desc">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="pdImg">
                                                            <img :src="asset + 'assets/front/images/company-logo.jpg'">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <ul class="text-right pd">
                                                            <li><span class="rating">5</span></li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li><span class="jobs">(93 Jobs)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="post-title">
                                                    <h5>Company Name</h5>
                                                    <p>Lorem ipsum dolor sit amet,</p>
                                                </div>

                                                <div class="row tag-wrapper">
                                                    <div class="col-12">
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem Ipsum is simply</a>
                                                        <a href="javascript:void(0)" class="tag"> Lorem ipsum</a>
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
            </section>
            <!--Find Right Professional End-->


            <!--Connect start-->
            <section class="connect secPad-b-none">
                <div class="container border-b padd-b">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <h2>Connect with other businesses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur Ut enim ad minim veniam, quis nostrudex dolor in reprehenderit in voluptate velit.</p>
                            <a class="btn wow fadeInUp wh1-mt btnSignup" href="javascript:void(0)"><span>Free Sign Up</span></a>

                        </div>
                        <div class="col-md-5 text-center">
                            <img :src="asset + 'assets/front/images/connect-img.png'" class="img-fluid wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!--Connect end-->


        </div>

        <!--body content end-->

    </main>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: 'Home',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL'
            }),
        },
        created() {
            setTimeout(() => {
                $('.owl-carousel').each(function () {
                    var $carousel = $(this);
                    $carousel.owlCarousel({
                        items: $carousel.data("items"),
                        slideBy: $carousel.data("slideby"),
                        center: $carousel.data("center"),
                        loop: true,
                        margin: $carousel.data("margin"),
                        dots: $carousel.data("dots"),
                        nav: $carousel.data("nav"),
                        autoplay: $carousel.data("autoplay"),
                        autoplayTimeout: $carousel.data("autoplay-timeout"),
                        navText: ['<span class="fas fa-chevron-left"><span>', '<span class="fas fa-chevron-right"></span>'],
                        responsive: {
                            0: {items: $carousel.data('xs-items') ? $carousel.data('xs-items') : 1},
                            576: {items: $carousel.data('sm-items')},
                            768: {items: $carousel.data('md-items')},
                            1024: {items: $carousel.data('lg-items')},
                            1200: {items: $carousel.data("items")}
                        },
                    });
                });

                // Add background Image
                $('[data-bg-img]').each(function () {
                    $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
                });

                // Animate WoW
                let wow = new WOW.WOW({
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: false,
                    live: true
                });
                wow.init();
            }, 1)
        }
    }
</script>

<style scoped>

</style>
