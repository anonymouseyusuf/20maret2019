<html>
<body>
<?php 
$variable_bulan=array ("January","February","March","April","Mey","June","july","August","September","October","November","Desember");
?>

    <H2>
        Tanggal
    </H2>
    <select name="tgl">
        <option selected="selected">Tanggal</option>
        <?php
            for($a=1; $a<=31; $a+=1){
            echo"<option value=$a> $a </option>";
        }
         ?>
        </select>
    
    <H2>
        Bulan
    </H2>
      <select>
  <?php foreach ($variable_bulan as $value){ ?>
      <option value="<?php echo $value;?>"><?php echo $value; ?> </option>
    <?php } ?>
  </select>  
    
    <H2>
        Tahun
    </H2>
      <?php
        $now=date('Y');
        echo "<select name=’tahun’>";
        for ($a=2012;$a<=$now;$a++)
        {
         echo "<option value='$a'>$a</option>";
        }
        echo "</select>";
    ?> 
    
    
</body>
</html>