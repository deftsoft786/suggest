
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
                                <i class="fa fa-building"></i>
                               Select College 
                              

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
                                    College
                                </li>
                                <li class="active breadcrumb-item">Select College

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
                                        <i class="fa fa-building"></i>
                                      Select College
                                        @if(count($errors) > 0)
@foreach($errors->all() as $error)
                   <div class="alert alert-danger" style=" color:black;padding:7px;font-size:14px;text-align: center;">{{ $error }}</div>
@endforeach
@endif</li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form action="{{url('admin/college_review')}}" method="post"  class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                     
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="url2" class="col-form-label">College *</label>
                                                </div>
                                                <div class="col-lg-4">

                                                   <select  class="col-form-label form-control" name="college">
                                                       <option  value=""> Select College  </option>
@foreach($data as $value)
                                        <option  value="<?php echo $value->id; ?>"> <?php echo $value->college;  ?> </option>
                                   
@endforeach
     </select>
                                                </div>
                                            </div>
                                         
                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="SELECT" class="btn btn-primary">
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
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
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
