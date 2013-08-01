{* Smarty *}

<div style="padding: 20px;">
    <h2>Scheda  {$p['nome']}</h2>
    <h3>Livello : {$p['lev']} | XP : {$p['xp']}/{$p['xp_next']} | PF : {$p['pf']}/{$p['pfr']}</h3>
    <p>{$p['status']}</p>
    <ul>
        <li>{$p['att']} Attacco</li>
        <li>{$p['def']} Difesa</li>
        <li>{$p['cha']} Carisma</li>
        <li>{$p['mov']} Movimento</li>
    </ul>


</div>