<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location: login.php");
}
?>
<?php include_once 'style/header.php' ?>
<title>Index Page</title>
</head>

<body>


  <?php include_once 'style/fotter.php'; ?>