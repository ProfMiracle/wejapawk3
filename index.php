<?php 
session_start();

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>eMiracle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>eMiracle Wejapa Assignment Week 3</h2>
  <form action="action.php" method='post'>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="" placeholder="Enter first name" name="fname" required>
    </div>
    <div class="form-group">
      <label for="sname">Second Name:</label>
      <input type="text" class="form-control" id="" placeholder="Enter second name" name="sname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="dob">Date of birth:</label>
      <input type="date" class="form-control" id="" placeholder="Enter DOB" name="dob" required max = '<?php echo date('Y-m-d'); ?>'>
    </div>
    <div class="form-group">
      <label for="color">Favourite Color:</label>
      <input type="color" class="form-control" id="" name="color" required>
    </div>
    <div class="form-group">
      <label for="text">Choose Genger:</label>
      <input type="radio"  id="" name="gender" value='male' required> Male
      <input type="radio"  id="" name="gender" value='female'> Female
      <input type="radio"  id="" name="gender" value='other'> Rather not say
    </div>
    <div class="form-group">
      <label for="department">Select Department:</label>
      <select name="department" id="" class="form-control" required>
      <option value="">--select department--</option>
      <option value="IT">IT</option>
      <option value="HR">HR</option>
      <option value="Other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" min='8'>
    </div>
    <button type="submit" class="btn btn-default" name='submit'>Submit</button>
  </form>
</div>

</body>