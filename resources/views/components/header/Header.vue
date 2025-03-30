<template>
    <div>
        <div class="d-flex flex-stack flex-grow-1 bg-light p-5">

            <div class="app-header-logo d-flex align-items-center ps-lg-12" id="kt_app_header_logo">
                <!--begin::Sidebar toggle-->
                <div id="kt_app_sidebar_toggle"
                    class="app-sidebar-toggle btn btn-sm btn-icon bg-body btn-color-gray-500 btn-active-color-primary w-30px h-30px ms-n2 me-4 d-none d-lg-flex "
                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                    data-kt-toggle-name="app-sidebar-minimize">
                    <div @click="emitStatus">
                        <img style="width: 10px;" src="https://cdn-icons-png.flaticon.com/512/2767/2767162.png" alt="">

                    </div>
                </div>
                <!--end::Sidebar toggle-->

                <!--begin::Sidebar mobile toggle-->
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_mobile_toggle">
                    <img style="width: 10px;" src="https://cdn-icons-png.flaticon.com/512/2767/2767162.png" alt="">
                </div>
                <!--end::Sidebar mobile toggle-->

                <!--begin::Logo-->
                <a href="/metronic8/demo39/index.html" class="app-sidebar-logo">
                    <img alt="Logo" src="https://cdn-icons-png.flaticon.com/512/11241/11241945.png"
                        class="h-25px theme-light-show">
                    <img alt="Logo" src="https://cdn-icons-png.flaticon.com/512/11241/11241945.png"
                        class="h-25px theme-dark-show">
                </a>
                <!--end::Logo-->
            </div>

            <!--begin::Navbar-->
            <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">


                <!--begin::User menu-->
                <div class="app-navbar-item ms-2 ms-lg-6" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div  @mouseover="showOptionsOfMenu = true" @mouseleave="showOptionsOfMenu = true" class="cursor-pointer symbol symbol-circle symbol-30px symbol-lg-45px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg" alt="user">
                    </div>

                    <!--begin::User account menu-->
                    <transition name="fade">
                        <div @mouseleave="showOptionsOfMenu = false" v-if="showOptionsOfMenu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px bg-light"
                        data-kt-menu="true" style=" display: block; z-index: 10; position: absolute; right: 100px; top: 60px;">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        Max Smith <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>

                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        max@kt.com </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/metronic8/demo39/account/overview.html" class="menu-link px-5">
                                My Profile
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/metronic8/demo39/apps/projects/list.html" class="menu-link px-5">
                                <span class="menu-text">My Projects</span>
                                <span class="menu-badge">
                                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">My Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/referrals.html" class="menu-link px-5">
                                        Referrals
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/billing.html" class="menu-link px-5">
                                        Billing
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/statements.html" class="menu-link px-5">
                                        Payments
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/statements.html"
                                        class="menu-link d-flex flex-stack px-5">
                                        Statements

                                        <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                            aria-label="View your statements"
                                            data-bs-original-title="View your statements" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 fs-5"></i> </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-7">
                                                Notifications
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/metronic8/demo39/account/statements.html" class="menu-link px-5">
                                My Statements
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">
                                    Mode

                                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i> <i
                                            class="ki-outline ki-moon theme-dark-show fs-2"></i> </span>
                                </span>
                            </a>

                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode"
                                        data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-night-day fs-2"></i> </span>
                                        <span class="menu-title">
                                            Light
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-moon fs-2"></i> </span>
                                        <span class="menu-title">
                                            Dark
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                        data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-screen fs-2"></i> </span>
                                        <span class="menu-title">
                                            System
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->

                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">
                                    Language

                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                        English <img class="w-15px h-15px rounded-1 ms-2" src="" alt="">
                                    </span>
                                </span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/settings.html"
                                        class="menu-link d-flex px-5 active">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="" alt="">
                                        </span>
                                        English
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="" alt="">
                                        </span>
                                        Spanish
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="" alt="">
                                        </span>
                                        German
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="" alt="">
                                        </span>
                                        Japanese
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/metronic8/demo39/account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="" alt="">
                                        </span>
                                        French
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="/metronic8/demo39/account/settings.html" class="menu-link px-5">
                                Account Settings
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/metronic8/demo39/authentication/layouts/corporate/sign-in.html"
                                class="menu-link px-5">
                                Sign Out
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    </transition>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

                <!--begin::Action-->
                <div class="app-navbar-item ms-2 ms-lg-6 me-lg-6">
                    <!--begin::Link-->
                    <a href="https://cdn-icons-png.flaticon.com/512/2767/2767162.png"
                        class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                        <i class="ki-outline ki-exit-right fs-1"></i>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Action-->

                <!--begin::Header menu toggle-->
                <div class="app-navbar-item ms-2 ms-lg-6 ms-n2 me-3 d-flex d-lg-none">
                    <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                        id="kt_app_aside_mobile_toggle">
                        <i class="ki-outline ki-burger-menu-2 fs-2"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                isCliclToOpenOrCloseSideMenu: false,
                showOptionsOfMenu: false
            }
        },
        methods: {
            emitStatus(){
                 this.isCliclToOpenOrCloseSideMenu = !this.isCliclToOpenOrCloseSideMenu;
                this.$emit('status',this.isCliclToOpenOrCloseSideMenu)
                console.log(this.isCliclToOpenOrCloseSideMenu)
            }
        }
    }
</script>
<style>

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease-in-out;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
