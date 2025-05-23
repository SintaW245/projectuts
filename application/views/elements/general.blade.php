@section('head')
<!-- iCheck -->
<link href="{{ base_url('assets/gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{ base_url('assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
<!-- PNotify -->
<link href="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
<link href="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
<link href="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
@endsection

@extends('layouts.master', ['title' => $title])

@section('foot')
<!-- bootstrap-progressbar -->
<script src="{{ base_url('assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ base_url('assets/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
<!-- PNotify -->
<script src="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.js') }}"></script>
<script src="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
<script src="{{ base_url('assets/gentelella/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>
@endsection

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>General Elements</h3>
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

    <div class="">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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


            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
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

            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                </li>
              </ul>
              <div id="myTabContent2" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">
                  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float left</small></h2>
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

            <div class="col-xs-3">
              <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab">Home</a>
                </li>
                <li><a href="#profile" data-toggle="tab">Profile</a>
                </li>
                <li><a href="#messages" data-toggle="tab">Messages</a>
                </li>
                <li><a href="#settings" data-toggle="tab">Settings</a>
                </li>
              </ul>
            </div>

            <div class="col-xs-9">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                  <p class="lead">Home tab</p>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div class="tab-pane" id="profile">Profile Tab.</div>
                <div class="tab-pane" id="messages">Messages Tab.</div>
                <div class="tab-pane" id="settings">Settings Tab.</div>
              </div>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float right</small></h2>
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

            <div class="col-xs-9">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home-r">
                  <p class="lead">Home tab</p>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div class="tab-pane" id="profile-r">Profile Tab.</div>
                <div class="tab-pane" id="messages-r">Messages Tab.</div>
                <div class="tab-pane" id="settings-r">Settings Tab.</div>
              </div>
            </div>

            <div class="col-xs-3">
              <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#home-r" data-toggle="tab">Home</a>
                </li>
                <li><a href="#profile-r" data-toggle="tab">Profile</a>
                </li>
                <li><a href="#messages-r" data-toggle="tab">Messages</a>
                </li>
                <li><a href="#settings-r" data-toggle="tab">Settings</a>
                </li>
              </ul>
            </div>

          </div>

        </div>
      </div>
      <div class="clearfix"></div>


      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

            <!-- start accordion -->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="panel-title">Collapsible Group Items #1</h4>
                </a>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="panel-title">Collapsible Group Items #2</h4>
                </a>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p><strong>Collapsible Item 2 data</strong>
                    </p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4 class="panel-title">Collapsible Group Items #3</h4>
                </a>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p><strong>Collapsible Item 3 data</strong>
                    </p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                  </div>
                </div>
              </div>
            </div>
            <!-- end of accordion -->


          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

            <!-- start accordion -->
            <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="panel-title">Collapsible Group Item #1</h4>
                </a>
                <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="panel-title">Collapsible Group Item #2</h4>
                </a>
                <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p><strong>Collapsible Item 2 data</strong>
                    </p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                  <h4 class="panel-title">Collapsible Group Item #3</h4>
                </a>
                <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p><strong>Collapsible Item 3 data</strong>
                    </p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                  </div>
                </div>
              </div>
            </div>
            <!-- end of accordion -->


          </div>
        </div>
      </div>

    </div>
    <div class="clearfix"></div>

    <div class="">

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tooltips <small>Hover to view</small></h2>
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

            <p>Add small overlays of content for housing secondary information.</p>
            <!-- start pop-over -->
            <div class="bs-example-popovers">
              <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
                Left
              </button>
              <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
                Top
              </button>
              <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Bottom
              </button>
              <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Right
              </button>
            </div>
            <!-- end pop-over -->

          </div>
        </div>
      </div>



      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tooltips <small>Hover to view</small></h2>
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

            <p>Hover over the links below to see tooltips:</p>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip left">Tooltip left</button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip top">Tooltip top</button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip bottom">Tooltip bottom</button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip right">Tooltip right</button>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daily active users <small>Sessions</small></h2>
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
          <ul class="list-unstyled timeline">
            <li>
              <div class="block">
                <div class="tags">
                  <a href="" class="tag">
                    <span>Entertainment</span>
                  </a>
                </div>
                <div class="block_content">
                  <h2 class="title">
                                  <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                              </h2>
                  <div class="byline">
                    <span>13 hours ago</span> by <a>Jane Smith</a>
                  </div>
                  <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="block">
                <div class="tags">
                  <a href="" class="tag">
                    <span>Entertainment</span>
                  </a>
                </div>
                <div class="block_content">
                  <h2 class="title">
                                  <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                              </h2>
                  <div class="byline">
                    <span>13 hours ago</span> by <a>Jane Smith</a>
                  </div>
                  <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="block">
                <div class="tags">
                  <a href="" class="tag">
                    <span>Entertainment</span>
                  </a>
                </div>
                <div class="block_content">
                  <h2 class="title">
                                  <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                              </h2>
                  <div class="byline">
                    <span>13 hours ago</span> by <a>Jane Smith</a>
                  </div>
                  <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                  </p>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daily active users <small>Sessions</small></h2>
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

          <div class="bs-example" data-example-id="simple-jumbotron">
            <div class="jumbotron">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-chevron-down"></i> Dropdowns <small>Multiple dropdown designs</small></h2>
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

          <p>Gentelella provides you with several dropdown designs for your choosing.</p>
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation"><a href="#">Regular link</a>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          Dropdown
                          <span class="caret"></span>
                      </a>
              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Another action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Something else here</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Separated link</a>
                </li>
              </ul>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          Dropdown
                          <span class="caret"></span>
                      </a>
              <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Another action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Something else here</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Separated link</a>
                </li>
              </ul>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          Dropdown
                          <span class="caret"></span>
                      </a>
              <ul id="menu3" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop6">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Another action</a>
                </li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Something else here</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Separated link</a>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-square-o"></i> Modals</h2>
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

          <!-- modals -->
          <!-- Large modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  <h4>Text in a modal</h4>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>

              </div>
            </div>
          </div>

          <!-- Small modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                </div>
                <div class="modal-body">
                  <h4>Text in a modal</h4>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>

              </div>
            </div>
          </div>
          <!-- /modals -->
        </div>
      </div>
    </div>



    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-bell"></i> Notifications <small>Styled & Custom notifications</small></h2>
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

          <p>Regular notifications</p>
          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Regular Success',
                          text: 'That thing that you were trying to do worked!',
                          type: 'success',
                          styling: 'bootstrap3'
                      });">Success</button>

          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'New Thing',
                          text: 'Just to let you know, something happened.',
                          type: 'info',
                          styling: 'bootstrap3'
                      });">Info</button>

          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Regular Notice',
                          text: 'Check me out! I\'m a notice.',
                          styling: 'bootstrap3'
                      });">Notice</button>

          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Oh No!',
                          text: 'Something terrible happened.',
                          type: 'error',
                          styling: 'bootstrap3'
                      });">Error</button>

          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Oh No!',
                          text: 'Something terrible happened.',
                          type: 'info',
                          styling: 'bootstrap3',
                          addclass: 'dark'
                      });">Dark</button>

          <hr />

          <p>Sticky notifications.. these wont close unless user closes them.</p>
          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Sticky Success',
                          text: 'Sticky success... I\'m not even gonna make a joke.',
                          type: 'success',
                          hide: false,
                          styling: 'bootstrap3'
                      });">Success</button>


          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Sticky Info',
                          text: 'Sticky Info... I\'m not even gonna make a joke.',
                          type: 'info',
                          hide: false,
                          styling: 'bootstrap3'
                      });">Info</button>


          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Sticky Warning',
                          text: 'Sticky Warning... I\'m not even gonna make a joke.',
                          hide: false,
                          styling: 'bootstrap3'
                      });">Warning</button>


          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Sticky Danger',
                          text: 'Sticky Danger... I\'m not even gonna make a joke.',
                          type: 'error',
                          hide: false,
                          styling: 'bootstrap3'
                      });">Error</button>


          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Sticky Success',
                          text: 'Sticky success... I\'m not even gonna make a joke.',
                          type: 'info',
                          hide: false,
                          styling: 'bootstrap3',
                          addclass: 'dark'
                      });">Dark</button>

          <hr/>

          <button class="btn btn-default source" onclick="new PNotify({
                          title: 'Non-Blocking Notice',
                          type: 'info',
                          text: 'When you hover over me I\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\'t even here.',
                          nonblock: {
                              nonblock: true
                          },
                          styling: 'bootstrap3',
                          addclass: 'dark'
                      });">Non-Blocking Notice</button>

          <hr />

          <div id="antoox">
            <div>
              <div></div>
              <div></div>
              <div></div>
            </div>

          </div>

          <button class="btn btn-default source" onclick="new TabbedNotification({
                          title: 'Tabbed Notificat',
                          text: 'Sticky success... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                          type: 'success',
                          sound: false
                      })">Success</button>

          <button class="btn btn-default source" onclick="new TabbedNotification({
                          title: 'Tabbed Notificat',
                          text: 'Custom Info... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.',
                          type: 'info',
                          sound: false
                      })">Info</button>

          <button class="btn btn-default source" onclick="new TabbedNotification({
                          title: 'Tabbed Notificat',
                          text: 'Custom Warning... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                          type: 'warning',
                          sound: false
                      })">Warning</button>

          <button class="btn btn-default source" onclick="new TabbedNotification({
                          title: 'Custom Notification error',
                          text: 'Custom Error... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                          type: 'error',
                          sound: false
                      })">Error</button>

          <button class="btn btn-default source" onclick="new TabbedNotification({
                          title: 'Tabbed notification dark',
                          text: 'Custom Dark... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                          type: 'dark',
                          sound: false
                      })">Dark</button>


        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="x_panel">
        <div class="x_title">
          <h2>Pop Overs <small>Sessions</small></h2>
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
        <div class="x_content bs-example-popovers">

          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-warning alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>

        </div>
      </div>
    </div>



    <div class="col-md-6">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-align-left"></i> Progress bar<small>Sessions</small></h2>
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

          <p>Bootstrap progress bar with animated loading bar, add right to .progress to align right</p>
          <div class="row">
            <div class="col-md-6">
              <div class="progress right">
                <div class="progress-bar progress-bar-danger" data-transitiongoal="25"></div>
              </div>
              <div class="progress right">
                <div class="progress-bar progress-bar-warning" data-transitiongoal="45"></div>
              </div>
              <div class="progress right">
                <div class="progress-bar progress-bar-info" data-transitiongoal="65"></div>
              </div>
              <div class="progress right">
                <div class="progress-bar progress-bar-success" data-transitiongoal="95"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="progress">
                <div class="progress-bar progress-bar-danger" data-transitiongoal="25"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" data-transitiongoal="45"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" data-transitiongoal="65"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" data-transitiongoal="95"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-12">
              <ul class="verticle_bars list-inline">
                <li>
                  <div class="progress progress-striped vertical progress_wide bottom">
                    <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="25"></div>
                  </div>
                </li>
                <li>
                  <div class="progress progress-striped vertical progress_wide bottom">
                    <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="45"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical progress_wide bottom">
                    <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="65"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical progress_wide bottom">
                    <div class="progress-bar  progress-bar-success" role="progressbar" data-transitiongoal="85"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12 fixed_height_200">
              <ul class="verticle_bars list-inline">
                <li>
                  <div class="progress vertical bottom">
                    <div class="progress-bar  progress-bar-success" role="progressbar" data-transitiongoal="85"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical bottom">
                    <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="65"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical bottom">
                    <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="45"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical bottom">
                    <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="25"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <ul class="verticle_bars list-inline">
                <li>
                  <div class="progress vertical progress_wide">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" data-transitiongoal="25"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical progress_wide">
                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" data-transitiongoal="45"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical progress_wide">
                    <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="65"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical progress_wide">
                    <div class="progress-bar  progress-bar-success" role="progressbar" data-transitiongoal="85"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12 fixed_height_200">
              <ul class="verticle_bars list-inline">
                <li>
                  <div class="progress vertical">
                    <div class="progress-bar  progress-bar-success" role="progressbar" data-transitiongoal="85"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical">
                    <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="65"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical">
                    <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="45"></div>
                  </div>
                </li>
                <li>
                  <div class="progress vertical">
                    <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="25"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>



        </div>
      </div>
    </div>

    <!-- Start to do list -->
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>To Do List <small>Sample tasks</small></h2>
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

          <div class="">
            <ul class="to_do">
              <li>
                <p>
                  <input type="checkbox" class="flat"> Schedule meeting with new client </p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat"> Create email address for new intern</p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat"> Have IT fix the network printer</p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat"> Copy backups to offsite location</p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End to do list -->


    <div class="col-md-6">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daily active users <small>Sessions</small></h2>
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
          <ul class="list-unstyled msg_list">
            <li>
              <a>
                <span class="image">
                  <img src="{{ base_url('assets/gentelella/images/img.jpg') }}" alt="img" />
                </span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image">
                  <img src="{{ base_url('assets/gentelella/images/img.jpg') }}" alt="img" />
                </span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image">
                  <img src="{{ base_url('assets/gentelella/images/img.jpg') }}" alt="img" />
                </span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image">
                  <img src="{{ base_url('assets/gentelella/images/img.jpg') }}" alt="img" />
                </span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>
<div class="clearfix"></div>
<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
@endsection