<?php
require_once 'db.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $voters = $pdo->query("SELECT voter_id, name, has_voted FROM voters")->fetchAll();
    $candidates = $pdo->query("SELECT * FROM candidates")->fetchAll();
    
    // Récupérer l'état des sections
    $settingsStmt = $pdo->query("SELECT * FROM settings");
    $settings = [];
    while ($row = $settingsStmt->fetch()) {
        $settings[$row['section_key']] = (int)$row['is_active'];
    }

    echo json_encode([
        "voters" => $voters, 
        "candidates" => $candidates,
        "settings" => $settings
    ]);
    exit;
}

if ($method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $action = $data['action'] ?? '';

    if ($action === 'update_settings') {
        $sectionKey = $data['section_key'] ?? '';
        $isActive = isset($data['is_active']) ? (int)$data['is_active'] : 0;

        $stmt = $pdo->prepare("UPDATE settings SET is_active = ? WHERE section_key = ?");
        if ($stmt->execute([$isActive, $sectionKey])) {
            echo json_encode(["success" => true, "message" => "Configuration mise à jour avec succès."]);
        } else {
            echo json_encode(["success" => false, "message" => "Erreur lors de la mise à jour."]);
        }
        exit;
    }

    // ... (garder le reste du code pour add_voter et add_candidate)
}
?>
