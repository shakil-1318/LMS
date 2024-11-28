<?php
include('connect.php'); 

class PracticeLog
{
    // Table columns as class properties
    public $practice_id = "INT AUTO_INCREMENT PRIMARY KEY";
    public $question_id = "INT NOT NULL";
    public $practice_by = "INT NOT NULL";
    public $is_answer_correctly = "TINYINT(1) DEFAULT 0";
    public $created = "TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
    public $modified = "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

    private $conn; // Database connection
    private $db;

    // Constructor to initialize the database connection
    public function __construct()
    {
        // Create a database connection
        $this->db = new Connect();
        $this->conn = $this->db->conn;

        $this->createTable();
    }

    // -----------CREATE

    // Function to create the table if it doesn't exist
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS tbl_practice_log (
            practice_id {$this->practice_id}
        )";

        if (mysqli_query($this->conn, $sql)) {
            echo "Table tbl_practice_log created successfully or already exists.<br>";
        } else {
            echo "Error creating table: " . mysqli_error($this->conn) . "<br>";
        }

        // Add the columns after creating the table
        $this->addQuestionIdColumn();
        $this->addPracticeByColumn();
        $this->addIsAnswerCorrectlyColumn();
        $this->addCreatedColumn();
        $this->addModifiedColumn();
    }

    // Function to add the 'question_id' column
    public function addQuestionIdColumn()
    {
        $sql = "ALTER TABLE tbl_practice_log ADD COLUMN IF NOT EXISTS question_id {$this->question_id}";
        if (mysqli_query($this->conn, $sql)) {
            echo "Column 'question_id' added successfully.<br>";
        } else {
            echo "Error adding column 'question_id': " . mysqli_error($this->conn) . "<br>";
        }
    }

    // Function to add the 'practice_by' column
    public function addPracticeByColumn()
    {
        $sql = "ALTER TABLE tbl_practice_log ADD COLUMN IF NOT EXISTS practice_by {$this->practice_by}";
        if (mysqli_query($this->conn, $sql)) {
            echo "Column 'practice_by' added successfully.<br>";
        } else {
            echo "Error adding column 'practice_by': " . mysqli_error($this->conn) . "<br>";
        }
    }

    // Function to add the 'is_answer_correctly' column
    public function addIsAnswerCorrectlyColumn()
    {
        $sql = "ALTER TABLE tbl_practice_log ADD COLUMN IF NOT EXISTS is_answer_correctly {$this->is_answer_correctly}";
        if (mysqli_query($this->conn, $sql)) {
            echo "Column 'is_answer_correctly' added successfully.<br>";
        } else {
            echo "Error adding column 'is_answer_correctly': " . mysqli_error($this->conn) . "<br>";
        }
    }

    // Function to add the 'created' column
    public function addCreatedColumn()
    {
        $sql = "ALTER TABLE tbl_practice_log ADD COLUMN IF NOT EXISTS created {$this->created}";
        if (mysqli_query($this->conn, $sql)) {
            echo "Column 'created' added successfully.<br>";
        } else {
            echo "Error adding column 'created': " . mysqli_error($this->conn) . "<br>";
        }
    }

    // Function to add the 'modified' column
    public function addModifiedColumn()
    {
        $sql = "ALTER TABLE tbl_practice_log ADD COLUMN IF NOT EXISTS modified {$this->modified}";
        if (mysqli_query($this->conn, $sql)) {
            echo "Column 'modified' added successfully.<br>";
        } else {
            echo "Error adding column 'modified': " . mysqli_error($this->conn) . "<br>";
        }
    }

    public function insertPracticeLog()
    {
        // Use class variables for the insertion
        $question_id = $this->question_id;
        $practice_by = $this->practice_by;
        $is_answer_correctly = $this->is_answer_correctly;

        // Insert query
        $sql = "INSERT INTO tbl_practice_log (question_id, practice_by, is_answer_correctly) 
            VALUES ('$question_id', '$practice_by', '$is_answer_correctly')";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            // Get the last inserted practice_id (AUTO_INCREMENT value)
            $last_id = mysqli_insert_id($this->conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";
            return $last_id;
        } else {
            echo "Error inserting record: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    // -----------------READ
    public function getPracticeIdsByPracticeBy()
    {
        // Ensure the class variable 'practice_by' is set
        if (!isset($this->practice_by)) {
            echo "Error: practice_by is not set.<br>";
            return false;
        }

        // Query to get all practice_id values for the specified practice_by
        $sql = "SELECT practice_id FROM tbl_practice_log WHERE practice_by = '{$this->practice_by}'";

        $result = mysqli_query($this->conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $practiceIds = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $practiceIds[] = $row['practice_id'];
            }
            return $practiceIds;
        } else {
            echo "No records found for practice_by = {$this->practice_by}.<br>";
            return false;
        }
    }

    // --------------Update
    public function updatePracticeLog()
    {
        // Ensure class variable 'practice_id' is set
        if (!isset($this->practice_id)) {
            echo "Error: practice_id is not set.<br>";
            return false;
        }

        // Use class variables for the update
        $question_id = $this->question_id;
        $practice_by = $this->practice_by;
        $is_answer_correctly = $this->is_answer_correctly;

        // Update query
        $sql = "UPDATE tbl_practice_log 
            SET 
                question_id = '$question_id',
                practice_by = '$practice_by',
                is_answer_correctly = '$is_answer_correctly'
            WHERE practice_id = '{$this->practice_id}'";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Record updated successfully for practice_id = {$this->practice_id}.<br>";
            return true;
        } else {
            echo "Error updating record: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateQuestionId()
    {
        if (!isset($this->practice_id)) {
            echo "Error: practice_id is not set.<br>";
            return false;
        }

        $sql = "UPDATE tbl_practice_log 
            SET question_id = '{$this->question_id}' 
            WHERE practice_id = '{$this->practice_id}'";

        if (mysqli_query($this->conn, $sql)) {
            echo "question_id updated successfully.<br>";
            return true;
        } else {
            echo "Error updating question_id: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updatePracticeBy()
    {
        if (!isset($this->practice_id)) {
            echo "Error: practice_id is not set.<br>";
            return false;
        }

        $sql = "UPDATE tbl_practice_log 
            SET practice_by = '{$this->practice_by}' 
            WHERE practice_id = '{$this->practice_id}'";

        if (mysqli_query($this->conn, $sql)) {
            echo "practice_by updated successfully.<br>";
            return true;
        } else {
            echo "Error updating practice_by: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateIsAnswerCorrectly()
    {
        if (!isset($this->practice_id)) {
            echo "Error: practice_id is not set.<br>";
            return false;
        }

        $sql = "UPDATE tbl_practice_log 
            SET is_answer_correctly = '{$this->is_answer_correctly}' 
            WHERE practice_id = '{$this->practice_id}'";

        if (mysqli_query($this->conn, $sql)) {
            echo "is_answer_correctly updated successfully.<br>";
            return true;
        } else {
            echo "Error updating is_answer_correctly: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }


     // ************DELETE
    // NOT APPLICABLE NOW!!!!!!!!!!!!


    // ************OTHERS
    public function closeConnection()
    {
        $this->db->closeConnection();
    }


}


?>

// End here