<template>
    <div>
        <div class="page-wrapper" v-if="showFront">
            <div>
                <!-- preloader start -->
                <div id="ht-preloader">
                    <div class="clear-loader">
                        <div class="loader"></div>
                    </div>
                </div>
                <!-- preloader end -->
                <div class="mouse-cursor cursor-outer"></div>
                <div class="mouse-cursor cursor-inner"></div>
            </div>
            <app-header v-if="showAppHeader"/>
            <div>
                <router-view/>
            </div>
            <app-footer v-if="shownAppFooter"/>
        </div>
        <div v-if="showAdminPanel">
            <div class="container body">
                <div class="main_container">
                    <admin-header></admin-header>
                    <div><router-view/></div>
                    <admin-footer></admin-footer>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Header from "./layout/front/Header";
    import Footer from "./layout/front/Footer";

    // Admin
    import Admin_header from "./layout/admin/Admin_header";
    import Admin_footer from "./layout/admin/Admin_footer";
    import {mapActions} from 'vuex';

    export default {
        name: 'App',
        data() {
            return {
                nonHeaderPages: ['admin.login', 'front.signup'],
                nonFooterPages: ['admin.login', 'front.signup'],
            }
        },
        props: {
            asset: {
                type: String,
                required: true,
            },
        },
        computed: {
            showFront() {
                return this.$route.name.split('.')[0] === 'front' || this.$route.name.split('.')[1] === 'login';
            },
            showAdminPanel() {
                return this.$route.name.split('.')[0] === 'admin' && this.$route.name.split('.')[1] !== 'login';
            },
            showAppHeader() {
                return !this.nonHeaderPages.includes(this.$route.name);
            },
            shownAppFooter() {
                return !this.nonFooterPages.includes(this.$route.name);
            }
        },
        methods: {
            ...mapActions({
                storeAssetURLInVuex: 'storeAssetURL',
            }),
        },
        components: {
            appHeader: Header,
            appFooter: Footer,
            adminHeader: Admin_header,
            adminFooter: Admin_footer,
        },
        created() {
            this.storeAssetURLInVuex({URL: this.asset});
        },
    }
</script>

<style scoped>

</style>
