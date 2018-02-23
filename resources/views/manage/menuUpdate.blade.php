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
                @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
                <form role="form" id="update" method="post">
                    <div class="box-body">
                        <input type="hidden" name="_id" value="{{request ('menu_id')}}">

                        <div class="form-group">
                            <label for="form_pid">所属父子集</label>
                            <select class="form-control" id="form_pid" name="pid">
                                <option selected value="0">顶级菜单</option>
                                @foreach($manageMenuPresenter->getManageMenuListToFrom() as $value)
                                    <option value="{{$value['id']}}" @if($manageMenuPresenter->getManageMenuInfoToId(request ('menu_id'))['pid'] == $value['id']) selected @endif>{{$value['name']}}</option>
                                    @foreach($value['second'] as $item)
                                        <option value="{{$value['id']}}">
                                            - {{$item['name']}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_name">菜单名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="菜单名称"
                                   value="{{$manageMenuPresenter->getManageMenuInfoToId(request ('menu_id'))['name']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_url">地址</label>
                            <input type="text" class="form-control" id="form_url" name="url" placeholder="地址"
                                   value="{{$manageMenuPresenter->getManageMenuInfoToId(request ('menu_id'))['url']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_icon">图标</label>
                            <input type="text" class="form-control" id="form_icon" name="icon" placeholder="图标"
                                   value="{{$manageMenuPresenter->getManageMenuInfoToId(request ('menu_id'))['icon']}}">
                        </div>
                        <div class="form-group">
                            <label for="form_sort">排序</label>
                            <input type="number" class="form-control" id="form_sort" name="sort"
                                   placeholder="排序"
                                   value="{{$manageMenuPresenter->getManageMenuInfoToId(request ('menu_id'))['sort']}}">
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
    <script src="{{asset ('resource/service/menu.js')}}"></script>
@endsection