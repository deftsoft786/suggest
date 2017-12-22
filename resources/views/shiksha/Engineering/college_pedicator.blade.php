@include('shiksha/include/header')
<div class="container">
	<div class="row" style="margin-top:70px">
        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 bhoechie-tab-container">
         <h2 style="color:#004080; padding-left:20px">College Cut-off CGPET 2017</h2>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                 Find College and Branch
                </a>
                <a href="#" class="list-group-item text-center">
                 Know College Cut-offs
                </a>
                <a href="#" class="list-group-item text-center">
                  Find College For a Branch
                </a>
               
               
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    
                    <form id="search_form" onkeypress="return event.keyCode != 13;">
	<input value="rank" name="tabType" type="hidden">
	<ol>
	<li style="position: relative;color:#004080">
		<label>Enter Rank/Predicted Rank:	<br>
				</label>
		
		
	    <div class="predictor-field-wrap">
	    	<input class="field-styles" id="rank" name="rank" inputtype="Rank" value="Enter Rank/Predicted Rank" onfocus="if($j('#rank').val() == 'Enter Rank/Predicted Rank') $j('#rank').val('');" onblur="if($j('#rank').val() == '')$j('#rank').val('Enter Rank/Predicted Rank');" style="padding:4px 5px;" type="text">
	    	<div id="error_rank" class="errorMsg" style="margin-top : 3px;display:none;"></div>
	    </div>
	</li>

	<li style="display: none;">
		<label>Enter Rank Type:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="rank_type" name="rank_type">
	        	<option value="Home">Home State Rank</option>
	        </select>		
			    </div>
	</li>
	<li id="state_container" style="display:none">
		<label>Select State:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="state" name="state">
	        	<option value="Chhattisgarh">Chhattisgarh</option>        	
	        </select>		
			        <div id="error_state" class="errorMsg" style="margin-top : 3px;display:none; ">select your state</div>
	    </div>
	</li>	
	<li style="display: none;">
		<label>Select Category:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="category" name="category">
			        	<option value="UR">UR</option>
				    	</select>
	    </div>
	</li>
	<li style="color:#004080">
		<label>Select Round:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="round" name="round">
						<option value="all">Counselling Round - All</option>
						<option value="1">Round 1</option>
						<option value="2">Round 2</option>
				        </select>
	        <div class="spacer15 clearFix"></div>
	        <a href="javascript:void(0);" onclick="if(!validateSearchForm()){return false;}else{searchData('1','','rank','asc','search','',173);} ;setCookie('showBox','no',0 ,'/',COOKIEDOMAIN); trackEventByGA('SearchClick','SEARCH_BUTTON');" class="orange-button2">Search <i class="predictor-sprite search-arr"></i></a>
	    </div>
	</li>
	</ol>
	</form>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                   <form id="search_form">
	<input value="college" name="tabType" type="hidden">
	<ol>
	<li style="color:#004080">
		<label>Select Preferred Colleges:</label>
	    <div class="predictor-field-wrap">
	    	<div class="pre-select" style=" position:relative; padding: 4px 5px; position:relative" onmouseover="$j('#college_selector').show();" onmouseout="if(getCookie('showOverlayInst') == 'no') $j('#college_selector').hide();">Selected (<span id="institute_selected_number">0</span>)
            
	        	<div class="dropdown-layer customInputs" id="college_selector" style="display: none;">
	            	<div class="filter-search" onclick="setCookie('showOverlayInst','yes',0 ,'/',COOKIEDOMAIN);" 
					    <i class="predictor-sprite filter-search-icon"></i>
					    <input onclick="$j('#institute_text').val('');" onkeyup="getInstitutes();" id="institute_text" value="Search Institute ..." style="color:#7F7F7F" type="text">
					</div>
            						<ul class="dropdown-list" id="collge_selector_container" onclick="setCookie('showOverlayInst','yes',0 ,'/',COOKIEDOMAIN);" style="height: 162px; overflow-y: auto;">
            											<li id="institute_3090">
		<input name="college[]" multiple class="flLt institute_check" value="3090" id="inst_3090" type="checkbox">
		<label for="inst_3090" style="width:90% !important;">
		<span class="common-sprite"></span><p>Bharti College of Engineering &amp; Technology, Durg, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3082">
		<input name="college[]" multiple class="flLt institute_check" value="3082" id="inst_3082" type="checkbox">
		<label for="inst_3082" style="width:90% !important;">
		<span class="common-sprite"></span><p>Bhilai Institute of Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3095">
		<input name="college[]" multiple class="flLt institute_check" value="3095" id="inst_3095" type="checkbox">
		<label for="inst_3095" style="width:90% !important;">
		<span class="common-sprite"></span><p>Bhilai Institute of Technology, Bhilai, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3088">
		<input name="college[]" multiple class="flLt institute_check" value="3088" id="inst_3088" type="checkbox">
		<label for="inst_3088" style="width:90% !important;">
		<span class="common-sprite"></span><p>Central College of Engineering &amp; Management, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3081">
		<input name="college[]" multiple class="flLt institute_check" value="3081" id="inst_3081" type="checkbox">
		<label for="inst_3081" style="width:90% !important;">
		<span class="common-sprite"></span><p>Chhatrapati Shivaji Institute of Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3099">
		<input name="college[]" multiple class="flLt institute_check" value="3099" id="inst_3099" type="checkbox">
		<label for="inst_3099" style="width:90% !important;">
		<span class="common-sprite"></span><p>Chhattisgarh Institute of Technology, Rajnandgaon, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3097">
		<input name="college[]" multiple class="flLt institute_check" value="3097" id="inst_3097" type="checkbox">
		<label for="inst_3097" style="width:90% !important;">
		<span class="common-sprite"></span><p>Chouksey Engineering College, Bilaspur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3084">
		<input name="college[]" multiple class="flLt institute_check" value="3084" id="inst_3084" type="checkbox">
		<label for="inst_3084" style="width:90% !important;">
		<span class="common-sprite"></span><p>Columbia Institute of Engineering &amp; Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3100">
		<input name="college[]" multiple class="flLt institute_check" value="3100" id="inst_3100" type="checkbox">
		<label for="inst_3100" style="width:90% !important;">
		<span class="common-sprite"></span><p>Institute of Technology, Korba, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3098">
		<input name="college[]" multiple class="flLt institute_check" value="3098" id="inst_3098" type="checkbox">
		<label for="inst_3098" style="width:90% !important;">
		<span class="common-sprite"></span><p>Lakhmi Chand Institute of Technology, Bilaspur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3087">
		<input name="college[]" multiple class="flLt institute_check" value="3087" id="inst_3087" type="checkbox">
		<label for="inst_3087" style="width:90% !important;">
		<span class="common-sprite"></span><p>MATS School of Engineering and Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3086">
		<input name="college[]" multiple class="flLt institute_check" value="3086" id="inst_3086" type="checkbox">
		<label for="inst_3086" style="width:90% !important;">
		<span class="common-sprite"></span><p>MM College of Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3085">
		<input name="college[]" multiple class="flLt institute_check" value="3085" id="inst_3085" type="checkbox">
		<label for="inst_3085" style="width:90% !important;">
		<span class="common-sprite"></span><p>Raipur Institute of Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3094">
		<input name="college[]" multiple class="flLt institute_check" value="3094" id="inst_3094" type="checkbox">
		<label for="inst_3094" style="width:90% !important;">
		<span class="common-sprite"></span><p>RSR Rungta College of Engineering &amp; Technology, Bhilai, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3089">
		<input name="college[]" multiple class="flLt institute_check" value="3089" id="inst_3089" type="checkbox">
		<label for="inst_3089" style="width:90% !important;">
		<span class="common-sprite"></span><p>Rungta College of Engineering &amp; Technology, Durg, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3083">
		<input name="college[]" multiple class="flLt institute_check" value="3083" id="inst_3083" type="checkbox">
		<label for="inst_3083" style="width:90% !important;">
		<span class="common-sprite"></span><p>Shri Sankaracharya Institute of Professional Management &amp; Technology, Raipur, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3091">
		<input name="college[]" multiple class="flLt institute_check" value="3091" id="inst_3091" type="checkbox">
		<label for="inst_3091" style="width:90% !important;">
		<span class="common-sprite"></span><p>Shri Shankaracharya Institute of Engineering &amp; Technology, Durg, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3092">
		<input name="college[]" multiple class="flLt institute_check" value="3092" id="inst_3092" type="checkbox">
		<label for="inst_3092" style="width:90% !important;">
		<span class="common-sprite"></span><p>Shri Shankaracharya Technical Campus, Bhilai, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3093">
		<input name="college[]" multiple class="flLt institute_check" value="3093" id="inst_3093" type="checkbox">
		<label for="inst_3093" style="width:90% !important;">
		<span class="common-sprite"></span><p>Shri Shankaracharya Technical Campus, Shri Shankaracharya Engineering College, Bhilai, Chhattisgarh</p>
		</label>
		</li>
			<li id="institute_3096">
		<input name="college[]" multiple class="flLt institute_check" value="3096" id="inst_3096" type="checkbox">
		<label for="inst_3096" style="width:90% !important;">
		<span class="common-sprite"></span><p>Shri Shankaracharya Technical Campus, Shri Shankaracharya Institute of Technology &amp; Management, Bhilai, Chhattisgarh</p>
		</label>
		</li>
		    
	<li id="no_result_inst" style="display:none;">No result found for this institute</li>            
  	              					</ul>
  	              <div class="tac clear-width" style="margin:8px 0 2px 0; border-top:1px solid #ccc; padding-top:5px"><a class="orange-button2" href="javascript:void(0)" onclick="selectInstitutes();" style="padding:4px 10px; font-size:13px">Ok</a></div>
	            </div>
	        </div>
	        <div id="error_institute" class="errorMsg" style="margin-top : 3px;display:none;"></div>
	    </div>
	</li>
	<li style="display: none;">
		<label>Select Category:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="category" name="category">
			        	<option value="UR">UR</option>
				    	</select>
	    </div>
	</li>
	<li style="display: none;">
		<label>Avail State Quota:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="state_quota" name="quota">
	        	<option value="yes">YES</option>
	        </select>		
			    </div>    
	</li>
	<li id="state_container" style="display:none;">
		<label>Select State:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="state" name="state">
	        	<option value="Chhattisgarh">Chhattisgarh</option>        	
	        </select>		
					<div id="error_state" class="errorMsg" style="margin-top : 3px;display:none;">select your state</div>	        
	    </div>
	</li>		
	<li style="color:#004080">
		<label>Select Round:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="round" name="round">
						<option value="all">Counselling Round - All</option>
						<option value="1">Round 1</option>
						<option value="2">Round 2</option>
				    	</select>
	        <div class="spacer15 clearFix"></div>
	        <a href="javascript:void(0);" onclick="if(!validateSearchForm()){return false;}else{searchData('2','','rank','asc','search','',174);}; setCookie('showBox','no',0 ,'/',COOKIEDOMAIN); trackEventByGA('SearchClick','SEARCH_BUTTON'); " class="orange-button2">Search <i class="predictor-sprite search-arr"></i></a>
	    </div>
	</li>
	</ol>
	</form>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                   <div id="predictor-tab-details">
	<form id="search_form">
	<input value="branch" name="tabType" type="hidden">
	<ol>
	<li style="color:#004080">
		<label>Select Preferred Branches:</label>
	    <div class="predictor-field-wrap">
	    	<div class="pre-select" style="width:207px; position:relative; padding: 4px 5px" onmouseover="$j('#branch_selector').show();" onmouseout="if(getCookie('showOverlayBr') == 'no') $j('#branch_selector').hide();"> Selected (<span id="branch_selected_number">0</span>)
	        	<div class="dropdown-layer customInputs" id="branch_selector" style="display:none;width:350px;">
	            	<div class="filter-search" onclick="setCookie('showOverlayBr','yes',0 ,'/',COOKIEDOMAIN);" style="width:300px;">
					    <i class="predictor-sprite  filter-search-icon"></i>
					    <input onclick="$j('#branch_text').val('');" onkeypress="return event.keyCode != 13;" onkeyup="getBranches();" id="branch_text" value="Search Branch ..." style="color:#7F7F7F" type="text">
					</div>
					
							            	<ul class="dropdown-list" style="height:162px;overflow-y:auto;" onclick="setCookie('showOverlayBr','yes',0 ,'/',COOKIEDOMAIN);" id="branch_selector_container">
							            					<li id="branch_0">
		<input name="branch[]" multiple class="flLt branch_check" value="Chemical Engineering" id="branch_Chemical Engineering" type="checkbox">
		<label for="branch_Chemical Engineering"> 
		<span class="common-sprite"></span><p>Chemical Engineering</p>
		</label>
		</li>
			<li id="branch_1">
		<input name="branch[]" multiple class="flLt branch_check" value="Civil Engineering" id="branch_Civil Engineering" type="checkbox">
		<label for="branch_Civil Engineering"> 
		<span class="common-sprite"></span><p>Civil Engineering</p>
		</label>
		</li>
			<li id="branch_2">
		<input name="branch[]" multiple class="flLt branch_check" value="Computer Science &amp; Engineering" id="branch_Computer Science &amp; Engineering" type="checkbox">
		<label for="branch_Computer Science &amp; Engineering"> 
		<span class="common-sprite"></span><p>Computer Science &amp; Engineering</p>
		</label>
		</li>
			<li id="branch_3">
		<input name="branch[]" multiple class="flLt branch_check" value="Electrical &amp; Electronics Engineering" id="branch_Electrical &amp; Electronics Engineering" type="checkbox">
		<label for="branch_Electrical &amp; Electronics Engineering"> 
		<span class="common-sprite"></span><p>Electrical &amp; Electronics Engineering</p>
		</label>
		</li>
			<li id="branch_4">
		<input name="branch[]" multiple class="flLt branch_check" value="Electrical Engineering" id="branch_Electrical Engineering" type="checkbox">
		<label for="branch_Electrical Engineering"> 
		<span class="common-sprite"></span><p>Electrical Engineering</p>
		</label>
		</li>
			<li id="branch_5">
		<input name="branch[]" multiple class="flLt branch_check" value="Electronics &amp; Telecommunications Engineering" id="branch_Electronics &amp; Telecommunications Engineering" type="checkbox">
		<label for="branch_Electronics &amp; Telecommunications Engineering"> 
		<span class="common-sprite"></span><p>Electronics &amp; Telecommunications Engineering</p>
		</label>
		</li>
			<li id="branch_6">
		<input name="branch[]" multiple class="flLt branch_check" value="Information Technology" id="branch_Information Technology" type="checkbox">
		<label for="branch_Information Technology"> 
		<span class="common-sprite"></span><p>Information Technology</p>
		</label>
		</li>
			<li id="branch_7">
		<input name="branch[]" multiple class="flLt branch_check" value="Mechanical Engineering" id="branch_Mechanical Engineering" type="checkbox">
		<label for="branch_Mechanical Engineering"> 
		<span class="common-sprite"></span><p>Mechanical Engineering</p>
		</label>
		</li>
			<li id="branch_8">
		<input name="branch[]" multiple class="flLt branch_check" value="Mining Engineering" id="branch_Mining Engineering" type="checkbox">
		<label for="branch_Mining Engineering"> 
		<span class="common-sprite"></span><p>Mining Engineering</p>
		</label>
		</li>
		<li id="no_result_branch" style="display:none;">No result found for this branch</li>
							                </ul>

  	              	<div class="tac clear-width" style="margin:8px 0 2px 0; border-top:1px solid #ccc; padding-top:5px"><a class="orange-button2" href="javascript:void(0)" onclick="selectBranch();" style="padding:4px 10px; font-size:13px">Ok</a></div>
	            </div>
	        </div>
	        <div id="error_branch" class="errorMsg" style="margin-top : 3px;display:none;"></div>
	    </div>
	</li>
	<li style="position: relative;color:#004080">
		<label>Enter Rank/Predicted Rank:
		<br>
				</label>
	    <div class="predictor-field-wrap">
	    	<input class="field-styles" name="rank" id="rank" inputtype="Rank" value="Enter Rank/Predicted Rank" onfocus="if($j('#rank').val() == 'Enter Rank/Predicted Rank') $j('#rank').val('');" onblur="if($j('#rank').val() == '')$j('#rank').val('Enter Rank/Predicted Rank');" style="padding:4px 5px;width:207px;" type="text">
	    	<div id="error_rank" class="errorMsg" style="margin-top : 3px;display:none;"></div>
	    </div>
	</li>
	<li style="display: none;">
		<label>Enter Rank Type:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="rank_type" name="rank_type">
	        	<option value="Home">Home State Rank</option>
	        </select>		
			    </div>
	</li>
	<li id="state_container" style="display:none">
		<label>Select State:</label>
	    <div class="predictor-field-wrap">
			    	<select class="pre-select" id="state" name="state">
	        	<option value="Chhattisgarh">Chhattisgarh</option>        	
	        </select>		
			        <div id="error_state" class="errorMsg" style="margin-top : 3px;display:none;">select your state</div>
	    </div>
	</li>	
	 <li style="display:none;">
		<label>Select Category:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="category" name="category">
	        		        	<option value="UR">UR</option>
				    	</select>
	    </div>
	</li>
	<li style="color:#004080">
		<label>Select Round:</label>
	    <div class="predictor-field-wrap">
	    	<select class="pre-select" id="round" name="round">
						<option value="all">Counselling Round - All</option>
						<option value="1">Round 1</option>
						<option value="2">Round 2</option>
				    	</select>
	        <div class="spacer15 clearFix"></div>
	        <a href="javascript:void(0);" onclick="if(!validateSearchForm()){return false;}else{searchData('3','','rank','asc','search','',175);} ; setCookie('showBox','no',0 ,'/',COOKIEDOMAIN);                     trackEventByGA('SearchClick','SEARCH_BUTTON');" class="orange-button2">Search <i class="predictor-sprite search-arr"></i></a>
	    </div>
	</li>
	</ol>
	</form>
	<div class="branch-image">
		<!--<img src="public/images/collegepredictor//branch-image.jpg"  alt="" title=""  /></div>-->
		<span class="branch-image-cgpet"></span>
        <div class="clearFix"></div>
    </div>
        <div class="clearFix"></div>
         </div>
        </div>
                
            </div>
        </div>
  </div>
  
  
                
                
                
                
   <div class="result-container" style="margin-top:20px">
               
    
