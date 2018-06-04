<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="source/dropzone.css">
	
</head>
<body>
	<h3>Image Upload</h3>
	{!! Form::open (['url' => ['/postUpload'], 'enctype' => 'multipart/form-data' ,'class' => 'dropzone' , 'method' => 'post', 'id' => 'myImageDropzone','files' =>'true']) !!}
	
	{!! Form::close() !!}
	


<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script type="text/javascript" src="source/dropzone.js"></script>
<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>
</body>
</html>
