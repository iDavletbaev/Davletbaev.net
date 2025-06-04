<?php
header('Content-Type: application/json');

// Подключение к базе данных (настройте под свою БД)
$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'username', 'password');

// Получаем ID кейса из запроса
$caseId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Защита от SQL-инъекций
$stmt = $db->prepare("SELECT * FROM cases WHERE id = :id");
$stmt->bindParam(':id', $caseId, PDO::PARAM_INT);
$stmt->execute();

$case = $stmt->fetch(PDO::FETCH_ASSOC);

if ($case) {
    // Получаем технологии для кейса
    $techStmt = $db->prepare("SELECT name FROM technologies WHERE case_id = :id");
    $techStmt->bindParam(':id', $caseId, PDO::PARAM_INT);
    $techStmt->execute();
    $technologies = $techStmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Получаем изображения для кейса
    $imagesStmt = $db->prepare("SELECT image_path FROM case_images WHERE case_id = :id ORDER BY sort_order");
    $imagesStmt->bindParam(':id', $caseId, PDO::PARAM_INT);
    $imagesStmt->execute();
    $images = $imagesStmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Получаем результаты для кейса
    $resultsStmt = $db->prepare("SELECT result FROM case_results WHERE case_id = :id ORDER BY id");
    $resultsStmt->bindParam(':id', $caseId, PDO::PARAM_INT);
    $resultsStmt->execute();
    $results = $resultsStmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Формируем ответ
    $response = [
        'title' => $case['title'],
        'date' => date('F Y', strtotime($case['date'])),
        'duration' => $case['duration'],
        'category' => $case['category'],
        'description' => $case['description'],
        'url' => $case['url'],
        'tech' => $technologies,
        'images' => $images,
        'results' => $results
    ];
    
    echo json_encode($response);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Case not found']);
}
?>