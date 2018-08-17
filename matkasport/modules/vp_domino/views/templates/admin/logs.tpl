<div class="panel">
    <h3><i class="icon icon-file"></i> {l s='Domino logs' mod='vp_domino'}</h3>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                {l s="Manufacturer import logs"}
            </div>
            <div class="panel-body">
                {foreach from=$manufacturer_logs item=log}
                    {if is_array($log)}
                        <div class="row">
                            <div class="col-md-2">
                                {$log.date}
                            </div>
                            <div class="col-md-10">
                                {$log.message}
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{l s="Product import logs"}</h4>
            </div>
            <div class="panel-body">
                {foreach from=$product_logs item=log}
                    {if is_array($log)}
                        <div class="row">
                            <div class="col-md-2">
                                {$log.date}
                            </div>
                            <div class="col-md-10">
                                {$log.message}
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
    </div>
</div>