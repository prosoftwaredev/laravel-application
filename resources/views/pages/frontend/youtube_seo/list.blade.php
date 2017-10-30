@extends('pages.frontend.home')

@section('header')

    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('js/pages/frontend/youtube_seo/youtube_seo.js' ) }}"/></script>

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                YouTube SEO Campaigns
                <small>Dashboard > YouTube SEO Campaigns</small>
                <a type="button" class="btn btn-info pull-right" href="/youtube_seo/add"><i class="fa fa-plus"></i>&nbsp; Create YouTube Campaign</a>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-youtube"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">YouTube Campaigns</span>
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
                                        <th class="hidden">id</th>
                                        <th>Campaign Name</th>
                                        <th>Campaign Type</th>
                                        <th>Last Run</th>
                                        <th>Credits Used</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($youtube_campaigns as $youtube_campaign)
                                    <tr>
                                        <td id="campaign_id" class="hidden">
                                            {{ $youtube_campaign->id }}
                                        </td>
                                        <td>
                                            {{ $youtube_campaign->name }}
                                        </td>
                                        <td>
                                            Youtube SEO
                                        </td>
                                        <td>
                                            {{ $youtube_campaign->updated_at }}
                                        </td>
                                        <td>
                                            55
                                        </td>
                                        <td>
                                            <button type="button" class="btn bg-purple">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn bg-orange" data-toggle="modal" data-target="#delete-campaign-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
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
    <div class="modal modal-warning fade" id="delete-campaign-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete YouTube SEO Campaign</h4>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete YouTube SEO Campaign?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger delete-campaign"><i class="fa fa-trash-o"></i> Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
