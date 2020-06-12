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
    
      
        
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
      
    
    
  <div class="row">
    <div class="links">

      <a class="col-lg-4 col-md-4 col-sm-6 col-xs-6 iconBox" id="identity-link" href="#">
        <span class="link-item" >
          <i class="material-icons"></i><br/>
          Profile
        </span>
      </a>

             
      
              <a class="col-lg-4 col-md-4 col-sm-6 col-xs-6 iconBox" id="history-link" href="#">
          <span class="link-item">
            <i class="fa fa-shopping-cart" style="font-size: 25px;"></i><br/>
            My Order History
          </span>
        </a>
      
              <a class="col-lg-4 col-md-4 col-sm-6 col-xs-6 iconBox" id="order-slips-link" href="#">
          <span class="link-item">
            <i class="material-icons"></i><br/>
            Account Setting
          </span>
        </a>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6 iconBox" id="mywishlist-link" href="#">
          <span class="link-item">
            <i class="material-icons"></i><br/>
            My Wishlist
          </span>
        </a>

         <a class="col-lg-4 col-md-4 col-sm-6 col-xs-6 iconBox" id="address-link" href="#">
          <span class="link-item">
            <i class="material-icons"></i><br/>
            Add Shipping Address
          </span>
        </a>

        <a class="col-lg-4 col-md-4 col-sm-6 col-xs-6 iconBox"  href="#">
          <span class="link-item">
            <i class="fa fa-inr" style="font-size: 25px;"></i><br/>
            Refer & Earn
          </span>
        </a>


       
    </div>
  </div>
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

   
  