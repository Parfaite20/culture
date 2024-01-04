<!doctype html>
<html lang="en" class="no-js" data-scheme="alt">
<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Responsive bootstrap 4 admin template" name="description" />
	

    <title>Culture</title>
	
	@include('liens.lien_css')
    @yield('css')
    @livewireStyles
</head>
<body class="home navbar-sticky navbar-transparent">
	
	@include('layouts.head')

	{{$slot}}

	@include('layouts.foot')

	@include('liens.lien_js') 
    @yield('js')
    @livewireScripts

</body>
</html>