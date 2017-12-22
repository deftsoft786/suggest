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
                             {{$name->college}}
                               @if(Session::has('message'))
                    <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;"  class="alert alert-success"> {{Session::get('message')}} </div>
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
                                    <a href="{{url('admin/view_college_data/'.$name->id)}}"> College </a>
                                </li>
                                <li class="active breadcrumb-item">Edit College facility

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
                                     Edit College facility
                                       </li>
                                    </div>
                                       <div class="form-actions form-group row">
                     </div>  
                                                         <!-- this append or not -->
                                    <div class="card-block m-t-35 basic">


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                           
                                            <input type="hidden" name="hide" value="" />

                                            <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                  
                                                    <label for="required2" class="col-form-label">Library*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                  <textarea class="form-control" name="library" cols="50" rows="5">@if(!empty($data->library)) {{$data->library}}@else @endif</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                   
                                                    <label for="required2" class="col-form-label">Cafetaria*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <textarea class="form-control" name="cafetaria" cols="50" rows="5">@if(!empty($data->cafetaria)) {{$data->cafetaria}}@else @endif</textarea>
                                                </div>
                                            </div>
                                                 <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                   
                                                    <label for="required2" class="col-form-label">Hostel*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                   <textarea class="form-control" name="hostel" cols="50" rows="5">@if(!empty($data->hostel)) {{$data->hostel}}@else @endif</textarea>
                                                </div>
                                            </div>
                                                  <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                    
                                                    <label for="required2" class="col-form-label">Sports Complex*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                     <textarea class="form-control" name="sport" cols="50" rows="5">@if(!empty($data->sport)) {{$data->sport}}@else @endif</textarea>
                                                </div>
                                            </div>
                                                   <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                   
                                                    <label for="required2" class="col-form-label">Gym*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <textarea class="form-control" name="gym" cols="50" rows="5">@if(!empty($data->gym)) {{$data->gym}}@else @endif</textarea>
                                                </div>
                                            </div>
                                                 <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                   
                                                    <label for="required2" class="col-form-label">Class Rooms*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <textarea class="form-control" name="classroom" cols="50" rows="5">@if(!empty($data->classroom)) {{$data->classroom}}@else @endif</textarea>
                                                </div>
                                            </div>
                                                 <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                  
                                                    <label for="required2" class="col-form-label">Labs*</label>
                                                </div>
                                                <div class="col-lg-4">
                                                     <textarea class="form-control" name="lab" cols="50" rows="5">@if(!empty($data->labs)) {{$data->labs}}@else @endif</textarea>
                                                </div>
                                            </div>

                                         
                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_college_data/'.$name->id)}}">  </span>  CANCEL   </a>
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


window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script>
<!-- /#wrap -->
<!-- global scripts--> 
    <script type="text/javascript" src="{{url('admin/js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/tinyediter.js')}}"></script>
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
