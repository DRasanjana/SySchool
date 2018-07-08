<?php
class assignment{
	// property declaration
	private $id;
    private $assignmentname;
    private $grade;
    private $class;
    private $link;

    // method declaration
        public function __construct($id, $assignmentname, $grade, $class, $link){
            $this->id = $id;
            $this->assignmentname = $assignmentname;
            $this->grade = $grade;
            $this->class = $class;
            $this->link = $link;
        }
        public function __destruct(){
            //destroy paper object
        }
        public function getAssignmentname(){
            return $this->assignmentname;
        }
        public function getGrade(){
            return $this->grade;
        }
        public function getId(){
            return $this->Id;
        }
        public function getClass(){
            return $this->class;
        }
        public function getLink(){
            return $this->link;
        }
    }
?>