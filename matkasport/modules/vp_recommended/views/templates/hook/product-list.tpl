<section class="vp-recommended-products block block-section">
	<p class="section-title">{l s='Matkasport suggests' mod='vp_recommended'}</span>
    <div class="block-content">
	    <div class="products slick-products-carousel products-grid slick-default-carousel">
	        {foreach from=$vp_recommended_products item="vp_recommended_product"}
	        	{block name='product_miniature'}
	            	{include file="catalog/_partials/miniatures/product.tpl" product=$vp_recommended_product carousel=true}
	        	{/block}
	        {/foreach}
		</div>
	</div>
</section>