@section('head')
<!-- iCheck -->
<link href="{{ base_url('assets/gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="{{ base_url('assets/gentelella/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
<!-- Select2 -->
<link href="{{ base_url('assets/gentelella/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
<!-- Switchery -->
<link href="{{ base_url('assets/gentelella/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
<!-- starrr -->
<link href="{{ base_url('assets/gentelella/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="{{ base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
@endsection

@extends('layouts.master', ['title' => $title])

@section('foot')
<!-- bootstrap-progressbar -->
<script src="{{ base_url('assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ base_url('assets/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ base_url('assets/gentelella/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ base_url('assets/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ base_url('assets/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ base_url('assets/gentelella/vendors/google-code-prettify/src/prettify.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ base_url('assets/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- Switchery -->
<script src="{{ base_url('assets/gentelella/vendors/switchery/dist/switchery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ base_url('assets/gentelella/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Parsley -->
<script src="{{ base_url('assets/gentelella/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
<!-- Autosize -->
<script src="{{ base_url('assets/gentelella/vendors/autosize/dist/autosize.min.js') }}"></script>
<!-- jQuery autocomplete -->
<script src="{{ base_url('assets/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
<!-- starrr -->
<script src="{{ base_url('assets/gentelella/vendors/starrr/dist/starrr.js') }}"></script>
@endsection

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
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
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
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
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"> Female
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
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
            <br />
            <form class="form-horizontal form-label-left input_mask">

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="Default Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
                   <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>

        <div class="x_panel">
          <div class="x_title">
            <h2>Star Rating</h2>
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
            <h4>Star Ratings<small> Hover and click on a star</small></h4>
            <div>
              <div class="starrr stars"></div>
              You gave a rating of <span class="stars-count">0</span> star(s)
            </div>

            <p>Also you can give a default rating by adding attribute data-rating</p>
            <div class="starrr stars-existing" data-rating='4'></div>
            You gave a rating of <span class="stars-count-existing">4</span> star(s)
          </div>
        </div>

        <div class="x_panel">
          <div class="x_title">
            <h2>Registration Form <small>Click to validate</small></h2>
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

            <!-- start form for validation -->
            <form id="demo-form" data-parsley-validate>
              <label for="fullname">Full Name * :</label>
              <input type="text" id="fullname" class="form-control" name="fullname" required />

              <label for="email">Email * :</label>
              <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

              <label>Gender *:</label>
              <p>
                M:
                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
              </p>

              <label>Hobbies (2 minimum):</label>
              <p style="padding: 5px;">
                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                <br />
                <p>

                  <label for="heard">Heard us by *:</label>
                  <select id="heard" class="form-control" required>
                    <option value="">Choose..</option>
                    <option value="press">Press</option>
                    <option value="net">Internet</option>
                    <option value="mouth">Word of mouth</option>
                  </select>

                  <label for="message">Message (20 chars min, 100 max) :</label>
                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                    data-parsley-validation-threshold="10"></textarea>

                  <br/>
                  <span class="btn btn-primary">Validate form</span>

            </form>
            <!-- end form for validations -->

          </div>
        </div>


      </div>

      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Basic Elements <small>different form elements</small></h2>
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
            <br />
            <form class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="Default Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" class="form-control" value="passwordonetwo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" tabindex="-1">
                    <option></option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_group form-control">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_multiple form-control" multiple="multiple">
                    <option>Choose option</option>
                    <option>Option one</option>
                    <option>Option two</option>
                    <option>Option three</option>
                    <option>Option four</option>
                    <option>Option five</option>
                    <option>Option six</option>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                  <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                  <br>
                  <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value=""> Option one. select more than one options
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value=""> Option two. select more than one options
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                  <br>
                  <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat" checked="checked"> Checked
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat"> Unchecked
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat" disabled="disabled"> Disabled
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class="flat" checked name="iCheck"> Checked
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class="flat" name="iCheck"> Unchecked
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" checked /> Checked
                    </label>
                  </div>
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" /> Unchecked
                    </label>
                  </div>
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                    </label>
                  </div>
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                    </label>
                  </div>
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Buttons <small>Sessions</small></h2>
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

            <form class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="col-sm-3 control-label">Button addons</label>

                <div class="col-sm-9">
                  <div class="input-group">
                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-primary">Go!</button>
                                  </span>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-primary">Go!</button>
                                  </span>
                  </div>
                </div>
              </div>
              <div class="divider-dashed"></div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Button addons</label>

                <div class="col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
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
                    <!-- /btn-group -->
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-primary">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Text areas<small>Sessions</small></h2>
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
          <div id="alerts"></div>
          <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
              </ul>
            </div>

            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a data-edit="fontSize 5">
                    <p style="font-size:17px">Huge</p>
                  </a>
                </li>
                <li>
                  <a data-edit="fontSize 3">
                    <p style="font-size:14px">Normal</p>
                  </a>
                </li>
                <li>
                  <a data-edit="fontSize 1">
                    <p style="font-size:11px">Small</p>
                  </a>
                </li>
              </ul>
            </div>

            <div class="btn-group">
              <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
              <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
              <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
              <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
            </div>

            <div class="btn-group">
              <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
              <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
              <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
              <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
            </div>

            <div class="btn-group">
              <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
              <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
              <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
              <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
            </div>

            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
              <div class="dropdown-menu input-append">
                <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                <button class="btn" type="button">Add</button>
              </div>
              <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
            </div>

            <div class="btn-group">
              <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
              <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
            </div>

            <div class="btn-group">
              <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
              <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
            </div>
          </div>

          <div id="editor-one" class="editor-wrapper"></div>

          <textarea name="descr" id="descr" style="display:none;"></textarea>
          
          <br />

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="x_panel">
      <div class="x_title">
        <h2>Form Input Grid <small>form input </small></h2>
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

          <div class="col-md-12 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-12" class="form-control">
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-6" class="form-control">
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-6" class="form-control">
          </div>


          <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-4" class="form-control">
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-4" class="form-control">
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-4" class="form-control">
          </div>


          <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-3" class="form-control">
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-3" class="form-control">
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-3" class="form-control">
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-3" class="form-control">
          </div>


          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-2" class="form-control">
          </div>


          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <input type="text" placeholder=".col-md-1" class="form-control">
          </div>
        </div>

      </div>
    </div>


    <div class="x_panel">
      <div class="x_title">
        <h2>Form Design <small>different form elements</small></h2>
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
        <br />

        <h4>Horizontal labels</h4>
        <p class="font-gray-dark">
          Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
        </p>
        <form class="form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-7">
              <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="last-name">Last Name <span class="required">*</span>
            </label>
            <div class="col-md-7">
              <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
        </form>


        <h4>Vertical labels</h4>
        <p class="font-gray-dark">
          For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
        </p>
        <div class="col-md-8 center-margin">
          <form class="form-horizontal form-label-left">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>

          </form>
        </div>

        <h4>Inline Form </h4>
        <p class="font-gray-dark">
          Add .form-inline to your form (which doesn't have to be a &lt;form&gt;) for left-aligned and inline-block controls.
        </p>
        <form class="form-inline">
          <div class="form-group">
            <label for="ex3">Email address</label>
            <input type="text" id="ex3" class="form-control" placeholder=" ">
          </div>
          <div class="form-group">
            <label for="ex4">Email address</label>
            <input type="email" id="ex4" class="form-control" placeholder=" ">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-default">Send invitation</button>
        </form>
      </div>
    </div>
</div>
@endsection