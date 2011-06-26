<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $this->inc('elements/header.php')
?>

<div id="contentWrapper">
  <div id="content">
    <?php
      print $innerContent;
    ?>
  </div>
</div>

<?php
  $this->inc('elements/footer.php')
?>