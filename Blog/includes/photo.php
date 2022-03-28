<?php include_once("header.php")?>
<?php
    array_push($footerJs,"./node_modules/croppie/croppie.min.js");

    array_push($footerJs,"./js/photo.js");
?>
<link rel="stylesheet" href="/node_modules/croppie/croppie.css">
<div class="container " >
    <div class ="d-flex flex-row">
        <div class="offset-4"></div>
        <div class="col-4">
            <h1 class=""> Upload Photo </h1>
            <br>
            <label class=" file btn btn-primary  img-rounded btn-block">
                Upload Photo
            <input  hidden="true" type="file" name="insert_image" id="insert_image" accept="image/*" />
            </label>
        </div>
        <div class="offset-md-6"></div>
    </div>    
</div>

    <div id="insertimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crop & Insert Image</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="image_demo" style="width:350px; margin-top:30px"></div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12" style="padding-top:30px;">
                                <button class="btn btn-success crop_image">Crop & Insert Image</button>
                                <button class="btn btn-success crop_rotate">Rotate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once("footer.php")?>