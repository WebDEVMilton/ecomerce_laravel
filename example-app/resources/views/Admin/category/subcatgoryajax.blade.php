<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> -->
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    </script>

    <script>
        $(document).ready(function(){
            $(document).on('click','.add_subcategory',function(event){
                event.preventDefault();
                let addcat_id=$('#addcat_id').val();
                let subcatname=$('#subcatname').val();

                alert(addcat_id+subcatname);

                $.ajax({
                    url:"{{route('add.subcat')}}",
                    method:'post',
                    data:{
                        addcat_id=addcat_id;
                        subcatname=subcatname;
                    },

                    success:function(response){
                        if(response.status="success")

                    },

                    error:function(error){

                    }





                })




            })


        })








    </script>