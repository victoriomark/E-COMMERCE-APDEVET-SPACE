

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
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script
         src="https://kit.fontawesome.com/d4532539ca.js"
         crossorigin="anonymous"
      ></script>
      <link rel="stylesheet" href="index.css" />
      <title>E-commerce</title>
   </head>
   <body>
      <!-- code here -->
      <header
         class="container-fluid bg-light  p-3 d-flex justify-content-between align-items-center shadow-sm sticky-top"
      >
         <div class="logo">
            <h5 class="fw-bold">ShopDev</h5>
            <!-- <img id="img_logo" width="50" src="./Assets/Avatar/Logo.png" alt=""> -->
         </div>
         <nav>
            <ul class="d-flex gap-5">
               <li>
                  <a href="#">Home</a>
               </li>
               <li>
                  <a href="Pages/Store.php">Store</a>
               </li>
               <li>
                  <a href="Pages/About.php">About Us</a>
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
      <section
         class="container-fluid text-light p-4 bg-dark d-flex flex-column justify-content-center align-items-center"
      >
         <h1 class="card-title">EXPLOSIVE</h1>
         <h2>Big Sale</h2>
         <p class="card-text">
            Limited time offer! Buy now and get a free t-shirt!
         </p>
         <button id="btnOrder" class="btn btn-light ">Buy Now</button>
      </section>
      <!-- Offers -->
    <div id="offer" class=" container-fluid p-3  row justify-content-center align-items-center gap-1 ">
     <!-- divs of card -->
      <div class="d-lg-flex col-md-4 col-sm-2 justify-content-center align-items-center col-lg-2 mt-2 rounded-2  ">
         <div class="p-3">
            <i class="fa-solid fa-truck"></i>
         </div>
         <div>
            <h6>Free Shipping</h6>
            <p class="card-text">From all orders over 5100</p>
         </div>
      </div>

      <div class="d-lg-flex col-md-4 col-sm-2  justify-content-center align-items-center col-lg-2 mt-2 rounded-2  ">
         <div class="p-3">
            <i class="fa-solid fa-rotate-left"></i>
         </div>
         <div>
            <h6>Free Returns</h6>
            <p class="card-text">Return monny every 30 days</p>
         </div>
      </div>

      <div  class="d-lg-flex col-md-4 col-sm-2  justify-content-center align-items-center  col-lg-2 mt-2 rounded-2  ">
         <div class="p-3">
            <i class="fa-solid fa-lock"></i>
         </div>
         <div>
            <h6>Secure Shipping</h6>
            <p class="card-text">Your sale hands</p>
         </div>
      </div>

      <div class="d-lg-flex col-md-4  justify-content-center align-items-center  col-lg-2 mt-2 rounded-2  ">
         <div class="p-3">
            <i class="fa-solid fa-tag"></i>
         </div>
         <div>
            <h6>Over 10,000 Styles</h6>
            <p class="card-text">We have everyhing you need</p>
         </div>
      </div>

    </div>

      <div
         class="container-fluid d-flex flex-column justify-content-center align-items-center mt-5"
      >
         <div>
            <h1 class="card-title text-center fw-bold text-dark">
               Great Deals
            </h1>
            <p class="text-center">
              Get an exciting discount on great Product!
            </p>
            <ul class="d-flex gap-3 ">
                <li id="All" class="list-group fw-bold ">All</li>
                <li class="list-group fw-bold">Woman</li>
                <li class="list-group fw-bold">Man</li>
                <li class="list-group fw-bold ">Kids</li>

            </ul>
         </div>

         <div
            class="row container justify-content-center align-items-center p-2 gap-1"
         >
            <!-- CARDS -->
            <div
             data-aos="fade-right"
             data-aos-duration="1500"
              class="card rounded-4 p-2 col-lg-3 col-md-5">
               <img class="card-img" src="./Assets//Deals/pic3.jpg" alt="" />
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
             data-aos="fade-up"
             data-aos-duration="1000"
             class="card rounded-4 p-2 col-lg-3 col-md-5">
               <img class="card-img" src="./Assets//Deals/./pic1.avif" alt="" />
               <div class="card-body">
                  <h6 class="card-title">Gildan Men's Crew T-Shirts, Multipack, Style G1100</h6>
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
               <img class="card-img" src="./Assets//Deals/pic2.avif" alt="" />
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
               <img class="card-img" src="./Assets//Deals/pic4.jpg" alt="" />
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
               <img class="card-img" src="./Assets//Deals/./pic5.jpg" alt="" />
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
               <img class="card-img" src="./Assets//Deals/pic6.jpg" alt="" />
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
         </div>
         <button class="btn btn-dark fw-bold m-2">View all</button>
      </div>

        <!-- Testimonials -->
        <div class="container mt-5 d-flex flex-column justify-content-center align-items-center">
         <h1 class="fw-bold text-center "> What Our Client Say About Us </h1>
           <div class=" row container p-3 m-2    gap-2 justify-content-center align-items-center ">

               <div
               data-aos="fade-right"
                id="card_" class="col-lg-3 rounded-2 col-md-5 bg-light shadow-sm d-flex flex-column  justify-content-center align-items-center  ">
                  <h5 id="❞" class="fs-1  opacity-50">❞</h5>
                  <p class="card-text">Absolutely thrilled with my purchase! The product exceeded my expectations, and the delivery was super fast. The customer service team was also incredibly helpful and responsive. I highly recommend this e-commerce website to everyone!</p>
                  <div class="d-flex flex-column justify-content-center  align-items-center ">
                     <img id="avatar" width="50" height="50" class=" rounded-circle " src="./Assets//Avatar/avatar1.avif" alt="">
                      <h6>Emily S., satisfied </h6>
                  </div>
               </div>

               <div
               data-aos="fade-up"
               data-aos-duration="1800"
                id="card_" class="col-lg-3 rounded-2 col-md-5 bg-light shadow-sm d-flex flex-column  justify-content-center align-items-center  ">
                  <h5 id="❞" class="fs-1  opacity-50">❞</h5>
                  <p class="card-text">I was a bit skeptical about ordering online, but I'm so glad I did! The quality of the product is top-notch, and the whole shopping experience was seamless. The website is user-friendly, and I received constant updates about my order. I'll definitely be coming back for more!</p>
                  <div class="d-flex flex-column justify-content-center  align-items-center ">
                     <img id="avatar" width="50" height="50" class="rounded-circle " src="./Assets//Avatar/avatar2.avif" alt="">
                     <h6>Alex M., happy shopper </h6>
                  </div>
               </div>

               <div 
               data-aos="fade-left"
               data-aos-duration="1800"
               id="card_" class="col-lg-3 rounded-2 col-md-5 bg-light shadow-sm d-flex flex-column  justify-content-center align-items-center  ">
                  <h5 id="❞" class="fs-1  opacity-50">❞</h5>
                  <p class="card-text">This e-commerce site is a game-changer! The variety of products is impressive, and the prices are competitive. My order arrived in perfect condition, and the packaging was eco-friendly. Such a great find, and I'll be recommending it to all my friends.</p>
                  <div class="d-flex flex-column justify-content-center  align-items-center ">
                     <img id="avatar" width="50" height="50" class="rounded-circle " src="./Assets//Avatar/avatar3.avif" alt="">
                      <h6>Jessica W., delighted</h6>
                  </div>
               </div>
               
            </div>
      
        </div>


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

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <script src="app.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
       </script>
   </body>
</html>
