<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="nav_content">
    <button type="button" class="nav_handle">Menu</button>
  </div>
  <nav class="navigation" data-navigation-handle=".nav_handle" data-navigation-content=".nav_content">
    <a href="#">One</a>
    <a href="#">Two</a>
    <a href="#">Three</a>
  </nav>


  <script>
    $(".navigation").navigation({
      type: "overlay",
      gravity: "right",
      maxWidth: "10000px"
    });
  </script>
</body>

</html>