@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="{{url ('/manage/client/add')}}" class="btn btn-primary">添加</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @inject('clientPresenter','App\Presenters\ClientPresenter')

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>IP地址</th>
                            <th>端口</th>
                            <th>客户端名称</th>
                            <th>对外访问域名</th>
                            <th>群组权限</th>
                            <th>操作</th>
                        </tr>
                        @foreach($clientPresenter->getClientList() as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['ip']}}</td>
                                <td>{{$value['port']}}</td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['domain']}}</td>
                                <td>{{$value['rules']}}</td>
                                <td>
                                    <button type="button" class="btn-primary notice" mid="{{$value['id']}}">通知
                                    </button>
                                    <a href="{{url ('manage/client/update')}}?client_id={{$value['id']}}">
                                        <button type="button" class="btn-primary">修改</button>
                                    </a>
                                    <button type="button" class="btn-primary delete_client" mid="{{$value['id']}}">删除</button>
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
    <script src="{{asset ('resource/service/client.js')}}"></script>
@endsection