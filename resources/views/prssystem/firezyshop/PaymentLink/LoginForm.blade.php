<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
  </div>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-4">

<section id="main" >
  <h1>Customer Information</h1>
    <section id="content" class="page-content card card-block">
    <section class="login-form">
    <form class="form-horizontal" method="POST" action="{{ route('invoicepayment') }}">
    {{ csrf_field() }}
  <section>
  <div class="form-group row ">
    <label class="col-md-4 col-sm-3 form-control-label required">
              Enter Amount
          </label>
    <div class="col-md-4 col-sm-9">
        <input type="text" id="amount" name="amount" class="form-control validate" required="required" placeholder="Enter your amount e.g 10000">

    </div>
    <div class="col-md-4 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-4 form-control-label required">
              Enter Full Name
          </label>
    <div class="col-md-4">
        <input type="text" id="fullname" name="fullname" class="form-control validate" required="required" placeholder="Enter your full name">

    </div>
    <div class="col-md-4 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-4 form-control-label required">
              Email
          </label>
    <div class="col-md-4">
        <input type="email" id="email" name="email" class="form-control validate" required="required" placeholder="Email your email address">

    </div>
    <div class="col-md-4 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-4 form-control-label required">
              Mobile Number
          </label>
    <div class="col-md-4">
        <input type="phone" id="mobile" name="mobile" class="form-control validate" required="required" placeholder="Enter Vaid Mobile Number">

    </div>
    
  </div>
    </section>
      <footer class="form-footer text-xs-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
           <button type="submit" name="login" id="submit-login" class="btn btn-primary">Pay Now</button>
      </footer>
  </form>
      </section>
      <hr>
            </section>
      <footer class="page-footer">
      </footer>
  </section>
  </div>
        </div>
                </div>
      </section>