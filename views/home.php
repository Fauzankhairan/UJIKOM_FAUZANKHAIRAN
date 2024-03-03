
  <?php
  include_once 'extends/topbar.php';
  include_once '../controllers/C_produk.php';

  $produk = new C_produk();
  ?>


  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="../assets/images/banner-3.png" alt="" class="banner-img">


          </div>

          <div class="slider-item">

            <img src="../assets/images/banner-1.png" alt="" class="banner-img">


          </div>

          <div class="slider-item">

            <img src="../assets/images/banner-2.png" alt="" class="banner-img">


          </div>

        </div>

      </div>

    </div>










    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">

        <div class="product-box">


          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">
            <?php
            $nomor = 1;
            foreach ($produk->tampil() as $b){
            ?>
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="../assets/images/thumbnail/<?= $b->thumbnail?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="../assets/images/thumbnail/<?= $b->thumbnail?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                </div>
                <div class="showcase-content">
                  <a href="single_product.php?ProdukID=<?= $b->ProdukID?>">
                    <h3 class="showcase-title"><?= $b->NamaProduk?></h3>
                  </a>
                  <div class="price-box">
                    <p class="price"><?= $b->harga?> Rupiah</p>

                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

          </div>

        </div>

      </div>

    </div>



  </main>





  <!--
    - FOOTER
  -->

  
  <?php
  include_once 'extends/footer.php'
  ?>