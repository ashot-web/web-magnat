@extends('admin.layouts.admin_layout')
@section('breadcrumb')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <h3 class="content-header-name">teams</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=" {{ url('/')}}"><i style="font-size: 30px" class="la la-home"></i></a></li>
                    </ol>
                </div>
                <div class="float-right breadcrumb-wrapper col-2">
                    <ol class=" float-right breadcrumb">
                        <li class="float-right breadcrumb-item"><button class="btn btn-primary" style="padding: 5px 10px"><a style="color: unset" href="{{route('team.create')}}"><i class="la la-plus"></i></a> </button></li>
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
                        <th>NameHY</th>
                        <th>NameRU</th>
                        <th>NameEN</th>
                        <th>AboutHY</th>
                        <th>AboutRU</th>
                        <th>AboutEN</th>
                        <th>PositionHY</th>
                        <th>PositionRU</th>
                        <th>PositionEN</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <th scope="row">{{$team->id}}</th>
                            <td>{{$team->name_hy}}</td>
                            <td>{{$team->name_ru}}</td>
                            <td>{{$team->name_en}}</td>
                            <td>{{$team->about_hy}}</td>
                            <td>{{$team->about_ru}}</td>
                            <td>{{$team->about_en}}</td>
                            <td>{{$team->position_hy}}</td>
                            <td>{{$team->position_ru}}</td>
                            <td>{{$team->position_en}}</td>
                            <td>{{$team->photo}}</td>
                            <td>
                                <a href="{{route('team.edit', ['id' => $team->id])}}"><i class="la la-edit"></i></a>
                                <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                    <i class="la la-trash"></i>
                                    <form  action="{{url("/admin/team/$team->id") }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$teams->links()}}
            </div>
        </div>

    </div>
@endsection