@extends('layouts.simple.master')
@section('title', 'General')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/whether-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>General</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Widgets</li>
<li class="breadcrumb-item active">General</li>
@endsection

@section('content')
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
@endsection

@section('script')
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
@endsection

