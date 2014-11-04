{include file="../header.tpl" title="Goodline blog"}
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a class="btn btn-default" id="sort">Sort by date(js)</a>
            <a class="btn btn-default" href="{$doc_root}home/index/desc">Sort by date(php)</a>
            <a class="btn btn-default" href="{$doc_root}home/index/asc">Sort by date(php)</a>
        </div>
    </div>
    <div class="row newses">
        {foreach from=$newses item="news"}
            <div class="col-md-4 news-item">
                <h2>
                    {$news->title|escape}
                </h2>
                <p>
                    {$news->data|escape}
                </p>
                <p class="date">
                    {$news->date|escape}
                    <a class="btn" href="{$doc_root}home/news/{$news->id}">View details...</a>
                </p>
            </div>
        {foreachelse}
            <div class="col-md-4"><h2>Newses not found</h2></div>
        {/foreach}
    </div>
   
{include file="../footer.tpl"}