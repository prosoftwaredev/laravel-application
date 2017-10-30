@extends('pages.frontend.home')

@section('header')
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
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-youtube"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">YouTube Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 65%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-amazon"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Amazon Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 15%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-link"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Website Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 94%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-teal">
                        <span class="info-box-icon"><i class="fa fa-google"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Google Map Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 23%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon"><i class="fa fa-rss"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">RSS FEED Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 53%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-maroon">
                        <span class="info-box-icon"><i class="fa fa-link"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">TIER 2 Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 79%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-red color-palette">
                        <span class="info-box-icon"><i class="fa fa-check-square-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Active Campaigns</span>
                            <span class="info-box-number">23</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 10%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-navy color-palette">
                        <span class="info-box-icon"><i class="fa fa-credit-card"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Daily Credits Used</span>
                            <span class="info-box-number">3,556</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 34%"></div>
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
                <div class="col-md-4 col-xs-12">
                    <div class="info-box bg-green color-palette">
                        <span class="info-box-icon"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Credits Remaining</span>
                            <span class="info-box-number">253</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 30%"></div>
                            </div>
                            <span class="progress-description">
                                70% Decrease in 30 Days
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
                    <div class="box box-info">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Widgets.com</td>
                                        <td>Website SEO</td>
                                        <td>Today 32 minutes ago</td>
                                        <td>765</td>
                                    </tr>
                                    <tr>
                                        <td>Drone Products</td>
                                        <td>Amazon SEO</td>
                                        <td>Today 45 minutes ago</td>
                                        <td>1274</td>
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