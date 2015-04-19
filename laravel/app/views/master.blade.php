<!DOCTYPE html>
<html>
	<head>
	
    @include('inc.head')
	
	</head>
	<body>
	  
	  @include('inc.header')
  	
  	@yield('content')
    
    <!-- 	SCRIPTS	 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		{{ HTML::script('assets/js/app.min.js') }}
  	@yield('scripts')
  	
	</body>
</html>
