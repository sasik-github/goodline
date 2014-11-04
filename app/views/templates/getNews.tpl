<!-- {config_load file="test.conf" section="setup"} -->
{include file="header.tpl" title=$news->title}

<div class="row clearfix">
    <div class="col-md-12">
        <div class="well">
        <h2>
            {$news->title}
        </h2>
        <div class="thumbnail">
            <img src="{$picture}">
        </div>
        <p>
            {$news->data}
        </p>
        <p class="text-right">
            {$news->date}
        </p>
        </div>
    </div>
</div>

{if $comments }
<div class="row clearfix">
    <div class="col-md-8 col-md-offset-1" id="comments">
        <div class="list-group">
            {section name=outer loop=$comments}
                <a href="#comments " class="list-group-item">
                <h4 class="list-group-item-heading">
                   {$comments[outer]->author|escape}
                </h4>
                <p class="list-group-item-text">
                    {$comments[outer]->data|escape}
                </p><p class="list-group-item-text text-right">
                    {$comments[outer]->date|escape}
                </p>

                </a>
            {/section}
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-4  col-md-offset-4 column">
       <ul class="pager">
            {if $hasPrev}
                <li><a href="?action=getnews&id={$news->id}&page={$curr-1}">Previous</a></li>
            {else}
                <li class="disabled"><a href="#">Previous</a></li>
            {/if}
            {if $hasNext}
                <li><a href="?action=getnews&id={$news->id}&page={$curr+1}">Next</a></li>
            {else}
                <li class="disabled"><a href="">Next</a></li>
            {/if}
        </ul>
    </div>
</div>
{/if}
