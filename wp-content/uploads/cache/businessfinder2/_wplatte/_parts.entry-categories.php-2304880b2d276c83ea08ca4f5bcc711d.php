<?php //netteCache[01]000581a:2:{s:4:"time";s:21:"0.79003200 1477405458";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:96:"/Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/parts/entry-categories.php";i:2;i:1475336605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/parts/entry-categories.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, 'p4hh67xmu9')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$separator = isset($separator) ? $separator : ' ' ?>

<span class="categories">
<?php if (isset($taxonomy)) { ?>
	<span class="cat-links"><?php echo $post->categoryList($separator, '', $taxonomy) ?></span>
<?php } else { ?>
	<span class="cat-links"><?php echo $post->categoryList($separator) ?></span>
<?php } ?>
</span>
