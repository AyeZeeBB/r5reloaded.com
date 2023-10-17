<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/home.css" />
  <link rel="icon" type="image/x-icon" href="./img/R5R-Logo-White.png">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>R5Reloaded</title>
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
        <div class="meniu servers details contribs downloads">
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
    <div class="container" style="padding-top: 0px;">
      <div class="row">
        <div class="background">
          <div class="welcome" style="background-image: url('./img/servers.png');height: 200px;">
            <div class="description" style="width: 100%;justify-content: center;padding-top: 25px;">
              <h1>Download</h1>
              <div class="break"></div>
              <p style="color: var(--white);font-size: 20px">How to download R5Reloaded.</p>
            </div>
          </div>

          <!-- Install Tut -->
          <div class="install-video black-background">
            <h3 class="title" style="color: var(--white)">Video Install Tutorial</h3>
            <iframe class="installvideo" src="https://www.youtube.com/embed/dQw4w9WgXcQ">
            </iframe>
          </div>

          <!-- Whats R5Reloaded? -->
          <div class="black-background">
            <h3 class="title" style="color: var(--white)">Text Install Tutorial</h3>

            <h2 style="color: var(--red)">Before You Begin:</h2>
            <ul style="color: var(--white);margin-left: 20px">
              <li>Before you start the installation process, make sure you have the EA App installed and that you have
                the standard Apex game in your library.</li>
              <li>If you're updating from a previous version of the game, do not reuse those files. You need to perform
                a clean install of all the files.</li>
              <li>Ensure you have at least 55 gigabytes of free space to install R5Reloaded.</li>
            </ul>

            <br>

            <h2 style="color: var(--red)">Installing R5Reloaded:</h2>
            <ol style="color: var(--white);margin-left: 20px">
              <li>Download the R5Reloaded launcher from the link provided below.</li>
              <br>

              <li>Choose a location on your system where you'd like to install the game, for example, C:/R5Reloaded.
                Please note that the chosen folder path must not contain any non-Latin characters.</li>
              <br>

              <li>Drag and drop or copy and paste the launcher into the folder you created in the previous step.</li>
              <br>

              <li>Open the R5Reloaded launcher and click the "Install Apex" button.</li>
              <br>

              <li>Allow some time for the installation process to complete.</li>
              <br>

              <li>Once the installation is finished, click "Launch Apex" to start playing.</li>
              <br>

            </ol>

            <p>Follow these steps carefully to ensure a smooth installation process. If you have any further questions
              or encounter any issues, feel free to ask for assistance in the discord.</p>

            <a href="https://r5reloaded.com/downloads/launcher.exe" class="downloadbutton2"
              style="margin-right: 10px;margin-top: 35px;box-shadow: 0px 0px 10px #00000090;width: 100%">Download
              Launcher</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>