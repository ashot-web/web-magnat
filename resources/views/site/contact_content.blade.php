@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('content')
    <div class="l-canvas sidebar_none type_wide">
        @yield('header')
        <section class="l-section row height_medium color_alternate"
                 style="background-image: url({{asset('content/img/MEAA-Header-Contact.jpg')}});background-size:contain;background-position: center;background-repeat: no-repeat;background-color: #0063a7">
            <div class="l-section-h i-cf">
                <div class="g-cols row type_default valign_middle">
                    <div class="col-sm-12 column column_container">
                        <div class="column-inner">
                            <div class="wrapper"><h1 class="w-page-title align_center" itemprop="headline"
                                                     style="font-family:'Roboto', sans-serif;color: white;opacity: 0.9;">@lang('contact.contact')</h1>
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
                                <div class="col-sm-8 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-form for_cform us_form_1">
                                                <form class="w-form-h" autocomplete="off"
                                                      action="{{route('send_email')}}"
                                                      method="get">
                                                    <div class="w-form-row for_text with_icon">
                                                        <div class="w-form-row-label">
                                                            <span></span>
                                                        </div>
                                                        <div class="w-form-row-field">
                                                            <i class="material-icons">person</i>
                                                            <input type="text"
                                                                   name="name"
                                                                   value=""
                                                                   placeholder="Name">
                                                            <span class="w-form-row-field-bar"></span>
                                                        </div>
                                                        <div class="w-form-row-state">Fill out this field</div>
                                                    </div>
                                                    <div class="w-form-row for_text required with_icon">
                                                        <div class="w-form-row-label">
                                                            <span></span>
                                                        </div>
                                                        <div class="w-form-row-field">
                                                            <i class="material-icons">email</i>
                                                            <input type="text"
                                                                   name="email"
                                                                   aria-label="Email"
                                                                   value=""
                                                                   placeholder="Email"
                                                                   data-required="true"
                                                                   aria-required="true">
                                                            <span class="w-form-row-field-bar"></span>
                                                        </div>
                                                        <div class="w-form-row-state">Fill out this field</div>
                                                    </div>
                                                    <div class="w-form-row for_text with_icon">
                                                        <div class="w-form-row-label">
                                                            <span></span>
                                                        </div>
                                                        <div class="w-form-row-field">
                                                            <i class="material-icons">phone</i>
                                                            <input type="text"
                                                                   name="phone"
                                                                   aria-label="Phone Number"
                                                                   value=""
                                                                   placeholder="Phone Number">
                                                            <span class="w-form-row-field-bar"></span>
                                                        </div>
                                                        <div class="w-form-row-state">Fill out this field</div>
                                                    </div>
                                                    <div class="w-form-row for_textarea required with_icon">
                                                        <div class="w-form-row-label">
                                                            <span></span>
                                                        </div>
                                                        <div class="w-form-row-field">
                                                            <i class="material-icons">create</i> <textarea
                                                                    name="text" aria-label="Message"
                                                                    placeholder="Message" data-required="true"
                                                                    aria-required="true"></textarea>
                                                            <span class="w-form-row-field-bar"></span>
                                                        </div>
                                                        <div class="w-form-row-state">Fill out this field</div>
                                                    </div>
                                                    <input type="hidden" name="action" value="us_ajax_cform">
                                                    <input type="hidden" name="post_id" value="10">
                                                    <input type="hidden" name="form_index" value="1">
                                                    <div class="w-form-row for_submit align_left">
                                                        <div class="w-form-row-field">
                                                            <button class="w-btn  us-btn-style_1"
                                                                    style="font-size:16px;"
                                                                    type="submit" aria-label="Send Message">
                                                                <span class="g-preloader type_1"></span>
                                                                <span class="w-btn-label">@lang('contact.send_sms')</span>
                                                                <span class="ripple-container"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="w-form-message"></div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">

                                            <div class="w-separator size_medium"></div>
                                            <div class="text_column ">
                                                <div class="wrapper">
                                                    <h3>@lang('contact.contact_info')</h3>
                                                </div>
                                            </div>
                                            <div class="w-separator size_medium"></div>
                                            <div class="w-iconbox iconpos_left style_default color_light align_left no_text">
                                                <div class="w-iconbox-icon"><i class="material-icons">home</i></div>
                                                <div class="w-iconbox-meta"><h6
                                                            class="w-iconbox-title">{{$address}}</h6></div>
                                            </div>
                                            <div class="w-separator size_small"></div>
                                            <div class="w-iconbox iconpos_left style_default color_light align_left no_text">
                                                <a class="w-iconbox-link"
                                                   href="http://zephyr.us-themes.com/pages/contact/?_ga=2.112551812.1882396584.1562589687-1085300330.1558423126#"
                                                   aria-label="info@example.com">
                                                    <div class="w-iconbox-icon"><i class="material-icons">mail</i></div>
                                                </a>
                                                <div class="w-iconbox-meta"><a class="w-iconbox-link"
                                                                               href="http://zephyr.us-themes.com/pages/contact/?_ga=2.112551812.1882396584.1562589687-1085300330.1558423126#"
                                                                               aria-label="info@example.com"><h6
                                                                class="w-iconbox-title">info@webmagnat.com</h6></a>
                                                </div>
                                            </div>
                                            <div class="w-separator size_small"></div>
                                            <div class="w-iconbox iconpos_left style_default color_light align_left no_text">
                                                <div class="w-iconbox-icon"><i class="material-icons">phone</i></div>
                                                <div class="w-iconbox-meta"><h6 class="w-iconbox-title">{{$tel}}</h6>
                                                </div>
                                            </div>
                                            <div class="w-iconbox iconpos_left style_default color_light align_left no_text">
                                                <div class="w-iconbox-icon"><i class="material-icons">fb</i></div>
                                                <div class="w-iconbox-meta"><h6 class="w-iconbox-title">{{$tel}}</h6>
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
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="w-tabs layout_default type_togglable title_atcenter icon_chevron iconpos_right accordion initialized">
                                                <div class="w-tabs-list items_1">
                                                    <div class="w-tabs-list-h">
                                                        <div class="w-tabs-item with_icon"><a
                                                                    href="http://zephyr.us-themes.com/pages/contact/?_ga=2.112551812.1882396584.1562589687-1085300330.1558423126#map-section"
                                                                    class="w-tabs-item-h"><i
                                                                        class="material-icons">place</i><span
                                                                        class="w-tabs-item-title">@lang('contact.view_map')</span></a><span
                                                                    class="ripple-container"></span></div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-sections">
                                                    <div class="w-tabs-sections-h">
                                                        <div class="w-tabs-section with_icon no_indents color_custom"
                                                             id="map-section"
                                                             style="background-color:#ffb03a;color:#ffffff;"><a
                                                                    href=""
                                                                    class="w-tabs-section-header">
                                                                <div class="w-tabs-section-header-h"><i
                                                                            class="material-icons">place</i>
                                                                    <div class="w-tabs-section-title">@lang('contact.view_us')
                                                                    </div>
                                                                    <div class="w-tabs-section-control"></div>
                                                                </div>
                                                            </a>
                                                            <div class="w-tabs-section-content" style="display: none;">
                                                                <div class="w-tabs-section-content-h i-cf">
                                                                    <div class="w-map provider_osm us_map_1 leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                                                                         id="us_map_1"
                                                                         style="height: 400px; position: relative;"
                                                                         tabindex="0">
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.881723309735!2d44.519058914754474!3d40.1894455773561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcdfe5beeff9%3A0xd6be55d85e5d4255!2zMTlhIEtvcnl1biBTdCwgWWVyZXZhbiAwMDA5LCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2s!4v1562847481872!5m2!1sru!2s"
                                                                                width="100%" height="400"
                                                                                frameborder="0" style="border:0"
                                                                                allowfullscreen></iframe>
                                                                        <div class="leaflet-control-container">
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
