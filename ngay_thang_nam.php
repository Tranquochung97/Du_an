<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
    <?php
      $ngay=range(1,31);
      
      $thang=array(
        1=>'Tháng 1',
        2=>'Tháng 2',
        3=>'Tháng 3',
        4=>'Tháng 4',
        5=>'Tháng 5',
        6=>'Tháng 6',
        7=>'Tháng 7',
        8=>'Tháng 8',
        9=>'Tháng 9',
        10=>'Tháng 10',
        11=>'Tháng 11',
        12=>'Tháng 12',
      );
      $nam=range(1960,2030);
    ?>
    <form action="" name="frmchon" method="post">
        <select name="ngaysinh" id="">
            <option value="">--Chọn ngày sinh--</option>
            <?php
            foreach ($ngay as $so => $chu) {
              ?> 
              <option value="<?php echo $so;?>"><?php echo $chu?></option>
              <?php
          }
          ?>
           
        </select>
        <select name="thangsinh" id="">
          <option value="">-- Chọn tháng sinh</option>
          <?php
          foreach ($thang as $so => $chu) {
            ?>
            <option value="<?php echo $so;?>"> <?php echo $chu?></option>
            <?php
          }
          ?>
        </select>
        <select name="namsinh" id="">
          <option value="">--Chọn năm sinh--</option>
          <?php
            foreach ($nam as $key => $value) {
              ?>
              <option value="<?php echo $key?>"><?php echo $value?></option>
            <?php
            }

          ?>
        </select>
      </form>
</body>
</html>