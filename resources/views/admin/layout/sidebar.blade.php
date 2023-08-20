<div class="app-sidebar menu-fixed" data-background-color="man-of-steel" data-image="app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true">
    <!-- main menu header-->
    <!-- Sidebar Header For Starter Kit starts-->
    <div class="sidebar-header">
        <div class="logo clearfix">
            <a class="logo-text float-left" href="javascript:;">
                <div class="logo-img"><img src="{{asset('assest/app-assets/img/logo.png')}}" /></div><span class="text">   {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose"
                                                                                                                                                                                  href="javascript:;"><i class="ft-x"></i></a></div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content main-menu-content">
        <div class="nav-container">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="  nav-item"><a href="#"><i class="ft-home"></i><span class="menu-title" data-i18n="Dashboard">الرئيسية</span></a>
                </li>

                <li class="has-sub nav-item {{ Request::is('dashboard/client*') ? 'active' : '' }}"><a href="javascript:;"><i class="ft-align-left"></i><span class="menu-title" data-i18n="Menu Levels">العملاء</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('dashboard/client')}}"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Second Level">دليل العملاء</span></a></li>
                        <li><a href="{{url('dashboard/client/add')}}"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Second Level">اضافة عميل</span></a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
