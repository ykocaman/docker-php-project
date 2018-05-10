<?php

mysqli_connect('mysql', 'user', 'password', 'db') or die('mysqli bağlanamadı');

new PDO('mysql:host=mysql;dbname=db', 'user', 'password') or die('pdo bağlanamadı');

echo "MySQL bağlantısı yapıldı.";
