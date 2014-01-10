{* Smarty *}

{foreach $pg as $p}

{$p->getNome()}

{/foreach}

{if count($pg) < 3}

    <a href="{$pff_root_ext}personaggio/crea">Crea nuovo PG</a>


{/if}