<?php
require_once 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$action = $data['action'] ?? '';

if ($action === 'get_credential') {
    $voterID = trim($data['voterID'] ?? '');
    $stmt = $pdo->prepare("SELECT voter_id, name, credential_id, has_voted FROM voters WHERE voter_id = ?");
    $stmt->execute([$voterID]);
    $voter = $stmt->fetch();

    if (!$voter) {
        echo json_encode(["success" => false, "message" => "Numéro CNI non trouvé."]);
        exit;
    }

    echo json_encode(["success" => true, "voter" => $voter]);
    exit;
}

if ($action === 'cast_vote') {
    $voterID = trim($data['voterID'] ?? '');
    $candidateId = intval($data['candidateId'] ?? 0);

    if (!$voterID || !$candidateId) {
        echo json_encode(["success" => false, "message" => "Requête invalide."]);
        exit;
    }

    // Vérifier si l'électeur a déjà voté
    $stmt = $pdo->prepare("SELECT has_voted FROM voters WHERE voter_id = ?");
    $stmt->execute([$voterID]);
    $voter = $stmt->fetch();

    if (!$voter || $voter['has_voted'] == 1) {
        echo json_encode(["success" => false, "message" => "Action interdite : vous avez déjà voté ou l'électeur est introuvable."]);
        exit;
    }

    // Enregistrer le vote et verrouiller l'électeur dans une transaction sécurisée
    try {
        $pdo->beginTransaction();

        $stmtVote = $pdo->prepare("INSERT INTO votes (voter_id, candidate_id) VALUES (?, ?)");
        $stmtVote->execute([$voterID, $candidateId]);

        $stmtUpdate = $pdo->prepare("UPDATE voters SET has_voted = 1 WHERE voter_id = ?");
        $stmtUpdate->execute([$voterID]);

        $pdo->commit();
        echo json_encode(["success" => true, "message" => "Votre vote a été enregistré avec succès."]);
    } catch (Exception $e) {
        $pdo->rollBack();
        echo json_encode(["success" => false, "message" => "Erreur lors de l'enregistrement du vote."]);
    }
}
?>
