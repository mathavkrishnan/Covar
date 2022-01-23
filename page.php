<html>
    <head>
        <meta charset = "utf-8">
        <title>COVAR</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🏥</text></svg>">
        <link rel="stylesheet" href="page.css">
    </head>
    <body>
        <header>
        <div class="one">
        <ul>
            <li style="text-align: left;padding-right: 40%;color: white;cursor:copy;"><h3>🏥COVAR</h3></li>
            <li> <a href="https://www.news-medical.net/medical">📰 News Desk</a></li>
            <li> <a href="https://milaap.org/fundraisers/support-mathav-krishnan?utm_source=whatsapp&utm_medium=fundraisers-title&mlp_referrer_id=4700908">💰 Fund</a></li>
            <li>
            <div class="dropdown">
                <button class="dropbtn">💁 Profile ⏬ 
                </button>
                <div class="dropdown-content">
                  <a href="edit.html">Edit</a>
                  <a href="details.html">Details</a>
                  <a href="logout.php">Sign out</a>
                </div>
              </div></li>
        </ul>
        </div>
        </header><br><br><br><br><br><br><br><br><br>
        <main class="transbox">
            <section class="sec1"  style="margin: auto;">
                <?php
                 include('authentication.php')
                ?>
                <h1 style="color:white;">Welcome <?php echo $username?></h1>
                <div>
                    <form method="POST" action="registration.php">
                        <div class="container">
                            <div class="form-group">
                                <h3 style="color: white;">Register Identity</h3><br>
                                <label for="email" style="color: white;">Aadhar Number</label>
                                <input style="background-color: white;color: black;" type="text" id="number" name="number" required>
                            </div>
                            <div class="form-group">
                                <label for="name" style="color: white;">Date</label>
                                <input style="background-color: white;color: black;" type="date" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color: white;">Time</label>
                                <input style="background-color: white;color: black;" type="time" id="time" name="time" required>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color: white;">Vaccine Name</label>
                                <input style="background-color: white;color: black;" type="text" id="vname" name="vname" required>
                            </div>
                                <div class="form-group">
                                    <h3 style="color: white;">Vaccinated?</h3>
                                    <input style="background-color: white;color: black;" type="text" id="vated" name="vated" placeholder="yes/no" required>
                                </div>
                            <br><br>
                         <button type="submit">Add Entry</button>
                    </form>
                </div>
            </section>
            <section class="sec2"><br><br><br><br><br>
                    <video width="800" height=auto autoplay muted controls>
                        <source src="output_free.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
           </section>
            <br><br><br><br>
           <section class="sec1"  style="margin: auto;">
                    <div class="container">
                    <form method="GET" action="page.html">
                    <div class="form-group">
                        <label for="email" style="color: white;"><b>Suggestion Box</b></label><br><br>
                        <input style="background-color: white;color: black;height: 50%;" type="text" id="text" name="email">
                    </div><br><br>
                 <button type="submit">Send</button>
                 </form>
                 <div>
               </section>
               <section class="sec2">
                <div class="container">
                <form method="GET" action="page.html">
                    <div class="topnav">
                        <h2 style="color: white;text-align: center;">Search for a Person</h2>
                        <input type="text" placeholder="Search.."><br><br><br><br>
                        <input style="background-color: white;color: black;height: 25%;" type="text" id="text" name="email"><br><br>
                        <br><br><br><br><br><br><br><br>
                    </div>
             </form>
             <div>
           </section>
        </main><br><br><br><br><br><br><br><br><br>
        <footer>
            <h5 style="padding: 2%;color: white;text-align: center;">©️ Team COVAR</h5>
        </footer>
    </body>
</html>