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
                    <form method="post" id="add-admin-form" action="{{ route('office.update',['id'=>$office->id]) }} "
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_hy" class="form-control"
                                           value="{{$office->name_hy}}" placeholder="NameHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_ru" class="form-control"
                                           value="{{$office->name_ru}}" placeholder="NameRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_en" class="form-control" value="{{$office->name_en}}"
                                           placeholder="NameEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">Photo<span class="label-color-red">*</span></label><br>
                                <?php if(!empty($office->photo)){ ?>
                                <img src="{{asset('uploads/office')}}/{{$office->photo}}" width="20%">
                                <?php } ?>
                                <input type="file" name="image" value="" >
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="javascript:void(0);" class="btn btn-default" onclick="history.go(-1);"
                               style="margin-left: 192px;">Cancel</a>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection