<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Braddock Heights, Maryland')</title>
   
    
	@include('includes.htmlhead')
	
    @yield('head')

</head>
<body>
    <!-- Any licensing information can go here. -->

    @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif

    <!--<nav>
		<ul>
		@if(Auth::check())
			<li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>
		@else
			<li><a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li>
		@endif
		</ul>
	</nav>-->
    
    @yield('content')

 <!--   <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>-->
     <!-- Use jQuery CDN as indicated on this site: http://jquery.com/download/ -->
     <!-- Use jQuery CDN as indicated on this site: http://jquery.com/download/ -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="/js/jquery.easing.min.js"></script>

<script type="text/javascript" src="/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="/js/supersized.shutter.min.js"></script>
    
    @yield('footer')

</body>
</html>