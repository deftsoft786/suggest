@include('shiksha/include/header')
<?php
  $college_name = $data->college;
  $college_type = $data->type;
  $established  = $data->establishment;
  $image = explode(',', $data->image);

?>
<section>

  <div class="container">
    <div class="row exam" style="background:#fff; margin-top:98px">
            <h2 style="padding-left:20px; color:#004080; text-align:center"><?php echo $college_name; ?></h2>
      <div class="col-md-12">

          <center><img src="{{url('admin/img/college/'.$image[0])}}" style="height:400px"></center>
          
          
              <h5 style="color:#004080; font-weight:bold; text-align:center"><?php echo $college_name; ?></h5>
              <p style="color:#004080; text-align:center; font-weight:bold; padding-left:30px"><?php echo $college_type == '1'?'Private':'Public/Government'; ?> | Established <?php echo $established; ?> </p>
              <div class="col-md-12 auto-col">
              <p class="auto">Autonomous Institute
              <span> <i class="glyphicon glyphicon-info-sign"></i></span></p><br>
              
           <p class="text-right" style="color:#004080; font-weight:bold">Institute of National Importance
          <span> <i class="glyphicon glyphicon-info-sign"></i></span><br><span style="padding-right:80px"><i class="fa fa-star"></i>Shortlist</span></p>
              
         <p style="color:#004080; font-weight:bold">Ranked 1 for <a href="" style="color:#004080">MBA </a>by Business Today 2016 <span class="more-link-div"><a href="" style="color:#004080">+4 more</a></span></p>
              
              
              <div class="btns-col" id="CTASection">
                <a class="btn-secondary btn-medium cmp-btn compare-site-tour" ga-attr="COMPARE" onclick="showCourseLayer('compare', {'instId':307}, 'Select a course to compare','930');" style="background-color:#004080; color:#fff; font-size:18px;margin:20px;border:1px solid #004080">Add to Compare
                   <span style="display: none;" class="srpHoverCntnt"><p>Compare colleges on ranking, placements, reviews, fees etc.</p></span>
                  </a>
                <a class="btn-primary btn-pm deb-site-tour" ga-attr="DBROCHURE" cta-type="download_brochure" onclick="ajaxDownloadEBrochure(this,307,'institute','Indian Institute of Management,                         Ahmedabad','instituteDetailPage','929','995','996','998','997')" style="background-color:#004080; color:#fff; font-size:18px; margin:20px; border:1px solid #004080">Download Brochure
               <span style="display: none;" class="srpHoverCntnt"><p>Download details of eligibility, admissions, fees, infra etc.</p></span>
                       </a>
               </div>
  
           </div>
        </div>
        
        
    </div>
    
    </div>
    <div class="container">
        <div class="col-md-12" style="margin-top:40px; background-color:#fff">
        
  <ul class="nav nav-tabs" style="margin-top:30px">
    <li class="active"><a data-toggle="tab" href="#home">Course<sub class="sub-cl">5</sub></a></li>
    <li><a data-toggle="tab" href="#menu1">Highlights</a></li>
    <li><a data-toggle="tab" href="#menu2">Facilities</a></li>
    <li><a data-toggle="tab" href="#menu3">Reviews</a></li>
    <li><a data-toggle="tab" href="#menu4">Q&A </a></li>
    <li><a data-toggle="tab" href="#menu5">Gallery</a></li>
    <li><a data-toggle="tab" href="#menu6">Events</a></li>
    <li><a data-toggle="tab" href="#menu7">Articles</a></li>
    <li><a data-toggle="tab" href="#menu8">Contact</a></li>
  </ul>
  
 


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
       
