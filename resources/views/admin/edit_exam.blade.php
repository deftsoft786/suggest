
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
                                <i class="fa fa-copy"></i>
                         Edit Exam
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
                                   <a href="{{url('admin/view_exam')}}"> Exam </a>
                                </li>
                                <li class="active breadcrumb-item">Edit Exam

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
                                        <i class="fa fa-copy "></i>
                                      {{$data->exam}}
                                 @if(Session::has('message'))
                                    <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;" class="alert alert-success"> {{Session::get('message')}} </div>
                                 @endif</li>
                                    </div>
                                    <div class="card-block m-t-35">
                                        <form action="{{url('admin/edit_exam/'.$data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal  login_validator" id="form_block_validator">
                                          {{ csrf_field() }}
                                            
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Exam Name *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" id="password2" name="exam_name" value="@if(!empty($data->exam)){{$data->exam}}@else @endif" class="form-control">
                                                </div>
                                                    @if($errors->has('exam_name'))
                                                         <div style="color:red;">{{ $errors->first('exam_name') }}</div>
                                                    @endif    
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Description *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <textarea class="form-control" name="description" >@if(!empty($data->description)){{$data->description}}@else @endif </textarea>
                                                </div>
                                                 @if($errors->has('description'))
                                                         <div style="color:red;">{{ $errors->first('description') }}</div>
                                                    @endif
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Registration Start Date *</label>
                                                </div>
                                                <div class="col-lg-4 input_wrap">
                                                    <input type="text" id="datepicker" name="reg_start_date" value="@if(!empty($data->reg_start_date)){{$data->reg_start_date}}@else @endif"  class="form-control">
                                                </div>
                                                    @if($errors->has('reg_start_date'))
                                                         <div style="color:red;">{{ $errors->first('reg_start_date') }}</div>
                                                    @endif
                                            </div>
                                         <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Registration End Date *</label>
                                                </div>
                                                <div class="col-lg-4 input_wrap">
                                                    <input type="text" id="datepicker1" name="reg_end_date" value="@if(!empty($data->reg_end_date)){{$data->reg_end_date}}@else @endif"  class="form-control">
                                                </div>
                                                    @if($errors->has('reg_end_date'))
                                                         <div style="color:red;">{{ $errors->first('reg_end_date') }}</div>
                                                    @endif
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Exams Date *</label>
                                                </div>
                                                <div class="col-lg-4 input_wrap">
                                                    <input type="text" id="datepicker2" name="exam_date" value="@if(!empty($data->exam_date)){{$data->exam_date}}@else @endif"  class="form-control">
                                                </div>
                                                    @if($errors->has('exam_date'))
                                                         <div style="color:red;">{{ $errors->first('exam_date') }}</div>
                                                    @endif
                                            </div>
                                             <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Register Form Available On *</label>
                                                </div>
                                                <div class="col-lg-4 input_wrap">
                                                    <input type="text" id="datepicker3" name="reg_form_available" value="@if(!empty($data->reg_available_from)){{$data->reg_available_from}}@else @endif"  class="form-control">
                                                </div>
                                                    @if($errors->has('reg_form_available'))
                                                         <div style="color:red;">{{ $errors->first('reg_form_available') }}</div>
                                                    @endif
                                            </div>
                                           
                                             <div class="form-group row">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="password2" class="col-form-label">Result Date *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="result_date" id="datepicker4" value="@if(!empty($data->result_date)){{$data->result_date}}@else @endif" class="form-control">
                                                </div>
                                                    @if($errors->has('result_date'))
                                                         <div style="color:red;">{{ $errors->first('result_date') }}</div>
                                                    @endif
                                            </div>
                                             
                                                   <div class="form-group row ">
                                                <div class="col-lg-4 text-lg-right">
                                                    <label for="url2" class="col-form-label">Type of Exam *</label>
                                                </div>
                                                <div class="col-lg-4">
                                                     <select  class="col-form-label form-control" name="exam_type">
                                                    <option  value=""> Select Type of Exam  </option>
                                                    @if(count($category) > 0 )
                                                    @foreach($category as $value)
                                                       <option  value="{{$value->id}}"@if($data->category_id == $value->id){{'selected'}}@endif> {{$value->category_name}}  </option>
                                                    @endforeach
                                                    @endif   
                                                    </select>
                                                </div>
                                                   @if($errors->has('exam_type'))
                                                         <div style="color:red;">{{ $errors->first('exam_type') }}</div>
                                                    @endif
                                            </div>   


                                             <div class="form-actions form-group row">
                                                <div class="col-lg-4 push-lg-4">
                                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                                    <a class='btn btn-danger' href="{{url('admin/view_exam')}}">  </span>  CANCEL   </a>
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
  var wrapper         = $(".input_wrap"); 
  var add_button      = $(".add_field_button"); 

$('body').on('focus',"#datepicker2", function(){
    $(this).datepicker();
});

</script>
 <script>
  $(document).ready(function(){
  $( function() {
    $("#datepicker").datepicker();
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
    $("#datepicker4").datepicker();

    
  });
  });
  </script>
<!-- /#wrap -->
<!-- global scripts-->
    <script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
    <!--End of Global scripts-->
    <!--Plugin scripts-->
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
