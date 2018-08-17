<section class="product-accessories block block-section">
	<p class="section-title">{l s='You might also like' mod='vp_relatedproducts'}</span>
    <div class="block-content">
	    <div class="products slick-products-carousel products-grid slick-default-carousel">
	        {foreach from=$products item="product"}
	        	{block name='product_miniature'}
	            	{include file="catalog/_partials/miniatures/product.tpl" product=$product carousel=true}
	        	{/block}
	        {/foreach}
		</div>
	</div>
</section>
