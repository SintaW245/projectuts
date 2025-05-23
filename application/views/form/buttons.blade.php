@extends('layouts.master', ['title' => $title])

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Buttons</h3>
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
      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Default Buttons </h2>
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
            <button type="button" class="btn btn-default">Default</button>

            <button type="button" class="btn btn-primary">Primary</button>

            <button type="button" class="btn btn-success">Success</button>

            <button type="button" class="btn btn-info">Info</button>

            <button type="button" class="btn btn-warning">Warning</button>

            <button type="button" class="btn btn-danger">Danger</button>

            <button type="button" class="btn btn-dark">Dark</button>

            <button type="button" class="btn btn-link">Link</button>
          </div>
        </div>


        <div class="x_panel">
          <div class="x_title">
            <h2>Rounded Button</h2>
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
            <button type="button" class="btn btn-round btn-default">Default</button>
            <button type="button" class="btn btn-round btn-primary">Primary</button>
            <button type="button" class="btn btn-round btn-success">Success</button>
            <button type="button" class="btn btn-round btn-info">Info</button>
            <button type="button" class="btn btn-round btn-warning">Warning</button>
            <button type="button" class="btn btn-round btn-danger">Danger</button>
          </div>
        </div>

        <div class="x_panel">
          <div class="x_title">
            <h2>Button Dropdown</h2>
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

            <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">Default <span class="caret"></span>
            </button>
            <ul role="menu" class="dropdown-menu">
              <li><a href="#">Action</a>
              </li>
              <li><a href="#">Another action</a>
              </li>
              <li><a href="#">Something else here</a>
              </li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a>
              </li>
            </ul>
            </div>
            
            <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Primary <span class="caret"></span>
            </button>
            <ul role="menu" class="dropdown-menu">
              <li><a href="#">Action</a>
              </li>
              <li><a href="#">Another action</a>
              </li>
              <li><a href="#">Something else here</a>
              </li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a>
              </li>
            </ul>
            </div>
            
            <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Success <span class="caret"></span>
            </button>
            <ul role="menu" class="dropdown-menu">
              <li><a href="#">Action</a>
              </li>
              <li><a href="#">Another action</a>
              </li>
              <li><a href="#">Something else here</a>
              </li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a>
              </li>
            </ul>
            </div>

          </div>
        </div>


        <div class="x_panel">
          <div class="x_title">
            <h2>Split Button Dropdown</h2>
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

            <!-- Split button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger">Action</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a>
                </li>
                <li><a href="#">Another action</a>
                </li>
                <li><a href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a>
                </li>
              </ul>
            </div>

            <!-- Split button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger">Action</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a>
                </li>
                <li><a href="#">Another action</a>
                </li>
                <li><a href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a>
                </li>
              </ul>
            </div>

            <!-- Split button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger">Action</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a>
                </li>
                <li><a href="#">Another action</a>
                </li>
                <li><a href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a>
                </li>
              </ul>
            </div>


          </div>
        </div>


        <div class="x_panel">
          <div class="x_title">
            <h2>Button App Design</h2>
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
            <p>Add the class <code>.btn .btn-app</code> tag</p>
            <a class="btn btn-app">
              <i class="fa fa-edit"></i> Edit
            </a>
            <a class="btn btn-app">
              <i class="fa fa-play"></i> Play
            </a>
            <a class="btn btn-app">
              <i class="fa fa-pause"></i> Pause
            </a>
            <a class="btn btn-app">
              <i class="fa fa-save"></i> Save
            </a>
            <a class="btn btn-app">
              <span class="badge bg-red">6</span>
              <i class="fa fa-bullhorn"></i> Notifications
            </a>
            <a class="btn btn-app">
              <i class="fa fa-repeat"></i> Repeat
            </a>
            <a class="btn btn-app">
              <span class="badge bg-green">211</span>
              <i class="fa fa-users"></i> Users
            </a>
            <a class="btn btn-app">
              <span class="badge bg-orange">32</span>
              <i class="fa fa-inbox"></i> Orders
            </a>
            <a class="btn btn-app">
              <span class="badge bg-orange">12</span>
              <i class="fa fa-envelope"></i> Inbox
            </a>
            <a class="btn btn-app">
              <span class="badge bg-blue">102</span>
              <i class="fa fa-heart-o"></i> Likes
            </a>
          </div>
        </div>

      </div>

      <div class="col-md-6">

        <div class="x_panel">
          <div class="x_title">
            <h2>Button Sizes</h2>
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
            <div class="buttons">
              <!-- Standard button -->
              <button type="button" class="btn btn-default btn-lg">Large Button</button>
              <button type="button" class="btn btn-default btn-sm">Medium Button</button>
              <button type="button" class="btn btn-default btn-xs">Small Button</button>
              <br>

              <button type="button" class="btn btn-success btn-lg">Large Button</button>
              <button type="button" class="btn btn-success btn-sm">Medium Button</button>
              <button type="button" class="btn btn-success btn-xs">Small Button</button>
              <br>

              <button type="button" class="btn btn-info btn-lg">Large Button</button>
              <button type="button" class="btn btn-info btn-sm">Medium Button</button>
              <button type="button" class="btn btn-info btn-xs">Small Button</button>
              <br>
            </div>
          </div>

        </div>


        <div class="x_panel">
          <div class="x_title">
            <h2>Button Groups</h2>
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
            <div class="row">
              <div class="btn-group">
                <button class="btn btn-default" type="button">Left</button>
                <button class="btn btn-default" type="button">Middle</button>
                <button class="btn btn-default" type="button">Right</button>
              </div>
              <div class="btn-group  btn-group-sm">
                <button class="btn btn-default" type="button">Left</button>
                <button class="btn btn-default" type="button">Middle</button>
                <button class="btn btn-default" type="button">Right</button>
              </div>
            </div>
            <p class="text-muted">Vertical button groups</p>
            <div class="row">
              <div class="btn-group-vertical">
                <button class="btn btn-default" type="button">Top</button>
                <button class="btn btn-default" type="button">Middle</button>
                <button class="btn btn-default" type="button">Bottom</button>
              </div>
            </div>
            <p class="text-muted">Nested button groups</p>
            <div class="row">
              <div class="btn-group">
                <button class="btn btn-default" type="button">1</button>
                <button class="btn btn-danger" type="button">2</button>
                <button class="btn btn-default" type="button">3</button>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Dropdown <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Dropdown link 1</a>
                    </li>
                    <li><a href="#">Dropdown link 2</a>
                    </li>
                    <li><a href="#">Dropdown link 3</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <p class="text-muted">Multiple button groups</p>
            <div class="row">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <button class="btn btn-info" type="button">1</button>
                  <button class="btn btn-info active" type="button">2</button>
                  <button class="btn btn-info" type="button">3</button>
                  <button class="btn btn-info" type="button">4</button>
                </div>
                <div class="btn-group">
                  <button class="btn btn-success" type="button">5</button>
                  <button class="btn btn-success" type="button">6</button>
                  <button class="btn btn-success" type="button">7</button>
                </div>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">8</button>
                </div>
              </div>
            </div>

            <p class="text-muted">Group Radio</p>
            <div class="row">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                  <input type="radio" name="options" id="option1"> Option 1
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="options" id="option2"> Option 2
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="options" id="option3"> Option 3
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection