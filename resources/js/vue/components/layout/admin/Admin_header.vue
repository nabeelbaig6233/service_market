<template>
    <main>
        <div class="col-md-3 left_col">
            <!-- sidebar menu -->
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="javascript:void(0)" class="site_title"><i class="fa fa-paw"></i>
                        <span>Swopers</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img :src="asset + 'assets/admin/images/img.png'" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Dashboard</h3>
                        <ul class="nav side-menu">
                            <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Users Profile</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="javascript:void(0)">Multi-Device Profiles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">

                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:void(0)" @click="logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">

                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img :src="asset + 'assets/admin/images/img.png'"
                                     alt="">Admin
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)">My Profile</a>

                                <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                                <a class="dropdown-item" href="javascript:void(0)"
                                   @click="logout"><i
                                    class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
    </main>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: 'Admin_header',
        computed: {
            ...mapGetters({
                asset: 'getAssetURL',
            }),
        },
        methods: {
            ...mapActions({
                sendLogoutRequest: 'logout',
            }),
            logout() {
                this.sendLogoutRequest().then(() => this.$router.push({name: 'admin.login'})).catch((e) => console.log(e));
            }
        }
    }
</script>

<style scoped>
</style>
