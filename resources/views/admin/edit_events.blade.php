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
                                <i class="fa fa-university"></i>
                               {{$name->college}}
                              

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
                                     <a href="{{url('admin/view_college_data/'.$name->id)}}">Edit College</a>
                                </li>
                                <li class="active breadcrumb-item">Edit Event

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
                                         Edit Event 
                              
                                       </li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form  class ='dropzone' id ='image-upload' action="{{url('admin/edit_events/'.$data->id.'/'.$name->id)}}" method="post" enctype="multipart/form-data" >
                                          {{ csrf_field() }}
 
                               <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                         <label for="email2" class="col-form-label">Image *</label>
                                    </div>
                                    <div class="col-lg-4">
                                         <input type="file" id="fileupload" name="image" value ="" class="form-control">
                                          <?php  
                                                         $images_csv =  $data->image;                                          
                                                      echo '<div id="dvPreview"><img height="100px" width="100px" alt="Image Preview " src="'.url('admin/img/event/'.$images_csv).'"/></div>';
                                                    ?>
                                                    <div style="margin-right:385px;display:inline; width:40%;" class="form-group row"></div>
                                    </div>
                                         @if ($errors->has('image'))
                                           <div style="color:red;">{{ $errors->first('image') }}</div>
                                         @endif                                                           
                              </div>
                                    
                                         
                              <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Title *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="event_title" value="@if(!empty($data->event_title)) {{$data->event_title}} @else @endif" class="form-control">
                                    </div>
                                         @if ($errors->has('event_title'))
                                         <div style="color:red;">{{ $errors->first('event_title') }}</div>
                                         @endif
                              </div>
                                         
                              <div class="form-group row">
                                   <div  class="col-lg-4 text-lg-right">
                                         <label for="password2" class="col-form-label">Description *</label>
                                   </div>
                                   <div id="locationField" class="col-lg-4">
                                         <textarea  class="form-control"  name="description">@if(!empty($data->description)) {{$data->description}} @else  @endif</textarea>
                                   </div>
                                         @if ($errors->has('description'))
                                         <div style="color:red;">{{ $errors->first('description') }}</div>
                                         @endif
                              </div>
                               
                                               <div class="form-actions form-group row">

                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_events/'.$name->id)}}">  </span>  CANCEL   </a>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLllUAVWX-yBSl-7mXLTI92EbgfFcs7I8&libraries=places&callback=initAutocomplete"
        async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
<script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/jquery-validation/js/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/form.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/pages/form_validation.js')}}"></script>
</body>
</html>
