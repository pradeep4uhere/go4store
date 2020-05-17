<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
  <div id="tmleftbanner" class="block">
    <ul class="hidden-md-down">
              <li class="slide tmleftbanner-container">
          <a href="#" title="LeftBanner 1">
                  <img src="https://prestashop.templatemela.com/PRS08/PRS080193/PRS01/modules/tm_leftbanner/views/img/left-banner-1.jpg" alt="LeftBanner 1" title="LeftBanner 1">
      
          </a>        
        </li>
          </ul>
     
  </div>  
  </div>
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
  <section id="main">
    <h1>Registration</h1>
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
      <section id="content" class="page-content card card-block">
      <section class="login-form">
  <form method="POST" action="{{ route('register') }}" id="login-form">
  {!! csrf_field() !!}
   
    <section>
      
  <input type="hidden" name="back" value="my-account">
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First Name
          </label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="Enter First Name" tabindex="1" />
              @if ($errors->has('first_name'))
                <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
                </span>
              @endif
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
    <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last Name
          </label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Enter Last Name" tabindex="2">
              @if ($errors->has('first_name'))
                <span class="help-block red">
                  <strong>{{ $errors->first('first_name') }}</strong>
                </span>
              @endif
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
   <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Mobile Number
          </label>
    <div class="col-md-6">
       <input id="mobile" type="phone" class="form-control" name="mobile" value="{{ old('mobile') }}" required placeholder="Enter 10 Digit Mobile Number e.g 9015446567" tabindex="3" maxlength="10">
            @if ($errors->has('mobile'))
              <span class="help-block">
                <strong>{{ $errors->first('mobile') }}</strong>
              </span>
            @endif


    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">
         <input type="text" id="email" name="email" class="form-control validate" required="required" placeholder="Enter your email" tabindex="4">
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
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
          <input id="password" type="password" class="form-control js-child-focus js-visible-password" name="password" pattern=".{5,}" required="" placeholder="Please Enter your password" tabindex="5">
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif

        </div>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Confirm Password
          </label>
    <div class="col-md-6">
        <div class="input-group js-parent-focus">
          <input id="password-confirm" type="password" class="form-control js-child-focus js-visible-password" name="password_confirmation" required placeholder="Please Enter your confirm password" tabindex="6">
         
        </div>
    </div>
    <div class="col-md-3 form-control-comment">

    </div>

  </div>

  <div class="form-group row ">
    <label class="col-md-3 col-xs-12 form-control-label required">
              &nbsp;
          </label>
    <div class="col-md-6 col-xs-12">
        <div class="input-group js-parent-focus">
          <span class="custom-checkboxs">
            <input name="optin" type="checkbox" value="1">

          <label>I Agree Terms & Conditions and Privacy & Policy.</label>
        </span>
        </div>
    </div>
    <div class="col-md-3  col-xs-12 form-control-comment">

    </div>

  </div>

 
 </section>
<footer class="form-footer text-xs-center clearfix">
  <input type="hidden" name="submitLogin" value="1">
    <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit">
      Register
    </button>
</footer>
</form>
</section>
      <hr>
      <div class="no-account">
        <a href="login" data-link-action="display-register-form">
            Already Account? Login Now
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