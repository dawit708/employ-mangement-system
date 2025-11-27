<?php
session_start();

// Check if user is logged in and has appropriate role
if(isset($_SESSION['role']) && isset($_SESSION['id'])) {
    
    if(isset($_POST['Full_name']) && isset($_POST['user_name']) && isset($_POST['password'])) {
        include "../DB_connection.php";
        
        function validate_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        // CORRECTED: Proper variable assignment
        $Full_name = validate_input($_POST['Full_name']);
        $user_name = validate_input($_POST['user_name']);
        $password = validate_input($_POST['password']);
        
        // Validation checks
        if(empty($Full_name)) {
            $em = "Full name is required";
            header("location: ../add-user.php?error=$em");
            exit();
        } else if(empty($user_name)) {
            $em = "Username is required";
            header("location: ../add-user.php?error=$em");
            exit();
        } else if(empty($password)) {
            $em = "Password is required";
            header("location: ../add-user.php?error=$em");
            exit();
        } else {
            // Include the model and insert user
            include "model/user.php";
            $data = array($Full_name, $user_name, $password);
            
            // Assuming insert_employers returns true on success
            if(insert_employers($conn, $data)) {
                $sm = "User added successfully";
                header("location: add-user.php?success=$sm");
                exit();
            } else {
                $em = "Error adding user";
                header("location: add-user.php?error=$em");
                exit();
            }
        }
    } else {
        $em = "All fields are required";
        header("location: add-user.php?error=$em");
        exit();
    }
} else {
    $em = "First login";
    header("location: ../login.php?error=$em"); // CORRECTED: Proper redirect path
    exit();
}
?>