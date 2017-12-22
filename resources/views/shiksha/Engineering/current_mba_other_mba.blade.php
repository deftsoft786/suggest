@include('shiksha/include/header')
 <div class="container">
        <div class="col-md-12" style="background-color:#EFEFEF; ">
          <h3 style="color:#004080; font-weight:bold; text-align:center; font-size:28px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <center><img src="{{url('shiksha/assets/images/campus-conne-banner.jpg')}}" style="margin-top:30px"></center>
            
            <div class="cr_inputsrchBx bordRdus3px">
        <div class="cr_inputsrchBxInnr" id="cmp-search-box">
          <i class="fa fa-search" onclick="gotoSearchPage('https://www.shiksha.com','keywordSuggest');" style="cursor: pointer; font-size:30px"></i>
          <input placeholder="Search by college name to ask or view questions" name="keyword" id="keywordSuggest" minlength="1" autocomplete="off" type="text">
        </div>
        <div class="cr_sugestd">
              <ul id="suggestions_container" style="text-align: left; display: none;"></ul>
        </div>
  </div>
          
          </div>
          
          
          <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold; text-align:center;  margin-top:50px">Top Ranked Colleges</h3>
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
          </div>
            <div class="col-md-12" style="background-color:#EFEFEF;">
               <h3 style="color:#004080; font-weight:bold;   margin-top:50px">Top Questions</h3>
               
               <div class="overview" style="top: 0px;">
                        <p>
                <a href="https://ask.shiksha.com/what-is-the-selection-criteria-in-fms-qna-4288582" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-topRanked');" style="color:#004080; font-weight:bold" rel="nofollow" >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
                <span style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-0" style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-0" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>

                                    <a class="sml recreateScrollBar1"  rel="nofollow" onclick="$j('#span2-0').show('slow'); $j('#span1-0').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);"style="color:#004080; font-weight:bold">Read more</a>
                            </p>
                            
                            
                        <p>
                <a href="https://ask.shiksha.com/am-i-eligible-for-iim-indore-i-have-12th-59-10th-79-and-b-sc-65-if-i-am-eligible-then-how-much-percentile-required-qna-4288034"  rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-topRanked');" style="color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
                <span style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-1" style="color:#004080; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
                <span class="campus-answer" id="span2-1" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <a class="sml recreateScrollBar1" rel="nofollow"  onclick="$j('#span2-1').show('slow'); $j('#span1-1').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);" style="color:#004080; font-weight:bold">Read more</a>
                            </p>
                            
                            
                        <p>
                <a href="https://ask.shiksha.com/will-pursuing-mba-through-distance-provide-me-a-package-of-rs-5-to-rs-6-lakhs-or-not-i-want-to-do-mba-in-finance-qna-4287316" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-topRanked');" style="color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
                <span style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-2" style="color:#004080; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-2" style="display: none;color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <a class="sml recreateScrollBar1"  rel="nofollow" onclick="$j('#span2-2').show('slow'); $j('#span1-2').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);" style="color:#004080; font-weight:bold">Read more</a>
                            </p>
                            
                            
                        <p>
                <a href="https://ask.shiksha.com/can-you-suggest-me-the-books-for-the-preparation-of-the-exam-for-mba-in-bangalore-i-am-in-the-final-year-of-b-qna-4286991"  rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-topRanked');" style="color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
                <span style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-3" style="color:#004080;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-3" style="display: none;color:#004080; font-weight:bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <a class="sml recreateScrollBar1" rel="nofollow" onclick="$j('#span2-3').show('slow'); $j('#span1-3').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                            </p>
                      
                      
                     
                     
                            </div>
            </div>
          
          
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold; text-align:center; margin-top:30px; ">Featured Colleges</h3>
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
          
          </div>
          
          
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold; margin-top:30px; ">Featured Questions</h3>
          <div class="overview" style="top: 0px;">
                        <p>
                <a href="https://ask.shiksha.com/what-are-my-chances-for-admission-with-92-cmat-percentile-and-2-years-experience-in-software-industry-i-have-68-qna-2856678" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-featured');">What are my chances for admission with 92 CMAT percentile and 2 years experience in Software Industry. I have 68% in B.Tech.</a><br>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-0" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <a class="sml recreateScrollBar1" rel="nofollow" onclick="$j('#span2-0').show('slow'); $j('#span1-0').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                            </p>
                        <p>
                <a href="https://ask.shiksha.com/how-is-the-placement-record-which-campus-is-better-harihar-or-pune-qna-2811547" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-featured');">How is the placement record? Which campus is better: Harihar or Pune?</a><br>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-1" style="display: none;"></span>
                                    <a class="sml recreateScrollBar1"  rel="nofollow" onclick="$j('#span2-1').show('slow'); $j('#span1-1').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                            </p>
                        <p>
                <a href="https://ask.shiksha.com/what-is-the-fee-structure-for-this-program-in-iilm-gurgaon-qna-2784771"  rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-featured');">What is the fee structure for this program in IILM Gurgaon?</a><br>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
                <span class="campus-answer" id="span1-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <span class="campus-answer" id="span2-2" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <a class="sml recreateScrollBar1" rel="nofollow"  onclick="$j('#span2-2').show('slow'); $j('#span1-2').hide(); $j(this).hide(); var scrollbar1 = $j('#topQuestionContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar1.update(scrollbar1.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                            </p>
                            </div>
           
          </div>
          
          
          
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold; text-align:center; margin-top:30px; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
          </div>
          
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold;  margin-top:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
          
          <div class="overview" style="top: 0px;">
                <p>
        <a href="https://ask.shiksha.com/what-is-the-meaning-of-bonafide-certificate-qna-3891750" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-mostViewQuestion');">What is the meaning of bonafide certificate?</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-0" style="display: none;"> </span>
                            <a class="sml recreateScrollBar2" rel="nofollow" onclick="$j('#mv-span2-0').show('slow'); $j('#mv-span1-0').hide(); $j(this).hide(); var scrollbar2 = $j('#mostViewedContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar2.update(scrollbar2.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                    </p>
                <p>
        <a href="https://ask.shiksha.com/what-is-the-fee-structure-for-mba-in-gems-b-school-qna-2882180"  rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-mostViewQuestion');">What is the fee structure for MBA in Gems B-School?</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-1" style="display: none;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    </p>
                <p>
        <a href="https://ask.shiksha.com/is-cat-exam-compulsory-for-mba-in-all-the-colleges-qna-3469537" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-mostViewQuestion');">Is CAT exam compulsory for MBA in all the colleges?</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
        <span class="campus-answer" id="mv-span2-2" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            <a class="sml recreateScrollBar2" rel="nofollow"  onclick="$j('#mv-span2-2').show('slow'); $j('#mv-span1-2').hide(); $j(this).hide(); var scrollbar2 = $j('#mostViewedContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar2.update(scrollbar2.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                    </p>
                    </div>
              </div>
              
              
              
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold; text-align:center; margin-top:30px; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
            <img src="{{url('shiksha/assets/images/img1/trending_img_1.jpg')}}">
          </div>
          
           <div class="col-md-12" style="background-color:#EFEFEF ;border-bottom:1px solid #ccc">
          <h3 style="color:#004080; font-weight:bold;  margin-top:30px; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <div class="overview" style="top: 0px;">
                <p>
        <a href="https://ask.shiksha.com/what-is-the-starting-package-after-doing-mba-from-lpu-in-travel-and-tourism-qna-4290599" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-trendingQuestion');">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-0" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    </p>
                <p>
        <a href="https://ask.shiksha.com/is-it-worth-to-do-mba-pgdm-with-specialization-in-hr-from-this-institute-any-pros-and-cons-list-please-qna-4289985" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-trendingQuestion');">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.)</span><br>
        <span class="campus-answer" id="mv-span1-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-1" style="display: none;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            <a class="sml recreateScrollBar2" rel="nofollow" onclick="$j('#mv-span2-1').show('slow'); $j('#mv-span1-1').hide(); $j(this).hide(); var scrollbar2 = $j('#mostViewedContainer .scrollbar1').data('plugin_tinyscrollbar'); scrollbar2.update(scrollbar2.contentPosition); trackEventByGA('ANSWER_READ_MORE_CCHOME', 'CCHome_Answer_Read_More');" href="javascript:void(0);">Read more</a>
                    </p>
                <p>
        <a href="https://ask.shiksha.com/is-global-immersion-mandatory-in-thakur-for-mms-qna-4289836"   rel="nofollow" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-trendingQuestion');">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-2" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    </p>
                <p>
        <a href="https://ask.shiksha.com/i-have-79-in-10th-58-in-12th-and-65-aggregate-in-graduation-then-am-i-eligible-for-nitie-and-how-much-percentile-qna-4289460" rel="nofollow" onclick="trackEventByGA('VIEW_QUESTION_FROM_CCHOME','CC_Homepage_Question_View_From-trendingQuestion');">Lorem Ipsum is simply dummy text of the printing and typesetting industry.?</a><br>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span><br>
        <span class="campus-answer" id="mv-span1-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="campus-answer" id="mv-span2-3" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    </p>
               
               
               </div>
          </div>
    </div>
    @include('shiksha/include/footer')