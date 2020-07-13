<template>
    <!--footer start-->

    <footer class="footer bgTwo">
        <div class="primary-footer">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-3">
                        <a class="navbar-brand logo mr-5" href="index.html">
                            <img class="img-fluid" :src="asset +'assets/front/images/logo.png'" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-list text-right-f">
                            <ul class="list-inline">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="how-it-works.html">How it Works</a></li>
                                <li><a href="aboutus.html">About Us</a></li>
                                <li><a href="contactus.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 text-md-right">
                        <a class="btn btn-sm btn-outline-light rounded" href="login.html">Login</a>
                        <a class="btn btn-sm btn-outline-light rounded btn-sm-green" href="signup.html">Free Sign Up</a>
                    </div>
                </div>
                <div class="row align-items-center btp">
                    <div class="col-lg-4">
                        <h3 class="mb-4 text-white">Newsletter</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btnSubmit">Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!--footer end-->
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'Footer',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL',
            }),
        },
    }
</script>

<style scoped>

</style>
