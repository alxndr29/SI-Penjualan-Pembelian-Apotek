@extends('layouts.simple.master')
@section('title', 'Ecommerce')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Ecommerce</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Ecommerce</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row size-column">
    <div class="col-xl-7 box-col-12 xl-100">
      <div class="row dash-chart">
        <div class="col-xl-6 box-col-6 col-md-6">
          <div class="card o-hidden">
            <div class="card-header card-no-border">
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
              <div class="media">
                <div class="media-body">
                  <p><span class="f-w-500 font-roboto">Today Total sale</span><span class="f-w-700 font-primary ms-2">89.21%</span></p>
                  <h4 class="f-w-500 mb-0 f-26">$<span class="counter">3000.56</span></h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="media">
                <div class="media-body">
                  <div class="profit-card">
                    <div id="spaline-chart"></div>
                  </div>
                </div>
              </div>
              <div class="code-box-copy">
                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total sale&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body p-0&quot;&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;div class=&quot;profit-card&quot;&gt;
          &lt;div id=&quot;spaline-chart&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt; </code></pre>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 box-col-6 col-md-6">
          <div class="card o-hidden">
            <div class="card-header card-no-border">
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
              <div class="media">
                <div class="media-body">
                  <p><span class="f-w-500 font-roboto">Today Total visits</span><span class="f-w-700 font-primary ms-2">35.00%</span></p>
                  <h4 class="f-w-500 mb-0 f-26 counter">9,050</h4>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="monthly-visit">
                <div id="column-chart"></div>
              </div>
              <div class="code-box-copy">
                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total visits&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;95.56%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;5,953&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;monthly-visit&quot;&gt;
       &lt;div id=&quot;column-chart&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
          <div class="card o-hidden">
            <div class="card-body">
              <div class="ecommerce-widgets media">
                <div class="media-body">
                  <p class="f-w-500 font-roboto">Our Sale Value<span class="badge pill-badge-primary ms-3">New</span></p>
                  <h4 class="f-w-500 mb-0 f-26">$<span class="counter">7454.25</span></h4>
                </div>
                <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
          <div class="card o-hidden">
            <div class="card-body">
              <div class="media">
                <div class="media-body">
                  <p class="f-w-500 font-roboto">Today Stock value<span class="badge pill-badge-primary ms-3">Hot</span></p>
                  <div class="progress-box">
                    <h4 class="f-w-500 mb-0 f-26">$<span class="counter">9000.04</span></h4>
                    <div class="progress sm-progress-bar progress-animate app-right d-flex justify-content-end">
                      <div class="progress-gradient-primary" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="font-primary">88%</span><span class="animate-circle"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-5 box-col-12 xl-50">
      <div class="card o-hidden dash-chart">
        <div class="card-header card-no-border">
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
          <div class="media">
            <div class="media-body">
              <p><span class="f-w-500 font-roboto">Total Profit</span><span class="font-primary f-w-700 ms-2">99.00%</span></p>
              <h4 class="f-w-500 mb-0 f-26">$<span class="counter">3000.56</span></h4>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="negative-container">
            <div id="negative-chart"></div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden dash-chart&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Total Earning&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;profit-card&quot;&gt;
        &lt;div id=&quot;negative-chart&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;  </code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 box-col-12">
      <div class="card">
        <div class="card-header card-no-border">
          <h5>New Product</h5>
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
        <div class="card-body pt-0">
          <div class="our-product">
            <div class="table-responsive">
              <table class="table table-bordernone">
                <tbody class="f-w-500">
                  <tr>
                    <td>
                      <div class="media">
                        <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-1.png')}}" alt="">
                        <div class="media-body">
                          <span>Hike Shoes</span>
                          <p class="font-roboto">100 item</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>coupon code</p>
                      <span>PIX001</span>
                    </td>
                    <td>
                      <p>-51%</p>
                      <span>$99.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="media">
                        <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-3.png')}}" alt="">
                        <div class="media-body">
                          <span>Tree Pot</span>
                          <p class="font-roboto">105 item</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>coupon code</p>
                      <span>PIX002</span>
                    </td>
                    <td>
                      <p>-78%</p>
                      <span>$66.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="media">
                        <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-4.png')}}" alt="">
                        <div class="media-body">
                          <span>Bag</span>
                          <p class="font-roboto">604 item</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>coupon code</p>
                      <span>PIX003</span>
                    </td>
                    <td>
                      <p>-04%</p>
                      <span>$116.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="media">
                        <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-5.png')}}" alt="">
                        <div class="media-body">
                          <span>Wtach</span>
                          <p class="font-roboto">541 item</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>coupon code</p>
                      <span>PIX004</span>
                    </td>
                    <td>
                      <p>-60%</p>
                      <span>$99.00</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="media">
                        <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-6.png')}}" alt="">
                        <div class="media-body">
                          <span>T-shirt</span>
                          <p class="font-roboto">999 item</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>coupon code</p>
                      <span>PIX005</span>
                    </td>
                    <td>
                      <p>-50%</p>
                      <span>$58.00</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;Our Product&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;our-product&quot;&gt;
      &lt;div class=&quot;table-responsive&quot;&gt;
        &lt;table class=&quot;table table-bordernone&quot;&gt;
          &lt;tbody class=&quot;f-w-500&quot;&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-1.png')&#125;&#125;&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-3.png')&#125;&#125;&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Head Phon&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;165 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;HEA415&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-28%&lt;/p&gt;&lt;span&gt;$36.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-4.png')&#125;&#125;&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Tree Pot&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;364 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;TRE113&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-14%&lt;/p&gt;&lt;span&gt;$16.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-5.png')&#125;&#125;&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-6.png')&#125;&#125;&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
          &lt;/tbody&gt;
        &lt;/table&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 box-col-12">
      <div class="card">
        <div class="card-header card-no-border">
          <h5>Location</h5>
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
        <div class="card-body pt-0">
          <div class="dash-map">
            <div id="map"></div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;Location&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;dash-map&quot;&gt;
      &lt;div id=&quot;map&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 xl-50 box-col-12">
      <div class="card">
        <div class="card-header card-no-border">
          <h5>News & Updates</h5>
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
        <div class="card-body new-update pt-0">
          <div class="activity-timeline">
            <div class="media">
              <div class="activity-line"></div>
              <div class="activity-dot-secondary"></div>
              <div class="media-body">
                <span>Update Product</span>
                <p class="font-roboto">Quisque a consequat ante Sit amet magna at volutapt.</p>
              </div>
            </div>
            <div class="media">
              <div class="activity-dot-primary"></div>
              <div class="media-body">
                <span>James liked Nike Shoes</span>
                <p class="font-roboto">Aenean sit amet magna vel magna fringilla ferme.</p>
              </div>
            </div>
            <div class="media">
              <div class="activity-dot-secondary"></div>
              <div class="media-body">
                <span>john just buy your product<i class="fa fa-circle circle-dot-secondary pull-right"></i></span>
                <p class="font-roboto">Vestibulum nec mi suscipit, dapibus purus.....</p>
              </div>
            </div>
            <div class="media">
              <div class="activity-dot-primary"></div>
              <div class="media-body">
                <span>Jihan Doe just save your product<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                <p class="font-roboto">Curabitur egestas consequat lorem.</p>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;New &amp; Updates&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body new-update pt-0&quot;&gt;
    &lt;div class=&quot;activity-timeline&quot;&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-line&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Updated Product&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;You liked James products&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Aenean sit amet magna vel magna fringilla ferme.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;James just like your product&lt;i class=&quot;fa fa-circle circle-dot-secondary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Vestibulum nec mi suscipit, dapibus purus.....&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Jihan Doe just like your product&lt;i class=&quot;fa fa-circle circle-dot-primary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Curabitur egestas consequat lorem.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 risk-col xl-100 box-col-12">
      <div class="card total-users">
        <div class="card-header card-no-border">
          <h5>Risk Factor</h5>
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
        <div class="card-body pt-0">
          <div class="apex-chart-container goal-status text-center row">
            <div class="rate-card col-xl-12">
              <div class="goal-chart">
                <div id="riskfactorchart"></div>
              </div>
              <div class="goal-end-point">
                <ul>
                  <li class="mt-0 pt-0">
                    <h6 class="font-primary">As From</h6>
                    <h6 class="f-w-400">24 March 2021</h6>
                  </li>
                  <li>
                    <h6 class="mb-2 f-w-400">Total Goal</h6>
                    <h5 class="mb-0">$94,000.20</h5>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="col-xl-12">
              <li>
                <div class="goal-detail">
                  <h6> <span class="font-primary">Goal Archive : </span>$91,000.000</h6>
                  <div class="progress sm-progress-bar progress-animate">
                    <div class="progress-gradient-primary" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="goal-detail mb-0">
                  <h6><span class="font-primary">Duration: </span>9 Month</h6>
                  <div class="progress sm-progress-bar progress-animate">
                    <div class="progress-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="btn-download btn btn-gradient f-w-500">Download details</div>
              </li>
            </ul>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card total-users&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;Risk Factor&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;apex-chart-container goal-status text-center row&quot;&gt;
      &lt;div class=&quot;rate-card col-xl-12&quot;&gt;
        &lt;div class=&quot;goal-chart&quot;&gt;
          &lt;div id=&quot;riskfactorchart&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;goal-end-point&quot;&gt;
          &lt;ul&gt;
            &lt;li class=&quot;mt-0 pt-0&quot;&gt;
              &lt;h6 class=&quot;font-primary&quot;&gt;As From&lt;/h6&gt;
              &lt;h6 class=&quot;f-w-400&quot;&gt;24 January 2019&lt;/h6&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;h6 class=&quot;mb-2 f-w-400&quot;&gt;Total Goal&lt;/h6&gt;
              &lt;h5 class=&quot;mb-0&quot;&gt;$84,376.29&lt;/h5&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;ul class=&quot;col-xl-12&quot;&gt;
        &lt;li&gt;
          &lt;div class=&quot;goal-detail&quot;&gt;
            &lt;h6&gt; &lt;span class=&quot;font-primary&quot;&gt;Goal Archive : &lt;/span&gt;$81,586.253&lt;/h6&gt;
            &lt;div class=&quot;progress sm-progress-bar progress-animate&quot;&gt;
              &lt;div class=&quot;progress-gradient-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 60%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;goal-detail mb-0&quot;&gt;      
            &lt;h6&gt;&lt;span class=&quot;font-primary&quot;&gt;Duration: &lt;/span&gt;6 Month&lt;/h6&gt;
            &lt;div class=&quot;progress sm-progress-bar progress-animate&quot;&gt;
              &lt;div class=&quot;progress-gradient-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
          &lt;div class=&quot;btn-download btn btn-gradient f-w-500&quot;&gt;Download Report&lt;/div&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-9 xl-100 box-col-12">
      <div class="row">
        <div class="col-xl-12">
          <div class="card offer-box">
            <div class="card-body p-0">
              <div class="offer-slider">
                <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="selling-slide row">
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="left-content">
                              <p>Much More Selling product</p>
                              <h4 class="f-w-600">Best Selling Product</h4>
                              <span class="badge badge-white rounded-pill">78% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 12345</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                          <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="right-content">
                              <p>Money back Guarrantee</p>
                              <h4 class="f-w-600">Women Straight Kurta</h4>
                              <span class="badge badge-white rounded-pill">$100.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="selling-slide row">
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="left-content">
                              <p>Money back Guarrantee</p>
                              <h4 class="f-w-600">Women Straight Kurta</h4>
                              <span class="badge badge-white rounded-pill">$100.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                          <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="right-content">
                              <p>Money back Guarrantee</p>
                              <h4 class="f-w-600">Nike Air Shoes</h4>
                              <span class="badge badge-white rounded-pill">$120.55</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="selling-slide row">
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="left-content">
                              <p>Maximum Selling product</p>
                              <h4 class="f-w-600">Best Selling Product</h4>
                              <span class="badge badge-white rounded-pill">50% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 21546</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                          <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                          <div class="d-flex">
                            <div class="right-content">
                              <p>Money back Guarrantee</p>
                              <h4 class="f-w-600">Nike Air Shoes</h4>
                              <span class="badge badge-white rounded-pill">$120.55</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="best-seller-table responsive-tbl">
                <div class="item">
                  <div class="table-responsive product-list">
                    <table class="table table-bordernone">
                      <thead>
                        <tr>
                          <th class="f-22">
                            Best Seller
                          </th>
                          <th>Date</th>
                          <th>Product</th>
                          <th>Country</th>
                          <th>Total</th>
                          <th class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/7.jpg')}}" alt="">
                              <div class="status-circle bg-primary"></div>
                              <div class="d-inline-block">
                                <span>John keter</span>
                                <p class="font-roboto">2019</p>
                              </div>
                            </div>
                          </td>
                          <td>06 August</td>
                          <td>CAP</td>
                          <td><i class="flag-icon flag-icon-gb"></i></td>
                          <td> <span class="label">$5,08,652</span></td>
                          <td class="text-end"><i class="fa fa-check-circle"></i>Done</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/4.jpg')}}" alt="">
                              <div class="status-circle bg-primary"></div>
                              <div class="d-inline-block">
                                <span>Herry Venter</span>
                                <p class="font-roboto">2020</p>
                              </div>
                            </div>
                          </td>
                          <td>21 March</td>
                          <td>Branded Shoes</td>
                          <td><i class="flag-icon flag-icon-us"></i></td>
                          <td> <span class="label">$59,105</span></td>
                          <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/16.jpg')}}" alt="">
                              <div class="status-circle bg-primary"></div>
                              <div class="d-inline-block">
                                <span>loain deo</span>
                                <p class="font-roboto">2020</p>
                              </div>
                            </div>
                          </td>
                          <td>09 March</td>
                          <td>Headphone</td>
                          <td><i class="flag-icon flag-icon-za"></i></td>
                          <td> <span class="label">$10,155</span></td>
                          <td class="text-end"><i class="fa fa-check-circle"></i>Success</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/11.jpg')}}" alt="">
                              <div class="status-circle bg-primary"></div>
                              <div class="d-inline-block">
                                <span>Horen Hors</span>
                                <p class="font-roboto">2020</p>
                              </div>
                            </div>
                          </td>
                          <td>14 February</td>
                          <td>Cell Phone</td>
                          <td><i class="flag-icon flag-icon-at"></i></td>
                          <td> <span class="label">$90,568</span></td>
                          <td class="text-end"> <i class="fa fa-check-circle"></i>In process</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/3.jpg')}}" alt="">
                              <div class="status-circle bg-primary"></div>
                              <div class="d-inline-block">
                                <span>fenter Jessy</span>
                                <p class="font-roboto">2021</p>
                              </div>
                            </div>
                          </td>
                          <td>12 January</td>
                          <td>Earings</td>
                          <td><i class="flag-icon flag-icon-br"></i></td>
                          <td> <span class="label">$10,652</span></td>
                          <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(
      document.getElementById('map'),
      {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});
  
    var iconBase =
      "{{ asset('assets/images/dashboard-2')}}/";
    
    var icons = {
      userbig: {
        icon: iconBase + '1.png'
      },
      library: {
        icon: iconBase + '3.png'
      },
      info: {
        icon: iconBase + '2.png'
      }
    };
  
    var features = [
      {
        position: new google.maps.LatLng(-33.91752, 151.23270),
        type: 'info'
      }, {
        position: new google.maps.LatLng(-33.91700, 151.23280),
        type: 'userbig'
      },  {
        position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
        type: 'library'
      }
    ];
  
    // Create markers.
    for (var i = 0; i < features.length; i++) {
      var marker = new google.maps.Marker({
        position: features[i].position,
        icon: icons[features[i].type].icon,
        map: map
      });
    };
  }
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>
@endsection

