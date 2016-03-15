<?php
	include_once('connect.php');
	
	$page = intval($_POST['pageNum']);
	
	$query = "SELECT * FROM `upload_case` order by `creat_time` desc";
	$result = $db->query($query);
	
	
	$total_num = 0;
	$pageSize = 6;

	
	while($fetched_row = $result -> fetch_row())
	{
		//var_dump($fetched_row);
		
		$content_array['list'][] = array(
			'id' => $fetched_row[0],
			'create_time' => $fetched_row[1],
			'title' => $fetched_row[2],
			'update_type' => $fetched_row[3],
			'name' => $fetched_row[4],
			'content' => $fetched_row[5],
			'status' => $fetched_row[6],
		);
		$total_num++;
	}
	
	$totalPage = ceil($total_num/$pageSize);
	$startPage = $page*$pageSize;
	$content_array['total_num'] = $total_num;
	$content_array['pageSize'] = $pageSize;
	$content_array['totalPage'] = $totalPage;
	
	var_dump($content_array);
	echo json_encode($content_array);
?>