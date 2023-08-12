
<!-- {{-- Live Chat Whatsapp --}} -->
<a href="https://api.whatsapp.com/send?phone=082123070516" target="_blank">
  <img src="<?= base_url('assets/frontend/img/whatsapp_logo.png');?>" alt="" style="width: 100px; position: fixed; z-index: 9999; bottom: 20px; left: 20px;" srcset="">
</a>
<!-- {{-- End Live Chat Whatsapp --}} -->


      <!-- Main Content -->
      <main class="main-content flex-grow-1">
        <div class="container-xxl">
          <!-- Start main Banner -->
          <section class="main-banner position-relative">
            <h2 class="banner-border-text" data-aos="zoom-in-up">
              THE NEW 2023
            </h2>
            <h1 class="banner-title animate__animated animate__flash animate__infinite infinite animate__slow" data-aos="flip-up" data-aos-delay="500">
              AIR JORDAN
            </h1>
            <figure
              class="figure d-block main-banner-figure mb-0"
              data-aos="fade-up"
            >
              <img
                class="figure-img img-fluid d-block mx-auto mb-0 animate__animated animate__bounce animate__infinite infinite animate__slow"
                src="<?= base_url('assets/frontend/img/banner-img-lg.png');?>"
                alt=""
              />
            </figure>
            <p class="banner-text" data-aos="fade-up" data-aos-delay="200">
              We know how large objects will act,
            </p>
            <a
              href="src/product.html"
              class="btn btn-primary rounded-0 text-uppercase"
              data-aos="flip-left"
            >
              <span class="text-white">Shop now</span>
            </a>
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-primary rounded-0 text-uppercase modal-btn"
              data-bs-toggle="modal"
              data-bs-target="#video-modal"
            >
              <img  src="<?= base_url('assets/frontend/img/ic-play.svg');?>" alt="">
            </button>
          </section>
          <!-- End main Banner -->

          <div class="popular-picks-heading text-left ">
            <h2
              class="popular-picks-heading-title text-generator"
              data-aos="fade-up"
            >
              Popular Picks
            </h2>
            <p
              class="popular-picks-heading-text mb-0"
              data-aos="fade-up"
              data-aos-delay="200"
              style="padding-bottom:35px;"
            >
              Our popular picks for most favorited Products
            </p>
          </div>

          <!-- Start New Product -->
          <section class="new-product-outer">
            <div
              class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4 gx-4"
            >
              <div class="col-lg">
                <div
                  class="media new-product d-flex"
                  data-aos="flip-left"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="500"
                >
                  <div class="new-product-img-outer bg-pink position-relative">
                    <img
                      class="new-product-img position-absolute mb-5 "
                      src="{{ asset('/storage/products' . $product->image) }}"
                      alt="" style="width:150px;margin-right:4px;transform: rotate(45deg);"
                    />
                  </div>
                  <div class="media-body">
                    <h5 class="new-product-name text-uppercase mb-1">
                      Sepatu 1
                    </h5>
                    <div class="product-rating d-flex">
                      <img src="<?= base_url('assets/frontend/img/star-a.svg');?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg');?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star-a.svg');?>" alt="" />
                      <img src="<?= base_url('assets/frontend/img/star.svg');?>" alt="" />
                    </div>
                    <p class="new-product-price">Rp 750.000</p>
                   


                        <form action="" method="POST" enctype="multipart/form-data">
                          <input type="hidden" value="{{ $product->id }}" name="id">
                          <input type="hidden" value="{{ $product->name }}" name="name">
                          <input type="hidden" value="{{ $product->price }}" name="price">
                          <input type="hidden" value="{{ $product->image }}"  name="image">
                          <input type="hidden" value="1" name="quantity">
                          <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded" style="background-color:#68D391;color:white;">Add To Cart</button>
                        </form>
                        <a class="btn-link mb-0" href="{{ route('product.show', $product->id) }}" title="Add to Cart"
                          > <i class="fa fa-eye"></i> </a> | 
                        <a class="wishlist-product">
                            <i class="far fa-heart"></i> </a> | 
                        <a class="btn-link mb-0" href="" title="Comments"
                          > <i class="fa fa-comment"></i> (12)</a>

<!-- 
                      <button class="btn btn-link mb-2 px-2 py-2 " data-bs-toggle="modal" data-bs-target="#exampleModal" id="belanjaBtn" style="background-color:#68D391;color:white;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                      <a class="btn-link mb-0" href="#" id="belanjaBtn" title="Add to Cart"
                        > <i class="fa fa-eye"></i> </a> | 
                      <a class="wishlist-product"  id="belanjaBtn">
                          <i class="far fa-heart"></i> </a> | 
                      <a class="btn-link mb-0" href="#" id="belanjaBtn" title="Comments"
                        > <i class="fa fa-comment"></i>  (12)</a> -->



                  </div>
                </div>
              </div>
                  
            </div>
          </section>
          <!-- End New Product -->


      </main>
      <!-- End Main Content -->



 <!-- Modal add to cart -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        Nikmati kemudahan berbelanja di Aradan dengan login terlebih dahulu. Silakan login untuk menambahkan produk ini ke keranjang belanja Anda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>



