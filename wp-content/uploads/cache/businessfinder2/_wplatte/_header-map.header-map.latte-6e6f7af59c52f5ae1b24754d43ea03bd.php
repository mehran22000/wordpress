<?php //netteCache[01]000602a:2:{s:4:"time";s:21:"0.55196700 1477405458";s:9:"callbacks";a:4:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:116:"/Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/ait-theme/elements/header-map/header-map.latte";i:2;i:1477396105;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:22:"released on 2014-08-28";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:15:"WPLATTE_VERSION";i:2;s:5:"2.9.0";}i:3;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:17:"AIT_THEME_VERSION";i:2;s:3:"1.9";}}}?><?php

// source file: /Applications/MAMP/htdocs/aslbekhar/wp-content/themes/businessfinder2/ait-theme/elements/header-map/header-map.latte

?><?php
// prolog NCoreMacros
list($_l, $_g) = NCoreMacros::initRuntime($template, '4mrg27709k')
;
// prolog NUIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return NUIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$elmAddress = $el->option('address') ?>

<?php $scrollWheel = $el->option('mousewheelZoom') ? "true" : "false" ;$autoZoomAndFit = $el->option('autoZoomAndFit') ? true : false ;$clustering = $el->option('clusterEnable') ? true : false ;$clustering = $el->option('clusterEnable') ? true : false ;$geoLocation = $el->option('geoLocationEnable') ? true : false ;$radius = false ;$streetview = false ?>

<?php $swheading = '' ;$swpitch = '' ;$swzoom = '' ?>

<?php $elmStreetview = false ;if ($elmAddress['streetview']) { $elmStreetview = true ;$address 	= array(
		'latitude'  => $elmAddress['latitude'],
		'longitude' => $elmAddress['longitude'],
	) ;$swheading = $elmAddress['swheading'] ;$swpitch   = $elmAddress['swpitch'] ;$swzoom    = $elmAddress['swzoom'] ;} else { $address = $el->option('address') ;} ?>

<?php $defaultPostType = 'item' ;if (defined('AIT_EVENTS_PRO_ENABLED')) { $defaultPostType = $el->option('defaultPostType') ;} ?>

<?php $markers = array() ?>

<?php $mapHeight = 'style="height: '. $el->option->height .'px;"' ?>



<?php if ($wp->isSearch && isset($_REQUEST['a'])) { if (!empty($_REQUEST['rad'])) { $geoLocation = true ;$radius = $_REQUEST['rad'] ;} ?>

<?php global $wp_query ?>

<?php if ($options->theme->items->sortingEnableMapPagination) { $markers = aitGetItemsMarkers($wp_query) ;} else { $itemsArgs = $wp_query->query_vars ;$itemsArgs['posts_per_page'] = 1 ;$itemsArgs['nopaging'] = true ;if (!empty($_REQUEST['s'])) { add_filter( 'posts_where', 'aitIncludeMetaInSearch' ) ;} $itemsQuery = new WpLatteWpQuery($itemsArgs) ;$markers = aitGetItemsMarkers($itemsQuery) ;} ?>

<?php if (empty($markers)) { $streetview = $elmStreetview ;} ?>

<?php } elseif ($wp->isTax('ait-items') or $wp->isTax('ait-locations')) { global $wp_query ;if ($options->theme->items->sortingEnableMapPagination) { $markers = aitGetItemsMarkers($wp_query) ;} else { $itemsArgs = $wp_query->query_vars ;$itemsArgs['posts_per_page'] = 1 ;$itemsArgs['nopaging'] = true ;$itemsQuery = new WpLatteWpQuery($itemsArgs) ;$markers = aitGetItemsMarkers($itemsQuery) ;} ?>

<?php } elseif ($wp->isSingular('ait-item')) { global $wp_query ;$autoZoomAndFit = true ;$itemAddress = $post->meta('item-data')->map ;if ($itemAddress['streetview']) { $streetview = true ;$address 	= array(
			'latitude'  => $itemAddress['latitude'],
			'longitude' => $itemAddress['longitude'],
		) ;$swheading = $itemAddress['swheading'] ;$swpitch   = $itemAddress['swpitch'] ;$swzoom    = $itemAddress['swzoom'] ;} ?>

<?php $markers = aitGetItemsMarkers($wp_query) ?>

<?php } elseif ($wp->isSingular('ait-event-pro')) { ?>

<?php } else { $itemsArgs = array(
		'post_type'      => 'ait-item',
		'posts_per_page' => -1,
		'lang'           => AitLangs::getCurrentLanguageCode(),
	) ;$itemsQuery = new WpLatteWpQuery($itemsArgs) ;$markers = aitGetItemsMarkers($itemsQuery) ;} ?>


<div id="<?php echo NTemplateHelpers::escapeHtml($htmlId, ENT_COMPAT) ?>" class="<?php echo NTemplateHelpers::escapeHtml($htmlClass, ENT_COMPAT) ?>
" <?php echo $mapHeight ?>>

<?php $mapParams = array(
			'name'				=> 'headerMap',
			'enableAutoFit'     => $autoZoomAndFit,
			'enableClustering'  => $clustering,
			'typeId'            => $el->option('type'),
			'clusterRadius'     => intval($el->option('clusterRadius')),
			'enableGeolocation' => $geoLocation,
			'radius'			=> $radius,
			'streetview'		=> $streetview,
			'address'			=> $address,
			'swheading'			=> $swheading,
			'swpitch'			=> $swpitch,
			'swzoom'			=> $swzoom,
			'externalInfoWindow'=> false
		) ;NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/google-map", ""), array('options' => aitGetMapOptions($el->options),
			'markers' => $markers,
			'params'  => $mapParams,
			'containerID' => $htmlId,) + get_defined_vars(), $_l->templates['4mrg27709k'])->render() ?>


<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("ait-theme/elements/header-map/javascript", ""), array() + get_defined_vars(), $_l->templates['4mrg27709k'])->render() ?>
</div>
