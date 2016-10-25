<?php //netteCache[01]000559a:2:{s:4:"time";s:21:"0.73660400 1477395151";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:74:"/Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/search.php";i:2;i:1475336605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/search.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '8jaano267p')
;
// prolog NUIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8047a26dbb_content')) { function _lb8047a26dbb_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;global $wp_query ;$query = $wp_query ?>


<?php if ($query->have_posts()) { NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("portal/parts/search-filters", ""), array('current' => $query->post_count, 'max' => $query->found_posts) + get_defined_vars(), $_l->templates['8jaano267p'])->render() ?>

<?php if (defined("AIT_ADVANCED_FILTERS_ENABLED")) { NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("portal/parts/advanced-filters", ""), array('query' => $query) + get_defined_vars(), $_l->templates['8jaano267p'])->render() ;} ?>

<?php if (isset($_REQUEST['a']) && $_REQUEST['a'] != "") { $isAdvanced = true ;$layout = $options->theme->items->searchLayout ;$numOfColumns = ($layout == 'box' ? '4' : '1') ?>

		<div class="items-container elm-item-organizer<?php if ($layout == 'box') { ?>
 organizer-alt<?php } ?>">
			<div class="elm-item-organizer-container carousel-disabled layout-<?php echo NTemplateHelpers::escapeHtml($layout, ENT_COMPAT) ?>
 column-<?php echo NTemplateHelpers::escapeHtml($numOfColumns, ENT_COMPAT) ?>">
<?php foreach ($iterator = new WpLatteLoopIterator($query) as $post): NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/post-content", ""), array() + get_defined_vars(), $_l->templates['8jaano267p'])->render() ;endforeach; wp_reset_postdata() ?>
			</div>
		</div>
<?php } else { ?>
		<div class="items-container">
<?php foreach ($iterator = new WpLatteLoopIterator($query) as $post): NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/post-content", ""), array() + get_defined_vars(), $_l->templates['8jaano267p'])->render() ;endforeach; wp_reset_postdata() ?>
		</div>
<?php } ?>

<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/pagination", ""), array('location' => 'pagination-below', 'max' => $query->max_num_pages) + get_defined_vars(), $_l->templates['8jaano267p'])->render() ?>

<?php } else { NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/none", ""), array('message' => 'nothing-found') + get_defined_vars(), $_l->templates['8jaano267p'])->render() ;} ?>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof NPresenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 