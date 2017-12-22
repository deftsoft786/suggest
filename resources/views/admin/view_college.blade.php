<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Tables | Admire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('img/logo1.ico')}}"/>
    
    <style>
              #add {
                      display: inline-block;
                      padding-left: 30px;
                      float: left;
                    }
    </style>
</head>
  <body class="datatable_page">
      <div class="preloader" style=" position: fixed;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  z-index: 100000;
                  backface-visibility: hidden;
                  background: #ffffff;">
              <div class="preloader_img" style="width: 200px;
                  height: 200px;
                  position: absolute;
                  left: 48%;
                  top: 48%;
                  background-position: center;
                z-index: 999999">
                   <img src="{{url('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
              </div>
      </div>
  
@include('admin/header')
        <!-- /#top -->
        <div class="wrapper">
           @include('admin/sidebar')
            <!-- /#left -->
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-university"></i>
                             View College
                        </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Colleges</a>
                                </li>
                                <li class="breadcrumb-item active">View College</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-light lter bg-container">
                        <div class="row">
                            <div class="col-12 data_tables">
                              
                                <div class="card m-t-35">

                                    <div class="card-header bg-white">
                                        <i class="fa fa-university"></i> Colleges
                                        <a class="btn btn-primary added" href="{{url('admin/add_college')}}">Add College</a>
                                         @if(Session::has('message'))
                    <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;" class="alert alert-success" role="alert"> {{Session::get('message')}} </div>
            @endif
                 </li>
                                    </div>
                                    <div class="card-block p-t-10">
                                        <div class=" m-t-25">
                               
                                            <table class="table table-striped table-bordered table-hover " id="sample_6">

                                                <thead>
              <form action="{{url('admin/view_college')}}" method="post" class="form-horizontal cat" id="form_block_validator">
                  <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                       <select  style="float:right;" id="cat"  class="col-form-label" name="college_category">
                        <option value="all"> All </option>
                                 {{$segment1 =  app('request')->input('Category') }}
                                  @foreach($category as $values)
                            <option id ='cate' value="<?php echo $values->id; ?>" <?php if($segment1 == $values->id) { echo 'selected';} ?> > <?php echo $values->category_name;  ?> </option>            
                            @endforeach
                      </select>
         
              </form>              
                                      <tr>
                                                        <th>College Image</th>
                                                        <th>College Name</th>
                                                        <th>Established</th>
                                                        <th class="hidden-xs">Location</th>
                                                        <th>Country</th>
                                                        <th class="hidden-xs">Action</th>
                                                    </tr>
                                                </thead>
                                       


                                                <tbody>
                                                    @if($data == '')
                                                   <td colspan="4" style="text-align:center;"> No College Found    </td> 
                                                  @else
                                                    @foreach($data as $value)
                             
                                    <tr>
                                                <?php $id = explode(',',$value->image);
                                                     $img  = $id[0];
                                                 ?>
                                         <td><img width="100px" height="50px" src="{{url('admin/img/college/'.$img)}}" alt="No Image Found"</td>
                                         <td>@if(!empty($value->college)) {{$value->college}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->establishment)) {{$value->establishment}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->location)) {{$value->location}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->country)) {{$value->country}} @else  N/A @endif</td>
                                          <td class="action-icons text-center"><span> 
                                            <a style="text-decoration:none;" href="{{url('admin/view_college_data/'.$value->id)}}">  </span> <i style="color:blue;"class="fa fa-pencil-square-o fa-lg" title="View Detail" aria-hidden="true"></i> 
                                            </a>&nbsp
                                             
                                            <a onclick="return confirm('Are you sure you want to delete this College?');" style="text-decoration:none;" href="{{url('admin/delete_college/'.$value->id)}}">  </span> <i  style="color:red;" title="Delete" class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </a>

                                        </td>

                                        </td>
                                    </tr>
                                                    
@endforeach

@endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE4 TABLE PORTLET-->
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        <!--wrapper-->
      
        <!-- # right side -->
    
    <!-- /#wrap -->
    <!-- global scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function(){
        $('#cat').change(function() {
         var i =  $('#cat').val();
        $(".cat").attr("action", "{{url('admin/view_college')}}?Category="+i) ;
        $('.cat').submit();
    
});
});

</script>
    <script>
    var table = $('#sample_6').DataTable({
   dom : 'l<"#add">frtip'
   })  


$('<label/>').text('my dropdown').appendTo('#add')
$select = $('<select/>').appendTo('#add')
$('<option/>').val('1').text('option #1').appendTo($select);
$('<option/>').val('2').text('option #2').appendTo($select);
$('<option/>').val('3').text('option #3').appendTo($select);

$('<input/>')
  .css('margin-left', '10px')
  .attr('id', 'myEdit')
  .attr('value', 'sample text')
  .appendTo('#add')

    </script>
   <script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
    <!--end of global scripts-->
    <!--plugin scripts-->
    <script type="text/javascript" src="{{url('admin/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/pluginjs/dataTables.tableTools.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/pluginjs/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.rowReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/vendors/datatables/js/dataTables.scroller.min.js')}}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{url('admin/js/pages/datatable.js')}}"></script>
    <!-- end of global scripts-->
</body>

</html>
