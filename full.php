<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $this->inc('elements/header.php')
?>

<div id="contentWrapper">
  <div id="content">
    <?php
      $a = new Area('Main');
      $a->display($c);
    ?>
  </div>
</div>

<?php
  $this->inc('elements/footer.php')
?>