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
            include_once('connect.php');
			
            $query = "SELECT * FROM `upload_case` order by `creat_time` desc";
            $result = $db->query($query);
			
			//Added for page-seperators.
			$each_page_num = 3;
			$total_num = 0;
			
			while($fetched_row = $result -> fetch_row())
			{
				$content_array[] = $fetched_row;
				$total_num++;
			}
			
			echo $total_num;
			
			function show_table($row_choosed)
			{
					if ($row_choosed[6] == "undef")
					{
						echo "<tr>";
							echo "<td>".$row_choosed[2]."</td>";
							echo "<td>".$row_choosed[3]."</td>";
							echo "<td>".$row_choosed[5]."</td>";
							echo "<td><span class=\"label label-default\">Undefine</span></td>";
							echo "<td>".$row_choosed[4]."</td>";
							echo "<td>".$row_choosed[1]."</td>";
						echo "</tr>";
					}
					else if ($row_choosed[6] == "需求分析")
					{
						echo "<tr>";
							echo "<td>".$row_choosed[2]."</td>";
							echo "<td>".$row_choosed[3]."</td>";
							echo "<td>".$row_choosed[5]."</td>";
							echo "<td><span class=\"label label-primary\">需求分析</span></td>";
							echo "<td>".$row_choosed[4]."</td>";
							echo "<td>".$row_choosed[1]."</td>";
						echo "</tr>";
					}
					else if ($row_choosed[6] == "Demo开发")
					{
						echo "<tr>";
							echo "<td>".$row_choosed[2]."</td>";
							echo "<td>".$row_choosed[3]."</td>";
							echo "<td>".$row_choosed[5]."</td>";
							echo "<td><span class=\"label label-success\">Demo开发</span></td>";
							echo "<td>".$row_choosed[4]."</td>";
							echo "<td>".$row_choosed[1]."</td>";
						echo "</tr>";
					}
					else if ($row_choosed[6] == "电信测试")
					{
						echo "<tr>";
							echo "<td>".$row_choosed[2]."</td>";
							echo "<td>".$row_choosed[3]."</td>";
							echo "<td>".$row_choosed[5]."</td>";
							echo "<td><span class=\"label label-info\">电信测试</span></td>";
							echo "<td>".$row_choosed[4]."</td>";
							echo "<td>".$row_choosed[1]."</td>";
						echo "</tr>";
					}
					else if ($row_choosed[6] == "电信正式")
					{
						echo "<tr class=\"danger\">";
							echo "<td><s>".$row_choosed[2]."</s></td>";
							echo "<td><s>".$row_choosed[3]."</td>";
							echo "<td><s>".$row_choosed[5]."</td>";
							echo "<td><span class=\"label label-warning\">电信正式</span></td>";
							echo "<td><s>".$row_choosed[4]."</s></td>";
							echo "<td><s>".$row_choosed[1]."</s></td>";
						echo "</tr>";
					}
			}
			
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
				if ($total_num <= $each_page_num)
				{
					for ($i=0; $i<$total_num; $i++)
					{
						show_table($content_array[$i]);
					}
				}     
            ?>
      </tbody>
   </thead>
   </table>
	
    <?php
		if ($total_num > $each_page_num)
		{
			echo "<div id=\"page_num\">";
				echo "<nav>";
					echo "<ul class=\"pagination pagination-lg\">";
						echo "<li>";
						echo "<a href=\"#\" aria-label=\"Previous\">";
						echo "<span aria-hidden=\"true\">&laquo;</span>";
						echo "</a>";
						echo "</li>";
						
						//page numbers
						//<li><a href="#">1</a></li>

						
						echo "<li>";
						echo "<a href=\"#\" aria-label=\"Next\">";
						echo "<span aria-hidden=\"true\">&raquo;</span>";
						echo "</a>";
						echo "</li>";
						
					echo "</ul>";
				echo "</nav>";
			echo "</div>";
			echo "<div class=\"progress\">";
				echo "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">";
					echo "60%";
				echo "</div>";
			echo "</div>";
		}
	?>

    <?php
    $db->close();
	?>
</body>
</html>