
<html>
<head>
<title>PHP isset() example</title>
</head>
<body>
 
<form method="post">
 
<input type="submit" value="Sum" name="Submit1"><br/><br/>
 
<?php
if(isset($_POST["Submit1"]))
{

echo "The sum = ";
 
}
?>
 
</form>
</body>
</html>