<!DOCTYPE html>
<html>
<head>
	<title>Sweet alert2</title>
	<meta charset="utf-8">
	<link href="source/sweetalert2/dist/sweetalert2.css" rel="stylesheet">
	<link href="source/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="row col-md-12">
			<div class="col-md-6">
			<h1>Sweet Alert</h1> &nbsp;
			<button onclick="sweetalert()" class="btn btn-warning">Try me</button>
			</div>
			<div class="col-md-6">
			<span id="text-span"></span><br>
			<span id="text-span2"></span>
			</div>
		
		</div>
		<a href="{{route('route',['id' => 1992, 'name' => 'Thanh Hung'])}}">Route </a>
	</div>
	<script src="source/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
		function sweetalert()
		{
			//document.getElementById('text-span').innerHTML = 'Hello JavaScript!' ;
			$( "#text-span" ).text('Đang test thử chức năng nó như thế nào thôi');
			$( "#text-span2" ).text('Đừng hiểu lầm làm gì cho mệt');  
			// Swal({
			// 	  title: 'Are you sure?',
			// 	  text: 'You will not be able to recover this imaginary file!',
			// 	  type: 'warning',
			// 	  showCancelButton: true,
			// 	  confirmButtonText: 'Yes, delete it!',
			// 	  cancelButtonText: 'No, keep it'
			// 	}).then((result) => {
			// 	  if (result.value) {
			// 	    Swal({
			// 	      	title: 'Success!',
   //                      text: 'Xoa roi do ma',
   //                      type: 'success',
   //                      timer: '1500'
			// 	    })
			// 	  } else if (result.dismiss === Swal.DismissReason.cancel) {
			// 	    Swal(
			// 	      'Cancelled',
			// 	      'Your imaginary file is safe :)',
			// 	      'error'
   //  				)
  	// 			}
			// })
			// const toast = swal.mixin({
			//   toast: true,
			//   position: 'top-end',
			//   showConfirmButton: false,
			//   timer: 3000
			// });

			// toast({
			//   type: 'success',
			//   title: 'Signed in successfully'
			// })

// 			swal({
// 			  title: 'Auto close alert!',
// 			  text: 'I will close in 2 seconds.',
// 			  timer: 2000,
// 			  onOpen: () => {
// 			    swal.showLoading()
// 			  }
// 			}).then((result) => {
// 			  if (
// 			    // Read more about handling dismissals
// 			    result.dismiss === swal.DismissReason.timer
// 			  ) {
// 			    console.log('I was closed by the timer')
// 			  }
// })
				// swal({
				//   title: 'Custom animation with Animate.css',
				//   animation: false,
				//   customClass: 'animated tada'
				// })

				swal(
				   'Good job!',
				  'You clicked the button!',
				  'success'
				)
		}
	</script>
</body>
</html>