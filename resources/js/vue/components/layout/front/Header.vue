<template>
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
                                            <li class="nav-item"> <router-link class="nav-link active" :to="{ name: 'front.home' }">Home</router-link></li>
                                            <li class="nav-item"> <router-link class="nav-link" :to="{ name: 'front.how_it_works'}">How it Works</router-link></li>
                                            <li class="nav-item"> <router-link class="nav-link" :to="{ name: 'front.about'}">About Us</router-link></li>
                                            <li class="nav-item"> <router-link class="nav-link" :to="{ name: 'front.contact' }">Contact Us</router-link></li>
                                        </ul>
                                        <router-link class="btn btn-sm btn-outline-light rounded" :to="{ name: 'admin.login'}">Login</router-link>
                                        <router-link class="btn btn-sm btn-outline-light rounded btn-sm-green" :to="{ name: 'front.signup'}">Free Sign Up</router-link>
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
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: 'Header',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL',
            }),
        },
    }
</script>

<style scoped>
</style>
