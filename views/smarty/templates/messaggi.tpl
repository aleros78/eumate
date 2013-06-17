{* Smarty *}

<ul>
{foreach $messaggi as $m}
    <li>
        {$m['tempo']} - {$m['nome']} - {$m['messaggio']}
    </li>
{/foreach}
</ul>