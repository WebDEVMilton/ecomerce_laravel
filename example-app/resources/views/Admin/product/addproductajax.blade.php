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

            //  depending subcategory dropdown  
            $(document).on('change','#cat_id',function(event){
                event.preventDefault();
                let cat_id=$('#cat_id').val();
                alert(cat_id);

                $.ajax({
                    url:"{{ route('get.subcat') }}",
                    type:'post',
                    data:{
                        cat_id:cat_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success:function(response){
                        $('#subcat_id').html('<option value="">Select Category</option>');
                        $.each(response.subcategorys,function(index, val){
                        $('#subcat_id').append('<option value="'+val.id+'"> '+val.subcatname+' </option>');
                        });
                    }
                })
            });










            // insert product 
            
            $(document).on('click','.Addproductform',function(event){
                event.preventDefault();
                let pname=$('#pname').val();
                let cat_id=$('#cat_id').val();
                let subcat_id=$('#subcat_id').val();
                let tags=$('#tags').val();
                let exchange=$('#exchange').val();
                let refund=$('#refund').val();
                let pimage=$('#pimage').val();
                let ptumbnail=$('#ptumbnail').val();
                let pvideo=$('#pvideo').val();
                let shipweight=$('#shipweight').val();
                let price=$('#price').val();
                let stock=$('#stock').val();
                let quantity=$('#quantity').val();
                let pagetitle=$('#pagetitle').val();
                let metadesc=$('#metadesc').val();
                let meta_url=$('#meta_url').val();
               alert(pname+cat_id+subcat_id);
                
                // let formData = new FormData(this);
                // formData.append('id',id);
                // formData.append('pname',pname);
                // formData.append('cat_id',cat_id);
                // formData.append('subcat_id',subcat_id);
                // formData.append('tags',tags);
                // formData.append('exchange',exchange);
                // formData.append('refund',refund);
                // formData.append('pimage',pimage);
                // formData.append('ptumbnail',ptumbnail);
                // formData.append('pvideo',pvideo);
                // formData.append('shipweight',shipweight);
                // formData.append('price',price);
                // formData.append('stock',stock);
                // formData.append('quantity',quantity);
                // formData.append('pagetitle',pagetitle);
                // formData.append('metadesc',metadesc);
                // formData.append('meta_url',meta_url);
                $.ajax({
                    url:"{{route('add.productdata')}}",
                    method:'post',
                    data: {
                        pname:pname,
                        cat_id:cat_id,
                        subcat_id:subcat_id,
                        tags:tags,
                        exchange:exchange,
                        refund:refund,
                        pimage:pimage,
                        ptumbnail:ptumbnail,
                        pvideo:pvideo,
                        shipweight:shipweight,
                        price:price,
                        stock:stock,
                        quantity:quantity,
                        pagetitle:pagetitle,
                        metadesc:metadesc,
                        meta_url:meta_url,
                    },
                    cache:false,
                    // contentType: false,
                    // processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){

                        if(response.status=="success"){

                        }
                
                    },
                    error: function(error){
                            // $("#ErroMsg").find("ul").html('');
                            // $.each(error.responseJSON.errors, function(key, value )) {
                            // $('#ErroMsg').find("ul").append('<li class="text-danger" >'+value+'</li>');
                    }
                });

                })
        

            //   update insert product 
            $(document).on('submit','#Updateproductform',function(event){
                event.preventDefault();
                let id=$('#id').val();
                let pname=$('#pname').val();
                let cat_id=$('#cat_id').val();
                let subcat_id=$('#subcat_id').val();
                let tags=$('#tags').val();
                let exchange=$('#exchange').val();
                let refund=$('#refund').val();
                let pimage=$('#pimage').val();
                let ptumbnail=$('#ptumbnail').val();
                let pvideo=$('#pvideo').val();
                let shipweight=$('#shipweight').val();
                let price=$('#price').val();
                let stock=$('#stock').val();
                let quantity=$('#quantity').val();
                let pagetitle=$('#pagetitle').val();
                let metadesc=$('#metadesc').val();
                let meta_url=$('#meta_url').val();
                
               alert(pname);
                
                // let formData = new FormData(this);
                // formData.append('id',id);
                // formData.append('pname',pname);
                // formData.append('cat_id',cat_id);
                // formData.append('subcat_id',subcat_id);
                // formData.append('tags',tags);
                // formData.append('exchange',exchange);
                // formData.append('refund',refund);
                // formData.append('pimage',pimage);
                // formData.append('ptumbnail',ptumbnail);
                // formData.append('pvideo',pvideo);
                // formData.append('shipweight',shipweight);
                // formData.append('price',price);
                // formData.append('stock',stock);
                // formData.append('quantity',quantity);
                // formData.append('pagetitle',pagetitle);
                // formData.append('metadesc',metadesc);
                // formData.append('meta_url',meta_url);
                $.ajax({
                    url:"{{route('update.product')}}",
                    method:'post',
                    data: {
                        id:id,
                        pname:pname,
                        cat_id:cat_id,
                        subcat_id:subcat_id,
                        tags:tags,
                        exchange:exchange,
                        refund:refund,
                        pimage:pimage,
                        ptumbnail:ptumbnail,
                        pvideo:pvideo,
                        shipweight:shipweight,
                        price:price,
                        stock:stock,
                        quantity:quantity,
                        pagetitle:pagetitle,
                        metadesc:metadesc,
                        meta_url:meta_url,
                    },
                    cache:false,
                    // contentType: false,
                    // processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function(response) {
                
                    },
                    error: function(response){
                    console.log(response);
                    }

                })
            });


    // delete product  
        $(document).on('click', '.delete-product', function() {

            var userURL = $(this).data('url');
            var trObj = $(this);

            if (confirm("Are you sure you want to delete this user?") == true) {
                $.ajax({
                    url: userURL,
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        //alert(data.success);
                        trObj.parents("tr").remove();
                        Command: toastr["error"]("Deleted")
                            toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }

                    }
                });
            }

            });


        // search 
        $(document).on('keyup', function(e){
            e.preventDefault();

            let search_string = $('#search').val();

            console.log(search_string);

            $.ajax({
                url: "{{ route('search.product') }}",
                method: "GET",
                data: {
                    search_string: search_string
                },
                success: function(res){
                    console.log(res)
                    $('.table-data').html(res);
                    if(res.status == 'nothing_found'){
                        $('.table-data').html('<span class="text-danger">Nothing Found</span>')
                    }
                }
            })
        });
    });

</script>