<?php

function get_all_users($conn) {
    $sql = "SELECT * FROM employers WHERE role = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["employee"]);
    if ($stmt->rowCount() > 0) {
        $users = $stmt->fetchAll();
    } else {
        $users = 0;
    }
    return $users;
}

function insert_user($conn, $data) {
    $sql = "INSERT INTO employers (full_name, username, password, role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
     
}

function Update_user($conn, $data) {
    $sql = "UPDATE employers SET full_name=?, username=?, password=?, role=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
        
}

function get_user_by_id($conn, $id) {
    $sql = "SELECT * FROM employers WHERE id = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]); 
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
    } else {
        $user = 0;
    }
    return $user;
}

?>