<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav
            class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2" type="text" name="Search"
                           placeholder="Explore Materialize" data-search="template-list">
                    <ul class="search-list collection display-none"></ul>
                </div>
                <ul class="navbar-list right">
                    <li class="hide-on-large-only search-input-wrapper"><a
                            class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                class="material-icons">search</i></a></li>
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen"
                                                        href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a>
                    </li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                           data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                    src="{{asset('public')}}/app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a>
                    </li>
                </ul>
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">person_outline</i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="grey-text text-darken-1" href="{{ route('logout') }}"><i
                                class="material-icons">keyboard_tab</i>
                            {{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form id="navbarForm">
                        <div class="input-field search-input-sm">
                            <input class="search-box-sm mb-0" type="search" required="" id="search"
                                   placeholder="Explore Materialize" data-search="template-list">
                            <label class="label-icon" for="search"><i
                                    class="material-icons search-sm-icon">search</i></label><i
                                class="material-icons search-sm-close">close</i>
                            <ul class="search-list collection search-list-sm display-none"></ul>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>
<!-- END: Header-->
<ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('public')}}/app-assets/images/icon/pdf-image.png" width="24"
                                             height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span
                            class="black-text">Two new item submitted</span><small class="grey-text">Marketing
                            Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">17kb</small></div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('public')}}/app-assets/images/icon/doc-image.png" width="24"
                                             height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span
                            class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd
                            Developer</small></div>
                </div>
                <div class="status"><small class="grey-text">550kb</small></div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('public')}}/app-assets/images/icon/xls-image.png" width="24"
                                             height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span
                            class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing
                            Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">20kb</small></div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('public')}}/app-assets/images/icon/jpg-image.png" width="24"
                                             height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                            class="grey-text">Web Designer</small></div>
                </div>
                <div class="status"><small class="grey-text">37kb</small></div>
            </div>
        </a></li>
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle"
                                             src="{{asset('public')}}/app-assets/images/avatar/avatar-7.png" width="30"
                                             alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                            class="grey-text">UI designer</small></div>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle"
                                             src="{{asset('public')}}/app-assets/images/avatar/avatar-8.png" width="30"
                                             alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small
                            class="grey-text">FontEnd Developer</small></div>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle"
                                             src="{{asset('public')}}/app-assets/images/avatar/avatar-10.png" width="30"
                                             alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span
                            class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small>
                    </div>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle"
                                             src="{{asset('public')}}/app-assets/images/avatar/avatar-12.png" width="30"
                                             alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                            class="grey-text">Web Designer</small></div>
                </div>
            </div>
        </a></li>
</ul>
<ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6></a></li>
</ul>
<ul class="display-none" id="search-not-found">
    <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
                class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
</ul>

<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{route('/')}}">
                <img class="hide-on-med-and-down" src="{{asset('public')}}/app-assets/logo.png" alt="materialize logo"/>
                <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset('public')}}/app-assets/logo.png"
                     alt="materialize logo"/>
                <span class="logo-text hide-on-med-and-down">{{__('Acesoas')}}</span>
            </a>
            <a class="navbar-toggler" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold">
            <a class="waves-effect waves-cyan @if(current_page() == '') active @endif" href="{{route('/')}}">
                <i class="material-icons">dashboard</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>

{{--        <li class="bold">--}}
{{--            <a class="waves-effect waves-cyan @if(current_page() == 'organization') active @endif" href="{{route('organization')}}">--}}
{{--                <i class="material-icons">group</i>--}}
{{--                <span class="menu-title" data-i18n="Organization">Organization</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <li class="bold">
            <a class="waves-effect waves-cyan @if(current_page() == 'applications') active @endif" href="{{route('applications')}}">
                <i class="material-icons">developer_board</i>
                <span class="menu-title" data-i18n="Applications">Applications</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan @if(current_page() == 'gateways') active @endif" href="{{route('gateways')}}">
                <i class="material-icons">router</i>
                <span class="menu-title" data-i18n="Gateways">Gateways</span>
            </a>
        </li>

    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
       href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
