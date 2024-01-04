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
            $(document).on('click','.add_category',function(event){
                event.preventDefault();
                let catname=$('#catname').val();
                // alert(catname)

                $.ajax(
                    {
                        url:"{{route('add.parentcat')}}",
                        method:"post",
                        data:{
                            catname=catname;
                        },
                        success:function(response){
                            // $('#successMes').append('<span class="text-success">Data insert success</span>');
                            if(response.status="success"){
                                $('#addparentcat')[0].reset();
                                Command: toastr["success"]("Have fun storming the castle!", "Category Add Successful")
                                    toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": true,
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
                        },
                    error:function(error){

                    }

                    }
                )




            })








        });









    </script>