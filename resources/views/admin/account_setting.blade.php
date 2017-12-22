    <div class="bg-dark" id="wrap">
      @include('admin/header')
        <div class="wrapper">
            @include('admin/sidebar')
            <!-- /#left -->
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-sm-5 col-lg-6">
                            <h4 class="nav_top_align">
                                <i class="fa fa-cogs"></i>
                                Settings 
                                @if(Session::has('message'))
                    <div style ="color:red;text-align: center;" class="alert alert-success"> {{Session::get('message')}} </div>
            @endif

                            </h4>
                        </div>
                        <div class="col-sm-7 col-lg-6">
                            <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/dashboard')}}">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Settings
                                </li>
                                <li class="active breadcrumb-item">Setting

                            </ol>
                        </div>
                    </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>

                                     Setting
                                       @if(count($errors) > 0)
@foreach($errors->all() as $error)
                   <div class="alert alert-danger" style="color:black; padding:7px;font-size:14px;text-align: center;">{{ $error }}</div>
@endforeach
@endif</li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form action="{{url('admin/account_setting')}}" method="post" enctype="multipart/form-data" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                            <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                    <label for="required2" class="col-form-label">Admin Username *</label>
                                                </div>
  
                                                <div class="col-lg-4">
                                                    <input type="hidden" name="hide" value="{{$data->id}}" />
                                                    <input type="text" id="password2" name="username" value="{{$data->username}}" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Email *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="email" id="password2" name="email" value="{{$data->email}}" class="form-control">
                                                </div>
                                            </div>
     
                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                     <a class='btn btn-danger' style="text-decoration:none;" href="{{url('admin/dashboard')}}">
                                                      </span> CANCEL</a>
                                                </div>
                                               
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        
                       
                        <!-- /.row -->
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
       <!--wrapper-->
        
</div>
<!-- /#wrap -->
<!-- global scripts-->
    <script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
    <!--End of Global scripts-->
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{url('admin/vendors/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/jquery-validation/js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/moment/js/moment.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{url('admin/js/form.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/pages/form_validation.js')}}"></script>
<!-- end page level scripts -->

</body>

</html>