<div class="new-row" style="margin-top:40px">
<div class="courses-offered listingTuple" id="course-offer">
<div class="group-card gap pad">
<div class="pad-lt">
<div class="">
<h2 class="head-1" style="color:#004080; font-weight:bold">Courses Offered  <span class="para-6">(Showing 5 of 5 Courses)</span></h2>
</div>
</div>
<div class="cmn-cl">
<div class="col-md-4">
<a href="https://www.shiksha.com/mba/course/post-graduate-program-in-management-indian-institute-of-management-ahmedabad-vastrapur-1653" target="_blank" ga-attr="POPULAR_COURSE">
<div class="college-block lt-col">
<div class="offered-name">
<p class="para-1" title="Post Graduate Program in Management">Post Graduate Program in Management</p>
</div>
<div class="extra_info n-b">
<p class="para-4 st">Full Time<i></i>Duration - 2 years</p>
</div>
</div>
</a>
</div>
<div class="col-md-4">
<a href="https://www.shiksha.com/business-management-studies/course/post-graduate-program-for-executives-indian-institute-of-management-ahmedabad-vastrapur-1662" target="_blank" ga-attr="POPULAR_COURSE">
<div class="college-block lt-col">
<div class="offered-name">
<p class="para-1" title="Post Graduate Program for Executives">Post Graduate Program for Executives</p>
</div>
<div class="extra_info n-b">
<p class="para-4 st">Full Time<i></i>Duration - 1 year</p>
</div>
</div>
</a>
</div>
<div class="col-md-4">
<a href="https://www.shiksha.com/mba/course/post-graduate-program-in-food-and-agribusiness-management-indian-institute-of-management-ahmedabad-vastrapur-1645" target="_blank" ga-attr="POPULAR_COURSE">
<div class="college-block lt-col">
<div class="offered-name">
<p class="para-1" title="Post Graduate Program in Food and Agribusiness Management">Post Graduate Program in Food and Agribusiness Management</p>
</div>
<div class="extra_info n-b">
<p class="para-4 st">Full Time<i></i>Duration - 2 years</p>
</div>
</div>
</a>
</div>
<div class="col-md-4">
<a href="https://www.shiksha.com/business-management-studies/course/fellow-programe-in-management-indian-institute-of-management-ahmedabad-vastrapur-1666" target="_blank" ga-attr="POPULAR_COURSE">
<div class="college-block lt-col">
<div class="offered-name">
<p class="para-1" title="Fellow Programe in Management">Fellow Programe in Management</p>
</div>
<div class="extra_info n-b">
<p class="para-4 st">Full Time<i></i>Duration - 54 months</p>
</div>
</div>
</a>
</div>
<div class="col-md-4">
<a href="https://www.shiksha.com/business-management-studies/course/faculty-development-programme-fdp-indian-institute-of-management-ahmedabad-vastrapur-1656" target="_blank" ga-attr="POPULAR_COURSE">
<div class="college-block lt-col">
<div class="offered-name">
<p class="para-1" title="Faculty Development Programme (FDP)">Faculty Development Programme (FDP)</p>
</div>
<div class="extra_info n-b">
<p class="para-4 st">Full Time<i></i>Duration - 4 months</p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
     
     
    </div>
    
    
    
   <div id="menu1" class="tab-pane fade">
     
    <div class="new-row" style="margin-top:50px; padding-left:30px">
