<?php //netteCache[01]000563a:2:{s:4:"time";s:21:"0.91779000 1477395151";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:78:"/Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/parts/none.php";i:2;i:1475336605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/asl/wp-content/themes/businessfinder2/parts/none.php

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, 'ruumky4g16')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title">
<?php if ($wp->canCurrentUser('edit_posts') and $message == 'empty-site') { ?>
				<?php echo NTemplateHelpers::escapeHtml(__('No posts to display', 'wplatte'), ENT_NOQUOTES) ?>

<?php } else { ?>
				<?php echo NTemplateHelpers::escapeHtml(__('Nothing Found', 'wplatte'), ENT_NOQUOTES) ?>

<?php } ?>
			</h1>
		</header>

		<div class="entry-content">
			<p>
<?php if ($wp->canCurrentUser('edit_posts') and $message == 'empty-site') { ?>

				<?php echo $template->printf(__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'wplatte'), $wp->adminUrl('post-new.php')) ?>


<?php } elseif ($message == 'nothing-found') { ?>

				<?php echo NTemplateHelpers::escapeHtml(__('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'wplatte'), ENT_NOQUOTES) ?>


<?php } elseif ($message == 'no-posts' or (!$wp->canCurrentUser('edit_posts') and $message == 'empty-site')) { ?>

				<?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found. Perhaps searching will help find a related post.', 'wplatte'), ENT_NOQUOTES) ?>


<?php } ?>
			</p>

<?php get_search_form() ?>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
