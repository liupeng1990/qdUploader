<html>
<head>
	<title>qdUploader</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/qdUploader.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.qdUploader.js"></script>
</head>
<body>
	<section class="simple-form uploader" id="qdUploader">
		<form class="form-uploader" id="uploadNew" action="upload.php" method="post">
			<input type="text" placeholder="商品名称" class="form-control" required="required" maxlength="41" autocomplete="off" title="请填写商品名称"  name="thing[title]">
		<ul>
			<li class="uploader-btn">+</li>
		</ul>
		</form>
	</section>
</body>
</html>