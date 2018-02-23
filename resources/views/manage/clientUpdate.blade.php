@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" id="update" method="post">
                    @inject('clientPresenter','App\Presenters\ClientPresenter')

                    <div class="box-body">
                        <input type="hidden" value="{{request ('client_id')}}" name="_id">
                        <div class="form-group">
                            <label for="form_ip">接收IP</label>
                            <input type="text" class="form-control" id="form_ip" name="ip"
                                   placeholder="IP"
                                   value="{{$clientPresenter->getClientInfoToId(request ('client_id'))['ip']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_port">接收端口</label>
                            <input type="text" class="form-control" id="form_port" name="port"
                                   placeholder="端口"
                                   value="{{$clientPresenter->getClientInfoToId(request ('client_id'))['port']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_name">客户端名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="客户端名称"
                                   value="{{$clientPresenter->getClientInfoToId(request ('client_id'))['name']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_domain">对外访问域名</label>
                            <input type="text" class="form-control" id="form_domain" name="domain"
                                   placeholder="对外访问域名"
                                   value="{{$clientPresenter->getClientInfoToId(request ('client_id'))['domain']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_rules">群组权限</label>
                            <input type="text" class="form-control" id="form_rules" name="rules"
                                   placeholder="群组权限"
                                   value="{{$clientPresenter->getClientInfoToId(request ('client_id'))['rules']}}">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">提交修改</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
    <script src="{{asset ('resource/service/client.js')}}"></script>
@endsection
