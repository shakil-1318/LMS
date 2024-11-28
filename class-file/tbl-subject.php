<?php
// Include the connection file
require_once 'connect.php';

// Class for tbl_subject
class tbl_subject
{
    // Class properties corresponding to table columns
    public $subject_id = 'INT AUTO_INCREMENT PRIMARY KEY';  // subject_id as primary key with auto increment
    public $status = 'INT';  // Default data type for status
    public $class_no = 'INT';  // Default data type for class_no
    public $subject_name = 'VARCHAR(255)';  // Default data type for subject_name
    public $chapter_no = 'INT';  // Default data type for chapter_no
    public $chapter_name = 'VARCHAR(255)';  // Default data type for chapter_name
    public $created = 'DATETIME';  // Default data type for created
    public $modified = 'DATETIME';  // Default data type for modified

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

    // --------------CREATE
    // Function to create tbl_subject table if not exists with only subject_id
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS tbl_subject (
            subject_id {$this->subject_id} AUTO_INCREMENT PRIMARY KEY
        )";

        if (mysqli_query($this->conn, $sql)) {
            echo "Table 'tbl_subject' created successfully (if it did not exist).<br>";
        } else {
            die("Error creating table 'tbl_subject': " . mysqli_error($this->conn));
        }
    }

    // Function to add the 'status' column if it doesn't exist
    public function addStatusColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS status {$this->status}";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'status': " . mysqli_error($this->conn));
        } else {
            echo "Column 'status' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'class_no' column if it doesn't exist
    public function addClassNoColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS class_no {$this->class_no}";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'class_no': " . mysqli_error($this->conn));
        } else {
            echo "Column 'class_no' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'subject_name' column if it doesn't exist
    public function addSubjectNameColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS subject_name {$this->subject_name}";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'subject_name': " . mysqli_error($this->conn));
        } else {
            echo "Column 'subject_name' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'chapter_no' column if it doesn't exist
    public function addChapterNoColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS chapter_no {$this->chapter_no}";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'chapter_no': " . mysqli_error($this->conn));
        } else {
            echo "Column 'chapter_no' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'chapter_name' column if it doesn't exist
    public function addChapterNameColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS chapter_name {$this->chapter_name}";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'chapter_name': " . mysqli_error($this->conn));
        } else {
            echo "Column 'chapter_name' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'created' column if it doesn't exist
    public function addCreatedColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS created {$this->created} DEFAULT CURRENT_TIMESTAMP";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'created': " . mysqli_error($this->conn));
        } else {
            echo "Column 'created' added successfully (if it did not exist).<br>";
        }
    }

    // Function to add the 'modified' column if it doesn't exist
    public function addModifiedColumn()
    {
        $sql = "ALTER TABLE tbl_subject ADD COLUMN IF NOT EXISTS modified {$this->modified} DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";
        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'modified': " . mysqli_error($this->conn));
        } else {
            echo "Column 'modified' added successfully (if it did not exist).<br>";
        }
    }

    public function insertSubject()
    {
        // Use class variables for the insertion
        $status = $this->status;
        $class_no = $this->class_no;
        $subject_name = $this->subject_name;
        $chapter_no = $this->chapter_no;
        $chapter_name = $this->chapter_name;

        // Insert query
        $sql = "INSERT INTO tbl_subject (status, class_no, subject_name, chapter_no, chapter_name) 
            VALUES ('$status', '$class_no', '$subject_name', '$chapter_no', '$chapter_name')";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            // Get the last inserted subject_id (AUTO_INCREMENT value)
            $last_id = mysqli_insert_id($this->conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";
            return $last_id;
        } else {
            echo "Error inserting record: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    // -----------READ
    public function setValuesById()
    {
        // SQL query to fetch all data based on subject_id
        $sql = "SELECT * FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variables
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->status = $row['status'];
            $this->class_no = $row['class_no'];
            $this->subject_name = $row['subject_name'];
            $this->chapter_no = $row['chapter_no'];
            $this->chapter_name = $row['chapter_name'];
        } else {
            echo "No record found for subject_id: {$this->subject_id}<br>";
        }
    }

    public function getStatusById()
    {
        // SQL query to fetch the status based on subject_id
        $sql = "SELECT status FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variable
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->status = $row['status'];
        } else {
            echo "No status found for subject_id: {$this->subject_id}<br>";
        }
    }

    public function getClassNoById()
    {
        // SQL query to fetch the class_no based on subject_id
        $sql = "SELECT class_no FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variable
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->class_no = $row['class_no'];
        } else {
            echo "No class_no found for subject_id: {$this->subject_id}<br>";
        }
    }

    public function getSubjectNameById()
    {
        // SQL query to fetch the subject_name based on subject_id
        $sql = "SELECT subject_name FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variable
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->subject_name = $row['subject_name'];
        } else {
            echo "No subject_name found for subject_id: {$this->subject_id}<br>";
        }
    }

    public function getChapterNoById()
    {
        // SQL query to fetch the chapter_no based on subject_id
        $sql = "SELECT chapter_no FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variable
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->chapter_no = $row['chapter_no'];
        } else {
            echo "No chapter_no found for subject_id: {$this->subject_id}<br>";
        }
    }

    public function getChapterNameById()
    {
        // SQL query to fetch the chapter_name based on subject_id
        $sql = "SELECT chapter_name FROM tbl_subject WHERE subject_id = {$this->subject_id}";

        // Execute the query
        $result = mysqli_query($this->conn, $sql);

        // If data found, set the class variable
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->chapter_name = $row['chapter_name'];
        } else {
            echo "No chapter_name found for subject_id: {$this->subject_id}<br>";
        }
    }

    // -------------------UPDATE
    public function updateValuesById()
    {
        // SQL query to update the row based on subject_id, excluding created and modified
        $sql = "UPDATE tbl_subject SET
            status = '{$this->status}',
            class_no = '{$this->class_no}',
            subject_name = '{$this->subject_name}',
            chapter_no = '{$this->chapter_no}',
            chapter_name = '{$this->chapter_name}'
            WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Record with subject_id {$this->subject_id} updated successfully.<br>";
            return true;
        } else {
            echo "Error updating record: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateStatusById()
    {
        // SQL query to update the status based on subject_id
        $sql = "UPDATE tbl_subject SET status = '{$this->status}' WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Status updated for subject_id {$this->subject_id} successfully.<br>";
            return true;
        } else {
            echo "Error updating status: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }
    public function updateClassNoById()
    {
        // SQL query to update the class_no based on subject_id
        $sql = "UPDATE tbl_subject SET class_no = '{$this->class_no}' WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Class number updated for subject_id {$this->subject_id} successfully.<br>";
            return true;
        } else {
            echo "Error updating class_no: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }
    public function updateSubjectNameById()
    {
        // SQL query to update the subject_name based on subject_id
        $sql = "UPDATE tbl_subject SET subject_name = '{$this->subject_name}' WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Subject name updated for subject_id {$this->subject_id} successfully.<br>";
            return true;
        } else {
            echo "Error updating subject_name: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateChapterNoById()
    {
        // SQL query to update the chapter_no based on subject_id
        $sql = "UPDATE tbl_subject SET chapter_no = '{$this->chapter_no}' WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Chapter number updated for subject_id {$this->subject_id} successfully.<br>";
            return true;
        } else {
            echo "Error updating chapter_no: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateChapterNameById()
    {
        // SQL query to update the chapter_name based on subject_id
        $sql = "UPDATE tbl_subject SET chapter_name = '{$this->chapter_name}' WHERE subject_id = {$this->subject_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Chapter name updated for subject_id {$this->subject_id} successfully.<br>";
            return true;
        } else {
            echo "Error updating chapter_name: " . mysqli_error($this->conn) . "<br>";
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

<!-- End here -->