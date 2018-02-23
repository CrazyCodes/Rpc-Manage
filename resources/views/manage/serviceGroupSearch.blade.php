@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">

        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">查询</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="get">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="service_name">ServiceName</label>
                            <input type="text" class="form-control" id="service_name" placeholder="输入服务名"
                                   name="search_name" value="{{request ('search_name')}}">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">查询</button>
                    </div>
                </form>
            </div>

            @inject('groupPresenter','App\Presenters\GroupPresenter')

            {{--<div class="box box-solid">--}}
            {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title">历史记录(只保留最近10条)</h3>--}}

            {{--<div class="box-tools">--}}
            {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i--}}
            {{--class="fa fa-minus"></i>--}}
            {{--</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="box-body no-padding">--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
            {{--@foreach($groupPresenter->getGroupList() as $value)--}}
            {{--<li><a href="?group_id={{$value['id']}}">{{$value['title']}}</a></li>--}}
            {{--@endforeach--}}

            {{--</ul>--}}
            {{--</div>--}}

            {{--<!-- /.box-body -->--}}
            {{--</div>--}}
        </div>
        @if(request ('search_name'))
            @inject('servicePresenter','App\Presenters\ServicePresenter')
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查询结果</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>服务名称</th>
                                <th>服务方法</th>
                                <th>所属群组</th>
                            </tr>
                            @foreach($servicePresenter->searchServiceName(request ('search_name')) as $value)
                                <tr>
                                    <td>{{$value['id']}}</td>
                                    <td>{{$value['service_name']}}</td>
                                    <td>
                                        {{$value['function']}}
                                    </td>
                                    <td>{{$value['group_id']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        @else
            <div class="col-md-9">
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>请点击查询查看结果</p>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
    <script src="{{asset ('resource/service/registry.js')}}"></script>
@endsection
