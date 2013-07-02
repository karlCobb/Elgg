<?php
/**
 * Display an upload for an admin to view
 */

/** @var CKEditorUpload */
$entity = $vars['entity'];
$owner = $entity->getOwnerEntity();

$img = elgg_view('output/img', array(
	'src' => $entity->getURL(),
	'style' => 'width: 100%;',
	'class' => 'elgg-photo',
));

$owner_name = htmlspecialchars($owner->name, ENT_QUOTES, 'UTF-8', false);
$owner_link = elgg_view('output/url', array(
	'text' => elgg_echo('ckeditor:upload:owner', array($owner_name)),
	'href' => $owner->getURL(),
));

echo elgg_view_module('ckeditor', $owner_link, $img);

