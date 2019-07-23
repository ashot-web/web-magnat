@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('content')
    <style>
        .page-item.active .page-link{
            background-color: #7049ba!important;
            border-color: #7049ba!important;
        }
        .page-link {
            color: #7049ba;
        }
    </style>
    <div class="l-canvas sidebar_none type_wide">
        {{--    header--}}
        @yield('header')
        {{--    EndHeader--}}
        <div class="l-main">
            <div class="l-main-h i-cf">
                <main class="l-content" itemprop="mainContentOfPage">
                    <div class="l-canvas sidebar_none type_wide">
                        <section class="l-section row height_medium color_alternate" style="background-image: url({{asset('content/img/podcast1665x705.png')}});background-size: cover;background-position: center">
                            <div class="l-section-h i-cf">
                                <div class="g-cols row type_default valign_middle">
                                    <div class="col-sm-12 column column_container">
                                        <div class="column-inner">
                                            <div class="wrapper"><h1 class="w-page-title align_center"
                                                                         itemprop="headline"
                                                                         style="font-family:'Roboto', sans-serif;color: white;opacity: 0.7">
                                                    @lang('blog.blog')</h1>
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
                                                            <div class="w-grid type_masonry layout_blog_11 cols_2 with_isotope"
                                                                 id="us_grid_1">
                                                                <style id="us_grid_1_css">#us_grid_1 .w-grid-item {
                                                                        padding: 1.5rem
                                                                    }

                                                                    #us_grid_1 .w-grid-list {
                                                                        margin: -1.5rem -1.5rem 1.5rem
                                                                    }

                                                                    .w-grid + #us_grid_1 .w-grid-list {
                                                                        margin-top: 1.5rem
                                                                    }

                                                                    .l-section.width_full > div > div > .col-sm-12 > div > div > #us_grid_1 .w-grid-list {
                                                                        margin-left: 1.5rem;
                                                                        margin-right: 1.5rem
                                                                    }

                                                                    .l-section.height_auto > div > div > .col-sm-12 > div > div > #us_grid_1:first-child .w-grid-list {
                                                                        margin-top: 1.5rem
                                                                    }

                                                                    .l-section.height_auto > div > div > .col-sm-12 > div > div > #us_grid_1:last-child .w-grid-list {
                                                                        margin-bottom: 1.5rem
                                                                    }

                                                                    @media (max-width: 599px) {
                                                                        #us_grid_1 .w-grid-list {
                                                                            margin: 0
                                                                        }

                                                                        #us_grid_1 .w-grid-item {
                                                                            width: 100%;
                                                                            padding: 0;
                                                                            margin-bottom: 1.5rem
                                                                        }
                                                                    }

                                                                    #us_grid_1 .w-post-elm.post_title {
                                                                        font-size: 2rem
                                                                    }</style>
                                                                <style>#us_grid_1 .w-grid-item-h {
                                                                    }

                                                                    #us_grid_1 .usg_post_title_1 {
                                                                        font-size: 1.4rem
                                                                    }

                                                                    @media (max-width: 599px) {
                                                                        #us_grid_1 .usg_post_title_1 {
                                                                            font-size: 1.2rem !important
                                                                        }
                                                                    }

                                                                    #us_grid_1 .usg_hwrapper_1 {
                                                                        color: #9e9e9e
                                                                    }

                                                                    #us_grid_1 .usg_post_taxonomy_1 {
                                                                        font-weight: 700;
                                                                        text-transform: uppercase;
                                                                        font-size: 14px
                                                                    }

                                                                    #us_grid_1 .usg_post_date_1 {
                                                                        font-size: 14px
                                                                    }

                                                                    #us_grid_1 .usg_post_comments_1 {
                                                                        font-size: 14px
                                                                    }

                                                                    #us_grid_1 .usg_post_image_1 {
                                                                    }

                                                                    #us_grid_1 .usg_post_content_1 {
                                                                        font-size: 0.9rem;
                                                                        line-height: 1.7
                                                                    }

                                                                    #us_grid_1 .usg_post_title_1 {
                                                                        margin-bottom: 0
                                                                    }

                                                                    #us_grid_1 .usg_post_image_1 {
                                                                        margin-top: 0.6rem
                                                                    }

                                                                    #us_grid_1 .usg_post_content_1 {
                                                                        margin-top: 0.8rem
                                                                    }</style>
                                                                <div class="w-grid-list"
                                                                     style="position: relative; height: auto;">
                                                                    @foreach($blogs as $blog)
                                                                    <article
                                                                            class="float-left w-grid-item ratio_1x1 post-{{$blog->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress tag-branding tag-business tag-design tag-image tag-wordpress-2"
                                                                            data-id="{{$blog->id}}">
                                                                        <div class="w-grid-item-h">
                                                                            <h2 class="w-post-elm post_title usg_post_title_1 entry-title color_link_inherit">
                                                                                {{$blog->textTrans('title')}}
                                                                            </h2>
                                                                            <div class="w-hwrapper usg_hwrapper_1 align_left valign_top wrap ">
                                                                                <div class="w-post-elm post_taxonomy usg_post_taxonomy_1 style_simple">
                                                                                    <p>WebDev</p>
                                                                                </div>
                                                                                <time class="w-post-elm post_date usg_post_date_1 entry-date published"
                                                                                      >
                                                                                    {{$blog->created_at}}                                                                                </time>

                                                                            </div>
                                                                            <div class="w-post-elm post_image usg_post_image_1 stretched">
                                                                                <a href="#"
                                                                                   aria-label="This is a Single Interesting Post"><img
                                                                                            width="750" height="1000"
                                                                                            src="{{asset("uploads/blog/$blog->photo")}}"
                                                                                            class="attachment-large size-large wp-post-image"
                                                                                            alt=""
                                                                                            srcset="{{asset("uploads/blog/$blog->photo")}}"
                                                                                            sizes="(max-width: 750px) 100vw, 750px"></a>
                                                                            </div>
                                                                            <div class="w-post-elm post_content usg_post_content_1">
                                                                                {!!  $blog->textTrans('text')!!}
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    @endforeach

                                                                </div>

                                                                <div class="color1" align="left"
                                                                     id="paglink">{{ $blogs->links() }}</div>
                                                                <div class="">
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
                    <section style="padding-top: 0" class="l-section color_primary">
                        <div class="l-section-h i-cf">
                            <div class="g-cols row type_default valign_top">
                                <div class="col-sm-12 column column_container animate_afb animate_start">
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
    <a class="w-toplink pos_right" href="http://zephyr.us-themes.com/#" title="Back to top" aria-hidden="true"></a>
    <a class="w-header-show" href="javascript:void(0);"><span>Menu</span></a>
    <div class="w-header-overlay"></div>
@endsection