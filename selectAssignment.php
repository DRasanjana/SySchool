<?php
         include_once "dbconnect.php";
         $sql = "SELECT * FROM Assignments";
         $qry = $con->query($sql);
         echo "<label>Assignment Name :</label>";
         echo "<select name='assignmentname' onchange='this.form.submit()'>";
         if($qry->num_rows>0){
            while($row = $qry->fetch_assoc()){
               $assignment = unserialize($row['val']);
               if($_POST['class']==$assignment->getClass() && $assignment->getGrade() == $_POST['grade']){
                  if (isset($_POST['assignmentname']) && $_POST['assignmentname'] == $assignment->getAssigmentname()){
                                      $selected = "selected";
                                  } else {
                                      $selected = "";
                                  }
                                  if (!isset($_POST['assignmentname'])){
                                      $_POST['assignmentname'] = $assignment->getAssignmentname();
                                  }
                                  echo "<option value='".$assignment->getAssignmentname()."' $selected>";
                              }
                          }
                      }else{
                          echo "<option value='0' selected hidden></option>";
                      }
                      echo "</select><br><br>";
               
              ?>