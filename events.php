<?php
	$result=array();
	require_once 'includes/cons.php';
	require_once 'includes/db.php';
	$rows = getFetchArray("select * from ".DB_NAME.".repeat_dates");
	if($rows != null && count($rows)>0){
		$count = 0;
		foreach($rows as $row){
			$my_row=array();
			$my_row["id"] = $row["id"];
			$sql_get_project_name = "select p.first_name from ".DB_NAME.".repeat_dates d, ".DB_NAME.".repeat_tasks t, ".DB_NAME.".projects p where d.parent_id=t.id and t.parent_id = p.id and d.id=".$row["id"];
			$sql_get_project_id = "select p.id from ".DB_NAME.".repeat_dates d, ".DB_NAME.".repeat_tasks t, ".DB_NAME.".projects p where d.parent_id=t.id and t.parent_id = p.id and d.id=".$row["id"];
			$project_name = getSingleValue($sql_get_project_name);
			if ($project_name != null){
				$my_row["title"] = " ".substr($project_name, 0, 7);
			}
			$project_id = getSingleValue($sql_get_project_id);
			if ($project_id != null){
				$my_row["url"] = "projects.php?pid=".$project_id;
				if ($project_id%2==0){
					$my_row["color"] = "red";
				}else if ($project_id%3==0){
					$my_row["color"] = "green";
				}else if ($project_id%4==0){
					$my_row["color"] = "blue";
				}else if ($project_id%5==0){
					$my_row["color"] = "black";
				}else if ($project_id%6==0){
					$my_row["color"] = "gray";
				}else if ($project_id%7==0){
					$my_row["color"] = "orange";
				}else{
					$my_row["color"] = "#990099";
				}
			}
			$my_row["start"] = $row["start_date_time"];
			$my_row["end"] = $row["end_date_time"];
						
			$result[$count] = $my_row;
			$count++;
		}
	}
	echo json_encode($result);
	#echo '[{"id":"123-","original_id":null,"title":"'.MAIN_TITLE.'","start":"2024-11-04 16:13:00","end":"2024-11-04 17:13:00","color":"red","url":"mami.php?id=123"}]';
	
?>