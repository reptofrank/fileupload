<?php 

require('vendor/autoload.php');
require('bucket.php');
// this will simply read AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY from bucket.php
$s3 = Aws\S3\S3Client::factory(array(
    'credentials' => array(
        'key'    => $AWS_ACCESS_KEY_ID,
        'secret' => $AWS_SECRET_ACCESS_KEY,
    )
));
$keyname = '/';
$bucket = array('AWS_ACCESS_KEY_ID' => $AWS_ACCESS_KEY_ID, 'AWS_SECRET_ACCESS_KEY' => $AWS_SECRET_ACCESS_KEY, 'S3_BUCKET_NAME' => $S3_BUCKET_NAME);

?>