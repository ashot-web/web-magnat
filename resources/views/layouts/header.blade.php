@section('header')
<header id="top" class="l-header pos_fixed bg_transparent shadow_thin id_22728 notransition" itemscope=""
        itemtype="https://schema.org/WPHeader">
    {{--        Subheader_at_top(adresses and logos)--}}
    <div class="l-subheader at_top">
        <div class="l-subheader-h">
            <div class="l-subheader-cell at_left">
                <div class="text ush_text_2">
                    <div class="text-h" style="display: flex;align-items: center">
                        <i class="material-icons">phone</i>
                        <span class="text-value">{{$tel}}</span>
                    </div>
                </div>
                <div class="text ush_text_3">
                    <div class="text-h" style="display: flex;align-items: center">
                        <i class="material-icons">email</i>
                        <a class="text-value" href="mailto:info@webmagnat.com">info@webmagnat.com</a>
                    </div>
                </div>
            </div>
            <div class="l-subheader-cell at_center"></div>
            <div class="l-subheader-cell at_right">
                <div class="w-socials ush_socials_1 style_default hover_fade color_text shape_circle">
                    <div class="w-socials-list">
                        <div class="w-socials-item facebook">
                            <a class="w-socials-item-link" target="_blank" href="#" title="Facebook"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>Facebook</span>
                            </div>
                        </div>
                        <div class="w-socials-item twitter">
                            <a class="w-socials-item-link" target="_blank" href="#" title="Twitter"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>Twitter</span>
                            </div>
                        </div>
                        <div class="w-socials-item behance">
                            <a class="w-socials-item-link" target="_blank" href="#" title="Behance"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>Behance</span>
                            </div>
                        </div>
                        <div class="w-socials-item instagram">
                            <a class="w-socials-item-link" target="_blank" href="#" title="Instagram"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>Instagram</span>
                            </div>
                        </div>
                        <div class="w-socials-item vk">
                            <a class="w-socials-item-link" target="_blank" href="#" title="Vkontakte"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>Vkontakte</span>
                            </div>
                        </div>
                        <div class="w-socials-item soundcloud">
                            <a class="w-socials-item-link" target="_blank" href="#" title="SoundCloud"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>SoundCloud</span>
                            </div>
                        </div>
                        <div class="w-socials-item deviantart">
                            <a class="w-socials-item-link" target="_blank" href="#" title="DeviantArt"
                               rel="nofollow">
                                <span class="w-socials-item-link-hover"></span>
                            </a>
                            <div class="w-socials-item-popup">
                                <span>DeviantArt</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--        EndSubheader--}}
    <div class="l-subheader at_middle">
        <div class="l-subheader-h">
            <div class="l-subheader-cell at_left">
                <div class="text ush_text_1">
                    <div class="text-h"><a class="text-value" href="{{route('home')}}">Web Magnat</a></div>
                </div>
            </div>
            {{--                Navbar--}}
            <div class="l-subheader-cell at_center"></div>
            <div class="l-subheader-cell at_right">
                <nav class="w-nav ush_menu_1 dropdown_mdesign m_align_left m_layout_dropdown type_desktop"
                     itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                    <a class="w-nav-control" href="javascript:void(0);" aria-label="Menu">
                        <div class="w-nav-icon">
                            <i></i>
                        </div>
                        <span>Menu</span>
                    </a>
                    <ul class="w-nav-list level_1 hover_simple">
                        {{--                            Navbar-Home--}}
                        <li id="menu-item-3629"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1546 current_page_item menu-item-has-children w-nav-item level_1 menu-item-3629 togglable">
                            <a class="w-nav-anchor level_1" href="{{route('home')}}">
                                <span class="w-nav-title">@lang('home.home')</span>
                                <span class="w-nav-arrow"></span>
                                <span class="ripple-container"></span>
                            </a>
                        </li>
                        {{--                            EndNavbar-Home--}}
                        {{--                            PortfolioHome--}}
                        <li id="menu-item-3637"
                            class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637 columns_3 togglable">
                            <a class="w-nav-anchor level_1" href="{{route('portfolio')}}">
                                <span class="w-nav-title">@lang('home.portfolio')</span>
                                <span class="w-nav-arrow"></span>
                                <span class="ripple-container"></span>
                            </a>
                        </li>
                        {{--                            EndPortfolioHome--}}
                        {{--                            Navbar-Blog--}}
                        <li id="menu-item-5294"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-5294 togglable">
                            <a class="w-nav-anchor level_1" href="{{route('Blog')}}">
                                <span class="w-nav-title">@lang('home.blog')</span>
                                <span class="w-nav-arrow"></span>
                                <span class="ripple-container"></span>
                            </a>
                        </li>
                        {{--                           EndNavbar-Blog --}}
                        {{--                            Navbar-Pages--}}
                        <li id="menu-item-3594"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3594 togglable">
                            <a class="w-nav-anchor level_1" href="">
                                <span class="w-nav-title">@lang('home.menu_more')</span>
                                <span class="w-nav-arrow"></span>
                                <span class="ripple-container"></span>
                            </a>

                            <ul class="w-nav-list level_2">

                                {{--                            Services--}}
                                <li id="menu-item-3598"
                                    class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3598">
                                    <a class="w-nav-anchor level_2" href="{{route('Services')}}">
                                        <span class="w-nav-title">@lang('home.services')</span>
                                        <span class="w-nav-arrow"></span>
                                        <span class="ripple-container"></span>
                                    </a>
                                </li>
                                {{--                                    Our Team--}}
                                <li id="menu-item-3612"
                                    class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3612">
                                    <a class="w-nav-anchor level_2" href="{{route('Team')}}">
                                        <span class="w-nav-title">@lang('home.team')</span>
                                        <span class="w-nav-arrow"></span>
                                        <span class="ripple-container"></span>
                                    </a>
                                </li>
                                {{--                            AboutUs--}}
                                <li id="menu-item-3597"
                                    class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3597">
                                    <a class="w-nav-anchor level_2" href="{{route('AboutUs')}}">
                                        <span class="w-nav-title">@lang('home.about')</span>
                                        <span class="w-nav-arrow"></span>
                                        <span class="ripple-container"></span>
                                    </a>
                                </li>
                                {{--                                    Contact--}}
                                <li id="menu-item-3595"
                                    class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3595">
                                    <a class="w-nav-anchor level_2" href="{{route('Contact')}}">
                                        <span class="w-nav-title">@lang('home.contact')</span>
                                        <span class="w-nav-arrow"></span>
                                        <span class="ripple-container"></span>
                                    </a>
                                </li>
                                {{--                                    Page Examples--}}
                            </ul>
                        </li>
                        {{--                            EndNavbar-Pages--}}
                        <li class="w-nav-close"></li>
                    </ul>
                    <div class="w-nav-options hidden"
                         onclick="return {'mobileWidth':1000,'mobileBehavior':1}"></div>
                </nav>
                {{--                    Navbar-Search--}}
                <div class="search ush_search_1 layout_fullscreen">
                    <div class="search-background"></div>
                    <a class="search-open" href="javascript:void(0);" title="Search"><i
                                class="material-icons">search</i></a>
                    <div class="search-form">
                        <form class="search-form-h" autocomplete="off" action="" method="get">
                            <div class="search-form-field">
                                <input type="text" name="s" id="us_form_search_s" placeholder="Search"
                                       aria-label="Search">
                                <span class="w-form-row-field-bar"></span>
                            </div>
                            <a class="search-close" href="javascript:void(0);" title="Close"></a>
                        </form>
                    </div>
                </div>
                {{--                    EndNavbar-Search--}}
            </div>
            {{--                EndNavbar--}}
        </div>
    </div>
    <div class="l-subheader for_hidden hidden"></div>
</header>
@endsection