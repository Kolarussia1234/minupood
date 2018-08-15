<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:55:26
  from 'C:\xampp\htdocs\Prestashop\modules\iqitmegamenu\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71639e23b394_71014677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0826e7f1dd8866e540aca7dc1c4af1450b3f534' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitmegamenu\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1534151625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./column_content.tpl' => 1,
    'file:./submenu_content.tpl' => 1,
  ),
),false)) {
function content_5b71639e23b394_71014677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>







<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3335274765b71639e18b662_52499361', "script");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6539916015b71639e1951c6_01113843', "defaultForm");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7017796315b71639e1a3b83_18356230', "fieldset");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15937351965b71639e1aeee5_01262831', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6313463055b71639e1b6a70_23065661', "input_row");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12811957335b71639e1d74e0_59239376', "input");
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_3335274765b71639e18b662_52499361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3335274765b71639e18b662_52499361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


$(document).ready(function() {


 $('.iframe-upload').fancybox({
			'width'		: 900,
			'height'	: 600,
			'type'		: 'iframe',
      		'autoScale' : false,
      		'autoDimensions': false,
      		 'fitToView' : false,
  			 'autoSize' : false,
  			 onUpdate : function(){ $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));},
  			 afterShow: function(){
			 	 $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
			},
			 beforeClose: function() {
				var $input = $('#' + $(this.element).data("input-name"));
				var val = $input.val();

				$input.val(val.replace(iqitBaseUrl, ""));
			}
  		  });

 $('.iframe-column-upload').fancybox({
			'width'		: 900,
			'height'	: 600,
			'type'		: 'iframe',
      		'autoScale' : false,
      		'autoDimensions': false,
      		 'fitToView' : false,
  			 'autoSize' : false,
  			 onUpdate : function(){
  			 	 $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
			 	},
  			 afterShow: function(){
			 	 $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
			},
			beforeClose: function() {
				var $input = $('#' + $(this.element).data("input-name"));
				var val = $input.val();

				$input.val(val.replace(iqitBaseUrl, ""));
			}
  		  });

var control = $("#url_type");

if (control.val() == 1)
{
$("#custom-url-wrapper").removeClass('hidden');
$("#system-url-wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#custom-url-wrapper").addClass('hidden');
$("#system-url-wrapper").removeClass('hidden');
}

if (control.val() == 2) {
$("#custom-url-wrapper").addClass('hidden');
$("#system-url-wrapper").addClass('hidden');
}



$("#url_type").change(function() {
	var control = $(this);

if (control.val() == 1)
{
$("#custom-url-wrapper").removeClass('hidden');
$("#system-url-wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#custom-url-wrapper").addClass('hidden');
$("#system-url-wrapper").removeClass('hidden');
}

if (control.val() == 2) {
$("#custom-url-wrapper").addClass('hidden');
$("#system-url-wrapper").addClass('hidden');
}

});


var control = $("#icon_type");

if (control.val() == 1)
{
$("#icon-class-wrapper").removeClass('hidden');
$("#image-icon-wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#icon-class-wrapper").addClass('hidden');
$("#image-icon-wrapper").removeClass('hidden');
}



$("#icon_type").change(function() {
	var control = $(this);

if (control.val() == 1)
{
$("#icon-class-wrapper").removeClass('hidden');
$("#image-icon-wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#icon-class-wrapper").addClass('hidden');
$("#image-icon-wrapper").removeClass('hidden');
}

});


var control1 = $("#submenu_type");

if (control1.val() == 2)
{
$("#grid-submenu").removeClass('hidden');
$("#cssstyle-submenu").removeClass('hidden');


}

if (control1.val() == 1)
{
$("#tabs-submenu").removeClass('hidden');
$("#cssstyle-submenu").removeClass('hidden');
}

$("#submenu_type").change(function() {
	var control1 = $(this);
if (control1.val() == 2)
{
$("#grid-submenu").removeClass('hidden');
$("#cssstyle-submenu").removeClass('hidden');
$("#tabs-submenu").addClass('hidden');
}

if (control1.val() == 1)
{
$("#tabs-submenu").removeClass('hidden');
$("#grid-submenu").addClass('hidden');
$("#cssstyle-submenu").removeClass('hidden');
}

if (control1.val() == 0) {
$("#tabs-submenu").addClass('hidden');
$("#grid-submenu").addClass('hidden');
$("#cssstyle-submenu").addClass('hidden');
}

});


		$('.list-wrapper-horizontal').show();
		$('#options_tab a').click(function (e) {
		e.preventDefault();
		$('.list-wrapper').hide();
		if($(this).attr('href')=='#main_tab')
		$('.list-wrapper-horizontal').show();
		if($(this).attr('href')=='#vertical_tab')
		$('.list-wrapper-vertical').show();
		if($(this).attr('href')=='#submenutabs_tab')
		$('.list-wrapper-submenutabs').show();
		if($(this).attr('href')=='#customhtml_tab')
		$('.list-wrapper-html').show();



		$(this).tab('show');
	});

