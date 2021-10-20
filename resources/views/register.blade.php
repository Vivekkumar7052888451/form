<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<div class="row mt-3">
<div class="col-sm-8 mx-auto bg-light text-center text-success p-3">
<h2>Registration Form</h2>
</div>
</div>
  <div class="row mt-5">
     <div class="col-sm-8 mx-auto">
		 <div class="card">
		  <div class="card-header">Form</div>
		    
		  <div class="card-body">
		 @if($errors->any())
		   {{$errors}}
		 @endif
		    <form action=""method="post">
			@csrf
			<div class="form-group">
				<label>Name:</label>
				<input type="text" class="form-control"name="name"placeholder="Enter name" id="name">
			  </div>
			  <div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control"name="email" placeholder="Enter email" id="email">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control"name="password" placeholder="Enter password" id="pwd">
			  </div>   
		  </div>
		  <div class="card-footer">
		    <button type="submit" class="btn btn-primary">Submit</button>
		  </div>
		  </form>
		  
		 @if(isset($data))
			 @foreach($data as $list)
		     {{$list}}
			 @endforeach
		 @endif
		</div>
	 </div>
  </div>
</div>

</body>
</html>