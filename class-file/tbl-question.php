<?php
// Include the connection file
require_once 'connect.php';

// Class for tbl_question
class Question
{
    // Class properties corresponding to the table columns
    public $question_id;
    public $status = 'INT';
    public $created_by = 'INT';
    public $subject_id = 'INT';
    public $bangla_question = 'TEXT';
    public $english_question = 'TEXT';
    public $bangla_options = 'TEXT';
    public $english_options = 'TEXT';
    public $is_option_contain_files = 'INT';
    public $file_ids = 'TEXT';
    public $correct_option = 'VARCHAR(255)';
    public $answer_description = 'TEXT';
    public $difficulty_level = 'INT';
    public $created = 'DATETIME';
    public $modified = 'DATETIME';

    private $conn; // Database connection
    private $db;

    // Constructor to initialize the database connection
    public function __construct()
    {
        // Create a database connection
        $this->db = new Connect();
        $this->conn = $this->db->conn;

        // Create the table if it doesn't exist
        $this->createTable();
    }

    // ----------------CREATE
    // Function to create tbl_question table if it doesn't exist
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS tbl_question (
            question_id INT AUTO_INCREMENT PRIMARY KEY
        )";

        if (mysqli_query($this->conn, $sql)) {
            echo "Table 'tbl_question' created successfully (if it did not exist).<br>";
        } else {
            die("Error creating table 'tbl_question': " . mysqli_error($this->conn));
        }

