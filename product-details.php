
<?php
include ('includes/header.php');

require_once("admin/includes/init.php");
$product = Product::find_by_id($_GET['id']);

?>

<?php
include('includes/head_shop.php');
?>
<?php
$_SESSION['shopping_cart']=isset($_SESSION['shopping_cart']) ? $_SESSION['shopping_cart'] : array();
?>

<?php
// Enter your Host, username, password, database below.
$in = mysqli_connect("localhost:3308","root","","sint");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}


//include('in.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
    $code = $_POST['code'];
    $result = mysqli_query(
        $in,
        "SELECT * FROM `products` WHERE `code`='$code'"
    );
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $code = $row['code'];
    $prijs= $row['prijs'];
    $foto = $row['foto'];

    $cartArray = array(
        $code=>array(
            'title'=>$title,
            'code'=>$code,
            'prijs'=>$prijs,
            'quantity'=>1,
            'foto'=>$foto)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
            $status = "<div> Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $status = "<div >Product is added to your cart!</div>";
        }

    }
}
?>



<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/*if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    */?>
    <div class="cart_div">
        <a href="cart.php"><img src="cart-icon.png" alt="cart"/> Cart<span>
<?php /*echo $cart_count; */?></span></a>
    </div>
    <?php
/*}
*/?>


<?php
/*$result = mysqli_query($in,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['foto']."' /></div>
    <div class='name'>".$row['title']."</div>
    <div class='price'>$".$row['prijs']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
}
mysqli_close($in);
*/?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php /*echo $status; */?>
</div>
-->


        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#"><?= $product->categorie_id; ?></a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $product->title; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?php echo 'admin' .DS.$product->picture_path(); ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?php echo 'admin' .DS.$product->picture_path(); ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(<?php echo 'admin' .DS.$product->picture_path(); ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(<?php echo 'admin' .DS.$product->picture_path(); ?>);">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="<?php echo 'admin' .DS.$product->picture_path(); ?>">
                                            <img class="d-block w-100" src="<?php echo 'admin' .DS.$product->picture_path(); ?>" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?php echo 'admin' .DS.$product->picture_path(); ?>">
                                            <img class="d-block w-100" src="<?php echo 'admin' .DS.$product->picture_path(); ?>" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?php echo 'admin' .DS.$product->picture_path(); ?>">
                                            <img class="d-block w-100" src="<?php echo 'admin' .DS.$product->picture_path(); ?>" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?php echo 'admin' .DS.$product->picture_path(); ?>">
                                            <img class="d-block w-100" src="<?php echo 'admin' .DS.$product->picture_path(); ?>" alt="Fourth slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">&euro;<?= $product->prijs; ?></p>
                                <a href="product-details.php?id=<?php echo $product->id; ?>">
                                    <h6><?= $product->title; ?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href=  "product_comment.php?id=<?php echo $product->id; ?>" >Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p><?= $product->description; ?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form action="" class="cart clearfix" method="post">
                                <input type='' name='code' value="<?= $product->code; ?>" />

                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form>



                            <div class="text-danger" style="margin:10px 0px;">
                                <?php echo $status; ?>
                            </div>

                            <?php
                            if(!empty($_SESSION["shopping_cart"])) {
                                $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                                ?>
                                <div class="">
                                <a href="cart.php"><img src="cart-icon.png" alt="cart"/> Cart<span>
<?php echo $cart_count; ?></span></a>
                            </div>
                            <?php
                           }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->


    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <?php
    include ('includes/Newsletter.php');
    ?>


    <?php
    include ('includes/footer.php');
    ?>
