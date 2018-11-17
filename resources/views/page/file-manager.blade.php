<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	 <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
</head>
<body>
	<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;">
 <div>
 <a href="/laravel-filemanager?type=image" title="nhan vao se co ket qua"> Ket qua</a>
</div>
 <script type="text/javascript">
 	$('#lfm').filemanager('image');
 </script>
</body>
</html>