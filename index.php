<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
  <title>Home</title>
</head>
<body class="bg-[#9DB2BF]">
  <div class="bg-[#DDE6ED] w-[1300] space-y-4">
    <div class="h-1/4">
        <?php include 'Navbar.php';?>
    </div>
    <div class="h-screen">
        <?php include 'ContentHome.php';?>
    </div>
    <div class="bottom-0">
        <?php include 'Footer.php';?>
    </div>
  </div>
</body>
</html>