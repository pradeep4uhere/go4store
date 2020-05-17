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
     
  </div>  
  </div>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">


@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<section id="main">
  <h1>Member Login</h1>
    <section id="content" class="page-content card card-block">
    <section class="login-form">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
<section>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">
        <input type="email" id="email" name="email" class="form-control validate" required="required" placeholder="Email Address" value="{{ old('email') }}">

    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Password
          </label>
    <div class="col-md-6">
        <div class="input-group js-parent-focus">
          <input type="password" id="pass" name="password" class="form-control validate" required="required" placeholder="Password">
          <span class="input-group-btn">
            <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
              Show
            </button>
          </span>
        </div>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
      <div class="forgot-password">
        <a href="{{url('forgotpassword')}}" rel="nofollow">
          Forgot your password?
        </a>
      </div>
    </section>
      <footer class="form-footer text-xs-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
           <button type="submit" name="login" id="submit-login" class="btn btn-primary">Log in</button>
      </footer>
  </form>
      </section>
      <hr>
      <div class="no-account">
        <a href="register" data-link-action="display-register-form">
          No account? Create one here
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