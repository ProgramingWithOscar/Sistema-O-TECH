<template>
    <div>
      <div
        class="app-sidebar-wrapper bg-light"
        :class="{'app-side-bar flex-column': isCloseN}"
        :data-kt-drawer="isCloseN ? 'true' : 'false'"
        :data-kt-scroll-activate="isCloseN ? '{default: true, lg: false}' : '{default: false, lg: true}'"
        :data-kt-drawer-width="isCloseN ? '200px' : ''"
        data-kt-drawer-direction="start"
        data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_header"
        data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
        data-kt-scroll-offset="5px"
        data-kt-drawer-overlay="true"
        :style="sidebarStyle"
      >
        <!-- Sidebar Menu -->
        <div
          id="#kt_app_sidebar_menu"
          data-kt-menu="true"
          data-kt-menu-expand="false"
          class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary mb-5"
        >
          <!-- Menu Item -->
          <div data-kt-menu-trigger="click" class="menu-item menu-accordion" @click="toggleOptions">
            <span class="menu-link">
              <span class="menu-icon">
                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/11241/11241945.png" alt="">
              </span>
              <span class="menu-title">Informes</span>
              <span class="dropdown-toggle mx-5"></span>
            </span>
            <div class="menu-item" v-if="showOptionsMenu">
              <a class="menu-link fade-in" href="/metronic8/demo39/dashboards/ecommerce.html">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Ventas diarias</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import Header from "../header/Header.vue";

  export default {
    props: {
        isCloseN: {
            type: Boolean,
            required: true
        }
    },
    data() {
      return {
        showOptionsMenu: false,
      };
    },
    components: {
      Header,
    },
    computed: {
      sidebarStyle() {
        return this.isCloseN ? {} : { height: "664px" };
      }
    },
    methods: {
      toggleOptions() {
        this.showOptionsMenu = !this.showOptionsMenu;
      }
    }
  };
  </script>
