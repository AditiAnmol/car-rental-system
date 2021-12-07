<?php include('userServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Go Cars</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<?php include('companyHeader.php'); ?>
  <div class="header">
  	<h2>Fill car details</h2>
  </div>
	
  <form method="post" action="addCar.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="carName" value="<?php echo $carName; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Image URL</label>
  	  <input type="text" name="carPhotoURL" value="<?php echo $carPhotoURL; ?>" >
  	</div>
  	<div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="carInfo" value="<?php echo $carInfo; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Stock</label>
  	  <input type="text" name="carStock" value="<?php echo $carStock; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Rate per day</label>
  	  <input type="text" name="carRate" value="<?php echo $carRate; ?>" >
  	</div>
  	<div class="input-group center-horizontally" style="margin-top: 30px">
  	  <button type="submit" class="btn" name="car_add">Add Car</button>
  	</div>
  </form>
</body>
</html>