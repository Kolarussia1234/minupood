<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:06:08
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71743060b150_19254135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1534079512,
      2 => 'module',
    ),
    'ef21f19734cd9535edfc1d9a322bbd76045749c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
    'de9bb6f97d4ad5a713ce5c7913001de6176b8595' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\_partials\\product-miniature-1.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
    'bf2920051f3287aa36a9100993f6bf72882e1d7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\_partials\\product-miniature-thumb.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
    'affbd9b70f23fda922f9853bdb978dddc16a50dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
    'ab253a2cc6cca937069b13b64d935b90b28ea5d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\_partials\\product-miniature-btn.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5b71743060b150_19254135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?><!-- begin C:\xampp\htdocs\Prestashop/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl -->
<section>
  <h1>Наши товары</h1>
  <div class="products">
          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="1"
                data-id-product-attribute="1"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/2-home_default/hummingbird-printed-t-shirt.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Hummingbird printed t-shirt"
                        data-full-size-image-url="http://localhost/Prestashop/2-thickbox_default/hummingbird-printed-t-shirt.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                    <img
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                data-src="http://localhost/Prestashop/2-home_default/hummingbird-printed-t-shirt.jpg"
                                width="236"
                                height="305"
                                alt="Hummingbird printed t-shirt 2"
                                class="img-fluid js-lazy-product-image product-thumbnail-second"
                            >
                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag discount">Цена снижена
                                                    <span class="flag-discount-value"> /
                                                            -20%
                                                        </span>
                                            </li>
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="1" data-id-product-attribute="1"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="1"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>




<div class="product-description">

    
                    <div class="product-category-name text-muted">Men</div>    

    
        <h3 class="h3 product-title" itemprop="name">
            <a href="http://localhost/Prestashop/ru/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white">Hummingbird printed t-shirt</a>
        </h3>
    

    
                    <div class="product-brand text-muted">Studio Design</div>    

    
                    <div class="product-reference text-muted">demo_1</div>    

    
        
<!-- begin module:iqitreviews/views/templates/hook/simple-product-rating.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitreviews/views/templates/hook/simple-product-rating.tpl -->
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitreviews/views/templates/hook/simple-product-rating.tpl -->
<!-- end module:iqitreviews/views/templates/hook/simple-product-rating.tpl -->

    

    
                    <div class="product-price-and-shipping"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <meta itemprop="priceCurrency" content="EUR">                
                <span itemprop="price" class="product-price" content="22.94">22,94 €</span>
                                    
                    <span class="regular-price text-muted">28,68 €</span>
                                
                
                                    
<!-- begin module:iqitcountdown/views/templates/hook/product.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcountdown/views/templates/hook/product.tpl -->
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcountdown/views/templates/hook/product.tpl -->
<!-- end module:iqitcountdown/views/templates/hook/product.tpl -->

                            </div>
            

    
                    <div class="products-variants">
                                    <div class="variant-links">
      <a href="http://localhost/Prestashop/ru/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white"
       class="color"
       title="White"
       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
      <a href="http://localhost/Prestashop/ru/men/1-2-hummingbird-printed-t-shirt.html#/1-size-s/11-color-black"
       class="color"
       title="Black"
       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
    <span class="js-count count"></span>
</div>                            </div>
            

    
        <div class="product-description-short text-muted">
            Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. 

        </div>
    

    
        
<div class="product-add-cart">
    
            <form action="http://localhost/Prestashop/ru/cart?add=1&amp;id_product=1&amp;id_product_attribute=1&amp;token=89ee1290b6d2e6821aa5fed71b5dcd46" method="post">

            <input type="hidden" name="id_product" value="1">
            <div class="input-group input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="1"
                        class="input-group form-control input-qty"
                        min="1"
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                                        ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> В корзину
                </button>
            </div>

        </form>
    </div>    

    
        
    

