<div id="left">
<section>
    {foreach from=$result item=oneItem}
         <h1>{$oneItem.title}</h1>
    <content>{$oneItem.content|truncate:50:'..':true:true}</content>
    <br>
    <img src={$oneItem.image}>
    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    
    {/foreach}
</section>
    </div>