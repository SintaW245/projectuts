@section('head')
<!-- bootstrap-progressbar -->
<link href="{{ base_url('assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection

@extends('layouts.master', ['title' => $title])

@section('foot')
<!-- Chart.js -->
<script src="{{ base_url('assets/gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- jQuery Sparklines -->
<script src="{{ base_url('assets/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- easy-pie-chart -->
<script src="{{ base_url('assets/gentelella/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ base_url('assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
@endsection

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Widget Designs</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="x_content">
            <div class="row">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>

            <div class="row top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_two" style="height: 160px;">
                              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
              </div>
              <div class="col-md-3 tile">
                <span>Total Revenue</span>
                <h2>$ 1,231,809</h2>
                <span class="sparkline_two" style="height: 160px;">
                              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
              </div>
              <div class="col-md-3 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_three" style="height: 160px;">
                              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
              </div>
              <div class="col-md-3 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_two" style="height: 160px;">
                              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
              </div>
            </div>




            <br />
            <div class="row">
              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel fixed_height_390">
                  <div class="x_title">
                    <h2>Tally Design</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                      <canvas id="canvas_line1" height="200"></canvas>
                    </div>

                    <div style="text-align: center; margin-bottom: 15px;">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-default btn-sm">Day</button>
                        <button type="button" class="btn btn-default btn-sm">Month</button>
                        <button type="button" class="btn btn-default btn-sm">Year</button>
                      </div>
                    </div>

                    <div>
                      <ul class="list-inline widget_tally">
                        <li>
                          <p>
                            <span class="month">12 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">29 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">16 January 2015 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel fixed_height_390">
                  <div class="x_title">
                    <h2>Sales Close</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <ul class="verticle_bars list-inline">
                        <li>
                          <div class="progress vertical progress_wide bottom">
                            <div class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                          </div>
                        </li>
                        <li>
                          <div class="progress vertical progress_wide bottom">
                            <div class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                          </div>
                        </li>
                        <li>
                          <div class="progress vertical progress_wide bottom">
                            <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                          </div>
                        </li>
                        <li>
                          <div class="progress vertical progress_wide bottom">
                            <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="divider"></div>

                    <ul class="legend list-unstyled">
                      <li>
                        <p>
                          <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name">Item One Name</span>
                        </p>
                      </li>
                      <li>
                        <p>
                          <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name">Item Two Name</span>
                        </p>
                      </li>
                      <li>
                        <p>
                          <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">Item Three Name</span>
                        </p>
                      </li>
                      <li>
                        <p>
                          <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Item Four Name</span>
                        </p>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>


              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel ui-ribbon-container fixed_height_390">
                  <div class="ui-ribbon-wrapper">
                    <div class="ui-ribbon">
                      30% Off
                    </div>
                  </div>
                  <div class="x_title">
                    <h2>User Mail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <span class="chart" data-percent="86">
                                          <span class="percent"></span>
                      </span>
                    </div>

                    <h3 class="name_title">Finance</h3>
                    <p>Short Description</p>

                    <div class="divider"></div>

                    <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

                  </div>
                </div>
              </div>


              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel fixed_height_390">
                  <div class="x_content">

                    <div class="flex">
                      <ul class="list-inline widget_profile_box">
                        <li>
                          <a>
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <img src="images/user.png" alt="..." class="img-circle profile_img">
                        </li>
                        <li>
                          <a>
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <h3 class="name">Musimbi</h3>

                    <div class="flex">
                      <ul class="list-inline count2">
                        <li>
                          <h3>123</h3>
                          <span>Articles</span>
                        </li>
                        <li>
                          <h3>1234</h3>
                          <span>Followers</span>
                        </li>
                        <li>
                          <h3>123</h3>
                          <span>Following</span>
                        </li>
                      </ul>
                    </div>
                    <p>
                      If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tally Design1</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <span class="chart" data-percent="86">
                                          <span class="percent"></span>
                      </span>
                    </div>

                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                      <canvas id="canvas_doughnut" height="130"></canvas>
                    </div>

                    <div style="text-align: center;">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-default btn-sm">1 D</button>
                        <button type="button" class="btn btn-default btn-sm">1 W</button>
                        <button type="button" class="btn btn-default btn-sm">1 M</button>
                        <button type="button" class="btn btn-default btn-sm">1 Y</button>
                      </div>
                    </div>
                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                      <canvas id="canvas_line" height="190"></canvas>
                    </div>
                    <div>
                      <ul class="list-inline widget_tally">
                        <li>
                          <p>
                            <span class="month">12 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">29 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">16 January 2015 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tally Design2</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <span class="chart" data-percent="86">
                                          <span class="percent"></span>
                      </span>
                    </div>

                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                      <canvas id="canvas_doughnut2" height="130"></canvas>
                    </div>

                    <div style="text-align: center;">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-default btn-sm">1 D</button>
                        <button type="button" class="btn btn-default btn-sm">1 W</button>
                        <button type="button" class="btn btn-default btn-sm">1 M</button>
                        <button type="button" class="btn btn-default btn-sm">1 Y</button>
                      </div>
                    </div>
                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                      <canvas id="canvas_line2" height="190"></canvas>
                    </div>
                    <div>
                      <ul class="list-inline widget_tally">
                        <li>
                          <p>
                            <span class="month">12 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">29 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">16 January 2015 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tally Design3</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <span class="chart" data-percent="86">
                                          <span class="percent"></span>
                      </span>
                    </div>

                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                      <canvas id="canvas_doughnut3" height="130"></canvas>
                    </div>

                    <div style="text-align: center;">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-default btn-sm">1 D</button>
                        <button type="button" class="btn btn-default btn-sm">1 W</button>
                        <button type="button" class="btn btn-default btn-sm">1 M</button>
                        <button type="button" class="btn btn-default btn-sm">1 Y</button>
                      </div>
                    </div>
                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                      <canvas id="canvas_line3" height="190"></canvas>
                    </div>
                    <div>
                      <ul class="list-inline widget_tally">
                        <li>
                          <p>
                            <span class="month">12 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">29 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">16 January 2015 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tally Design4</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                      <span class="chart" data-percent="86">
                                          <span class="percent"></span>
                      </span>
                    </div>

                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                      <canvas id="canvas_doughnut4" height="130"></canvas>
                    </div>

                    <div style="text-align: center;">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-default btn-sm">1 D</button>
                        <button type="button" class="btn btn-default btn-sm">1 W</button>
                        <button type="button" class="btn btn-default btn-sm">1 M</button>
                        <button type="button" class="btn btn-default btn-sm">1 Y</button>
                      </div>
                    </div>
                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                      <canvas id="canvas_line4" height="190"></canvas>
                    </div>
                    <div>
                      <ul class="list-inline widget_tally">
                        <li>
                          <p>
                            <span class="month">12 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">29 December 2014 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="month">16 January 2015 </span>
                            <span class="count">+12%</span>
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection