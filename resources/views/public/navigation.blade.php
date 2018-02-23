<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset ('resource/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="查询...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @foreach($manageMenuPresenter->getManageMenuListForSecondLevel() as $value)
                <li class="treeview @if($value['open']) active menu-open @endif">
                    <a href="{{$value['url']}}">
                        <i class="{{$value['icon']}}"></i>
                        <span>{{$value['name']}}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    @if($value['second'])
                        <ul class="treeview-menu">
                            @foreach($value['second'] as $second)
                                <li @if(@$second['open']) class="active" @endif><a href="{{$second['url']}}"><i
                                                class="fa fa-circle-o"></i> {{$second['name']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
