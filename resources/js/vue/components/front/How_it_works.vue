<template>
    <main>

        <!--hero section start-->
        <section class="banner fullscreen-bannerInner o-hidden green-bg p-0">
            <div class="banner-bgInner" :data-bg-img="asset +'assets/front/images/bg/01.jpg'"></div>
            <div class="align-center b-pl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class="head-1">Lorem ipsum dolor sit amet. </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->



        <!--body content start-->
        <div id="main-page" class="page-content">

            <!--How does it work? start-->
            <section class="hdw secPad-b-none">
                <div class="container border-b padd-b">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <h2><span>How</span> does it work?</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img :src="asset +'assets/front/images/how-it-works-img.png'" class="img-fluid wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!--How does it work? end-->

            <!--Video Content Start-->
            <section class="contTwo">
                <div class="container-fluid pr-lg-0">
                    <div class="row align-items-center bgTwo">
                        <div class="col-lg-4 col-12 ml-auto wow fadeInLeft">
                            <div class="section-title">
                                <div class="section-title">
                                    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5 mt-lg-0 wow fadeInRight">
                            <div class="pos-r imgTwo">
                                <div class="img-bg">

                                </div>
                                <img :src="asset +'assets/front/images/play-btn-green.png'" class="playBtn wow fadeInRight">
                                <img :src="asset +'assets/front/images/laptop-img-2.png'">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Video Content End-->

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
                            <img :src="asset +'assets/front/images/p-1.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                        <div class="col-lg-4 col-12 p2-mt wow fadeInDown">
                            <img :src="asset +'assets/front/images/p-2.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                        <div class="col-lg-4 col-12 p3-mt wow fadeInUp">
                            <img :src="asset +'assets/front/images/p-3.png'" class="img-fluid">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--Process end-->


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
                        <div class="col-lg-12 col-12 p1-mt wow fadeInRight">
                            <img :src="asset +'assets/front/images/screen-3.jpg'" class="img-fluid">
                        </div>

                    </div>
                </div>
            </section>
            <!--Manage Business Start-->

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
                            <img :src="asset +'assets/front/images/connect-img.png'" class="img-fluid wow fadeInRight">
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
    import {mapGetters} from "vuex";

    export default {
        name: 'How_it_works',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL'
            }),
        },
        created() {
            setTimeout( () => {
                $('[data-bg-img]').each(function() {
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
            },1)
        }
    }
</script>
