<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Craft</title>
    <link rel="icon" href="https://i.ibb.co/hDjm9pW/logo1.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Rancho&display=swap"
      rel="stylesheet" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/e713737a14.js"
      crossorigin="anonymous"
    ></script>
    <!-- sweetalert link -->
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css
    " rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="nav">
        <img width="60" src="https://i.ibb.co/hDjm9pW/logo1.png" alt="" />
        <a href="index.php"><h2 class="logo">Coffee Craft</h2></a>
      </div>

      <div class="banner">
        <div>
          <h3>Would you like a Cup of Delicious Coffee?</h3>
          <p>
            It's coffee time - Sip & Savor - Relaxation in every sip! Get the
            nostalgia back!! Your companion of every moment!!! Enjoy the
            beautiful moments and make them memorable.
          </p>
          <button>Learn More</button>
        </div>
      </div>

      <div class="about-product">
        <div class="parent-div">
          <div>
            <img src="https://i.ibb.co/3szfp0z/1.png" alt="" />
            <h4>Awesome Aroma</h4>
            <p>
              You will definitely be a fan of the design & aroma of your coffee
            </p>
          </div>
          <div>
            <img src="https://i.ibb.co/rsKdBx3/2.png" alt="" />
            <h4>High Quality</h4>
            <p>We served the coffee to you maintaining the best quality</p>
          </div>
          <div>
            <img src="https://i.ibb.co/52NNyLk/3.png" alt="" />
            <h4>Pure Grades</h4>
            <p>
              The coffee is made of the green coffee beans which you will love
            </p>
          </div>
          <div>
            <img src="https://i.ibb.co/WyMbhCW/4.png" alt="" />
            <h4>Proper Roasting</h4>
            <p>
              Your coffee is brewed by first roasting the green coffee beans
            </p>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="products-section">
        <div class="section-name">
          <p>--- Sip & Savor ---</p>
          <h3 class="section-title">Our Popular Products</h3>
          <a href="addCoffee.php">
            <button class="add-btn">
              Add Coffee
              <i class="fa-solid fa-mug-hot"></i>
          </button>
          </a>
        </div>

        <img class="cup-img" src="https://i.ibb.co/g3GQTXz/4.png" alt="">
        <img class="shop-img" src="https://i.ibb.co/PhfcHcR/4a.png" alt="">

        <div class="products">
          <?php
            include 'connect.php';
            $sql = "SELECT * FROM `coffees`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $photo = $row['photo'];
                $chef = $row['chef'];
                $price = $row['price'];


                echo '<div class="product">
                <img width="194" height="240" src="'.$photo.'" alt="">
                <div class="product-info">
                  <p><span>Name: </span> '.$name.'</p>
                  <p><span>Chef: </span> '.$chef.'</p>
                  <p><span>Price: </span> '.$price.' Taka</p>
                </div>
                <div class="actions">
                  <a href="coffeeDetails.php?id='.$id.'" class="view-btn"><i class="fa-solid fa-eye"></i></a>
                  <a href="update.php?id='.$id.'" class="update-btn"><i class="fa-regular fa-pen-to-square"></i></a>
                  <a href="delete.php?id='.$id.'" class="delete-btn"><i class="fa-solid fa-trash"></i></a>
                </div>
                </div>';
              }
            } else {
              echo '<h3>Available Product is: 0</h3>';
            }
            
            mysqli_close($conn);
          ?>
        </div>
      </section>

      <section class="follow-section">
        <div class="section-name">
          <p>Follow Us Now</p>
          <h3 class="section-title">Follow on Instagram</h3>
        </div>

        <div class="img-container">
          <img src="./images/cups/cup1.png" alt="" width="100%" />
          <img src="./images/cups/cup2.png" alt="" width="100%" />
          <img src="./images/cups/cup3.png" alt="" width="100%" />
          <img src="./images/cups/cup4.png" alt="" width="100%" />
          <img src="./images/cups/cup5.png" alt="" width="100%" />
          <img src="./images/cups/cup6.png" alt="" width="100%" />
          <img src="./images/cups/cup7.png" alt="" width="100%" />
          <img src="./images/cups/cup8.png" alt="" width="100%" />
        </div>
      </section>

      <section class="contact-section">
        <div class="parent-div">
          <div class="contact-info">
            <div class="website-name">
              <img width="60" src="https://i.ibb.co/hDjm9pW/logo1.png" alt="" />
              <h2 class="logo">Coffee Craft</h2>
            </div>
            <p>
              Always ready to be your friend. Come & Contact with us to share
              your memorable moments, to share with your best companion.
            </p>
            <div class="social-icons">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
            <div>
              <h4 class="sub-title">Get In Touch</h4>
              <div class="space-y-5">
                <div class="phone">
                  <i class="fa-solid fa-phone"></i>
                  <span>+8801781940069</span>
                </div>
                <div class="email">
                  <i class="fa-solid fa-envelope"></i>
                  <span>info@coffeecraft.com</span>
                </div>
                <div class="address">
                  <i class="fa-solid fa-location-dot"></i>
                  <span>Enayetpur, Sirajganj, Bangladesh</span>
                </div>
              </div>
            </div>
          </div>

          <div class="contact-form">
            <h4 class="sub-title">Contact with Us</h4>
            <form class="form">
              <div>
                <input type="text" id="name" placeholder="Name" />
                <input type="email" id="email" placeholder="Email address" />
              </div>
              <div>
                <textarea
                  name="message"
                  type="text"
                  id="message"
                  placeholder="Message"
                ></textarea>
              </div>
              <button type="submit" id="input-submit">Submit</button>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy;Copyright Coffee Craft | All Rights Reserved</p>
    </footer>

    <!-- js for showing alert after click on the delete product button -->
    <script src="jquery-3.7.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
      $('.delete-btn').on('click', function (e) {
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
          title: 'Are you sure?',
          text: "You will not be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            document.location.href = href;
          }
        })
      })
    </script>
  </body>
</html>
