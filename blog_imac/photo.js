$(document).ready(function(){
    $image_crop = $("#image_demo").croppie({
        enableExif: true,
        enableOrientation: true,
        viewport:{
            width:200,
            height:200,
            type:'square'
        },
        boundary:{
            width:300,
            height:300
        }
    });
    $("#insert_image").on('change',function(){
        var reader = new FileReader();
        reader.onload = function(event){
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log("Jquery bind complete");
            })
        }
            reader.readAsDataURL(this.files[0]);
            $("#insertimageModal").modal("show");
    });
    $(".crop_rotate").on("click",function(){
        $image_crop.croppie('rotate', parseInt(-90));
    });
    $(".crop_image").on("click",function(event){
        var imageSize = {
            width: 400,
            height: 400,
            type: 'square'
    };
        $image_crop.croppie("result",{
            type: 'canvas',
            size: imageSize,
            format: "webp", 
            quality: 1
        }).then(function(response){
            $.ajax({
                url: "upload.php",
                type: "POST",
                data: {"image":response}
            }).done(function(data){
                $("#insertimageModal").modal("hide");
                new Noty({
                    type: 'success',
                    layout: 'topRight',
                    text: data,
                    timeout: 3000
                }).show();
            })
        })
    });
});