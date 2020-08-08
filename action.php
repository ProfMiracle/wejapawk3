<?php
session_start();
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $color = $_POST['color'];
    $gender = $_POST['gender'];
    $pwd = $_POST['pwd'];
}else{
    $_SESSION['msg'] = '<div class = \'alert alert-warning container\'>please go through this page first</div>';
    header('location: index.php');
}
?>
<html>
<head>
  <title><?php echo $fname. ' '.$sname;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body style='background-color:<?php echo $color;?>;'>
        <div class='container text-center'>
            <div>
                <h1 style='color:white;'>Thanks for signing up with us; these are what we got from you</h1>
                <div style='color: white;'>
                    <?php echo 'First Name:' .$fname. '<br>Second Name:' .$sname.'<br>Email:'.$email. '<br>Date of Birth:' .$dob. '
                    <br>Gender:' .$gender;?>
                </div>
            </div>
        </div>
    </body>
</html>