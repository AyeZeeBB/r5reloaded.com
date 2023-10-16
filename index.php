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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          <div class="meniu">
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

            <!-- Welcome -->
            <div class="welcome" style="background-image: url('./img/banner.png');">
              <div class="description" style="width:100%">
                <p style="width:50%">Welcome To R5Reloaded THIS IS A TEST</p>
                <h1 style="width:50%">An Apex Legends Modding SDK</h1>
                <div class="block-content2"  style="width:90%">
                  <a href="https://github.com/Mauler125/r5sdk/releases/latest" class="button" style="margin-right: 10px;box-shadow: 0px 0px 10px #00000090;">Download</a>
                  <a href="https://discord.gg/r5reloaded" class="discordbutton button-right" style="margin-right: 10px;box-shadow: 0px 0px 10px #00000090"><img src="./img/discord.png" alt="logo" width="25" /></a>
                  <a href="https://github.com/Mauler125/r5sdk" class="githubbutton" style="margin-right: 10px;box-shadow: 0px 0px 10px #00000090;"><img src="./img/github.png" alt="logo" width="50" /></a>
                  <a href="https://trello.com/b/ymr4R3j9/r5reloaded" class="trellobutton" style="box-shadow: 0px 0px 10px #00000090;"><img src="./img/trello.png" alt="logo" width="50" /></a>
                </div>
              </div>
            </div>

            <!-- Showcase -->
            <div class="black-background" style="background-color: #1f212200;padding: 0px 0px 0px 0px;">
              <section class="carrossel">
                <div class="pic-ctn">
                  <img src="./img/carrossel/1.jpg" alt="" class="pic">
                  <img src="./img/carrossel/2.jpg" alt="" class="pic">
                  <img src="./img/carrossel/3.jpg" alt="" class="pic">
                  <img src="./img/carrossel/4.jpg" alt="" class="pic">
                  <img src="./img/carrossel/5.jpg" alt="" class="pic">
                </div> 
              </section>
            </div>


            <!-- Whats R5Reloaded? -->
            <div class="black-background">
              <h3 class="title">Whats R5Reloaded?</h3>
              <div class="block-content">
                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Custom Servers</h1>
                      <h2>Join or create fully custom servers.</h2>
                    </div>
                  </div>
                </div>

                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Modding Support</h1>
                      <h2>Modify your game or server however you like.</h2>
                    </div>
                  </div>
                </div>

                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Private Matches</h1>
                      <h2>Run around by your self or with friends.</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="block-content">
                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Open Source</h1>
                      <h2>Feel free to take a peak at what is going on behind the scenes.</h2>
                    </div>
                  </div>
                </div>

                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Scripting</h1>
                      <h2>Full access to the games scripting language.</h2>
                    </div>
                  </div>
                </div>

                <div class="items">
                  <div class="item">
                    <div class="descriptionshowcase">
                      <h1>Server List</h1>
                      <h2>Easily join a variety of servers.</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
