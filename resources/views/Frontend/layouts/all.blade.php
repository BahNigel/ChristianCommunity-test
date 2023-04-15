<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Swipe – The Simplest Chat Platform</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/favicon.png') }}" type="image/png" rel="icon">
		<!-- Fa_icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/css/icons/font-awesome.min.css') }}" type="image/png" rel="icon">
	</head>
	<body>
		<main>
			<div class="layout">
				@yield('content')
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap/Swipe core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/js/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
		<script src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/js/vendor/popper.min.js') }}"></script>
		<script src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/js/swipe.min.js') }}"></script>
		<script src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/js/bootstrap.min.js') }}"></script>
		<script>
			function scrollToBottom(el) { el.scrollTop = el.scrollHeight; }
			scrollToBottom(document.getElementById('content'));
		</script>
	</body>

</html>