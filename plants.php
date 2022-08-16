<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/264ade2b5f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="da/style.css">
</head>

<body >

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="" id="dark">Die Pflazen <i class="fa-solid fa-seedling"></i></a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
                <a class="nav-link" id="green" href="file:///C:/Shamini/winsem21-22/web/da/plants.html">
                    Plants</a>

            </li>
            <li class="nav-item ">
                <a class="nav-link" id="green">Products </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="green">Contacts </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="green">Your Cart </a>
            </li>
           
                <input type="search" style="width: 25%;" name="search_btn">
                <button type="submit" class="btn btn-success" value="success" name="search_btn">
                    <i class="fas fa-search"></i> 
                </button>
            

</li>
        </ul><br>

        <button class="but btn btn-dark"><a href="C:\Shamini\winsem21-22\web\da\login.html">Sign in
            </a></button>
    </nav>
    </section>
    <section>

    </section>
    <section id="intro" style="background-color:#2d6a4f">
        <h4 class="display-5">Special offer for this summer</h4>
        <h2 class="display-3">Buy One Get One</h2>
        <h1 class="display-5">On all our plants</h1>
        <button class="btn btn-outline-light" id="button">Shop now</button>
    </section>

    <section id="plants" class="sec  ">
        <h2>Plants</h2>
        <p class="p p-success">New arrivals</p>
        <div class="container d-flex flex-row bd-highlight mb-3">
            <div class="prod ">
                <div class="plantpro ">
                    <img src="prod1.png">
                    <div class="description">
                        <span>Indoor Plant Bundle: </span>
                        <p>Fittonia, Crassula Mini, Philodendron Broken Heart, Betel Leaf</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>₹1299</h4><a id="cart">
                            <button class="btn disabled">Add to cart<i class="fa-solid fa-cart-plus"></i></a>

                    </div>
                    <h5 class=" h5 danger">Sorry, out of stock</h5>
                </div>
            </div>
            <div class="prod  ">
                <div class="plantpro">
                    <img src="prod2.png">
                    <div class="description">
                        <span>Jade Plant Mini </span>
                        <p>Succulents</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>₹399</h4><a id="cart">
                            <button class="btn btn-success" >Add to cart<i
                                    class="fa-solid fa-cart-plus"></i></a>
                    </div>

                </div>
            </div>
            <div class="prod">
                <div class="plantpro">
                    <img src="prod3.png">
                    <div class="description">
                        <span>Peace Lily Plant </span>
                        <p>Spathiphyllum sensation</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>₹349</h4><a id="cart">
                            <button class="btn btn-success">Add to cart<i
                                    class="fa-solid fa-cart-plus"></i></a>
                    </div>

                </div>
            </div>
            <div class="prod">
                <div class="plantpro">
                    <img src="prod4.png">
                    <div class="description">
                        <span>Echveria Pegasus </span>
                        <p> cactus family</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>₹699</h4><a id="cart">
                            <button class="btn btn-success" >Add to cart<i
                                    class="fa-solid fa-cart-plus"></i></a>
                    </div>

                </div>
            </div>
            <div class="prod">
                <div class="plantpro">
                    <img src="prod5.png">
                    <div class="description">
                        <span>Lucky Bamboo Plant -3 Layer </span>
                        <p>Dracaena sanderian </p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>₹499</h4><a id="cart">
                            <button class="btn btn-success"> Add to cart
                                <i class="fa-solid fa-cart-plus"></i></a>
                    </div>

                </div>

    </section>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email= $_POST['email'];
    $pass= $_POST['password']  ;
    $sn="localhost";
    $username="root";
    $password="";
    $database="regn_data";
    $conn=mysqli_connect($sn,$username,$password,$database);
    if($conn){
        echo "connected ";
        
    }
    function search() {
        global $con;
        if(isset($_GET['product'])){
          $search_data_value= $_GET['product'];
          $search_query = "SELECT * FROM  product WHERE title LIKE '%$search_data_value' ";
          $res = mysqli_query($con, $search_query);
          while($row = mysqli_fetch_assoc($res)){
            $product_name = $row["name"];
            echo "  <div class='col-md-6 col-lg-4 col-xl-3 p-2 feat'>
                <div class='collection-img position-relative'>
                  <img src='images/c_shirt-girl.png' class='w-100'>
                  <span class='position-absolute bg-primary text-white d-flex align-items-center justify-content-center'>sale</span>
                </div>
                  <p class='text-capitalize my-1'>$product_name</p>
                  <a href='buy.php' class='btn btn-primary' id='btn1'>
                    Buy now <i class='fa-solid fa-basket-shopping'></i>
                  </a>
                </div>
              </div>";
          }
        }
    
      }
    
    $res=mysqli_query($conn,$sql);
   
}

?>
</body>

</html>