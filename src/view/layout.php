<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Flancer</title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <header><h1>Flancer logo komt hier</h1></header>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
