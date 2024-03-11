
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>About Us</title>

      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
         crossorigin="anonymous"
      />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap"
         rel="stylesheet"
      />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <script
         src="https://kit.fontawesome.com/d4532539ca.js"
         crossorigin="anonymous"
      ></script>
      <link rel="stylesheet" href="../index.css" />
   </head>
   <body class="d-flex flex-column justify-content-center  align-items-center ">
      <!-- Header -->
      <header
         class="container-fluid p-3 d-flex justify-content-between align-items-center shadow-sm sticky-top"
      >
         <div class="logo">
            <h5 class="fw-bold">ShopDev</h5>
         </div>
         <nav>
            <ul class="d-flex gap-5">
               <li>
                  <a href="../index.html">Home</a>
               </li>
               <li>
                  <a href="Store.php">Store</a>
               </li>
               <li>
                  <a href="#">About Us</a>
               </li>
               <li id="cart_icon">
                  <i class="fa-solid fa-cart-shopping"></i>
               </li>
            </ul>
         </nav>
         <div class="Menu_Nav">
            <i class="fa-solid fa-bars"></i>
         </div>
      </header>
      <div class="container mt-5">
         <h1 id="Color" class="text-center opacity-25">About Us</h1>
      </div>
      <div
         class="container mt-5 d-lg-flex d-md-flex justify-content-between align-items-center p-3"
      >
         <div
         data-aos="fade-right"
         data-aos-duration="2000"
          class="d-flex justify-content-center align-items-center">
            <img
               class="col-lg-7 img-fluid"
               src="../Assets/Avatar/About_Us.svg"
               alt=""
            />
         </div>
         <div
         data-aos="fade-left"
         data-aos-duration="2000"
          class="col-lg-4">
            <h5 class="card-title">
               Welcome to <span id="brand" class="fw-bold">ShopDev</span>
            </h5>
            <p class="card-text">
               At <span id="brand" class="fw-bold">ShopDev</span>, we believe in
               creating a seamless and enjoyable shopping experience for our
               customers. Our journey began with a simple yet powerful idea - to
               provide a curated selection of high-quality products that enhance
               your lifestyle, all in one convenient online destination.
            </p>
         </div>
      </div>

      <div
         class="container mt-5 d-lg-flex d-md-flex justify-content-between align-items-center p-3"
      >
         <div 
         data-aos="fade-right"
         data-aos-duration="3000"
         class="col-lg-4">
            <h5 id="Color" class="card-title">Our Mission</h5>
            <p class="card-text">
               Our mission is to empower individuals to discover and acquire the
               products that inspire them to live their best lives. We strive to
               be more than just an e-commerce platform; we aim to be a trusted
               companion on your journey to find products that bring joy,
               comfort, and style to your everyday moments.
            </p>
         </div>

         <div
         data-aos="fade-left"
         data-aos-duration="3000"
         class="d-flex justify-content-center align-items-center">
            <img
               class="col-lg-7 img-fluid"
               src="../Assets/Avatar/target.svg"
               alt=""
            />
         </div>
      </div>
      <div class="container mt-5">
         <h1 id="Color" class="text-center">Meet The Team</h1>
      </div>

      <div class="container row justify-content-center align-items-center gap-3 p-4">

         <div
         data-aos="fade-right"
         data-aos-duration="2500"
          class="card rounded-5 border border-0 p-3 col-lg-4 d-flex flex-column justify-content-center align-items-center ">
            <img id="img_team" class="img-card" src="../Assets/Avatar/CEO.png" alt="">
            <div class="card-body">
                <h5 class="card-title fw-bolder text-secondary ">Founder/CEO Erwin Victorio - The Visionary:</h5>
                <p class="card-text">
                    Meet the driving force behind <span class="fw-bold " id="Color">ShopDev</span> <span class="fw-bold ">Erwin Victorio</span> envisioned a platform that goes beyond traditional e-commerce, focusing on curated quality and customer satisfaction. Their leadership sets the tone for our commitment to excellence.
                </p>
            </div>
          
            </div>

            <div 
            data-aos="fade-left"
            data-aos-duration="1800"
             class="card border border-0 rounded-5 p-3 col-lg-4 d-flex flex-column justify-content-center align-items-center ">
                <img id="img_team" class="img-card" src="../Assets/Avatar/aldrin.png" alt="">
                <div class="card-body">
                    <h5 class="card-title text-secondary fw-bolder">Customer Service Manager Aldrin Dela Cruz Simon - Your Support Champion:</h5>
                    <p class="card-text">
                     Customer Service Manager <span class="fw-bold ">Aldrin Dela Cruz Simon </span> leads our dedicated customer service team. With a passion for helping customers and resolving queries, he ensures that your experience with <span class="fw-bold " id="Color">ShopDev</span> is nothing short of exceptional.
                    </p>
                </div>
                </div>


                <div
                data-aos="fade-right"
                data-aos-duration="2600"
                class="card border border-0 rounded-5 p-3 col-lg-4 d-flex flex-column justify-content-center align-items-center ">
                    <img id="img_team" class="img-card" src="../Assets/Avatar/judith.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-secondary fw-bolder">Product Curator Judith Barandino - The Style Aficionado:</h5>
                        <p class="card-text">
                           As our chief product curator, Product Curator <span class="fw-bold ">Judith Barandino</span> brings a keen eye for style and functionality to <span class="fw-bold " id="Color">ShopDev</span>. They are responsible for selecting products that align with the latest trends, ensuring our catalog is always on point.
                        </p>
                    </div>
                    </div>

                    <div
                    data-aos="fade-left"
                    data-aos-duration="2500"
                    class="card border border-0 rounded-5 p-3 col-lg-4 d-flex flex-column justify-content-center align-items-center ">
                        <img id="img_team" class="img-card" src="../Assets/Avatar/lutoc.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-secondary fw-bolder">Marketing Manager Ben Lutoc Pelarea - The Trendsetter:</h5>
                            <p class="card-text">
                              [Marketing Manager <span class="fw-bold ">Ben Lutoc Pelarea</span> is the creative mind behind our marketing strategies. From engaging social media campaigns to exciting promotions, he work tirelessly to keep you informed and inspired by the latest from <span id="Color" class="fw-bold">ShopDev</span>.
                            </p>
                        </div>
                        </div>



         </div>

      </div>
      <!-- footer -->
      <footer
         class="container-fluid bg-dark p-3 d-lg-flex justify-content-sm-around"
      >
         <div class="logo col-lg-2">
            <h5 class="fw-bold">ShopDev</h5>
            <p class="card-text">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Ratione, tempora?
            </p>
            <div class="d-flex gap-2">
               <i class="fa-solid fa-location-dot"></i>
               <p>Manila city</p>
            </div>
            <div class="d-flex gap-2">
               <i class="fa-solid fa-envelope"></i>
               <p>ShopDev.gmail.com</p>
            </div>
            <div class="d-flex gap-2">
               <i class="fa-solid fa-phone"></i>
               <p>0997295154</p>
            </div>
         </div>

         <div>
            <h5>COMPANY</h5>
            <ul class="list-group gap-1">
               <li class="list-group">Home</li>
               <li class="list-group">Store</li>
               <li class="list-group">About Us</li>
            </ul>
         </div>

         <div>
            <h5>HELP</h5>
            <ul class="list-group gap-1">
               <li class="list-group">User FAQS</li>
               <li class="list-group">How to Buy</li>
               <li class="list-group">Report Abuse</li>
               <li class="list-group">Cusomer Service</li>
               <li class="list-group">Returm & Refunds</li>
            </ul>
         </div>

         <div>
            <h5>NEWSLETTER</h5>
            <input
               class="form-control"
               type="text"
               placeholder="Enter your email adderess.."
            />
            <button class="btn btn-secondary fw-bold mt-2">
               Subscribe Now
            </button>
         </div>
      </footer>

      <script src="../app.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <script src="app.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
       </script>
   </body>
</html>
