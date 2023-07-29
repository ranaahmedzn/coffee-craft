<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Craft</title>
    <link rel="icon" href="https://i.ibb.co/hDjm9pW/logo1.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <link rel="stylesheet" type="text/css" href="./coffeeDetails.css" />

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&family=Rancho&display=swap"
      rel="stylesheet"
    />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/e713737a14.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header>
      <div class="nav">
        <img width="60" src="https://i.ibb.co/hDjm9pW/logo1.png" alt="" />
        <a href="index.php"><h2 class="logo">Coffee Craft</h2></a>
      </div>
    </header>

    <main>
      <section class="details-section">
        <button class="back-btn">
          <a href="index.php">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Home</span>
          </a>
        </button>
        <?php
        include 'connect.php';

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM `coffees` WHERE id=$id";
            $result = mysqli_query($conn, $sql); 

            if($result){
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $chef = $row['chef'];
                $supplier = $row['supplier'];
                $price = $row['price'];
                $category = $row['category'];
                $details = $row['details'];
                $photoUrl = $row['photo'];

                echo '<div class="product-details">
                <img src="'.$photoUrl.'" alt="">
                <div class="product-info">
                    <p><span>Name: </span> '.$name.'</p>
                    <p><span>Chef: </span> '.$chef.'</p>
                    <p><span>Price: </span> '.$price.' Taka</p>
                    <p><span>Supplier: </span> '.$supplier.'</p>
                    <p><span>Category: </span> '.$category.'</p>
                    <p><span>Details: </span> '.$details.'</p>
                </div>
                </div>';
            }
        }
        ?>
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
  </body>
</html>