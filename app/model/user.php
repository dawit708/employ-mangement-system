<?php

function get_all_users(PDO $conn): array {
    $sql = "SELECT * FROM employers WHERE role = :role";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':role' => "employee"]);
    if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll();
    } else {
        return [];
    }
}

function insert_employers(PDO $conn, array $data): bool {
    $sql = "INSERT INTO employers (full_name, user_name, password) VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute($data);
}
?>