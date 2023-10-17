<?php
$json = file_get_contents("./json/contributors.json");
$contributors = json_decode($json);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="./img/R5R-Logo-White.png">
  <link rel="stylesheet" href="./css/home.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Contributors</title>
  <meta content="R5Reloaded" property="og:title" />
  <meta content="An Apex Legends Modding SDK" property="og:description" />
  <meta content="https://r5reloaded.com" property="og:url" />
  <meta content="https://r5reloaded.com/newsite/img/R5R-Logo-White.gif" property="og:image" />
  <meta content="#d43d2c" data-react-helmet="true" name="theme-color" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="header">
        <div class="logo">
          <a href="./index.php"><img src="./img/R5R-Logo-White.gif" alt="logo" width="80" /></a>
        </div>
        <input type="checkbox" id="toggle" />
        <div class="meniu servers details contribs">
          <a class="btn" href="./index.php">Home</a>
          <a class="btn" href="./servers.php">Servers</a>
          <a class="btn" href="https://docs.r5reloaded.com/">Docs</a>
          <a class="btn" href="./contributors.php">Contributors</a>
          <a class="btn" href="./download.php">Download</a>
        </div>
        <label class="navbar-toggler" for="toggle">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </label>
      </div>
    </div>
  </div>

  <main>
    <div class="container" style="padding-top: 0px">
      <div class="row">
        <div class="background">
          <div class="welcome" style="background-image: url('./img/contrib.png');height: 200px;">
            <div class="description" style="width: 100%;justify-content: center;display: flex;flex-wrap: wrap;">
              <p style="margin-bottom: 0px;margin-top: 0px;color: var(--white);">Contributors</p>
            </div>
          </div>
          <div class="mainbox contribus">
            <div class="black-background">
              <br>
              <?php
              $number = 0;

              foreach ($contributors->contributors as $data) {
                if ($number == 0) {
                  echo '<div class="block-content" style="margin-bottom: 0">';
                }

                if (empty($data->github))
                  echo '<div class="block hover">';
                else
                  echo '<a href="' . $data->github . '" class="block hover hover-animation">';

                echo '<div class="items">';
                echo '<img src="' . $data->image . '" alt="img" />';
                echo '<div class="item">';
                echo '<p style="font-size: 18px;"> ' . $data->name . '</p>';
                echo '<p class="text-white" style="margin-top: 0;font-size: 12px;">' . $data->desc . '</p>';

                if (empty($data->github)) {
                  echo '<p class="text-white-name" style="margin-top: 0;font-size: 12px;">‎</p>';
                } else {
                  echo '<p class="text-white-name" style="margin-top: 0;font-size: 12px;">Github: ' . explode("https://github.com/", $data->github)[1] . '</p>';
                }

                echo '</div>';
                echo '</div>';

                if (empty($data->github))
                  echo '</div>';
                else
                  echo '</a>';

                $number++;

                if ($number > 3) {
                  echo '</div>';
                  $number = 0;
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>