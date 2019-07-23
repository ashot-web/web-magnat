@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('content')
    <div class="l-canvas sidebar_none type_wide">
        @yield('header')
        <section class="l-section row height_medium color_alternate" style="background-image: url({{asset('content/img/team1.png')}});background-position: center;background-repeat: no-repeat;background-color: #8650ad">
            <div class="l-section-h i-cf">
                <div class="g-cols row type_default valign_middle">
                    <div class="col-sm-12 column column_container">
                        <div class="column-inner">
                            <div class="wrapper"><h1 class="w-page-title align_center" itemprop="headline"
                                                     style="font-family:'Roboto', sans-serif;color: white;">@lang('team.meet_our_team')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-main">
            <div class="l-main-h i-cf">
                <main class="l-content" itemprop="mainContentOfPage">
                    <section class="l-section row height_medium">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-separator size_medium with_line width_default thick_1 style_solid color_border align_center with_content">
                                                <div class="w-separator-h"><h6 class="w-separator-text">
                                                        <span>@lang('team.our_team')</span>
                                                    </h6></div>
                                            </div>
                                            <div class="align-items-center d-flex justify-content-center g-cols row  type_default valign_top inner">
                                                @foreach($teams as $team)
                                                    <div class="col-sm-4 column column_container animate_afl animate_start">
                                                        <div class="column-inner">
                                                            <div class="wrapper">
                                                                <div class="w-person layout_simple_circle" itemscope=""
                                                                     itemtype="https://schema.org/Person">
                                                                    <div class="w-person-image">
                                                                        <a class="w-person-link" href="#">
                                                                            <img width="450" height="450"
                                                                                 src="{{asset("uploads/team/$team->photo")}}"
                                                                                 class="attachment-full size-full"
                                                                                 alt=""
                                                                                 srcset="{{asset("uploads/team/$team->photo")}}"
                                                                                 sizes="(max-width: 450px) 100vw, 450px"></a>
                                                                    </div>
                                                                    <div class="w-person-content"><a
                                                                                class="w-person-link"
                                                                                href="http://zephyr.us-themes.com/pages/our-team/?_ga=2.105739587.1514061466.1562690187-72444881.1562690187#">
                                                                            <h4 class="w-person-name" itemprop="name">
                                                                                <span>{{$team->textTrans('name')}}</span>
                                                                            </h4></a>
                                                                        <div class="w-person-role" itemprop="jobTitle">
                                                                            {{$team->textTrans('position')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="w-separator size_medium with_line width_default thick_1 style_solid color_border align_center with_content">
                                                <div class="w-separator-h"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="l-section row height_medium color_primary with_img parallax_fixed with_overlay">
                        <div class="l-section-img loaded"
                             style="background-image: url(http://zephyr.us-themes.com/wp-content/uploads/picjumbo.com_HNCK2216.jpg);"
                             data-img-width="1920" data-img-height="1280"></div>
                        <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.7)"></div>
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h2 style="text-align: center;">@lang('team.our_office')</h2>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="w-grid type_grid layout_gallery_default cols_5 no_gap"
                                                 id="us_grid_1">
                                                <style id="us_grid_1_css">@media (max-width: 767px) {
                                                        #us_grid_1 .w-grid-item {
                                                            width: 25%
                                                        }
                                                    }

                                                    @media (max-width: 479px) {
                                                        #us_grid_1 .w-grid-item {
                                                            width: 50%
                                                        }
                                                    }</style>
                                                <style>#us_grid_1 .w-grid-item-h {
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                    }

                                                    #us_grid_1 .usg_post_image_1 {
                                                        transition-duration: 0.3s;
                                                        transform: scale(1) translate(0, 0)
                                                    }

                                                    #us_grid_1 .w-grid-item-h:hover .usg_post_image_1 {
                                                        transform: scale(1) translate(0, 0);
                                                        opacity: 0.5
                                                    }</style>
                                                <div class="w-grid-list d-flex align-content-center justify-content-center">
                                                    @foreach($images as $image)
                                                    <article
                                                            class="w-grid-item ratio_1x1 post-{{$image->id}} attachment type-attachment status-inherit hentry"
                                                            data-id="{{$image->id}}">
                                                        <div class="w-grid-item-h">
                                                            <a class="w-grid-item-anchor"
                                                               href="{{asset("uploads/office/$image->photo")}}"
                                                               ref="magnificPopupGrid" title="{{$image->textTrans('name')}}"><span
                                                                        class="ripple-container"></span></a>
                                                            <div class="w-post-elm post_image usg_post_image_1 stretched">
                                                                <img
                                                                        width="600" height="400"
                                                                        src="{{asset("uploads/office/$image->photo")}}"
                                                                        class="attachment-us_600_400_crop size-us_600_400_crop"
                                                                        alt=""
                                                                        srcset="{{asset("uploads/office/$image->photo")}}"
                                                                        sizes="(max-width: 600px) 100vw, 600px"></div>
                                                        </div>
                                                    </article>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="w-btn-wrapper width_auto align_center"><a
                                                        class="w-btn us-btn-style_4 icon_atleft"
                                                        href="{{route('Contact')}}"><i
                                                            class="material-icons">place</i><span class="w-btn-label">@lang('team.our_location')</span><span
                                                            class="ripple-container"></span></a></div>
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