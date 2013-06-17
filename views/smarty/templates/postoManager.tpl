{* Smarty *}

<div>
    <b>{$descrizione['nome']} - {$descrizione['citta']} - {$descrizione['regione']}</b> <br/>
    {$descrizione['descrizione']}
</div>
<div style="padding: 20px">
    Da qui puoi andare : <br/>
    <ul>
    {foreach $disponibili as $d}
        <li><a href="{$pff_root_ext}posto/cambia/{$d['id']}">{$d['nome']}</a></li>
    {/foreach}
    </ul>
</div>