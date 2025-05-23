@section('head')
<!-- Dropzone.js -->
<link href="{{ base_url('assets/gentelella/vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
@endsection

@extends('layouts.master', ['title' => $title])

@section('foot')
<!-- Dropzone.js -->
<script src="{{ base_url('assets/gentelella/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>
@endsection

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Upload </h3>
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
            <h2>Dropzone multiple file uploader</h2>
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
            <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
            <form action="form_upload.html" class="dropzone"></form>
            <br />
            <br />
            <br />
            <br />
          </div>
        </div>
      </div>
    </div>
</div>
@endsection