<!DOCTYPE html>

<?php include 'db.php'; 

$id= (int)$_GET['id'];

$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql);

$row= $rows->fetch_assoc();
if(isset($_POST['send'])){

$task = htmlspecialchars($_POST['task']);

$sql2 ="update tasks set name='$task' where id ='$id'";

$db->query($sql2);

header('location: index.php');

}


?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Crud App</title>
	</head>
	<body>
		<div class="container">
			<center><h1>Update Todo list</h1></center>
			
			<div class="row" style="margin-top: 70px;">
				<div class="col-md-10 col-md-offset-1" >
					<table class="table">
				
						<hr><br>
				
				
										<form method="post" >
											<div class="form-group">
												<label>Task Name</label>
												<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
											</div>
											<input type="submit" name="send" value="Add Task" class="btn btn-success">&nbsp;
											<a href="index.php" class="btn btn-warning">Back</a>
										</form>
						
						
					</div>
				</div>
			</div>
		</body>
	</html>