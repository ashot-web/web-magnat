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
                    <section class="l-section row height_medium color_alternate" style="background-image: url({{asset('content/img/PWA.png')}});background-position: center" >
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_middle">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <h1 class="w-page-title align_center" itemprop="headline"
                                                                 style="font-family:'Roboto', sans-serif;color: white; opacity: 0.7">
                                            @lang('portfolio.our_projects')
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="l-main">
                        <div class="l-main-h i-cf">
                            <main class="l-content" itemprop="mainContentOfPage">
                                <section class="l-section row height_auto width_full">
                                    <div class="l-section-h i-cf">
                                        <div class="g-cols row type_default valign_top">
                                            <div class="col-sm-12 column column_container">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-post-elm post_content" itemprop="text">
                                                            <section class="l-section row height_large" style="background-color: lightgrey">
                                                                <div class="l-section-h i-cf">
                                                                    <div class="g-cols row type_default valign_top">
                                                                        <div class="col-sm-12 column column_container">
                                                                            <div class="column-inner">
                                                                                <div class="wrapper">
                                                                                    <div class="g-cols row  type_default valign_top inner ">
                                                                                        <div class="col-sm-8 column column_container">
                                                                                            <div class="column-inner">
                                                                                                <div class="wrapper">
                                                                                                    <div class="w-slider style_none">
                                                                                                        <div class="w-slider-h">
                                                                                                            <div class="royalSlider rsHor"
                                                                                                                 style="touch-action: pan-y; height: 588px;">
                                                                                                                <div class="rsOverflow grab-cursor"
                                                                                                                     style="width: 784px; height: 588px;">
                                                                                                                    <div class="rsContainer"
                                                                                                                         style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px); transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);">
                                                                                                                        <div style="left: 0px;"
                                                                                                                             class="rsSlide ">
                                                                                                                            <div class="rsContent"
                                                                                                                                 style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
                                                                                                                                <img class="rsImg rsMainSlideImage"
                                                                                                                                     src="{{asset("uploads/portfolio/$item->photo")}}"
                                                                                                                                     style="width: 784px; height: 588px; margin-left: 0px; margin-top: 0px;"
                                                                                                                                     alt="">
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
                                                                                        <div class="col-sm-4 column column_container">
                                                                                            <div class="column-inner">
                                                                                                <div class="wrapper">
                                                                                                    <div class="text_column ">
                                                                                                        <div class="wrapper">
                                                                                                            <h4>{{$item->textTrans('title')}}</h4>
                                                                                                            <p>{!! $item->textTrans('text') !!}</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="w-separator size_small"></div>
                                                                                                    <div class="text_column ">
                                                                                                        <div class="wrapper">
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                                    <strong>@lang('portfolio.client')</strong>:
                                                                                                                    {{$item->textTrans('client')}}
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <strong>@lang('portfolio.date')</strong>:
                                                                                                                    {{$item->created_at}}
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <strong>@lang('portfolio.project_url')</strong>:&nbsp;<a
                                                                                                                            href="{{$item->project_url}}">@lang('portfolio.project_link')</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-separator size_huge"></div>
                                                                                    <div class="w-grid type_grid layout_22849 cols_4 height_fixed"
                                                                                         id="us_grid_1">
                                                                                        <style id="us_grid_1_css">#us_grid_1 .w-grid-item {
                                                                                                padding: 2px
                                                                                            }

                                                                                            #us_grid_1 .w-grid-list {
                                                                                                margin: -2px
                                                                                            }

                                                                                            .w-grid + #us_grid_1 .w-grid-list {
                                                                                                margin-top: 2px
                                                                                            }

                                                                                            .l-section.width_full > div > div > .vc_col-sm-12 > div > div > #us_grid_1 .w-grid-list {
                                                                                                margin-left: 2px;
                                                                                                margin-right: 2px
                                                                                            }

                                                                                            .l-section.height_auto > div > div > .vc_col-sm-12 > div > div > #us_grid_1:first-child .w-grid-list {
                                                                                                margin-top: 2px
                                                                                            }

                                                                                            .l-section.height_auto > div > div > .vc_col-sm-12 > div > div > #us_grid_1:last-child .w-grid-list {
                                                                                                margin-bottom: 2px
                                                                                            }

                                                                                            @media (max-width: 1199px) {
                                                                                                #us_grid_1 .w-grid-item {
                                                                                                    width: 33.333333333333%
                                                                                                }

                                                                                                #us_grid_1 .w-grid-item.size_2x1, #us_grid_1 .w-grid-item.size_2x2 {
                                                                                                    width: 66.666666666667%
                                                                                                }
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
                                                                                            }</style>
                                                                                        <div class="w-grid-list" >
                                                                                            @foreach($portfolios as $k=>$portfolio)
                                                                                                <article
                                                                                                        class="w-grid-item ratio_4x3 size_1x1 post-{{$portfolio->id}} us_portfolio type-us_portfolio status-publish has-post-thumbnail hentry us_portfolio_category-illustration us_portfolio_category-photography"
                                                                                                        data-id="{{$portfolio->id}}">
                                                                                                    <div class="w-grid-item-h"
                                                                                                         style="background-color:{{$portfolio->color}};color:#2b2420;">
                                                                                                        <a class="w-grid-item-anchor"
                                                                                                           href="{{route('portfolioItem',['id'=>$portfolio->id])}}"
                                                                                                           rel="bookmark"
                                                                                                           aria-label="Creative Project – Slider"><span
                                                                                                                    class="ripple-container"></span></a>
                                                                                                        <div class="w-post-elm post_image usg_post_image_1 stretched">
                                                                                                            <img width="1024"
                                                                                                                 height="683"
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
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </article>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>
                                                        <div class="w-post-elm post_navigation layout_sided inv_true">
                                                            @if($next!=null)
                                                            <a class="post_navigation-item order_second to_prev" href="{{route('portfolioItem',['id'=>$next->id])}}">
                                                                <div class="post_navigation-item-img">
                                                                    <img width="150" height="150" style="height: 130px" src="{{asset("uploads/portfolio/$next->photo")}}" class="attachment-thumbnail size-thumbnail" alt="" srcset="{{asset("uploads/portfolio/$next->photo")}}" sizes="(max-width: 150px) 100vw, 150px">
                                                                </div>
                                                                <div class="post_navigation-item-arrow"></div>
                                                                <div class="post_navigation-item-title">
                                                                    <span>{{$next->textTrans('title')}}</span>
                                                                </div>
                                                            </a>
                                                            @endif
                                                            @if($previous!=null)
                                                                <a class="post_navigation-item order_first to_next" href="{{route('portfolioItem',['id'=>$previous->id])}}">
                                                                <div class="post_navigation-item-img">
                                                                    <img width="150" height="150" style="height: 130px" src="{{asset("uploads/portfolio/$previous->photo")}}" class="attachment-thumbnail size-thumbnail" alt="" srcset="{{asset("uploads/portfolio/$previous->photo")}}" sizes="(max-width: 150px) 100vw, 150px">
                                                                </div>
                                                                <div class="post_navigation-item-arrow">
                                                                </div>
                                                                <div class="post_navigation-item-title">
                                                                    <span>{{$previous->textTrans('title')}}</span>
                                                                </div>
                                                            </a>
                                                             @endif
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