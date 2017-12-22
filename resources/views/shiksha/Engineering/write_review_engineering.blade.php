@include('shiksha/include/header')
    <div class="row exam" style="background:#fff; margin-top:70px">

    <div class="container">
     <div class="col-md-12" style="margin-top:50px;border:1px solid #CCC">
        <center> <img alt="logo here" src="{{url('shiksha/assets/images/.gif.png')}}" ></center>
         <h2 style="text-align:center; color:#004080; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
           <center> <div class="col-md-6" style="margin-top:30px;border-bottom:1px solid #CCC">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
             <p style="font-size:16px; color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing </p>
             <p style="color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div></center>
           <center><div class="col-md-6" style="margin-top:30px; border-bottom:1px solid #CCC">
             <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
             <p style="font-size:16px; color:#004080; font-weight:bold">Play The Mentor</p>
             <p style="color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div></center>
           
           
           
           
           <div class="connect-form clear-width review-wrap" style="margin:0;">
				                <div class="form-details">
                	<p style="font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<b></b><p><b>We will reject your review if:<br></b>
	1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
	2. Lorem Ipsum is simply dummy text of the printing and typesetting industry<br>
	3.  Lorem Ipsum is simply dummy text of the printing and typesetting industry<br>
	4. Lorem Ipsum is simply dummy text of the printing and typesetting industry<br>
	</p>                	<p class="form-title">Your College Details</p>
                    <ul>
                    	<li class="clear-width">
                            <div class="flLt dummy_autosuggest" id="dummy_autosuggest_1">
                            	<label>College Name</label>
                                <p style="color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
								<input required validate="validateReviewFields" caption="College Name" class="text-width" onchange="$j('#suggested_institutes_1').val($j('#dummy_input').val());" onclick="showAutosuggestReviewForm(1);" onfocus="showAutosuggestReviewForm(1);" id="dummy_input" autocomplete="off" value="" minlength="1" maxlength="200" type="text">
								<div style="display:none;">
                                    <div class="errorMsg" id="dummy_input_error" style="*float:left"></div>
									<div class="errorMsg" id="institute_error_1" style="*float:left"></div>
								</div>
                                                                    <div id="search-college-layer1" class="suggestion-box" style="display: none;"></div>
                                                            </div>
                            <input name="suggested_institutes[]" id="suggested_institutes_1" value="" type="hidden"> 			  

                            <div class="flRt tab" id="locationDiv">
                                <label id="locLabel">Location</label>
                                <p id="locHelpText" style="color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>								
                                    <select class="select-width" id="location_1" name="location[]" onchange="loadCourses(1);" required="true" validate="validateSelect" caption="your Location"></select>
                            	<div style="display:none;" id="loc_main"><div class="errorMsg" id="location_1_error" style="*float:left"></div></div>  
                            </div>
                        </li>
                                    
                        <li class="clear-width">
                            <div class="flLt tab" id="courseDiv">
                                <label id="courseLabel">Course</label>
                                <p id="courseHelpText" style="color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    					       
    						    <select class="select-width" onchange="displayRating('course_1','Rate Your College On The Following Parameters'); clearRecommendFlag(); checkCourses(1); getCourseCampusURL(this.value,this);" name="course[]" id="course_1" required="true" validate="validateSelect" caption="your Course">    						        
    						    </select>
    					                    
                                <div style="display:none;" id="course_main">
                                    <div class="errorMsg" id="course_1_error" style="*float:left"></div>
                                </div>
                            </div>
                            
                                <div class="flRt">
                            	<label>Year of Completion</label>
                                <p style="color:#004080">Select the year when you completed the course.</p>
                                <p style="color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                               	<select class="select-width" required="true" validate="validateSelect" caption="Year of Completion" id="yearOfGraduation" name="yearOfGraduation[]">
                                	<option value="" style="color:#004080">Select</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                    </select>
                                <div style="display:none;">
                                    <div class="errorMsg" id="yearOfGraduation_error" style="*float:left"></div>
                                </div>      
                            </div>
                        </li>
                    </ul>

                                 
                    <div class="camp-review-sec clear-width" id="camp-review-sec">
                        <p class="form-title" style="margin-bottom:0; font-weight:bold">Placements <span class="least">(At least 3-4 lines)</span> <span>*</span></p>    
                        <p style="display:block; color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <p style="display:block; color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div class="write-review-sec">
                            <textarea id="placementDescription" name="placementDescription" class="write-textarea2" caption="review about your College Placements" validate="validateReviewFields" required minlength="250" maxlength="2500"></textarea>
                            <div style="display:none;"><div class="errorMsg" id="placementDescription_error" style="*float:left"></div></div>      
                            <p style="color:#004080">(Minimum 250 characters)</p>
                        </div>
                    </div>

                    <div class="camp-review-sec clear-width" id="camp-review-sec">
                        <p class="form-title" style="margin-bottom:0;font-weight:bold">Infrastructure <span class="least">(At least 3-4 lines)</span> <span>*</span></p>    
                        <p style="display:block;color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div class="write-review-sec">
                            <textarea id="infraDescription" name="infraDescription" class="write-textarea2" caption="review about your College Infrastructure" validate="validateReviewFields" required minlength="250" maxlength="2500"></textarea>
                            <div style="display:none;"><div class="errorMsg" id="infraDescription_error" style="*float:left"></div></div>      
                            <p style="color:#004080">(Minimum 250 characters)</p>
                        </div>
                    </div>

                    <div class="camp-review-sec clear-width" id="camp-review-sec">
                        <p class="form-title" style="margin-bottom:0;font-weight:bold">Faculty &amp; Course Curriculum <span class="least">(At least 3-4 lines)</span> <span>*</span></p>    
                        <p style="display:block;color:#004080">  Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div class="write-review-sec">
                            <textarea id="facultyDescription" name="facultyDescription" class="write-textarea2" caption="review about your College Faculty" validate="validateReviewFields" required minlength="250" maxlength="2500"></textarea>
                            <div style="display:none;"><div class="errorMsg" id="facultyDescription_error" style="*float:left"></div></div>      
                            <p style="color:#004080">(Minimum 250 characters)</p>
                        </div>
                    </div>

                    <div class="camp-review-sec clear-width" id="camp-review-sec">
                    	<p class="form-title" style="margin-bottom:0;color:#004080;font-weight:bold">Other Details </p>	
                        <p style="display:block;color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div class="write-review-sec">
                        	<textarea id="review-ugcollege" name="reviewDescription" class="write-textarea2" caption="review about your College" validate="validateReviewFields" minlength="250" maxlength="2500"></textarea>
                            <div style="display:none;"><div class="errorMsg" id="review-ugcollege_error" style="*float:left"></div></div>      
                        	<p style="color:#004080">(Minimum 250 characters)</p>
                        </div>
                    </div>

                    <div class="camp-review-sec clear-width" id="camp-review-sec">
                        <p class="form-title" style="margin-bottom:0;color:#004080;font-weight:bold">Title of Review <span>*</span></p> 
                        <p style="display:block;color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div class="write-review-sec">
                        <input id="titleReview" class="text-width" value="" name="titleReview" maxlength="100" minlength="25" caption="Title of the Review" validate="validateReviewFields" required type="text">
                        <div style="display:none;"><div class="errorMsg" id="titleReview_error" style="*float:left"></div></div>      
                        <p style="color:#004080">(Minimum 25 characters)</p>
                        </div>
                    </div>

                                    
                    <div style="margin-bottom:10px;">
                        <li>
                            <p class="l-txt" style="margin-bottom:5px; color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            <input class="recommendCollegeFlag" name="recommendCollegeFlag" value="YES" type="radio"> Yes
                            <input class="recommendCollegeFlag" name="recommendCollegeFlag" value="NO" type="radio"> No
                        </li>
                    </div>                
                                 
                                                 </div>
                        </div>
                        
                        
                        
                        
                        <div class="connect-form clear-width" style="margin-top:10px;">
    <div class="form-details">
        <p class="form-title" style="font-weight:bold">Personal Details</p>
        <p style="margin-bottom:15px; color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	    <div style="position:relative;">
            <ul>
                <li class="clear-width">
                  	<div class="flLt">
                   		<label>First Name <span>*</span></label>
                       	<input class="text-width" value="" id="firstname" name="firstname" maxlength="50" minlength="2" validate="validateFirstLastNameReviews" caption="First Name" required type="text">
						<div style="display:none;">
                            <div class="errorMsg" id="firstname_error" style="*float:left; width:280px"></div>
                        </div>  
                    </div>
                    <div class="flRt">
                        <label>Last Name <span>*</span></label>
                       	<input class="text-width" value="" id="lastname" name="lastname" maxlength="50" minlength="2" validate="validateFirstLastNameReviews" caption="Last Name" required type="text">
						<div style="display:none">
                            <div class="errorMsg" id="lastname_error" style="*float:left; width:280px"></div>
                        </div>  
				    </div>
				</li>
				
                <li class="clear-width">
					<div class="flLt">
                        <label>Personal Email ID <span>*</span></label>
                            						<input class="text-width" value="" id="email" name="email" validate="validateEmailReview" required caption="email address" maxlength="125" type="text">
    					    					<div style="display:none;">
                            <div class="errorMsg" id="email_error" style="*float:left"></div>
                        </div>
                    </div>

                    <div class="flRt">
                        <label>Facebook / LinkedIn Profile URL <span>*</span></label>
                        <p style="display:block; color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <input class="text-width" value="" name="facebookURL" id="facebookURL" validate="validateReviewFields" minlength="3" maxlength="200" required caption="Facebook/LinkedIn profile URL" type="text">
                        <div style="display:none;">
                            <div class="errorMsg" id="facebookURL_error" style="*margin-left:3px;"></div>
                        </div>
                    </div>
                </li>
                <li class="clear-width">
                    <div class="flLt">
                        <label>Mobile Number <span>*</span></label>
                        <p style="display:block;color:#004080"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <div style="width:16%;" class="flLt">                    
                            <select style="width:100%;border-right:none" class="select-width" required="true" validate="validateSelect" caption="ISD Code" id="isdCode" name="isdCode" onchange="changeMobileFieldmaxLength(this.value,'mobile');">
                                                                <option value="91-2"> India (+91)</option>
                                                                <option value="93-63"> Afghanistan (+93)</option>
                                                                <option value="355-64"> Albania (+355)</option>
                                                                <option value="213-65"> Algeria (+213)</option>
                                                                <option value="1-66"> American Samoa (+1)</option>
                                                                <option value="376-67"> Andorra (+376)</option>
                                                                <option value="244-68"> Angola (+244)</option>
                                                                <option value="1-69"> Anguilla (+1)</option>
                                                                <option value="672-70"> Antarctica (+672)</option>
                                                                <option value="1-71"> Antigua and Barbuda (+1)</option>
                                                                <option value="54-72"> Argentina (+54)</option>
                                                                <option value="374-33"> Armenia (+374)</option>
                                                                <option value="297-73"> Aruba (+297)</option>
                                                                <option value="61-5"> Australia (+61)</option>
                                                                <option value="43-47"> Austria (+43)</option>
                                                                <option value="994-74"> Azerbaijan (+994)</option>
                                                                <option value="1-75"> Bahamas (+1)</option>
                                                                <option value="973-60"> Bahrain (+973)</option>
                                                                <option value="880-51"> Bangladesh (+880)</option>
                                                                <option value="1-61"> Barbados (+1)</option>
                                                                <option value="375-76"> Belarus (+375)</option>
                                                                <option value="32-32"> Belgium (+32)</option>
                                                                <option value="501-77"> Belize (+501)</option>
                                                                <option value="229-78"> Benin (+229)</option>
                                                                <option value="1-79"> Bermuda (+1)</option>
                                                                <option value="975-80"> Bhutan (+975)</option>
                                                                <option value="591-81"> Bolivia (+591)</option>
                                                                <option value="387-82"> Bosnia and Herzegovina (+387)</option>
                                                                <option value="267-83"> Botswana (+267)</option>
                                                                <option value="55-84"> Brazil (+55)</option>
                                                                <option value="246-85"> British Indian Ocean Territory (+246)</option>
                                                                <option value="673-87"> Brunei Darussalam (+673)</option>
                                                                <option value="359-88"> Bulgaria (+359)</option>
                                                                <option value="226-89"> Burkina Faso (+226)</option>
                                                                <option value="257-90"> Burundi (+257)</option>
                                                                <option value="855-91"> Cambodia (+855)</option>
                                                                <option value="237-92"> Cameroon (+237)</option>
                                                                <option value="1-8"> Canada (+1)</option>
                                                                <option value="238-93"> Cape Verde (+238)</option>
                                                                <option value="1-94"> Cayman Islands (+1)</option>
                                                                <option value="236-95"> Central African Republic (+236)</option>
                                                                <option value="235-96"> Chad (+235)</option>
                                                                <option value="56-97"> Chile (+56)</option>
                                                                <option value="86-36"> China (+86)</option>
                                                                <option value="61-98"> Christmas Island (+61)</option>
                                                                <option value="891-99"> Cocos (Keeling) Islands (+891)</option>
                                                                <option value="57-100"> Colombia (+57)</option>
                                                                <option value="269-101"> Comoros (+269)</option>
                                                                <option value="242-108"> Republic of the Congo (+242)</option>
                                                                <option value="682-102"> Cook Islands (+682)</option>
                                                                <option value="506-103"> Costa Rica (+506)</option>
                                                                <option value="385-104"> Croatia (+385)</option>
                                                                <option value="53-105"> Cuba (+53)</option>
                                                                <option value="599-106"> Curacao (+599)</option>
                                                                <option value="357-50"> Cyprus (+357)</option>
                                                                <option value="420-107"> Czech Republic (+420)</option>
                                                                <option value="45-15"> Denmark (+45)</option>
                                                                <option value="253-109"> Djibouti (+253)</option>
                                                                <option value="1-110"> Dominica (+1)</option>
                                                                <option value="1-111"> Dominican Republic (+1)</option>
                                                                <option value="593-113"> Ecuador (+593)</option>
                                                                <option value="20-114"> Egypt (+20)</option>
                                                                <option value="503-115"> El Salvador (+503)</option>
                                                                <option value="240-116"> Equatorial Guinea (+240)</option>
                                                                <option value="291-117"> Eritrea (+291)</option>
                                                                <option value="372-42"> Estonia (+372)</option>
                                                                <option value="251-118"> Ethiopia (+251)</option>
                                                                <option value="500-119"> Falkland Islands (Malvinas) (+500)</option>
                                                                <option value="298-120"> Faroe Islands (+298)</option>
                                                                <option value="679-35"> Fiji (+679)</option>
                                                                <option value="358-121"> Finland (+358)</option>
                                                                <option value="33-12"> France (+33)</option>
                                                                <option value="689-122"> French Polynesia (+689)</option>
                                                                <option value="241-123"> Gabon (+241)</option>
                                                                <option value="220-124"> Gambia (+220)</option>
                                                                <option value="995-56"> Georgia (+995)</option>
                                                                <option value="49-9"> Germany (+49)</option>
                                                                <option value="233-125"> Ghana (+233)</option>
                                                                <option value="350-126"> Gibraltar (+350)</option>
                                                                <option value="30-40"> Greece (+30)</option>
                                                                <option value="299-127"> Greenland (+299)</option>
                                                                <option value="1-128"> Grenada (+1)</option>
                                                                <option value="1-129"> Guam (+1)</option>
                                                                <option value="502-130"> Guatemala (+502)</option>
                                                                <option value="44-131"> Guernsey (+44)</option>
                                                                <option value="224-132"> Guinea (+224)</option>
                                                                <option value="245-133"> Guinea-Bissau (+245)</option>
                                                                <option value="592-62"> Guyana (+592)</option>
                                                                <option value="509-134"> Haiti (+509)</option>
                                                                <option value="504-135"> Honduras (+504)</option>
                                                                <option value="852-57"> Hong Kong (+852)</option>
                                                                <option value="36-46"> Hungary (+36)</option>
                                                                <option value="354-136"> Iceland (+354)</option>
                                                                <option value="62-137"> Indonesia (+62)</option>
                                                                <option value="98-138"> Iran, Islamic Republic of (+98)</option>
                                                                <option value="964-139"> Iraq (+964)</option>
                                                                <option value="353-21"> Ireland (+353)</option>
                                                                <option value="44-140"> Isle of Man (+44)</option>
                                                                <option value="972-141"> Israel (+972)</option>
                                                                <option value="39-22"> Italy (+39)</option>
                                                                <option value="1-143"> Jamaica (+1)</option>
                                                                <option value="81-30"> Japan (+81)</option>
                                                                <option value="44-144"> Jersey (+44)</option>
                                                                <option value="962-145"> Jordan (+962)</option>
                                                                <option value="7-146"> Kazakhstan (+7)</option>
                                                                <option value="254-147"> Kenya (+254)</option>
                                                                <option value="686-148"> Kiribati (+686)</option>
                                                                <option value="965-150"> Kuwait (+965)</option>
                                                                <option value="996-151"> Kyrgyzstan (+996)</option>
                                                                <option value="371-153"> Latvia (+371)</option>
                                                                <option value="961-154"> Lebanon (+961)</option>
                                                                <option value="266-155"> Lesotho (+266)</option>
                                                                <option value="231-156"> Liberia (+231)</option>
                                                                <option value="218-157"> Libyan Arab Jamahiriya (+218)</option>
                                                                <option value="423-158"> Liechtenstein (+423)</option>
                                                                <option value="370-53"> Lithuania (+370)</option>
                                                                <option value="352-43"> Luxembourg (+352)</option>
                                                                <option value="853-159"> Macao (+853)</option>
                                                                <option value="389-160"> Macedonia (+389)</option>
                                                                <option value="261-161"> Madagascar (+261)</option>
                                                                <option value="265-162"> Malawi (+265)</option>
                                                                <option value="60-10"> Malaysia (+60)</option>
                                                                <option value="960-163"> Maldives (+960)</option>
                                                                <option value="223-164"> Mali (+223)</option>
                                                                <option value="356-59"> Malta (+356)</option>
                                                                <option value="692-165"> Marshall Islands (+692)</option>
                                                                <option value="222-166"> Mauritania (+222)</option>
                                                                <option value="230-41"> Mauritius (+230)</option>
                                                                <option value="262-167"> Mayotte (+262)</option>
                                                                <option value="52-168"> Mexico (+52)</option>
                                                                <option value="691-169"> Micronesia, Federated States of (+691)</option>
                                                                <option value="373-170"> Moldova, Republic of (+373)</option>
                                                                <option value="377-54"> Monaco (+377)</option>
                                                                <option value="976-171"> Mongolia (+976)</option>
                                                                <option value="382-172"> Montenegro (+382)</option>
                                                                <option value="1-173"> Montserrat (+1)</option>
                                                                <option value="212-174"> Morocco (+212)</option>
                                                                <option value="258-175"> Mozambique (+258)</option>
                                                                <option value="95-176"> Myanmar (+95)</option>
                                                                <option value="264-177"> Namibia (+264)</option>
                                                                <option value="674-178"> Nauru (+674)</option>
                                                                <option value="977-55"> Nepal (+977)</option>
                                                                <option value="31-14"> Netherlands (+31)</option>
                                                                <option value="687-180"> New Caledonia (+687)</option>
                                                                <option value="64-7"> New Zealand (+64)</option>
                                                                <option value="505-181"> Nicaragua (+505)</option>
                                                                <option value="227-182"> Niger (+227)</option>
                                                                <option value="234-183"> Nigeria (+234)</option>
                                                                <option value="683-184"> Niue (+683)</option>
                                                                <option value="850-185"> North Korea (+850)</option>
                                                                <option value="1-186"> Northern Mariana Islands (+1)</option>
                                                                <option value="47-27"> Norway (+47)</option>
                                                                <option value="968-187"> Oman (+968)</option>
                                                                <option value="92-188"> Pakistan (+92)</option>
                                                                <option value="680-189"> Palau (+680)</option>
                                                                <option value="970-190"> Palestinian Territory (+970)</option>
                                                                <option value="507-191"> Panama (+507)</option>
                                                                <option value="675-192"> Papua New Guinea (+675)</option>
                                                                <option value="595-193"> Paraguay (+595)</option>
                                                                <option value="51-194"> Peru (+51)</option>
                                                                <option value="63-49"> Philippines (+63)</option>
                                                                <option value="64-195"> Pitcairn (+64)</option>
                                                                <option value="48-25"> Poland (+48)</option>
                                                                <option value="351-26"> Portugal (+351)</option>
                                                                <option value="1-196"> Puerto Rico (+1)</option>
                                                                <option value="974-197"> Qatar (+974)</option>
                                                                <option value="82-38"> Republic of Korea (+82)</option>
                                                                <option value="262-199"> Reunion (+262)</option>
                                                                <option value="40-200"> Romania (+40)</option>
                                                                <option value="7-17"> Russian Federation (+7)</option>
                                                                <option value="250-201"> Rwanda (+250)</option>
                                                                <option value="590-202"> Saint Bartelemey (+590)</option>
                                                                <option value="290-203"> Saint Helena (+290)</option>
                                                                <option value="1-204"> Saint Kitts and Nevis (+1)</option>
                                                                <option value="1-205"> Saint Lucia (+1)</option>
                                                                <option value="590-206"> Saint Martin (+590)</option>
                                                                <option value="508-207"> Saint Pierre and Miquelon (+508)</option>
                                                                <option value="1-208"> Saint Vincent and the Grenadines (+1)</option>
                                                                <option value="685-209"> Samoa (+685)</option>
                                                                <option value="378-210"> San Marino (+378)</option>
                                                                <option value="239-211"> Sao Tome and Principe (+239)</option>
                                                                <option value="966-212"> Saudi Arabia (+966)</option>
                                                                <option value="221-213"> Senegal (+221)</option>
                                                                <option value="381-214"> Serbia (+381)</option>
                                                                <option value="248-215"> Seychelles (+248)</option>
                                                                <option value="232-216"> Sierra Leone (+232)</option>
                                                                <option value="65-6"> Singapore (+65)</option>
                                                                <option value="1-217"> Sint Maarten (+1)</option>
                                                                <option value="421-218"> Slovakia (+421)</option>
                                                                <option value="386-48"> Slovenia (+386)</option>
                                                                <option value="677-219"> Solomon Islands (+677)</option>
                                                                <option value="252-220"> Somalia (+252)</option>
                                                                <option value="27-45"> South Africa (+27)</option>
                                                                <option value="211-221"> South Sudan (+211)</option>
                                                                <option value="34-16"> Spain (+34)</option>
                                                                <option value="94-222"> Sri Lanka (+94)</option>
                                                                <option value="249-223"> Sudan (+249)</option>
                                                                <option value="597-224"> Suriname (+597)</option>
                                                                <option value="47-225"> Svalbard and Jan Mayen (+47)</option>
                                                                <option value="268-226"> Swaziland (+268)</option>
                                                                <option value="46-11"> Sweden (+46)</option>
                                                                <option value="41-13"> Switzerland (+41)</option>
                                                                <option value="963-227"> Syrian Arab Republic (+963)</option>
                                                                <option value="886-228"> Taiwan (+886)</option>
                                                                <option value="992-229"> Tajikistan (+992)</option>
                                                                <option value="255-230"> Tanzania (+255)</option>
                                                                <option value="66-31"> Thailand (+66)</option>
                                                                <option value="670-112"> Timor-Leste (+670)</option>
                                                                <option value="228-230"> Togo (+228)</option>
                                                                <option value="690-232"> Tokelau (+690)</option>
                                                                <option value="676-233"> Tonga (+676)</option>
                                                                <option value="1-234"> Trinidad and Tobago (+1)</option>
                                                                <option value="216-235"> Tunisia (+216)</option>
                                                                <option value="90-58"> Turkey (+90)</option>
                                                                <option value="993-236"> Turkmenistan (+993)</option>
                                                                <option value="1-237"> Turks and Caicos Islands (+1)</option>
                                                                <option value="688-238"> Tuvalu (+688)</option>
                                                                <option value="256-240"> Uganda (+256)</option>
                                                                <option value="380-44"> Ukraine (+380)</option>
                                                                <option value="971-18"> United Arab Emirates (+971)</option>
                                                                <option value="44-4"> United Kingdom (+44)</option>
                                                                <option value="1-3"> United States (+1)</option>
                                                                <option value="598-241"> Uruguay (+598)</option>
                                                                <option value="998-242"> Uzbekistan (+998)</option>
                                                                <option value="678-243"> Vanuatu (+678)</option>
                                                                <option value="58-245"> Venezuela (+58)</option>
                                                                <option value="84-246"> Vietnam (+84)</option>
                                                                <option value="681-247"> Wallis and Futuna (+681)</option>
                                                                <option value="212-248"> Western Sahara (+212)</option>
                                                                <option value="967-249"> Yemen (+967)</option>
                                                                <option value="260-250"> Zambia (+260)</option>
                                                                <option value="263-251"> Zimbabwe (+263)</option>
                                                            </select>
                            <div style="display:none;">
                                <div class="errorMsg" id="isdCode_error" style="float:left;width:100%;display:block"></div>
                            </div>
                        </div>
                    
                        <div style="float:left; width:31%;">
                        <!--<label>Mobile Number</label>-->                    
                            <input class="text-width" value="" id="mobile" name="mobile" validate="validateMobileIntegerReview" maxlength="10" minlength="10" caption="mobile" required style="width:112%;height:41px" type="text">
                        </div>
                        <div style="display:none;">
                            <div class="errorMsg" id="mobile_error" style="float:left; width:100%;"></div>
                        </div> 
                    </div>
                </li>				    
            </ul>
	    </div>
        
        
        <p><br/><a href="#" class="btn btn-theme" style="background-color:#004080; color:#FFF; font-weight:bold">Submit  Review</a></p>
				
               
       
					
		<div class="clear-width" style="margin-top:20px;">
		    <p><a href="#" onclick="$j('#privacy_content').show(); return false;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></p>
            <div id="privacy_content" class="privacy-content" style="display:none;">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
                <p><input class="flLt" name="anonymous" value="YES" id="anonymousFlag" type="checkbox"> &nbsp;Post as anonymous</p>
            </div>
		</div>
				  
		<div class="clearFix"></div>
		<p style="position: relative;margin-top:20px"> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		<div class="clearFix"></div>
              
        <input name="incentiveFlag" id="incentiveFlag" value="0" type="hidden">
				
		    </div>
</div>
           
     </div>
 </div>
 @include('shiksha/include/footer')