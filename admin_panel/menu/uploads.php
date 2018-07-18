<?php
require_once $_SERVER['DOCUMENT_ROOT'] .'/inc/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/inc/user-functions.php';
protect_page();
no_access_users();

if(isset($_POST['imgInp'])){
	echo 'raboti';
}else{
	echo 'ne raboti';
}
include $_SERVER['DOCUMENT_ROOT'] .'/header.php';
?>

<div class="container">
<div class="col-md-6">
    <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp">
                </span>
            </span>
			<input type = "submit" name = "upload_img_submit" value = "Качи Файл"/>
            <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
    </div>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/footer.php';
?>