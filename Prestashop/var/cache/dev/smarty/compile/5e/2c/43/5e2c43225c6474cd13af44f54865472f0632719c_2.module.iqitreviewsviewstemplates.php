<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:53
  from 'module:iqitreviewsviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715351a642f9_69599408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2c43225c6474cd13af44f54865472f0632719c' => 
    array (
      0 => 'module:iqitreviewsviewstemplates',
      1 => 1534151626,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715351a642f9_69599408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?><!-- begin C:\xampp\htdocs\Prestashop/modules/iqitreviews/views/templates/hook/product-reviews.tpl -->
<div id="iqit-reviews">

    <div id="iqit-reviews-top">
        <div class="row justify-content-between align-items-center">

            <div class="col mb-3">
                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                <div id="iqitreviews-snippet">


                <?php echo smarty_function_math(array('equation'=>"floor(x)",'x'=>$_smarty_tpl->tpl_vars['snippetData']->value['avarageRating'],'assign'=>'stars'),$_smarty_tpl);?>

                <span class="iqitreviews-rating">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if (($_smarty_tpl->tpl_vars['stars']->value-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) >= 1) {?>
                    <i class="fa fa-star iqit-review-star"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['snippetData']->value['avarageRating']-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>
                    <i class="fa fa-star-half-o iqit-review-star"></i>
                <?php } else { ?>
                    <i class="fa fa-star-o iqit-review-star"></i>
                <?php }?>
            <?php
}
}
?>
            </span>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'iqitreviews'),$_smarty_tpl ) );?>

            </div>
            <?php } else { ?>
            <div id="iqitreviews-snippet"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No reviews','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['allowGuests']->value || $_smarty_tpl->tpl_vars['isLogged']->value) {?>
            <div class="col col-auto mb-3">
                <button type="button" class="btn btn-primary " data-toggle="modal"
                        data-target="#iqit-reviews-modal">
                    <i class="fa fa-pencil-square-o"
                       aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write  review','mod'=>'iqitreviews'),$_smarty_tpl ) );?>

                </button>
            </div>
        <?php }?>

    </div> <!-- / .row -->
</div><!-- / #iqit-reviews-top -->


<div class="col-xs-12 alert alert-success hidden-xs-up"
     id="iqitreviews-productreview-form-success-alert">
</div>


<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
    <div id="iqitreviews-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
            <div class="iqitreviews-review" itemprop="review" itemscope itemtype="http://schema.org/Review">
                <hr />

                <div class="title" itemprop="name"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></div>

                <div class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">

                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['review']->value['rating'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                            <i class="fa fa-star-o iqit-review-star"></i>
                        <?php } else { ?>
                            <i class="fa fa-star iqit-review-star"></i>
                        <?php }?>
                    <?php
}
}
?>
                    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['rating'], ENT_QUOTES, 'UTF-8');?>
"/>
                    <meta itemprop="bestRating" content="5"/>
                    <meta itemprop="worstRating" content="1"/>
                </div>

                <div class="comment" itemprop="reviewBody"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</div>

                <div class="author">
                   <span itemprop="author" itemscope itemtype="http://schema.org/Person"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
 <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
</span></span>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
 <span itemprop="datePublished"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['review']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</span>
                </div>

            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['allowGuests']->value || $_smarty_tpl->tpl_vars['isLogged']->value) {?>
    <div class="modal fade" id="iqit-reviews-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitreviews','controller'=>'actions','params'=>array('process'=>'addProductReview','ajax'=>1)),$_smarty_tpl ) );?>
"
                      method="post" id="iqitreviews-productreview-form">
                    <div class="modal-header">
                        <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-xs-12 alert alert-success alert-warning hidden-xs-up"
                             id="iqitreviews-productreview-form-alert">
                        </div>


                        <div class="form-fields" id="iqitreviews-productreview-fields">

                            <input type="hidden" name="iqitreviews_id_product" id="iqitreviews_id_product"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idProduct']->value, ENT_QUOTES, 'UTF-8');?>
"/>

                            <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value) {?>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="iqitreviews_customer_name"
                                               id="iqitreviews_customer_name" value=""
                                               placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'John Doe','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
"/>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="iqitreviews_title"
                                           id="iqitreviews_title" value=""
                                           placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ex. Very good','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                    <input class="rating " data-max="5" data-min="1" data-empty-value="0"
                                           value="4"
                                           id="iqitreviews_rating" name="iqitreviews_rating" type="number"
                                           data-icon-lib="fa"
                                           data-active-icon="fa-star iqit-review-star" data-inactive-icon="fa-star-o iqit-review-star"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                         <textarea class="form-control" rows="3" name="iqitreviews_comment"
                                                   id="iqitreviews_comment"
                                                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your opinion about product','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
"></textarea>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" name="iqitreviews_submit"
                               id="iqitreviews_submit"
                               value=" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit review','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }?><!-- end C:\xampp\htdocs\Prestashop/modules/iqitreviews/views/templates/hook/product-reviews.tpl --><?php }
}
