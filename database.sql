-- Table de configuration des sections (Pilotage par l'Admin)
CREATE TABLE IF NOT EXISTS settings (
    section_key VARCHAR(50) PRIMARY KEY,
    is_active TINYINT(1) DEFAULT 1,
    section_name VARCHAR(100) NOT NULL
);

-- Insertion des états initiaux de chaque section
INSERT INTO settings (section_key, is_active, section_name) VALUES 
('enrolment', 1, 'Section Enrôlement'),
('candidates', 1, 'Section Candidats'),
('voting', 1, 'Section Vote'),
('results', 1, 'Section Résultats')
ON DUPLICATE KEY UPDATE section_name = VALUES(section_name);
