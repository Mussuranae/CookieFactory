<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
      $cookie=$_SESSION['cart'];
      $nbcookie=array_count_values($cookie);
      $idcookie=[
          '46'=> 'Pecan nuts',
          '36'=> 'Chocolate chips',
          '58'=> 'Chocolate cookie',
          '32'=> 'M&M\'s© cookies',
      ];
      foreach ($nbcookie as $name => $quantity) {
          echo 'Cookies sélectionnés : ' . $idcookie[$name] . "<br>" . 'Quantité : ' . $quantity . "<br>";
      }
      ?>
        <br>
        <br>
        <a type="button" href="index.php">Retour</a>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
