<html>
<body>
<?php 
$variable_bulan=array ("January","February","March","April","Mey","June","july","August","September","October","November","Desember");
?>
    
    
  <select>
  <?php foreach ($variable_bulan as $value){ ?>
      <option value="<?php echo $value;?>"><?php echo $value; ?> </option>
    <?php } ?>
  </select>  
    
    
</body>
</html>
