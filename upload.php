<?php
// print_r($_FILES);
if(isset($_FILES['upload']['name'])){
    $file_name = $_FILES['upload']['name'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target = 'upload/';
    move_uploaded_file($file_tmp,$target.$file_name);
    $function_number = $_GET['CKEditorFuncNum'];
    $url = 'upload/'.$file_name;
    $message = '';
    echo '<script>';
    echo 'window.parent.CKEDITOR.tools.callFunction("'.$function_number.'","'.$url.'","'.$message.'")';
    echo '</script>';
}
?>