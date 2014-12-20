<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Braddock Heights, Maryland')</title>
   
    <head class="row">
		@include('includes.htmlhead')
	</head>
   

	

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

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
    
    @yield('footer')

</body>
</html>