<?php
$response = ['success' => false];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        $response['success'] = true;
        $response['file_name'] = $_FILES['file']['name'];
        $response['file_size'] = round($_FILES['file']['size'] / 1024, 2);
        $response['file_url'] = $uploadFile;
    } else {
        $response['error'] = 'Dosya yükleme başarısız.';
    }
} else {
    $response['error'] = 'Dosya bulunamadı veya yüklenemedi.';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
