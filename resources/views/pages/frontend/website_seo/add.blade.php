@extends('pages.frontend.home')

@section('header')
    {!! Html::style('css/frontend/style.css') !!}
    <link href="{{ asset('plugins/iCheck/all.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js' ) }}"/></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].social-signal-active, input[type="checkbox"].social-signal-repeat').iCheck({
                checkboxClass: 'icheckbox_flat-green'
            })

            $('.add-pbns-btn').click(function(){
                var pbns = "<div class='row pbns-add-part'>" +
                                "<div class='col-md-2'>" + 
                                "</div>"+
                                "<div class='col-md-10'>"+
                                    "<div class='form-group'>"+
                                        "<div class='row'>"+
                                            "<div class='col-md-2 col-xs-5'>"+
                                                "<select class='form-control pbns-size-select'>"+
                                                    "<option selected='selected'>1</option>"+
                                                    "@for ($i = 2; $i <= 10; $i++)"+
                                                        "<option>{{ $i }}</option>"+
                                                    "@endfor"+
                                                "</select>"+
                                            "</div>"+
                                            "<div class='col-md-2 col-xs-5'>"+
                                                "<select class='form-control pbns-type-select'>"+
                                                    "<option selected='selected'>TF 10+</option>"+
                                                    "<option>TF 20+</option>"+
                                                    "<option>TF 30+</option>"+
                                                "</select>"+
                                            "</div>"+
                                            "<div class='col-md-2 col-xs-5'>"+
                                                "<label>"+
                                                    "Repeat " + "&nbsp&nbsp" +
                                                    "<input type='checkbox' class='flat-red social-signal-repeat'>"+
                                                "</label>"+
                                            "</div>"+
                                            "<div class='col-md-3 col-xs-5'>"+
                                                "<label style='margin-right: 10px; float: left;'>Every</label>"+
                                                "<select class='form-control social-signal-repeat-size'>"+
                                                    "<option selected='selected'>1</option>"+
                                                    "<option>2</option>"+
                                                    "<option>3</option>"+
                                                    "<option>4</option>"+
                                                    "<option>5</option>"+
                                                    "<option>6</option>"+
                                                    "<option>7</option>"+
                                                "</select>"+
                                            "</div>"+
                                            "<div class='col-md-3 col-xs-5'>"+
                                                "<select class='form-control social-signal-repeat-type'>"+
                                                    "<option selected='selected'>Days</option>"+
                                                    "<option>Weeks</option>"+ 
                                                    "<option>Months</option>"+
                                                "</select>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>" +
                            "</div>";

                $('.pbns-part').append(pbns);

                var pbn_count = $(".pbns-part").children().length;

                if (pbn_count == 1) {
                    $('.del-pbns-btn').hide();
                } else {
                    $('.del-pbns-btn').show();
                }
                    
                $('input[type="checkbox"].social-signal-active, input[type="checkbox"].social-signal-repeat').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                })                    
            });

            $('.del-pbns-btn').click(function(){
                $('.pbns-part').children().last().remove();

                var pbn_count = $(".pbns-part").children().length;

                if (pbn_count == 1) {
                    $('.del-pbns-btn').hide();
                } else {
                    $('.del-pbns-btn').show();
                }
            });

            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .website_seo_menu').addClass('active');
            $('.sidebar-menu .website_seo_menu').addClass('menu-open');
            $('.sidebar-menu .website_seo_menu .treeview-menu li.add').addClass('active');
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Website SEO Campaigns
                <small>Dashboard > Website SEO Campaigns > Create Campaign</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info create-seo-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Website SEO Campaign</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post">
                                <!-- text input -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Campaign Name</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Enter Campaign Name">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- textarea -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Website URLs</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" placeholder="Enter URLs to backlink here, one per line"></textarea>
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

                                <div class="form-group social-signals-part">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Social Signals</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-5">
                                                        <label>
                                                            Active &nbsp;
                                                            <input type="checkbox" class="flat-red social-signal-active">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 col-xs-5">
                                                        <select class="form-control social-signal-select">
                                                            <option selected="selected">100</option>
                                                            @for ($i = 200; $i <= 2000; $i+=100)
                                                                <option>{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 col-xs-5">
                                                        <label>
                                                            Repeat &nbsp;
                                                            <input type="checkbox" class="flat-red social-signal-repeat">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 col-xs-5">
                                                        <label style="margin-right: 10px; float: left;">Every</label>
                                                        <select class="form-control social-signal-repeat-size">
                                                            <option selected="selected">1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-xs-5">
                                                        <select class="form-control social-signal-repeat-type">
                                                            <option selected="selected">Days</option>
                                                            <option>Weeks</option>
                                                            <option>Months</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pbns-part">
                                    <div class="row pbns-add-part">
                                        <div class="col-md-2">
                                            <label>PBNs</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-5">
                                                        <label>
                                                            Active &nbsp;
                                                            <input type="checkbox" class="flat-red social-signal-active">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-5">
                                                        <select class="form-control pbns-size-select">
                                                            <option selected="selected">1</option>
                                                            @for ($i = 2; $i <= 10; $i++)
                                                                <option>{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 col-xs-5">
                                                        <select class="form-control pbns-type-select">
                                                            <option selected="selected">TF 10+</option>
                                                            <option>TF 20+</option>
                                                            <option>TF 30+</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 col-xs-5">
                                                        <label>
                                                            Repeat &nbsp;
                                                            <input type="checkbox" class="flat-red social-signal-repeat">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 col-xs-5">
                                                        <label style="margin-right: 10px; float: left;">Every</label>
                                                        <select class="form-control social-signal-repeat-size">
                                                            <option selected="selected">1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-xs-5">
                                                        <select class="form-control social-signal-repeat-type">
                                                            <option selected="selected">Days</option>
                                                            <option>Weeks</option>
                                                            <option>Months</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-2 col-xs-5">
                                            <button type="button" class="btn btn-info pull-left add-pbns-btn"><i class="fa fa-plus"></i>&nbsp; Add Another</button>
                                        </div>
                                        <div class="col-md-2 col-xs-5">
                                            <button type="button" class="btn btn-danger pull-left del-pbns-btn"><i class="fa fa-trash-o"></i>&nbsp; Remove PBN</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group content-category-part">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Content Category</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control content-categories">
                                                <option selected="selected">Apparel & Clothing</option>
                                                <option>Arts & Crafts</option>
                                                <option>Automotive</option>
                                                <option>Business & Office</option>
                                                <option>Cleaning</option>
                                                <option>Construction</option>
                                                <option>Electronics</option>
                                                <option>Entertainment</option>
                                                <option>Food & Cooking</option>
                                                <option>Health & Beauty</option>
                                                <option>Home & Garden</option>
                                                <option>Home Improvement</option>
                                                <option>Kids & Family</option>
                                                <option>Kitchen & Bath</option>
                                                <option>Outdoors</option>
                                                <option>Pets</option>
                                                <option>Real Estate</option>
                                                <option>Religion</option>
                                                <option>Sports</option>
                                                <option>Toys & Games</option>
                                                <option>Travel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group link-credits-part">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Campaign Link Credits</label>
                                        </div>
                                        <div class="col-md-10" style="padding-top: 5px;">
                                            <span class="label label-success">1,256</span> &nbsp;&nbsp;&nbsp;per month
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-info add-campaign-btn">Start</button>
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