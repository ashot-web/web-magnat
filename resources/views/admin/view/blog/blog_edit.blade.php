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
            <h3 class="content-header-title">Edit Blog</h3>
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
                    <form method="post" id="add-admin-form" action="{{ route('blog.update',['id'=>$blog->id]) }} "
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_hy" class="form-control"
                                           value="{{$blog->title_hy}}" placeholder="TitleHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_ru" class="form-control"
                                           value="{{$blog->title_ru}}" placeholder="TitleRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TitleEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title_en" class="form-control"
                                           value="{{$blog->title_en}}" placeholder="TitleEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea class="ck_editor" name="text_hy" class="form-control"
                                           placeholder="TextHY"> {{$blog->text_hy}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea class="ck_editor" name="text_ru" class="form-control"
                                           placeholder="TextRU">{{$blog->text_ru}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea class="ck_editor" name="text_en" class="form-control"
                                           placeholder="text_en">{{$blog->text_en}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">Photo<span class="label-color-red">*</span></label><br>
                                <?php if(!empty($blog->photo)){ ?>
                                <img src="{{asset('uploads/blog')}}/{{$blog->photo}}" width="20%">
                                <?php } ?>
                                <input type="file" name="image" value="" >
                            </diclass=ck_editor</div>
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