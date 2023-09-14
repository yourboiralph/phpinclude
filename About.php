<!DOCTYPE html>
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
<body class="bg-[#9DB2BF] flex flex-col min-h-screen">
  <div class="flex-grow bg-[#DDE6ED]">
    <div class="mb-10 shadow-xl">
        <?php include 'Navbar.php';?>
    </div>
    <div class="flex-grow">
        <?php include 'ContentAbout.php';?>
    </div>
  </div>
  <div class="text-white text-center flex items-center justify-center">
    <?php include 'Footer.php';?>
  </div>
</body>
</html>
