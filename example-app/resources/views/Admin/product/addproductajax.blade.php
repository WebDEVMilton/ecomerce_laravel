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
            
            $(document).on('submit','#Addproductform',function(event){
                event.preventDefault();
                let pname=$('#pname').val();
                // let cat_id=$('#cat_id').val();
                // let subcat_id=$('#subcat_id').val();
                // let tags=$('#tags').val();
                // let exchange=$('#exchange').val();
                // let refund=$('#refund').val();

               alert(pname);
                
                let formData = new FormData(this);
                // formData.append('id',id);
                formData.append('pname',pname);
                formData.append('cat_id',cat_id);
                formData.append('subcat_id',subcat_id);
                formData.append('tags',tags);
                formData.append('exchange',exchange);
                formData.append('refund',refund);
                formData.append('pimage',pimage);
                formData.append('ptumbnail',ptumbnail);
                formData.append('pvideo',pvideo);
                formData.append('shipweight',shipweight);
                formData.append('price',price);
                formData.append('stock',stock);
                formData.append('quantity',quantity);
                formData.append('pagetitle',pagetitle);
                formData.append('metadesc',metadesc);
                formData.append('meta_url',meta_url);
                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                console.log(percentComplete);
                                $('.progress-bar').css('width', percentComplete + '%');
                                if (percentComplete === 100) {
                                    console.log('completed 100%')

                                    var imageUrl = window.URL.createObjectURL(pimage)
                                    $('.imgPreview').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },



                    url:"{{route('add.productdata')}}",
                    method:'post',
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,

                    success: (data) => {
                
                    },
                    error: function(data){
                    console.log(data);
                    }

                })
            });
        })





    </script>
