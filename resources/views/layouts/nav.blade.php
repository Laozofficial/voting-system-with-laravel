
<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom @@classes">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="{{ url('/') }}">
                <img class="navbar-brand-dark" src="{{ asset('landing/assets/img/brand/dark.svg') }}" alt="Logo light">
                {{--  <img class="navbar-brand-light" src="{{ asset('landing/assets/img/brand/dark.svg') }}" alt="Logo dark">  --}}
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="@@path/index.html" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="{{ asset('landing/assets/img/brand/dark.svg') }}" alt="Themesberg logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
            {{--  <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="@@path/html/pages/about.html">About</a></li>
                            <li><a class="dropdown-item" href="@@path/html/pages/pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="@@path/html/pages/contact.html">Contact</a></li>
                            <li><a class="dropdown-item" href="@@path/html/pages/sign-in.html">Sign in</a></li>
                            <li><a class="dropdown-item" href="@@path/html/pages/sign-up.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Components</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-lg-6 inside-bg d-none d-lg-block">
                                    <div class="justify-content-center bg-primary text-white">
                                        <div class="px-6 pb-5 pt-3">
                                            <img src="@@path/assets/img/megamenu-image.jpg" alt="Pixel Components">
                                        </div>
                                        <div class="z-2 pb-4 text-center">
                                            <a href="@@path/html/components/all.html"  class="btn btn-primary mb-2 mb-sm-0 mr-3 text-secondary">
                                                <span class="mr-1"><span class="fas fa-th-large"></span></span>
                                                All components
                                            </a>
                                            <a href="https://themesberg.com/docs/neumorphism-ui/components/alerts" target="_blank" class="btn btn-primary mb-2 mb-sm-0">
                                                <span class="mr-1"><span class="fas fa-book"></span></span>
                                                Docs v1.0
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="@@path/html/components/accordions.html">Accordions</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/alerts.html">Alerts</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/badges.html">Badges</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/bootstrap-carousels.html">Bootstrap Carousels</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/breadcrumbs.html">Breadcrumbs</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/buttons.html">Buttons</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/plugins/jquery-counters/" target="_blank">Counters <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/cards.html">Cards</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/e-commerce/" target="_blank">E-commerce <span class="badge badge-dark ml-3">Pro</span></a></li>
                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="@@path/html/components/forms.html">Forms</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/icon-boxes/" target="_blank">Icon Boxes <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/modals.html">Modals</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/navs.html">Navs</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/plugins/owl-carousel/" target="_blank">Owl Carousels <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/pagination.html">Pagination</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/popovers.html">Popovers</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/progress-bars.html">Progress Bars</a></li>

                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/icon-boxes/#steps" target="_blank">Steps <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/tables.html">Tables</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/tabs.html">Tabs</a> </li>
                                        <li><a class="dropdown-item" href="@@path/html/components/toasts.html">Toasts</a> </li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/timelines/" target="_blank">Timelines <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/tooltips.html">Tooltips</a></li>
                                        <li><a class="dropdown-item" href="@@path/html/components/typography.html">Typography</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://demo.themesberg.com/neumorphism-ui-pro/html/components/widgets.html" target="_blank">Widgets <span class="badge badge-dark ml-3">Pro</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Support</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    <a href="https://themesberg.com/docs/neumorphism-ui/getting-started/quick-start/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-file-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                            <span class="small">Examples and guides</span>
                                        </div>
                                    </a>
                                    <a href="https://github.com/themesberg/th-neumorphism-ui-pro/issues" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-microphone-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Support</span>
                                            <span class="small">Looking for answers? Ask us!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>    --}}
            </div>
            <div class="d-flex align-items-center">
                @if (Auth::user())
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</button>
                </form> 
                <a href="{{ url('/admin/index') }}" class="btn btn-primary ml-3">  <i class="fa fa-users"></i> Admin</a> 
                @else
                <a href="{{ url('/login') }}"  class="btn btn-primary text-secondary mr-3"><i class="fa fa-users mr-2"></i> Login</form>
                <a href="{{ url('/register') }}" class="btn btn-primary "><i class="fas fa-book"></i> Register</a>
                @endif
            </div>
        </div>
    </nav>
</header>