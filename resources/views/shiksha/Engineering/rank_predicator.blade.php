  @include('shiksha/include/header')
<section>
 <div class="container">
    <div class="row exam" style="background:#fff; margin-top:98px">
    <div class="cool-md-10">
    
      <div id="content-child-wrap">
			
            <div id="predictor-wrap">
             
                	
	<div class="predictor-rank-box" style="display:none;margin-top: 11px;" id="predictorRrank-rest">
	<div class="flLt predictor-title-box" style="margin-top:10px;width:auto;">
	<p class="font-24">COMEDK Rank Predictor</p>
		<ul class="board-score-sec">
		<li>Your COMEDK Score: <strong id="_score"></strong></li>
		<li style="margin:0; float:right"><a href="javascript:void(0);" onclick="$j('#restForm-box').slideDown(400);$j(this).hide();" class="predcit-reset-btn" id="predcit-reset-btn" style="display: none;">            Reset</a></li>
        </ul>
		</div>
    </div>
	
	<div class="predictor-rank-box" style="margin-top: 11px;" id="predictorRank-header">
		<div class="flLt predictor-title-box " style="margin-top:10px;">
		<h1 class="font-24">COMEDK Rank Predictor</h1>
		<p>Predict your COMEDK 2017 rank based on your actual/expected score. 
        <span class="predictor-info" onmouseover="$j('#tooltipText').show();" onmouseout="$j('#tooltipText').hide();">i</span></p>
		<div class="predict-tooltip" style="display:none" id="tooltipText">
			You can calculate your expected score using the COMEDK 2017 Answer Key		</div>
	    </div>
		</div>		
  <div id="addForm">
       <div class="predictor-rank-box">
    <div class="predictor-rank-form flLt">
	<h2 style="color:#004080; font-weight:bold">Enter the information below and get your predicted COMEDK rank. We will also show you which colleges you could get into basis your rank:</h2>
	<div style="text-align: left !important;">
           <form action="/registration/Registration/register" id="registrationForm_xLCAiB" novalidate method="post">
