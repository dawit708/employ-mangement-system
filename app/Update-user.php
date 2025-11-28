<?php
session_start(); 
if(isset($_SESSION['role']) && isset($_SESSION['id'])) {  
    if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['full_name']) && $_SESSION['role'] == 'admin') { 
        include "../DB_connection.php";   
        
        function validate_input($data) {         
            $data = trim($data);         
            $data = stripslashes($data);         
            $data = htmlspecialchars($data);         
            return $data;     
        }      
        
        $user_name = validate_input($_POST['user_name']);     
        $password = validate_input($_POST['password']); 
        $full_name = validate_input($_POST['full_name']); 
        $id = validate_input($_POST['id']); 
        
        if (empty($user_name)) {   
            $em = "Username is required";   
            header("location: ../edit-user.php?error=$em&id=$id");   
            exit();  
        } else if (empty($password)) {   
            $em = "Password is required";   
            header("location: ../edit-user.php?error=$em&id=$id");   
            exit();  
        } else if (empty($full_name)) {   
            $em = "Full name is required";   
            header("location: ../edit-user.php?error=$em&id=$id");   
            exit();            
        } else {
            include "model/User.php";
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Use Update_user instead of insert_user for editing
            $data = array($full_name, $user_name, $password, "employee", $id);
            
            if (Update_user($conn, $data)) {
                $sm = "User updated successfully";
                header("location: ../edit-user.php?success=$sm&id=$id");
                exit();
             } //else {
            //     $em = "Error updating user";
            //     header("location: ../edit-user.php?error=$em&id=$id");
            //     exit();
            // }
            
        }
    } else {
        $em = "Invalid request";
        header("location: ../edit-user.php?error=$em");
        exit();
    }
} else {
    header("location: ../login.php");
    exit();
}
?>