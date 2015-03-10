<?php

// Plugin definition
$plugin = array(
  'title' => t('Bootstrap 3 Colunas'),
  'category' => t('Columns: 3'),
  'icon' => 'bootstrap3.png',
  'theme' => 'bootstrap3',
  'css' => 'bootstrap3.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'center' => t('Center'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
