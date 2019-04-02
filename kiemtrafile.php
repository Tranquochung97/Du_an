<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tr File</title>
</head>
<body>
    <form colspan="2" action="" name="frmfilesize" method="post">
    <table>
    <tr>
        <td> Kiểm tra filesize</td>
    </tr>
    <tr>
    <td>Tên file</td>
    <td> <input type="text"  name="tenfile"value="<?php if(isset($_POST['tenfile'])) echo $_POST['tenfile'] ?>"></td>
    </tr>

    <tr>
    
    <td colspan="2"> <input type="submit" name="submit" value="Thực hiện"></td>
    </tr>
    </table>
    
    </form>
    <?php
        if (isset($_POST['submit'])) {
            if (isset($_POST['tenfile'])) {
                $tenfile=$_POST['tenfile'];
                if(!file_exists($tenfile))
                {
                    echo "Khong the mo file.";
                    exit;
                }
                else {
                    $size=filesize($tenfile);
                    echo " Kich co cua file $size (bytes)";
                }
            }
            else {
                echo "Hay nhap ten file";
            }
        }
    ?>
</body>
</html>