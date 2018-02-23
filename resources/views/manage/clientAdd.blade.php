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
                <form role="form" id="add" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="form_ip">接收IP</label>
                            <input type="text" class="form-control" id="form_ip" name="ip"
                                   placeholder="IP">
                        </div>
                        <div class="form-group">
                            <label for="form_port">接收端口</label>
                            <input type="text" class="form-control" id="form_port" name="port"
                                   placeholder="端口">
                        </div>
                        <div class="form-group">
                            <label for="form_name">客户端名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="客户端名称">
                        </div>
                        <div class="form-group">
                            <label for="form_domain">对外访问域名</label>
                            <input type="text" class="form-control" id="form_domain" name="domain"
                                   placeholder="对外访问域名">
                        </div>
                        <div class="form-group">
                            <label for="form_rules">群组权限</label>
                            <input type="text" class="form-control" id="form_rules" name="rules"
                                   placeholder="群组权限">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">提交</button>
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
