$(document).ready(function(){

    //product qty section
    let $qty_up=$(".qty .qty-up");
    let $qty_down=$(".qty .qty-down");
    let $deal_price=$("#deal-price");
    //let $input=$(".qty .qty-input");

    // click up button
    $qty_up.click(function(e){
        let $input=$(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);

        //change product using ajax call
        $.ajax({url:"template/ajax.php", type:'post', data:{itemid:$(this).data("id")}, success:function (result){
            let  obj = JSON.parse(result);
            let item_price= obj[0]['item_price'];
            if($input.val()>=1 && $input.val()<=9)
            {
                $input.val(function(i,oldval){
                    return ++oldval;
                });
                // increase price of item
                $price.text(parseInt(item_price*$input.val()).toFixed(2));

                //set subtotal price
                let subtotal = parseInt($deal_price.text())+parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }


        }}); // closing ajax


    });

    // click down button
    $qty_down.click(function(e){
        let $input=$(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);

        //change product using ajax call
        $.ajax({url:"template/ajax.php", type:'post', data:{itemid:$(this).data("id")}, success:function (result){
                let  obj = JSON.parse(result);
                let item_price= obj[0]['item_price'];
                if($input.val()>=1 && $input.val()<=9)
                {
                    $input.val(function(i,oldval){
                        return --oldval;
                    });
                    // increase price of item
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                    //set subtotal price
                    let subtotal = parseInt($deal_price.text())-parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));

                }

            }}); // closing ajax

    });

});