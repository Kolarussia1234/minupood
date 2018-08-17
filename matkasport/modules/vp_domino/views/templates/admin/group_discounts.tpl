<div class="panel col-lg-12">
    <form method="post" action="{$form_url}">
        <table class="table table-responsive table-striped">
                {foreach from=$body key=id_group item=items name=items}
                    <tr{if $smarty.foreach.items.first} class="active"{/if}>
                        {foreach from=$items key=id_discount item=item name=item}
                            {if $smarty.foreach.items.first}
                                <td>{$item}</td>
                            {else}
                                {if $smarty.foreach.item.first}
                                    <td>{$item}</td>
                                {else}
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="discounts[{$id_group}][{$id_discount}]" value="{$item}">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </td>
                                {/if}
                            {/if}
                        {/foreach}
                    </tr>
                {/foreach}
        </table>
        <div class="panel-footer">
            <button type="submit" value="1" id="customer_group_discounts" name="customer_group_discounts" class="btn btn-default pull-right">
                <i class="process-icon-save"></i>{l s='Save'}
            </button>
        </div>
    </form>
</div>