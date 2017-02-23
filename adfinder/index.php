<?php
include "../data.php";
?>
	<center>
	<form method="post" enctype='multipart/form-data'>
		<body onLoad="type_text()" ; bgColor=#FFFFFFF">
<body>
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
<style>
html,body { 
                background: url(<? print $bg; ?>) no-repeat center center fixed; 
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
            }
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/jv_ID/sdk.js#xfbml=1&version=v2.6&appId=784111185024495";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<meta name='generator' content='Geany 1.22' />
	<script type='text/javascript' src='jquery.js'></script>
	<div id='container'>
		<title>Admin Finder | GSHCoder</title>
		<link rel="shortcut icon" href="<? print $titit; ?>">

<center>
<hr width="40%" height="10%" color="black">
<p><font size="10" color="white" style="text-shadow: 5px 5px 20px red;">Admin Finder</font></p></center>
		<br/>
		<h1><b><font color="red">F</font><font color="blue">i</font><font color="gold">n</font><font color="indigo">d</font><font color="brown">e</font><font color="yellow">r</font></b></h1>
		<h2><b><font color="white">Lokomedia</font></b></h2>
		<br/>
		<br/>
		<b><font color="red">Enter Site Url</font></b>
		<br/>
		<input type="text" class="str" placeholder="Enter Site Url" size="30" id="str" name="str" required="required">
		<br/>
		<input type="submit" id="dkp" name="dkp" value="START"/><br/>
	<div id='result-bar'>
		<span class='hasil'>
<?php
$str = $_POST['str'];
$dkp = $_POST['dkp'];
$strr = "starting.php?str=" . $str;
if(isset($dkp)){
echo '<iframe align="center" src="'.$strr.'" height="600" width="100%" weight="100%" size="100%" frameborder="0" scrolling="auto" noresize></iframe>';
}
?>
