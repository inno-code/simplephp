<!DOCTYPE html>

<html>
<body>

Welcome <?php

ini-set('display_errors',1);
error_reporting (E_ALL | E_STRICT);
echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>