<?php
require_once 'db.php';
header('Content-Type: application/json');

// Compter les votes par candidat
$query = "
    SELECT c.id, c.name, c.party, COUNT(v.id) as vote_count 
    FROM candidates c 
    LEFT JOIN votes v ON c.id = v.candidate_id 
    GROUP BY c.id, c.name, c.party
    ORDER BY vote_count DESC
";
$results = $pdo->query($query)->fetchAll();

// Statistiques globales
$totalVoters = $pdo->query("SELECT COUNT(*) FROM voters")->fetchColumn();
$totalVotes = $pdo->query("SELECT COUNT(*) FROM votes")->fetchColumn();

echo json_encode([
    "results" => $results,
    "stats" => [
        "totalVoters" => intval($totalVoters),
        "totalVotes" => intval($totalVotes)
    ]
]);
?>
