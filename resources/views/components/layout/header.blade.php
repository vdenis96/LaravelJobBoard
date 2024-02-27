<!-- HEADER START -->
<header class="site-header header-style-3 mobile-sider-drawer-menu">
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar">
            <div class="container-fluid clearfix">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="index-2.html">
                            <img
                                src="{{ "assets/images/logo-dark.png" }}"
                                alt="" />
                        </a>
                    </div>
                </div>

                @include('partials.header._nav')
            </div>
        </div>

        <!-- SITE Search -->
        <div id="search">
            <span class="close"></span>
            <form
                role="search"
                id="searchform"
                action="https://thewebmax.org/search"
                method="get"
                class="radius-xl">
                <input
                    class="form-control"
                    value=""
                    name="q"
                    type="search"
                    placeholder="Type to search" />
                <span class="input-group-append">
                    <button type="button" class="search-btn">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </span>
            </form>
        </div>
    </div>
</header>
<!-- HEADER END -->