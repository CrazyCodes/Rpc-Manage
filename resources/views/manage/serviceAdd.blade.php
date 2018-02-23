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
                            <label for="form_group_id">所属提供者</label>
                            <select class="form-control" id="form_group_id" name="group_id">
                                @inject('groupPresenter','App\Presenters\GroupPresenter')
                                @foreach($groupPresenter->getGroupList() as $value)
                                    <option value="{{$value['id']}}">{{$value['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_service_name">服务名</label>
                            <input type="text" class="form-control" id="form_service_name" name="service_name"
                                   placeholder="服务名称">
                        </div>
                        <div class="form-group">
                            <label for="form_function">方法名</label>
                            <input type="text" class="form-control" id="form_function" name="function"
                                   placeholder="方法名">
                        </div>
                        <div class="form-group">
                            <label for="form_params">参数</label>
                            <input type="text" class="form-control" id="form_params" name="params"
                                   placeholder="参数">
                        </div>
                        <div class="form-group">
                            <label for="form_response">响应参数</label>
                            <input type="text" class="form-control" id="form_response" name="response"
                                   placeholder="响应参数">
                        </div>
                        <div class="form-group">
                            <label for="form_description">描述</label>
                            <input type="text" class="form-control" id="form_description" name="description"
                                   placeholder="描述">
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
    <script src="{{asset ('resource/service/service.js')}}"></script>
@endsection