        // Call the functions to add the columns after creating the table
        $this->addStatusColumn();
        $this->addCreatedByColumn();
        $this->addSubjectIdColumn();
        $this->addBanglaQuestionColumn();
        $this->addEnglishQuestionColumn();
        $this->addBanglaOptionsColumn();
        $this->addEnglishOptionsColumn();
        $this->addIsOptionContainFilesColumn();
        $this->addFileIdsColumn();
        $this->addCorrectOptionColumn();
        $this->addAnswerDescriptionColumn();
        $this->addDifficultyLevelColumn();
        $this->addCreatedColumn();
        $this->addModifiedColumn();
    }

    // Add the 'status' column if it doesn't exist
    public function addStatusColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS status {$this->status}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'status': " . mysqli_error($this->conn));
        } else {
            echo "Column 'status' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'created_by' column if it doesn't exist
    public function addCreatedByColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS created_by {$this->created_by}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'created_by': " . mysqli_error($this->conn));
        } else {
            echo "Column 'created_by' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'subject_id' column if it doesn't exist
    public function addSubjectIdColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS subject_id {$this->subject_id}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'subject_id': " . mysqli_error($this->conn));
        } else {
            echo "Column 'subject_id' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'bangla_question' column if it doesn't exist
    public function addBanglaQuestionColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS bangla_question {$this->bangla_question}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'bangla_question': " . mysqli_error($this->conn));
        } else {
            echo "Column 'bangla_question' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'english_question' column if it doesn't exist
    public function addEnglishQuestionColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS english_question {$this->english_question}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'english_question': " . mysqli_error($this->conn));
        } else {
            echo "Column 'english_question' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'bangla_options' column if it doesn't exist
    public function addBanglaOptionsColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS bangla_options {$this->bangla_options}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'bangla_options': " . mysqli_error($this->conn));
        } else {
            echo "Column 'bangla_options' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'english_options' column if it doesn't exist
    public function addEnglishOptionsColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS english_options {$this->english_options}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'english_options': " . mysqli_error($this->conn));
        } else {
            echo "Column 'english_options' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'is_option_contain_files' column if it doesn't exist
    public function addIsOptionContainFilesColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS is_option_contain_files {$this->is_option_contain_files}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'is_option_contain_files': " . mysqli_error($this->conn));
        } else {
            echo "Column 'is_option_contain_files' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'file_ids' column if it doesn't exist
    public function addFileIdsColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS file_ids {$this->file_ids}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'file_ids': " . mysqli_error($this->conn));
        } else {
            echo "Column 'file_ids' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'correct_option' column if it doesn't exist
    public function addCorrectOptionColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS correct_option {$this->correct_option}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'correct_option': " . mysqli_error($this->conn));
        } else {
            echo "Column 'correct_option' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'answer_description' column if it doesn't exist
    public function addAnswerDescriptionColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS answer_description {$this->answer_description}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'answer_description': " . mysqli_error($this->conn));
        } else {
            echo "Column 'answer_description' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'difficulty_level' column if it doesn't exist
    public function addDifficultyLevelColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS difficulty_level {$this->difficulty_level}";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'difficulty_level': " . mysqli_error($this->conn));
        } else {
            echo "Column 'difficulty_level' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'created' column if it doesn't exist
    public function addCreatedColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS created {$this->created} DEFAULT CURRENT_TIMESTAMP";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'created': " . mysqli_error($this->conn));
        } else {
            echo "Column 'created' added successfully (if it did not exist).<br>";
        }
    }

    // Add the 'modified' column if it doesn't exist
    public function addModifiedColumn()
    {
        $sql = "ALTER TABLE tbl_question ADD COLUMN IF NOT EXISTS modified {$this->modified} DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

        if (!mysqli_query($this->conn, $sql)) {
            die("Error adding column 'modified': " . mysqli_error($this->conn));
        } else {
            echo "Column 'modified' added successfully (if it did not exist).<br>";
        }
    }


    // Function to insert a new question and return the inserted question_id
    public function insertQuestion()
    {
        // Prepare the SQL INSERT statement using class properties
        $sql = "INSERT INTO tbl_question (
                status, created_by, subject_id, bangla_question, 
                english_question, bangla_options, english_options, 
                is_option_contain_files, file_ids, correct_option, 
                answer_description, difficulty_level
            ) 
            VALUES (
                '{$this->status}', '{$this->created_by}', '{$this->subject_id}', '{$this->bangla_question}', 
                '{$this->english_question}', '{$this->bangla_options}', '{$this->english_options}', 
                '{$this->is_option_contain_files}', '{$this->file_ids}', '{$this->correct_option}', 
                '{$this->answer_description}', '{$this->difficulty_level}'
            )";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            // Return the ID of the inserted question
            return mysqli_insert_id($this->conn);
        } else {
            // If there's an error, return false
            echo "Error inserting question: " . mysqli_error($this->conn);
            return false;
        }
    }


    // ---------------READ
    // Function to set all values based on question_id
    // Function to set all values based on question_id
    public function setAllValues()
    {
        $sql = "SELECT * FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            // Set the class variables with the fetched values
            $this->status = $row['status'];
            $this->created_by = $row['created_by'];
            $this->subject_id = $row['subject_id'];
            $this->bangla_question = $row['bangla_question'];
            $this->english_question = $row['english_question'];
            $this->bangla_options = $row['bangla_options'];
            $this->english_options = $row['english_options'];
            $this->is_option_contain_files = $row['is_option_contain_files'];
            $this->file_ids = $row['file_ids'];
            $this->correct_option = $row['correct_option'];
            $this->answer_description = $row['answer_description'];
            $this->difficulty_level = $row['difficulty_level'];
            $this->created = $row['created'];
            $this->modified = $row['modified'];
            return true;
        } else {
            echo "No record found with question_id: {$this->question_id}.";
            return false;
        }
    }

    // Get the value of the 'status' column
    public function getStatus()
    {
        $sql = "SELECT status FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->status = $row['status'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'created_by' column
    public function getCreatedBy()
    {
        $sql = "SELECT created_by FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->created_by = $row['created_by'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'subject_id' column
    public function getSubjectId()
    {
        $sql = "SELECT subject_id FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->subject_id = $row['subject_id'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'bangla_question' column
    public function getBanglaQuestion()
    {
        $sql = "SELECT bangla_question FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->bangla_question = $row['bangla_question'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'english_question' column
    public function getEnglishQuestion()
    {
        $sql = "SELECT english_question FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->english_question = $row['english_question'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'bangla_options' column
    public function getBanglaOptions()
    {
        $sql = "SELECT bangla_options FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->bangla_options = $row['bangla_options'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'english_options' column
    public function getEnglishOptions()
    {
        $sql = "SELECT english_options FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->english_options = $row['english_options'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'is_option_contain_files' column
    public function getIsOptionContainFiles()
    {
        $sql = "SELECT is_option_contain_files FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->is_option_contain_files = $row['is_option_contain_files'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'file_ids' column
    public function getFileIds()
    {
        $sql = "SELECT file_ids FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->file_ids = $row['file_ids'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'correct_option' column
    public function getCorrectOption()
    {
        $sql = "SELECT correct_option FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->correct_option = $row['correct_option'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'answer_description' column
    public function getAnswerDescription()
    {
        $sql = "SELECT answer_description FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->answer_description = $row['answer_description'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'difficulty_level' column
    public function getDifficultyLevel()
    {
        $sql = "SELECT difficulty_level FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->difficulty_level = $row['difficulty_level'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'created' column
    public function getCreated()
    {
        $sql = "SELECT created FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->created = $row['created'];
            return true;
        } else {
            return false;
        }
    }

    // Get the value of the 'modified' column
    public function getModified()
    {
        $sql = "SELECT modified FROM tbl_question WHERE question_id = {$this->question_id}";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->modified = $row['modified'];
            return true;
        } else {
            return false;
        }
    }

    // Function to get all question_ids with a specific status
    public function getAllIdsByStatus()
    {
        $sql = "SELECT question_id FROM tbl_question WHERE status = '{$this->status}'";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            $ids = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $ids[] = $row['question_id']; // Collect all matching question_ids
            }

            if (count($ids) > 0) {
                return $ids; // Return array of matching question_ids
            } else {
                echo "No records found with the status '{$this->status}'.<br>";
                return false;
            }
        } else {
            echo "Error fetching records: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }


    // -------------UPDATE
    // Function to update a row based on class id and other class variables
    public function updateRow()
    {
        // Check if the id is set before attempting to update
        if (empty($this->question_id)) {
            echo "Error: question_id is not set.<br>";
            return false;
        }

        // Start building the SQL query
        $sql = "UPDATE tbl_question SET 
        status = '{$this->status}',
        created_by = '{$this->created_by}',
        subject_id = '{$this->subject_id}',
        bangla_question = '{$this->bangla_question}',
        english_question = '{$this->english_question}',
        bangla_options = '{$this->bangla_options}',
        english_options = '{$this->english_options}',
        is_option_contain_files = '{$this->is_option_contain_files}',
        file_ids = '{$this->file_ids}',
        correct_option = '{$this->correct_option}',
        answer_description = '{$this->answer_description}',
        difficulty_level = '{$this->difficulty_level}'
        WHERE question_id = {$this->question_id}";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "Record updated successfully.<br>";
            return true;
        } else {
            echo "Error updating record: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateStatus()
    {
        $sql = "UPDATE tbl_question SET status = '{$this->status}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Status updated successfully.<br>";
            return true;
        } else {
            echo "Error updating status: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateCreatedBy()
    {
        $sql = "UPDATE tbl_question SET created_by = '{$this->created_by}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Created by updated successfully.<br>";
            return true;
        } else {
            echo "Error updating created_by: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateSubjectId()
    {
        $sql = "UPDATE tbl_question SET subject_id = '{$this->subject_id}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Subject ID updated successfully.<br>";
            return true;
        } else {
            echo "Error updating subject_id: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateBanglaQuestion()
    {
        $sql = "UPDATE tbl_question SET bangla_question = '{$this->bangla_question}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Bangla question updated successfully.<br>";
            return true;
        } else {
            echo "Error updating bangla_question: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateEnglishQuestion()
    {
        $sql = "UPDATE tbl_question SET english_question = '{$this->english_question}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "English question updated successfully.<br>";
            return true;
        } else {
            echo "Error updating english_question: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateBanglaOptions()
    {
        $sql = "UPDATE tbl_question SET bangla_options = '{$this->bangla_options}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Bangla options updated successfully.<br>";
            return true;
        } else {
            echo "Error updating bangla_options: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateEnglishOptions()
    {
        $sql = "UPDATE tbl_question SET english_options = '{$this->english_options}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "English options updated successfully.<br>";
            return true;
        } else {
            echo "Error updating english_options: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateIsOptionContainFiles()
    {
        $sql = "UPDATE tbl_question SET is_option_contain_files = '{$this->is_option_contain_files}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "is_option_contain_files updated successfully.<br>";
            return true;
        } else {
            echo "Error updating is_option_contain_files: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateFileIds()
    {
        $sql = "UPDATE tbl_question SET file_ids = '{$this->file_ids}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "File IDs updated successfully.<br>";
            return true;
        } else {
            echo "Error updating file_ids: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateCorrectOption()
    {
        $sql = "UPDATE tbl_question SET correct_option = '{$this->correct_option}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Correct option updated successfully.<br>";
            return true;
        } else {
            echo "Error updating correct_option: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateAnswerDescription()
    {
        $sql = "UPDATE tbl_question SET answer_description = '{$this->answer_description}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Answer description updated successfully.<br>";
            return true;
        } else {
            echo "Error updating answer_description: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }

    public function updateDifficultyLevel()
    {
        $sql = "UPDATE tbl_question SET difficulty_level = '{$this->difficulty_level}' WHERE question_id = {$this->question_id}";

        if (mysqli_query($this->conn, $sql)) {
            echo "Difficulty level updated successfully.<br>";
            return true;
        } else {
            echo "Error updating difficulty_level: " . mysqli_error($this->conn) . "<br>";
            return false;
        }
    }


    // ************DELETE
    // NOT APPLICABLE NOW!!!!!!!!!!!!



    // ---------------OTHER

    // --------- Close connection
    public function closeConnection()
    {
        $this->db->closeConnection();
    }
}
?>
<!-- End here -->