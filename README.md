README.md

---

# Redemple Marcelo

### This is a sample Login App you can clone this REPO.

---

![TEST_PASSED!](TEST_PASSED.jpg "TEST_PASSED.jpg")

---

REPOSITORY : https://github.com/Redemple332/logApp-Marcelo
Setup!

1. Run this to your Terminal: git clone https://github.com/Redemple332/logApp-Marcelo
2. Open your project using your favorite Code Editor.

SETUP DATABASE CONNECTION

1. Create your database schema on phpmyadmin.

2. On project logApp there is database backup name logapp.sql Restore database on phpmyadmin.
3. Goto your project setup your database connection.
   Redemple Marcelo3:25 PM
4. Create config.php file. <?php
   define('ROOT_URL', 'http://localhost/REDEMPLE/logApp-scaling-octo');
   define('DB_HOST', '"localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'logapp');

5. Create db.php file and paste this code.
<?php
	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
?>

---

![redemple!](redemple.jpg "redemple")
**_AUTHOR: REDEMPLE MARCELO_**
**_"Thank you for visiting my logApp basic websites!"_**
