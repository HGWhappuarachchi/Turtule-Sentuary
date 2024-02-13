<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="Style/Sensor.css">
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
              <span>Sensors</span>
              <h2>Readings with Tables</h2>
            </div>
            <div class="user-info">
              <div class="search-box">
                <i class="fa-solid fa-search-alt"></i>
                <input type="text" placeholder="Search...">
              </div>
              <img src="/Images/bluett.jpg" alt="">
            </div>
            </div>
<!--First sensor card-->
          <div class="tabular-wrapper">
            <h3 class="main-title">Sensor 01</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Readings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00 p.m.</td>
                        <td>25</td>
                        </tr>
                        <tr>
                            <td>12:00 p.m.</td>
                        <td>25</td>
                        </tr>
                        <tr>
                            <td>12:00 p.m.</td>
                        <td>25</td>
                        </tr>
                    </tbody>
                </table>
                <div class="sensor-card">
                    <div class="card-header">
                      <div class="ammount">
                        <span class="title">
                          Average
                        </span>
                        <span class="ammount-value">
                          25
                        </span>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
<!--First sensor ends-->
<!--Second sensor card-->
            <div class="tabular-wrapper">
                <h3 class="main-title">Sensor 02</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Readings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sensor-card">
                        <div class="card-header">
                        <div class="ammount">
                            <span class="title">
                            Average
                            </span>
                            <span class="ammount-value">
                            25
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
          </div>
<!--Second sensor ends-->
<!--Third sensor card-->
            <div class="tabular-wrapper">
                <h3 class="main-title">Sensor 03</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Readings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.</td>
                            <td>25</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sensor-card">
                        <div class="card-header">
                        <div class="ammount">
                            <span class="title">
                            Average
                            </span>
                            <span class="ammount-value">
                            25
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
<!--Third sensor ends-->


        </div>
<!-- Main content ends-->
  </body>
</html>