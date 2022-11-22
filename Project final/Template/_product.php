<?php
shuffle($product_shuffle);

//request method post
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_POST['product_submit'])){

        // cart method addToCrt
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }

}

?>

<?php
    $item_id = $_GET['item_id'] ?? 0;
    foreach( $product->getData() as $item):
        if ($item['item_id'] == $item_id):
?>
<section id="product" class="py-3">
    <div class="small-container">
        <div class="row">
            <div class="col-sm-5">
                <img src="<?php echo $item['item_image'] ?? "./images/bac3.jpg";?>" class="img-fluid">


                <div class="form-row pt-3 font-size-16">
                    <div class="col">
                        <form action="bill.php">
                            <button type="submit" class="btn btn-danger form-control">Proceed To Buy</button>
                        </form>

                    </div>
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 2;?>">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control">In the cart</button>';
                            }
                            else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning form-control">Add To Cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 py-5">
                <h1 class="font-size-20"><?php echo $item['item_name'] ?? "unknow"; ?></h1>
                <small><?php echo $item['item_brand'] ?? "brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12" >
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                </div>

                <hr class="m-0">
                <!------product price --->
                <table class="my-3">
                   
                    <tr class="font-size-14">
                        <td>Deal price: </td>
                        <td class="font-size-20 text-danger">$ <span><?php echo $item['item_price'] ?? 0 ; ?></span><small class="color-dark font-size-12">&nbsp;&nbsp;Inclusives All Taxes</small></td>
                    </tr>

                </table>
                <!------product price --->

                <!------product Policy --->
                <div class="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="fot-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-12">10 Days <br> Remplacement </a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="fot-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-12">Kaboshop <br>Deliverd </a>
                        </div>
                    </div>
                </div>

                <!------product policy --->
                <hr>

                <!--------order details ----->
                <div id="order-details" class="d-flex flex-column tex-dark"></div>
                <small>Delivery by : Dec 29 - Jun 1</small>
                <small>Sold by <a href="#">Clarisse Boutique</a></small> <br>
                <small><i class="fas fa-map-marker-alt color-primary"></i>Deliverd to Customer </small>

                <!--------order details ----->

                <div class="row">
                    <div class="col-6">
                        <!-------color--->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6>Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn"></button></div>
                            </div>
                        </div>
                        <!-------color--->
                    </div>
                </div>

                <!--Size-->
                <div class="col-6">
                    <select name="" id="">
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                </div>
                <br>
                <br>

            </div>

            <div class="col-12">
                <br>
                <br>
                <h6>Description Product</h6>
                <hr>
                <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</section>

<?php
        endif;
        endforeach;
            ?>