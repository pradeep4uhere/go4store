  

<!-- header-starts -->
<div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn  menu-open"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--notification menu start -->
    <div class="menu-right">
        <div class="user-panel-top">  	
            <div class="profile_details_left">
                <ul class="nofitications-dropdown">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>

                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new messages</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all messages</a>
                                </div> 
                            </li>
                        </ul>
                    </li>
                    <li class="login_box" id="loginContainer">
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!-- search-scripts -->
                        <script src="{{config('global.THEME_URL_JS').'/profile/'}}/classie.js"></script>
                        <script src="{{config('global.THEME_URL_JS').'/profile/'}}/uisearch.js"></script>
                        <script>
new UISearch(document.getElementById('sb-search'));
                        </script>
                        <!-- //search-scripts -->
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new notification</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="{{config('global.THEME_URL_IMAGE').'/images/'}}1.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor sit amet </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>	
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all notification</a>
                                </div> 
                            </li>
                        </ul>
                    </li>	
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-truck"></i><span class="badge blue1">22</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 0 new order</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar yellow" style="width:40%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                        <div class="clearfix"></div>	
                                    </div>

                                    <div class="progress progress-striped active">
                                        <div class="bar green" style="width:90%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar red" style="width: 33%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                        <div class="clearfix"></div>	
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar  blue" style="width: 80%;"></div>
                                    </div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all pending task</a>
                                </div> 
                            </li>
                        </ul>
                    </li>	


                    <div class="clearfix"></div>	
                </ul>
            </div>
            <div class="profile_details">		
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">	
                                <span style="background:url({{config('global.THEME_URL_IMAGE').'/'}}user.jpg) no-repeat center"> </span> 
                                <div class="user-name">
                                    <p>{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}}</p>
                                </div>
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                                <div class="clearfix"></div>	
                            </div>	
                        </a>
                       
                        <ul class="dropdown-menu drp-mnu">
                             <br/>
                            <li><a href="{{ route('homePage') }}" target="_blank"><i class="fa fa-globe"></i> View Website</a> </li> 
                            <li> <a href="{{ route('seller') }}"><i class="fa fa-cog"></i> Become Seller</a> </li> 
                            <li> <a href="{{ route('updateProfile') }}"><i class="fa fa-user"></i>Profile</a> </li> 
                            <li> <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>		
            <div class="social_icons">
                <div class="col-md-4 social_icons-left">
                    
                </div>
                <div class="col-md-4 social_icons-left pinterest">
                    
                </div>

                <div class="col-md-4 social_icons-right twi">
                    <a href="{{route('seller')}}" class="btn btn-success" style="margin-top: -10px">Become Seller</a>
                </div>
                <div class="clearfix"> </div>
            </div>            	
            <div class="clearfix"></div>
        </div>
    </div>
    <!--notification menu end -->
</div>
<!-- //header-ends -->