<!-- {{-- Check visitor apakah sudah login atau belum --}} -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const belanjaBtn = document.getElementById('belanjaBtn');
    belanjaBtn.addEventListener('click', function() {
      if (!{{ auth()->check() }}) {
        // Handle the logic to show the login modal
        // For example, you can use Bootstrap's modal API to display the modal
        // You can refer to Bootstrap documentation for more details
        $('#exampleModal').modal('show');
      } else {
        // Handle the logic for adding to cart
        // For example, you can redirect the user to the cart page or perform an AJAX request
        // based on your application's flow
        window.location.href = "/cart";
      }
    });
  });
</script>

<!-- {{-- End Check visitor apakah sudah login atau belum --}} -->


    


        <!-- Place the Tawk script in the head section -->
        <script type="text/javascript">
          var Tawk_API = Tawk_API || {};
          Tawk_LoadStart = new Date();

          window.Tawk_API.onChatMaximized = function() {
              // Place your code here, for example, you can log the event or show a notification.
              console.log('Chat widget maximized.');
              // You can also perform any other actions you want when the chat widget is maximized.
          };
  
          // Function to show the Tawk chat when the button is clicked
          function showTawkChat() {
              // Check if the Tawk chat widget has already been loaded
              if (typeof Tawk_API.toggle !== "undefined") {
                      // Maximize the chat widget
                      Tawk_API.maximize();
                      // Show the chat widget
                      // Tawk_API.toggle();

                      // Set waktu obrolan selesai jika user tidak membalas chat admin dalam 10 minutes (600,000 milliseconds)
                      setTimeout(function () {
                          endTawkChatIfNoReply();
                      }, 600000);
              } else {
                  // If the Tawk chat widget is not yet loaded, reload the Tawk script
                  var s1 = document.createElement("script");
                  var s0 = document.getElementsByTagName("script")[0];
                  s1.async = true;
                  s1.src = 'https://embed.tawk.to/648c8c8ecc26a871b022fe6f/1h32ga41a';
                  s1.charset = 'UTF-8';
                  s1.setAttribute('crossorigin', '*');
                  s0.parentNode.insertBefore(s1, s0);
  
                  // Add an event listener to show the chat widget after the script is loaded
                  s1.addEventListener('load', function () {

                      // Maximize the chat widget
                      // Tawk_API.maximize();
                      // Show the chat widget
                      // Tawk_API.toggle();

                      // Set waktu obrolan selesai jika user tidak membalas chat admin dalam 10 minutes (600,000 milliseconds)
                      setTimeout(function () {
                      endTawkChatIfNoReply();
                      }, 600000);
                  });
                      

                  }
              }


              // Mengecek admin sedang online atau offline
              function checkTawkStatus() {
              // Check if the Tawk chat widget has already been loaded
              if (typeof Tawk_API.getStatus !== "undefined") {
                  var pageStatus = Tawk_API.getStatus();

                  if (pageStatus === 'online') {
                      // Do something for online status
                      console.log('Tawk is online.');
                  } else if (pageStatus === 'away') {
                      // Do something for away status
                      console.log('Tawk is away.');
                  } else {
                      // Do something for offline status
                      console.log('Tawk is offline.');
                  }
              } else {
                  // If the Tawk chat widget is not yet loaded, wait and check again
                  setTimeout(checkTawkStatus, 100);
              }
          }

          // Call the function to check Tawk status when the widget is loaded
          window.Tawk_API.onLoad = function () {
              checkTawkStatus();
          };



          // Function to end the chat if there is no reply from admin
          function endTawkChatIfNoReply() {
              if (typeof Tawk_API.onChatMaximized !== "undefined" && typeof Tawk_API.endChat !== "undefined") {
                  var chatMaximized = Tawk_API.onChatMaximized();
                  if (chatMaximized) {
                      Tawk_API.endChat();
                      console.log('Chat has been ended due to no reply from admin.');
                  }
              }
          }

          // Call the function to check Tawk status when the widget is loaded
          window.Tawk_API.onLoad = function () {
              checkTawkStatus();
          };




      </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Event saat tombol Belanja ditekan
    $('#belanjaBtn').click(function(e) {
      e.preventDefault();

      // Cek apakah pengunjung sudah login atau belum
      var isLoggedIn = /* Logika untuk memeriksa apakah pengunjung sudah login atau belum */;

      // Jika belum login, tampilkan modal informasi
      if (!isLoggedIn) {
        $('#infoModal').modal('show');
      } else {
        // Lanjutkan ke halaman belanja
        window.location.href = "/belanja";
      }
    });
  });
</script>
