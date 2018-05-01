<?php
$db=new mysqli('localhost','root','','test');
//echo "<script>";
//echo 'alert("dfdsf")';
//echo  "</script>";
if(!empty($_POST)){
  // if ($_POST["AdmissionNumber"
    if ($_POST["Password"] == $_POST["Conformpassword"]) {
        $UN=$_POST['AdmissionNumber'];
        $PW=$_POST['Password'];
        $CPW=$_POST['Conformpassword'];
        $NWI=$_POST['NamewithInitials'];
        $GR=$_POST['Grade'];
        $db->query("insert into student (AdmissionNumber ,Password ,ConfromPassword,NamewithInitials,Grade) values ('{$UN}','{$PW}','{$CPW}','{$NWI}','{$GR}')");
        header("Location:success.html");

    }else {

        header("Location:reglibrary.html");
    }
} else{

    header("Location:reglibrary.html");
}
?>