<ul>
<li>
                            	<div class="predictor-column flLt">
                                	<label style="color:#004080;" >COMEDK Score </label><br>
                                	<input class="predictor-textfield" id="rankPredictor_ScorexLCAiB" name="rankPredictor_Score" maxlength="3" minlength="1" validate="validateInteger" caption="valid score" required type="text" style="width:100%">
				    <div style="display:none;" id="scrError"><div class="predictor-errmsg" id="rankPredictor_ScorexLCAiB_error"></div></div>
                                </div>
				
				<div class="predictor-column flRt" id="residenceCity_block_xLCAiB" blockfor="residenceCity" visible="Yes" style="">
                                	<label style="color:#004080;">Current City</label><br>
                                	                                        <span id="residentCityParentDiv_xLCAiB">
                                        <select class="predictor-select-field" id="residenceCityLocality_xLCAiB" onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this)" caption="city of residence"                     label="Residence Location" mandatory="1" regfieldid="residenceCityLocality" name="residenceCityLocality" validate="validateSelect" required="true">
					    <option value="" >Select City</option>
                          <optgroup label="Chandigarh Tricity"><option value="63">Chandigarh</option><option value="12286">Mohali</option><option value="12285">Panchkula</option></optgroup><optgroup label="Mumbai (All)"><option value="151">Mumbai</option><option value="158">Navi Mumbai</option><option value="838">Thane</option></optgroup><optgroup label="Delhi/NCR"><option value="1113">Alwar</option><option value="10644">Baghpat</option><option value="10648">Bahadurgarh</option><option value="10649">Bhiwadi</option><option value="10645">Bulandshahr</option><option value="74">Delhi</option><option value="10653">Delhi - Other</option><option value="84">Faridabad</option><option value="87">Ghaziabad</option><option value="1616">Greater Noida</option><option value="95">Gurgaon</option><option value="10646">Hapur</option><option value="10647">Jhajjar</option><option value="10632">Karnal</option><option value="146">Meerut</option><option value="10650">Neemrana</option><option value="161">Noida</option><option value="166">Panipat</option><option value="181">Rohtak</option><option value="2631">Sonepat</option></optgroup><optgroup label="Metro Cities"><option value="278">Bangalore</option><option value="64">Chennai</option><option value="74">Delhi</option><option value="702">Hyderabad</option><option value="130">Kolkata</option><option value="151">Mumbai</option><option value="174">Pune</option></optgroup><optgroup label="Andaman Nicobar Islands"><option value="10210">Andaman Nicobar Islands</option></optgroup><optgroup label="Andhra Pradesh"><option value="39">Anantapur</option><option value="40">Andhra Pradesh - Other</option><option value="703">Chittoor</option><option value="12238">East Godavari</option><option value="94">Guntur</option><option value="10178">Kadapa</option><option value="12181">Kakinada</option><option value="12241">Krishna</option><option value="136">Kurnool</option><option value="159">Nellore</option><option value="12236">Prakasam</option><option value="12177">Rajahmundry</option><option value="197">Tirupati</option><option value="212">Vijayawada</option><option value="213">Visakhapatnam</option><option value="12182">Vizianagaram</option><option value="12237">West Godavari</option></optgroup><optgroup label="Arunachal Pradesh"><option value="42">Arunachal Pradesh - Other</option><option value="107">Itanagar</option></optgroup><optgroup label="Assam"><option value="44">Assam - Other</option><option value="732">Dibrugarh</option><option value="10188">Dispur</option><option value="96">Guwahati</option><option value="10633">Jorhat</option><option value="10642">Nagaon</option><option value="11514">North Lakhimpur</option><option value="10634">Silchar</option><option value="1048">Tezpur</option></optgroup><optgroup label="Bihar"><option value="10635">Arrah</option><option value="736">Bhagalpur</option><option value="59">Bihar - Other</option><option value="734">Gaya</option><option value="10636">Hajipur</option><option value="737">Muzaffarpur</option><option value="1019">Nalanda</option><option value="171">Patna</option><option value="10189">Rajgir</option><option value="2769">Vaishali</option></optgroup><optgroup label="Chandigarh"><option value="63">Chandigarh</option></optgroup><optgroup label="Chhattisgarh"><option value="749">Bhilai</option><option value="10613">BilasPur</option><option value="10684">Bilaspur(CG)</option><option value="10504">Chhattisgarh - Other</option><option value="12260">Chirimiri</option><option value="12258">Korba</option><option value="12269">Raigarh</option><option value="176">Raipur</option></optgroup><optgroup label="Dadra And Nagar Haveli"><option value="10516">Dadra And Nagar Haveli - Other</option><option value="70">Silvassa</option></optgroup><optgroup label="Daman &amp; Diu"><option value="72">Daman &amp; Diu</option></optgroup><optgroup label="Delhi"><option value="74">Delhi</option><option value="10653">Delhi - Other</option></optgroup><optgroup label="Goa"><option value="10197">Canacona</option><option value="89">Goa - Other</option><option value="2078">Mapusa</option><option value="2080">Margao</option><option value="10198">Old Goa</option><option value="2298">Panaji</option><option value="2368">Ponda</option><option value="210">Vasco Da Gama</option></optgroup><optgroup label="Gujarat"><option value="10585">Adipur</option><option value="30">Ahmedabad</option><option value="38">Anand</option><option value="10641">Bharuch</option><option value="10586">Bhavnagar</option><option value="10626">Gandhidham</option><option value="85">Gandhinagar</option><option value="91">Gujarat - Other</option><option value="115">Jamnagar</option><option value="10614">Kutch District</option><option value="10643">Navsari</option><option value="179">Rajkot</option><option value="192">Surat</option><option value="2767">Vadodara</option><option value="12257">Vapi</option></optgroup><optgroup label="Haryana"><option value="36">Ambala</option><option value="10648">Bahadurgarh</option><option value="84">Faridabad</option><option value="95">Gurgaon</option><option value="99">Haryana - Other</option><option value="101">Hisar</option><option value="10647">Jhajjar</option><option value="765">Kaithal</option><option value="10632">Karnal</option><option value="137">Kurukshetra</option><option value="914">Murthal</option><option value="12285">Panchkula</option><option value="166">Panipat</option><option value="10638">Rewari</option><option value="181">Rohtak</option><option value="2631">Sonepat</option><option value="2823">Yamuna Nagar</option></optgroup><optgroup label="Himachal Pradesh"><option value="10200">Dharamsala</option><option value="11512">Hamirpur</option><option value="100">Himachal Pradesh - Other</option><option value="776">Kullu</option><option value="10199">Manali</option><option value="775">Mandi</option><option value="186">Shimla</option><option value="10505">Sirmour</option><option value="770">Solan</option><option value="10637">Una</option></optgroup><optgroup label="Jammu and Kashmir"><option value="10201">Gulmarg</option><option value="113">Jammu</option><option value="114">Jammu &amp; Kashmir - Other</option><option value="1972">Ladakh</option><option value="1989">Leh</option><option value="10202">Pahalgam</option><option value="191">Srinagar</option></optgroup><optgroup label="Jharkhand"><option value="10184">Bokaro Steel City</option><option value="76">Dhanbad</option><option value="12255">Hazaribagh</option><option value="116">Jamshedpur</option><option value="117">Jharkhand - Other</option><option value="11513">Ramgarh</option><option value="180">Ranchi</option></optgroup><optgroup label="Karnataka"><option value="278">Bangalore</option><option value="49">Belgaum</option><option value="58">Bidar</option><option value="796">Bijapur</option><option value="10509">Chikballpura</option><option value="808">Chitradurga</option><option value="10510">Coorg</option><option value="806">Davangere</option><option value="78">Dharwad</option><option value="10511">Doballapura</option><option value="92">Gulbarga</option><option value="10190">Hampi</option><option value="815">Hassan</option><option value="280">Hoskote</option><option value="103">Hubli</option><option value="124">Karnataka - Other</option><option value="143">Mangalore</option><option value="261">Manipal</option><option value="153">Mysore</option><option value="727">Raichur</option><option value="807">Shimoga</option><option value="728">Tumkur</option><option value="812">Udupi</option></optgroup><optgroup label="Kerala"><option value="10191">Alleppey</option><option value="10596">Amritapuri</option><option value="62">Calicut</option><option value="11917">Ernakulum</option><option value="10513">Idukki</option><option value="10512">Kannur</option><option value="10514">Kasargode</option><option value="125">Kerala - Other</option><option value="127">Kochi</option><option value="131">Kollam</option><option value="133">Kottayam</option><option value="10193">Kovalam</option><option value="787">Kozhikode</option><option value="10192">Kumarakom</option><option value="10194">Munnar</option><option value="12242">Palakkad</option><option value="2326">Pathanamthitta</option><option value="10196">Thekkady</option><option value="757">Thiruvananthapuram</option><option value="10515">Thrissur</option><option value="12140">Trivandrum</option><option value="1059">Wayanad</option></optgroup><optgroup label="Lakshadweep"><option value="1980">Lakshadweep</option></optgroup><optgroup label="Madhya Pradesh"><option value="55">Bhopal</option><option value="11515">Dewas</option><option value="97">Gwalior</option><option value="106">Indore</option><option value="108">Jabalpur</option><option value="10204">Khajuraho</option><option value="140">Madhya Pradesh - Other</option><option value="10203">Orchha</option><option value="10615">Sagar</option><option value="12256">Singrauli</option><option value="203">Ujjain</option></optgroup><optgroup label="Maharashtra"><option value="31">Ahmednagar</option><option value="822">Akola</option><option value="823">Amravati</option><option value="45">Aurangabad</option><option value="11516">Baramati</option><option value="12252">Chandrapur</option><option value="821">Dhule</option><option value="112">Jalgaon</option><option value="129">Kolhapur</option><option value="848">Latur</option><option value="142">Maharashtra - Other</option><option value="151">Mumbai</option><option value="156">Nagpur</option><option value="847">Nanded</option><option value="849">Nashik</option><option value="158">Navi Mumbai</option><option value="846">Parbhani</option><option value="174">Pune</option><option value="839">Raigad</option><option value="10640">Raigarh Pen</option><option value="12243">Ratnagiri</option><option value="833">Sangli</option><option value="835">Satara</option><option value="12185">Shirpur</option><option value="190">Solapur</option><option value="838">Thane</option><option value="12259">Ulhasnagar</option><option value="840">Wardha</option><option value="2825">Yavatmal</option></optgroup><optgroup label="Manipur"><option value="105">Imphal</option><option value="144">Manipur - Other</option></optgroup><optgroup label="Meghalaya"><option value="147">Meghalaya - Other</option><option value="185">Shillong</option></optgroup><optgroup label="Mizoram"><option value="1100">Aizawl</option><option value="148">Mizoram - Other</option></optgroup><optgroup label="Nagaland"><option value="1918">Kohima</option><option value="154">Nagaland - Other</option></optgroup><optgroup label="Orissa"><option value="12253">Angul</option><option value="912">Bhubaneswar</option><option value="12262">Brahmapur</option><option value="69">Cuttack</option><option value="861">Ganjam</option><option value="12254">Jajpur</option><option value="10205">Konark</option><option value="163">Orissa - Other</option><option value="175">Puri</option><option value="183">Rourkela</option><option value="12267">Sambalpur</option></optgroup><optgroup label="Pondicherry"><option value="172">Pondicherry</option></optgroup><optgroup label="Punjab"><option value="37">Amritsar</option><option value="48">Bathinda</option><option value="864">Faridkot</option><option value="1546">Ferozpur</option><option value="12289">Hoshiarpur</option><option value="111">Jalandhar</option><option value="139">Ludhiana</option><option value="2113">Moga</option><option value="12286">Mohali</option><option value="2144">Muktsar</option><option value="12251">Nangal</option><option value="10506">Nawanshahar</option><option value="865">Patiala</option><option value="10631">Phagwara</option><option value="916">Punjab - Other</option><option value="12290">Ropar</option></optgroup><optgroup label="Rajasthan"><option value="33">Ajmer</option><option value="1113">Alwar</option><option value="10630">Bharatpur</option><option value="1293">Bhilwara</option><option value="10649">Bhiwadi</option><option value="1313">Bikaner</option><option value="1351">Bundi</option><option value="109">Jaipur</option><option value="110">Jaisalmer</option><option value="12240">Jhunjhunu</option><option value="118">Jodhpur</option><option value="132">Kota</option><option value="10650">Neemrana</option><option value="10672">Pilani</option><option value="178">Rajasthan - Other</option><option value="10207">Ranakpur</option><option value="10208">Shekhawati</option><option value="12175">Sikar</option><option value="10507">Sriganaganagar</option><option value="202">Udaipur</option></optgroup><optgroup label="Sikkim"><option value="86">Gangtok</option><option value="187">Sikkim - Other</option></optgroup><optgroup label="Tamil Nadu"><option value="64">Chennai</option><option value="67">Coimbatore</option><option value="12375">Dharmapuri</option><option value="82">Erode</option><option value="12287">Hosur</option><option value="1820">Kanchipuram</option><option value="1827">Kanyakumari</option><option value="10679">Karaikudi</option><option value="999">Karur</option><option value="870">Kodaikanal</option><option value="141">Madurai</option><option value="155">Nagercoil</option><option value="12234">Namakkal</option><option value="12261">Neyveli</option><option value="162">Ooty</option><option value="10209">Rameshwaram</option><option value="184">Salem</option><option value="193">Tamil Nadu - Other</option><option value="194">Thanjavur</option><option value="915">Tiruchirappalli</option><option value="196">Tirunelveli</option><option value="211">Vellore</option><option value="12239">Virudhunagar</option></optgroup><optgroup label="Telangana"><option value="702">Hyderabad</option><option value="998">Karimnagar</option><option value="699">Khammam</option><option value="12178">Medak</option><option value="12179">Nalgonda</option><option value="160">Nizamabad</option><option value="12235">Ranga Reddy</option><option value="713">Secunderabad</option><option value="12180">Telangana-Other</option><option value="214">Warangal</option></optgroup><optgroup label="Tripura"><option value="28">Agartala</option><option value="199">Tripura - Other</option></optgroup><optgroup label="Uttar Pradesh"><option value="29">Agra</option><option value="34">Aligarh</option><option value="35">Allahabad</option><option value="10644">Baghpat</option><option value="47">Bareilly</option><option value="10645">Bulandshahr</option><option value="10508">Dadri</option><option value="87">Ghaziabad</option><option value="1577">Ghazipur</option><option value="90">Gorakhpur</option><option value="1616">Greater Noida</option><option value="10646">Hapur</option><option value="893">Jaunpur</option><option value="12263">Jhansi</option><option value="122">Kanpur</option><option value="138">Lucknow</option><option value="145">Mathura</option><option value="146">Meerut</option><option value="887">Modinagar</option><option value="150">Moradabad</option><option value="10675">Muzaffarnagar</option><option value="161">Noida</option><option value="888">Saharanpur</option><option value="205">Uttar Pradesh - Other</option><option value="209">Varanasi</option></optgroup><optgroup label="Uttarakhand"><option value="73">Dehradun</option><option value="10683">Haldwani</option><option value="1651">Haridwar</option><option value="2179">Nainital</option><option value="901">Rishikesh</option><option value="182">Roorkee</option><option value="11511">Rudrapur</option><option value="10248">Uttarakhand - Other</option></optgroup><optgroup label="West Bengal"><option value="12265">Asansol</option><option value="906">Bardhaman</option><option value="1456">Darjeeling</option><option value="1092">District 24 Parganas</option><option value="80">Durgapur</option><option value="98">Haldia</option><option value="905">Howrah</option><option value="10639">Kalyani</option><option value="126">Kharagpur</option><option value="130">Kolkata</option><option value="11510">Malda</option><option value="1011">Midnapore</option><option value="911">Murshidabad</option><option value="12266">Naihati</option><option value="12264">Serampore</option><option value="189">Siliguri</option><option value="215">West Bengal - Other</option></optgroup>                                         </select>
                                <div><div id="residenceCityLocality_xLCAiB_error" class="predictor-errmsg"></div></div>
                            </span>
                            <span id="emptyResidentCity_xLCAiB" style="display:none;">
                             <select class="predictor-select-field">
                                <option value="-1"> City not required </option>
                             </select>
                                </span></div>
                                <div class="clearFix"></div>
                            </li>
                            <li>
				<div class="predictor-column flLt" id="firstName_block_xLCAiB" blockfor="firstName" visible="Yes" style="">
                                	<label style="color:#004080;">First Name </label><br>
                                        <input name="firstName" id="firstName_xLCAiB" regfieldid="firstName" class="predictor-textfield" minlength="1" validate="validateDisplayName" maxlength="50" caption="first Name" profanity="1" mandatory="1" label="first name" onfocus="shikshaUserRegistrationForm['xLCAiB'].removeHelpText(this);" onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this); shikshaUserRegistrationForm['xLCAiB'].restoreHelpText(this);" required type="text" style="width:100%">
					<div><div class="predictor-errmsg" id="firstName_xLCAiB_error"></div></div>
                                </div>
				
                            	<div class="predictor-column flRt" id="lastName_block_xLCAiB" blockfor="lastName" visible="Yes" style="">
                                	<label style="color:#004080;">Last Name</label><br>                                        
                                         <input name="lastName" id="lastName_xLCAiB" regfieldid="lastName" class="predictor-textfield" minlength="1" validate="validateDisplayName" maxlength="50" caption="last Name" profanity="1" mandatory="1" label="last name" onfocus="shikshaUserRegistrationForm['xLCAiB'].removeHelpText(this);" onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this); shikshaUserRegistrationForm['xLCAiB'].restoreHelpText(this);" required type="text" style="width:100%">
                                        
				    <div><div class="predictor-errmsg" id="lastName_xLCAiB_error"></div></div>
                                </div>
                                <div class="clearFix"></div>
                            </li>
                            <li>
				<div class="predictor-column flLt" id="email_block_xLCAiB" blockfor="email" visible="Yes" style="">
                                	<label style="color:#004080;">Email ID</label><br>	
                                        <input name="email" id="email_xLCAiB" regfieldid="email" class="predictor-textfield" maxlength="125" validate="validateEmail" caption="email id" mandatory="1" label="email" onfocus="shikshaUserRegistrationForm['xLCAiB'].removeHelpText(this);" onblur="if(typeof(registration_context) != 'undefined' &amp;&amp; registration_context == 'MMP') { delete registration_context; }shikshaUserRegistrationForm['xLCAiB'].validateField(this); shikshaUserRegistrationForm['xLCAiB'].restoreHelpText(this);" required autocomplete="off" type="text" style="width:100%">
                                        
				    <div id="email_rprxLCAiB"><div class="predictor-errmsg" id="email_xLCAiB_error"></div></div>
                                </div>
				
                            	<div class="predictor-column flRt">
                                    <div style="width:100%" class="flLt" id="isdCode_block_xLCAiB" blockfor="isdCode" visible="Yes">

                            
                            <label style="color:#004080;">Country Code </label><br>
                            <select class="predictor-select-field" style="width:100%" name="isdCode" id="isdCode_xLCAiB" onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this)" required="true" validate="validateSelect" caption="ISD Code" onmouseover="showTipOnline('Please select your ISD Code',this);" onmouseout="hidetip();" onchange="changeMobileFieldmaxLength(this.value, 'mobile_xLCAiB');shikshaUserRegistrationForm['xLCAiB'].changeMenteeForm(this.value);">
                                               
                                                            <option value="91-2" style="color:#004080;"> India (+91)</option>
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
                            <div style="display:none;"><div class="errorMsg" id="isdCode_xLCAiB_error" style="width:80%;"></div></div>
                        </div>
                        <div style="width:48%" class="flRt" id="mobile_block_xLCAiB" blockfor="mobile" visible="Yes">
                                	<label style="color:#004080;">Mobile No.</label><br>
                                        <input name="mobile" id="mobile_xLCAiB" regfieldid="mobile" class="predictor-textfield" maxlength="10" validate="validateMobileInteger" minlength="10" caption="mobile no" mandatory="1" label="Mobile" onfocus="shikshaUserRegistrationForm['xLCAiB'].removeHelpText(this);" onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this); shikshaUserRegistrationForm['xLCAiB'].restoreHelpText(this);" required autocomplete="off" type="text" style="width:100%">
                                        <div><div class="predictor-errmsg" id="mobile_xLCAiB_error"></div></div>
                                </div>
                                <div class="clearFix"></div>
                            </div>
                            </li>

                            <li>
                
                <div style="position:relative;" class="predictor-column flLt" id="password_block_xLCAiB" blockfor="password" visible="Yes">
                    <label style="color:#004080;">Password</label><br>  
                    <div class="predictor-textfield ph">                                      
                        <input class="pred-passFld" name="password" caption="password" id="password_xLCAiB" regfieldid="password" validate="validateStr" minlength="6" maxlength="25" mandatory="1" label="Password" required onblur="shikshaUserRegistrationForm['xLCAiB'].validateField(this);" style="color:#111111;" type="password">
                    </div>
                    <p class="hideTextPredictor" onclick="toggleShowPassword(this);" style="color:#004080;">Show</p>               
                    <div>
                        <div class="predictor-errmsg" id="password_xLCAiB_error"></div>
                    </div>
                </div>
                
                <div class="clearFix"></div>

            </li>

                            <li style="text-align: center !important; font-weight:bold;color:#004080; width:44%">
                            	<a href="javascript:void(0);" class="predict-rank-btn" id="registrationSubmit_xLCAiB" onclick="$j('#registrationSubmit_xLCAiB').addClass('disabled');if(validateFields($('registrationForm_xLCAiB')) != true){$j('#registrationSubmit_xLCAiB').removeClass('disabled');return false;}else{if(validateScore('xLCAiB') !=true){$j('#registrationSubmit_xLCAiB').removeClass('disabled');return false;}else{rankNewUser('xLCAiB');}}">Predict COMEDK Rank</a>
                            </li>
                            
                            <!-- <input type="hidden" value="" name="fieldOfInterest" id="fieldOfInterest_">
                            <input type="hidden" value="" name="desiredCourse" id="desiredCourse_"> -->
                            <input value="2" name="stream" id="stream_xLCAiB" type="hidden">
                            <input value="10" name="baseCourses[]" id="baseCourseField_xLCAiB" type="hidden">
                            <input value="20" name="educationType[]" id="educationType_xLCAiB" type="hidden">
                            <input value="2015" name="xiiYear" id="xiiYear_xLCAiB" type="hidden">
                            <input value="COMED_K" name="exams[]" id="COMED-K_xLCAiB" type="hidden">
                            <input name="COMED_K_scoreType" value="Rank" type="hidden">
                            <input name="flow" value="course" type="hidden">
                            
