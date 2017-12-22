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
                            <i class="fa fa-book"></i>
                                {{$name->college}}
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
                                   <a href="{{url('admin/view_college_data/'.$name->id)}}">
                                    Edit College
                                  </a>
                                </li>
                                <li class="breadcrumb-item active">View College Events</li>
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
                                        <span class='pull-left'>
                                            <i class="fa fa-book"></i>   View Events
                                        </span>
                                        <span class='pull-right'>
                                          <a class="btn btn-primary" href="{{url('admin/add_events/'.$name->id)}}"> Add </a>
                                        </span>
                                         @if(Session::has('message'))
                                         <div id="successMessage" style ="color:black;text-align:center; width:70%; margin-left:240px;" class="alert alert-success"> {{Session::get('message')}}
                                          </div>
                                         @endif
                                    </div>
                                    <div class="card-block p-t-10">
                                        <div class=" m-t-25">
                                            <table class="table table-striped table-bordered table-hover " id="sample_6">
                                               <thead>
                                                   <tr>
                                                      <th>Image</th>
                                                      <th>Title</th>
                                                      <th>Description</th>
                                                      <th>Created at</th>
                                                   </tr>
                                              </thead>
                                         <tbody>
                                         
                                               @if(count($data) > 0)
                                               @foreach($data as $value)
                                     <tr>
                                         <td><img style="width:100px; height:50px;" alt="No Image Found" src="{{url('admin/img/event/'.$value->image)}}"> </td>
                                         <td>@if(!empty($value->event_title)) {{$value->event_title}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->description)) {{$value->description}} @else  N/A @endif</td>
                                         <td>@if(!empty($value->created_at))  {{$value->created_at}} @else  N/A @endif</td>
                                         <td class="action-icons text-center"><span>
                                          <a style="text-decoration:none;" href="{{ url('admin/edit_events/'.$value->id.'/'.$name->id) }}"></span><i style="color:blue;" class="fa fa-pencil-square-o fa-lg" title="Edit Detail" aria-hidden="true"></i></a> 
                                          <a onclick="return confirm('Are you sure you want to Delete this Event?')" style="text-decoration:none;" href="{{ url('admin/delete_events/'.$value->id.'/'.$name->id) }}">  </span><i style="color:red;" title="Delete" class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </a>
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
<script type="text/javascript">
      $(document).ready(function(){
        $('#cat').change(function() {
        var i =  $('#cat').val();
        $(".cat").attr("action", "{{url('admin/view_college_course/'.$name->id)}}?Category="+i) ;
        $('.cat').submit();
});
});
</script>
    <script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
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
    <script type="text/javascript" src="{{url('admin/js/pages/datatable.js')}}"></script>
</body>

</html>
