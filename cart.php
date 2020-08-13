<?php
include ('includes/header.php');

require_once("admin/includes/init.php");


?>

<?php
include('includes/head_shop.php');
?>
<?php
$_SESSION['shopping_cart']=isset($_SESSION['shopping_cart']) ? $_SESSION['shopping_cart'] : array();
?>


<?php include('in.php');




$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
    if(!empty($_SESSION["shopping_cart"])) {
        foreach($_SESSION["shopping_cart"] as $key => $value) {
            if($_POST["code"] == $key){
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
            }
            if(empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
        }
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
    foreach($_SESSION["shopping_cart"] as &$value){
        if($value['code'] === $_POST["code"]){
            $value['quantity'] = $_POST["quantity"];
            break; // Stop the loop after we've found the product
        }
    }

}
?>



<!doctype html>
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

<div class="cart">
    <?php
    if(isset($_SESSION["shopping_cart"])){
        $total_price = 0;
        ?>
        <table class="table">
            <tbody>
            <tr>
                <td></td>
                <td>ITEM NAME</td>
                <td>QUANTITY</td>
                <td>UNIT PRICE</td>
                <td>ITEMS TOTAL</td>
            </tr>
            <?php
            foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                <tr>
                    <td>
                        <img src='<?php echo $product["foto"]; ?>' width="50" height="40" />
                    </td>
                    <td><?php echo $product["title"]; ?><br />
                        <form method='post' action=''>
                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                            <input type='hidden' name='action' value="remove" />
                            <button type='submit' class='remove'>Remove Item</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                            <input type='hidden' name='action' value="change" />
                            <select name='quantity' class='quantity' onChange="this.form.submit()">
                                <option <?php if($product["quantity"]==1) echo "selected";?>
                                        value="1">1</option>
                                <option <?php if($product["quantity"]==2) echo "selected";?>
                                        value="2">2</option>
                                <option <?php if($product["quantity"]==3) echo "selected";?>
                                        value="3">3</option>
                                <option <?php if($product["quantity"]==4) echo "selected";?>
                                        value="4">4</option>
                                <option <?php if($product["quantity"]==5) echo "selected";?>
                                        value="5">5</option>
                            </select>
                        </form>
                    </td>
                    <td><?php echo "$".$product["prijs"]; ?></td>
                    <td><?php echo "$".$product["prijs"]*$product["quantity"]; ?></td>
                </tr>
                <?php
                $total_price += ($product["prijs"]*$product["quantity"]);
            }
            ?>
            <tr>
                <td colspan="5" align="right">
                    <strong>TOTAL: <?php echo "$".$total_price; ?></strong>
                </td>
            </tr>
            </tbody>
        </table>
        <?php
    }else{
        echo "<h3>Your cart is empty!</h3>";
    }
    ?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>


</body>
</html>
