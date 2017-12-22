
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
                                <i class="fa fa-image"></i>
                               Web Page Setting 
                             

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
                                    Web Page Setting
                                </li>
                                <li class="active breadcrumb-item">Web Page Setting

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
                                        <i class="fa fa-image"></i>
                                     Web Page Setting
                                       @if(Session::has('message'))
                    <div id="successMessage" style ="color:black;text-align: center;" class="alert alert-success"> {{Session::get('message')}} </div>
            @endif
                                        @if(count($errors) > 0)
@foreach($errors->all() as $error)
                   <div class="alert alert-danger" style=" color:black;padding:7px;font-size:14px;text-align: center;">{{ $error }}</div>
@endforeach
@endif</li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form action="{{url('admin/page_setting')}}" method="post" enctype="multipart/form-data" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                            
                                           <input type="hidden" name="hide" value="{{$data->id}}" />
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="email2" class="col-form-label">Logo Image *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="file" id="email2" name="logo_image" onchange="readURL(this);" value ="{{$data->logo_image}}" class="form-control">
                                                     <img height="65px" width="100px" id="blah" alt="Image Preview " src="{{url('shiksha/images/'.$data->logo_image)}}"  />
                                                </div>
                                            </div>                                              
                                            
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Footer Contact *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" id="password2" name="footer_contact" value="{{$data->footer_contact}}" class="form-control">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Footer Timing*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                   <input type="text" name="footer_timing" value ="{{$data->footer_timing}}" class="form-control" placeholder="00:00 AM - 00:00 PM, MON -SAT"> 
                                                </div>
                                            </div>

                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/dashboard')}}">  </span>  CANCEL   </a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(65);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


 setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            }, 4000); 
</script>

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