</ul>

<input id="regFormId" name="regFormId" value="xLCAiB" type="hidden">
<input id="context_xLCAiB" name="context" value="rankPredictor" type="hidden">
<input id="isStudyAbroad" name="isStudyAbroad" value="no" type="hidden">
<input id="registrationSource" name="registrationSource" value="MARKETING_FORM" type="hidden">
<input id="referrer" name="referrer" value="https://www.shiksha.com/comedk-rank-predictor" type="hidden">
<input id="fieldsView" name="fieldsView" value="default" type="hidden">
<input id="isMR" name="isMR" value="YES" type="hidden">
<input id="isCompareEmail" name="isCompareEmail" value="" type="hidden">
<input id="userVerification_xLCAiB" name="userVerification" value="no" type="hidden">
<input id="inlineForm_xLCAiB" name="inlineForm" value="true" type="hidden">
<input id="tracking_keyid_xLCAiB" name="tracking_keyid" value="185" type="hidden">
</form>

</div>

    </div>
    <div class="clearFix"></div>
</div></div>
		                
<div class="predictor-rank-box predicted-rank" style="display:none;" id="predicted-Layer">
	<p class="font-24 flLt" id="_showResult">Your Predicted Rank:<strong class="font-30" id="predicted-rank" style="vertical-align: middle;color:#1b1b1b;">&nbsp;<img style="padding-top: 2px;" src="{{url('/shiksha/assets/images/loader_hpg.gif')}}" border="0"></strong></p>
        <div class="flLt" style="width:100%; margin-top:3px;">
	<span class="flLt helpful-text">Is this information helpful?</span>
	<div class="vote-section flLt" style="margin-top:0;">
		<a class="rankhelpful" style="margin-right:10px; text-decoration: none;" href="javascript:void(0);" onclick="sendRankFeedback('1','rate','rankPredictor')"><i class="predictor-sprite upVote-icon" id="yes"></i> Yes</a>
		<a class="rankhelpful" style="text-decoration: none;" href="javascript:void(0);" onclick="sendRankFeedback('0','rate','rankPredictor')"><i class="predictor-sprite dwnVote-icon" id="no"></i> No</a>
	</div>
    </div>
    <div id="thankMsg" style="display: none;" class="helpful-text thnku-msg clearFix flLt"></div>
        <div class="clearFix"></div>
    <div class="predict-disclaimer-txt" id="disclaimer-onresult" style="color:#004080">Disclaimer: Please note that the predicted rank is only for reference. Shiksha.com does not take any responsibility for the validity of the predictions and analysis shown abo..	 
     <a href="javascript:void(0);" onclick="openDisclaimer();" style="text-decoration: none;">View More</a>
    <span style="display: none;" id="disc_more">Disclaimer: Please note that the predicted rank is only for reference. Shiksha.com does not take any responsibility for the validity of the predictions and analysis shown above. Predicted rank is based on COMEDK 2013 scores. Your final rank may vary depending on actual performance of candidates in COMEDK 2016.</span>
    </div>
</div>
	

<div class="result-container" id="predictor-container" style="display:block;">
	<h2 class="rankPredictorTitle" id="_container-heading" style="color:#004080; font-size:22px">Closing COMEDK Rank of Top Engineering Colleges</h2>
	<p id="_nocollege" style="display: none; font-size: 16px;color: #999;"></p>
	<div id="predictor-result">
		<div class="result-right-col" style="margin:0px !important" ;="">

                   	<table id="cp_data_table" class="search-result-table" style="" cellspacing="0" cellpadding="0">
                       	<tbody><tr>
                           	
                              			<th width="38%">College Name</th>
			<th width="32%">Branch Name</th>
		                                                              <th width="13%">Location</th>
			       				
                               <th width="17%">
				<div style="position:relative;">
							<span class="flLt">Closing </span>
												</div>
				</th>
                           </tr>
                              
     <script>brochureDisable = 'false';</script>                           <tr class="">
			
          <td>
			<p style="color:#004080;">R V College of Architecture</p>
	    
	                <!-----------------Add--to-compare--tool--------------------------->
		        
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">Architecture </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item">173</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                           <tr class="alt-rowbg">
			
          <td>
			<p><a href="https://www.shiksha.com/college/bms-college-of-engineering-basavanagudi-bangalore-397">BMS College of Engineering</a></p>

						
			  <a id="courseid_202490_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('202490_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('202490_1');}" onclick="			 responseForm.showResponseForm('202490',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'202490'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_202490_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 202490 ,'instituteId':397,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare397-202490" class="addToCompareOnCollegePredictorCheckBox compare397-202490" value="397:: ::::BMS College of Engineering, Bangalore::202490::https://www.shiksha.com/architecture-planning/course/b-arch-bms-college-of-engineering-basavanagudi-bangalore-202490" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 202490 ,'instituteId':397,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare397-202490lable" class="addToCompareOnCollegePredictor compare397-202490lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare397-202490list[]" value="202490" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-bms-college-of-engineering-basavanagudi-bangalore-202490" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">219</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                         
       <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/m-s-ramaiah-institute-of-technology-80-ft-road-bangalore-474">M.S. Ramaiah Institute of Technology</a></p>

						
			  <a id="courseid_233202_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('233202_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('233202_1');}" onclick="			 responseForm.showResponseForm('233202',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'233202'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_233202_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 233202 ,'instituteId':474,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare474-233202" class="addToCompareOnCollegePredictorCheckBox compare474-233202" value="474:: ::::M. S. Ramaiah Institute of Technology, Bangalore::233202::https://www.shiksha.com/architecture-planning/course/b-arch-m-s-ramaiah-institute-of-technology-80-ft-road-bangalore-233202" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 233202 ,'instituteId':474,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare474-233202lable" class="addToCompareOnCollegePredictor compare474-233202lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare474-233202list[]" value="233202" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-m-s-ramaiah-institute-of-technology-80-ft-road-bangalore-233202" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">333</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                    
            <tr class="alt-rowbg">
			
          <td>
			<p><a href="https://www.shiksha.com/college/r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-487">R.V. College of Engineering</a></p>

						
			  <a id="courseid_2404_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('2404_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('2404_1');}" onclick="			 responseForm.showResponseForm('2404',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'2404'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_2404_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 2404 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare487-2404" class="addToCompareOnCollegePredictorCheckBox compare487-2404" value="487:: ::::R.V. College of Engineering, Rashtreeya Sikshana Samithi Trust, Bangalore::2404::https://www.shiksha.com/b-tech/course/b-e-in-computer-science-and-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2404" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 2404 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare487-2404lable" class="addToCompareOnCollegePredictor compare487-2404lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare487-2404list[]" value="2404" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/b-tech/course/b-e-in-computer-science-and-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2404" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Computer Science Engineering</a>
            </td>
      
                           	                               <td style="color:#004080;"> Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">473</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                          
      <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/dayananda-sagar-college-of-engineering-dsce-banashankari-bangalore-28374">Dayanand Sagar College of Engineering</a></p>

						
			  <a id="courseid_236760_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('236760_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('236760_1');}" onclick="			 responseForm.showResponseForm('236760',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'236760'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_236760_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 236760 ,'instituteId':28374,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare28374-236760" class="addToCompareOnCollegePredictorCheckBox compare28374-236760" value="28374:: ::::Dayananda Sagar College of Engineering (DSCE), Bangalore::236760::https://www.shiksha.com/architecture-planning/course/b-arch-dayananda-sagar-college-of-engineering-dsce-banashankari-bangalore-236760" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 236760 ,'instituteId':28374,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare28374-236760lable" class="addToCompareOnCollegePredictor compare28374-236760lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare28374-236760list[]" value="236760" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-dayananda-sagar-college-of-engineering-dsce-banashankari-bangalore-236760" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">511</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                          
      <tr class="alt-rowbg">
			
          <td>
			<p style="color:#004080;">BMS School of Architecture</p>
	    
	                <!-----------------Add--to-compare--tool--------------------------->
		        
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://bmssa.ac.in/academics.html" target="_blank" rel="nofollow" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item"style="color:#004080;">568</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                     
           <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-487">R.V. College of Engineering</a></p>

						
			  <a id="courseid_2411_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('2411_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('2411_1');}" onclick="			 responseForm.showResponseForm('2411',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'2411'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_2411_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 2411 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare487-2411" class="addToCompareOnCollegePredictorCheckBox compare487-2411" value="487:: ::::R.V. College of Engineering, Rashtreeya Sikshana Samithi Trust, Bangalore::2411::https://www.shiksha.com/b-tech/course/b-e-in-information-science-and-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2411" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 2411 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare487-2411lable" class="addToCompareOnCollegePredictor compare487-2411lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare487-2411list[]" value="2411" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/b-tech/course/b-e-in-information-science-and-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2411" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Information Science and Engineering</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">756</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                       
         <tr class="alt-rowbg">
			
          <td>
			<p style="color:#004080;">Dayanand Sagar Academy of Technology and Management</p>
	    
	                <!-----------------Add--to-compare--tool--------------------------->
		        
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">Architecture</td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">935</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>   
      <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/b-v-bhoomaraddi-college-of-engineering-and-technology-hubli-2694">K.L.E. Technological University</a></p>

						
			  <a id="courseid_197932_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('197932_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('197932_1');}" onclick="			 responseForm.showResponseForm('197932',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'197932'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_197932_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 197932 ,'instituteId':2694,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare2694-197932" class="addToCompareOnCollegePredictorCheckBox compare2694-197932" value="2694:: ::::B.V. Bhoomaraddi College of Engineering and Technology, Hubli::197932::https://www.shiksha.com/architecture-planning/course/b-arch-b-v-bhoomaraddi-college-of-engineering-and-technology-hubli-197932" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 197932 ,'instituteId':2694,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare2694-197932lable" class="addToCompareOnCollegePredictor compare2694-197932lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare2694-197932list[]" value="197932" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-b-v-bhoomaraddi-college-of-engineering-and-technology-hubli-197932" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Hubli</td>
				                               
                               <td class="last-item" style="color:#004080;">960</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>  
       <tr class="alt-rowbg">
			
          <td>
			<p><a href="https://www.shiksha.com/college/r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-487">R.V. College of Engineering</a></p>

						
			  <a id="courseid_2397_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('2397_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('2397_1');}" onclick="			 responseForm.showResponseForm('2397',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'2397'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_2397_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 2397 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare487-2397" class="addToCompareOnCollegePredictorCheckBox compare487-2397" value="487:: ::::R.V. College of Engineering, Rashtreeya Sikshana Samithi Trust, Bangalore::2397::https://www.shiksha.com/b-tech/course/b-e-in-electronics-and-communication-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2397" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 2397 ,'instituteId':487,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare487-2397lable" class="addToCompareOnCollegePredictor compare487-2397lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare487-2397list[]" value="2397" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;"> 
   			<a href="https://www.shiksha.com/b-tech/course/b-e-in-electronics-and-communication-engineering-r-v-college-of-engineering-rashtreeya-sikshana-samithi-trust-mysore-road-bangalore-2397" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Electronics and Communication Engineering</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">975</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                         
       <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/siddaganga-institute-of-technology-tumkur-24365">Siddaganga Institute of Technology</a></p>

						
			  <a id="courseid_236759_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('236759_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('236759_1');}" onclick="			 responseForm.showResponseForm('236759',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'236759'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_236759_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 236759 ,'instituteId':24365,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare24365-236759" class="addToCompareOnCollegePredictorCheckBox compare24365-236759" value="24365:: ::::Siddaganga Institute of Technology, Tumkur::236759::https://www.shiksha.com/architecture-planning/course/b-arch-siddaganga-institute-of-technology-sit-tumkur-236759" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 236759 ,'instituteId':24365,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare24365-236759lable" class="addToCompareOnCollegePredictor compare24365-236759lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare24365-236759list[]" value="236759" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;"> 
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-siddaganga-institute-of-technology-sit-tumkur-236759" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Tumkur</td>
				                               
                               <td class="last-item" style="color:#004080;">1022</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                          
      <tr class="alt-rowbg">
			
          <td>
			<p><a href="https://www.shiksha.com/college/pda-college-of-engineering-gulbarga-24711">H.K.E. Society's P.D.A. College of Engineering</a></p>

						
			  <a id="courseid_264783_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('264783_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('264783_1');}" onclick="			 responseForm.showResponseForm('264783',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'264783'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_264783_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 264783 ,'instituteId':24711,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare24711-264783" class="addToCompareOnCollegePredictorCheckBox compare24711-264783" value="24711:: ::::PDA College of Engineering, Gulbarga::264783::https://www.shiksha.com/architecture-planning/course/b-arch-pda-college-of-engineering-gulbarga-264783" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 264783 ,'instituteId':24711,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare24711-264783lable" class="addToCompareOnCollegePredictor compare24711-264783lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare24711-264783list[]" value="264783" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-pda-college-of-engineering-gulbarga-264783" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Gulbarga</td>
				                               
                               <td class="last-item" style="color:#004080;">1037</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                  
              <tr class="">
			
          <td>
			<p><a href="https://www.shiksha.com/college/bms-college-of-engineering-basavanagudi-bangalore-397">BMS College of Engineering</a></p>

						
			  <a id="courseid_173406_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('173406_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('173406_1');}" onclick="			 responseForm.showResponseForm('173406',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'173406'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_173406_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 173406 ,'instituteId':397,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare397-173406" class="addToCompareOnCollegePredictorCheckBox compare397-173406" value="397:: ::::BMS College of Engineering, Bangalore::173406::https://www.shiksha.com/b-tech/course/b-e-in-computer-science-and-engineering-bms-college-of-engineering-basavanagudi-bangalore-173406" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 173406 ,'instituteId':397,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare397-173406lable" class="addToCompareOnCollegePredictor compare397-173406lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare397-173406list[]" value="173406" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/b-tech/course/b-e-in-computer-science-and-engineering-bms-college-of-engineering-basavanagudi-bangalore-173406" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Computer Science Engineering</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item"style="color:#004080;">1047</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                         
       <tr class="alt-rowbg">
			
          <td>
			<p><a href="https://www.shiksha.com/college/acharya-s-nrv-school-of-architecture-hessarghatta-road-bangalore-51965">Acharya's NRV College of Architecture</a></p>

						
			  <a id="courseid_277587_1" href="javascript:void(0);" class="gray-bro-btn" onmouseover="if(typeof(activateDownload) !='undefined'){activateDownload('277587_1');}" onmouseout="if(typeof(deactivateDownload)){deactivateDownload('277587_1');}" onclick="			 responseForm.showResponseForm('277587',  'RankPredictor','course',{'trackingKeyId': '186','callbackFunction': 'downloadBrochureCP','callbackFunctionParams': {'courseId':'277587'}},{}); ;  trackEventByGA('DownloadBrouchureClick','DOWNLOAD_EBROCHURE_BUTTON');setValueOfRoundForREB('1');">
			 
						Download E-Brochure
			</a>
								    
			<div id="apply_confirmation_277587_1" style="display: none;margin: 8px 0;">
						       <i class="predictor-sprite tick-icon" style="margin: 0; float: left"></i>
						       <p style="margin:0 0 0 23px;float: none; color: #4EC42E; font-size:12px;">E-brochure successfully mailed.</p>
			</div>
	    	    
	                <!-----------------Add--to-compare--tool--------------------------->
		       			<p class="flRt">
<input onclick="myCompareObj.addToCompare({'courseId' : 277587 ,'instituteId':51965,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');" name="compare" id="compare51965-277587" class="addToCompareOnCollegePredictorCheckBox compare51965-277587" value="51965:: ::::Acharya&amp;#039;s NRV School of Architecture, Bangalore::277587::https://www.shiksha.com/architecture-planning/course/b-arch-acharya-s-nrv-school-of-architecture-hessarghatta-road-bangalore-277587" type="checkbox">
<a style="font-size:13px;" href="javascript:void(0);" onclick="
trackEventByGA('LinkClick','ADD_TO_COMPARE_ON_COLLEGE_PREDICTOR_PAGE');

myCompareObj.addToCompare({'courseId' : 277587 ,'instituteId':51965,'tracking_keyid' :187,'customCallBack':'collegePredictorCourseCompare.compareCallBackForPredictor'}, this,  {});

return false;" id="compare51965-277587lable" class="addToCompareOnCollegePredictor compare51965-277587lable">Add to Compare</a>
			</p>
			<div style="display:none">
			<input name="compare51965-277587list[]" value="277587" type="hidden"></div>
			 
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="https://www.shiksha.com/architecture-planning/course/b-arch-acharya-s-nrv-school-of-architecture-hessarghatta-road-bangalore-277587" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">1174</td>
                           </tr>
                          
     <script>brochureDisable = 'false';</script>                       
         <tr class="">
			
          <td>
			<p style="color:#004080;">Gopalan School of Architecture and Planning</p>
	    
	                <!-----------------Add--to-compare--tool--------------------------->
		        
			<!--------------------compare tool--end--------------------------->
	    
	    
</td>		       
   <td style="color:#004080;">
   			<a href="http://www.gopalancolleges.com/gsap/graduate-school.html" target="_blank" rel="nofollow" onclick="trackEventByGA('Branchtabclick','BRANCH_TAB');">Architecture</a>
            </td>
      
                           	                               <td style="color:#004080;">Bangalore</td>
				                               
                               <td class="last-item" style="color:#004080;">1177</td>
                           </tr>
                                                   
                       </tbody></table>
																					
			       
		       <div class="disclaimer-sec">
			   <strong>Disclaimer:</strong>
			   <p style="color:#004080">Please note that the above displayed colleges and branches are only for reference purpose. Shiksha.com does not take any responsibility for the validity of the predictions and analysis shown above.
			  <br>
			  <br>Prediction for COMEDK 2017 is based on COMEDK 2016 closing ranks.			
		
			</p></div>
	                       <div class="clearFix"></div>
	                      
	                    
                       </div>
<script>
  var filterDisplayStatus = '';
  var startCount = 15;
   count = 15;
   $j("#result_text").html('');
   $j("#result_text_1").html('');
         $j('#zero_result').hide();
         
</script>
<input value="419" id="total" type="hidden">
<input value="15" id="count" type="hidden">

<script>
compareDiv = 1;
var currentPageName= 'College Predictor Page'; 
</script>
	</div>
	</div>
<div class="predictor-rank-fullWidget clearFix" id="predictor_staticWidget" style="display: none;cursor:pointer;float: left;margin: 15px 0 10px; width:100%; -moz-box-sizing:border-box;-webkit-box-sizing:border-box; box-sizing:border-box;cursor: default;" onclick="trackEventByGA('RANK_PREDICTOR_COLLEGE_PREDICTOR_WIDGET_CLICK','RANK_PREDICTOR_COLLEGE_PREDICTOR_CLICK');">
                	<div class="flLt">	
                    	<i class="predictor-sprite college-predictor-icon"></i>
                    </div>
                    <div class="collge-predictor-rnk-info">
                    	<p>To view more colleges, cut-offs for branches and find colleges by branch go to:</p>
                        <p style="color:#747474;" class="font-12"><a class="font-14" href="https://www.shiksha.com/b-tech/resources/comedk-college-predictor" style=" text-decoration: none;" title="Click">COMEDK College Predictor</a></p>
                    </div>
                    <div class="clear_B"></div>
</div>
                               
            </div>
	</div>
    
    </div>
   </div>
   </div>
   </section>
   @include('shiksha/include/footer')