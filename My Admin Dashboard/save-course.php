<?php
require_once '../config.php';

header('Content-Type: application/json');

// Get input data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['success' => false, 'message' => 'Invalid input data']);
    exit;
}

$course_id = isset($input['id']) ? intval($input['id']) : 0;

try {
    // Prepare data for storage
    $semesters = implode(',', $input['semesters'] ?? []);
    $prerequisites = implode(',', $input['prerequisites'] ?? []);
    $learning_outcomes = implode("\n", $input['learning_outcomes'] ?? []);
    $syllabus = json_encode($input['syllabus'] ?? []);
    
    if ($course_id > 0) {
        // Update existing course
        $stmt = $pdo->prepare("UPDATE courses SET 
            code = ?, name = ?, department = ?, credits = ?, type = ?, 
            description = ?, status = ?, semesters = ?, prerequisites = ?,
            learning_outcomes = ?, syllabus = ?, updated_at = NOW() 
            WHERE id = ?");
        
        $stmt->execute([
            $input['code'],
            $input['name'],
            $input['department'],
            $input['credits'],
            $input['type'],
            $input['description'],
            $input['status'],
            $semesters,
            $prerequisites,
            $learning_outcomes,
            $syllabus,
            $course_id
        ]);
    } else {
        // Create new course
        $stmt = $pdo->prepare("INSERT INTO courses 
            (code, name, department, credits, type, description, status, 
            semesters, prerequisites, learning_outcomes, syllabus, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
        
        $stmt->execute([
            $input['code'],
            $input['name'],
            $input['department'],
            $input['credits'],
            $input['type'],
            $input['description'],
            $input['status'],
            $semesters,
            $prerequisites,
            $learning_outcomes,
            $syllabus
        ]);
        
        $course_id = $pdo->lastInsertId();
    }
    
    echo json_encode(['success' => true, 'message' => 'Course saved successfully', 'id' => $course_id]);
    
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>