<div class="group-card gap listingTuple" id="highlights">
<h2 class="head-1 gap" style="color:#004080;font-weight:bold">Highlights</h2>
<div class="new-row events highlights">
<ul class="flex-ul">
<li class="">
<p class="para-2"><strong style="font-weight:bold; font-size:30px">.</strong>   Ranked 2nd among 'Top 50 Management Institutes for Research and Teaching' in India by National Institutional Ranking Framework (MHRD) in 2016</p>
</li>
<li class="">
<p class="para-2"><strong style="font-weight:bold; font-size:30px">.</strong>   Partnership with over 60 institutions in 26 countries for student exchange programs</p>
</li>
<li class="">
<p class="para-2"><strong style="font-weight:bold; font-size:30px">.</strong>   First business school in the country to be awarded European Quality Improvement System (EQUIS) accreditation</p>
</li>
</ul>
</div>
</div>
</div>
     
     
    </div>
    
    
    
    <div id="menu2" class="tab-pane fade">
      <div class="new-row"  style="margin-top:50px; padding-left:50px">
        <div class="group-card gap listingTuple" id="amenities">
                   <h2 class="head-1 gap" style="color:#004080;font-weight:bold">Infrastructure / Facilities</h2>
                      <div class="gap">
                       <ul class="infra flex-ul">
                     <li class="" style="font-size:20px; margin:20px;">
                    <i class="fa fa-book fa-6" aria-hidden="true" style="font-size:14px"></i>
                     <a class="lib">Library
                       </a> </ </li>
                         
                   <li class="" style="font-size:20px; color:#004080; margin:30px;">
                   <i class="fa fa-wifi fa-6 " aria-hidden="true" style="font-size:14px"></i>
                     <a class="wifi"> Cafeteria</a>
                      </li>
                      
                  <li class="" style="font-size:20px; color:#004080; margin:30px;">
                  <i class="fa fa-bed fa-6 " aria-hidden="true" style="font-size:14px"></i>
                   <a class="room">Hostel</a>
                   </li>
                   
                <li class=""  style="font-size:20px; color:#004080; margin:30px;">
                 <i class="fa fa-hospital-o  fa-6" aria-hidden="true"></i>
                 <a class="play">Hospital</a></li>
                 
                <li class="" style="font-size:20px; color:#004080; margin:30px;">
                <i class="fa fa-music  fa-6" aria-hidden="true"></i>
                <a class="gym">Music </a></li>
                
            <li class="" style="font-size:20px; color:#004080; margin:30px">
            <i class="fa fa-flask  fa-6" aria-hidden="true"></i>
            <a class="lab">Labs</a></li>
            
            </ul>
      </div>
        <p class="head-s-12 other-f">Other facilities : <span class="para-2">Seminar Rooms | Conference Rooms | Amphitheater</span></p>
       </div>
     </div>
       
      
    </div>
    
    
    <div id="menu3" class="tab-pane fade">
   <div class="new-row"  style="margin-top:50px; padding-left:50px">
        <div class="group-card gap listingTuple" id="amenities">
             <h2 class="head-1 gap" style="color:#004080;font-weight:bold">Student & Alumni Reviews <span><small style="color:#004080;;font-weight:bold">(Showing 2 of 12 reviews)</small></span></h2>
                <div class="col-md-6">
                      <div class="btch-dtl" style="border: 1px solid #999">
                                    <table class="table table-bordered table-condensed table-striped col-md-12">
                                           <tr>
                                          <th style="text-align:center;color:#004080;background-color:#FFF">Debesh |  Batch of 2017 | Rating 5.0/5  | Recommends this course</th>
                                            </tr>
                                     </table>
                                    <p style="color:#004080;font-weight:bold; padding-left:20px">IIM Ahmedabad - a short description.</p>
                                    <p style="padding-left:20px"> <strong style="color:#004080">Placements :</strong> The placements of IIMA have been spectacular in the recent years, which is considered to be the best in the country. The institute leads in both national and international  placements. In the two years that I have spent here (even ... <a href="" style="color:#004080; font-weight:bold">view more </a></p>
 
                        </div>
                    </div>
                     <div class="col-md-6">
                             <div class="btch-dtl" style="border: 1px solid #999">
                                         <table class="table table-bordered table-condensed table-striped col-md-12">
                                           <tr>
                                          <th style="text-align:center;color:#004080; background-color:#FFF">Harshika  |   Batch of 2016   |   Rating 4.6/5  |   Recommends this course</th>
                                           </tr>
                                          </table>
                                         <p style="padding-left:20px;"> One of the colleges that gives you uncountable number of opportunities to prove and develop your  skills. Very professional and abided by the rules. The classrooms are just perfect with AC's, Mic, projector, board, podium and speakers. The college provides                                                    facility(even ...<a href="" style="color:#004080; font-weight:bolder">view more </a></p>
                                </div>
                      </div>
                      
               </div>
        </div>
    </div>
        
       <div id="menu4" class="tab-pane fade">
           <div class="new-row" style="margin-top:50px; padding-left:30px">
               <div class="group-card gap listingTuple" id="Ask & Answer (Showing 2 of 828 questions)">
                <h2 class="head-1 gap" style="color:#004080;font-weight:bold">Ask & Answer <span><small style="color:#004080;;font-weight:bold">(Showing 2 of 828 questions)</small></span></h2>
                    <hr align="center">
                     
                    <p style="font-weight:bold; font-size:16px;color:#004080">  Which is the best institute to pursue MBA among IIM-A, B or C and SRM University?</p>
                      
                      
                      
                      <div class="avatar-col">
                           <a target="_blank" href="https://www.shiksha.com/userprofile/6385861" ga-attr="USER_PROFILE_QnA_TUPLE">
                             <div class="new-avatar">
                                        P                                  
                             </div>
                              </a>
                             <div class="inf-block">
                             <a target="_blank" href="https://www.shiksha.com/userprofile/6385861"><p class="avatar-name">PRUDHVI  YUGANDHAR<span class="currentStu" style="display:none;" id="currentStudent_6385861">Current Student</span></p></a>
                               <p class="g-l">Contributor-Level 6</p>
                               <div class="rp-txt">
                           iim a then b then c don't opt srm 
                              </div>
                              <div class="opinion-col">
                                 <span>1</span><img src="{{url('shiksha/assets/images/Untitled-1.jpg')}}">
                                  <span>0</span><img src="{{url('shiksha/assets/images/Untitled-3.jpg')}}">
                              </div>
                        </div>
                     </div>

       <div class="gd">
             <center><a href="" style="font-size:16px">..................   view all answers   ..................</a></center>
         </div>   
         <hr align="center">
 
                           
                    <p style="font-weight:bold; font-size:16px;color:#004080">  What is the required percentile in MBA entrance exam to get admission in IIM-A, B or C?</p>
                    <div class="avatar-col">
                    
                           <a target="_blank" href="https://www.shiksha.com/userprofile/6385861" ga-attr="USER_PROFILE_QnA_TUPLE">
                             <div class="new-avatar">
                                       <img src="{{url('shiksha/assets/images/1487155778phpL5r897_s.jpeg')}}" style="background-size:cover">                               
                             </div>
                              </a>
                           
                             <div class="inf-block">
                              <a target="_blank" href="https://www.shiksha.com/userprofile/6385861"><p class="avatar-name">PRUDHVI  YUGANDHAR<span class="currentStu" style="display:none;" id="currentStudent_6385861"> AKSHAT RAJ</span></p></a>
                              <p class="g-l">Contributor-Level 6</p>
                              <div class="rp-txt">
                           It is better that you use CAT Call Predictor by Shiksha. But from your profie, I would say that 97percentile or above should be able to fetch you a call from B, while for others                          that might be around 98percentile+Just to be on the safe side aim for...<a href="">view more</a>
                              </div>
                             <div class="opinion-col">
                                 <span>0</span><img src="{{url('shiksha/assets/images/Untitled-1.jpg')}}">
                                  <span>0</span><img src="{{url('shiksha/assets/images/Untitled-3.jpg')}}">
                              </div>
                        </div>
           </div>

           <div class="gd">
                 <center><a href="" style="font-size:16px">..................   view all answers   ..................</a></center>
             </div>   
             <hr align="center">
                  
                    <center><a class="btn-primary btn-pm deb-site-tour" ga-attr="DBROCHURE" cta-type="download_brochure" onclick="ajaxDownloadEBrochure(this,307,'institute','Indian Institute of Management,                         Ahmedabad','instituteDetailPage','929','995','996','998','997')" style="background-color:#004080; color:#fff; font-size:18px; margin:20px; border:1px solid #004080; padding:2px;">View All Questions<span style="display: none;" class="srpHoverCntnt"><p>Download details of eligibility, admissions, fees, infra etc.</p></span>
                       </a></center>
                       
             <hr align="center">
             
                     
                        <center><p style="font-weight:bold; font-size:16px;color:#004080"> Ask queries to current students of this college</p></center>
                    <div class="avatar-col" >
                       <div class="col-md-6">
                           <a target="_blank" href="https://www.shiksha.com/userprofile/6385861" ga-attr="USER_PROFILE_QnA_TUPLE">
                             <div class="new-avatar" style="background-color:#FFF; text-align:left">
                                     <img src="{{url('shiksha/assets/images/1476440729phpaCRyBU_s.jpeg')}}" style="background-size:cover">  
                             </div> 
                             <div class="new-avatar" style="background-color:#FFF; text-align:left">
                                     <p style="color:#004080; font-size:20px">Ramesh Sharma</p> 
                             </div>                             
                              </a>
                                   
                                   
                             </div>         
                                &nbsp;
                       
                          <div class="col-md-6">
                              <a target="_blank" href="https://www.shiksha.com/userprofile/6385861" ga-attr="USER_PROFILE_QnA_TUPLE">
                             <div class="new-avatar" style="background-color:#FFF; text-align:left">
                                     <img src="assets/images/1482979693phpw8lMoQ_s.jpeg"style="background-size:cover">  
                             </div> 
                             <div class="new-avatar" style="background-color:#FFF; text-align:left">
                                     <p style="color:#004080; font-size:20px">Gourav Rana</p> 
                             </div>                             
                              </a>
                             
                        </div>  
     
    </div> 
    </div>
    </div>
    </div>
    
   <div id="menu5" class="tab-pane fade">
           <div class="new-row" style="margin-top:50px; padding-left:30px">
            <div class="group-card gap listingTuple" id="gallery">
                <h2 class="head-1 gap" style="color:#004080;font-weight:bold">Gallery</h2>
                 <img src="{{url('shiksha/assets/images/635829742805323915488708432_college-students.imgopt1000x70.jpg')}}">
                
                <div class="flex-ul gallery">
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<div id="gwidget_0" class="album-L3" ga-attr="Event_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')">
<img class="lazy" alt="IIM-A - Chaos" title="IIM-A - Chaos" data-original="https://images.shiksha.com/mediadata/images/1488963913phph2kp1L_205x160.jpg" src="assets/images/1488963913phph2kp1L_205x160.jpg" style="display: block;">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Chaos",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488963913phph2kp1L_205x160.jpg"
    }
