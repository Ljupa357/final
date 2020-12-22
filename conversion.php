<?php
include 'header.php'
?>

<h1>Temperature Conversion</h1>
<body>
    <form action="includes/conversion.inc.php" method="POST">
    <input type="text" name="valueConvert" placeholder="Convert">
    <input type="text" name="convertType" placeholder="Type">
    <button type="submit">Submit</button>
    </form>
</body>



