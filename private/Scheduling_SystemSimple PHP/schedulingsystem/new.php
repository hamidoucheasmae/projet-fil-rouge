<?php 

 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'insertion'))
 {
	 echo 'database not selected';
 }
 function getPosts()
   {
    $posts = array();
    $posts[0] = $_POST['corcode'];
    $posts[1] = $_POST['corname'];
    $posts[2] = $_POST['falname'];
    $posts[3] = $_POST['Designation'];
	$posts[4] = $_POST['room'];
	$posts[5] = $_POST['subcode'];
	$posts[6] = $_POST['subdescription'];
	$posts[7] = $_POST['starttime'];
	$posts[8] = $_POST['endtime'];
    return $posts;
}

	
	$data = getPosts();
    
    $insert_Query = "INSERT INTO `course`, `faculty`, `rooms`, `subject`, `timer` (Course_Code, Course_name, Faculty_Name, Designation, Room, Subject_Code, Subject_Description, Start_Time, End_Time) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]')";
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
  

  
?>