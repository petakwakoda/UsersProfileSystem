<?php 
//include 'connection.php';

 function fill_series($start=1,$end=31,$mode=1){
		if($mode==1){
		for($i=$start;$i<=$end;$i++){
		echo "<option value=$i>$i</option>";
		}
		}
		else{
		for($i=$end;$i>=$start;$i--){
		echo "<option value=$i>$i</option>";
		}

		}
	}
	
  function upload_manager(){
	$ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
	$uploaded_time = time();
	$att_reply = ""; $att_error = 0;
	$allowedExts = array("jpg","jpeg","png");
	$targetpath = "../photos/"; 
 	$target = $targetpath . basename( $_FILES['photo']['name']) ;
	$filename = basename( $_FILES['photo']['name']); 
	$file_size = $_FILES['photo']['size'];
	$file_type = strtolower($_FILES["photo"]["type"]);
	if(!in_array($ext,$allowedExts)){
	$att_error = 2;
	$att_reply = " Only .jpg or .png photo is allowed"; 
	 return $att_reply;
	}

	if ($_FILES['photo']['size'] > 1048578) {
	$att_error = 3; $att_reply = "File Exceeds Max Limit of 1MB";
     	 return $att_reply; 
	} 

	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 	{
	$newname = $targetpath . $uploaded_time . ".".$ext;
	if(file_exists($newname)){
	unlink($target);
	$att_error = 4;
	$att_reply = "Sorry There was An Error With The photo, Please Try re-upload it"; 
	}
	else{
		if(!rename($target,$newname))  
			{
			$att_error = 5; $att_reply = "Could Not Upload photo Try Later"; 
			}
			}
		}
		
		if($att_error != 0)
			{
			//$this->goto_notify(1,$att_reply);
			return $att_reply;
			}
			else
				{
				$att_reply = $uploaded_time . ".".$ext;
				return $att_reply;
				}
	}

 function sanitizer($data){
	$data = str_replace(' ', '', $data);
	return preg_replace('/[^A-Za-z0-9\-]/', '', $data);
 }	
	
 
  
  function reorder_dob($dob){
  
    $dob_arr_rev = array_reverse(explode('-',$dob)); 
	return implode('-',$dob_arr_rev);
  }
 
	
?>