$('#menuOrderUp').click(function(e){
	e.preventDefault();
    move(true);
});
$('#menuOrderDown').click(function(e){
    e.preventDefault();
    move();
});
$("#items").closest('form').on('submit', function(e) {
	$("#items option").prop('selected', true);
});
$("#addItem").click(add);
$("#availableItems").dblclick(add);
$("#removeItem").click(remove);
$("#items").dblclick(remove);
function add()
{
	$("#availableItems option:selected").each(function(i){
		var val = $(this).val();
		var text = $(this).text();
		text = text.replace(/(^\s*)|(\s*$)/gi,"");
		if (val == "PRODUCT")
		{
			val = prompt('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indicate the ID number for the product','mod'=>'iqitmegamenu','js'=>1),$_smarty_tpl ) );?>
');
			if (val == null || val == "" || isNaN(val))
				return;
			text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product ID #','mod'=>'iqitmegamenu','js'=>1),$_smarty_tpl ) );?>
'+val;
			val = "PRD"+val;
		}
		$("#items").append('<option value="'+val+'" selected="selected">'+text+'</option>');
	});
	serialize();
	return false;
}
function remove()
{
	$("#items option:selected").each(function(i){
		$(this).remove();
	});
	serialize();
	return false;
}
function serialize()
{
	var options = "";
	$("#items option").each(function(i){
		options += $(this).val()+",";
	});
	$("#itemsInput").val(options.substr(0, options.length - 1));
}
function move(up)
{
        var tomove = $('#items option:selected');
        if (tomove.length >1)
        {
                alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select just one item','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
');
                return false;
        }
        if (up)
                tomove.prev().insertAfter(tomove);
        else
                tomove.next().insertBefore(tomove);
        serialize();
        return false;
}


});



<?php
}
}
/* {/block "script"} */
/* {block "defaultForm"} */
class Block_6539916015b71639e1951c6_01113843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_6539916015b71639e1951c6_01113843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
<div class="col-lg-2">
<div id="options_tab" class="">
	<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'] != 'save_tab') {?><li <?php if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'] == 'main_tab') {?>class="active"<?php }?>><a class="list-group-item" href="#<?php echo $_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['form']['legend']['title'];?>
</a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<ul>
</div>
</div>
<div id="list-container" class="col-lg-10 tab-content">
<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

</div>
</div>
<?php
}
}
/* {/block "defaultForm"} */
/* {block "fieldset"} */
class Block_7017796315b71639e1a3b83_18356230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fieldset' => 
  array (
    0 => 'Block_7017796315b71639e1a3b83_18356230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'] != 'save_tab') {?>

<div class="tab-pane-wrapper <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'] == 'main_tab') {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'];?>
">
	 <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['assigned_list'])) {?><div class="tab-pane clearfix"><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['assigned_list'];?>
</div><?php }?>
<div class="tab-pane">
<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'] != 'save_tab') {?></div></div><?php }
}
}
/* {/block "fieldset"} */
/* {block "label"} */
class Block_15937351965b71639e1aeee5_01262831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_15937351965b71639e1aeee5_01262831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (($_smarty_tpl->tpl_vars['input']->value['type'] == 'grid_creator') || ($_smarty_tpl->tpl_vars['input']->value['type'] == 'ietool')) {
} else {
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php }
}
}
/* {/block "label"} */
/* {block "input_row"} */
class Block_6313463055b71639e1b6a70_23065661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_6313463055b71639e1b6a70_23065661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!isset($_smarty_tpl->tpl_vars['input']->value['iqitTheme']) || !$_smarty_tpl->tpl_vars['input']->value['iqitTheme']) {
if (isset($_smarty_tpl->tpl_vars['input']->value['hide']) && $_smarty_tpl->tpl_vars['input']->value['hide']) {?><div style="display: none !important;"><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'])) {?><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['wrapper_hidden']) && $_smarty_tpl->tpl_vars['input']->value['wrapper_hidden']) {?> class="hidden clearfix"<?php }?>><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['accordion_wrapper'])) {?><a class="btn btn-primary menu-collapse-expand" data-toggle="collapse" href="#<?php echo $_smarty_tpl->tpl_vars['input']->value['accordion_wrapper'];?>
" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['input']->value['accordion_wrapper'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand submenu optional design options','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

 <i class="icon-angle-double-down"></i> </a><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['accordion_wrapper'];?>
" class="collapse collapse-menu-expand"><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['upper_separator']) && $_smarty_tpl->tpl_vars['input']->value['upper_separator']) {?><hr><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['row_title'])) {?>
<div class="col-lg-9 col-lg-offset-3 row-title"><?php echo $_smarty_tpl->tpl_vars['input']->value['row_title'];?>
</div>
<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php if (isset($_smarty_tpl->tpl_vars['input']->value['separator']) && $_smarty_tpl->tpl_vars['input']->value['separator']) {?><hr><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['suffix_a_wrapper']) && $_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']) {?></div><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']) && $_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']) {?></div><?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['hide']) && $_smarty_tpl->tpl_vars['input']->value['hide']) {?></div><?php }
}
}
}
/* {/block "input_row"} */
/* {block "input"} */
class Block_12811957335b71639e1d74e0_59239376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_12811957335b71639e1d74e0_59239376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'link_choice') {?>
	    <div class="row">
	    	<div class="col-lg-1">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change position','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
                <a href="#" id="menuOrderUp" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-up"></i></a><br/>
                <a href="#" id="menuOrderDown" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-down"></i></a><br/>
	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected items','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
	    		 <?php echo $_smarty_tpl->tpl_vars['selected_links']->value;?>

	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available items','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
	    		 <?php echo $_smarty_tpl->tpl_vars['choices']->value;?>

