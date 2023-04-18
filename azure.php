<?php

$con = $con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con,
"luke-a.mysql.database.azure.com",
"luke", 
"3466Dk123",
"epic",
3306, MYSQLI_CLIENT_SSL);


?>
