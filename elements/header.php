<!DOCTYPE html> <!-- HTML 5 Woo! -->

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <?php Loader::element('header_required'); ?>
  
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?= $this->getStyleSheet('styles.css') ?>" />
 
</head>
<body>
  <div class="padWrap">
    <div id="backsheet1" class="wrapper"></div>
  </div>
  <div class="padWrap">
    <div id="backsheet2" class="wrapper"></div>
  </div>
  <div class="padWrap">
    <div id="realsheet" class="wrapper">
      <div id="header">
          <h1 id="siteTitle">
            <a href="<?php echo DIR_REL?>/"><?php 
              $block = Block::getByName('My_Site_Name');  
              if( $block && $block->bID ) $block->display();   
              else echo SITE;
            ?></a>
          </h1>

          <hr/>
          <div id="taglineDate">
            <?php
              $a = new Area('Header Left');
              $a->display($c);
            ?>
          </div>
          <div id="taglinePrice">
            <?php
              $a = new Area('Header Right');
              $a->display($c);
            ?>
          </div>
          <div id="tagline">
            <?php
              $a = new Area('Header');
              $a->display($c);
            ?>
          </div>
          <hr/>
      </div>