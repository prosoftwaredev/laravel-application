@extends('pages.frontend.home')

@section('header')
    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js' ) }}"/></script>
    
    <script>
        $(function () {
            $('#reports_table').DataTable({
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
            $('.sidebar-menu .rank_tracker_menu .treeview-menu li.list').addClass('active');
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
                <small>Dashboard > Rank Tracker > View Report</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Report Name: Widgets.com SEO</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="reports_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Keyword</th>
                                        <th>Previous</th>
                                        <th>New</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Blue Widget</td>
                                        <td>34</td>
                                        <td>3</td>
                                        <td>
                                            <a href="/report/history"><button type="button" class="btn btn-info">
                                                <i class="fa fa-history"></i>
                                            </button></a>
                                            <button type="button" class="btn bg-orange">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>red widget</td>
                                        <td>63</td>
                                        <td>4</td>
                                        <td>
                                            <a href="/report/history"><button type="button" class="btn btn-info">
                                                <i class="fa fa-history"></i>
                                            </button></a>
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