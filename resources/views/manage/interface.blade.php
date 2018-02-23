@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">

        <div class="col-md-3">
            {{--<a href="{{url ('/manage/service_group/add')}}"--}}
            {{--class="btn btn-primary btn-block margin-bottom">添加群组</a>--}}

            @inject('groupPresenter','App\Presenters\GroupPresenter')

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">List</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        @foreach($groupPresenter->getGroupList() as $value)
                            <li><a href="?group_id={{$value['id']}}">{{$value['title']}}</a></li>
                        @endforeach

                    </ul>
                </div>

                <!-- /.box-body -->
            </div>
        </div>
        @if(request ('group_id'))
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#list" data-toggle="tab">提供者列表</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="list">
                            @inject('interfacePresenter','App\Presenters\InterfacePresenter')
                            <textarea class="form-control" rows="20"
                                      placeholder="Enter ..." disabled>{{$interfacePresenter->getInfo(request ('group_id'))}}</textarea>
                        </div>
                    </div>

                </div>
                @else
                    <div class="col-md-9">
                        <div class="callout callout-info">
                            <h4>Tip!</h4>

                            <p>请点击左侧菜单查看详情</p>
                        </div>
                    </div>
            </div>
        @endif
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
@endsection