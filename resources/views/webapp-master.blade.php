<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', $_title)</title>
	<!-- 新 Bootstrap 4.0 核心 CSS 文件 -->
	<!-- <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css"> -->
	<!-- 新 Bootstrap 3.0 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	
</head>
<body>
<vs-alert 
  show
  state="success"
  dismissible>
  This is an alert
</vs-alert>
<section class="dx-header">
	<div class="col-xs-12">
		@yield('title', $_title)123
		<div class="pull-right">
			<div class="glyphicon glyphicon-refresh"></div>
		</div>
	</div>
</section>
@yield('body')
<script src="js/main.js"></script>
</body>
</html>