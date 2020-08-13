
<?php
include ('includes/header.php');
?>


<?php
include('includes/head_shop.php');
?>




<?php
$products = Product::find_all();
?>



<?php
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 3;
$items_total_count = Product::count_all();


$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM products ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";
$photos = Product::find_this_query($sql);
?>



    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">


            <!-- Single Catagory -->

            <?php foreach ($products as $product): ?>
                <div class="single-products-catagory clearfix">
                    <a href="product-details.php?id=<?php echo $product->id; ?>">
                        <img src="<?php echo 'admin' . DS . $product->picture_path(); ?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From &euro;<?= $product->prijs; ?></p>
                            <h4><?= $product->title; ?></h4>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
    <!-- Product Catagories Area End -->






</div>
<!-- ##### Main Content Wrapper End ##### -->


<!-- Paginator-->
<div class="row">
    <div class="col-12 text-center">
        <ul class="pager d-inline-flex list-unstyled">
            <?php
            if ($paginate->page_total() > 1) {
                if ($paginate->has_next()) {
                    echo "<li class='next mx-2'><a href='index.php?page={$paginate->next()}'>Next</a></li>";
                }
                for ($i = 1; $i <= $paginate->page_total(); $i++) {
                    if ($i == $paginate->current_page) {
                        echo "<li class='active mx-2'><a class='page-link badge-primary' href='index.php?page={$i}'> {$i} </a></li>";
                    } else {
                        echo "<li class='page-item mx-2'><a class='page-link' href='index.php?page={$i}'>{$i}</a></li>";
                    }
                }
                if ($paginate->has_previous()) {
                    echo "<li class='previous mx-2'><a href='index.php?page={$paginate->previous()}'>Previous</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>



<?php
include ('includes/Newsletter.php');
?>

<?php
include ('includes/footer.php');
?>
