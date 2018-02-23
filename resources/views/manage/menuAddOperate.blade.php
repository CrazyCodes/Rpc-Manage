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
                <form role="form" id="add_operate" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="form_manage_menu_id">所选菜单</label>
                            <select class="form-control" id="form_manage_menu_id" name="manage_menu_id" disabled>
                                @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
                                @foreach($manageMenuPresenter->getManageMenuListToFrom() as $value)
                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                    @foreach($value['second'] as $item)
                                        <option value="{{$item['id']}}" @if(request ('menu_id') == $item['id']) selected @endif> - {{$item['name']}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_name">操作名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="操作名称">
                        </div>
                        <div class="form-group">
                            <label for="form_url">地址</label>
                            <input type="text" class="form-control" id="form_url" name="url" placeholder="地址">
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
    <script src="{{asset ('resource/service/menu.js')}}"></script>
@endsection