<table class="table" >
  <thead class="thead-default" >
    <tr>
      <th style="color:#fff; background-color:#004080">Course Name</th>
      <th style="color:#fff; background-color:#004080">Branch Name</th>
      <th style="color:#fff; background-color:#004080">Round</th>
      <th style="color:#fff; background-color:#004080">Closing Rank</th>

    </tr>
  </thead>
  <tbody>
    <tr style="background-color:#fff">
      <td style="color:#004080">Bhilai Institute of Technology, Bhilai<br>
       <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p>
            </td>
								    
      <td  style="color:#004080">Electrical Engineering</td>
       <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">1</td>
    </tr>
    
    <tr style="background-color:#DADADA">
    <td  style="color:#004080">Bhilai Institute of Technology, Bhilai<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">5</td>
    </tr> 
    
    
     
    <tr style="background-color:#fff">
    <td>Raipur Institute of Technology, Raipur<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080"> Chemical Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">8</td>
    </tr>
    
    
     <tr style="background-color:#DADADA">
    <td  style="color:#004080">Shri Shankaracharya Institute of Engineering & Technology, Durg</td>
    <td  style="color:#004080">Mechanical Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">14</td>
    </tr> 
    
     
    
    
     <tr style="background-color:#fff">
    <td  style="color:#004080">Bhilai Institute of Technology, Bhilai<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080"> Round 1</td>
       <td  style="color:#004080">18</td>
    </tr> 
    
    
     <tr style="background-color:#DADADA">
    <td  style="color:#004080">Shri Shankaracharya Technical Campus, Bhilai</td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">20</td>
    </tr>
    
    
    
    
     <tr style="background-color:#fff">
    <td  style="color:#004080">Bhilai Institute of Technology, Bhilai<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Electronics & Telecommunications Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">21</td>
    </tr> 
    
    
     <tr style="background-color:#DADADA">
    <td  style="color:#004080">Shri Sankaracharya Institute of Professional Management & Technology, Raipur<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Mechanical Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">22</td>
    </tr> 
    
    
     <tr style="background-color:#fff">
    <td  style="color:#004080">Raipur Institute of Technology, Raipur<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">23</td>
    </tr> 
    
    
     <tr style="background-color:#DADADA">
    <td  style="color:#004080">Raipur Institute of Technology, Raipur<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable">Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Civil Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">25</td>
    </tr>
    
    
    <tr style="background-color:#fff">
    <td  style="color:#004080">Bhilai Institute of Technology, Bhilai<br>
    <a id="courseid_201824_2" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('201824_2');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('201824_2');}" onclick="			 responseForm.showResponseForm('201824',  'CollegePredictor','course',{'trackingKeyId': '178','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'201824'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('2');" style="background:#004080; color:#fff; border:1px solid #004080 none repeat scroll 0px 0px;">
			 
						Download E-Brochure
			</a>
             
            <p class="flRt" style="padding-left:0px; float:right">
<input onclick="myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare19630-201821" class="addToCompareOnCollegePredictorCheckBox compare19630-201821" value="19630:: ::::Bhilai Institute of Technology, Bhilai::201821::https://www.shiksha.com/b-tech/course/b-e-in-mechanical-engineering-bhilai-institute-of-technology-chhattisgarh-other-201821" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 201821 ,'instituteId':19630,'tracking_keyid' :506,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare19630-201821lable" class="addToCompareOnCollegePredictor compare19630-201821lable" >Add to Compare</a>
			</p></td>
    <td  style="color:#004080">Mechanical Engineering</td>
    <td  style="color:#004080"> Round 1</td>
       <td  style="color:#004080">28</td>
    </tr>
    
     
     <tr style="background-color:#DADADA">
    <td  style="color:#004080">RSR Rungta College of Engineering & Technology, Bhilai</td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080">  Round 2</td>
       <td  style="color:#004080">37</td>
    </tr> 
    
    
    
    <tr style="background-color:#fff">
    <td  style="color:#004080">Institute of Technology, Korba</td>
    <td  style="color:#004080">Computer Science & Engineering</td>
    <td  style="color:#004080"> Round 1</td>
       <td  style="color:#004080">46</td>
    </tr> 
    
    
    
    <tr style="background-color:#DADADA">
    <td  style="color:#004080">Bhilai Institute of Technology, Raipur</td>
    <td  style="color:#004080">Mechanical Engineering</td>
    <td  style="color:#004080"> Round 2</td>
       <td  style="color:#004080">49</td>
    </tr> 
    
  </tbody>
</table>


</div>

</div>
@include('shiksha/include/footer')