<template>
    <main>
        <!--hero section start-->
        <section class="banner fullscreen-bannerInner o-hidden green-bg p-0">
            <div class="banner-bgInner" :data-bg-img="asset + 'assets/front/images/bg/02.jpg'"></div>
            <div class="align-center b-pl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class="head-1">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->


        <!--body content start-->
        <div id="main-page" class="page-content">
            <!--Get in Touch start-->

            <!--Get in Touch End-->

            <!--Get in Touch start-->
            <section class="getinTouch secPad-t-none">
                <div class="container border-b padd-b">
                    <div class="row justify-content-center">
                        <div class="col-md-4 align-self-center contact-info">
                            <div class="row ciRow">
                                <div class="col-2">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-10">
                                    191-103 Integer Rd. Corona New Mexico 08219
                                </div>
                            </div>
                            <div class="row ciRow">
                                <div class="col-2">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="col-10">
                                    (404) 960-3807
                                </div>
                            </div>
                            <div class="row ciRow">
                                <div class="col-2">
                                    <i class="fas fa-fax"></i>
                                </div>
                                <div class="col-10">
                                    (404) 960-3807
                                </div>
                            </div>
                            <div class="row ciRow">
                                <div class="col-2">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="col-10">
                                    hello@loremipsum.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 gt-form">
                            <div class="col-sm-8 offset-sm-2 ">
                                <h2 class="">Get in Touch</h2>
                                <p>Feel free to drop us a line below!</p>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btnSend">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Get in Touch end-->

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

            <!--Connect start-->
            <section class="connect secPad-b-none">
                <div class="container border-b padd-b">
                    <div class="row">
                        <h2>Frequently Asked Questions</h2>

                        <div class="accordion-started accordion-bral row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- accordion item 1 -- start -->
                                <input class="ac-input" id="ac-1" name="accordion-1" type="radio" checked/>
                                <label class="ac-label" for="ac-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<i></i></label>
                                <div class="article ac-content">
                                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <!-- accordion item 1 -- end -->

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- accordion item 2 -- start -->
                                <input class="ac-input" id="ac-2" name="accordion-1" type="radio"/>
                                <label class="ac-label" for="ac-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<i></i></label>
                                <div class="article ac-content">
                                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <!-- accordion item 2 -- end -->

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- accordion item 3 -- start -->
                                <input class="ac-input" id="ac-3" name="accordion-1" type="radio"/>
                                <label class="ac-label" for="ac-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<i></i></label>
                                <div class="article ac-content">
                                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <!-- accordion item 3 -- end -->

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- accordion item 4 -- start -->
                                <input class="ac-input" id="ac-4" name="accordion-1" type="radio"/>
                                <label class="ac-label" for="ac-4">4. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt:<i></i></label>
                                <div class="article ac-content">
                                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <!-- accordion item 4 -- end -->

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
        name: 'Contact',
        computed: {
            ...mapGetters({
               asset: 'getAssetURL'
            }),
        },
        created() {
            setTimeout( () => {
            //    Add Background Image
                $('[data-bg-img]').each(function() {
                    $(this).css('background-image','url(' + $(this).data('bg-img') + ')')
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
            })
        }
    }
</script>
