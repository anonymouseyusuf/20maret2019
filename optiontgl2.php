<!DOCTYPE html>
<html>
<head>
	<title>latihan option tanggal</title>
</head>
<body>

<form action="optiontgl2.php" method="post">
 <select name="tanggal">
	<?php for ($tgl=1; $tgl <= 31 ; $tgl++) { ?>
  	<option value="<?php echo $tgl?>"> <?php echo $tgl;?></option>
  	<?php } ?>

</select> 


 <select name="bulan">
 	<?php $bln=array ("januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember");?>
	<?php foreach ($bln as $value) { ?>
		<option value="<?php echo $value ?>"><?php echo $value; ?> </option>
		<?php } ?>
</select> 


 <select name="tahun">
	<?php for ($thn= 1989 ; $thn <= date(Y) ; $thn++) { ?>
  	<option value="<?php echo $thn?>"> <?php echo $thn;?></option>
  	<?php } ?>
</select> 

<input type="submit" name="submit">
</form>

<?php

if(!empty($_POST['submit'])){
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];

echo $tanggal;
echo "<br>";
echo $bulan;
echo "<br>";
echo $tahun;

}
?>

</body>
</html>

