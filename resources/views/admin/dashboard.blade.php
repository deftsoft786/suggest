<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Tables | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=""/>

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
        <img src="{{url('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
@include('admin/header')
@include('admin/sidebar')        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-12">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="bg-primary top_cards">
                                       <a href="{{url('admin/total_user')}}"> <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-user fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_right">
                                               <div class="float-right cards_content">
                                                    <span class="number_val" id="sales_count">{{$data['total_users']}}</span>
                                                    <br/>
                                                    <span class="card_description">Total Users</span>
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-success top_cards">
                                       

                                  <a href="{{url('admin/pending_user')}}">    <div class="row icon_margin_left">
                                            <div class="col-lg-5  col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-user fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_right">
                                                <div class="float-right cards_content">
                                                    <span class="number_val" id="visitors_count">{{$data['pending_users']}}</span>
                                                    <br/>
                                                    <span class="card_description">Pending Users </span>
                                                </div>
                                            </div>
                                        </div> </a>



                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-warning top_cards">
                                       

                                     <a href="{{url('admin/view_college')}}">   <div class="row icon_margin_left">
                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-building fa-stack-1x fa-inverse text-warning revenue_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_right">
                                                <div class="float-right cards_content">
                                                    <span class="number_val" id="revenue_count">{{$data['total_college']}}</span>
                                                    <br/>
                                                    <span class="card_description">Total Colleges</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="bg-mint top_cards">

                                     <a href="{{url('admin/college_review')}}">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 col-5 icon_padd_left">
                                                <div class="float-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-copy  fa-stack-1x fa-inverse text-mint sub"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7 icon_padd_right">
                                                <div class="float-right cards_content">
                                                    <span class="number_val" id="subscribers_count">{{$data['total_review']}}</span>
                                                    <br/>
                                                    <span class="card_description">Total Review</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
   <div class="col-xl-6 col-lg-5 col-12 stat_align">
        <div style="padding-top:50px;" class="card weather_section md_align_section">
          <!-- weather widget start --><div id="m-booked-weather-bl250-78284"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:430px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-01"> <a target="_blank" href="http://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="Booked net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>10</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>20&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>8&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city smolest">Chandigarh </div> <div class="booked-wzs-250-175-date">Friday, 22 December</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="http://www.booked.net/weather/chandigarh-15006"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Thu</td> <td>Sat</td> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-06"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>1&deg;</td> <td class="week-day-val"><span class="plus">+</span>2&deg;</td> <td class="week-day-val"><span class="plus">+</span>1&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-78284'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=15006&type=3&scode=124&ltid=3457&domid=w209&anc_id=71315&cmetric=1&wlangID=1&color=137AE9&wwidth=430&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                            </div>
                        </div>
                    </div>

    </div>
    <!-- # right side -->
</div>

<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="{{url('admin/js/components.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/custom.js')}}"></script>
<!-- global scripts end-->

<script type="text/javascript" src="{{url('admin/vendors/raphael/js/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/d3/js/d3.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/c3/js/c3.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/toastr/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/switchery/js/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.js')}}" ></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.time.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/jquery_newsTicker/js/newsTicker.js')}}"></script>
<script type="text/javascript" src="{{url('admin/vendors/countUp.js/js/countUp.min.js')}}"></script>

<!--end of plugin scripts-->
<script type="text/javascript" src="{{url('admin/js/pages/new_dashboard.js')}}"></script>

</body>
</html>
