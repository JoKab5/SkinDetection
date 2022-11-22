<!-----Featured Product----->
<?php
?>
<section id="prod">
    <div class="small-container">
        <h2 class="title">Top Sale Products</h2>
        <div class="row">
            <?php foreach ($product_shuffle as $item){?>
                <div class="col-4">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./images/shirt2.jpg"; ?>"></a>
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


<!--Featured Product-->
