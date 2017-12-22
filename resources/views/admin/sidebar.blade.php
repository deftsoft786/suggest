 <div class="wrapper">
        <div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="{{url('admin/account_setting')}}">

 
                        <img style="width:40px;height:40px;" class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="No Image Found"
                             src="{{url('admin/img/adminer.png')}}">
            <?php
             if(!empty($session_name = Session::has('username'))){
                $username = Session::get('username');
                $name     = json_decode($username,true);
               echo "<p class='text-white user-info'>".$name[0]['username']."</p>";
               }else{ ?>
            <script> window.location.href = "{{URL::to('admin/login')}}";</script>
            <?php } ?>
       
                    </a>
   
                </div>
            </div>

   <ul id="menu" class="bg-blue dker">
                <li class="@if(Request::is('admin/dashboard')) active @endif">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;DASHBOARD</span>
                    </a>
                </li>



                 <li class="@if(Request::is('admin/total_user')|| Request::is('admin/pending_user')) active @endif">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span class="link-title">&nbsp; USERS</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('admin/total_user')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; Total Users
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/pending_user')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; Pending Request
                            </a>
                        </li>
                      
                    </ul>
                </li>
               
                <li class="@if(Request::is('admin/add_category')|| Request::is('admin/view_category')||Request::is('admin/edit_category/*')) active @endif">
                    <a href="{{url('admin/view_category')}}">
                        <i class=" fa fa-check-square"></i>
                        <span>&nbsp; COLLEGE CATEGORY</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                       
                        <li>
                            <a href="{{url('admin/view_category')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; View Category
                            </a>
                        </li>
                    
                    </ul>
                </li>



                <li class="@if(Request::is('admin/add_college')|| Request::is('admin/view_college') || Request::is('admin/select_college') || Request::is('admin/edit_college/*') || Request::is('admin/view_college_data/*') || Request::is('admin/view_college_course/*') || Request::is('admin/edit_college_contact/*') || Request::is('admin/view_course_data/*') || Request::is('admin/course_require/*') || Request::is('admin/add_gallery/*')|| Request::is('admin/view_gallery/*') || Request::is('admin/college_exam/*') || Request::is('admin/edit_course/*')) active @endif">
                    <a href="javascript:;">
                        <i class="fa fa-university"></i>
                        <span class="link-title">&nbsp; COLLEGE</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                       <li>
                            <a href="{{url('admin/view_college')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; All Colleges
                            </a>
                        </li>

                    </ul>
                </li>

                    <li class="@if(Request::is('admin/add_exam')|| Request::is('admin/view_exam')|| Request::is('admin/edit_exam/*')) active @endif">
                    <a href="javascript:void(0)">
                        <i class=" fa fa-check-square"></i>
                        <span>&nbsp; EXAM</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                       
                        <li>
                            <a href="{{url('admin/view_exam')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; View Exam
                            </a>
                        </li>
                    
                    </ul>
                </li> 

                     <li class="@if(Request::is('admin/page_setting')) active @endif">
                    <a href="javascript:;">
                        <i class="fa fa-image"></i>
                        <span class="link-title">&nbsp; WEB PAGE SETTING</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('admin/page_setting')}}">
                                <i class="fa fa-angle-right"></i> &nbsp; Page Setting
                            </a>
                        </li>
                        
                      
                    </ul>
                </li>

                <li class="@if(Request::is('admin/college_review')) active @endif">
                    <a href="{{url('admin/college_review')}}">
                        <i class="fa fa-comments"></i>
                        <span class="link-title">&nbsp;REVIEWS</span>
                    </a>
                </li>


                 <li class="@if(Request::is('admin/account_setting')|| Request::is('admin/change_password')) active @endif">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span class="link-title">&nbsp; SETTINGS</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('admin/account_setting')}}">
                                <i class="fa fa-cogs"></i> &nbsp; Setting
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{url('admin/change_password')}}">
                                <i class="fa fa-unlock"></i> &nbsp; Change Password
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="@if(Request::is('admin/logout')) active @endif">
                    <a href="{{url('admin/logout')}}">
                        <i class="fa fa-sign-out"></i>
                        <span class="link-title">&nbsp;LOGOUT</span>
                    </a>
                </li>
             
            </ul>
            <!-- /#menu -->
        </div>