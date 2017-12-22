<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | Admire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=""/>

    <!--global styles-->

    <link type="text/css" rel="stylesheet" href="{{url('admin/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('admin/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/jquery-validation-engine/css/validationEngine.jquery.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/datepicker/css/bootstrap-datepicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/datetimepicker/css/DateTimePicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <!--End of plugin styles-->
    <!--Page level styles-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/checkbox_css/css/checkbox.min.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{url('admin/css/pages/form_validations.css')}}" />
    <!-- end of global styles-->
     <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/select2/css/select2.min.css')}}" />
     <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/datatables/css/scroller.bootstrap.min.css')}}" />
     <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
     <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/datatables/css/dataTables.bootstrap.min.css')}}" />
     <link type="text/css" rel="stylesheet" href="{{url('admin/css/pages/dataTables.bootstrap.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{url('admin/css/plugincss/responsive.dataTables.min.css')}}" />
    <link type="text/css" rel="stylesheet"  href="{{url('admin/vendors/c3/css/c3.min.css')}}"/>
    <!--<link type="text/css" rel="stylesheet"  href="{{url('admin/vendors/toastr/css/toastr.min.css')}}"/>-->
     <link type="text/css" rel="stylesheet" href="{{url('admin/vendors/switchery/css/switchery.min.css')}}" />
    <link type="text/css" rel="stylesheet"  href="{{url('admin/css/pages/new_dashboard.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{url('admin/css/pages/tables.css')}}" />
    <link type="text/css" rel="stylesheet"  href="#" id="skin_change"/>
   
 
 <style>
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px white inset !important;
}
</style>
</head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
 setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            }, 4000); 
</script>

<body class="body">
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
<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                    
                
                 <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">
                   
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
  
 
                       <img src="{{url('admin/img/adminer.png')}}" class="admin_img2 rounded-circle avatar-img" alt="No Image Found">

                        <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
     <?php
             if(!empty($session_name = Session::has('username'))){
                $username = Session::get('username');
                
                   $name = json_decode($username,true);
                   
                   echo "<strong>".$name[0]['username']."</strong>";
                 
            }else{ ?>
        <script> window.location.href = "{{URL::to('admin/login')}}";</script>
        <?php }
    ?>
            <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                               
                                <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-right  top_menu" id="nav-content">
                  
                </div>
            </div>

            <!-- /.container-fluid --> </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
   