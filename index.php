<?php

// Database Connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'database';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Manager Registration Portal
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required";
    } else {
        // Check for existing user
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "User already exists";
        } else {
            // Insert data into database
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Registration successful";
            } else {
                echo "Error: ".mysqli_error($conn);
            }
        }
    }
}

// Manager Login
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validation
    if (empty($email) || empty($password)) {
        echo "All fields are required";
    } else {
        // Check for existing user
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Login successful";
        } else {
            echo "Incorrect email or password";
        }
    }
}

// Add Project
if (isset($_POST['add_project'])) {
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $project_prototype = mysqli_real_escape_string($conn, $_POST['project_prototype']);
    $project_start_date = mysqli_real_escape_string($conn, $_POST['project_start_date']);
    $project_deadline = mysqli_real_escape_string($conn, $_POST['project_deadline']);
    $project_manager = mysqli_real_escape_string($conn, $_POST['project_manager']);
    $project_developer = mysqli_real_escape_string($conn, $_POST['project_developer']);
    $project_status = mysqli_real_escape_string($conn, $_POST['project_status']);

    // Validation
    if (empty($project_name) || empty($project_description) || empty($project_prototype) || empty($project_start_date) || empty($project_deadline) || empty($project_manager) || empty($project_developer) || empty($project_status)) {
        echo "All fields are required";
    } else {
        // Insert data into database
        $sql = "INSERT INTO projects (project_name, project_description, project_prototype, project_start_date, project_deadline, project_manager, project_developer, project_status) VALUES ('$project_name', '$project_description', '$project_prototype', '$project_start_date', '$project_deadline', '$project_manager', '$project_developer', '$project_status')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Project added successfully";
        } else {
            echo "Error: ".mysqli_error($conn);
        }
    }
}

// List of Projects
if (isset($_POST['view_projects'])) {
    $sql = "SELECT * FROM projects";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Project Name: ".$row['project_name']."<br>";
            echo "Project Description: ".$row['project_description']."<br>";
            echo "Project Prototype: ".$row['project_prototype']."<br>";
            echo "Project Start Date: ".$row['project_start_date']."<br>";
            echo "Project Deadline: ".$row['project_deadline']."<br>";
            echo "Project Manager: ".$row['project_manager']."<br>";
            echo "Project Developer: ".$row['project_developer']."<br>";
            echo "Project Status: ".$row['project_status']."<br><br>";
        }
    }
}

// Edit Project
if (isset($_POST['edit_project'])) {
    $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $project_prototype = mysqli_real_escape_string($conn, $_POST['project_prototype']);
    $project_start_date = mysqli_real_escape_string($conn, $_POST['project_start_date']);
    $project_deadline = mysqli_real_escape_string($conn, $_POST['project_deadline']);
    $project_manager = mysqli_real_escape_string($conn, $_POST['project_manager']);
    $project_developer = mysqli_real_escape_string($conn, $_POST['project_developer']);
    $project_status = mysqli_real_escape_string($conn, $_POST['project_status']);

    // Validation
    if (empty($project_id) || empty($project_name) || empty($project_description) || empty($project_prototype) || empty($project_start_date) || empty($project_deadline) || empty($project_manager) || empty($project_developer) || empty($project_status)) {
        echo "All fields are required";
    } else {
        // Update data into database
        $sql = "UPDATE projects SET project_name='$project_name', project_description='$project_description', project_prototype='$project_prototype', project_start_date='$project_start_date', project_deadline='$project_deadline', project_manager='$project_manager', project_developer='$project_developer', project_status='$project_status' WHERE project_id='$project_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Project updated successfully";
        } else {
            echo "Error: ".mysqli_error($conn);
        }
    }
}

// Delete Project
if (isset($_POST['delete_project'])) {
    $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);

    // Validation
    if (empty($project_id)) {
        echo "Project ID is required";
    } else {
        // Delete data from database
        $sql = "DELETE FROM projects WHERE project_id='$project_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Project deleted successfully";
        } else {
            echo "Error: ".mysqli_error($conn);
        }
    }
}

// Change Project Status
if (isset($_POST['change_project_status'])) {
    $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);
    $project_status = mysqli_real_escape_string($conn, $_POST['project_status']);

    // Validation
    if (empty($project_id) || empty($project_status)) {
        echo "Project ID and Status are required";
    } else {
        // Update data into database
        $sql = "UPDATE projects SET project_status='$project_status' WHERE project_id='$project_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Project status updated successfully";
        } else {
            echo "Error: ".mysqli_error($conn);
        }
    }
}

// Close database connection
mysqli_close($conn);

?>
