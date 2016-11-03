<div id="tourschema">
<div id="tourLinks">
    /
</div>
<div id="tourMidden">
    <div id="tourHead">
        <h1>tours</h1>
        </div>
    {foreach from=$result2 item=oneItem}
    <article class="date">
    <h3>{$oneItem.title2}</h3>
    {$oneItem.place|truncate:1000:'..':true:true}
    {$oneItem.date}
    </article>
    {/foreach}
</div>
<div id="tourRechts">
    /
</div>
</div>