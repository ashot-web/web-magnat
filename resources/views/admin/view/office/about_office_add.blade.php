@extends('admin.layouts.admin_layout')
@section('breadcrumb')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    </ol>
                </div>
            </div>
            <h3 class="content-header-title">Edit Team</h3>
        </div>
    </div>
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <form method="post" id="add-admin-form" action="{{ route('about_office.store') }} "
                          enctype="multipart/form-data">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_hy" class="form-control"
                                           value="" placeholder="TitleHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_ru" class="form-control"
                                           value="" placeholder="TitleRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_en" class="form-control" value=""
                                           placeholder="TitleEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="about_hy" class="form-control ck_editor"
                                              placeholder="AboutHY">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="about_ru" class="form-control ck_editor"
                                              placeholder="AboutRU"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="about_en" class="form-control ck_editor"
                                              placeholder="AboutEN"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="javascript:void(0);" class="btn btn-default" onclick="history.go(-1);"
                               style="margin-left: 192px;">Cancel</a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection