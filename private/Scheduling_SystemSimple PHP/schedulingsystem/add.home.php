<?php 

$con = mysqli_connect ('localhost', 'root', '', 'insertion');
 if (!$con)
 {
	 echo 'not connected to server';
 }
mysqli_select_db($con, 'insertion') or die(mysql_error());
	 

 function getPosts()
   {
    $posts = array();
    $posts[0] = $_POST['faculty'];
    $posts[1] = $_POST['course'];
    $posts[2] = $_POST['subject'];
    $posts[3] = $_POST['room'];
	  $posts[4] = $_POST['start_time'];
	  $posts[5] = $_POST['end_time'];
    return $posts;
}

if (isset($_POST['insert'])) {
	
	$data = getPosts();

	$existing_Query ="SELECT * FROM `addtable` WHERE `faculty`='$data[0]' OR `course`='$data[1]' OR `subject`='$data[2]' OR `room`='$data[3]' OR `start_time`='$data[4]' OR `end_time`='$data[5]'";
	$existing_Result = mysqli_query($con, $existing_Query);
	if(0 < mysqli_num_rows ($existing_Result)){
		echo '<script type="text/javascript">
                      alert("your entry is already in the tale/list. please choose another schedule.");
                         window.location="home.php";
                           </script>';
	} else {
    $insert_Query = "INSERT INTO `addtable` (`faculty`, `course`, `subject`, `room`, `start_time`, `end_time`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')";
    $insert_Result = mysqli_query($con, $insert_Query);
    
    if ($insert_Result) {
      echo "<script type='text/javascript'>
                      alert('New schedule added successfuly');
                         window.location='tablelist.php';
                           </script>";
    } else {
      echo "<script type='text/javascript'>
                      alert('Data not inserted!');
                         window.location='home.php';
                           </script>";
    }
  }

  
  }
?>