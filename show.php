<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>提交成功</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/all.css" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js" />
</head>

<body>

<?php
            $url = "127.0.0.1";
            $user = "root";
            $password = "";
            
            $db = new mysqli($url,$user,$password,'mysql');
            if(!$db)
            {
                echo "Connect ERROR!";
            }
            $db->query("set names utf8");
            $query = "SELECT * FROM `upload_case`";
            $result = $db->query($query);
?>
	<table class="table table-hover">
    <thead>
      <tr>
         <th>日期</th>
         <th>标题</th>
         <th>提交人</th>
         <th>内容</th>
      </tr>
      <tbody>
            <?php
				while($row = $result -> fetch_row())
				{
					echo "<tr>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
					echo "</tr>";
				}           
            ?>
      </tbody>
   </thead>
   </table>

    <?php
    $db->close();
	?>
</body>
</html>