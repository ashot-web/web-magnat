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
                    <form method="post" id="add-admin-form" action="{{ route('team.update',['id'=>$team->id]) }} "
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_hy" class="form-control"
                                           value="{{$team->name_hy}}" placeholder="NameHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_ru" class="form-control"
                                           value="{{$team->name_ru}}" placeholder="NameRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">NameEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="name_en" class="form-control" value="{{$team->name_en}}"
                                           placeholder="NameEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_hy" class="ck_editor form-control"
                                            placeholder="AboutHY">{{$team->about_hy}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_ru" class="ck_editor form-control"
                                           placeholder="AboutRU">{{$team->about_ru}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">AboutEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea name="about_en" class="ck_editor form-control"
                                            placeholder="AboutEN">{{$team->about_en}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_hy" class="form-control"
                                           value="{{$team->position_hy}}" placeholder="PositionHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_ru" class="form-control"
                                           value="{{$team->position_ru}}" placeholder="PositionRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PositionEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="position_en" class="form-control"
                                           value="{{$team->position_en}}" placeholder="PositionEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">Photo<span class="label-color-red">*</span></label><br>
                                <?php if(!empty($team->photo)){ ?>
                                    <img src="{{asset('uploads/team')}}/{{$team->photo}}" width="20%">
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