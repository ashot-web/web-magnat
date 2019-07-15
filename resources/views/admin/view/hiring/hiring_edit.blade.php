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
            <h3 class="content-header-title">Edit Hiring</h3>
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
                    <form method="post" id="add-admin-form" action="{{ route('hiring.update',['id'=>$hiring->id]) }} "
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_hy" class="form-control"
                                           value="{{$hiring->title_hy}}" placeholder="TitleHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_ru" class="form-control"
                                           value="{{$hiring->title_ru}}" placeholder="TitleRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_en" class="form-control" value="{{$hiring->title_en}}"
                                           placeholder="TitleEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_hy" class="ck_editor form-control"
                                            placeholder="AboutHY">{{$hiring->about_hy}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_ru" class="ck_editor form-control"
                                           placeholder="AboutRU">{{$hiring->about_ru}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_en" class="ck_editor form-control"
                                            placeholder="AboutEN">{{$hiring->about_en}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_hy" class="form-control"
                                           value="{{$hiring->position_hy}}" placeholder="PositionHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_ru" class="form-control"
                                           value="{{$hiring->position_ru}}" placeholder="PositionRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_en" class="form-control"
                                           value="{{$hiring->position_en}}" placeholder="PositionEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">Photo<span class="label-color-red">*</span></label><br>
                                <?php if(!empty($hiring->photo)){ ?>
                                    <img src="{{asset('uploads/hiring')}}/{{$hiring->photo}}" width="20%">
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