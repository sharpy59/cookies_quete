<?php
session_start();
if (!$_SESSION){
    header('location: login.php');
}
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
      if (isset($_COOKIE['name46'])){?>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-lg-offset-2">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <p>Quantité:</p>
        </figcaption>
      </figure>
    </div>
      <?php  }


      if (isset($_COOKIE['name36'])){?>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <p>Quantité:</p>
        </figcaption>
      </figure>
    </div>
      <?php  }


      if (isset($_COOKIE['name58'])){?>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <p>Quantité:</p>
        </figcaption>
      </figure>
    </div>
      <?php  }


      if (isset($_COOKIE['name32'])){?>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's cookies</h3>
          <p>Cooked by Penny !</p>
            <p>Quantité:</p>
        </figcaption>
      </figure>
    </div>
    <?php  } ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
