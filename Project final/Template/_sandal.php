<!---------related product ------>
<?php
$product_shuffle = $product->getProductBrand3();
?>

<section id="product">
    <!--------title ---->
    <div class="small-container">
        <div class="row row-2">
            <h2>Sandal</h2>
        </div>
    </div>
    <!--------Products------->
    <div class="small-container">
        <div class="row">
            <?php foreach ($product_shuffle as $item){?>
                <div class="col-4">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./images/product-8.jpg"; ?>" alt="product1"></a>
                    <h4><?php echo $item['item_name'] ?? "unknow"; ?> </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>$<?php echo $item['item_price'] ?? "0"; ?></p>
                </div>
            <?php } // closing for fetching item ?>
        </div>

    </div>
</section>

<!---------related product ------>
