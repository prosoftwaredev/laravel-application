@extends('pages.frontend.home')

@section('header')
    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <link href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js' ) }}"/></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    <script>
        $(function () {
            $('#reports_history').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : false,
            })
        })
        $(document).ready(function(){
            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .rank_tracker_menu').addClass('active');
            $('.sidebar-menu .rank_tracker_menu').addClass('menu-open');
            $('.sidebar-menu .rank_tracker_menu .treeview-menu li.history').addClass('active');

            Highcharts.chart('report_history_chart', {

                title: {
                    text: 'Rank History'
                },

                labels: {
                    enabled: false
                },

                yAxis: [{
                    title: {
                        text: '',
                    },
                }],

                xAxis: {
                    min: 0,
                    categories: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August']
                },
                
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                series: [{
                    name: 'Report',
                    data: [100, 80, 34, 3, 3, 3, 3, 3]
                }]

            });

        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Rank Tracker
                <small>Dashboard > Rank Tracker > View Report > View History</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">View History: Blue Widget</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="chart" id="report_history_chart"></div>
                        <div class="box-body">
                            <table id="reports_history" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Keyword</th>
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>March</th>
                                        <th>April</th>
                                        <th>May</th>
                                        <th>June</th>
                                        <th>July</th>
                                        <th>August</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Blue Widget</td>
                                        <td>100</td>
                                        <td>80</td>
                                        <td>34</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
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