</script>
<p class="head-5" id="gwidget_text_0">Event</p>
</div>
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<div id="gwidget_1" class="album-L3" ga-attr="Academic Block_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Academic Block',522320,'30','81')">
<img class="lazy" alt="IIM-A - Library &amp; Academic Block" title="IIM-A - Library &amp; Academic Block" data-original="https://images.shiksha.com/mediadata/images/1488174987phpCkezhN_205x160.jpg" src="{{url('shiksha/assets/images/1491880775phpeb9N2I_210x157.jpg')}}" style="display: block;">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Library &amp; Academic Block",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174987phpCkezhN_205x160.jpg"
    }
</script>
<p class="head-5" id="gwidget_text_1">Academic Block</p>
</div>
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<div id="gwidget_2" class="album-L3" ga-attr="Library_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Library',522307,'30','81')">
<img class="lazy" alt="IIM-A - Library" title="IIM-A - Library" data-original="https://images.shiksha.com/mediadata/images/1488174805phpNNWt56_205x160.png" src="https://images.shiksha.com/mediadata/images/1488174805phpNNWt56_205x160.png" style="display: block;">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Library",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174805phpNNWt56_205x160.png"
    }
</script>
<p class="head-5" id="gwidget_text_2">Library</p>
</div>
<div class="album-cover" id="album">
<div id="gwidget_3" class="album-L3" ga-attr="Classroom_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Classroom',522311,'30','81')">
<img class="lazy" alt="IIM-A - CLASS" title="IIM-A - CLASS" data-original="https://images.shiksha.com/mediadata/images/1488174857phpE4DCsE_205x160.jpg" src="https://images.shiksha.com/mediadata/images/1488174857phpE4DCsE_205x160.jpg" style="display: block;">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - CLASS",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174857phpE4DCsE_205x160.jpg"
    }
</script>
<p class="head-5" id="gwidget_text_3">Classroom</p>
</div>
<div class="album-cover" id="album">
<div id="gwidget_4" class="album-L3" ga-attr="">
<img class="lazy" alt="IIM-A - Convacation" title="IIM-A - Convacation" data-original="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" src="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" style="display: block;">
<div class="more-images" id="viewMediaTags" style="display: block;" ga-attr="VIEW_ALL_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')"><p class="show-images">See all  19 Photos &amp;  Videos   </p></div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Convacation",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg"
    }
</script>
<p class="head-5" id="gwidget_text_4" style="visibility: hidden;">Convocation</p>
</div>
</div>
              
                
                             
    </div>
    </div>
</div>




