<template>
    <div class="page-wrapper">
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

</template>

<script>
    import Header from "./layout/front/Header";
    import Footer from "./layout/front/Footer";
    import {mapActions} from 'vuex';

    export default {
        name: 'App',
        data() {
            return {
                nonHeaderPages: ['admin.login', 'front.signup'],
                nonFooterPages: ['admin.login', 'front.signup']
            }
        },
        props: {
            asset: {
                type: String,
                required: true,
            },
        },
        computed: {
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
        },
        created() {
            this.storeAssetURLInVuex({URL: this.asset});
        },
    }
</script>

<style scoped>

</style>
