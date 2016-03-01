<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', $_title)</title>
	<!-- 新 Bootstrap 3.0 核心 CSS 文件 -->
	<!-- <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
@yield('body')
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
@yield('script')
</body>
</html>