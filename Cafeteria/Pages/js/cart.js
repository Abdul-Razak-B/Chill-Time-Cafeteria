//Increment Item Quantity
$(document).ready(function(){
    $('.increment-btn').click(function(e){
        e.preventDefault();
        var qnt = $(this).closest('.product_data').find('.input-qnt').val();
        value = parseInt(qnt, 15);
        value = isNaN(value) ? 0 : value;
        if (value < 15) {
            value++;
            $('.input-qnt').val(value);
            $(this).closest('.product_data').find('.input-qnt').val(value);
        }
    });
});
//Decrement Item Quantity
$(document).ready(function(){
    $('.decrement-btn').click(function(e){
        e.preventDefault();
        var qnt = $(this).closest('.product_data').find('.input-qnt').val();
        value = parseInt(qnt, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $('.input-qnt').val(value);
            $(this).closest('.product_data').find('.input-qnt').val(value);
        }
    });
});

//Add To Cart Button
alertify.set( "notifier", "position", "top-center" );  // Default position
alertify.set( "notifier", "delay", 2 );  // The default delay delay in seconds
$('.addToCartBtn').click(function(e){
    e.preventDefault();
    var qnt = $(this).closest(".product_date").find(".qty").val();
    var prod_id = $(this).val();
    //alertify.success(prod_id);
    $.ajax({
        url: "handlecart.php",
        method: "POST",
        data: {
            "prod_id" : prod_id,
            "prod_qnt": qnt,
            "scope": "add"
        },
        success: function(response){
            alertify.success('<div class="text-center"><span class="text-white">Item Added To Cart!</span></div>');
        }
    });
});