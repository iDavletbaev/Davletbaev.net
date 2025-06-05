<?php
header('Content-Type: application/json');

// Демо данные
$case = array(
    'title' => 'Title',
    'date' => date('F Y'),
    'duration' => 'Duration',
    'category' => 'Category',
    'description' => 'Description',
    'url' => 'URL',
    'tech' => array(
        'Technology',
        'TTT'
    ),
    'images' => array(
        '/sdcdcsdc-0.jpg',
        '/sdcdcsdc-1.jpg',
        '/sdcdcsdc-2.jpg',
    ),
    'results' => 'sdcsdcsc',
);

if ($case && is_array($case)) {
    // Формируем ответ
    $response = $case;
    http_response_code(200);
    echo json_encode($response);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Case not found']);
}
