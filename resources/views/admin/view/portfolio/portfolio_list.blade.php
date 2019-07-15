@extends('admin.layouts.admin_layout')
@section('breadcrumb')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <h3 class="content-header-title">Portfolios</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=" {{ url('/')}}"><i style="font-size: 30px" class="la la-home"></i></a></li>
                    </ol>
                </div>
                <div class="float-right breadcrumb-wrapper col-2">
                    <ol class=" float-right breadcrumb">
                        <li class="float-right breadcrumb-item"><button class="btn btn-primary" style="padding: 5px 10px"><a style="color: unset" href="{{route('portfolio.create')}}"><i class="la la-plus"></i></a> </button></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>TitleHY</th>
                        <th>TitleRU</th>
                        <th>TitleEN</th>
                        <th>TextHY</th>
                        <th>TextRU</th>
                        <th>TextEN</th>
                        <th>ClientHY</th>
                        <th>ClientRU</th>
                        <th>ClientEN</th>
                        <th>ProjectURL</th>
                        <th>Color</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <th scope="row">{{$portfolio->id}}</th>
                            <td>{{$portfolio->title_hy}}</td>
                            <td>{{$portfolio->title_ru}}</td>
                            <td>{{$portfolio->title_en}}</td>
                            <td>{{$portfolio->text_hy}}</td>
                            <td>{{$portfolio->text_ru}}</td>
                            <td>{{$portfolio->text_en}}</td>
                            <td>{{$portfolio->client_hy}}</td>
                            <td>{{$portfolio->client_ru}}</td>
                            <td>{{$portfolio->client_en}}</td>
                            <td>{{$portfolio->project_url}}</td>
                            <td>{{$portfolio->color}}</td>
                            <td>{{$portfolio->photo}}</td>
                            <td>
                                <a href="{{route('portfolio.edit', ['id' => $portfolio->id])}}"><i class="la la-edit"></i></a>
                                <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                    <i class="la la-trash"></i>
                                    <form  action="{{url("/admin/portfolio/$portfolio->id") }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$portfolios->links()}}
            </div>
        </div>

    </div>
@endsection