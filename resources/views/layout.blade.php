<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
	@yield('head')
</head>
<body>
	@yield('bar')
	@yield('content')
	@yield('footer')
</body>
<script type="text/javascript" src="{{URL::asset('js/bundle.js')}}"></script>
</html>