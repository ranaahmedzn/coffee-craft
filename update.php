<?php
  include 'connect.php';
  $updated = false;

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `coffees` WHERE id=$id";
    $result = mysqli_query($conn, $sql); 

    if($result){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name = $row['name'];
        $chef = $row['chef'];
        $supplier = $row['supplier'];
        $price = $row['price'];
        $category = $row['category'];
        $details = $row['details'];
        $photoUrl = $row['photo'];

        if(isset($_POST['updateCoffee'])){
          $name = $_POST['name'];
          $chef = $_POST['chef'];
          $supplier = $_POST['supplier'];
          $price = $_POST['price'];
          $category = $_POST['category'];
          $details = $_POST['details'];
          $photoUrl = $_POST['photoUrl'];

          $sql = "UPDATE `coffees` SET `name`='$name',`chef`='$chef',`supplier`='$supplier',`price`='$price',`category`='$category',`details`='$details',`photo`='$photoUrl' WHERE id=$id";

          if(mysqli_query($conn, $sql)){
            // echo "Product successfully updated!";
            $updated = true;
          }
          else{
            echo "Error updating record: " . mysqli_error($conn);
          }
        }
    }

    mysqli_close($conn);
  }
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Craft</title>
    <link rel="icon" href="./images/more/logo1.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&family=Rancho&display=swap"
      rel="stylesheet"/>
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
        <img width="60" src="./images/more/logo1.png" alt="" />
        <a href="index.php"><h2 class="logo">Coffee Craft</h2></a>
      </div>
    </header>

    <main>
      <!-- add coffee section -->
      <section class="add-coffee-section">
        <button class="back-btn">
          <a href="index.php">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Home</span>
          </a>
        </button>

        <div class="add-form">
          <div class="section-name">
            <h4 class="sub-title">Update Existing Coffee Details</h4>
            <p>
                It is a long established fact that a reader will be distraceted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here.
            </p>
          </div>
          <form method="post" class="form">
            <div class="input-row">
              <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $name;?>" />
              </div>
              <div>
                <label for="chef">Chef</label>
                <input
                  type="text"
                  name="chef"
                  id="chef"
                  placeholder="Enter coffee chef"
                  value="<?php echo $chef;?>"
                />
              </div>
            </div>
            <div class="input-row">
              <div>
                <label for="supplier">Supplier</label>
                <input
                  type="text"
                  name="supplier"
                  id="supplier"
                  placeholder="Enter coffee content"
                  value="<?php echo $supplier;?>"
                />
              </div>
              <div>
                <label for="price">Price</label>
                <input
                  type="number"
                  name="price"
                  id="price"
                  placeholder="Enter coffee price"
                  value="<?php echo $price;?>"
                />
              </div>
            </div>
            <div class="input-row">
              <div>
                <label for="category">Category</label>
                <input
                  type="text"
                  name="category"
                  id="category"
                  placeholder="Enter coffee category"
                  value="<?php echo $category;?>"
                />
              </div>
              <div>
                <label for="details">Details</label>
                <input
                  type="text"
                  name="details"
                  id="details"
                  placeholder="Enter coffee details"
                  value="<?php echo $details;?>"
                />
              </div>
            </div>
            <div class="input-row">
              <div>
                <label for="photoUrl">Photo</label>
                <input
                  type="url"
                  name="photoUrl"
                  id="photoUrl"
                  placeholder="Enter photo URL"
                  value="<?php echo $photoUrl;?>"
                />
              </div>
            </div>
            <button type="submit" name="updateCoffee" class="add-btn2">Update Coffee Details</button>
          </form>
        </div>
      </section>

      <section class="contact-section">
        <div class="parent-div">
          <div class="contact-info">
            <div class="website-name">
              <img width="60" src="./images/more/logo1.png" alt="" />
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

    <!-- js for open a sweetalert after updating the product -->
    <script src="jquery-3.7.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
      if(<?php echo $updated; ?>){
        Swal.fire(
            'Updated!',
            'Your product has been updated.',
            'success'
          )
      }
    </script>
  </body>
</html>
