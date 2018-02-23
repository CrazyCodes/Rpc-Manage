@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">
        <div class="col-md-3">

            @inject('groupPresenter','App\Presenters\GroupPresenter')

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Group List</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">

                        @foreach($groupPresenter->getGroupList() as $value)
                            <li><a href="?id={{$value['id']}}">{{$value['title']}}</a></li>
                        @endforeach

                    </ul>
                </div>

                <!-- /.box-body -->
            </div>
        </div>
        @if(request ('id'))
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#list" data-toggle="tab">服务列表</a></li>
                        <li><a href="#test" data-toggle="tab">服务测试</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="list">
                            <div class="box">
                                <div class="box-header with-border">
                                    <a href="{{url ('/manage/service/add')}}?id={{request ('id')}}"
                                       class="btn btn-primary">添加</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    @inject('servicePresenter','App\Presenters\ServicePresenter')

                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>服务名称</th>
                                            <th>服务方法</th>
                                            <th>描述</th>
                                            <th>创建时间</th>
                                            <th>修改时间</th>
                                            <th>操作</th>
                                        </tr>
                                        @foreach($servicePresenter->getServiceForRegistryId(request ('id')) as $value)
                                            <tr>
                                                <td>{{$value['id']}}</td>
                                                <td>{{$value['service_name']}}</td>
                                                <td>{{$value['function']}}</td>
                                                <td>{{$value['description']}}</td>
                                                <td>{{$value['created_at']}}</td>
                                                <td>{{$value['updated_at']}}</td>
                                                <td>

                                                    <button type="button" class="btn-primary deleteService"
                                                            sid="{{$value['id']}}">测试
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="test">
                            <div class="box box-primary">

                                <form role="form" id="test" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="service">选择需要测试的服务</label>
                                            <select class="form-control" name="service" id="service">
                                                @foreach($servicePresenter->getServiceForRegistryId(request ('id')) as $value)
                                                    <option value="{{$value['id']}}">{{$value['service_name']}}
                                                        ->{{$value['function']}}
                                                        @ {{$value['description']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="params">发送参数</label>
                                            <textarea class="form-control"
                                                      id="params" name="params"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">测试提交</button>
                                    </div>
                                </form>

                            </div>
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
                @endif
            </div>
    </div>
@endsection
@section('footer') @parent @endsection
@section('script')
    <script src="{{asset ('resource/service/service.js')}}"></script>
@endsection

