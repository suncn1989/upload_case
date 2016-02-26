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
<script src="js/func.js"></script>
<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js" />
</head>

<body>

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
<form id="update_table_status" action="update_to_server.php"  method="post" name="update_table_status"  accept-charset="utf-8" onsubmit="return checkStatus();">
    <div id="table_head">
    	<div class="input-group" style="float:left; margin-right:20px;">
        	<input type="text" class="form-control" id="status_id" name="status_id" placeholder="更改的ID" readOnly="true">
        </div>
    	<div class="input-group" style="float:left;">
        	<input type="text" class="form-control" id="status" name="status" placeholder="更改的status" readOnly="true">
        </div>
         <div class="btn-group" style="float:left;">
              <button type="button" class="btn btn-primary" id="btn-status" onclick="checkStatus()" type="submit">提交</button>
         </div>
    </div>
</form>
<div id="table_container">
	
	<table class="table table-hover">
    <thead>
      <tr>
      	 <th>ID</th>
         <th>日期</th>
         <th>标题</th>
         <th>需求类型</th>
         <th>提交人</th>
         <th>内容</th>
         <th style="margin-left:20px;">状态</th>
      </tr>
      <tbody>
            <?php
				$i = 0;
				while($row = $result -> fetch_row())
				{
					echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
						echo "<td>".$row[5]."</td>";
						echo "<td>";
							if ($row[6] == "undef")
							{
								echo "<div class=\"btn-group\">";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "status <span class=\"caret\"></span>";
									echo "</button>";
								echo "<ul class=\"dropdown-menu\">";
									echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
								echo "</ul>";
								echo "</div>";
							}
							else if ($row[6] == "需求分析")
							{
								echo "<div class=\"btn-group\">";
									//echo "<button type=\"button\" class=\"btn btn-primary\">需求分析</button>";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "需求分析 <span class=\"caret\"></span>";
									echo "</button>";
									echo "<ul class=\"dropdown-menu\">";
										echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
									echo "</ul>";
								echo "</div>";
							}
							else if ($row[6] == "Demo开发")
							{
								echo "<div class=\"btn-group\">";
									//echo "<button type=\"button\" class=\"btn btn-success\">Demo开发</button>";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "Demo开发 <span class=\"caret\"></span>";
									echo "</button>";
									echo "<ul class=\"dropdown-menu\">";
										echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
									echo "</ul>";
								echo "</div>";
							}
							else if ($row[6] == "电信测试")
							{
								echo "<div class=\"btn-group\">";
									//echo "<button type=\"button\" class=\"btn btn-info\">电信测试</button>";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "电信测试 <span class=\"caret\"></span>";
									echo "</button>";
									echo "<ul class=\"dropdown-menu\">";
										echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
									echo "</ul>";
								echo "</div>";
							}
							else if ($row[6] == "电信正式")
							{
								echo "<div class=\"btn-group\">";
									//echo "<button type=\"button\" class=\"btn btn-warning\">电信正式</button>";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "电信正式 <span class=\"caret\"></span>";
									echo "</button>";
									echo "<ul class=\"dropdown-menu\">";
										echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
										echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
									echo "</ul>";
								echo "</div>";
							}
							else if ($row[6] == "取消需求")
							{
								echo "<div class=\"btn-group\">";
									echo "<button type=\"button\" id=\"status_btn_".$i."\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
										echo "取消需求 <span class=\"caret\"></span>";
									echo "</button>";
								echo "<ul class=\"dropdown-menu\">";
									echo "<li><a href=\"#\" onclick=\"click_require(".$i.",".$row[0].");\">需求分析</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_demo(".$i.",".$row[0].");\">Demo开发</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_test(".$i.",".$row[0].");\">电信测试</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_official(".$i.",".$row[0].");\">电信正式</a></li>";
									echo "<li><a href=\"#\" onclick=\"click_cancel(".$i.",".$row[0].");\">取消需求</a></li>";
								echo "</ul>";
								echo "</div>";
							}
						echo "</td>";
					echo "</tr>";
					$i++;
				}           
            ?>
      </tbody>
   </thead>
   </table>
   
    <?php
    $db->close();
	?>

</div>
</body>
</html>