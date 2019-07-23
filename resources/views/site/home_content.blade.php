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
                    <section class="l-section row height_huge color_primary align_center with_img with_overlay">

                        <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.4);background-image: url({{asset('content/img/slider2.jpg')}});background-size: cover"></div>
                        <div class="l-section-h i-cf">
                            {{--                        TopContent--}}
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper"><h1
                                                    style="font-size: 6rem;line-height: 1.1;text-align: center;color: white;opacity: 0.6"
                                                    class="custom_heading">@lang('home.header')
                                                <br>
                                            </h1>
                                            {{--                                        TopContentButtons--}}
                                            <div class="w-btn-wrapper width_auto align_left">
                                                <a class="w-btn us-btn-style_1" href="{{route('Blog')}}" style="font-size:1.2rem;opacity: 0.7">
                                                    <span class="w-btn-label">@lang('home.view_blog')</span>
                                                    <span class="ripple-container"></span>
                                                </a>
                                            </div>
                                            <div class="w-btn-wrapper width_auto align_left">
                                                <a class="w-btn us-btn-style_2"
                                                   href="{{route('portfolio')}}"
                                                   style="font-size:1.2rem;opacity: 0.7">
                                                    <span class="w-btn-label" style="color: #a330ad">@lang('home.view_portfolio')</span>
                                                    <span class="ripple-container"></span>
                                                </a>
                                            </div>
                                            {{--                                        EndTopContentButtons--}}
                                            <div class="w-separator size_medium"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                        EndTopContent--}}
                        </div>
                    </section>
                    {{--                we engage--}}
                    <section class="l-section row height_large" id="start">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center">@lang('home.engage')</h2>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="g-cols row  type_default valign_top inner ">
                                                <div class="col-sm-4 column column_container animate_afc">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_top style_circle color_primary align_center">
                                                                <a class="w-iconbox-link"
                                                                   href="http://zephyr.us-themes.com/#portfolio"
                                                                   aria-label="Passion">
                                                                    <div class="w-iconbox-icon"><i
                                                                                class="material-icons">tab</i><span
                                                                                class="ripple-container"></span></div>
                                                                </a>
                                                                <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                               href="http://zephyr.us-themes.com/#portfolio"
                                                                                               aria-label="Passion"><h4
                                                                                class="w-iconbox-title">@lang('home.engage1')</h4>
                                                                    </a>
                                                                    <div class="w-iconbox-text">
                                                                        <p>@lang('home.engage1_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 column column_container animate_afc"
                                                     style="animation-delay:0.2s;">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_top style_circle color_primary align_center">
                                                                <a class="w-iconbox-link"
                                                                   href="http://zephyr.us-themes.com/#simple"
                                                                   aria-label="Technology">
                                                                    <div class="w-iconbox-icon"><i
                                                                                class="material-icons">tab_unselected</i><span
                                                                                class="ripple-container"></span></div>
                                                                </a>
                                                                <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                               href="http://zephyr.us-themes.com/#simple"
                                                                                               aria-label="Technology">
                                                                        <h4 class="w-iconbox-title">@lang('home.engage2')</h4>
                                                                    </a>
                                                                    <div class="w-iconbox-text">
                                                                        <p>@lang('home.engage2_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 column column_container animate_afc"
                                                     style="animation-delay:0.4s;">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_top style_circle color_primary align_center">
                                                                <a class="w-iconbox-link" href=""
                                                                   aria-label="Simplicity">
                                                                    <div class="w-iconbox-icon">
                                                                        <i class="material-icons">system_update</i>
                                                                        <span class="ripple-container"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                               href=""
                                                                                               aria-label="Simplicity">
                                                                        <h4 class="w-iconbox-title">@lang('home.engage3')</h4>
                                                                    </a>
                                                                    <div class="w-iconbox-text">
                                                                        <p>@lang('home.engage3_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{--                end we engage--}}
                    {{--                done right--}}
                    <section class="l-section row height_large color_alternate" id="responsive">
                        <div class="l-section-h i-cf" style="padding-bottom: 0px !important;">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container animate_afb">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center">@lang('home.details')</h2>
                                                    <p style="text-align: center">@lang('home.details_text')</p>
                                                </div>
                                            </div>
                                            <div class="w-separator size_large"></div>
                                            <div class="g-cols row  type_default valign_top inner ">
                                                <div class="col-sm-6 column column_container">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-image align_center animate_afl">
                                                                <div class="w-image-h">
                                                                    <img width="760" height="497"
                                                                         class="attachment-large size-large" alt=""
                                                                         srcset="{{asset('content/img/ipad-iphone.png')}}"
                                                                         sizes="(max-width: 760px) 100vw, 760px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 column column_container animate_afr">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i
                                                                            class="far fa-object-group"></i></div>
                                                                <div class="w-iconbox-meta">
                                                                    <h4 class="w-iconbox-title" style="font-size:20px;">
                                                                        @lang('home.responsive_title')
                                                                    </h4>
                                                                    <div class="w-iconbox-text">
                                                                        <p>
                                                                            @lang('home.responsive_text')
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-separator size_medium"></div>
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i class="far fa-image"></i>
                                                                </div>
                                                                <div class="w-iconbox-meta">
                                                                    <h4 class="w-iconbox-title" style="font-size:20px;">
                                                                        @lang('home.design')
                                                                    </h4>
                                                                    <div class="w-iconbox-text">
                                                                        <p>
                                                                            @lang('home.design_text')
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-separator size_medium"></div>
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon">
                                                                    <i class="far fa-cogs"></i>
                                                                </div>
                                                                <div class="w-iconbox-meta">
                                                                    <h4 class="w-iconbox-title" style="font-size:20px;">
                                                                        @lang('home.functionality')
                                                                    </h4>
                                                                    <div class="w-iconbox-text">
                                                                        <p>
                                                                            @lang('home.functionality_text')
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{--                end done right--}}
                    <section class="l-section row height_large color_primary with_img with_overlay parallax_fixed"
                             id="portfolio">
                        <div class="l-section-img loaded"
                             style="background-image: url('http://zephyr.us-themes.com/wp-content/uploads/colorful-266993_1920.jpg'); background-position: 50% 50%;"
                             data-img-width="1920" data-img-height="1276"></div>
                        <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.4)"></div>
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        {{--                            Portfolio Items--}}
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center">@lang('home.latest')</h2>
                                                </div>
                                            </div>
                                            <div class="w-separator size_small"></div>
                                            <div class="w-grid type_masonry layout_22841 cols_3 height_fixed with_isotope"
                                                 id="us_grid_1">
                                                <style id="us_grid_1_css">
                                                    #us_grid_1 .w-grid-item {
                                                        padding: 2px
                                                    }

                                                    #us_grid_1 .w-grid-list {
                                                        margin: -2px
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
                                                        padding-bottom: 75.0000%
                                                    }

                                                    @media (min-width: 600px) {
                                                        #us_grid_1 .w-grid-item.size_1x2 .w-grid-item-h:before {
                                                            padding-bottom: calc(150% + 2px + 2px)
                                                        }

                                                        #us_grid_1 .w-grid-item.size_2x1 .w-grid-item-h:before {
                                                            padding-bottom: calc(37.5% - 2px * 0.75)
                                                        }

                                                        #us_grid_1 .w-grid-item.size_2x2 .w-grid-item-h:before {
                                                            padding-bottom: calc(75% - 2px * -0.5)
                                                        }
                                                    }

                                                    #us_grid_1 .w-grid-item-h {
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_post_custom_field_1 {
                                                        border-radius: 50%;
                                                        background-color: inherit
                                                    }

                                                    #us_grid_1 .usg_post_custom_field_1 {
                                                        transition-duration: 0.4s;
                                                        transform: scale(0) translate(0%, 0%);
                                                        opacity: 0
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_post_custom_field_1 {
                                                        transform: scale(1.5) translate(0%, 0%);
                                                        opacity: 1
                                                    }

                                                    #us_grid_1 .usg_vwrapper_1 {
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_vwrapper_1 {
                                                        transition-duration: 0.4s;
                                                        transform: scale(0) translate(0%, 0%);
                                                        opacity: 0
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_vwrapper_1 {
                                                        transform: scale(1) translate(0%, 0%);
                                                        opacity: 1
                                                    }

                                                    #us_grid_1 .usg_post_title_1 {
                                                        font-size: 1.2rem;
                                                        border-radius: 0;
                                                        color: inherit
                                                    }

                                                    #us_grid_1 .usg_post_taxonomy_1 {
                                                        font-size: 13px;
                                                        border-radius: 0
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }

                                                    #us_grid_1 .usg_post_custom_field_1 {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        padding: 2rem
                                                    }

                                                    #us_grid_1 .usg_vwrapper_1 {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        padding: 2rem
                                                    }
                                                </style>
                                                <div class="w-grid-list" style="position: relative; height: 603.968px;">
                                                    @foreach($portfolios as $k=>$portfolio)
                                                        <article
                                                                class="w-grid-item ratio_4x3 size_1x1 post-{{$portfolio->id}} us_portfolio type-us_portfolio status-publish has-post-thumbnail hentry us_portfolio_category-photography"
                                                                data-id="{{$portfolio->id}}">
                                                            <div class="w-grid-item-h"
                                                                 style="background-color:{{$portfolio->color}};color:#ffffff;">
                                                                <a class="w-grid-item-anchor"
                                                                   href="http://zephyr.us-themes.com/portfolio/project-slider/"
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
                                                                        <a href="http://zephyr.us-themes.com/portfolio_category/photography/">{!! $portfolio->textTrans('text') !!}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>

                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="w-btn-wrapper width_auto align_center">
                                                <a class="w-btn us-btn-style_6 icon_atleft"
                                                   href="{{route('portfolio')}}">
                                                    <i class="material-icons">arrow_forward</i>
                                                    <span class="w-btn-label">@lang('home.full_portfolio')</span>
                                                    <span class="ripple-container"></span>
                                                </a>
                                            </div>
                                        </div>
                                        {{--                            End Portfolio Items--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_large" id="simple">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_middle">
                                <div class="col-sm-6 column column_container animate_afl">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2>@lang('home.things_title')</h2>
                                                    <p>@lang('home.things_text')</p>
                                                </div>
                                            </div>
                                            <div class="w-separator size_small"></div>
                                            <div class="w-btn-wrapper width_auto align_left">
                                                <a class="w-btn us-btn-style_1"
                                                   href="{{route('portfolio')}}">
                                                    <span class="w-btn-label">@lang('home.features')</span>
                                                    <span class="ripple-container"></span>
                                                </a>
                                            </div>
                                            <div class="w-btn-wrapper width_auto align_left">
                                                <a class="w-btn us-btn-style_4"
                                                   href="#">
                                                    <span class="w-btn-label">@lang('home.more')</span>
                                                    <span class="ripple-container"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 column column_container animate_afr">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-image align_center">
                                                <div class="w-image-h">
                                                    <img width="800" height="505"
                                                         src="{{asset('content/img/')}}"
                                                         class="attachment-large size-large" alt=""
                                                         srcset="{{asset('content/img/iPhone-6-Infinity1.png')}}"
                                                         sizes="(max-width: 800px) 100vw, 800px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_large color_primary with_img parallax_ver with_overlay"
                             id="counters">
                        <div class="l-section-img loaded"
                             style="background-image: url({{asset('img/laptop.jpg')}});"
                             data-img-width="1920" data-img-height="1280"></div>
                        <div class="l-section-overlay" style="background-color: rgba(17,17,17,0.5)"></div>
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center"><strong>Web
                                                            Magnat-</strong>@lang('home.idea')!</h2>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="g-cols row  type_default valign_top inner ">
                                                <div class="col-sm-4 column column_container animate_afc">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-counter color_heading align_center"
                                                                 data-duration="2000">
                                                                <div class="w-counter-value"
                                                                     style="font-size:5rem;"><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final=""></span><span
                                                                            class="w-counter-value-part type_number"
                                                                            data-final="999">0</span><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final="+">+</span></div>
                                                                <h6 class="w-counter-title">@lang('home.feedback')</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 column column_container animate_afc"
                                                     style="animation-delay:0.2s;">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-counter color_heading align_center"
                                                                 data-duration="2000">
                                                                <div class="w-counter-value"
                                                                     style="font-size:5rem;"><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final=""></span><span
                                                                            class="w-counter-value-part type_number"
                                                                            data-final="250">0</span><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final=""></span></div>
                                                                <h6 class="w-counter-title">@lang('home.done')</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 column column_container animate_afc"
                                                     style="animation-delay:0.4s;">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-counter color_heading align_center"
                                                                 data-duration="2000">
                                                                <div class="w-counter-value"
                                                                     style="font-size:5rem;"><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final=""></span><span
                                                                            class="w-counter-value-part type_number"
                                                                            data-final="999">0</span><span
                                                                            class="w-counter-value-part type_text"
                                                                            data-final="+"></span></div>
                                                                <h6 class="w-counter-title">@lang('home.coffee')</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_large color_alternate">
                        <div class="l-section-h i-cf">
                            <div class="text_column ">
                                <div class="wrapper">
                                    <h2 style="text-align: center">@lang('home.skills')</h2>
                                </div>
                            </div>
                            <div class="w-separator size_medium"></div>
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="container my-4">
                                                <div class="row text-center">
                                                    <div class="col-md-12 mb-4">

                                                        <img class="rounded-circle  z-depth-2" height="100%"
                                                             width="100%" alt="100x100" src="{{asset('logo/html.png')}}"
                                                             data-holder-rendered="true">
                                                        <span class="my-5 h2 rounded-circle">HTML5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/css3.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">CSS3</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb"
                                     style="animation-delay:0.2s;">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/js.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">JavaScript</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator  size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/jquery.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">JQuery</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb"
                                     style="animation-delay:0.2s;">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/node.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">NodeJS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator  size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/react.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">React</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb"
                                     style="animation-delay:0.4s;">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/php.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">PHP</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator  size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/laravel.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">Laravel</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb"
                                     style="animation-delay:0.4s;">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/ios.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">IOS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator  size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/android.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">Android</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-2 column column_container animate_afb"
                                     style="animation-delay:0.4s;">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" height="100%" width="100%" alt="100x100"
                                                                 src="{{asset('logo/ui_ux.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">UI/UX</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-separator  size_small"></div>
                                            <div class="w-iconbox iconpos_left style_circle color_secondary align_left">
                                                <div class="container my-4">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mb-4">
                                                            <img class="rounded-circle  z-depth-2" height="100%"
                                                                 width="100%" alt="100x100"
                                                                 src="{{asset('logo/ajax.png')}}"
                                                                 data-holder-rendered="true">
                                                            <span class="my-5 h2 rounded-circle">AJAX</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_auto width_full">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_boxes valign_middle">
                                <div class="col-sm-6 column column_container has-fill animate_afl"
                                     style="color:#ffffff;">
                                    <div class="column-inner  vc_custom_1437647258026 color_custom">
                                        <div class="wrapper">
                                            <div class="w-image align_center">
                                                <div class="w-image-h">
                                                    <img width="800" height="505"
                                                         src="{{asset('content/img/')}}"
                                                         class="attachment-large size-large" alt=""
                                                         srcset="{{asset('content/img/responsive-website.png')}}"
                                                         sizes="(max-width: 800px) 100vw, 800px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 column column_container animate_afr">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center"><strong class="highlight highlight_primary">Web-Magnat-</strong> <span>@lang('home.our_projects')</span>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="g-cols row  type_default valign_top inner ">
                                                <div class="col-sm-6 column column_container">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i
                                                                            class="far fa-paper-plane"></i></div>
                                                                <div class="w-iconbox-meta"><h4 class="w-iconbox-title"
                                                                                                style="font-size:20px;">
                                                                        @lang('home.optimised')</h4>
                                                                    <div class="w-iconbox-text">  @lang('home.optimised_text')<p></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="w-separator size_small"></div>
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i class="far fa-heart"></i>
                                                                </div>
                                                                <div class="w-iconbox-meta"><h4 class="w-iconbox-title"
                                                                                                style="font-size:20px;">
                                                                        @lang('home.documentation')</h4>
                                                                    <div class="w-iconbox-text"><p>@lang('home.documentation_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 column column_container">
                                                    <div class="column-inner">
                                                        <div class="wrapper">
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i class="far fa-cube"></i>
                                                                </div>
                                                                <div class="w-iconbox-meta"><h4 class="w-iconbox-title"
                                                                                                style="font-size:20px;">
                                                                        @lang('home.flexible')</h4>
                                                                    <div class="w-iconbox-text"><p>@lang('home.fully_featured_flexible_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-separator size_small"></div>
                                                            <div class="w-iconbox iconpos_left style_default color_contrast align_left">
                                                                <div class="w-iconbox-icon"><i class="far fa-bell"></i>
                                                                </div>
                                                                <div class="w-iconbox-meta"><h4 class="w-iconbox-title"
                                                                                                style="font-size:20px;">
                                                                       @lang('home.friendly')</h4>
                                                                    <div class="w-iconbox-text"><p>@lang('home.friendly_text')</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                <div class="w-actionbox-text"><h2>Web-Magnat. @lang('home.better')</h2></div>
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
    <a class="w-toplink pos_right" href="#top" title="Back to top" aria-hidden="true"></a>
    <a class="w-header-show" href="javascript:void(0);"><span>Menu</span></a>
    <div class="w-header-overlay"></div>
@endsection