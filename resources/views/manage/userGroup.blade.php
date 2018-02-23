@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="{{url ('manage/user_group/add')}}" class="btn btn-primary">添加</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @inject('userPresenter','App\Presenters\UserPresenter')

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>名称</th>
                            <th>状态</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($userPresenter->getUserGroupList() as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['status']}}</td>
                                <td>{{$value['created_at']}}</td>
                                <td>{{$value['updated_at']}}</td>
                                <td>
                                    <button type="button" class="btn-primary">修改</button>
                                    <button type="button" class="btn-primary">删除</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
@endsection