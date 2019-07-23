@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('content')

    <div class="l-canvas sidebar_none type_wide">
        {{--    header--}}
        @yield('header')
        <section class="l-section row height_medium color_alternate" style="background-image: url({{asset('content/img/web.png')}});background-size:cover;padding-top:200px;background-position: center;background-repeat: no-repeat;background-color: #8650ad">
            <div class="l-section-h i-cf">
                <div class="g-cols row type_default valign_middle">
                    <div class="col-sm-12 column column_container">
                        <div class="column-inner">
                            <div class="wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section row height_large color_alternate">
                    <div class="l-section-h i-cf">
                        <div class="text_column ">
                            <div class="wrapper">
                                <h2 style="text-align: center">@lang('services.our_services')</h2>
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
                <section class="l-section row height_large color_primary with_img parallax_ver with_overlay">
                    <div class="l-section-img loaded"
                         style="background-image: url(http://zephyr.us-themes.com/wp-content/uploads/shutterstock_135392420.jpg); background-position: 50% 158.012px;"
                         data-img-width="1920" data-img-height="1263"></div>
                    <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.5)"></div>
                    <div class="l-section-h i-cf">
                        <div class="g-cols row type_default valign_top">
                            <div class="col-sm-12 column column_container animate_afb animate_start">
                                <div class="column-inner">
                                    <div class="wrapper">
                                        <div class="w-btn-wrapper width_auto align_center"><a
                                                    class="w-btn us-btn-style_1 icon_atleft"
                                                    href="{{route('Contact')}}"
                                                    style="font-size:19px;"><i class="material-icons">mail</i><span
                                                        class="w-btn-label">@lang('contact.contact')</span><span
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