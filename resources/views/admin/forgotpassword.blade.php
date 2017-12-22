<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Suggest</title>
 <link rel="shortcut icon" href="{{url('admin/img/logo1.ico')}}"/>
<link href="{{url('css/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/css/cstm-font.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/css/custom-style.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/css/responsive.css')}}" rel="stylesheet" type="text/css">
<style>
 img
 { opacity: 0.5;
    filter: alpha(opacity=50);
 }
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px white inset !important;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
 setTimeout(function() {
            $('#successMessage').fadeOut('slow');
            }, 4000); 
</script>
</head>
<body class="login-outr-bg log-in">
<div class="login-outr"> 

  <header class="top-header forget-outr"> 
  
  </header>
  
  <section class="form-section-outr forget-password"> 
      <div class="container"> 
         <div class="row"> 
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-0 col-md-offset-3"> 
              <div class="right-sec"> 
                  <div style="text-align:center;" class="right-form-sec-inner">
                   @if(Session::has('message'))
                <div id="successMessage" style ="color:red;text-align: center;" class="alert alert-success"> {{Session::get('message')}} </div>
                 @endif
                @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                   <div class="alert alert-danger" style="padding:7px;font-size:14px;text-align: left;">{{ $error }}</div>
                   @endforeach
                 @endif
                      <h2> Forgot Password</h2>    
                       <form action="{{url('admin/forgot_password')}}" method="post"> 
                         {{ csrf_field() }}
                         <div class="form-group after_line">
                          <input type="text" name = "email" value="{{old('email')}}" placeholder="Enter Email"/>
                          <i class="" aria-hidden="true"></i>
                         </div>
                        
                         
                         
                         <div class="form-group save-btn">
                          <input type="submit" value="SUBMIT"  />
                         </div>
                       <div class="forget-outr">
                         <a href="{{url('admin/login')}}" class="forget">Back to Login </a>
                         </div>
                      </form>
                  </div>
              </div>
            </div>
         </div>
      </div> 
  </section>
 
</div>
</body>
</html>
