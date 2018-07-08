

<?php
include_once "assignment.php";
  include_once "dbconnect.php";

  if(isset($_POST['submit'])){
      $grade=$_POST['grade'];
      $class=$_POST['class'];
      $className=$grade.$class;
      $assignmentname=$_POST['assignmentname'];
      $id=$_POST['subject'];
      $file=$_FILES['file'];
      $name=$_FILES['file']['name'];
      $tmp_name=$_FILES['file']['tmp_name'];
      $fileError=$_FILES['file']['error'];
      $fileType=$_FILES['file']['type'];

      if($fileError === 0){
        $location="uploadedAssignments/{$id}/";
        if(!is_dir($location)){
          mkdir($location,"0777",true);
          }
          $temp=explode(".", $_FILES["file"]["name"]);
          $newfilename=$assignmentname.'.'.end($temp);
          $target=($location).($newfilename);
          $link=("uploadedAssignments/{$id}/").($newfilename);

        if(move_uploaded_file($tmp_name, $target)){
          $assignment= new assignment($id,$assignmentname,$grade,$class,$link);
          $val = serialize($assignment);
          $sql="INSERT INTO Assignments(id,assignmentname,val) VALUES('$id','$assignmentname','$val')";
          if($con->query($sql)===TRUE){
            echo "<script type='text/javascript'>alert('Uploaded successfully!')</script>";
            header("Location:uploadAssignment.php");
          }
        }
      }
        else{
          echo "<script type='text/javascript'>alert('There was an error uploading your file!')</script>";
          header("Location:uploadAssignment.php?msg=upload unsuccessful");
      }
  }
?>