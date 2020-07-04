<template>
    <main>
        <!--header start-->
        <header id="site-header" class="header">
            <div id="header-wrap">
                <div class="container-fluid pl-lg-0 pr-lg-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand logo mr-5" href="index.html">
                                    <img class="img-fluid" :src="asset + 'assets/front/images/logo.png'" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse">

                                </div>
                                <div class="right-nav align-items-center d-flex justify-content-end">
                                    <div>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item"> <router-link class="nav-link darkNav active" :to="{ name: 'front.home' }">Home</router-link></li>
                                                <li class="nav-item"> <router-link class="nav-link darkNav" :to="{ name: 'front.how_it_works'}">How it Works</router-link></li>
                                                <li class="nav-item"> <router-link class="nav-link darkNav" :to="{ name: 'front.about'}">About Us</router-link></li>
                                                <li class="nav-item"> <router-link class="nav-link darkNav" :to="{ name: 'front.contact' }">Contact Us</router-link></li>
                                            </ul>
                                            <router-link class="btn btn-sm btn-outline-dark rounded" :to="{ name: 'front.login'}">Login</router-link>
                                        </div>
                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        <!--hero section start-->
        <section class="banner fullscreen-banner o-hidden black-bg p-0">
            <div class="banner-bgLogin" :data-bg-img="asset + 'assets/front/images/bg/04.jpg'"></div>
            <div class="align-center b-pl">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1 class="head-2">Welcome</h1>
                            <p class="text-light pra-2">Please Enter details to create your account</p>

                            <form class="ls-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btnSend">Sign Up</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
    </main>
</template>
<script>
    import {mapGetters} from 'vuex';
    export default {
        name: 'Signup',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL'
            })
        },
        created() {
            setTimeout(() => {
                //    Background Image url
                $('[data-bg-img]').each(function () {
                    $(this).css('background-image','url('+ $(this).data('bg-img')+')');
                });
            })
        }
    }
</script>
