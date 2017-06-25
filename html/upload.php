<?php
// require('../session.php');
require('../credentials.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['userfile']) && $_FILES['userfile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    // FIXME: add more validation, e.g. using ext/fileinfo
    try {
        // FIXME: do not use 'name' for upload (that's the original filename from the user's computer)
        // $upload = $s3->upload($bucket, $_FILES['userfile']['name'], fopen($_FILES['userfile']['tmp_name'], 'rb'), 'public-read');
        $result = $s3->putObject(array(
                    'Bucket'       => 'reptofrank',
                    'Key'          => $_FILES['userfile']['name'],
                    'SourceFile'   => $_FILES['userfile']['tmp_name'],
                    //'ContentType'  => 'application/vnd.intu.qbo',
                 'ACL'          => 'public-read',
                ));
        $content = file_get_contents('links.txt');
        $handle = fopen('links.txt', 'w');


        $today = date('d/m/Y');
        $today = (string)$today;
        $key = $_POST['filename'] . '-' . $today;

        if($content){
            $arr = json_decode($content, TRUE);
        }else {
            $arr = array();
        }

        $arr[$key] = $result->get('ObjectURL');
        //$arr[$today] = 'James Lucas is a son of a bitch';

        $js = json_encode($arr);
        fwrite($handle, $js);
        fclose($handle);

        // echo "Yes Bitch";
        header("Location: index.php?status=Uploaded Successfully");

    } catch(Exception $e) {
        echo $e->getMessage();
    } 
}else echo "Something wrong: " .  $_FILES['userfile']['error'];


