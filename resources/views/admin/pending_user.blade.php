<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Tables | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="css/components.css"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
    <!--end of global styles-->
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/plugincss/responsive.dataTables.min.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!--End of page level styles-->
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
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
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
                            <i class="fa fa-user"></i>
                              Pending Users Request
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
                                    <a href="#">Users</a>
                                </li>
                                <li class="breadcrumb-item active">Pending Users Request</li>
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
                                        <i class="fa fa-user"></i> Pending Users Request Table
                                         @if(Session::has('message'))
                    <div id="successMessage" style ="color:black;text-align: center;" class="alert alert-success"> {{Session::get('message')}} </div>
            @endif
                                    </div>
                                    <div class="card-block p-t-10">
                                        <div class=" m-t-25">
                                            <table class="table table-striped table-bordered table-hover " id="sample_6">
                                                <thead>
                                                    <tr>
                                                    <th>First name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Block Status</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>
                                                


                                                <tbody>
@if(count($data) > 0)

@foreach($data as $value)
                                    <tr>
                                         <td>@if(!empty($value->first_name)) {{$value->first_name}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->email)) {{$value->email}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->contact)) {{$value->contact}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->status == 2)) {{ 'Pending' }}@elseif($value->status == 1) {{'Approved'}} @else Disapproved @endif</td>
                                          <td class="action-icons text-center"><span> 

                                            <a onclick="return confirm('Are you sure you want to Approve Request?')" style="text-decoration:none;" href="{{ url('admin/approve/'.$value->id) }}">  </span><i style="color:green;" title="Approve" class="fa fa-check fa-lg" aria-hidden="true"></i> </a>  &nbsp

                                            <a onclick="return confirm('Are you sure you want to Disapprove Request?')" style="text-decoration:none;" href="{{ url('admin/decline/'.$value->id) }}">  </span><i style="color:orange;" title="Disapprove" class="fa fa-window-close fa-lg" aria-hidden="true"></i> </a> &nbsp

                                            <a onclick="return confirm('Are you sure you want to Delete User?')" style="text-decoration:none;" href="{{ url('admin/delete_user/'.$value->id) }}">  </span><i  style="color:red;" title="Delete" class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
                                             </a>
                                            


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
