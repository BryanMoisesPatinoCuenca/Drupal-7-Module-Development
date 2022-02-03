<?php

 /**
  * @file
  * myblock.module
  */

  /**
  * Implements hook_permission().
  */
function myblock_permission() {
  return array(
    'acces mypage' => array(
      'title' => t('Access My Page'),
      'description' => t('Access My Page on my site.'),
      )
  );
  return $items;
}
  /**
  * Implements hook_menu().
  */
  function myblock_menu() {
    $items['mypage'] = array(
      'title' => 'My  Page',
      'type' => MENU_NORMAL_ITEM,
      'page callback' => 'myblock_mypage' ,
      'access arguments' => array('access content')
  );
  return $items;
}
 /**
  * My Callback function
  */
 function myblock_mypage() {
  return "<strong>This is a test<strong>";
}

  /**
  * Implements hook_block_info().
  */
function myblock_block_info(){
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