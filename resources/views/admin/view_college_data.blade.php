 
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
                                   <?php echo $name->college; ?>
                        </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                
                                <li class="breadcrumb-item active">College Details</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="container">
                        <div class="row text-center text-lg-left">

                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/edit_college/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/college.png')}}" alt="No Image Found" >
                                        <div class="caption">
                                          <p>Edit College Details</p>
                                        </div>
                                      </a>
                                    </div>
                            
                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/edit_college_contact/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/contact.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>Contact Details</p>
                                        </div>
                                      </a>
                                    </div>

                                     <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/edit_college_facilities/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/facilities.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>facilities</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/view_gallery/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/gallery.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>Gallery</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/view_college_course/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/courses.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>Courses & Exam</p>
                                        </div>
                                      </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/college_exam/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/exam.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>College Exam</p>
                                        </div>
                                      </a>
                                    </div>
                                  
                                     <div class="col-lg-3 col-md-4 col-xs-6">
                                      <a href="{{url('admin/view_events/'.$id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_details/event.png')}}" alt="No Image Found">
                                        <div class="caption">
                                          <p>Events</p>
                                        </div>
                                      </a>
                                    </div>
                                    
                                 
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