</div>
        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="2"
                data-id-product-attribute="9"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/home/2-9-brown-bear-printed-sweater.html#/1-size-s" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/21-home_default/brown-bear-printed-sweater.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Brown bear printed sweater"
                        data-full-size-image-url="http://localhost/Prestashop/21-thickbox_default/brown-bear-printed-sweater.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag discount">Цена снижена
                                                    <span class="flag-discount-value"> /
                                                            -20%
                                                        </span>
                                            </li>
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="2" data-id-product-attribute="9"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="2"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="3"
                data-id-product-attribute="13"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/art/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/3-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="The best is yet to come&#039; Framed poster"
                        data-full-size-image-url="http://localhost/Prestashop/3-thickbox_default/the-best-is-yet-to-come-framed-poster.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="3" data-id-product-attribute="13"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="3"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="4"
                data-id-product-attribute="16"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/home/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/4-home_default/the-adventure-begins-framed-poster.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="The adventure begins Framed poster"
                        data-full-size-image-url="http://localhost/Prestashop/4-thickbox_default/the-adventure-begins-framed-poster.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="4" data-id-product-attribute="16"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="4"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="5"
                data-id-product-attribute="19"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/5-home_default/today-is-a-good-day-framed-poster.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Today is a good day Framed poster"
                        data-full-size-image-url="http://localhost/Prestashop/5-thickbox_default/today-is-a-good-day-framed-poster.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="5" data-id-product-attribute="19"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="5"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="6"
                data-id-product-attribute="0"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/home-accessories/6-mug-the-best-is-yet-to-come.html" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/6-home_default/mug-the-best-is-yet-to-come.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Mug The best is yet to come"
                        data-full-size-image-url="http://localhost/Prestashop/6-thickbox_default/mug-the-best-is-yet-to-come.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="6" data-id-product-attribute="0"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="6"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="7"
                data-id-product-attribute="0"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/home-accessories/7-mug-the-adventure-begins.html" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/7-home_default/mug-the-adventure-begins.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Mug The adventure begins"
                        data-full-size-image-url="http://localhost/Prestashop/7-thickbox_default/mug-the-adventure-begins.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="7" data-id-product-attribute="0"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="7"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

          
    <div class="js-product-miniature-wrapper         col-6 col-md-4 col-lg-3 col-xl-15     ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-1 js-product-miniature"
                data-id-product="8"
                data-id-product-attribute="0"
                itemscope itemtype="http://schema.org/Product"

        >

                    
    <div class="thumbnail-container">
        <a href="http://localhost/Prestashop/ru/home/8-mug-today-is-a-good-day.html" class="thumbnail product-thumbnail">

                            <img
                                                                                    data-src="http://localhost/Prestashop/8-home_default/mug-today-is-a-good-day.jpg"
                                src="/Prestashop/themes/warehouse/assets/img/blank.png"
                                                                            alt="Mug Today is a good day"
                        data-full-size-image-url="http://localhost/Prestashop/8-thickbox_default/mug-today-is-a-good-day.jpg"
                        width="236"
                        height="305"
                        class="img-fluid js-lazy-product-image product-thumbnail-first"
                >
            
                                                                                                                                </a>

        
            <ul class="product-flags">
                                    <li class="product-flag new">Новое
                                            </li>
                            </ul>
        

                
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    
<!-- begin module:iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="8" data-id-product-attribute="0"
   data-url="//localhost/Prestashop/ru/module/iqitwishlist/actions" data-toggle="tooltip" title="Add to wishlist">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitwishlist/views/templates/hook/product-miniature.tpl -->

<!-- begin module:iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="8"
   data-url="//localhost/Prestashop/ru/module/iqitcompare/actions" data-toggle="tooltip" title="Compare">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/product-miniature.tpl -->
<!-- end module:iqitcompare/views/templates/hook/product-miniature.tpl -->

                    
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="Быстрый просмотр">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        
                
            <div class="product-availability">
                                <span class="badge product-available mt-2">Available</span>
                                </div>
        
        
    </div>


        
        
        
        </article>
    </div>

      </div>
  <a href="http://localhost/Prestashop/ru/2-home">Все товары</a>
</section>
<!-- end C:\xampp\htdocs\Prestashop/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}
