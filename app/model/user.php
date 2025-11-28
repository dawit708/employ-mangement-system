<?php

function get_all_users( $conn) {
    $sql = "SELECT * FROM employers WHERE role = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([ "employee"]);
    if ($stmt->rowCount() > 0) {
        $users= $stmt->fetchAll();
    }else  $users=0;
    return  $users;
     }


function insert_user($conn, $data) {
    $sql = "INSERT INTO employers (full_name, username, password,role) VALUES (?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

?>