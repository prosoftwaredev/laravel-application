@extends('pages.frontend.home')

@section('header')
    <link href="{{ asset('css/frontend/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/pricing-tables/css/reset.css' ) }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/pricing-tables/css/style.css' ) }}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{ asset('plugins/pricing-tables/js/modernizr.js' ) }}"/></script>
    <script type="text/javascript" src="{{ asset('plugins/pricing-tables/js/main.js' ) }}"/></script>
    <script>
        $(document).ready(function(){
            $('.sidebar-menu .treeview.active').removeClass('active');
            $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active'); 
            
            $('.sidebar-menu .buy_credits_menu').addClass('active');
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Buy Link Credits
                <small>Dashboard > Buy Link Credits</small>
            </h1>
            
        </section>

        <!-- Main content -->
        <section class="content container-fluid pricing-table">
            <div class="cd-pricing-container cd-has-margins">
                <div class="cd-pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                        <label for="monthly-2">Monthly</label>
                        <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                        <label for="yearly-2">Yearly</label>
                        <span class="cd-switch"></span>
                    </p>
                </div> <!-- .cd-pricing-switcher -->

                <ul class="cd-pricing-list cd-bounce-invert">
                    <li class="cd-popular col-sm-offset-1">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>GOLD</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">200</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-warning plan-credits">200,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>GOLD</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">2000</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-warning plan-credits">200,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-silver col-sm-offset-2">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Silver</h2>
                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">100</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-info plan-credits">100,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>SILVER</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">1000</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-info plan-credits">100,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-bronze col-sm-offset-1">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>BRONZE</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">50</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label bg-purple plan-credits">50,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>BRONZE</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">500</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label bg-purple plan-credits">50,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="col-sm-offset-2">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Silver</h2>
                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">25</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-primary plan-credits">25,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>SILVER</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">250</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><span class="label label-primary plan-credits">25,000 Credits</span></li>
                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <button type="button" class="btn bg-maroon margin buy-btn">Buy</button>
                                    <button type="button" class="btn bg-navy margin subscribe-btn">Subscribe</button>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->	
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection