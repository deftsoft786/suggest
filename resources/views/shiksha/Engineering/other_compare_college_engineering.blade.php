 @include('shiksha/include/header')
 <div class="row exam" style="background:#fff; margin-top:70px">    
    <div class="container">
        <div class="col-md-12" style="background-color:#EFEFEF;	 border-bottom:1px solid #ccc">
          <h2 style="color:#004080; font-weight:bold; text-align:center; margin-top:40px">College Comparison</h2>
          <p style="color:#004080; text-align:center">Confused between colleges? Compare them here to make the right choice.You can compare a maximum of 4 colleges at a time.</p>
           <div class="col-md-3 coll">
           <div class="add-inst-number">1</div>
          <div class="add-simlar-clgs addSimilarCollege" id="addSimilarCollege1">
              <div id="keywordSuggest_normalDiv">
              
              <input class="find-txtfield " name="add-college"  placeholder="Find College" id="keywordSuggest" onfocus="toggleBoxText(this, 'focus'); this.hasFocus=true; checkTextElementOnTransition(this,'focus');" onblur="toggleBoxText(this, 'blur'); this.hasFocus=false; checkTextElementOnTransition(this,'blur');" style="padding-left: 30px; color: rgb(173, 166, 173);" type="text">           
              </div>
              <div class="cmpre-sugstr-box" id="suggestions_container_normalDiv">
                <ul id="suggestions_container" style="display: none;"></ul>
              </div>
          </div>
           </div> 
           <div class="col-md-3 coll">
           <div class="add-inst-number">2</div>
          <div class="add-simlar-clgs addSimilarCollege" id="addSimilarCollege1">
              <div id="keywordSuggest_normalDiv">
              <input class="find-txtfield " name="add-college"  placeholder="Find College" id="keywordSuggest" onfocus="toggleBoxText(this, 'focus'); this.hasFocus=true; checkTextElementOnTransition(this,'focus');" onblur="toggleBoxText(this, 'blur'); this.hasFocus=false; checkTextElementOnTransition(this,'blur');" style="padding-left: 30px; color: rgb(173, 166, 173);" type="text">
              </div>
              <div class="cmpre-sugstr-box" id="suggestions_container_normalDiv">
                <ul id="suggestions_container" style="display: none;"></ul>
              </div>
          </div>
           </div> 
           <div class="col-md-3 coll">
           <div class="add-inst-number">3</div>
          <div class="add-simlar-clgs addSimilarCollege" id="addSimilarCollege1">
              <div id="keywordSuggest_normalDiv">
              <input class="find-txtfield " name="add-college"  placeholder="Find College" id="keywordSuggest" onfocus="toggleBoxText(this, 'focus'); this.hasFocus=true; checkTextElementOnTransition(this,'focus');" onblur="toggleBoxText(this, 'blur'); this.hasFocus=false; checkTextElementOnTransition(this,'blur');" style="padding-left: 30px; color: rgb(173, 166, 173);" type="text">
              </div>
              <div class="cmpre-sugstr-box" id="suggestions_container_normalDiv">
                <ul id="suggestions_container" style="display: none;"></ul>
              </div>
          </div>
           </div>
           <div class="col-md-3 coll">
            <div class="add-inst-number">4</div>
          <div class="add-simlar-clgs addSimilarCollege" id="addSimilarCollege1">
              <div id="keywordSuggest_normalDiv">
              <input class="find-txtfield " name="add-college"  placeholder="Find College" id="keywordSuggest" onfocus="toggleBoxText(this, 'focus'); this.hasFocus=true; checkTextElementOnTransition(this,'focus');" onblur="toggleBoxText(this, 'blur'); this.hasFocus=false; checkTextElementOnTransition(this,'blur');" style="padding-left: 30px; color: rgb(173, 166, 173);" type="text">
              </div>
              <div class="cmpre-sugstr-box" id="suggestions_container_normalDiv">
                <ul id="suggestions_container" style="display: none;"></ul>
              </div>
          </div>
           </div>
           </div>      
      <div class="col-md-12" style="background-color:#EFEFEF; border-bottom:1px solid #ccc;">
	     <h4 style="color:#004080; margin-top:30px">Popular MBA college comparisons on Suggest</h4>
         <p style="color:#004080">IIM, Kolkata vs IIM, Bangalore</p>
         <p style="color:#004080">XLRI vs IIM, Lucknow</p> 
         <p style="color:#004080; ">SPJIMR vs MDI</p>
         <p style="color:#004080; ">IIM, Bangalore vs IIM, Ahemdabad</p>
          <p style="color:#004080;">IIFT, Delhi vs MDI, Gurgaon</p>
          <h4 style="color:#004080; margin-top:20px">Popular B.Tech college comparisons on Suggest</h4>
         <p style="color:#004080">VIT vs SRM University</p>
         <p style="color:#004080">Sathyabama University vs SRM University</p> 
         <p style="color:#004080; ">UPES vs VIT</p>
         <p style="color:#004080; ">IIT, Kanpur vs IIT, Bombay</p>
          <p style="color:#004080;">COEP, Pune vs VJIT, Hyderabad</p>   
     </div>        
    </div>
    @include('shiksha/include/footer')