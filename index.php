<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05 Task Performance 1</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    $name = "Kent Joemar L. Escoto";
    $arr_info = array("Home", "Subjects", "Assignment", "Quiz", "About");
    $arr_web = array("HTML, CSS, and Javascript", "PHP", "ASP.NET");
    $arr_mobile = array("Android", "iOS", "Windows");
    $arr_desktop = array("Java", "C#", "Python");
  ?>
  <div class="name">
    <?php
    echo $name;
    ?>
  </div>
  <div class="grid-container">
    <div class="border-outside grid-item">
      <img class="img-user" src="img/img-user.png" alt="img-user">
      <br>
      <?php
        echo "<div class='name-user'>Name: $name</div>";
        foreach($arr_info as $info) {
          echo "<div class='text-array'>$info</div>";
        }
      ?>
    </div>
    <div class="border-outside grid-item">
      <img class="img-laptop" src="img/img-laptop.png" alt="img-laptop">
      <?php
      echo "<div class='web'>Web Programming</div>";
      foreach($arr_web as $web) {
        echo "<div class='text-array'>$web</div>";
      }
    ?>
    </div>
    <div class="border-outside grid-item">
      <img class="img-mobile" src="img/img-mobile.png" alt="img-mobile">
      <?php
      echo "<div class='web'>Mobile Programming</div>";
      foreach($arr_mobile as $mobile) {
        echo "<div class='text-array'>$mobile</div>";
      }
    ?>
    </div>
    <div class="border-outside grid-item">
      <img class="img-laptop" src="img/img-laptop.png" alt="img-laptop">
      <?php
      echo "<div class='web'>Desktop Programming</div>";
      foreach($arr_desktop as $desktop) {
        echo "<div class='text-array'>$desktop</div>";
      }
    ?>
    </div>
  </div>

</body>

</html>