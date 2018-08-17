{** NOTICE OF LICENSE
*
* This module was created by veebipoed.ee and is protected by the laws of Copyright.
* This use license is granted for only one website.
* To use this module on several websites, you must purchase as many licenses as websites on which you want to use it.
* Use, copy, modification or distribution of this module without written license agreement from veebipoed.ee is strictly forbidden.
* In order to obtain a license, please contact us: info@veebipoed.ee
* Any infringement of these provisions as well as general copyrights will be prosecuted.
*
*
* @author     VEEBIPOED.EE
* @copyright  Copyright (c) 2012-2018 veebipoed.ee (http://www.veebipoed.ee)
* @license    Commercial license
* Support by mail: info@veebipoed.ee
*}
<script type="text/javascript">

    {literal}
    var stock={/literal}{$stock|json_encode nofilter}{literal}
    {/literal}
        function loadStocks(id,hasAttributes){
            if(stock.length > 0){
                $('.warehouse-data .in-stock').hide();
                $('.warehouse-data .not-in-stock').show();

                $('.warehouse-data div.active').removeClass('active').addClass('not-active');
                for(var i = 0; i < stock.length; i++){
                    if(hasAttributes) {
                        if(stock[i].id_product_attribute == id){
                            $('.warehouse-data div#stock-' + stock[i].shop_number).removeClass('not-active').addClass('active');
                        }
                    }else {
                        if(stock[i].id_product == id){
                            $('.warehouse-data div#stock-' + stock[i].shop_number).removeClass('not-active').addClass('active');
                        }
                    }

                    if($('.warehouse-data div.active').length > 0){
                        $('.warehouse-data .in-stock').show();
                        $('.warehouse-data .not-in-stock').hide();

                    }
                }

            }
        }

</script>
    <div class="warehouse-data clearfix">
        <h3 class="in-stock" style="display:none">{l s="Valikutega toode on saadaval järgmistes kauplustes" mod="vp_buumstocks"}</h3>
        <h3 class="not-in-stock">{l s="Valikutega toode ei ole saadaval" mod="vp_buumstocks"}</h3>
        {foreach $warehouses as $warehouse}
            <div class="not-active" id="stock-{$warehouse.shop_number}">
                {$warehouse.warehouse}
            </div>
        {/foreach}
    </div>