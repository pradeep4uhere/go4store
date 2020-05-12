<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
                                          



  <div id="tmleftbanner" class="block">
    <ul class="hidden-md-down">
              <li class="slide tmleftbanner-container">
          <a href="#" title="LeftBanner 1">
            
            <img src="https://us.123rf.com/450wm/starlineart/starlineart2004/starlineart200400085/143875852-stay-home-and-stay-safe-concept-poster-design.jpg?ver=6" alt="LeftBanner 1" title="LeftBanner 1">
          </a>        
        </li>
          </ul>
  <div class="block hidden-lg-up">
  <h4 class="block_title hidden-lg-up" data-target="#block_banner1_toggle" data-toggle="collapse">banner
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
      <i class="material-icons add"></i>
      <i class="material-icons remove"></i>
      </span>
    </span>
  </h4>

       <div class="col-md-12 col-xs-12 block_content collapse" id="block_banner1_toggle">

    <ul>
              <li class="slide tmleftbanner-container">
          <a href="#" title="LeftBanner 1">
            <img src="https://us.123rf.com/450wm/starlineart/starlineart2004/starlineart200400085/143875852-stay-home-and-stay-safe-concept-poster-design.jpg?ver=6" alt="LeftBanner 1" title="LeftBanner 1">
          </a>        
        </li>
          </ul>
  </div>      
  </div>    
  </div>  
  </div>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
<h1>Change Password</h1>
 <p>
@if(Session::has('message'))
<p class="alert alert-success">You profile is created successfully, click here for <a href="{{route('login')}}">Login</a></p>
@endif
@if(Session::has('error'))
<p class="alert alert-danger"><small>
@foreach(Session::get('error') as $err)
<b>Error:</b> {{ $err }}</br>
@endforeach
</small>
</p>
@endif

</p>
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}" style="position: inherit;">{{ Session::get('message') }}</p>
@endif
<section id="main">
  
    <section id="content" class="page-content card card-block">
    <section class="login-form">
    <form class="form-horizontal" method="POST" action="{{ route('changepassword') }}">
    {{ csrf_field() }}
<section>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              New Password
          </label>
    <div class="col-md-6">
        <input type="hidden" name="token" value="{{$token}}">
        <input type="password" id="password" name="password" class="form-control validate" required="required" placeholder="Enter New Password">
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              New Confirm Password
          </label>
    <div class="col-md-6">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control validate" required="required" placeholder="Enter New Confirm Password">
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  
    </section>
      <footer class="form-footer text-xs-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
           <button type="submit" name="login" id="submit-login" class="btn btn-primary">Submit</button>
      </footer>
  </form>
      </section>
      <hr>
      <div class="no-account pull-xs-left">
        <a href="{{url('register')}}" data-link-action="display-register-form">
          No Account? Create one here
        </a>
      </div>
      <div class="no-account pull-xs-right">
        <a href="{{url('login')}}" data-link-action="display-register-form ">
          Already Account? Login Here
        </a>
      </div>
      </section>
      <footer class="page-footer">
      </footer>
  </section>
  </div>
</div>
</div>
</section>