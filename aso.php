<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Mhanx</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type='text/css' media='screen'>
    body{ 

        background-color: #000000;
        background-attachment:fixed;
        background-position:bottom; 
	}
</style>
<body>
<center>
	<?php 
	if(isset($_POST['hitung'])){
		$a = $_POST['a'];
		$b = $_POST['b'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $a+$b;
			break;
			case 'kurang':
				$hasil = $a-$b;
			break;
			case 'kali':
				$hasil = $a*$b;
			break;
			case 'bagi':
				$hasil = $a/$b;
			break;			
		}
	}
	?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="kalkulator">
		<font size='5' color="red">KALKULATOR</font>
<br>
<br>
<br>
<br>
<br>		
<form method="post" action="aso.php">			
			<input type="text" name="a" class="bil" autocomplete="off" placeholder="Bilangan Kesiji">
			<input type="text" name="b" class="bil" autocomplete="off" placeholder="Bilangan ke loro">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Di ijir" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
<br>
<font size="4" color="white" style="text-shadow: 0px 1px 7px red;">
<br>Project Kalkulator Mr.S4K1T_H4T1</font>
</center>
</body>
</html>
