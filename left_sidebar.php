<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $this->inc('elements/header.php')
?>

      <div id="contentWrapper">
        <div id="content" class="contentRight">
          <?php
            $a = new Area('Main');
            $a->display($c);
          ?>
        </div>
      </div>

      <div id="sidebarWrapper" class="sidebarWrapperLeft">
        <?php
          $a = new Area('Sidebar');
          $a->display($c);
        ?>
      </div>

<?php
  $this->inc('elements/footer.php')
?>