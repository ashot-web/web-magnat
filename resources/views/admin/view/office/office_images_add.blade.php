
@extends('admin.layouts.admin_layout')
@section('breadcrumb')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">

            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="la la-home"></i></a></li>
                    </ol>
                </div>
            </div>
            <h3 class="content-header-title">Add Team</h3>
        </div>
    </div>
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form method="post" id="add-admin-form" action="{{ route('office.store') }} "
                          enctype="multipart/form-data">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_hy" class="form-control"
                                           value="" placeholder="NameHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_ru" class="form-control"
                                           value="" placeholder="NameRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_en" class="form-control"
                                           value="" placeholder="NameEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">Photo<span class="label-color-red">*</span></label><br>
                                <input type="file" name="image" value="" >
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