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

                                <div class="collapse navbar-collapse">

                                </div>
                                <div class="right-nav align-items-center d-flex justify-content-end">
                                    <div>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item">
                                                    <router-link class="nav-link darkNav active" :to="{ name: 'front.home' }">Home</router-link>
                                                </li>
                                                <li class="nav-item">
                                                    <router-link class="nav-link darkNav" :to="{ name: 'front.how_it_works'}">How it Works</router-link>
                                                </li>
                                                <li class="nav-item">
                                                    <router-link class="nav-link darkNav" :to="{ name: 'front.about'}">About Us</router-link>
                                                </li>
                                                <li class="nav-item">
                                                    <router-link class="nav-link darkNav" :to="{ name: 'front.contact' }">Contact Us</router-link>
                                                </li>
                                            </ul>
                                            <router-link class="btn btn-sm btn-outline-dark rounded" :to="{ name: 'front.signup'}">Free Sign Up</router-link>
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
                            <p class="text-light pra-2">Please Enter details to login your account</p>

                            <form class="ls-form was-validated">
                                <div class="alert alert-danger" role="alert" v-if="numOfErrors !== 0">
                                    <p v-for="error in errors.email">{{ error }}</p>
                                    <p v-for="error in errors.password">{{ error }}</p>
                                    <p v-for="error in errors.submission">{{ error }}</p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" :class="checkInvalidClass('email')" placeholder="Email" @blur="validateInput('email', 'Email Address', 'required|string|email')"
                                           @input="validateInput('email', 'Email Address', 'required|string|email')"
                                           v-model="credentials.email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" :class="checkInvalidClass('password')"
                                           @input="validateInput('password', 'Password', 'required|minChar:8')"
                                           @blur="validateInput('password', 'Password', 'required|minChar:8')"
                                           v-model="credentials.password">
                                </div>
                                <button @click="sendLoginRequest" :disabled="numOfErrors !== 0" type="button" class="btn btnSend">Login</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!-- page wrapper end -->


    </main>
</template>
<script>
    import {mapActions, mapGetters} from 'vuex';
    import {validate} from '../../helpers/helpers';

    export default {
        name: 'Login',
        data: function () {
            return {
                loading: false,
                credentials: {
                    email: '',
                    password: ''
                },
                errors: {
                    email: [],
                    password: [],
                    submission: [],
                },
            };
        },
        computed: {
            ...mapGetters({
                asset: 'getAssetURL'
            }),
            numOfErrors() {
                return this.errors.email.length + this.errors.password.length + this.errors.submission.length;
            }
        },
        methods: {
            ...mapActions({
                login: 'login'
            }),
            validateInput(prop_name, display_name, rules) {
                this.errors.submission.length !== 0 ? this.errors.submission = [] : undefined;
                this.errors[prop_name] = validate(this.credentials[prop_name], display_name, rules);
            },
            checkInvalidClass(inputName) {
                return {'invalid': this.errors[inputName].length > 0, 'valid': this.errors[inputName].length === 0};
            },
            sendLoginRequest() {
                this.loading = true;
                this.login({...this.credentials, role: 'admin'}).then(() => {
                    this.loading = false;
                    this.$router.push({name: 'admin.dashboard'});
                }).catch(error => {
                    this.loading = false;
                    if (error.status === 422) {
                        for (let [type, errors] of Object.entries(error.data.errors)) {
                            this.errors[type] = errors;
                        }
                    } else {
                        this.errors.submission.push(error.data);
                    }
                })
            },
        },
        created() {
            setTimeout(() => {
                //    Background Image url
                $('[data-bg-img]').each(function () {
                    $(this).css('background-image', 'url(' + $(this).data('bg-img') + ')');
                });
            });
        }
    }
</script>
<style scoped>
    .invalid {
        color: red !important;
    }

    .valid {
        color: #48e3b7 !important;
    }
</style>
