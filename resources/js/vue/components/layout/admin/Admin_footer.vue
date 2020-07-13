<template>
    <!--footer start-->
    <footer>
        <div class="pull-right">
            Service Market <a href="javascript:void(0)">Developed by mnb.</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!--footer end-->
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'Admin_footer',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL',
            }),
        },
    }
</script>

<style scoped>

</style>
