@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="{{url ('manage/menu/add')}}" class="btn btn-primary">添加</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>菜单名称</th>
                            <th>url</th>
                            <th>排序</th>
                            <th>绑定操作</th>
                            <th>操作</th>
                        </tr>
                        @foreach($manageMenuPresenter->getManageMenuListToAdminView() as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['url']}}</td>

                                <td>{{$value['sort']}}</td>
                                <td> -</td>

                                <td>
                                    <button type="button" class="btn-primary">添加</button>
                                    <a href="{{url ('/manage/menu/update')}}?menu_id={{$value['id']}}">
                                        <button type="button" class="btn-primary">
                                            修改
                                        </button>
                                    </a>
                                    <button type="button" class="btn-primary deleteMenu"
                                            mid="{{$value['id']}}">删除
                                    </button>
                                </td>
                            </tr>

                            @foreach($value['second'] as $second)
                                <tr>
                                    <td>{{$second['id']}}</td>
                                    <td>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;{{$second['name']}}</td>
                                    <td>{{$second['url']}}</td>
                                    <td>{{$second['sort']}}</td>
                                    <td>
                                        @foreach($second['operate'] as $p)
                                            <span class="label label-success">{{$p['name']}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{url ('/manage/menu/add_operate')}}?menu_id={{$second['id']}}">
                                            <button type="button" class="btn-primary">添加操作</button>
                                        </a>
                                        <a href="{{url ('/manage/menu/update')}}?menu_id={{$second['id']}}">
                                            <button type="button" class="btn-primary">修改</button>
                                        </a>

                                        <button type="button" class="btn-primary deleteMenu"
                                                mid="{{$second['id']}}">删除
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
    <script src="{{asset ('resource/service/menu.js')}}"></script>
@endsection
