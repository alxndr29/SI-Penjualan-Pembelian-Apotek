<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template - Madrid</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/whether-icon.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper color-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
              <li class="mega-menu outside">
                <a class="nav-link" href="#"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="mobile-title d-none">
                          <h5>Mega menu</h5>
                          <i data-feather="x"></i>
                        </div>
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="#">Error page 400</a></li>
                            <li><a href="#">Error page 401</a></li>
                            <li><a href="#">Error page 403</a></li>
                            <li><a href="#">Error page 404</a></li>
                            <li><a href="#">Error page 500</a></li>
                            <li><a href="#">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="#">Login Simple</a></li>
                            <li><a href="#">Login Bg Image</a></li>
                            <li><a href="#">Login Bg video</a></li>
                            <li><a href="#">Register Simple</a></li>
                            <li><a href="#">Register Bg Image</a></li>
                            <li><a href="#">Register Bg video</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed-links">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="#">Search Website                                     </a></li>
                            <li><a href="#">Unlock User</a></li>
                            <li><a href="#">Forget Password</a></li>
                            <li><a href="#">Reset Password</a></li>
                            <li><a href="#">Maintenance</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li><a href="#">Basic Email</a></li>
                            <li><a href="#">Basic With Header</a></li>
                            <li><a href="#">Ecomerce Template</a></li>
                            <li><a href="#">Email Template 2</a></li>
                            <li><a href="#">Ecommerce Email</a></li>
                            <li><a href="#">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="#"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="#"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="#"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="#"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="#"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="level-menu outside">
                <a class="nav-link" href="#"><i data-feather="inbox"></i><span>Level Menu</span></a>
                <ul class="header-level-menu menu-to-be-close">
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                  <li>
                    <a href="#!" data-original-title="" title="">                               <i data-feather="users"></i><span>Users</span></a>
                    <ul class="header-level-sub-menu">
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user"></i><span>User Profile</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                    </ul>
                  </li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="airplay"></i><span>Kanban Board</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="heart"></i><span>Bookmark</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="zap"></i><span>Social App                     </span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-{{ (App::getLocale() == 'en') ? 'us' : App::getLocale() }}"></i><span class="lang-txt">{{ App::getLocale() }} </span></div>
                  </div>
                  <div class="more_lang">
                    <a href="{{ route('lang', 'en' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'en') ? 'selected' : ''}}" data-value="en"><i class="flag-icon flag-icon-us"></i> <span class="lang-txt">English</span><span> (US)</span></div>
                    </a>
                    <a href="{{ route('lang' , 'de' )}}" class="{{ (App::getLocale()  == 'de') ? 'active' : ''}} ">
                      <div class="lang {{ (App::getLocale()  == 'de') ? 'selected' : ''}}" data-value="de"><i class="flag-icon flag-icon-de"></i> <span class="lang-txt">Deutsch</span></div>
                    </a>
                    <a href="{{ route('lang' , 'es' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'es') ? 'selected' : ''}}" data-value="es"><i class="flag-icon flag-icon-es"></i> <span class="lang-txt">Español</span></div>
                    </a>
                    <a href="{{ route('lang' , 'fr' )}}" class="{{ (App::getLocale()  == 'fr') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'fr') ? 'selected' : ''}}" data-value="fr"><i class="flag-icon flag-icon-fr"></i> <span class="lang-txt">Français</span></div>
                    </a>
                    <a href="{{ route('lang' , 'pt' )}}" class="{{ (App::getLocale()  == 'pt') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'pt') ? 'selected' : ''}}" data-value="pt"><i class="flag-icon flag-icon-pt"></i> <span class="lang-txt">Português</span><span> (BR)</span></div>
                    </a>
                    <a href="{{ route('lang' , 'cn' )}}" class="{{ (App::getLocale()  == 'cn') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'cn') ? 'selected' : ''}}" data-value="cn"><i class="flag-icon flag-icon-cn"></i> <span class="lang-txt">简体中文</span></div>
                    </a>
                    <a href="{{ route('lang' , 'ae' )}}" class="{{ (App::getLocale()  == 'ae') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'ae') ? 'selected' : ''}}" data-value="en"><i class="flag-icon flag-icon-ae"></i> <span class="lang-txt">لعربية</span> <span> (ae)</span></div>
                    </a>
                  </div>
                </div>
              </li>
              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary">
                            <i data-feather="star"></i>
                            <h6 class="f-18 mb-0">Bookmark</h6>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                              <div class="col-4 text-center"><i data-feather="activity"></i></div>
                              <div class="col-4 text-center"><i data-feather="users"></i></div>
                              <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                              <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                              <div class="col-4 text-center"><i data-feather="settings"></i></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li>
                            <button class="d-block flip-back" id="flip-back">Back</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <ul class="cart-dropdown onhover-show-div">
                  <li>
                    <h6 class="mb-0 f-20">Shoping Bag</h6>
                    <i data-feather="shopping-cart"></i>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                    </div>
                  </li>
                  <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="#">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="#">Checkout</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box                                    </h6>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body">
                        <span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media">
                  <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
                  <div class="media-body">
                    <span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">@{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper">
              <a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">{{ trans('lang.General') }}  </h6>
                                <p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span class="lan-3">{{ trans('lang.Dashboards') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;' }}">
                      <li><a class="lan-4 {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{route('index')}}">{{ trans('lang.Default') }}</a></li>
                                <li><a class="lan-5 {{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}" href="{{route('dashboard-02')}}">{{ trans('lang.Ecommerce') }}</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#"><i data-feather="layout"></i>
                      <span class="lan-7">{{ trans('lang.Page layout') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{ request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right' }}"></i></div>
                    </a>
                              <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;' }}">
                                  <li><a href="{{ route('box-layout') }}" class="{{ Route::currentRouteName() == 'box-layout' ? 'active' : '' }}">Boxed</a></li>
                                  <li><a href="{{ route('layout-rtl') }}" class="{{ Route::currentRouteName() == 'layout-rtl' ? 'active' : '' }}">RTL</a></li>
                                  <li><a href="{{ route('layout-dark') }}" class="{{ Route::currentRouteName() == 'layout-dark' ? 'active fw-bold' : '' }}">Dark Layout</a></li>
                                  <li><a href="{{ route('hide-on-scroll') }}" class="{{ Route::currentRouteName() == 'hide-on-scroll' ? 'active' : '' }}">Hide Nav Scroll</a></li>
                                  <li><a href="{{ route('footer-light') }}" class="{{ Route::currentRouteName() == 'footer-light' ? 'active' : '' }}">Footer Light</a></li>
                                  <li><a href="{{ route('footer-dark') }}" class="{{ Route::currentRouteName() == 'footer-dark' ? 'active' : '' }}">Footer Dark</a></li>
                                  <li><a href="{{ route('footer-fixed') }}" class="{{ Route::currentRouteName() == 'footer-fixed' ? 'active' : '' }}">Footer Fixed</a></li>
                              </ul>
                            </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>{{ trans('lang.Pages') }}</h6>
                                <p>{{ trans('lang.All neccesory pages added') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}" href="{{route('sample-page')}}"><i data-feather="file-text"> </i><span>{{ trans('lang.Sample page') }}</span></a></li><li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='landing-page' ? 'active' : '' }}" href="{{route('landing-page')}}"><i data-feather="file-text"> </i><span>{{ trans('lang.Landing Page') }}</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>General</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Widgets</li>
                    <li class="breadcrumb-item active">General (Madrid)</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
             <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                   <div class="card o-hidden">
                      <div class="bg-primary b-r-4 card-body">
                         <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>
                            <div class="media-body">
                               <span class="m-0">Earnings</span>
                               <h4 class="mb-0 counter">6659</h4>
                               <i class="icon-bg" data-feather="database"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                   <div class="card o-hidden">
                      <div class="bg-secondary b-r-4 card-body">
                         <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body">
                               <span class="m-0">Products</span>
                               <h4 class="mb-0 counter">9856</h4>
                               <i class="icon-bg" data-feather="shopping-bag"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                   <div class="card o-hidden">
                      <div class="bg-primary b-r-4 card-body">
                         <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                            <div class="media-body">
                               <span class="m-0">Messages</span>
                               <h4 class="mb-0 counter">893</h4>
                               <i class="icon-bg" data-feather="message-circle"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                   <div class="card o-hidden">
                      <div class="bg-primary b-r-4 card-body">
                         <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                            <div class="media-body">
                               <span class="m-0">New User</span>
                               <h4 class="mb-0 counter">45631</h4>
                               <i class="icon-bg" data-feather="user-plus"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                   <div class="widget-joins card widget-arrow">
                      <div class="row">
                         <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                               <div class="align-self-center me-3 text-start">
                                  <h6 class="mb-1">Sale</h6>
                                  <h4 class="mb-0">Today</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-down"></i></div>
                               <div class="media-body">
                                  <h5 class="mb-0">$<span class="counter">25698</span></h5>
                                  <span class="mb-1">-$2658(36%)</span>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 ps-0">
                            <div class="media">
                               <div class="align-self-center me-3 text-start">
                                  <h6 class="mb-1">Sale</h6>
                                  <h4 class="mb-0">Month</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                               <div class="media-body ps-2">
                                  <h5 class="mb-0">$<span class="counter">6954</span></h5>
                                  <span class="mb-1">+$369(15%)</span>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                               <div class="align-self-center me-3 text-start">
                                  <h6 class="mb-1">Sale</h6>
                                  <h4 class="mb-0">Week</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                               <div class="media-body">
                                  <h5 class="mb-0">$<span class="counter">63147</span></h5>
                                  <span class="mb-1">+$69(65%)</span>
                               </div>
                            </div>
                         </div>
                         <div class="col-sm-6 ps-0">
                            <div class="media">
                               <div class="align-self-center me-3 text-start">
                                  <h6 class="mb-1">Sale</h6>
                                  <h4 class="mb-0">Year</h4>
                               </div>
                               <div class="media-body align-self-center ps-3"><i class="font-primary" data-feather="arrow-up"></i></div>
                               <div class="media-body ps-2">
                                  <h5 class="mb-0">$<span class="counter">963198</span></h5>
                                  <span class="mb-1">+$3654(90%)          </span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                   <div class="widget-joins card">
                      <div class="row">
                         <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                               <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                               <div class="media-body details ps-3">
                                  <span class="mb-1">New</span>
                                  <h4 class="mb-0 counter">6982</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-bag"></i></div>
                            </div>
                         </div>
                         <div class="col-sm-6 ps-0">
                            <div class="media">
                               <div class="align-self-center me-3">12%<i class="fa fa-angle-down ms-2"></i></div>
                               <div class="media-body details ps-3">
                                  <span class="mb-1">Pending</span>
                                  <h4 class="mb-0 counter">783</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary float-end ms-3" data-feather="layers"></i></div>
                            </div>
                         </div>
                         <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                               <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                               <div class="media-body details ps-3 pt-0">
                                  <span class="mb-1">Done</span>
                                  <h4 class="mb-0 counter">3674</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-cart"></i></div>
                            </div>
                         </div>
                         <div class="col-sm-6 ps-0">
                            <div class="media">
                               <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                               <div class="media-body details ps-3 pt-0">
                                  <span class="mb-1">Cancel</span>
                                  <h4 class="mb-0 counter">069</h4>
                               </div>
                               <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="dollar-sign"></i></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                   <div class="card">
                      <div class="cal-date-widget card-body">
                         <div class="row">
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                               <div class="cal-info text-center">
                                  <h2>24</h2>
                                  <div class="d-inline-block mt-2"><span class="b-r-dark pe-3">March</span><span class="ps-3">2018</span></div>
                                  <p class="mt-4 f-16 text-muted">There is no minimum donation, any sum is appreciated</p>
                               </div>
                            </div>
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                               <div class="cal-datepicker">
                                  <div class="datepicker-here float-sm-end" data-language="en">           </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                   <div class="card">
                      <div class="mobile-clock-widget">
                         <div class="bg-svg">
                            <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                               <clippath id="moonCloudFillClipfill11">
                                  <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                               </clippath>
                               <clippath id="cloudFillClipfill19">
                                  <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                               </clippath>
                               <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                                  <g clip-path="url(#cloudFillClip)">
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                     </g>
                                  </g>
                                  <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                     <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                                  </g>
                                  <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                     <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                                  </g>
                               </g>
                            </svg>
                         </div>
                         <div>
                            <ul class="clock" id="clock">
                               <li class="hour" id="hour"></li>
                               <li class="min" id="min"></li>
                               <li class="sec" id="sec"></li>
                            </ul>
                            <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                            <div>
                               <p class="m-0 f-14 text-light">kolkata, India                                            </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                   <div class="card">
                      <div class="weather-widget-two">
                         <div class="card-body">
                            <div class="media">
                               <svg class="climacon climacon_cloudDrizzleMoonAlt" id="cloudDrizzleMoonAlt" version="1.1" viewBox="15 15 70 70">
                                  <clippath id="cloudFillClip">
                                     <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                  </clippath>
                                  <clippath id="moonCloudFillClip">
                                     <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                  </clippath>
                                  <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                                     <g clip-path="url(#cloudFillClip)">
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                           <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                        </g>
                                     </g>
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                                     </g>
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                                     </g>
                                  </g>
                               </svg>
                               <!-- cloudDrizzleMoonAlt-->
                               <div class="media-body align-self-center text-white">
                                  <h4 class="m-0 f-w-600 num">25°C</h4>
                                  <p class="m-0 f-14">Newyork</p>
                               </div>
                            </div>
                            <div class="media">
                               <svg class="climacon climacon_cloudRainMoon" id="cloudRainMoon" version="1.1" viewBox="15 15 70 70">
                                  <clippath id="cloudFillClip1">
                                     <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                  </clippath>
                                  <clippath id="moonCloudFillClip1">
                                     <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                  </clippath>
                                  <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoon">
                                     <g clip-path="url(#cloudFillClip1)">
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip1)">
                                           <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                        </g>
                                     </g>
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                     </g>
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip1)">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                                     </g>
                                  </g>
                               </svg>
                               <!-- cloudRainMoon-->
                               <div class="media-body align-self-center text-white">
                                  <h4 class="m-0 f-w-600 num">95°F</h4>
                                  <p class="m-0 f-14">Peris</p>
                               </div>
                            </div>
                            <div class="media">
                               <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                                  <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                                     </g>
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                                     </g>
                                  </g>
                               </svg>
                               <!-- cloudDrizzle-->
                               <div class="media-body align-self-center text-white">
                                  <h4 class="m-0 f-w-600 num">50°C</h4>
                                  <p class="m-0 f-14">India</p>
                               </div>
                            </div>
                            <div class="top-bg-whether">
                               <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewBox="15 15 70 70">
                                  <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                                     <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                           <circle cx="42" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                           <circle cx="49.999" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                           <circle cx="57.998" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                           <circle cx="42" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                           <circle cx="49.999" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                           <circle cx="57.998" cy="65.498" r="2"></circle>
                                        </g>
                                     </g>
                                     <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                        <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                     </g>
                                  </g>
                               </svg>
                            </div>
                            <div class="bottom-whetherinfo">
                               <div class="row">
                                  <div class="col-6"><i data-feather="cloud-drizzle"></i></div>
                                  <div class="col-6">
                                     <div class="whether-content">
                                        <span>India, Surat</span>
                                        <h4 class="num mb-0">36°F                                    </h4>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-12 box-col-12">
                   <div>
                      <div class="card">
                         <div class="card-header">
                            <h5 class="text-uppercase">Recent Activity</h5>
                            <div class="card-header-right">
                               <ul class="list-unstyled card-option">
                                  <li><i class="fa fa-spin fa-cog"></i></li>
                                  <li><i class="view-html fa fa-code"></i></li>
                                  <li><i class="icofont icofont-maximize full-card"></i></li>
                                  <li><i class="icofont icofont-minus minimize-card"></i></li>
                                  <li><i class="icofont icofont-refresh reload-card"></i></li>
                                  <li><i class="icofont icofont-error close-card"></i></li>
                               </ul>
                            </div>
                         </div>
                         <div class="card-body">
                            <ul class="crm-activity">
                               <li class="media">
                                  <span class="me-3 font-primary">A</span>
                                  <div class="align-self-center media-body">
                                     <h6 class="mt-0">Any desktop publishing packages and web page editors.</h6>
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago</li>
                                     </ul>
                                  </div>
                               </li>
                               <li class="media">
                                  <span class="me-3 font-secondary">C</span>
                                  <div class="align-self-center media-body">
                                     <h6 class="mt-0">Contrary to popular belief, Lorem Ipsum is not simply. </h6>
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago      </li>
                                     </ul>
                                  </div>
                               </li>
                               <li class="media">
                                  <span class="me-3 font-primary">E</span>
                                  <div class="align-self-center media-body">
                                     <h6 class="mt-0">Established fact that a reader will be distracted </h6>
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago</li>
                                     </ul>
                                  </div>
                               </li>
                               <li class="media">
                                  <span class="me-3 font-secondary">H</span>
                                  <div class="align-self-center media-body">
                                     <h6 class="mt-0">H-Code - A premium portfolio template from ThemeZaa </h6>
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago      </li>
                                     </ul>
                                  </div>
                               </li>
                               <li class="media">
                                  <span class="me-3 font-primary">T</span>
                                  <div class="align-self-center media-body">
                                     <h6 class="mt-0">There isn't anything embarrassing hidden.</h6>
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago</li>
                                     </ul>
                                  </div>
                               </li>
                               <li class="media">
                                  <div class="align-self-center media-body">
                                     <ul class="dates">
                                        <li>25 July 2017</li>
                                        <li>20 hours ago</li>
                                     </ul>
                                  </div>
                               </li>
                            </ul>
                            <div class="code-box-copy">
                               <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                               <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
          &lt;ul class=&quot;crm-activity&quot;&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;span class=&quot;me-3 font-primary&quot;&gt;A&lt;/span&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;h6 class=&quot;mt-0&quot;&gt;Any desktop publishing packages and web page editors.&lt;/h6&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;span class=&quot;me-3 font-secondary&quot;&gt;C&lt;/span&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;h6 class=&quot;mt-0&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply.&lt;/h6&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;span class=&quot;me-3 font-primary&quot;&gt;E&lt;/span&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;h6 class=&quot;mt-0&quot;&gt;Established fact that a reader will be distracted&lt;/h6&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;span class=&quot;me-3 font-secondary&quot;&gt;H&lt;/span&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;h6 class=&quot;mt-0&quot;&gt;H-Code - A premium portfolio template from ThemeZaa&lt;/h6&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;span class=&quot;me-3 font-primary&quot;&gt;T&lt;/span&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;h6 class=&quot;mt-0&quot;&gt;There isn't anything embarrassing hidden.&lt;/h6&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;media&quot;&gt;
              &lt;div class=&quot;align-self-center media-body&quot;&gt;
                &lt;ul class=&quot;dates&quot;&gt;
                  &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                  &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 box-col-6">
                   <div class="card custom-card">
                      <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/3.jpg')}}" alt=""></div>
                      <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/3.jpg')}}" alt=""></div>
                      <ul class="card-social">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      </ul>
                      <div class="text-center profile-details">
                         <h4>Scarlett john</h4>
                         <h6>Manager</h6>
                      </div>
                      <div class="card-footer row">
                         <div class="col-4 col-sm-4">
                            <h6>Follower</h6>
                            <h3 class="counter">9564</h3>
                         </div>
                         <div class="col-4 col-sm-4">
                            <h6>Following</h6>
                            <h3><span class="counter">49</span>K</h3>
                         </div>
                         <div class="col-4 col-sm-4">
                            <h6>Total Post</h6>
                            <h3><span class="counter">96</span>M</h3>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 box-col-6">
                   <div class="card testimonial text-center">
                      <div class="card-body">
                         <div class="owl-carousel owl-theme" id="owl-carousel-testimonial">
                            <div class="item">
                               <i class="icon-quote-left"></i>
                               <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                               <img class="img-80" src="{{asset('assets/images/dashboard/boy-2.png')}}" alt="">
                               <h5 class="font-primary">Poio klot</h5>
                               <span>Developer</span>
                            </div>
                            <div class="item">
                               <i class="icon-quote-left"></i>
                               <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                               <img class="img-80" src="{{asset('assets/images/dashboard/boy-2.png')}}" alt="">
                               <h5 class="font-primary">Poio klot</h5>
                               <span>Developer</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="card xl-none">
                      <div class="ecommerce-widget card-body">
                         <div class="row">
                            <div class="col-6">
                               <span>New Order</span>
                               <h3 class="total-num counter">25639</h3>
                            </div>
                            <div class="col-6">
                               <div class="text-end">
                                  <ul>
                                     <li>Profit<span class="product-stts font-primary ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                                     <li>Loss<span class="product-stts font-primary ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="progress-showcase">
                            <div class="progress lg-progress-bar">
                               <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">                                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                   <div class="card social-widget-card">
                      <div class="card-body">
                         <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-facebook font-primary"></i></div>
                         <h5 class="b-b-light">Facebook</h5>
                         <div class="row">
                            <div class="col text-center b-r-light">
                               <span>Post</span>
                               <h4 class="counter mb-0">6589</h4>
                            </div>
                            <div class="col text-center">
                               <span>Like</span>
                               <h4 class="counter mb-0">75269</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                   <div class="card social-widget-card">
                      <div class="card-body">
                         <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-twitter font-primary"></i></div>
                         <h5 class="b-b-light">Twitter</h5>
                         <div class="row">
                            <div class="col text-center b-r-light">
                               <span>Post</span>
                               <h4 class="counter mb-0">6589</h4>
                            </div>
                            <div class="col text-center">
                               <span>Follower</span>
                               <h4 class="counter mb-0">75269</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                   <div class="card social-widget-card">
                      <div class="card-body">
                         <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-linkedin font-primary"></i></div>
                         <h5 class="b-b-light">linkedin</h5>
                         <div class="row">
                            <div class="col text-center b-r-light">
                               <span>Post</span>
                               <h4 class="counter mb-0">1234</h4>
                            </div>
                            <div class="col text-center">
                               <span>linkedin</span>
                               <h4 class="counter mb-0">4369</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                   <div class="card social-widget-card">
                      <div class="card-body">
                         <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-google-plus font-primary"></i></div>
                         <h5 class="b-b-light">Google +</h5>
                         <div class="row">
                            <div class="col text-center b-r-light">
                               <span>Post</span>
                               <h4 class="counter mb-0">369</h4>
                            </div>
                            <div class="col text-center">
                               <span>Follower</span>
                               <h4 class="counter mb-0">3458</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                   <div class="card browser-widget">
                      <div class="media card-body">
                         <div class="media-img"><img src="{{asset('assets/images/dashboard/chrome.png')}}" alt=""></div>
                         <div class="media-body align-self-center">
                            <div>
                               <p>Daily </p>
                               <h4><span class="counter">36</span>%</h4>
                            </div>
                            <div>
                               <p>Month </p>
                               <h4><span class="counter">96</span>%</h4>
                            </div>
                            <div>
                               <p>Week </p>
                               <h4><span class="counter">46</span>%</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                   <div class="card browser-widget">
                      <div class="media card-body">
                         <div class="media-img"><img src="{{asset('assets/images/dashboard/firefox.png')}}" alt=""></div>
                         <div class="media-body align-self-center">
                            <div>
                               <p>Daily </p>
                               <h4><span class="counter">36</span>%</h4>
                            </div>
                            <div>
                               <p>Month </p>
                               <h4><span class="counter">96</span>%</h4>
                            </div>
                            <div>
                               <p>Week </p>
                               <h4><span class="counter">46</span>%</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                   <div class="card browser-widget">
                      <div class="media card-body">
                         <div class="media-img"><img src="{{asset('assets/images/dashboard/safari.png')}}" alt=""></div>
                         <div class="media-body align-self-center">
                            <div>
                               <p>Daily </p>
                               <h4><span class="counter">36</span>%</h4>
                            </div>
                            <div>
                               <p>Month </p>
                               <h4><span class="counter">96</span>%</h4>
                            </div>
                            <div>
                               <p>Week </p>
                               <h4><span class="counter">46</span>%</h4>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                   <div class="card">
                      <div class="card-header">
                         <h5>PRODUCTS CART</h5>
                         <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                               <li><i class="fa fa-spin fa-cog"></i></li>
                               <li><i class="view-html fa fa-code"></i></li>
                               <li><i class="icofont icofont-maximize full-card"></i></li>
                               <li><i class="icofont icofont-minus minimize-card"></i></li>
                               <li><i class="icofont icofont-refresh reload-card"></i></li>
                               <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                         </div>
                      </div>
                      <div class="card-body">
                         <div class="user-status table-responsive">
                            <table class="table table-bordernone">
                               <thead>
                                  <tr>
                                     <th scope="col">Details</th>
                                     <th scope="col">Quantity</th>
                                     <th scope="col">Status</th>
                                     <th scope="col">Price</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                     <td class="f-w-600">Simply dummy text of the printing</td>
                                     <td>1</td>
                                     <td class="font-primary">Pending</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-secondary">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">Long established</td>
                                     <td>5</td>
                                     <td class="font-secondary">Cancle</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-success">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">sometimes by accident</td>
                                     <td>10</td>
                                     <td class="font-secondary">Cancle</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-warning">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">Classical Latin literature</td>
                                     <td>9</td>
                                     <td class="font-primary">Return</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-primary">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">keep the site on the Internet</td>
                                     <td>8</td>
                                     <td class="font-primary">Pending</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-danger">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">Molestiae consequatur</td>
                                     <td>3</td>
                                     <td class="font-secondary">Cancle</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-info">6523</div>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td class="f-w-600">Pain can procure</td>
                                     <td>8</td>
                                     <td class="font-primary">Return</td>
                                     <td>
                                        <div class="span badge rounded-pill pill-badge-primary">6523</div>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;user-status table-responsive&quot;&gt;
            &lt;table class=&quot;table table-bordernone&quot;&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope=&quot;col&quot;&gt;Details&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Quantity&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Price&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Simply dummy text of the printing&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;1&lt;/td&gt;
                  &lt;td class=&quot;font-primary&quot;&gt;Pending&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-secondary&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Long established&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;5&lt;/td&gt;
                  &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-success&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;sometimes by accident&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;10&lt;/td&gt;
                  &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-warning&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Classical Latin literature&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;9&lt;/td&gt;
                  &lt;td class=&quot;font-primary&quot;&gt;Return&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-primary&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;keep the site on the Internet&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;8&lt;/td&gt;
                  &lt;td class=&quot;font-primary&quot;&gt;Pending&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-danger&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Molestiae consequatur&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;3&lt;/td&gt;
                  &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-info&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Pain can procure&lt;/td&gt;
                  &lt;td class=&quot;digits&quot;&gt;8&lt;/td&gt;
                  &lt;td class=&quot;font-primary&quot;&gt;Return&lt;/td&gt;
                  &lt;td class=&quot;span badge badge-pill pill-badge-primary&quot;&gt;6523&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                   <div class="card">
                      <div class="card-header">
                         <h5>EMPLOYEE STATUS</h5>
                         <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                               <li><i class="fa fa-spin fa-cog"></i></li>
                               <li><i class="view-html fa fa-code"></i></li>
                               <li><i class="icofont icofont-maximize full-card"></i></li>
                               <li><i class="icofont icofont-minus minimize-card"></i></li>
                               <li><i class="icofont icofont-refresh reload-card"></i></li>
                               <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                         </div>
                      </div>
                      <div class="card-body">
                         <div class="user-status table-responsive">
                            <table class="table table-bordernone">
                               <thead>
                                  <tr>
                                     <th scope="col">Name</th>
                                     <th scope="col">Designation</th>
                                     <th scope="col">Skill Level</th>
                                     <th scope="col">Experience</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                     <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size">
                                           <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                                           <div class="d-inline-block">
                                              <h6>John Deo <span class="text-muted">(14+ Online)</span></h6>
                                           </div>
                                        </div>
                                     </td>
                                     <td>Designer</td>
                                     <td>
                                        <div class="progress-showcase">
                                           <div class="progress" style="height: 8px;">
                                              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                        </div>
                                     </td>
                                     <td>2 Year</td>
                                  </tr>
                                  <tr>
                                     <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size d-flex align-items-center">
                                           <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                                           <div class="d-inline-block">
                                              <h6>Holio Mako <span class="text-muted">(250+ Online)</span></h6>
                                           </div>
                                        </div>
                                     </td>
                                     <td>Developer</td>
                                     <td>
                                        <div class="progress-showcase">
                                           <div class="progress" style="height: 8px;">
                                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                        </div>
                                     </td>
                                     <td>3 Year</td>
                                  </tr>
                                  <tr>
                                     <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size">
                                           <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="">
                                           <div class="d-inline-block">
                                              <h6>Mohsib lara<span class="text-muted">(99+ Online)</span></h6>
                                           </div>
                                        </div>
                                     </td>
                                     <td>Tester</td>
                                     <td>
                                        <div class="progress-showcase">
                                           <div class="progress" style="height: 8px;">
                                              <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                        </div>
                                     </td>
                                     <td>5 Month</td>
                                  </tr>
                                  <tr>
                                     <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size">
                                           <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="">
                                           <div class="d-inline-block">
                                              <h6>Hileri Soli <span class="text-muted">(150+ Online)</span></h6>
                                           </div>
                                        </div>
                                     </td>
                                     <td>Designer</td>
                                     <td>
                                        <div class="progress-showcase">
                                           <div class="progress" style="height: 8px;">
                                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                        </div>
                                     </td>
                                     <td>3 Month</td>
                                  </tr>
                                  <tr>
                                     <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size">
                                           <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/7.jpg')}}" alt="">
                                           <div class="d-inline-block">
                                              <h6>Pusiz bia <span class="text-muted">(14+ Online)</span></h6>
                                           </div>
                                        </div>
                                     </td>
                                     <td>Designer</td>
                                     <td>
                                        <div class="progress-showcase">
                                           <div class="progress" style="height: 8px;">
                                              <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                        </div>
                                     </td>
                                     <td>5 Year</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;user-status table-responsive&quot;&gt;
            &lt;table class=&quot;table table-bordernone&quot;&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Designation&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Skill Level&lt;/th&gt;
                  &lt;th scope=&quot;col&quot;&gt;Experience&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                    &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                      &lt;img src=&quot;&#123;&#123;asset('assets/images/user/4.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                      &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                        &lt;h6&gt;John Deo &lt;span class=&quot;text-muted digits&quot;&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Designer&lt;/td&gt;
                  &lt;td&gt;
                    &lt;div class=&quot;progress-showcase&quot;&gt;
                      &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                        &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;class=&quot;digits&quot;&gt;2 Year&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                    &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                      &lt;img src=&quot;&#123;&#123;asset('assets/images/user/1.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                      &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                        &lt;h6&gt;Holio Mako &lt;span class=&quot;text-muted digits&quot;&gt;(250+ Online)&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Developer&lt;/td&gt;
                  &lt;td&gt;
                    &lt;div class=&quot;progress-showcase&quot;&gt;
                      &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                        &lt;div class=&quot;progress-bar bg-secondary&quot; role=&quot;progressbar&quot; style=&quot;width: 70%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;class=&quot;digits&quot;&gt;3 Year&lt;td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                    &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                      &lt;img src=&quot;&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                      &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                        &lt;h6&gt;Mohsib lara&lt;span class=&quot;text-muted digits&quot;&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Tester&lt;/td&gt;
                  &lt;td&gt;
                    &lt;div class=&quot;progress-showcase&quot;&gt;
                      &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                        &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 60%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;class=&quot;digits&quot;&gt;5 Month&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                    &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                      &lt;img src=&quot;&#123;&#123;asset('assets/images/user/6.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                      &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                        &lt;h6&gt;Hileri Soli &lt;span class=&quot;text-muted digits&quot;&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Designer&lt;/td&gt;
                  &lt;td&gt;
                    &lt;div class=&quot;progress-showcase&quot;&gt;
                      &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                        &lt;div class=&quot;progress-bar bg-secondary&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;class=&quot;digits&quot;&gt;3 Month&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                    &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                      &lt;img src=&quot;&#123;&#123;asset('assets/images/user/7.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                      &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                        &lt;h6&gt;Pusiz bia &lt;span class=&quot;text-muted digits&quot;&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Designer&lt;/td&gt;
                  &lt;td&gt;
                    &lt;div class=&quot;progress-showcase&quot;&gt;
                      &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                        &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 90%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td&gt;class=&quot;digits&quot;&gt;5 Year&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-4 xl-50 col-md-12 box-col-6">
                   <div class="card height-equal">
                      <div class="calender-widget">
                         <div class="cal-img"></div>
                         <div class="cal-date">
                            <h5>25<br>APRIL</h5>
                         </div>
                         <div class="cal-desc text-center card-body">
                            <h6 class="f-w-600">I must explain to you how all this mistaken idea truth</h6>
                            <p class="text-muted mt-3 mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,Letraset sheets containing Lorem Ipsum passages, and more recently with desktop Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-8 xl-50 col-md-12 box-col-6">
                   <div class="card height-equal">
                      <div class="card-header">
                         <h5>Contact Us</h5>
                         <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                               <li><i class="fa fa-spin fa-cog"></i></li>
                               <li><i class="view-html fa fa-code"></i></li>
                               <li><i class="icofont icofont-maximize full-card"></i></li>
                               <li><i class="icofont icofont-minus minimize-card"></i></li>
                               <li><i class="icofont icofont-refresh reload-card"></i></li>
                               <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                         </div>
                      </div>
                      <div class="contact-form card-body">
                         <form class="theme-form">
                            <div class="form-icon"><i class="icofont icofont-envelope-open"></i></div>
                            <div class="mb-3">
                               <label for="exampleInputName">Your Name</label>
                               <input class="form-control" id="exampleInputName" type="text" placeholder="John Dio">
                            </div>
                            <div class="mb-3">
                               <label class="col-form-label" for="exampleInputEmail1">Email</label>
                               <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Demo@gmail.com">
                            </div>
                            <div class="mb-3">
                               <label class="col-form-label" for="exampleInputEmail1">Message</label>
                               <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-sm-end">
                               <button class="btn btn-primary-gradien">SEND IT</button>
                            </div>
                         </form>
                         <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;contact-form card-body&quot;&gt;
            &lt;form class=&quot;theme-form&quot;&gt;
              &lt;div class=&quot;form-icon&quot;&gt;
                &lt;i class=&quot;icofont icofont-envelope-open&quot;&gt;&lt;/i&gt;
              &lt;/div&gt;
              &lt;div class=&quot;mb-3&quot;&gt;
                &lt;label for=&quot;exampleInputName&quot;&gt;Your Name&lt;/label&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputName&quot; placeholder=&quot;John Dio&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;mb-3&quot;&gt;
                &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;col-form-label&quot;&gt;Email&lt;/label&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; placeholder=&quot;Demo@gmail.com&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;mb-3&quot;&gt;
                &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;col-form-label&quot;&gt;Message&lt;/label&gt;
                &lt;textarea row=&quot;3&quot; cols=&quot;50&quot; class=&quot;form-control textarea&quot; placeholder=&quot;Your Message&quot;&gt;&lt;/textarea&gt;
              &lt;/div&gt;
              &lt;div class=&quot;text-sm-end&quot;&gt;
                &lt;button class=&quot;btn btn-primary-gradien&quot;&gt;SEND IT&lt;/button&gt;
              &lt;/div&gt;
            &lt;/form&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright {{ date('Y') }} © Cuba theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/general-widget.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>

    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- Plugin used-->
    <script type="text/javascript"> 
        localStorage.clear();
        $(".page-wrapper").attr("class", "page-wrapper compact-wrapper color-sidebar");
        localStorage.setItem('page-wrapper', 'compact-wrapper color-sidebar');
    </script>
  </body>
</html>