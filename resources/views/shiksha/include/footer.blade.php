
<div id="footerwrap">
    <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <div class="slider01">
                                   <div class="center1">
                                        <div class="col-md-3">
                                              <div class="bx">
                                                  <h3>SUGGEST</h3>
                                                   <ul>
                                                   <li>
                                                   <a href="#">About us</a>
                                                    </li>
                                                    <li>
                                                    <a href="#">Management Team</a>
                                                    </li> 
                                                    <li>
                                                    <a href="#">Careers</a>
                                                    </li>
                                                    <li>
                                                    <a href="#">Corporate Blog</a>
                                                    </li>
                                                    <li>
                                                    <a href="#">Suggest Authors</a>
                                                    </li>
                                                    </ul>
                                                </div>
                                           </div>
                                           <div class="col-md-3">
                                                 <div class="bx">
                                                     <h3>Colleges</h3>
                                                     <ul>
                                                     <li>
                                                     <a href="#">Client login</a>
                                                     </li>
                                                     <li>
                                                    <a href="#">Advertise with us</a>
                                                    </li> <li>
                                                    <a href="#">Add Colleges</a>
                                                    </li>
                                                    <li>
                                                    <a href="#">Contact Us</a>
                                                    </li>
                                                    </ul>
                                                </div>
                                           </div>
                                            <div class="col-md-3">
                                                 <div class="bx">
                                                      <h3>Others</h3>
                                                      <ul>
                                                      <li>
                                                      <a href="#">FAQs</a>
                                                      </li>
                                                      <li>
                                                      <a href="#">Feedback</a>
                                                      </li> 
                                                      <li>
                                                      <a href="#">Grievances</a>
                                                      </li>
                                                      <li>
                                                      <a href="#">Notices / Summons</a>
                                                      </li>
                                                      </ul>
                                                 </div>
                                            </div>
                                            <div class="col-md-3">
                                                  <div class="bx" style="margin-top:50px">
                                                       <a href="javascript:void(0)" class="fa fa-facebook" style="background: #3B5998; color: white;"></a>
                                                       <a href="javascript:void(0)" class="fa fa-twitter" style="background: #55ACEE; color: white;"></a>
                                                      <a href="javascript:void(0)"  class="fa fa-google" style=" background: #dd4b39;color: white;"></a>
                                                </div>
                                            </div>
                                       </div>
                                 </div>
                              </div>
                        </div>
                      </div>
   </div>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{url('shiksha/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('shiksha/assets/js/retina-1.1.0.js')}}"></script>
  <script src="{{url('shiksha/assets/js/jquery.hoverdir.js')}}"></script>
  <script src="{{url('shiksha/assets/js/jquery.hoverex.min.js')}}"></script>
  <script src="{{url('shiksha/assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('shiksha/assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{url('shiksha/assets/js/custom.js')}}"></script>


    <script>
// Portfolio
(function($) {
  "use strict";
  var $container = $('.portfolio'),
    $items = $container.find('.portfolio-item'),
    portfolioLayout = 'fitRows';
    
    if( $container.hasClass('portfolio-centered') ) {
      portfolioLayout = 'masonry';
    }
        
    $container.isotope({
      filter: '*',
      animationEngine: 'best-available',
      layoutMode: portfolioLayout,
      animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    },
    masonry: {
    }
    }, refreshWaypoints());
    
    function refreshWaypoints() {
      setTimeout(function() {
      }, 1000);   
    }
        
    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    
    function getColumnNumber() { 
      var winWidth = $(window).width(), 
      columnNumber = 1;
    
      if (winWidth > 1200) {
        columnNumber = 5;
      } else if (winWidth > 950) {
        columnNumber = 4;
      } else if (winWidth > 600) {
        columnNumber = 3;
      } else if (winWidth > 400) {
        columnNumber = 2;
      } else if (winWidth > 250) {
        columnNumber = 1;
      }
        return columnNumber;
      }       
      
      function setColumns() {
        var winWidth = $(window).width(), 
        columnNumber = getColumnNumber(), 
        itemWidth = Math.floor(winWidth / columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
          $(this).css( { 
          width : itemWidth + 'px' 
        });
      });
    }
    
    function setPortfolio() { 
      setColumns();
      $container.isotope('reLayout');
    }
      
    $container.imagesLoaded(function () { 
      setPortfolio();
    });
    
    $(window).on('resize', function () { 
    setPortfolio();          
  });
})(jQuery);
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>


    function ayantoggle(){
        $(".forgot").slideToggle('slow');
    }
//$(document).ready(function(){
//    $(".for-got").click(function(){
//        
//    });
//});
</script>

  </body>
</html>