<div id="menu6" class="tab-pane fade">
           <div class="new-row" style="margin-top:50px; padding-left:30px">
            <div class="group-card gap listingTuple" id="gallery">
                <h2 class="head-1 gap" style="color:#004080;font-weight:bold">College Events</h2>
                 <div class="events">
                       <ul class="flex-ul">
                           <li>
                           <div class="lcard clg-evnt">
                                <img data-original="https://images.shiksha.com/mediadata/images/1488963913phph2kp1L_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Chaos" title="Indian Institute of                                     Management, Ahmedabad - Chaos" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527013',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="{{url('shiksha/assets/images/1488175329phprztdfo_100x78.jpg')}}">
                                    <p class="head-L3">Chaos</p>
                                    <p class="para-L3"><span id="event0_ellipsis">Chaos is the annual cultural festival of the institute. In a short span of just 6 years, it become the country’s biggest and best                                      cultural festival. 
                                    The USP of the event is 80 hours of non-stop ...<a href="javascript: void(0);" class="link" onclick="showMoreString('event0','event')">view more</a></span><span id="event0_text"                                   style="display:none">Chaos is the annual cultural festival of the institute. In a short span of just 6 years, it become the country’s biggest and best cultural festival. <br>
                                   The USP of the event is 80 hours of non-stop ‘entire-tainment’. It draws participants from all over India and features a gamut of cultural and fine arts events, ranging from                                          choreographed dance displays and fashion parades to numerous exciting management games. It gives students a chance to engage in a wild and wacky weekend of revelries.</s></p>
                              </div>
                         </li>
                         <li>
                         <div class="lcard clg-evnt">
                         <img data-original="https://images.shiksha.com/mediadata/images/1488964362phpmHNAYH_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Insight" title="Indian Institute of                               Management, Ahmedabad - Insight" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527015',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488964362phpmHNAYH_135x100.jpg">
                         <p class="head-L3">Insight</p>
                         <p class="para-L3"><span id="event1_ellipsis">Insight is the marketing conclave of IIM Ahmedabad. It is 28 years old and prides itself as being the oldest event in the institute. The event                            has successfully established itself as the defining ma...<a href="javascript: void(0);" class="link" onclick="showMoreString('event1','event')">view more</a></span><span id=                           "event1_text" style="display:none">Insight is the marketing conclave of IIM Ahmedabad. It is 28 years old and prides itself as being the oldest event in the institute. The event has                                                         successfully established itself as the defining marketing conclave that brings corporates, B-school students, academia and consumers together to promote marketing and market research.                           <br> Major highlights of the event include The Great Ahmedabad Mela, speaker series and workshop sessions, cultural activities, marketing research projects, events and competitions.</span>                                                                               </p>
                        </div>
                        </li>
                        <li>
                        <div class="lcard clg-evnt">
                        <img data-original="https://images.shiksha.com/mediadata/images/1488964447php8NHLji_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Amaethon" title="Indian Institute of                           Management, Ahmedabad - Amaethon" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527016',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488964447php8NHLji_135x100.jpg">
                       <p class="head-L3">Amaethon</p>
                       <p class="para-L3"><span id="event2_ellipsis">Amaethon is the flagship B-School Agribusiness summit and an apex event in the country of the rural management programs organized by the institute   
                             The summit focuses on the agribusiness, agriculture and rural management community of the country ranging across students, academia, corporates, other organizations, and policy makers,                                and aims at fostering exchange, enthusiasm and interest in the sector, and share knowledge and create professional networks.</span></p>
                       </div>
                       </li>
                        <li>
