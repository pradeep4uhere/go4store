<style type="text/css">
.link-item{
    min-height: 125px;
    max-width: 100%; 
    border: solid 1px #CCC;
    border-radius: 5px;
    text-align: center;
    padding-top: 25px;
    font-size: 15px;
    margin: 1px 1px 15px 1px; 
    display: block;;
    box-shadow: 0 5px 5px -5px;
}
.material-icons{
  font-size: 32px;
}

</style>
<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
                @include('prssystem.firezyshop.User.ProfileLeftBlock')
            <nav data-depth="1" class="breadcrumb hidden-sm-down">
               <div class="container"><h1 class="h1"><i class="fa fa-user"></i>&nbsp;My Profile</h1>
              <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{route('home')}}">
                      <span itemprop="name"><i class="fa fa-home"></i>&nbsp;Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
              </ol>
              </div>
            </nav>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
<section id="main">
        <header class="page-header">
        </header>
<section id="content" class="page-content">
 <div class="row">
    <div class="form-group col-md-12">
     
             @if(Session::has('message'))
                <center>
                  <p class="alert alert-success col-md-12" style="margin-bottom:25px; width: 100%; text-align: left">
                      {{ Session::get('message') }}
                  </p>
                  <br/><br/><br/>
                </center>
              @endif
              @if(Session::has('error'))
                <p class="alert alert-danger">
              @foreach(Session::get('error') as $err)
              {{ $err }}</br>
              @endforeach
                </p>
              @endif
      </div>
  </div>
<form class="form-horizontal" method="POST" action="{{ route('updateprofile') }}">
    {{ csrf_field() }}
 
  <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">First Name</label>
    <div class="col-md-6">
        <input type="text" id="first_name" name="first_name" class="form-control validate" required="required" placeholder="Enter First Name" value="{{Auth::user()->first_name}}">
    </div>
  </div>
   <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Last Name</label>
    <div class="col-md-6">
        <input type="text" id="last_name" name="last_name" class="form-control validate" required="required" placeholder="Enter Last Name" value="{{Auth::user()->last_name}}">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Email Address</label>
    <div class="col-md-6">
        <input type="email" id="email_address" name="email" class="form-control validate" required="required" placeholder="Enter email address" value="{{Auth::user()->email}}" readonly="readonly" >
    </div>
  </div> 
  <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Mobile Number</label>
    <div class="col-md-6">
        <input type="text" id="mobile" name="mobile" class="form-control validate" required="required" placeholder="Enter mobile number" value="{{Auth::user()->mobile}}" readonly="readonly" >
    </div>
  
  </div>

   <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Address-1</label>
    <div class="col-md-6">
        <input type="text" id="address_1" name="address1" class="form-control validate"  placeholder="Enter address line" value="{{Auth::user()->address_1}}">
    </div>
  </div>

   <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Address-2</label>
    <div class="col-md-6">
        <input type="text" id="address_2" name="address2" class="form-control validate" required="required" placeholder="Enter address line" value="{{Auth::user()->address_2}}">
    </div>
  </div>

 <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Landmark</label>
    <div class="col-md-6">
        <input type="text" id="address_3" name="address3" class="form-control validate"  placeholder="Enter address line" value="{{Auth::user()->address_3}}">
    </div>
  </div>

   <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">Pincode</label>
    <div class="col-md-6">
        <input type="text" id="pincode" name="pincode" class="form-control validate" required="required" placeholder="Enter address line" value="{{Auth::user()->pincode}}">
        <small style="color: green">Note: you will see all the seller near this pincode only.</small>
    </div>
  </div>
   <div class="form-group col-md-12">
    <label class="col-md-2 form-control-label required">&nbsp;</label>
    <div class="col-md-3">
          <footer class="form-footer text-xs-center clearfix">
          <input type="hidden" name="submitLogin" value="1">
           <button type="submit" name="login" id="submit-login" class="btn btn-primary pull-right">Update</button>
          </footer>
    </div>
  </div>
     
  </div>
  </form>
  </section>


  </section>


    
  </div>


  </div>
</div>
</section>
<script>
   function getAlert(a,b,c){
       swal({
         title:a,
         text: b,
         icon: c,
       });
   }
   @if(Session::has('message'))
    getAlert('Great',"{{ Session::get('message') }}",'success');
   @endif

</script>

   
  