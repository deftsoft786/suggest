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
                               {{$data->college}}
                               @if(Session::has('message'))
                    <div id="successMessage" style ="color:black;text-align:center; width:50%; margin-left:240px;" class="alert alert-success"> {{Session::get('message')}} </div>
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
                                  <a href="{{url('admin/view_college_data/'.$data->id)}}">
                                    College
                                  </a>
                                </li>
                                <li class="active breadcrumb-item">Edit College

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
                                        <i class="fa fa-university"></i>
                                      Edit College
                                        </li>


                                    </div>
                                         
                    <div class="form-actions form-group row">
                       
                     </div>
                                    <!-- this append or not -->
                                    <div class="card-block m-t-35 basic">
                                       

                                        <form action="{{url('admin/edit_college/'.$data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                           
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="email2" class="col-form-label">Image *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                   <input type="file" id="fileupload" name="images" value ="" class="form-control">

                                                    <?php  
                                                         $images_csv =  $data->image;                                          
                                                      echo '<div id="dvPreview"><img height="100px" width="100px" alt="Image Preview " src="'.url('admin/img/college/'.$images_csv).'"/></div>';
                                                    ?>
                                                    <div style="margin-right:385px;display:inline; width:40%;" class="form-group row"></div>
                                    
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                    <input type="hidden" name="hide" value="{{$data->id}}" />
                                                    <label for="required2" class="col-form-label">College Name *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="college_name" value="{{$data->college}}" class="form-control">
                                                </div>
                                                 @if ($errors->has('college_name'))
                                                         <div style="color:red;">{{ $errors->first('college_name') }}</div>
                                                    @endif
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Location *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input  onFocus="geolocate()" type="text" id="autocomplete" name="location" value="{{$data->location}}" class="form-control">
                                                </div>
                                                 @if ($errors->has('location'))
                                                         <div style="color:red;">{{ $errors->first('location') }}</div>
                                                    @endif
                                            </div>

                                              <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="time" class="col-form-label">Country  *</label>
                                                </div>
                                                <div class="col-lg-4">
                                               <select class="form-control" name="country">
                                                    <option value="">Select Country</option>
                                                  @if(count($country) > 0)
                                                  @foreach($country as $value)  
                                                    <option value="{{$value->country_name}}"@if($value->country_name == $data->country){{'selected'}}@endif>{{$value->country_name}}</option>
                                                  @endforeach
                                                  @endif  
                                                </select>
                                                </div>
                                                 @if($errors->has('country'))
                                                         <div style="color:red;">{{ $errors->first('country') }}</div>
                                                 @endif
                                            </div>


                                            <div class="form-group row">
                                                <div  class="col-lg-4 text-lg-right">
                                                    <label for="establish" class="col-form-label">Establishment *</label>
                                                </div>
                                                <div id="yearField" class="col-lg-4">
                                                    <input  type="text" id="establish" name="establishment" value="{{$data->establishment}}" class="form-control">
                                                </div>
                                                 @if ($errors->has('establishment'))
                                                         <div style="color:red;">{{ $errors->first('establishment') }}</div>
                                                    @endif
                                            </div>
                                             <div class="form-group row">
                                             <div class="col-lg-4 text-lg-right">
                                                    <label for="url2" class="col-form-label"> Type*</label>
                                                </div>
                                        
                                                    <label class="custom-control custom-checkbox">
                                                       
                                                        <input type="radio" <?php if($data->type == 1){echo "checked";} ?> name="type" value="1" class="custom-control-input" >

                                                        <span class="custom-control-indicator"> </span>
                                                        <span class="custom-control-description">Private</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                       
                                                        <input type="radio" <?php if($data->type == 2){echo "checked";} ?> name="type" value="2" class="custom-control-input" >

                                                        <span class="custom-control-indicator"> </span>
                                                        <span class="custom-control-description">Govt</span>
                                                    </label>
                                                    @if ($errors->has('type'))
                                                         <div style="color:red;margin-left:300px;">{{ $errors->first('type') }}</div>
                                                    @endif                   
                                            
                                             </div>
                                           
                                     <div class="form-group row">
                                             <div class="col-lg-4 text-lg-right">
                                                    <label for="url2" class="col-form-label">Category *</label>
                                                </div>
                                            
                                               
                            @foreach($category as $values)
                            <label >
                               
                                <input type="checkbox" class="example form-control" name="category[]" <?php if(in_array($values->id,$data->category)){ echo 'checked'; } ?> value="{{$values->id}}" >

                               
                                <span class="form-control">{{$values->category_name}}</span>
                            </label>
                                  @endforeach           
                        @if ($errors->has('category'))
                                                         <div style="color:red;">{{ $errors->first('category') }}</div>
                                                    @endif
                     </div>
                                            

                                          

                                         
                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_college_data/'.$data->id)}}">   CANCEL   </a>
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
$('input.example').on('change', function() {
    $('input.example').not(this).prop('checked', false);  
});
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLllUAVWX-yBSl-7mXLTI92EbgfFcs7I8&libraries=places&callback=initAutocomplete"
        async defer></script>
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
