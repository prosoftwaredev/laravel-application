@extends('pages.frontend.home')

@section('header')
    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    
    <script>
        $(document).ready(function(){
            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .train_strategy_menu').addClass('active');
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tutorials
                <small>Dashboard > Traing & Strategy</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Train & Strategy</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <iframe src="https://player.vimeo.com/video/22439234" style="width:100%; height:500px;border:0" allowfullscreen> </iframe>
                                </div>
                            </div>
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