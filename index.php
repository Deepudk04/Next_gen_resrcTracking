<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Employee Dashboard</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="admin.png">
                            <span class="nav-iten">Admin</span>
                        </a>
                    </li>
                    <li><a href="#">
                        <i class="fas fa-menorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a> </li>
                    <li><a href="#">
                        <i class="fas fa-comment"></i>
                        <span class="nav-item">Message</span>
                    </a> </li>
                    <li><a href="#">
                        <i class="fas fa-database"></i>
                        <span class="nav-item">Report</span>
                    </a> </li>
                    <li><a href="#">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Attendance</span>
                    </a> </li>
                    <li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a> </li>
                    <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Sign out</span>
                    </a> </li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1 align="center">DASHBOARD</h1>
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="users">
                    <div class="card">
                        <img src="deepak.jpeg">
                        <h4>Deepak kumar</h4><br>
                        <p>Backend Developer</p>
                        <div class="per">
                            <!--<table>
                                <tr>
                                <td><span>85%</span></td>
                                    <td><span>87%</span></td>
                                </tr>-->
                                <!--<tr>
                                    <td><span>Month</span></td>
                                    <td><span>Year</span></td>
                                </tr>
                            </table>-->
                        </div>
                        <button>Profile</button>
                    </div>
                    <div class="card">
                        <img src="srinithi.jpeg">
                        <h4>srinithi</h4><br>
                        <p> RPA Developer</p>
                        <div class="per">
                            <!--<table>
                                <tr>
                                <td><span>85%</span></td>
                                    <td><span>87%</span></td>
                                </tr>-->
                                <!--<tr>
                                    <td><span>Month</span></td>
                                    <td><span>Year</span></td>
                                </tr>
                            </table>-->
                        </div>
                        <button>Profile</button>
                    </div>
                    <div class="card">
                        <img src="sneha.jpeg">
                        <h4>SnehaPrabha</h4><br>
                        <p> Security Analyst</p>
                        <div class="per">
                            <!--<table>
                                <tr>
                                <td><span>85%</span></td>
                                    <td><span>87%</span></td>
                                </tr>-->
                                <!--<tr>
                                    <td><span>Month</span></td>
                                    <td><span>Year</span></td>
                                </tr>
                            </table>-->
                        </div>
                        <button>Profile</button>
                    </div>
                    <div class="card">
                        <img src="varshini.jpeg">
                        <h4>Varshini</h4><br>
                        <p> Frontend Developer</p>
                        <div class="per">
                            <!--<table>
                                <tr>
                                <td><span>85%</span></td>
                                    <td><span>87%</span></td>
                                </tr>-->
                                <!--<tr>
                                    <td><span>Month</span></td>
                                    <td><span>Year</span></td>
                                </tr>
                            </table>-->
                        </div>
                        <button>Profile</button>
                    </div>
                    <div class="card">
                        <img src="senthil.jpeg">
                        <h4>Senthilnayaki</h4><br>
                        <p> Full Stack Developer</p>
                        <div class="per">
                            <!--<table>
                                <tr>
                                <td><span>85%</span></td>
                                    <td><span>87%</span></td>
                                </tr>-->
                                <!--<tr>
                                    <td><span>Month</span></td>
                                    <td><span>Year</span></td>
                                </tr>
                            </table>-->
                        </div>
                        <button>Profile</button>
                    </div>
                    <div>
                        
                    </div>
                </div>
                <div class="users">
                 <div>   
                <?php
$conn=mysqli_connect("localhost","root","12345","charts");
// if($conn)
// {
//     //echo "connected";
// }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
          ['student', 'contribution'],
          <?php
          $sql="SELECT * FROM contribution";
          $fire=mysqli_query($conn,$sql);
          while($result=mysqli_fetch_assoc($fire))
          {
            echo "['" .$result['student']."',".$result['contribution']."],";

          }
          ?>
        ]);
        var options = 
        {
          title: 'Students and contribution',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 500px; height: 350px;"></div>
  </body>
</html>
</div><br><br>
<div>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['student', 'contribution'],
          <?php
          $sql="SELECT * FROM contribution";
          $fire=mysqli_query($conn,$sql);
          while($result=mysqli_fetch_assoc($fire))
          {
            echo "['" .$result['student']."',".$result['contribution']."],";

          }
          ?>
        ]);

        var options = {
          title: 'Overall Performance',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Overall Performance'},
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 500px; height: 350px;"></div>
  </body>
</html>

</div>
</div>

            </section>
        </div>
    </body>
</html>