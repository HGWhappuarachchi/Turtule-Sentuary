<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="   Style/Dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
<!-- Sidebar begins -->
        <div class="sidebar">
          <div class="logo">
            <ul class="menu">
              <li class="active">
                <a href="Dashboard.php">
                  <i class="fas fa-home"></i>
                  <span>Home</span>
                </a>
              </li>
              <li>
                <a href="Sensor.php">
                  <i class="fas fa-tachometer-alt"></i>
                  <span>Sensors</span>
                </a>
              </li>
              <li>
                <a href="DataInput.php">
                  <i class="fas fa-download"></i>
                  <span>Data Input</span>
                </a>
              </li>
              <li>
                <a href="Tables.php">
                  <i class="fas fa-chart-bar"></i>
                  <span>Data Output</span>
                </a>
              </li>
              <li class="logout">
                <a href="Welcome.php">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
<!-- Sidebar ends -->
<!-- Main Content begins -->
   <div class="main-content">
          <div class="header-wrapper">
            <div class="header-title">
              <span>Home</span>
              <h2>Dashboard</h2>
            </div>
            <div class="user-info">
              <div class="search-box">
                <i class="fa-solid fa-search-alt"></i>
                <input type="text" placeholder="Search...">
              </div>
              <img src="/Images/bluett.jpg" alt="">
            </div>
            </div>
<!-- Year Cards begin -->
            <div class="card-container">
              <h1 class="main-title">Last Year's Numbers</h1>
              <div class="card-wrapper">
                <div class="turtle-card">
                  <div class="card-header">
                    <div class="ammount">
                      <span class="title">
                        Released Turtles
                      </span>
                      <span class="ammount-value">
                        1000
                      </span>
                    </div>
                  </div>
                </div>
                <div class="percentage-card">
                  <div class="card-header">
                    <div class="ammount">
                      <span class="title">
                        Survival Rate
                      </span>
                      <span class="ammount-value">
                        100%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!-- Year Cards end -->
<!-- Sensor Cards begin -->
            <div class="sensor-card-container">
              <h1 class="main-title">Sensor Data</h1>
              <div class="sensor-card-wrapper">
                <div class="sensor01-card">
                  <div class="card-header">
                    <div class="ammount">
                      <span class="sensor-title">
                        Sensor 01 Data
                      </span>
                      <span class="ammount-value">
                        20
                      </span>
                    </div>
                  </div>
                </div>
                <div class="sensor02-card">
                  <div class="card-header">
                    <div class="ammount">
                      <span class="sensor-title">
                        Sensor 02 Data
                      </span>
                      <span class="ammount-value">
                        50
                      </span>
                    </div>
                  </div>
                </div>
                <div class="sensor03-card">
                  <div class="card-header">
                    <div class="ammount">
                      <span class="sensor-title">
                        Sensor 03 Data
                      </span>
                      <span class="ammount-value">
                        10
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!-- Sensor Cards end -->
<!--water quality card begin -->
<div class="water-card-container">
  <h1 class="main-title">Status in all Tanks</h1>
  <div class="water-card-wrapper">
    <div class="water-card">
      <div class="card-header">
        <div class="ammount">
          <span class="water-title">
            Water Quality
          </span>
          <span class="quality-value">
            GOOD
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--water quality card end -->

          </div>
        </div>
  </body>
</html> 