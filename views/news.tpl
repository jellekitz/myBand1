<div id="tourschema">
<div id="newsLinks">
    /
</div>
<div id="newsMidden">
    <div id="tourHead">
        <h1>News</h1>
        </div>
    <section>
    {foreach from=$result item=oneItem}
         <h1>{$oneItem.title}</h1>
    <img src={$oneItem.image}>
    {if $oneItem.video eq ''}
        
        {else}
        <iframe src={$oneItem.video}></iframe>
        {/if}
    <br>
    <content>{$oneItem.content|truncate:1000:'..':true:true}</content>
    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    
    {/foreach}
</section>
</div>
<div id="newsRechts">
    /
</div>
</div>