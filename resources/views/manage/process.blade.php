@extends('layouts.app')

@section('header') @parent @endsection
@section('navigation') @parent @endsection
@section('content')
    <div class="row">

        <div class="col-md-3">
            @inject('supervisorPresenter','App\Presenters\SupervisorPresenter')

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

                        @foreach($supervisorPresenter->getAllProcessInfo() as $value)
                            <li><a href="?name={{$value['name']}}">{{$value['name']}}
                                    - PID:{{$value['pid']}}</a></li>
                        @endforeach

                    </ul>
                </div>

                <!-- /.box-body -->
            </div>
        </div>
        @if(request ('name'))
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#info" data-toggle="tab">进程日志</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="info">
                            <section class="invoice">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="page-header">
                                            <i class="fa fa-globe"></i> Supervisor Status
                                            <small class="pull-right">Date: 2/10/2014</small>
                                        </h2>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                @inject('supervisorPresenter','App\Presenters\SupervisorPresenter')
                                <div class="row invoice-info">
                                    <div class="col-sm-12 invoice-col">
                                        <address>
                                            <li>description
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['description']}}</li>
                                            <li>pid
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['pid']}}</li>
                                            <li>stderr_logfile
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['stderr_logfile']}}</li>
                                            <li>stop
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['stop']}}</li>
                                            <li>logfile
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['logfile']}}</li>
                                            <li>exitstatus
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['exitstatus']}}</li>
                                            <li>spawnerr
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['spawnerr']}}</li>
                                            <li>now
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['now']}}</li>
                                            <li>group
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['group']}}</li>
                                            <li>name
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['name']}}</li>
                                            <li>statename
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['statename']}}</li>
                                            <li>start
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['start']}}</li>
                                            <li>state
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['state']}}</li>
                                            <li>stdout_logfile
                                                : {{$supervisorPresenter->getProcessInfo(request ('name'))['stdout_logfile']}}</li>
                                        </address>
                                        <div style="margin-bottom: 10px">
                                            <button type="button" class="btn-success restart">重启</button>
                                            <button type="button" class="btn-success stop">停止</button>
                                            <button type="button" class="btn-success start">启动</button>
                                        </div>

                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="lead">基本信息 2/22/2014</p>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th style="width:50%">服务名称:</th>
                                                    <td>{{$supervisorPresenter->getProcessInfo(request ('name'))['name']}}</td>
                                                </tr>
                                                <tr>
                                                    <th>PID</th>
                                                    <td>{{$supervisorPresenter->getProcessInfo(request ('name'))['pid']}}</td>
                                                </tr>
                                                <tr>
                                                    <th>状态:</th>
                                                    <td>正常</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->


                                <div class="row no-print">
                                    <div class="col-xs-12">
                                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i
                                                    class="fa fa-print"></i> 打印</a>
                                        <button type="button" class="btn btn-success pull-right">刷新
                                        </button>

                                    </div>
                                </div>
                            </section>
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
@endsection
@section('footer') @parent @endsection
@section('script')
@endsection