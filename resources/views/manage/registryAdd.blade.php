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
                            <label for="form_group_id">所属群组</label>
                            <select class="form-control" id="form_group_id" name="group_id">
                                @inject('groupPresenter','App\Presenters\GroupPresenter')
                                @foreach($groupPresenter->getGroupList() as $value)
                                    <option @if(request ('group_id') == $value['id']) selected @endif value="{{$value['id']}}">{{$value['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_title">标题</label>
                            <input type="text" class="form-control" id="form_title" name="title"
                                   placeholder="标题">
                        </div>
                        <div class="form-group">
                            <label for="form_name">应用名</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="名称">
                        </div>
                        <div class="form-group">
                            <label for="form_ip">IP地址</label>
                            <input type="text" class="form-control" id="form_ip" name="ip"
                                   placeholder="IP地址">
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
    <script src="{{asset ('resource/service/registry.js')}}"></script>
@endsection