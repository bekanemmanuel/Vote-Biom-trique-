<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Élections Côte d'Ivoire · Pilotage Admin & Biométrie</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; background: #f4f7fc; color: #1e293b; padding: 1.5rem 1rem; }
    .flag-strip { display: flex; height: 8px; width: 100%; max-width: 1200px; margin: 0 auto 1.5rem; border-radius: 20px; overflow: hidden; }
    .flag-orange { background: #F77F00; flex: 1; }
    .flag-white { background: #FFFFFF; flex: 1; }
    .flag-green { background: #009E60; flex: 1; }
    .app-container { max-width: 1200px; width: 100%; background: white; border-radius: 30px; margin: 0 auto; box-shadow: 0 20px 40px rgba(0,0,0,0.1); padding: 2rem; }
    .header-title { display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px; }
    .header-left { display: flex; align-items: center; gap: 15px; }
    .header-icon { background: #F77F00; color: white; width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 24px; }
    .subtitle { color: #64748b; font-weight: 500; border-left: 4px solid #009E60; padding-left: 15px; margin-bottom: 30px; }
    .tabs { display: flex; gap: 10px; margin-bottom: 25px; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; overflow-x: auto; }
    .tab-btn { background: none; border: none; padding: 10px 20px; font-weight: 600; color: #64748b; cursor: pointer; border-radius: 10px; transition: 0.3s; white-space: nowrap; }
    .tab-btn.active { background: #F77F00; color: white; }
    .tab-btn.disabled-tab { opacity: 0.4; cursor: not-allowed; display: none; } /* Masqué si fermé par l'admin */
    .panel { display: none; }
    .panel.active { display: block; animation: fadeIn 0.4s; }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    .card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
    .form-card { background: #fafafa; border: 1px solid #e2e8f0; border-radius: 20px; padding: 20px; }
    .field-group { margin-bottom: 15px; }
    label { display: block; margin-bottom: 5px; font-weight: 600; font-size: 0.9rem; }
    input { width: 100%; padding: 12px; border: 1.5px solid #e2e8f0; border-radius: 12px; outline: none; }
    input:focus { border-color: #F77F00; }
    .btn { padding: 12px 20px; border-radius: 12px; border: none; font-weight: 600; cursor: pointer; transition: 0.2s; display: inline-flex; align-items: center; gap: 8px; }
    .btn-primary { background: #F77F00; color: white; }
    .btn-secondary { background: #e2e8f0; color: #1e293b; }
    .fingerprint-area { background: #fff; border: 2px dashed #cbd5e1; border-radius: 15px; padding: 20px; text-align: center; margin: 15px 0; }
    .fingerprint-icon.scanned { color: #009E60; }
    .list-container { max-height: 250px; overflow-y: auto; background: white; border-radius: 12px; margin-top: 10px; border: 1px solid #e2e8f0; padding: 10px;}
    .list-item { padding: 10px; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; }
    .candidate-option { display: flex; align-items: center; justify-content: space-between; padding: 15px; border: 2px solid #e2e8f0; border-radius: 15px; margin-bottom: 10px; cursor: pointer; background: white; transition: 0.2s; }
    .toast-container { position: fixed; top: 20px; right: 20px; z-index: 1000; }
    .toast { background: white; padding: 15px 25px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 10px; border-left: 5px solid #F77F00; font-weight: 600; }
    .stat-box { display: flex; justify-content: space-around; background: #fff; padding: 15px; border-radius: 15px; margin-bottom: 20px; border: 1px solid #e2e8f0; }
    /* Style Switch Admin */
    .switch-container { display: flex; justify-content: space-between; align-items: center; background: white; padding: 15px; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 10px; }
    .switch { position: relative; display: inline-block; width: 50px; height: 26px; }
    .switch input { opacity: 0; width: 0; height: 0; }
    .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #cbd5e1; transition: .4s; border-radius: 34px; }
    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 4px; bottom: 4px; background-color: white; transition: .4s; border-radius: 50%; }
    input:checked + .slider { background-color: #009E60; }
    input:checked + .slider:before { transform: translateX(24px); }
  </style>
</head>
<body>
<div id="toastContainer" class="toast-container"></div>
<div class="flag-strip"><div class="flag-orange"></div><div class="flag-white"></div><div class="flag-green"></div></div>

<div class="app-container">
  <div class="header-title">
    <div class="header-left">
      <div class="header-icon"><i class="fas fa-fingerprint"></i></div>
      <div>
        <h1>Élections Côte d'Ivoire</h1>
        <div class="subtitle" style="margin-bottom:0; border:none; padding:0;">Portail National Sécurisé</div>
      </div>
    </div>
  </div>

  <div class="tabs" id="navTabs">
    <button class="tab-btn active" data-tab="enrolment" id="tab-enrolment">Enrôlement</button>
    <button class="tab-btn" data-tab="candidates" id="tab-candidates">Candidats</button>
    <button class="tab-btn" data-tab="voting" id="tab-voting">Vote</button>
    <button class="tab-btn" data-tab="results" id="tab-results">Résultats</button>
    <button class="tab-btn" data-tab="admin" id="tab-admin" style="background:#1e293b; color:white;"><i class="fas fa-cog"></i> Administration</button>
  </div>

  <!-- PANEL ENROLMENT -->
  <div id="panel-enrolment" class="panel active">
    <div class="card-grid">
      <div class="form-card">
        <h3>Nouvel Électeur</h3>
        <div class="field-group"><label>Nom & Prénoms</label><input type="text" id="voterName" placeholder="Konan Kouassi"></div>
        <div class="field-group"><label>N° CNI / Passeport</label><input type="text" id="voterID" placeholder="CI00123456"></div>
        <div class="fingerprint-area">
          <div class="fingerprint-icon" id="enrolIcon"><i class="fas fa-fingerprint" style="font-size:40px;"></i></div>
          <p id="enrolStatus">Empreinte non enregistrée</p>
          <button class="btn btn-secondary" id="btnScanEnrol" style="margin-top:10px;">Scanner mon empreinte</button>
        </div>
        <button class="btn btn-primary" id="btnSaveVoter" style="width:100%; justify-content:center;">Enregistrer l'électeur</button>
      </div>
      <div class="form-card">
        <h3>Liste des enrôlés en base</h3>
        <div id="voterList" class="list-container">Chargement...</div>
      </div>
    </div>
  </div>

  <!-- PANEL CANDIDATES -->
  <div id="panel-candidates" class="panel">
    <div class="card-grid">
      <div class="form-card">
        <h3>Ajouter un Candidat</h3>
        <div class="field-group"><label>Nom du Candidat</label><input type="text" id="candName" placeholder="Ex: Houphouët-Boigny"></div>
        <div class="field-group"><label>Parti Politique</label><input type="text" id="candParty" placeholder="Ex: Rassemblement"></div>
        <button class="btn btn-primary" id="btnSaveCand" style="width:100%; justify-content:center;">Ajouter le candidat</button>
      </div>
      <div class="form-card">
        <h3>Candidats enregistrés</h3>
        <div id="candList" class="list-container">Chargement...</div>
      </div>
    </div>
  </div>

  <!-- PANEL VOTING -->
  <div id="panel-voting" class="panel">
    <div class="card-grid">
      <div class="form-card">
        <h3>Identification de l'Électeur</h3>
        <div class="field-group"><label>Entrez votre N° CNI</label><input type="text" id="voterCheckID" placeholder="CI00123456"></div>
        <div class="fingerprint-area">
          <div class="fingerprint-icon" id="voteIcon"><i class="fas fa-fingerprint" style="font-size:40px;"></i></div>
          <p id="voteStatus">Prêt pour authentification</p>
          <button class="btn btn-secondary" id="btnScanVote" style="margin-top:10px;">Vérifier mon empreinte</button>
        </div>
      </div>
      <div class="form-card">
        <h3>Bulletin de Vote</h3>
        <div id="ballotBox">Identifiez-vous d'abord avec votre CNI et votre empreinte biométrique</div>
      </div>
    </div>
  </div>

  <!-- PANEL RESULTS -->
  <div id="panel-results" class="panel">
    <div class="form-card">
      <h3>Résultats du Scrutin en Direct</h3>
      <div class="stat-box" id="statsBox">Calcul des statistiques...</div>
      <div id="resultsContent">Chargement des résultats...</div>
    </div>
  </div>

  <!-- PANEL ADMIN (Pilotage des sections) -->
  <div id="panel-admin" class="panel">
    <div class="form-card" style="max-width: 600px; margin: 0 auto;">
      <h3><i class="fas fa-sliders-h"></i> Panneau de Contrôle Administrateur</h3>
      <p style="color:#64748b; font-size:0.9rem; margin-bottom:20px;">Activez ou désactivez instantanément les sections de la plateforme pour les utilisateurs.</p>
      
      <div id="adminSettingsList">Chargement des paramètres...</div>
    </div>
  </div>
</div>

<script>
  const bufferToBase64 = (buf) => btoa(String.fromCharCode(...new Uint8Array(buf)));
  const base64ToBuffer = (base64) => Uint8Array.from(atob(base64), c => c.charCodeAt(0));

  let currentTempCredId = null;
  let identifiedVoterID = null;

  function toast(msg) {
    const t = document.createElement('div');
    t.className = 'toast';
    t.innerText = msg;
    document.getElementById('toastContainer').appendChild(t);
    setTimeout(() => t.remove(), 3500);
  }

  // --- CHARGEMENT GLOBAL & PARAMÈTRES ADMIN ---
  async function loadData() {
    try {
      const res = await fetch('api/register.php');
      const data = await res.json();
      
      // 1. Appliquer l'état d'ouverture/fermeture des sections
      if (data.settings) {
        for (const [key, isActive] of Object.entries(data.settings)) {
          const btn = document.getElementById('tab-' + key);
          const panel = document.getElementById('panel-' + key);
          
          if (btn) {
            if (isActive == 1) {
              btn.style.display = 'inline-block';
            } else {
              btn.style.display = 'none';
              // Si l'utilisateur est actuellement sur un onglet qui vient d'être fermé, on le renvoie vers le premier onglet actif
              if (btn.classList.contains('active')) {
                document.querySelector('.tab-btn').click();
              }
            }
          }
        }

        // Remplir le panneau d'administration
        document.getElementById('adminSettingsList').innerHTML = Object.entries(data.settings).map(([key, isActive]) => {
          const names = { enrolment: 'Section Enrôlement', candidates: 'Section Candidats', voting: 'Section Vote', results: 'Section Résultats' };
          return `
            <div class="switch-container">
              <span><b>${names[key] || key}</b></span>
              <label class="switch">
                <input type="checkbox" ${isActive == 1 ? 'checked' : ''} onchange="toggleSection('${key}', this.checked)">
                <span class="slider"></span>
              </label>
            </div>
          `;
        }).join('');
      }

      // 2. Listes standards
      document.getElementById('voterList').innerHTML = data.voters.length > 0 
        ? data.voters.map(v => `<div class="list-item"><span><b>${v.name}</b><br><small>${v.voter_id}</small></span> <span style="color:${v.has_voted?'#009E60':'#F77F00'}">${v.has_voted?'A voté':'Enrôlé'}</span></div>`).join('')
        : '<p style="padding:10px; color:#64748b;">Aucun électeur enrôlé.</p>';

      document.getElementById('candList').innerHTML = data.candidates.length > 0
        ? data.candidates.map(c => `<div class="list-item"><span><b>${c.name}</b></span> <small>${c.party}</small></div>`).join('')
        : '<p style="padding:10px; color:#64748b;">Aucun candidat.</p>';

      window.cachedCandidates = data.candidates;
    } catch (e) {
      console.error("Erreur de chargement", e);
    }
  }

  // --- MODIFIER L'ÉTAT D'UNE SECTION (ADMIN) ---
  window.toggleSection = async (sectionKey, isChecked) => {
    const res = await fetch('api/register.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action: 'update_settings', section_key: sectionKey, is_active: isChecked ? 1 : 0 })
    });
    const result = await res.json();
    toast(result.message);
    loadData();
  };

  // --- ENRÔLEMENT WEBAUTHN ---
  document.getElementById('btnScanEnrol').addEventListener('click', async () => {
    const name = document.getElementById('voterName').value;
    if (!name) return toast("Veuillez entrer le nom de l'électeur d'abord.");

    const challenge = window.crypto.getRandomValues(new Uint8Array(32));
    const userId = window.crypto.getRandomValues(new Uint8Array(16));

    const options = {
      publicKey: {
        challenge,
        rp: { name: "Élections CI", id: window.location.hostname || "localhost" },
        user: { id: userId, name: name, displayName: name },
        pubKeyCredParams: [{ alg: -7, type: "public-key" }, { alg: -257, type: "public-key" }],
        authenticatorSelection: { authenticatorAttachment: "platform", userVerification: "required" },
        timeout: 60000
      }
    };

    try {
      const cred = await navigator.credentials.create(options);
      currentTempCredId = bufferToBase64(cred.rawId);
      document.getElementById('enrolStatus').innerText = "Empreinte liée avec succès !";
      document.getElementById('enrolIcon').classList.add('scanned');
      toast("Biométrie enregistrée sur l'appareil.");
    } catch (err) {
      console.error(err);
      toast("Échec ou annulation de l'enrôlement biométrique.");
    }
  });

  // Sauvegarder Électeur (Backend PHP)
  document.getElementById('btnSaveVoter').addEventListener('click', async () => {
    const name = document.getElementById('voterName').value;
    const voterID = document.getElementById('voterID').value;

    if (!name || !voterID || !currentTempCredId) {
      return toast("Données incomplètes ou empreinte non scannée.");
    }

    const res = await fetch('api/register.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action: 'add_voter', name, voterID, credId: currentTempCredId })
    });
    const result = await res.json();
    toast(result.message);

    if (result.success) {
      currentTempCredId = null;
      document.getElementById('voterName').value = "";
      document.getElementById('voterID').value = "";
      document.getElementById('enrolStatus').innerText = "Empreinte non enregistrée";
      document.getElementById('enrolIcon').classList.remove('scanned');
      loadData();
    }
  });

  // Ajouter Candidat
  document.getElementById('btnSaveCand').addEventListener('click', async () => {
    const name = document.getElementById('candName').value;
    const party = document.getElementById('candParty').value;

    if (!name || !party) return toast("Veuillez remplir tous les champs.");

    const res = await fetch('api/register.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action: 'add_candidate', name, party })
    });
    const result = await res.json();
    toast(result.message);
    if(result.success) {
      document.getElementById('candName').value = "";
      document.getElementById('candParty').value = "";
      loadData();
    }
  });

  // --- VOTE & AUTHENTIFICATION ---
  document.getElementById('btnScanVote').addEventListener('click', async () => {
    const voterID = document.getElementById('voterCheckID').value;
    if (!voterID) return toast("Entrez votre numéro CNI.");

    const res = await fetch('api/vote.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action: 'get_credential', voterID })
    });
    const data = await res.json();

    if (!data.success) return toast(data.message);
    if (data.voter.has_voted == 1) {
      document.getElementById('ballotBox').innerHTML = "<b>Attention : Cet électeur a déjà accompli son devoir civique.</b>";
      return;
    }

    try {
      const challenge = window.crypto.getRandomValues(new Uint8Array(32));
      const credIdBuffer = base64ToBuffer(data.voter.credential_id);

      const assertion = await navigator.credentials.get({
        publicKey: {
          challenge,
          allowCredentials: [{ id: credIdBuffer, type: 'public-key' }],
          userVerification: "required",
          timeout: 60000
        }
      });

      if (assertion) {
        identifiedVoterID = data.voter.voter_id;
        document.getElementById('voteStatus').innerText = "Bienvenue, " + data.voter.name;
        document.getElementById('voteIcon').classList.add('scanned');
        toast("Authentification biométrique réussie !");
        renderBallot();
      }
    } catch (e) {
      console.error(e);
      toast("Échec de la vérification biométrique.");
    }
  });

  function renderBallot() {
    const box = document.getElementById('ballotBox');
    if (!window.cachedCandidates || window.cachedCandidates.length === 0) {
      box.innerHTML = "Aucun candidat enregistré pour le moment.";
      return;
    }

    box.innerHTML = `<h4>Sélectionnez votre candidat :</h4><br>` + window.cachedCandidates.map(c => `
      <div class="candidate-option" onclick="castVote(${c.id})">
        <div><b>${c.name}</b><br><small style="color:#64748b">${c.party}</small></div>
        <button class="btn btn-primary" style="padding:6px 12px; font-size:0.8rem;">Voter</button>
      </div>
    `).join('');
  }

  window.castVote = async (candidateId) => {
    if (!identifiedVoterID) return toast("Erreur d'identification.");

    const res = await fetch('api/vote.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action: 'cast_vote', voterID: identifiedVoterID, candidateId })
    });
    const result = await res.json();
    toast(result.message);

    if (result.success) {
      document.getElementById('ballotBox').innerHTML = "<div style='text-align:center; padding:20px;'><i class='fas fa-check-circle' style='font-size:50px; color:#009E60;'></i><h3 style='margin-top:10px;'>Merci pour votre vote !</h3><p>Votre suffrage a été pris en compte de façon sécurisée.</p></div>";
      identifiedVoterID = null;
      loadData();
    }
  };

  // --- CHARGEMENT DES RÉSULTATS ---
  async function loadResults() {
    const res = await fetch('api/results.php');
    const data = await res.json();

    document.getElementById('statsBox').innerHTML = `
      <div><b>Total Électeurs :</b> ${data.stats.totalVoters}</div>
      <div><b>Suffrages Exprimés :</b> ${data.stats.totalVotes}</div>
    `;

    document.getElementById('resultsContent').innerHTML = data.results.length > 0 ? data.results.map(r => `
      <div class="list-item" style="margin-bottom: 10px; background: #fff; border: 1px solid #e2e8f0; border-radius: 10px;">
        <span><b>${r.name}</b> (${r.party})</span>
        <span style="font-weight:700; color:#F77F00; font-size:1.1rem;">${r.vote_count} votes</span>
      </div>
    `).join('') : '<p>Aucun vote enregistré pour l\'instant.</p>';
  }

  // --- GESTION DES ONGLETS ---
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn, .panel').forEach(el => el.classList.remove('active'));
      btn.classList.add('active');
      const targetPanel = document.getElementById('panel-' + btn.dataset.tab);
      if (targetPanel) targetPanel.classList.add('active');
      if (btn.dataset.tab === 'results') loadResults();
    });
  });

  loadData();
</script>
</body>
</html>
