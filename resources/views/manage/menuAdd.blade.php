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
                            <label for="form_pid">所属父子集</label>
                            <select class="form-control" id="form_pid" name="pid">
                                <option selected value="0">顶级菜单</option>
                                @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
                                @foreach($manageMenuPresenter->getManageMenuListToFrom() as $value)
                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                    @foreach($value['second'] as $item)
                                        <option value="{{$value['id']}}"> - {{$item['name']}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form_name">菜单名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="菜单名称">
                        </div>
                        <div class="form-group">
                            <label for="form_url">地址</label>
                            <input type="text" class="form-control" id="form_url" name="url" placeholder="地址">
                        </div>
                        <div class="form-group">
                            <label for="form_icon">图标</label>
                            <input type="text" class="form-control" id="form_icon" name="icon" placeholder="图标">
                        </div>
                        <div class="form-group">
                            <label for="form_sort">排序</label>
                            <input type="number" class="form-control" id="form_sort" name="sort"
                                   placeholder="排序" value="0">
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
