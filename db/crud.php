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
                //define sqql statement to be exxecuted
                $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                $stmt->execute();
                return true;

            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }


?>
