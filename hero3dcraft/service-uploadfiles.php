<?php include 'include/header.php' ?>

<main>

   <!-- Breadcrumb area start -->
   <div class="breadcrumb__area theme-bg-1 p-relative pt-160 pb-160">
      <div class="breadcrumb__thumb" data-background="assets/imgs/resources/page-title-bg-1.png"></div>
      <div class="breadcrumb__thumb_2" data-background="assets/imgs/resources/page-title-bg-2.png"></div>
      <div class="small-container">
         <div class="row justify-content-center">
            <div class="col-xxl-12">
               <div class="breadcrumb__wrapper p-relative">
                  <h2 class="breadcrumb__title">3D Baskı</h2>
                  <div class="breadcrumb__menu">
                     <nav>
                        <ul>
                           <li><span><a href="index.php">Anasayfa</a></span></li>
                           <li><span>3D Baskı</span></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Breadcrumb area end -->

   <section class="service-details-page section-space">
      <div class="small-container">
         <div class="row">

            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="service-details-page-content">
                  <!-- Form start -->
                  <div class="service-widget-1 mb-30 form-control">
                     <h5>Tasarım Dosyalarınızı Yükleyin</h5>
                     <form action="service-3dprinting.php" method="post" enctype="multipart/form-data" style="font-size: 20px;">
                        <input type="file" id="file" name="files[]" multiple style="font-size: 20px;"><br><br>
                        <input type="submit" class="btn btn-primary" value="Yükle" style="font-size: 20px;">
                     </form>
                  </div>
                  <!-- Form end -->

               </div>
            </div>

         </div>
      </div>
   </section>

</main>

<?php include 'include/footer.php' ?>
