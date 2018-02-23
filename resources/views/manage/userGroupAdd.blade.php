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
                            <label for="form_name">群组名称</label>
                            <input type="text" class="form-control" id="form_name" name="name"
                                   placeholder="群组名称">
                        </div>
                        <div class="form-group">
                            <label for="form_name">权限</label>
                            @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
                            @foreach($manageMenuPresenter->getManageMenuListToAdminView() as $value)
                                <div class="checkbox">
                                    {{--1--}}
                                    <label class="parentCheckbox">
                                        <input type="checkbox" class="parentCheckboxInput" name="menu[]" value="{{$value['id']}}">
                                        {{$value['name']}}
                                    </label>
                                    <div class="checkbox" style="margin-left: 80px;">
                                        @foreach($value['second'] as $second)
                                            {{--2--}}
                                            <label class="childrenCheckbox">
                                                <input type="checkbox" class="childrenInput" name="menu[]" value="{{$second['id']}}">
                                                {{$second['name']}}

                                            </label>

                                            <div class="checkbox" style="margin-left: 40px;">
                                                @if($second['operate'])
                                                    【
                                                    @foreach($second['operate'] as $p)
                                                        {{--3--}}
                                                        <label class="grandsonCheck">
                                                            <input type="checkbox" class="grandsonCheckbox" name="operate[]" value="{{$p['id']}}">
                                                            {{$p['name']}} &nbsp;&nbsp;
                                                        </label>
                                                    @endforeach
                                                    】
                                                @endif
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
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
    <script src="{{asset ('resource/service/group.js')}}"></script>
@endsection
