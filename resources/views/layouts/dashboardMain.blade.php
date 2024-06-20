<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.admin.head')

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	@include('includes.admin.preLoader')
	<!-- [ Pre-loader ] End -->
	
    <!-- [ navigation menu ] start -->
	@include('includes.admin.navigation')
	<!-- [ navigation menu ] end -->
	
    <!-- [ Header ] start -->
	@include('includes.admin.header')
    <!-- [ Header ] end -->
	<div class="pcoded-main-container">
    <div class="pcoded-content">
    @yield('content')
	</div>
	</div>
	
   

<!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="{{asset('assets/admin/images/browser/chrome.png')}}" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="{{asset('assets/admin/images/browser/firefox.png')}}" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="{{asset('assets/admin/images/browser/opera.png')}}" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="{{asset('assets/admin/images/browser/safari.png')}}" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{asset('assets/admin/images/browser/ie.png')}}" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    @include('includes.admin.footerjs')
    </body>

</html>
