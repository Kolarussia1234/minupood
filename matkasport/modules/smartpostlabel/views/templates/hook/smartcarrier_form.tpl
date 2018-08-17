<div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <i class="icon-credit-card"></i>
                {l s='SmartCarrier address' mod='smartpostlabel'}
            </div>
            <form method="post">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-lg-3">{l s='Street' mod='smartpostlabel'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="street" value="{$parsed_address.street}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">{l s='House' mod='smartpostlabel'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="house" value="{$parsed_address.house}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">{l s='Apartment' mod='smartpostlabel'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="apartment" value="{$parsed_address.apartment}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submitSmartCarrier" class="btn btn-primary pull-right" name="submitSmartCarrier">
                                {l s='Send order' mod='smartpostlabel'}
                            </button>
                            <input type="hidden" name="id_order" value="{$id_order}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
