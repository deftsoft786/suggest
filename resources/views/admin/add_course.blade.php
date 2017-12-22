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
                                <i class="fa fa-book"></i>
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
                                <li class="active breadcrumb-item">Add Course

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
                                        <i class="fa fa-book"></i>
                                      Add Course
                                       
                        @if(Session::has('message'))
                       <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;" class="alert alert-success"> {{Session::get('message')}} </div>
                         @endif
                                     </li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form action="{{url('admin/add_course/'.$name->id)}}" method="post" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                          
                                           <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Course Name *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" id="password2" name="course_name" value="{{old('course_name')}}" class="form-control">
                                                </div>
                                                  @if($errors->has('course_name'))
                                                         <div style="color:red;">{{ $errors->first('course_name') }}</div>
                                                    @endif           
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-lg-4  text-lg-right">
                                                    <label for="required2" class="col-form-label">Select Course Type *</label>
                                                </div>
                                                <div class="col-lg-4">

                                                   <select  class="col-form-label form-control" name="course_type">
                                                    <option  value=""> Select Course Type  </option>
                                                       @if(count($category) > 0)
                                                       @foreach($category as $value)
                                                       <option  value="{{$value->id}}"> {{$value->category_name}} </option>
                                                       @endforeach
                                                       @endif   
                                                    </select>
                                                </div>
                                                  @if($errors->has('course_type'))
                                                         <div style="color:red;">{{ $errors->first('course_type') }}</div>
                                                  @endif
                                            </div>
                                             <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="time" class="col-form-label">Time  *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                <select  class="col-form-label form-control" name="time" id='time'>
                                                        <option  value=""> Select Time       </option>
                                                        <option  value="1"> Full Time        </option>
                                                        <option  value="2"> Part Time        </option>
                                                        <option  value="3"> Virtual Classes  </option>
                                                </select>
                                                </div>
                                                 @if($errors->has('time'))
                                                         <div style="color:red;">{{ $errors->first('time') }}</div>
                                                 @endif
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="duration" class="col-form-label">Duration  *</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" id="duration" name="duration" value="{{old('duration')}}" class="form-control">
                                                </div>
                                                <div class="col-lg-2">
                                                    <select  class="col-form-label form-control" name="duration_type">
                                                        <option  value="year" selected> Year(s)  </option>
                                                        <option  value="month"> Month(s)  </option>              
                                               </select>
                                                </div>
                                                @if($errors->has('duration'))
                                                         <div style="color:red;">{{ $errors->first('duration') }}</div>
                                                 @endif
                                            </div>
                                     
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Course Highlight *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                   <textarea name="highlight" class="form-control"></textarea>
                                                </div>
                                                    @if($errors->has('highlight'))
                                                         <div style="color:red;">{{ $errors->first('highlight') }}</div>
                                                    @endif           
                                            </div>



                             
                                            <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="Add" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_college_course/'.$name->id)}}">  </span>  CANCEL   </a>
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
