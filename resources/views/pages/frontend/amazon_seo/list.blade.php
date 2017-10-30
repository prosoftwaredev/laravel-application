@extends('pages.frontend.home')

@section('header')
    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js' ) }}"/></script>
    
    <script>
        $(function () {
            $('#campaign_log_table').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : true
            })
        })
        $(document).ready(function(){
            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .amazon_seo_menu').addClass('active');
            $('.sidebar-menu .amazon_seo_menu').addClass('menu-open');
            $('.sidebar-menu .amazon_seo_menu .treeview-menu li.list').addClass('active');
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Amazon SEO Campaigns
                <small>Dashboard > Amazon SEO Campaigns</small>
                <a type="button" class="btn btn-info pull-right" href="/amazon_seo/add"><i class="fa fa-plus"></i>&nbsp; Create Amazon Campaign</a>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-amazon"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Amazon Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-navy color-palette">
                        <span class="info-box-icon"><i class="fa fa-credit-card"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Daily Credits Used</span>
                            <span class="info-box-number">226</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Campaign Log</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="campaign_log_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>Campaign Type</th>
                                        <th>Last Run</th>
                                        <th>Credits Used</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Blue Widget Review Video</td>
                                        <td>Amazon SEO</td>
                                        <td>Today 12 minutes ago</td>
                                        <td>55</td>
                                        <td>
                                            <button type="button" class="btn bg-purple">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn bg-orange">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Diji Drone Review Video</td>
                                        <td>Amazon SEO</td>
                                        <td>Today 15 minutes ago</td>
                                        <td>171</td>
                                        <td>
                                            <button type="button" class="btn bg-purple">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn bg-orange">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection