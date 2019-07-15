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
            <h3 class="content-header-title">Add Portfolio Item</h3>
        </div>
    </div>
@endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form method="post" id="add-admin-form" action="{{ route('portfolio.store') }} "
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
                                    <input type="text" name="title_en" class="form-control"
                                           value="" placeholder="TitleEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="text_hy" class="ck_editor form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="text_ru" class="ck_editor form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">TextEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <textarea type="text" name="text_en" class="ck_editor form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">ClientHY<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="client_hy" class="form-control"
                                           value="" placeholder="TextHY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">ClientRU<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="client_ru" class="form-control"
                                           value="" placeholder="TextRU">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">ClientEN<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="client_en" class="form-control" value=""
                                           placeholder="TextEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">ProjectURL<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="project_url" class="form-control" value=""
                                           placeholder="TextEN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label lable-right">PortfolioColor<span
                                            class="label-color">*</span></label>
                                <div class="col-md-6">
                                    <div id="cp2" class="input-group colorpicker colorpicker-component">
                                        <input type="text" name="color" value="#0000" class="form-control" />
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                    <script type="text/javascript">
                                        $('.colorpicker').colorpicker();
                                    </script>
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