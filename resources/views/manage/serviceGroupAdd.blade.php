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
    <script src="{{asset ('resource/service/group.js')}}"></script>
@endsection