<div class="lcard clg-evnt">
<img data-original="https://images.shiksha.com/mediadata/images/1488964519phpE76iKk_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Talent Nite" title="Indian Institute of Management, Ahmedabad - Talent Nite" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527020',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488964519phpE76iKk_135x100.jpg">
<p class="head-L3">Talent Nite</p>
<p class="para-L3"><span id="event3_ellipsis">Talent Nite is the most awaited event of the first semester. It is a week- long festival of inter-section cultural competitions and is one of the most cherished event of the institute - both for th...<a href="javascript: void(0);" class="link" onclick="showMoreString('event3','event')">view more</a></span><span id="event3_text" style="display:none">Talent Nite is the most awaited event of the first semester. It is a week- long festival of inter-section cultural competitions and is one of the most cherished event of the institute - both for the newcomers who participate in it and the seniors.<br>
The entire institute is converted into a colorful collage with each wall hosting testimonies to the creativity and wit of the students. A host of musical and cultural events takes place. First year students are given opportunity to display their skills through skits, musicals, dances, and songs.<br>
The final night at T-Nite is an eight-hour marathon where each section is allotted two hours to present an entertainment spectacle and this consists of a number of events, including the class representative act, the fashion parade and the Class Act in which all the students of the section have to perform together.</span></p>
</div>
</li>
<li>
<div class="lcard clg-evnt">
<img data-original="https://images.shiksha.com/mediadata/images/1488964593phpJxzoss_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Combos" title="Indian Institute of Management, Ahmedabad - Combos" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527023',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488964593phpJxzoss_135x100.jpg">
<p class="head-L3">Combos</p>
<p class="para-L3"><span id="event4_ellipsis">Combos is a month-long celebration of the competitive spirit of IIMA and the students’ desire to excel at the annual intra-institute sports, literature and cultural competitions.
The 18 dorms are...<a href="javascript: void(0);" class="link" onclick="showMoreString('event4','event')">view more</a></span><span id="event4_text" style="display:none">Combos is a month-long celebration of the competitive spirit of IIMA and the students’ desire to excel at the annual intra-institute sports, literature and cultural competitions.<br>
The 18 dorms are split into three groups and are pitted against each other in a race to gain maximum points. The winner gets crowned as the champions of the institute. Over 400 students throw down the proverbial gauntlet and pit their wits in games like treasure hunt, quiz competition, chess, cricket, football, throw ball, badminton and Frisbee. For the literary aficionados, there is the English and Hindi debating competition, JAM, and extempore. The event signs off with a mega final Nite during which a skit competition, tug-of-war and antakshari are organized.</span></p>
</div>
</li>
<li>
<div class="lcard clg-evnt">
<img data-original="https://images.shiksha.com/mediadata/images/1488964862phpHtkAVI_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - Confluence" title="Indian Institute of Management, Ahmedabad - Confluence" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527026',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488964862phpHtkAVI_135x100.jpg">
<p class="head-L3">Confluence</p>
<p class="para-L3"><span id="event5_ellipsis">Confluence, the largest B-school meet in Asia Pacific, is an amalgamation of five fairs - Finance, Marketing, Strategy, Entrepreneurship and IT and Operations. It is the only B-school meet in India...<a href="javascript: void(0);" class="link" onclick="showMoreString('event5','event')">view more</a></span><span id="event5_text" style="display:none">Confluence, the largest B-school meet in Asia Pacific, is an amalgamation of five fairs - Finance, Marketing, Strategy, Entrepreneurship and IT and Operations. It is the only B-school meet in India to draw participants from all over the world.<br>
Apart from contests, lectures and workshops by eminent personalities from various fields, Confluence features:<br>
Bizquizitive – the Mega Business Quiz<br>
Casually Speaking – The Informals<br>
Entertainment<br>
Livestock – The Online Trading Game<br>
Viewpoint – The Online Polling Game<br>
The event offers students across institutes and countries a chance to interact with each other, exchange ideas and appreciate the various perspectives that can be possible while looking at the same thing.</span></p>
</div>
</li>
<li>
<div class="lcard clg-evnt">
<img data-original="https://images.shiksha.com/mediadata/images/1488965005phpSgYDnR_135x100.jpg" alt="Indian Institute of Management, Ahmedabad - ConneXions" title="Indian Institute of Management, Ahmedabad - ConneXions" class="lazy" onclick="openGalleryLayer(307,'institute','Event','527030',0,0);" style="cursor: pointer; display: block;" ga-attr="EVENT_IMAGE" src="https://images.shiksha.com/mediadata/images/1488965005phpSgYDnR_135x100.jpg">
<p class="head-L3">ConneXions</p>
<p class="para-L3"><span id="event6_ellipsis">ConneXions is an annual IIMA PGPX event, which facilitates industry interaction with academia. It is an innovative platform, which brings together eminent personalities, thought leaders and policy ...<a href="javascript: void(0);" class="link" onclick="showMoreString('event6','event')">view more</a></span><span id="event6_text" style="display:none">ConneXions is an annual IIMA PGPX event, which facilitates industry interaction with academia. It is an innovative platform, which brings together eminent personalities, thought leaders and policy makers to debate contemporary issues facing corporate leaders and public policy makers.it is a meeting of minds, exchange of ideas, exploring possibilities, unearthing solutions.</span></p>
</div>
</li>
</ul>
</div>
       
                             
    </div>
    </div>

   
    
       </div>
       
       
       
       
       
       <div id="menu7" class="tab-pane fade">
           <div class="new-row" style="margin-top:50px; padding-left:30px">
            <div class="group-card gap listingTuple" id="articles">
                <h2 class="head-1 gap" style="color:#004080;font-weight:bold">Articles<span><small style="color:#004080;font-weight:bold; font:80px">(showing 3 of 42 articles)</small></span></h2>
                <div class="new-row1">
