<?php

/**
  * @file
  * myblock.module
  */
 /**
  * Implements hook_block_info().
  */
function myblock_block_info()
{
  $blocks['myblock'] = array(
    'info' => t('My Custom Block'),
  );

  return $blocks;
}

/**
 *Implements hook_block_view().
 */
function myblock_block_view($delta = '') {
  $block = array();
  
  switch ($delta) {
    case 'myblock':
      $block['subject'] = t('Syndicate');
      $block['content'] = "<strong>Hello</strong> This is my awesome custom block.";
      break;
  }
  return $block;
}