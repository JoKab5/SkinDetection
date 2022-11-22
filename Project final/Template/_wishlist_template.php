<!---------Shopping cart section ------>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST['delete-wishlist-submit'])){
        $deletedrecord1=$Cart->deleteWishlist($_POST['item_id']);
    }
    if (isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }
}
?>
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-size-20">Wishlist</h5>

        <!------shopping cart items ---->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item):
                    $cart=$product->getProduct($item['item_id']);
                    $subTotal[]=array_map(function ($item){
                        ?>
                        <!------cart items ---->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "images/gallery-1.jpg"; ?>" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-size-20"><?php echo $item['item_name'] ?? "unknow";?></h5>
                                <small><?php echo $item['item_brand'] ?? "unknow";?></small>

                                <!------product rating----->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12" >
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                                <!------product rating----->

                                <!------product qty----->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id']?? 0;?>", name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id']?? 0;?>", name="item_id">
                                        <button type="submit" name="cart-submit" class="btn text-danger">Add To Cart</button>
                                    </form>

                                </div>

                                <!------product qty----->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger">
                                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0';?>"><?php echo $item['item_price'] ?? 0 ;?></span>
                                </div>
                            </div>

                        </div>
                        <!------cart items ---->
                        <?php
                        return $item['item_price'];
                    },$cart); //closing array map function
                endforeach;
                ?>
            </div>
        </div>
        <!------shopping cart items ---->
    </div>

</section>
<!---------Shopping cart section ------>