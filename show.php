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

        <nav class="navbar navbar-default">
            <p class="navbar-text"><a href="index.html" class="navbar-brand">返回需求上传页</a></p>
        </nav>
    
	
<?php
            $url = "127.0.0.1";
            $user = "root";
            $password = "";
            
            $db = new mysqli($url,$user,$password,'jsbccase');
            if(!$db)
            {
                echo "Connect ERROR!";
            }
            $db->query("set names utf8");
            $query = "SELECT * FROM `upload_case` order by `creat_time` desc";
            $result = $db->query($query);
?>
	<table class="table table-hover">
    <thead>
      <tr>
         <th>标题</th>
         <th>需求类型</th>
         <th>内容</th>
         <th>状态</th>
         <th>提交人</th>
         <th>日期</th>
      </tr>
      <tbody>
            <?php
				while($row = $result -> fetch_row())
				{
					if ($row[6] == "undef")
					{
						echo "<tr>";
							echo "<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo "<td>".$row[5]."</td>";
							echo "<td><span class=\"label label-default\">Undefine</span></td>";
							echo "<td>".$row[4]."</td>";
							echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					else if ($row[6] == "需求分析")
					{
						echo "<tr>";
							echo "<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo "<td>".$row[5]."</td>";
							echo "<td><span class=\"label label-primary\">需求分析</span></td>";
							echo "<td>".$row[4]."</td>";
							echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					else if ($row[6] == "Demo开发")
					{
						echo "<tr>";
							echo "<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo "<td>".$row[5]."</td>";
							echo "<td><span class=\"label label-success\">Demo开发</span></td>";
							echo "<td>".$row[4]."</td>";
							echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					else if ($row[6] == "电信测试")
					{
						echo "<tr>";
							echo "<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo "<td>".$row[5]."</td>";
							echo "<td><span class=\"label label-info\">电信测试</span></td>";
							echo "<td>".$row[4]."</td>";
							echo "<td>".$row[1]."</td>";
						echo "</tr>";
					}
					else if ($row[6] == "电信正式")
					{
						echo "<tr class=\"danger\">";
							echo "<td><s>".$row[2]."</s></td>";
							echo "<td><s>".$row[5]."</td>";
							echo "<td><span class=\"label label-warning\">电信正式</span></td>";
							echo "<td><s>".$row[4]."</s></td>";
							echo "<td><s>".$row[1]."</s></td>";
						echo "</tr>";
					}
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