<html>
<head>
</head>
<body>
<?php
$res=shell_exec("python hello.py");
$states=explode("\n",$res);


echo "$states[0]";


?>
</body>
</html>
