<?php
/*
 * control upload event errors by creating an errorMessage variable
 *
 * - check if no file were uploaded
 * - check the content type
 * - check the upload max size limit
 */

// if all went fine ===>

// 1) create a NEW UNIQUE uploaded zip filename

// 2) upload the zip on the server

// 3) declare an empty array of resized images

// 4) instantiate the ZipArchive class

// 5) open the uploaded zip

// 6) loop on each entries of the zip

// 7) retrieve local entrie filenames

// 8) retrieve file "basename" (filenames without directory)

// 09) we skip directories

// 10) retrieve absolute zip entries filenames $fileZipLocation = "zip://".$tempFileName."#".$filename;

// 11) retrieve file content-type

// 12) we restrict loop to images only

// 13) save the image type that will be used lately in eval();

// 14) create a relative path destination variable

// 15) copy file from zip to thumbnails relative dir

// 16) Resize part
/*
 * retrieve origin image width & height
 *
 * origin ratio => 1200 / 900 = 1.33
 *
 * both new width & height must be defined before!
 *
 *  1.33 > 1
 *
 *  150 / 1.33 = 112.5
 *
 * imagecreatetruecolor()
 * imagecreatefromXXX()
 * imagecopyresampled()
 * imageXXX()
*/

// 17) for imagecreatefromXXX we can use eval(); with function that expect string as parameters

// 18) we cannot use eval with function imageXXX since first param is a resource

// 19) finally push all imagenames in array of images

// 20) close the zip

// 21) delete the zip

// 22) check if there were at least 1 image in the zip

// need to force apache header content type to json if the server always return "text/html" content type
header('Content-Type: application/json');

// 23) finally return error message or the array of images
echo json_encode($_FILES);
