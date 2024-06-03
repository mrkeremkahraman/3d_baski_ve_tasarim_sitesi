<?php include 'include/header.php'; ?>

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
                  <!-- Uploaded files details start -->
                  <div class="service-widget-1 mb-30 form-control">
                     <h5 class="mb-4">Yüklenen Dosyalar</h5>
                     <form id="upload-form" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="file" class="form-control mb-4" accept=".gltf, .glb, .obj, .stl">
                        <button type="submit" class="btn btn-primary">Dosyayı Yükle</button>
                     </form>
                     <div id="file-info" class="mt-4">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
                           $file = $_FILES['file'];
                           $fileName = $file['name'];
                           $fileSize = $file['size'];
                           $fileType = $file['type'];

                           echo "<p>Dosya Adı: $fileName</p>";
                           echo "<p>Dosya Boyutu: $fileSize bytes</p>";
                           echo "<p>Dosya Türü: $fileType</p>";
                        }
                        ?>
                     </div>
                  </div>
                  <!-- Uploaded files details end -->
               </div>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12">
               <div class="service-details-sidebar">
                  <div id="model-viewer" class="service-widget-1 mb-30 form-control" style="width: 100%; height: 600px; overflow: hidden;">
                     <h5 class="mb-4">3D Görüntüleyici</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

</main>

<?php include 'include/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
   // Dosya yolunu al
   var filePath = "<?php echo $uploadPath ?? '' ?>";

   // Dosya varsa görüntüleyici oluştur
   if (filePath) {
      var scene = new THREE.Scene();
      var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
      var renderer = new THREE.WebGLRenderer();
      renderer.setSize(window.innerWidth, window.innerHeight);
      document.getElementById('model-viewer').appendChild(renderer.domElement);

      // Dosya türüne göre yükleme işlemi
      var loader;
      if (filePath.endsWith('.gltf') || filePath.endsWith('.glb')) {
         loader = new THREE.GLTFLoader();
         loader.load(
            filePath,
            function(gltf) {
               scene.add(gltf.scene);
            }
         );
      } else if (filePath.endsWith('.obj')) {
         loader = new THREE.OBJLoader();
         loader.load(
            filePath,
            function(obj) {
               scene.add(obj);
            }
         );
      } else if (filePath.endsWith('.stl')) {
         loader = new THREE.STLLoader();
         loader.load(
            filePath,
            function(stl) {
               scene.add(stl);
            }
         );
      }

      // Kamera konumunu ayarla
      camera.position.z = 5;

      // Animasyon döngüsü
      function animate() {
         requestAnimationFrame(animate);
         renderer.render(scene, camera);
      }
      animate();
   }
</script>
