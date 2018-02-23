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
                    @inject('registryPresenter','App\Presenters\RegistryPresenter')
                    <div class="box-body">
                        <input type="hidden" value="{{request ('registry_id')}}" name="_id">
                        <div class="form-group">
                            <label for="form_group_id">所属群组</label>
                            <select class="form-control" id="form_group_id" name="group_id">
                                @inject('groupPresenter','App\Presenters\GroupPresenter')
                                @foreach($groupPresenter->getGroupList() as $value)
                                    <option @if($registryPresenter->getRegistryInfoToId(request ('registry_id'))['group_id'] == $value['id']) selected
                                            @endif value="{{$value['id']}}">{{$value['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_title">标题</label>
                            <input type="text" class="form-control" id="form_title" name="title"
                                   placeholder="标题"
                                   value="{{$registryPresenter->getRegistryInfoToId(request ('registry_id'))['title']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_name">应用名</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="名称"
                                   value="{{$registryPresenter->getRegistryInfoToId(request ('registry_id'))['name']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_ip">IP地址</label>
                            <input type="text" class="form-control" id="form_ip" name="ip"
                                   placeholder="IP地址"
                                   value="{{$registryPresenter->getRegistryInfoToId(request ('registry_id'))['ip']}}">
                        </div>

                        <div class="form-group">
                            <label for="form_description">描述</label>
                            <input type="text" class="form-control" id="form_description" name="description"
                                   placeholder="描述"
                                   value="{{$registryPresenter->getRegistryInfoToId(request ('registry_id'))['description']}}">
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
    <script src="{{asset ('resource/service/registry.js')}}"></script>
@endsection
