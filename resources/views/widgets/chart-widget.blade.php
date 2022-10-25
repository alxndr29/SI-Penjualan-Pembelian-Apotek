@extends('layouts.simple.master')
@section('title', 'Chart')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Chart</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Widgets</li>
<li class="breadcrumb-item active">Chart</li>
@endsection

@section('content')
<div class="container-fluid">
   <!-- Chart widget top Start-->
   <div class="row">
      <div class="col-xl-4 col-md-12 box-col-12">
         <div class="card o-hidden">
            <div class="chart-widget-top">
               <div class="row card-body">
                  <div class="col-5">
                     <h6 class="f-w-600 font-primary">SALE</h6>
                     <span class="num"><span class="counter">90</span>%<i class="icon-angle-up f-12 ms-1"></i></span>
                  </div>
                  <div class="col-7 text-end">
                     <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
                  </div>
               </div>
               <div>
                  <div id="chart-widget1"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 col-md-12 box-col-12">
         <div class="card o-hidden">
            <div class="chart-widget-top">
               <div class="row card-body">
                  <div class="col-7">
                     <h6 class="f-w-600 font-secondary">PROJECTS</h6>
                     <span class="num"><span class="counter">30</span>%<i class="icon-angle-up f-12 ms-1"></i></span>
                  </div>
                  <div class="col-5 text-end">
                     <h4 class="num total-value counter">12569</h4>
                  </div>
               </div>
               <div id="chart-widget2">
                  <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 col-md-12 box-col-12">
         <div class="card o-hidden">
            <div class="chart-widget-top">
               <div class="row card-body">
                  <div class="col-8">
                     <h6 class="f-w-600 font-success">PRODUCTS</h6>
                     <span class="num"><span class="counter">68</span>%<i class="icon-angle-up f-12 ms-1"></i></span>
                  </div>
                  <div class="col-4 text-end">
                     <h4 class="num total-value"><span class="counter">93</span>M</h4>
                  </div>
               </div>
               <div id="chart-widget3">
                  <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Chart widget top Ends-->
   <!-- Chart widget with bar chart Start-->
   <div class="row">
      <div class="col-xl-7 col-md-12 box-col-12">
         <div class="card o-hidden">
            <div class="card-header">
               <h5>Marketin Expenses</h5>
            </div>
            <div class="bar-chart-widget">
               <div class="bottom-content card-body">
                  <div class="row">
                     <div class="col-12">
                        <div id="chart-widget4"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-5 col-md-12 box-col-12">
         <div class="card o-hidden">
            <div class="card-header">
               <h5>Total Earning</h5>
            </div>
            <div class="bar-chart-widget">
               <div class="top-content bg-primary"></div>
               <div class="bottom-content card-body">
                  <div class="row">
                     <div class="col-12">
                        <div id="chart-widget5"> </div>
                     </div>
                  </div>
                  <div class="row text-center">
                     <div class="col-4 b-r-light">
                        <div>
                           <span class="font-primary">12%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Year</span>
                           <h4 class="num m-0"><span class="counter color-bottom">3659</span>M</h4>
                        </div>
                     </div>
                     <div class="col-4 b-r-light">
                        <div>
                           <span class="font-primary">15%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Month</span>
                           <h4 class="num m-0"><span class="counter color-bottom">698</span>M</h4>
                        </div>
                     </div>
                     <div class="col-4">
                        <div>
                           <span class="font-primary">34%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Today</span>
                           <h4 class="num m-0"><span class="counter color-bottom">9361</span>M</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 col-lg-12 box-col-6 xl-50">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-9">
                     <h5>Skill Status</h5>
                  </div>
                  <div class="col-3 text-end"><i class="text-muted" data-feather="trending-up"></i></div>
               </div>
            </div>
            <div class="card-body">
               <div class="chart-container">
                  <div id="circlechart"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 col-lg-12 box-col-6 xl-50">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-9">
                     <h5>Order Status</h5>
                  </div>
                  <div class="col-3 text-end"><i class="text-muted" data-feather="shopping-bag"></i></div>
               </div>
            </div>
            <div class="card-body">
               <div class="chart-container">
                  <div id="progress1"></div>
                  <div id="progress2"></div>
                  <div id="progress3"></div>
                  <div id="progress4"></div>
                  <div id="progress5">               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Chart widget with bar chart Ends-->
   <!-- small widgets Start-->
   <div class="row">
      <!-- Live Product chart widget Start-->
      <div class="xl-50 col-xl-7 col-lg-12">
         <div class="small-chart-widget chart-widgets-small">
            <div class="card">
               <div class="card-header">
                  <h5>Live Products</h5>
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
                  <div class="chart-container">
                     <div class="row">
                        <div class="col-12">
                           <div id="chart-widget6"></div>
                        </div>
                     </div>
                  </div>
                  <div class="code-box-copy">
                     <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-12"&gt;
      &lt;div id="chart-widget6"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Live Product chart widget Ends-->
      <!-- Turnover chart widget Start-->
      <div class="xl-50 col-xl-5 col-lg-12">
         <div class="small-chart-widget chart-widgets-small">
            <div class="card">
               <div class="card-header">
                  <h5>Turnover</h5>
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
                  <div class="chart-container">
                     <div class="row">
                        <div class="col-12">
                           <div id="chart-widget7"></div>
                        </div>
                     </div>
                  </div>
                  <div class="code-box-copy">
                     <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-12"&gt;
      &lt;div id="chart-widget7"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Turnover chart widget Ends-->
      <!-- Monthly Sales chart widget Start-->
      <div class="xl-50 col-xl-5 col-lg-12">
         <div class="small-chart-widget chart-widgets-small">
            <div class="card">
               <div class="card-header">
                  <h5>Monthly Sales</h5>
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
                  <div class="chart-container">
                     <div class="row">
                        <div class="col-12">
                           <div id="chart-widget8"></div>
                        </div>
                     </div>
                  </div>
                  <div class="code-box-copy">
                     <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-12"&gt;
      &lt;div id="chart-widget8"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Monthly Sales chart widget Ends-->
      <!-- Uses chart widget Start-->
      <div class="xl-50 col-xl-7 col-lg-12">
         <div class="small-chart-widget chart-widgets-small">
            <div class="card">
               <div class="card-header">
                  <h5>Uses</h5>
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
                  <div class="chart-container">
                     <div class="row">
                        <div class="col-12">
                           <div id="chart-widget9"></div>
                        </div>
                     </div>
                  </div>
                  <div class="code-box-copy">
                     <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-12"&gt;
      &lt;div id="chart-widget9"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Uses chart widget Ends-->
      <!-- small widgets Ends-->
      <!-- Browser uses and website visiter widget Start-->
   </div>
   <div class="row">
      <!-- browser uses widget chart Start-->
      <div class="col-sm-12 box-col-12">
         <div class="donut-chart-widget">
            <div class="card">
               <div class="card-header">
                  <h5>Browser Uses</h5>
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
                  <div id="chart-widget13"></div>
                  <div class="code-box-copy">
                     <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div id="#chart-widget13"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- browser uses widget chart Endss-->
      <!-- status widget Start-->
   </div>
   <div class="row">
      <div class="col-xl-5 col-lg-12 box-col-12">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-9">
                     <h5>Finance</h5>
                  </div>
                  <div class="col-3 text-end"><i class="text-muted" data-feather="navigation"></i></div>
               </div>
            </div>
            <div class="card-body">
               <div class="chart-container">
                  <div id="columnchart"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-7 col-lg-12 box-col-6">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-9">
                     <h5>Order Status</h5>
                  </div>
                  <div class="col-3 text-end"><i class="text-muted" data-feather="shopping-bag"></i></div>
               </div>
            </div>
            <div class="card-body">
               <div class="chart-container">
                  <div id="linechart"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- status widget Ends-->
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/chart-widget.js')}}"></script>
@endsection

