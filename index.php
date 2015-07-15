<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>qdUploader</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/qdUploader.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.qdUploader.js"></script>
	  <script>
	  $(function() {
	    $("#sortable").sortable({
	    	cancel: '.uploader-btn'
	    });
	    $("#sortable").disableSelection();
	  });
	  </script>
</head>
<body>
	<div class="container">
		<section class="simple-form uploader" id="qdUploader">
			<form class="form-uploader" id="uploadNew" action="upload.php" method="post">
				<input type="text" placeholder="商品名称" class="form-control" required="required" maxlength="41" autocomplete="off" title="请填写商品名称"  name="thing[title]">
			<ul id="sortable">
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li>
					<figure>
						<img src="upload/1.jpg" title="拖动以改变顺序" alt="" width="80" height="80">
						<a class="delete" title="删除" href="#" onlick="return false;">X</a>
					</figure>
				</li>
				<li class="uploader-btn" id="uploadAdd">+
					<input type="file" name="photo[image]" multiple="multiple" required="required" accept="image/*">
				</li>
			</ul>
			<button type="submit" class="btn btn-primary">上传</button>
			</form>
		</section>
	</div>
</body>
</html>