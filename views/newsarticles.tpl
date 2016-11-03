<div id="left">
<section>
    {foreach from=$result item=oneItem}
         <h1>{$oneItem.title}</h1>
    <content>{$oneItem.content|truncate:1000:'..':true:true}</content>
    <br>
    <image src={$oneItem.image}>
        {if $oneItem.video eq ''}
        
        {else}
        <iframe src={$oneItem.video}></iframe>
        {/if}
    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    
    {/foreach}
</section>
    <div id="pagenmr">
    <ul>
        <li><a href="?action=home&page_nr=1">1</a></li>
        <li><a href="?action=home&page_nr=2">2</a></li>
        <li><a href="?action=home&page_nr=3">3</a></li>
        <li><a href="?action=home&page_nr=4">4</a></li>
    </ul>
        </div>
     </div>