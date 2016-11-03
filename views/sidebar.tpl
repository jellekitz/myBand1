<div id="right">
    <div id="links1">
        /
    </div>
    <div id="midden1">
        <div id="tourHead">
        <h1>Upcoming tours</h1>
        </div>
        
    {foreach from=$result2 item=oneItem}
    <article class="date">
    <h3>{$oneItem.title2}</h3>
    {$oneItem.place|truncate:50:'..':true:true}
    {$oneItem.date}
    </article>
    {/foreach}

    </div>
    <div id="rechts1">
        /
    </div>
</div>