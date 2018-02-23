@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                {{--<div class="box-header with-border">--}}
                    {{--<button type="button" class="btn btn-primary">添加</button>--}}
                {{--</div>--}}
                <!-- /.box-header -->
                <div class="box-body">
                    @inject('userPresenter','App\Presenters\UserPresenter')

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>姓名</th>
                            <th>邮箱</th>
                            <th>创建时间</th>
                            <th>所属组</th>
                            <th>操作</th>
                        </tr>
                        @foreach($userPresenter->getUserList() as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['email']}}</td>
                                <td>{{$value['created_at']}}</td>
                                <td>游客/所有者</td>
                                <td>
                                    <button type="button" class="btn-primary deleteMenu">绑定组</button>
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
