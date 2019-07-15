@extends('admin.layouts.admin_layout')
@section('breadcrumb')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <h3 class="content-header-name">AboutOffice</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=" {{ url('/')}}"><i style="font-size: 30px" class="la la-home"></i></a></li>
                    </ol>
                </div>
                <div class="float-right breadcrumb-wrapper col-2">
                    <ol class=" float-right breadcrumb">
                        <li class="float-right breadcrumb-item"><button class="btn btn-primary" style="padding: 5px 10px"><a style="color: unset" href="{{route('about_office.create')}}"><i class="la la-plus"></i></a> </button></li>
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
                        <th>AboutHY</th>
                        <th>AboutRU</th>
                        <th>AboutEN</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($about_offices as $about_office)
                        <tr>
                            <th scope="row">{{$about_office->id}}</th>
                            <td>{{$about_office->title_hy}}</td>
                            <td>{{$about_office->title_ru}}</td>
                            <td>{{$about_office->title_en}}</td>
                            <td>{{$about_office->about_hy}}</td>
                            <td>{{$about_office->about_ru}}</td>
                            <td>{{$about_office->about_en}}</td>
                            <td>
                                <a href="{{route('about_office.edit', ['id' => $about_office->id])}}"><i class="la la-edit"></i></a>
                                <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                    <i class="la la-trash"></i>
                                    <form  action="{{url("/admin/about_office/$about_office->id") }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$about_offices->links()}}
            </div>
        </div>

    </div>
@endsection
