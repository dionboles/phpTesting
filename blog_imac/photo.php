<?php include_once("header.php")?>
<?php
    array_push($footerJs,"./node_modules/croppie/croppie.min.js");

    array_push($footerJs,"./photo.js");
?>
<link rel="stylesheet" href="/node_modules/croppie/croppie.css">
<div class="container">
    <div class ="d-flex flex-row">
        <div class="col-12">
            <h1 class="text-center"> Upload a Photo </h1>
            <label class=" file btn btn-primary">
                Upload Photo
            <input  hidden="true" type="file" name="insert_image" id="insert_image" accept="image/*" />
            </label>
        </div>
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
                        <div class="col-md-8 text-center">
                            <div id="image_demo" style="width:350px; margin-top:30px"></div>
                        </div>
                        <div class="col-md-4" style="padding-top:30px;">
                            <br />
                            <br />
                            <br />
                            <button class="btn btn-success crop_image">Crop & Insert Image</button>
                            <button class="btn btn-success crop_rotate">Rotate</button>
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