@extends('pages.frontend.home')

@section('header')
    {!! Html::style('css/frontend/style.css') !!}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .rank_tracker_menu').addClass('active');
            $('.sidebar-menu .rank_tracker_menu').addClass('menu-open');
            $('.sidebar-menu .rank_tracker_menu .treeview-menu li.add').addClass('active');
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
                <small>Dashboard > Rank Tracker > Create Report</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info create-seo-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Report</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post">
                                <!-- text input -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Report Name</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Enter Report Name">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- textarea -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Website URL</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter URL"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Backlink Keywords</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter keywords for backlink anchor text, one per line"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-info add-campaign-btn">Create Report</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
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