	    	</div>

	    </div>
	    <br/>
	    <div class="row">
	    	<div class="col-lg-1"></div>
	    	<div class="col-lg-4"><a href="#" id="removeItem" class="btn btn-default"><i class="icon-arrow-right"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</a></div>
	    	<div class="col-lg-4"><a href="#" id="addItem" class="btn btn-default"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</a></div>
	    </div>
	 <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tabs_choice') {?>
	    <div class="row">
	    	<div class="col-lg-1">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change position','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
                <a href="#" id="menuOrderUp" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-up"></i></a><br/>
                <a href="#" id="menuOrderDown" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-down"></i></a><br/>
	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected tabs','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
	    		 <?php echo $_smarty_tpl->tpl_vars['selected_tabs']->value;?>

	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available predefined tabs','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</h4>
	    		 <?php echo $_smarty_tpl->tpl_vars['choices_tabs']->value;?>

	    	</div>

	    </div>
	    <br/>
	    <div class="row">
	    	<div class="col-lg-1"></div>
	    	<div class="col-lg-4"><a href="#" id="removeItem" class="btn btn-default"><i class="icon-arrow-right"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</a></div>
	    	<div class="col-lg-4"><a href="#" id="addItem" class="btn btn-default"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</a></div>
	    </div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'grid_creator') {?>
	  <input type="hidden" name="submenu-elements" id="submenu-elements" value="<?php echo $_smarty_tpl->tpl_vars['submenu_content']->value;?>
">





	<div id="column-content-sample" class="hidden">
		<?php $_smarty_tpl->_subTemplateRender("file:./column_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<div class="row grid_creator">
		<div class="col-xs-12 first-rows-wrapper" data-element-id="0">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submenu_content_format']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
				<?php $_smarty_tpl->_subTemplateRender("file:./submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0, true);
?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</div>
		<div id="buttons-sample">
				<div class="action-buttons-container">
					<button type="button" class="btn btn-default  add-row-action" ><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Row','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
					<button type="button" class="btn btn-default  add-column-action" ><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
					<button type="button" class="btn btn-default duplicate-element-action" ><i class="icon icon-files-o"></i> </button>
					<button type="button" class="btn btn-danger remove-element-action" ><i class="icon-trash"></i> </button>
				</div>
				<div class="dragger-handle btn btn-danger"><i class="icon-arrows "></i></a></div>
			</div>
	</div>


	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image_upload') {?>
	<p> <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"> </p>
	 <a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="btn btn-default iframe-upload"  data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 <i class="icon-angle-right"></i></a>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'ietool') {?>

	<div class="row-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tabs import/export','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
	<div style="display:inline-block;"><input type="file" id="uploadTabs" name="uploadTabs" /></div>

	<button type="submit" class="btn btn-default btn-lg" name="importTabs" ><span class="icon icon-upload"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import tabs','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </button>
	<button type="submit" class="btn btn-default btn-lg" name="exportTabs" ><span class="icon icon-share"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export tabs','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </button>
		<hr>
	<div class="alert alert-info">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you using multistore: It will import or export design or tabs of your currently selected store only.','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

	</div>


	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_select') {?>
	 <?php echo $_smarty_tpl->tpl_vars['input']->value['choices'];?>


	<?php echo '<script'; ?>
>
	$("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
 option").filter(function() {

    return $(this).val() == '<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
';
	}).prop('selected', true);
	<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'icon_selector') {?>
	<div class="input-group col-lg-3">
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="icp icp-auto" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
">
            <span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select icon','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</span>
    </div>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'border_generator') {?>

	<div class="col-xs-2">
	<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type">
		<option value="5" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
		<option value="4" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
		<option value="3" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
		<option value="2" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
		<option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
	</select>
	</div>
	<div class="col-xs-2">
	<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width">
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
  				  <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 px</option>
		<?php }
}
?>
	</select>
	</div>
	<div class="col-xs-2">
	<div class="row">
	<div class="input-group">
	<input type="color" data-hex="true" class="color mColorPickerInput"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'];?>
" />
	</div>	</div>	</div>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_info') {?>
	  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entire design configuration you can find in iqitthemeeditor > menu section','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
