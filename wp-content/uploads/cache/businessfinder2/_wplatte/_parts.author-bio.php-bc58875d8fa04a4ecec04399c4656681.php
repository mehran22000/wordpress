<?php //netteCache[01]000569a:2:{s:4:"time";s:21:"0.75133600 1477224191";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:84:"/Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/parts/author-bio.php";i:2;i:1475336605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/parts/author-bio.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '2ynzko3q07')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($post)) { ?> <?php $author = $post->author ?> <?php } ?>


<div class="author-info">
	<div class="author-avatar">
		<?php echo $author->avatar(80) ?>

	</div><!-- #author-avatar -->
	<div class="author-description">
		<h2><?php echo NTemplateHelpers::escapeHtml($template->printf(__('About %s', 'wplatte'), $author), ENT_NOQUOTES) ?></h2>
		<div>
			<?php echo $author->bio ?>

			<div class="author-link-wrap">
				<a href="<?php echo NTemplateHelpers::escapeHtml($author->postsUrl, ENT_COMPAT) ?>" rel="author" class="author-link">
					<?php echo $template->printf(__('View all posts by %s <span class="meta-nav">&rarr;</span>', 'wplatte'), $author) ?>

				</a>
			</div>
		</div>
	</div><!-- /.author-description -->
</div><!-- /.author-info -->