<div class="col-md-4"  style="border:1px solid #CCC">
<a class="group-card card-fixed" href="https://www.shiksha.com/mba/articles/how-fashion-designer-aditi-agarwal-made-it-to-iim-ahmedabad-blogId-14724" target="_blank" ga-attr="ARTICLE_TUPLE">
<div class="group-head">
<h3 class="head-1 h-fix">How Fashion Designer Aditi Agarwal made it to IIM ...</h3>
</div>
<p class="para-2" style="font-size:16px">I felt like I stood out somehow and that made me feel extraordinary, says Aditi Agarwal. Read more on Shiksha     </p>
</a>
</div>
<div class="col-md-4"  style="border:1px solid #CCC">
<a class="group-card card-fixed" href="https://www.shiksha.com/mba/articles/here-s-how-entrepreneur-anchal-taatya-made-it-to-iim-ahmedabad-blogId-14732" target="_blank" ga-attr="ARTICLE_TUPLE">
<div class="group-head">
<h3 class="head-1 h-fix">Here’s how entrepreneur Anchal Taatya made i...</h3>
</div>
<p class="para-2">Honesty and clarity of thoughts is the key to crack IM Ahmedabad’s interview, says Anchal Taatya. Read more on Shiksha     </p>
</a>
</div>
<div class="col-md-4"  style="border:1px solid #CCC">
<a class="group-card card-fixed" href="https://www.shiksha.com/mba/articles/cat-99-percentilers-not-even-eligible-to-appear-for-iim-interviews-blogId-14500" target="_blank" ga-attr="ARTICLE_TUPLE">
<div class="group-head">
<h3 class="head-1 h-fix">CAT 99 percentilers not even eligible to appear fo...</h3>
</div>
<p class="para-2">I know two 99.99 percentilers who were not called by any of IIM A/B/C for interviews. Is this fair? Read more on Shiksha.     </p>
</a>
</div>
<p class="clr"></p>
</div>
                
                 &nbsp;
                
                <center><a class="btn-primary btn-pm deb-site-tour" ga-attr="DBROCHURE" cta-type="download_brochure" onclick="ajaxDownloadEBrochure(this,307,'institute','Indian Institute of Management,                         Ahmedabad','instituteDetailPage','929','995','996','998','997')" style="background-color:#004080; color:#fff; font-size:18px; margin:20px; border:1px solid #004080; padding:2px">View All                        Questions<span style="display: none;" class="srpHoverCntnt"><p>Download details of eligibility, admissions, fees, infra etc.</p></span>
                       </a></center> 
                
                             
    </div>
    </div>

       </div>
       
       
       <div id="menu8" class="tab-pane fade">
       <div class="new-row">
<div class="group-card gap listingTuple" id="contact">
<div class="tbl">
<div class="cell contact" id="contact-widget">
<h2 class="head-1 gap">Contact Details &nbsp; &nbsp;</h2>
<div class="contact">
<ul class="contact-ul">
<li>
<div class="admision-query">
<p class="query-head">Address</p>
<p class="c-num">Indian Institute of Management<br>
Vastrapur</p>
<p class="c-num">Ahmedabad ( Gujarat)</p>
</div>
</li>
<li>
<div class="general-query admision-query">
<p class="query-head">Website</p>
<p class="c-num"><a href="http://www.iimahd.ernet.in" target="_blank" class="link" rel="nofollow">http://www.iimahd.ernet.in</a></p>
</div>
</li>
<a class="btn-primary btn-pm deb-site-tour" ga-attr="DBROCHURE" cta-type="download_brochure" onclick="ajaxDownloadEBrochure(this,307,'institute','Indian Institute of Management,                         Ahmedabad','instituteDetailPage','929','995','996','998','997')" style="background-color:#004080; color:#fff; font-size:18px; margin:20px; border:1px solid #004080; padding:2px">Show Phone &amp; Email<span style="display: none;" class="srpHoverCntnt"><p>Download details of eligibility, admissions, fees, infra etc.</p></span>
                       </a>

<li class="showContact" style="display:none">
<div class="admision-query">
<p class="query-head">Phone Number </p>
<p class="c-num ad-gap">07966323456</p>
</div>
</li>
<li class="showContact" style="display:none">
<div class="admision-query">
<p class="query-head">Email</p>
<p class="c-num ad-gap">admission@iima.ac.in </p>
</div>
</li>
</ul>
</div>
</div>
<div class="cell right-text google-staticmap">
<a href="http://www.google.com/maps/place/23.0329,72.5328/@23.0329,72.5328,19z" target="_blank" ga-attr="VIEW_MAP">
<img class="lazy" data-original="https://images.shiksha.com/mediadata/images/listingGoogle/listingLocationlive87021.jpg" src="https://images.shiksha.com/mediadata/images/listingGoogle/listingLocationlive87021.jpg" style="display: inline;">
<p class="mp-vw"><span>View on Map</span></p>
</a>
</div>
</div>
</div>
</div>
      
   
       </div>
        
    
       </div>
       </div>
       </div>
       
       <div class="container">
        <div class="row">
           <h2 class="head-1 gap" style="color:#004080;font-weight:bold;padding-top:50px">You may also be interested in following Indian Institute of Management campuses</h2>
          <div class="flex-ul contact" style="margin-top:20px">
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<div id="gwidget_0" class="album-L3" ga-attr="Event_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')">
<img class="lazy" alt="IIM-A - Chaos" title="IIM-A - Chaos" data-original="https://images.shiksha.com/mediadata/images/1488963913phph2kp1L_205x160.jpg" src="{{url('shiksha/assets/images/1488175227phpetR8QL_210x157.jpg')}}" style="display: block; padding:20px">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Chaos",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488963913phph2kp1L_205x160.jpg"
    }
</script>
<center><p class="head-5" id="gwidget_text_0">Indian Institute of<br>  Management, Bangalore</p></center>
<center><p>Bangalore | Estd. 197</p></center>
</div>
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<center><div id="gwidget_1" class="album-L3" ga-attr="Academic Block_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Academic Block',522320,'30','81')">
<img class="lazy" alt="IIM-A - Library &amp; Academic Block" title="IIM-A - Library &amp; Academic Block" data-original="https://images.shiksha.com/mediadata/images/1488174987phpCkezhN_205x160.jpg" src="{{url('shiksha/assets/images/1490763742phpY3U8pg_210x157.jpg')}}"style="display: block; padding:30px">
</div></center>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Library &amp; Academic Block",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174987phpCkezhN_205x160.jpg"
    }
