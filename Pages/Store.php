<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <title>Shop</title>
   </head>
   <body>
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
                  <a href="../index.php">Home</a>
               </li>
               <li>
                  <a href="#">Store</a>
               </li>
               <li>
                  <a href="About.php">About Us</a>
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

      <div  class="container-fluid  p-3">
         <div class="container">
            <div>
               <ul class="d-flex gap-2">
                  <li>
                     <a href="../index.php">Home</a>
                  </li>
                  <li class="fw-bold">/</li>
                  <li>
                     <a href="Store.php">Shop</a>
                  </li>
               </ul>
            </div>
            <h4 class="m-4">Products List</h4>
         </div>
      </div>
     
      <!-- Cards -->

 <div class="container-fluid d-flex flex-column justify-content-center align-items-center ">

    <div
    class="row container justify-content-center align-items-center p-2 gap-1"
 >
    <!-- CARDS -->
    <div
     data-aos="fade-right"
     data-aos-duration="1500"
      class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic3.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">
             Weekender Bag Travel Duffel Bag (ivory white)
          </h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="text-muted">$ 500</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
     data-aos="fade-down"
     data-aos-duration="1000"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="..//Assets//Deals/./pic1.avif" alt="" />
       <div class="card-body">
          <h6 class="card-title">Gildan Men's Crew T-Shirts, Multipack, Style G1100</h3>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="text-muted">$ 500</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
     data-aos="fade-left"
     data-aos-duration="2000"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic2.avif" alt="" />
       <div class="card-body">
          <h6 class="card-title">Nike mens Luxe Modal Boxer Briefs</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="text-muted">$ 42.20</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
    data-aos="fade-right"
    data-aos-duration="1300" class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic4.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">47 Brand MLB New York Yankees Branson Cap B-BRANS17CTP, Unisex</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="text-muted">$ 19.99</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
    data-aos="fade-up"
    data-aos-duration="1500"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/./pic5.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">Bruno Marc Men's Leather Lined Dress Oxfords Shoes</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="">$ 29.39 - <span class="text-muted">$32.98</span></h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
    data-aos="fade-left"
    data-aos-duration="1800"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic6.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">ANJOUFEMME Womens Hiking Snow Winter Boots</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 class="text-muted">$ $59.99</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>


    <div
    data-aos="fade-right"
    data-aos-duration="1800"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic7.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">Essentials Women's Waisted Maxi Dress (Available in Plus Size)</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 >$12.30 - <span class="text-muted">$28.20</span></h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>


    <div
    data-aos="fade-up"
    data-aos-duration="1800"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic8.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">ANRABESS Women's Casual Loose Short Sleeve Long Dress Split Maxi Summer Beach Dress with Pockets</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 >$29.99</h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>

    <div
    data-aos="fade-left"
    data-aos-duration="1800"
     class="card rounded-4 p-2 col-lg-3 col-md-5">
       <img class="card-img" src="../Assets//Deals/pic9.jpg" alt="" />
       <div class="card-body">
          <h6 class="card-title">Qearal Womens Casual V Neck 3/4 Sleeve Boho Floral Printed Loose Short Mini Summer Beach Dress</h6>
          <p class="card-text">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             Vel, nihil.
          </p>
          <h6 >$12.30 - <span class="text-muted">$39.50</span></h6>
       </div>
       <div class="container d-flex justify-content-between">
          <button class="btn">
             <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button class="btn">
             <i class="fa-regular fa-heart"></i>
          </button>
       </div>
    </div>
 </div>
 </div>
     
       
 <!-- footer -->
 <footer class="container-fluid bg-dark  p-3 d-lg-flex  justify-content-sm-around  ">
    <div class="logo col-lg-2">
       <h5 class="fw-bold">ShopDev</h5>
       <p class="card-text">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, tempora?
       </p>
       <div class="d-flex gap-2">
          <i class="fa-solid fa-location-dot"></i>
          <p>Manila city</p>
       </div>
       <div class="d-flex gap-2 ">
          <i class="fa-solid fa-envelope"></i>
          <p>ShopDev.gmail.com</p>
       </div>
       <div class="d-flex gap-2 ">
          <i class="fa-solid fa-phone"></i>
          <p>0997295154</p>
       </div>
    </div>

    <div>
       <h5>COMPANY</h5>
       <ul class="list-group gap-1  ">
          <li class="list-group ">Home</li>
          <li class="list-group ">Store</li>
          <li class="list-group ">About Us</li>
       </ul>
    </div>

    <div>
       <h5>HELP</h5>
       <ul class="list-group gap-1  ">
          <li class="list-group ">User FAQS</li>
          <li class="list-group ">How to Buy</li>
          <li class="list-group ">Report Abuse</li>
          <li class="list-group ">Cusomer Service</li>
          <li class="list-group ">Returm & Refunds</li>
       </ul>
    </div>

   <div>
    <h5>NEWSLETTER</h5>
     <input class="form-control" type="text" placeholder="Enter your email adderess..">
     <button  class="btn btn-secondary  fw-bold  mt-2  ">Subscribe Now</button>
   </div>
 </footer>

      <script
         src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
         integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
         crossorigin="anonymous"
      ></script>
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
         integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
         crossorigin="anonymous"
      ></script>
      <script src="../app.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>
