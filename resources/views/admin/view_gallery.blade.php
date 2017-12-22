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
                                   {{$data->college}}
                        </h4>
                        </div>
                         <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                         
                                   <a class="btn btn-primary added" href="{{url('admin/add_gallery/'.$data->id)}}">Add Gallery</a>
                        </h4>
                        </div>

                        </div>
                    </div>
                </header>
                
                <div class="outer">
                        @if(Session::has('message'))
                        <p id="successMessage" style ="color:black;text-align:center; width:50%; margin-left:240px;" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                    <div class="container">
                        <div class="row text-center text-lg-left">

       
                      @if(count($gallery) > 0)
                      @foreach($gallery as $key=>$value)                                
                                    <div class="col-lg-3 col-md-4 col-xs-6 delete" id="del_{{$value->id}}">
                                      <span class="close" data-loc-city="{{$value->id}}" data-loc-subject="{{$value->college_id}}">&times;</span>
                                        <img class="img-fluid img-thumbnail" src="{{url('admin/img/college_gallery/'.$value->image)}}" alt="{{url('admin/img/no-image.png')}}">
                                        <div class="caption"> 
                                       </div>
                                    </div>
                      @endforeach
                     
                                                     
                            </div>
                        </div>
                        <div> <a class="btn btn-primary back" href="{{url('admin/view_college_data/'.$gallery[0]->college_id)}}"> Back </a> </div>
                         @endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
      $('.close').click(function(){
       var college_id = $(this).data("loc-subject");
       var id = $(this).data("loc-city");
       
     
         $.ajax({    
                 url: "{{URL::to('admin/delete_gallery')}}/"+college_id+"/"+id,   
                 success : function(text)
                 {
                 if(text.status == 1){
                   jQuery('#del_'+id).hide();
                 }else{
                    alert('Not Deleted');
                 }
                 }
        });
     
        //window.location.href="{{URL::to('admin/delete_gallery')}}/"+college_id+"/"+id;
      });
    });
    </script>