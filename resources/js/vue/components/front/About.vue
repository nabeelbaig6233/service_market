<template>
    <main>
        <!--hero section start-->
        <section class="banner fullscreen-bannerInner o-hidden green-bg p-0">
            <div class="banner-bgInner" :data-bg-img="asset + 'assets/front/images/bg/03.jpg'"></div>
            <div class="align-center b-pl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class="head-1">Lorem ipsum dolor sit amet. </h1>
                            <p class="text-light pra-1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
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
                        <div class="col-md-4">
                            <h2><span>Who</span> we are</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img :src="asset + 'assets/front/images/whoweare-img.png'" class="img-fluid wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!--How does it work? end-->

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
        name: 'About',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL'
            }),
        },
        created() {
            setTimeout(() => {
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
            }, 1)
        }
    }
</script>
<style scoped>

</style>
