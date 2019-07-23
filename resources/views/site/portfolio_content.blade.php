@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('content')
    <div class="l-canvas sidebar_none type_wide">
        {{--    header--}}
        @yield('header')
        {{--    EndHeader--}}
        <div class="l-main">
            <div class="l-main-h i-cf">
                <main class="l-content" itemprop="mainContentOfPage">
                    <section class="l-section row height_large color_primary with_img with_overlay parallax_fixed">
                        <div class="l-section-img loaded"
                             style="background-image: url({{asset('content/img/PortfolioWebsite.jpg')}}); background-position: 50% 50%;"
                             data-img-width="1920" data-img-height="1280"></div>
                        <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.5)"></div>
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container animate_afb animate_start">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h1 style="text-align: center"><strong>@lang('portfolio.portfolio')</strong></h1>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="w-grid type_grid layout_22900 cols_3 height_fixed"
                                                 id="us_grid_1">
                                                <style id="us_grid_1_css">#us_grid_1 .w-grid-item {
                                                        padding: 2px
                                                    }

                                                    #us_grid_1 .w-grid-list {
                                                        margin: -2px -2px 2px
                                                    }

                                                    .w-grid + #us_grid_1 .w-grid-list {
                                                        margin-top: 2px
                                                    }

                                                    .l-section.width_full > div > div > .col-sm-12 > div > div > #us_grid_1 .w-grid-list {
                                                        margin-left: 2px;
                                                        margin-right: 2px
                                                    }

                                                    .l-section.height_auto > div > div > .col-sm-12 > div > div > #us_grid_1:first-child .w-grid-list {
                                                        margin-top: 2px
                                                    }

                                                    .l-section.height_auto > div > div > .col-sm-12 > div > div > #us_grid_1:last-child .w-grid-list {
                                                        margin-bottom: 2px
                                                    }

                                                    @media (max-width: 899px) {
                                                        #us_grid_1 .w-grid-item {
                                                            width: 50%
                                                        }

                                                        #us_grid_1 .w-grid-item.size_2x1, #us_grid_1 .w-grid-item.size_2x2 {
                                                            width: 100%
                                                        }
                                                    }

                                                    @media (max-width: 599px) {
                                                        #us_grid_1 .w-grid-list {
                                                            margin: 0
                                                        }

                                                        #us_grid_1 .w-grid-item {
                                                            width: 100%;
                                                            padding: 0;
                                                            margin-bottom: 2px
                                                        }
                                                    }</style>
                                                <style>#us_grid_1 .w-grid-item-h:before {
                                                        padding-bottom: 100.0000%
                                                    }

                                                    @media (min-width: 600px) {
                                                        #us_grid_1 .w-grid-item.size_1x2 .w-grid-item-h:before {
                                                            padding-bottom: calc(200% + 2px + 2px)
                                                        }

                                                        #us_grid_1 .w-grid-item.size_2x1 .w-grid-item-h:before {
                                                            padding-bottom: calc(50% - 2px * 1)
                                                        }

                                                        #us_grid_1 .w-grid-item.size_2x2 .w-grid-item-h:before {
                                                            padding-bottom: calc(100% - 2px * 0)
                                                        }
                                                    }

                                                    #us_grid_1 .w-grid-item-h {
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        transition-duration: 0.4s;
                                                        transform: scale(1) translate(0%, 0%);
                                                        opacity: 0.35
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_post_image_1 {
                                                        transform: scale(1) translate(0%, 0%);
                                                        opacity: 1
                                                    }

                                                    #us_grid_1 .usg_vwrapper_1 {
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_post_title_1 {
                                                        font-size: 1.2rem;
                                                        border-radius: 0;
                                                        color: inherit
                                                    }

                                                    #us_grid_1 .usg_post_title_1 {
                                                        transition-duration: 0.3s;
                                                        transform: scale(1) translate(0%, 0%)
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_post_title_1 {
                                                        transform: scale(1) translate(0%, -100%);
                                                        opacity: 0
                                                    }

                                                    #us_grid_1 .usg_post_date_1 {
                                                        font-size: 13px;
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_post_date_1 {
                                                        transition-duration: 0.3s;
                                                        transform: scale(1) translate(0%, 0%);
                                                        opacity: 0.66
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_post_date_1 {
                                                        transform: scale(1) translate(0%, 100%);
                                                        opacity: 0
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        position: absolute;
                                                        top: -1px;
                                                        right: -1px;
                                                        bottom: -1px;
                                                        left: -1px
                                                    }

                                                    #us_grid_1 .usg_vwrapper_1 {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        padding: 2rem
                                                    }</style>
                                                <div class="w-grid-list">
                                                    @foreach($portfolios as $k=>$portfolio)
                                                        <article
                                                                class="w-grid-item ratio_1x1 size_1x1 post-{{$portfolio->id}} us_portfolio type-us_portfolio status-publish has-post-thumbnail hentry us_portfolio_category-photography"
                                                                data-id="{{$portfolio->id}}">
                                                            <div class="w-grid-item-h"
                                                                 style="background-color:{{$portfolio->color}};color:#ffffff;">
                                                                <a class="w-grid-item-anchor"
                                                                   href="{{route('portfolioItem',['id'=>$portfolio->id])}}"
                                                                   rel="bookmark" aria-label="Single Project – Slider">
                                                                    <span class="ripple-container"></span>
                                                                </a>
                                                                <div class="w-post-elm post_image usg_post_image_1 stretched">
                                                                    <img width="1024" height="683"
                                                                         src="{{asset("uploads/portfolio/$portfolio->photo")}}"
                                                                         class="attachment-large size-large wp-post-image"
                                                                         alt=""
                                                                         srcset="{{asset("uploads/portfolio/$portfolio->photo")}}"
                                                                         sizes="(max-width: 1024px) 100vw, 1024px">
                                                                </div>
                                                                <div class="w-post-elm post_custom_field usg_post_custom_field_1 color_link_inherit type_text"></div>
                                                                <div class="w-vwrapper usg_vwrapper_1 align_center valign_middle ">
                                                                    <h2 class="w-post-elm post_title usg_post_title_1 with_text_color entry-title">
                                                                        {{$portfolio->textTrans('title')}}</h2>
                                                                    <div class="w-post-elm post_taxonomy usg_post_taxonomy_1 style_simple color_link_inherit">
                                                                        <a href="http://zephyr.us-themes.com/portfolio_category/photography/">{!! $portfolio->textTrans('text')!!}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    @endforeach
                                                </div>
                                                <div class="g-loadmore loading done">
                                                    <div class="g-preloader type_1">
                                                        <div></div>
                                                    </div>
                                                    <a class="w-btn us-btn-style_1" href="javascript:void(0)">
                                                        <span class="w-btn-label">Load More</span>
                                                        <span class="ripple-container"></span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_large color_primary">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container animate_afb">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-actionbox color_primary">
                                                <div class="w-actionbox-text"><h2>Web-Magnat. @lang('home.better')</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    @yield('footer')
    <a class="w-toplink pos_right" href="http://zephyr.us-themes.com/#" title="Back to top" aria-hidden="true"></a>
    <a class="w-header-show" href="javascript:void(0);"><span>Menu</span></a>
    <div class="w-header-overlay"></div>
@endsection