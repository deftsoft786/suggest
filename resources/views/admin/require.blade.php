
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
                                     <a href="{{url('admin/view_college')}}">View College</a>
                                </li>
                                <li class="active breadcrumb-item"><a href="{{url('admin/view_college_course/'.$name->id)}}">View Course</a> </li>

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
                                    {{$course->course_name}}
                            @if(Session::has('message'))
                                    <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;" class="alert alert-success" role="alert"> {{Session::get('message')}} </div>
                            @endif

                                       </li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form  class = 'dropzone' id = 'image-upload' action="{{url('admin/course_require/'.$course->id.'/'.$name->id)}}" method="post" enctype="multipart/form-data" >
                                          {{ csrf_field() }}
                                           <div style="margin-left:435px;"> Please tick below the available facility with this fees amount. </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="required2" class="col-form-label">Fees *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="fees" value="@if(!empty($require->fees)){{$require->fees}}@else  @endif" class="form-control">
                                                </div>INR( Lakhs )
                                                @if ($errors->has('fees'))
                                                    <div style="color:red;">{{ $errors->first('fees') }}</div>
                                                @endif
                                            </div>
                 <div class="form-group row">
                      <div class="col-lg-4 text-lg-right">
                         <label for="required2" class="col-form-label"></label>
                      </div>
                    <div class="col-lg-4">
                           @if(!empty($require))
                           @php($face = explode(',',$require->facility))
                                                                         
                <input class="form-group" type="checkbox" name="facility[]" value="Library" @if(in_array('Library',$face,true)){{'checked'}}@else   @endif  /> Library <br>
                <input type="checkbox" name="facility[]" value="Hostel" @if(in_array('Hostel',$face,true)){{'checked'}}@else   @endif />  Hostel <br>
                <input type="checkbox" name="facility[]" value="Tuition" @if(in_array('Tuition',$face,true)){{'checked'}}@else  @endif/> Tuition <br>
                <input type="checkbox" name="facility[]" value="Admission" @if(in_array('Admission',$face,true)){{'checked'}}@else  @endif/> Admission <br>
                <input type="checkbox" name="facility[]" value="Cafetaria" @if(in_array('Cafetaria',$face,true)){{'checked'}}@else  @endif/> Cafetaria <br>
                <input type="checkbox" name="facility[]" value="Exam Fee" @if(in_array('Exam Fee',$face,true)){{'checked'}}@else  @endif /> Exam Fee <br>
                <input type="checkbox" name="facility[]" value="Refundable Deposit" @if(in_array('Refundable Deposit',$face,true)){{'checked'}}@else  @endif /> Refundable Deposit <br>
                <input type="checkbox" name="facility[]" value="Sport" @if(in_array('Sport',$face,true)){{'checked'}}@else  @endif /> Sport <br>
                <input type="checkbox" name="facility[]" value="Gym" @if(in_array('Gym',$face,true)){{'checked'}}@else  @endif /> Gym <br>
                <input type="checkbox" name="facility[]" value="Insurance" @if(in_array('Insurance',$face,true)){{'checked'}}@else  @endif />  Insurance <br>
                <input type="checkbox" name="facility[]" value="Student Activity Fund" @if(in_array('Student Activity Fund',$face,true)){{'checked'}}@else  @endif /> Student Activity Fund <br>
                 <input type="checkbox" name="facility[]" value="Film Club" @if(in_array('Film Club',$face,true)){{'checked'}}@else  @endif /> Film Club<br>
                                   
                       @else
                <input class="form-group" type="checkbox" name="facility[]" value="Library" /> Library <br>
                <input type="checkbox" name="facility[]" value="Hostel" />  Hostel <br>
                <input type="checkbox" name="facility[]" value="Tuition" /> Tuition <br>
                <input type="checkbox" name="facility[]" value="Admission" /> Admission <br>
                <input type="checkbox" name="facility[]" value="Cafetaria" /> Cafetaria <br>
                <input type="checkbox" name="facility[]" value="Exam Fee" /> Exam Fee <br>
                <input type="checkbox" name="facility[]" value="Refundable Deposit" /> Refundable Deposit <br>
                <input type="checkbox" name="facility[]" value="Sport" /> Sport <br>
                <input type="checkbox" name="facility[]" value="Gym" /> Gym <br>
                <input type="checkbox" name="facility[]" value="Insurance"/>  Insurance <br>
                <input type="checkbox" name="facility[]" value="Student Activity Fund"/> Student Activity Fund <br>
                 <input type="checkbox" name="facility[]" value="Film Club"/> Film Club<br>
                       @endif
                   </div>
                       </div>
           
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="time" class="col-form-label">Exam Required *</label>
                                                </div>
                                                <div class="col-lg-4">
                                               <select class="form-control" name="exam[]" multiple>
                                                    <option value="">Select Exams</option>
                                                  @if(count($require) > 0)
                                                  @if(count($exam) > 0)
                                                  @php($arr = explode(',',$require->exam))
                                                  @foreach($exam as $value)  
                                                    <option value="{{$value->id}}" @if(in_array($value->id,$arr)){{'selected'}} @else @endif>{{$value->exam}}</option>
                                                  @endforeach
                                                  @endif 
                                                  @else
                                                  @if(count($exam) > 0)
                                                  @foreach($exam as $value)  
                                                    <option value="{{$value->id}}" >{{$value->exam}}</option>
                                                  @endforeach
                                                  @endif 
                                                  @endif
                                                </select>
                                                </div>
                                                 @if($errors->has('exam'))
                                                         <div style="color:red;">{{ $errors->first('exam') }}</div>
                                                 @endif
                                            </div>

                                            <div class="form-group row">
                                                <div  class="col-lg-4 text-lg-right">
                                                    <label for="establish" class="col-form-label">Total Seats *</label>
                                                </div>
                                                <div id="yearField" class="col-lg-4">
                                                    
                                                    <input  type="text" id="establish" name="total_seat" value="@if(!empty($require->total_seat)){{$require->total_seat}}@else @endif" class="form-control">
                                                </div>
                                                  @if ($errors->has('total_seat'))
                                                         <div style="color:red;">{{ $errors->first('total_seat') }}</div>
                                                    @endif
                                            </div>
                              
                     
                                            <div class="form-actions form-group row">

                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_course_data/'.$course->id.'/'.$name->id)}}">  </span>  CANCEL   </a>
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
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLllUAVWX-yBSl-7mXLTI92EbgfFcs7I8&libraries=places&callback=initAutocomplete"
        async defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>




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