</script>
<center><p class="head-5" id="gwidget_text_1">Indian Institute of <br>Management, Raipur</p></center>
<center><p>Raipur | Estd. 2010</p></center>
</div>
<div class="album-cover" id="album">
<div class="album-L1"></div>
<div class="album-L2"></div>
<div id="gwidget_2" class="album-L3" ga-attr="Library_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Library',522307,'30','81')">
<img class="lazy" alt="IIM-A - Library" title="IIM-A - Library" data-original="https://images.shiksha.com/mediadata/images/1488174805phpNNWt56_205x160.png" src="{{url('shiksha/assets/images/1489130532phpjirntV_210x157.jpg')}}" style="display: block;  padding:30px">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Library",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174805phpNNWt56_205x160.png"
    }
</script>
 <center><p class="head-5" id="gwidget_text_2">Indian Institute of<br>  Management,Lucknow</p></center>
<center><p>Lucknow | Estd. 1984</p></center>

</div>
<div class="album-cover" id="album">
<div id="gwidget_3" class="album-L3" ga-attr="Classroom_VIEW_GALLERY" onclick="openGalleryLayer(307,'institute','Classroom',522311,'30','81')">
<img class="lazy" alt="IIM-A - CLASS" title="IIM-A - CLASS" data-original="https://images.shiksha.com/mediadata/images/1488174857phpE4DCsE_205x160.jpg" src="{{url('shiksha/assets/images/1489126515phplr0ggm_210x157.jpg')}}" style="display: block;  padding:30px">
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - CLASS",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174857phpE4DCsE_205x160.jpg"
    }
</script>
<center><p class="head-5" id="gwidget_text_3">IIndian Institute of<br> Management, Indore</p></center>
<center><p>Indore | Estd. 1996</p></center>

</div>
<div class="album-cover" id="album">
<div id="gwidget_4" class="album-L3" ga-attr="">
<img class="lazy" alt="IIM-A - Convacation" title="IIM-A - Convacation" data-original="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" src="{{url('shiksha/assets/images/1489134921phpynpUKa_210x157.jpg')}}" style="display: block;  padding:30px">
<div class="more-images" id="viewMediaTags" style="display: block;  padding:20px" ga-attr="VIEW_ALL_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')"><p class="show-images">
<center><p class="head-5" id="gwidget_text_2">Indian Institute of<br> Management, Rohtak</p></center>
<center><p>Rohtak | Estd. 2010</p></center>
</div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Convacation",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg"
    }
</script>

</div>

<div class="album-cover" id="album">
<div id="gwidget_4" class="album-L3" ga-attr="">
<img class="lazy" alt="IIM-A - Convacation" title="IIM-A - Convacation" data-original="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" src="{{url('shiksha/assets/images/1491478785phpQ01U4i_210x157.jpg')}}" style="display: block;  padding:30px">
<div class="more-images" id="viewMediaTags" style="display: block;  padding:20px" ga-attr="VIEW_ALL_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')"><p class="show-images">
<center><p class="head-5" id="gwidget_text_2">Indian Institute of<br> Management,Calcutta</p></center>
<center><p>Kolkata | Estd. 1961</p></center>
</div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Convacation",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg"
    }
</script>

</div>


<div class="album-cover" id="album">
<div id="gwidget_4" class="album-L3" ga-attr="">
<img class="lazy" alt="IIM-A - Convacation" title="IIM-A - Convacation" data-original="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" src="{{url('shiksha/assets/images/1489127361phpLQEGd6_210x157.jpg')}}" style="display: block;  padding:30px">
<div class="more-images" id="viewMediaTags" style="display: block;  padding:20px" ga-attr="VIEW_ALL_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')"><p class="show-images">
<center><p class="head-5" id="gwidget_text_2">Indian Institute of <br>  Kashipur (IIM Kashipur)</p></center>
<center><p>Uttarakhand - Other | Estd. 2011</p></center>
</div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Convacation",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg"
    }
</script>

</div>

<div class="album-cover" id="album">
<div id="gwidget_4" class="album-L3" ga-attr="">
<img class="lazy" alt="IIM-A - Convacation" title="IIM-A - Convacation" data-original="https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg" src="{{url('shiksha/assets/images/1488176080phpsVZEJM_210x157.jpg')}}" style="display: block;  padding:30px">
<div class="more-images" id="viewMediaTags" style="display: block;  padding:20px" ga-attr="VIEW_ALL_GALLERY" onclick="openGalleryLayer(307,'institute','Event',527013,'30','81')"><p class="show-images"></p>
<center><p class="head-5" id="gwidget_text_2">Indian Institute of<br> Management,Jammu (IIM Jammu)</p></center>
<center><p>Jammu | Estd. 2016</p></center>
</div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "ImageObject", 
      "name" : "IIM-A - Convacation",
      "contentUrl" : "https://images.shiksha.com/mediadata/images/1488174918phpXcE3a0_205x160.jpg"
    }
</script>

</div>



</div>
        </div>
       </div>
  
 </section>
 @include('shiksha/include/footer')