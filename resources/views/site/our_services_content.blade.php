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
                <section class="l-section row height_large">
                    <div class="l-section-h i-cf">
                        <div class="g-cols row type_default valign_top">
                            <div class="col-sm-12 column column_container">
                                <div class="column-inner">
                                    <div class="wrapper">
                                        <h1 class="w-page-title align_center" itemprop="headline"
                                            style="font-family:'Roboto', sans-serif;opacity: 0.9">@lang('team.our_services')</h1>
                                        <div class="w-separator size_large"></div>
                                        <div class="g-cols row  type_default valign_top inner ">
                                            <div class="col-sm-4 column column_container animate_afb animate_start">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Web Design">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #ff7043 inset;background-color:#ff7043;color:#ffffff;">
                                                                    <i class="material-icons">important_devices</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Web Design"><h4
                                                                            class="w-iconbox-title">Web Design</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Animation">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #41baae inset;background-color:#41baae;color:#ffffff;">
                                                                    <i class="material-icons">local_play</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Animation"><h4
                                                                            class="w-iconbox-title">Animation</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Branding">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #7e57c2 inset;background-color:#7e57c2;color:#ffffff;">
                                                                    <i class="material-icons">wallet_giftcard</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Branding"><h4
                                                                            class="w-iconbox-title">Branding</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 column column_container animate_afb animate_start"
                                                 style="animation-delay:0.2s;">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Photography">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #80d8ff inset;background-color:#80d8ff;color:#ffffff;">
                                                                    <i class="material-icons">camera</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Photography"><h4
                                                                            class="w-iconbox-title">Photography</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Analytics">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #795548 inset;background-color:#795548;color:#ffffff;">
                                                                    <i class="material-icons">trending_up</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Analytics"><h4
                                                                            class="w-iconbox-title">Analytics</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Mobile">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #ed426f inset;background-color:#ed426f;color:#ffffff;">
                                                                    <i class="material-icons">phone_iphone</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Mobile"><h4
                                                                            class="w-iconbox-title">Mobile</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 column column_container animate_afb animate_start"
                                                 style="animation-delay:0.4s;">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Website Serving">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #7cb342 inset;background-color:#7cb342;color:#ffffff;">
                                                                    <i class="material-icons">verified_user</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Website Serving">
                                                                    <h4 class="w-iconbox-title">Website Serving</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Coding">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #3481c9 inset;background-color:#3481c9;color:#ffffff;">
                                                                    <i class="material-icons">polymer</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Coding"><h4
                                                                            class="w-iconbox-title">Coding</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_medium"></div>
                                                        <div class="w-iconbox iconpos_left style_circle color_custom align_left">
                                                            <a class="w-iconbox-link"
                                                               href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                               aria-label="Marketing">
                                                                <div class="w-iconbox-icon"
                                                                     style="box-shadow:0 0 0 2px #ffca28 inset;background-color:#ffca28;color:#ffffff;">
                                                                    <i class="material-icons">people</i><span
                                                                            class="ripple-container"></span></div>
                                                            </a>
                                                            <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                                           href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"
                                                                                           aria-label="Marketing"><h4
                                                                            class="w-iconbox-title">Marketing</h4></a>
                                                                <div class="w-iconbox-text"><p>Suspendisse biben cursus
                                                                        luctus. Donec consequat malesuada felis at
                                                                        faucibus. Nulla dapibus malesuada libero,
                                                                        iaculis elit mattis quis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-separator size_large"></div>
                                        <div class="g-cols row  type_default valign_top inner ">
                                            <div class="col-sm-4 column column_container">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-image align_none">
                                                            <div class="w-image-h"><img width="1024" height="576"
                                                                                        src="./Our Services – ZEPHYR – Material Design WordPress Theme_files/shutterstock_92845171-1024x576.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt=""
                                                                                        srcset="http://zephyr.us-themes.com/wp-content/uploads/2014/09/shutterstock_92845171-1024x576.jpg 1024w, http://zephyr.us-themes.com/wp-content/uploads/2014/09/shutterstock_92845171-600x338.jpg 600w"
                                                                                        sizes="(max-width: 1024px) 100vw, 1024px">
                                                            </div>
                                                        </div>
                                                        <div class="text_column ">
                                                            <div class="wrapper">
                                                                <h4>Top Skilled Team</h4>
                                                                <p>Mauris rhoncus pretium porttitor. Cras scelerisque
                                                                    commodo odio. Phasellus dolor enim, faucibus egestas
                                                                    scelerisque hendrerit, aliquet sed lorem.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 column column_container">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-slider style_none">
                                                            <div class="w-slider-h">
                                                                <div class="royalSlider rsHor"
                                                                     style="touch-action: pan-y; height: 207px;">
                                                                    <div class="rsOverflow grab-cursor"
                                                                         style="width: 368px; height: 207px;">
                                                                        <div class="rsContainer"
                                                                             style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px); transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);">
                                                                            <div style="left: 0px;" class="rsSlide ">
                                                                                <div class="rsContent"
                                                                                     style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
                                                                                    <img class="rsImg rsMainSlideImage"
                                                                                         src="./Our Services – ZEPHYR – Material Design WordPress Theme_files/kenburns3-1024x576.jpg"
                                                                                         style="width: 368px; height: 207px; margin-left: 0px; margin-top: 0px;"
                                                                                         alt=""></div>
                                                                            </div>
                                                                            <div style="left: 368px;" class="rsSlide ">
                                                                                <div class="rsContent"><img
                                                                                            class="rsImg rsMainSlideImage"
                                                                                            src="./Our Services – ZEPHYR – Material Design WordPress Theme_files/kenburns4-1024x576.jpg"
                                                                                            style="width: 368px; height: 207px; margin-left: 0px; margin-top: 0px;"
                                                                                            alt=""></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rsArrow rsArrowLeft"
                                                                             style="display: block;">
                                                                            <div class="rsArrowIcn"></div>
                                                                        </div>
                                                                        <div class="rsArrow rsArrowRight"
                                                                             style="display: block;">
                                                                            <div class="rsArrowIcn"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <img src="./Our Services – ZEPHYR – Material Design WordPress Theme_files/kenburns3-1024x576.jpg"
                                                                     alt=""></div>
                                                        </div>
                                                        <div class="w-separator size_small"></div>
                                                        <div class="text_column ">
                                                            <div class="wrapper">
                                                                <h4>Better Customer Support</h4>
                                                                <p>Mauris rhoncus pretium porttitor. Cras scelerisque
                                                                    commodo odio. Phasellus dolor enim, faucibus egestas
                                                                    scelerisque hendrerit, aliquet sed lorem.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 column column_container">
                                                <div class="column-inner">
                                                    <div class="wrapper">
                                                        <div class="w-video ratio_16-9">
                                                            <div class="w-video-h">
                                                                <iframe src="./Our Services – ZEPHYR – Material Design WordPress Theme_files/71868110.html"
                                                                        webkitallowfullscreen="" mozallowfullscreen=""
                                                                        allowfullscreen=""></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="w-separator size_small"></div>
                                                        <div class="text_column ">
                                                            <div class="wrapper">
                                                                <h4>Beautiful Office Space</h4>
                                                                <p>Mauris rhoncus pretium porttitor. Cras scelerisque
                                                                    commodo odio. Phasellus dolor enim, faucibus egestas
                                                                    scelerisque hendrerit, aliquet sed lorem.</p>
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
                <section class="l-section row height_large color_primary with_img parallax_ver with_overlay">
                    <div class="l-section-img loaded"
                         style="background-image: url(&quot;http://zephyr.us-themes.com/wp-content/uploads/shutterstock_135392420.jpg&quot;); background-position: 50% 158.012px;"
                         data-img-width="1920" data-img-height="1263"></div>
                    <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.5)"></div>
                    <div class="l-section-h i-cf">
                        <div class="g-cols row type_default valign_top">
                            <div class="col-sm-12 column column_container animate_afb animate_start">
                                <div class="column-inner">
                                    <div class="wrapper">
                                        <div class="text_column ">
                                            <div class="wrapper">
                                                <h3 style="text-align: center">Call us today at&nbsp;<a
                                                            href="http://zephyr.us-themes.com/pages/services/?_ga=2.41380066.1368746107.1562851782-238092829.1562851782#"><strong>+321
                                                            123 4567</strong></a> or Email us at <strong><a
                                                                href="mailto:support@site.com">support@site.com</a></strong>
                                                </h3>
                                                <p style="text-align: center">If you seek truth you will not seek
                                                    victory by dishonorable means, and if you find truth you will become
                                                    invincible.</p>
                                            </div>
                                        </div>
                                        <div class="w-btn-wrapper width_auto align_center"><a
                                                    class="w-btn us-btn-style_1 icon_atleft"
                                                    href="http://zephyr.us-themes.com/pages/contact/"
                                                    style="font-size:19px;"><i class="material-icons">mail</i><span
                                                        class="w-btn-label">Contact Us</span><span
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