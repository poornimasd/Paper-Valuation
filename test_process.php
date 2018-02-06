<?php 
 include 'config/db_connect.php';

 $target = "pdf/"; 
 $target = $target . basename( $_FILES['NewsBan']['name']); 
 
 $news_title=$_POST['Title']; 
 $date=$_POST['Date'];
 $mark = $_POST['Mark'];
 $pic=($_FILES['NewsBan']['name']); 
 //echo $pic; exit;
 $sql = "INSERT INTO student_mark (subject_title,student_regno,Student_pdf,mark) VALUES ('$news_title', '$date','$pic','$mark')" ; 
 if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header('Location: test.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

if(move_uploaded_file($_FILES['NewsBan']['tmp_name'], $target)) 
 { 
 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 echo "Sorry, there was a problem uploading your file."; 
 }  

?> 