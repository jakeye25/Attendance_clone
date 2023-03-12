<?php
    class crud{
        //private database object
        private $db;

        //constructor to initialize private variable to the databasse connection
        function __construct($conn){
            $this->db = $conn;
        }

        public function insert($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                $sql = "INSERT INTO attendee VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);
            } catch() {

            }
        }
    }


?>
