<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    </script>


<script>
    $(document).ready(function(){
        $(document).on('click','.addcart_button',function(event){
            event.preventDefault();
            let product_id=$(this).data('product_id');
            let price=$(this).data('price');
            // let quantity = $("#quantity").val();

            // alert(price);

            $.ajax({
                url:"{{route('add.cart')}}",
                method:"post",
                data:{
                    _token: @json(csrf_token()),
                    product_id:product_id,
                    price:price
                },
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(){

                },
                error:function(){

                }
            });

        });

        // update quantity 

            $(document).on('click', '.add_quantity', function () {
            // Find the closest input field within the same parent div
            let inputField = $(this).closest('.qty-box').find('.qty-input');

            // Get the current value of the input field
            let currentValue = inputField.val();

            // Get the product ID
            let product_id = $(this).data('product_id');

            console.log(currentValue);
            console.log(product_id);
            $.ajax({
                    url: "{{route('update.quantity')}}",
                    type: "POST",
                    data: { 
                        _token: @json(csrf_token()),
                        quantity:currentValue,
                        product_id:product_id
                    },
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        // console.log(response); // Log the response for debugging
                    },
                    error: function (error) {
                        // console.error("Error updating quantity: ", error);
                    }
                });



        });






    });









</script>