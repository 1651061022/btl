<?php
$pattern = "/(^\w+@wru\.vn$)/";

$str = "email";


if(preg_match($pattern, $str)){
	echo 'email hop le';
}
else 
	{echo 'email khong hop le';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test22.php" method="POST" role="form">
		<div class="form-group">
			<label for="">email</label>
			<input type="email" class="form-control" id="" placeholder="DM dien email vao day">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>