<?php //netteCache[01]000589a:2:{s:4:"time";s:21:"0.41438500 1477405458";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:103:"/Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/portal/parts/header-resources.php";i:2;i:1475336605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/portal/parts/header-resources.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '8q8tj33qnq')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$resources = get_posts(array('post_type' => 'ait-item', 'category' => 0, 'posts_per_page' => -1)) ?>

<?php if ($options->theme->header->displayHeaderResources) { ?>
<div class="header-resources">

	<span class="resources-data">
		<span class="resources-count"><?php echo NTemplateHelpers::escapeHtml(count($resources), ENT_NOQUOTES) ?></span>
		<span class="resources-text"><?php echo NTemplateHelpers::escapeHtml(__('Resources', 'wplatte'), ENT_NOQUOTES) ?></span>
	</span>
<?php if (is_user_logged_in()) { ?>
	<a href="<?php echo admin_url('post-new.php?post_type=ait-item') ?>" class="resources-button ait-sc-button"><?php echo NTemplateHelpers::escapeHtml(__('Add', 'wplatte'), ENT_NOQUOTES) ?></a>
<?php } else { if (function_exists('pll_get_post')) { $link = get_permalink( pll_get_post( $options->theme->header->headerResourcesButtonLink ) ) ;} else { $link = get_permalink( $options->theme->header->headerResourcesButtonLink ) ;} ?>
	<a href="<?php echo $link ?>" class="resources-button ait-sc-button"><?php echo NTemplateHelpers::escapeHtml(__('Add', 'wplatte'), ENT_NOQUOTES) ?></a>
<?php } ?>

</div>
<?php } 