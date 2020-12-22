<?php
include 'header.php'
?>

<body>
<h1>REGISTER</h1>
<form  action="includes/singup.inc.php" method="POST">

<input type="text" name="name" placeholder="FirstName" > <br>
<input type="text" name="uid" placeholder="Username" > <br>
<input type="password" name="pwd" placeholder="Password" > <br>
<input type="text" name="city" placeholder="City" > <br>
<input type="radio" id="free" name="free" value="free">
  <label for="male">Free</label><br>
  <input type="radio" id="basic" name="basic" value="basic">
  <label for="female">Basic</label><br>
  <input type="radio" id="premium" name="premium" value="premium">
  <label for="other">Premium</label><br><br>
  <input type="checkbox" id="agreement" name="agreement" value="agreement">
  <label for="agreement">I Agree</label><br>

<button type="submit">Submit</button>
</form>
    
</body>
<?php
if (isset($_GET["error"])) {
   if ($_GET["error"] == "emptyinput") {
       echo "<p>Empty Inputs</p>";
   }elseif($_GET["error"] == "invalidUid") {
    echo "<p>Invalid Username</p>";
   } elseif($_GET["error"] == "invalidEmail") {
    echo "<p>Invalid Email</p>";
   }

}
?>


</html>