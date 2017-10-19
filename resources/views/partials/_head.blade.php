
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Developer-X @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->
<link rel="icon" href="{!! asset('images/logo.png') !!}"/>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
{{ Html::style('css/styles.css') }}
{{ Html::style('themes/default/default.css') }}
{{ Html::style('themes/light/light.css') }}
{{ Html::style('themes/dark/dark.css') }}
{{ Html::style('themes/bar/bar.css') }}
{{ Html::style('css/nivo-slider.css') }}


<!-- image gallery -->

{{ Html::style('gallery/css/bootstrap.min.css') }}
{{ Html::style('gallery/css/thumbnail-gallery.css') }}
	
	
	<!-- <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}" type="text/css" media="screen" /> -->


@yield('stylesheets')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->