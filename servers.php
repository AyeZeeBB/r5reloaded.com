<?php
$url = "https://ms.r5reloaded.com/servers";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$headers = array(
  "Accept: application/json",
  "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);
curl_close($curl);

$jsondecode = json_decode($resp);

$names = json_decode(file_get_contents("./json/countryname.json"), true);

$currentplayers = 0;
foreach ($jsondecode->servers as $server) {
  $currentplayers += $server->playerCount;
}

function GetPlaylistName($playlist)
{
  switch ($playlist) {
    case 'fs_dm';
      return 'Flowstate TDM';
      break;
    case 'fs_prophunt';
      return 'Flowstate Prophunt';
      break;
    case 'fs_1v1';
      return 'Flowstate 1v1';
      break;
    case 'fs_duckhunt';
      return 'Flowstate Duckhunt';
      break;
    case 'custom_tdm';
      return 'Team Deathmatch';
      break;
    case 'custom_ctf';
      return 'Capture The Flag';
      break;
    case 'survival';
      return 'Survival';
      break;
    case 'fs_movementgym';
      return 'Movement Gym';
      break;
    default;
      return $playlist;
      break;
  }
}

function GetMapName($map)
{
  switch ($map) {
    case 'mp_rr_canyonlands_staging';
      return 'Firing Range';
      break;
    case 'mp_rr_aqueduct';
      return 'Overflow';
      break;
    case 'mp_rr_aqueduct_night';
      return 'Overflow After Dark';
      break;
    case 'mp_rr_ashs_redemption';
      return 'Ashs Redemption';
      break;
    case 'mp_rr_canyonlands_64k_x_64k';
      return 'Kings Canyon S1';
      break;
    case 'mp_rr_canyonlands_mu1';
      return 'Kings Canyon S2';
      break;
    case 'mp_rr_canyonlands_mu1_night';
      return 'Kings Canyon S2 After Dark';
      break;
    case 'mp_rr_desertlands_64k_x_64k';
      return 'Worlds Edge';
      break;
    case 'mp_rr_desertlands_64k_x_64k_nx';
      return 'Worlds Edge After Dark';
      break;
    case 'mp_rr_desertlands_64k_x_64k_tt';
      return 'Worlds Edge Mirage Voyage';
      break;
    case 'mp_rr_arena_composite';
      return 'Drop Off';
      break;
    case 'mp_rr_arena_skygarden';
      return 'Encore';
      break;
    case 'mp_rr_party_crasher';
      return 'Party Crasher';
      break;
    case 'mp_lobby';
      return 'Lobby';
      break;
    default;
      return $map;
      break;
  }
}
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
  <title>Servers</title>
  <meta content="R5Reloaded" property="og:title" />
  <meta content="An Apex Legends Modding SDK" property="og:description" />
  <meta content="https://r5reloaded.com" property="og:url" />
  <meta content="https://r5reloaded.com/newsite/img/R5R-Logo-White.gif" property="og:image" />
  <meta content="#d43d2c" data-react-helmet="true" name="theme-color" />
</head>

<body>
  <!-- header -->
  <div class="container">
    <div class="row">
      <div class="header">
        <div class="logo">
          <a href="./index.php"><img src="./img/R5R-Logo-White.gif" alt="logo" width="80" /></a>
        </div>
        <input type="checkbox" id="toggle" />
        <div class="meniu servers">
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
          <div class="servers">
            <div class="welcome" style="background-image: url('./img/servers.png');height: 200px;">
              <div class="description" style="width: 100%;justify-content: center;padding-top: 25px;">
                <h1>Servers</h1>
                <div class="break"></div>
                <p style="color: var(--white);">Players Online:
                  <?php echo $currentplayers ?>
                </p>
              </div>
            </div>
            <div class="black-background">
              <div class="row-content">
                <br>
                <?php
                foreach ($jsondecode->servers as $server) {
                  $playerCounterColor = $server->playerCount > 0 ? "color: var(--green);" : "color: var(--red);";

                  echo '<div class="row-block">';
                  echo '<img src="./img/maps/' . $server->map . '.png" alt="img" width="150" height="100" style="border: 5px solid #ffffff20;"/>';
                  echo '<div class="text">';
                  echo '<p class="text-white"><img class="regionimg" src="img/flags/' . strtolower($server->region) . '.svg" title="' . $names[$server->region] . '"/> ' . $server->name . '</p>';
                  echo '<p class="text-no-bold">' . GetPlaylistName($server->playlist) . '</p>';
                  echo '<p class="text-no-bold" style="' . $playerCounterColor . '">' . $server->playerCount . '/' . $server->maxPlayers . ' Players</p>';
                  echo '</div>';
                  echo '</div>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>