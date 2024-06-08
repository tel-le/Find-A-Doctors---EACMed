<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="3600; url=logout.php"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href = "../Assets/Images/EACMC_LOGO 1.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="../Assets/CSS_Public.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="../Assets/CSS_Admin.css?ver=<?php echo time();?>">
  <title>EACMed - Admin</title>
</head>
<body>
  <div class="AdminDiv">
    <section class="AdminSidebar">
      <div class="AdminSidebarDiv1">
        <div class="AdminSidebarDiv1IMG"><img src="../Assets/Images/EACMed Logo.png" alt=""></div>
      </div>
      <div class="AdminSidebarDiv2">
        <ul>
          <li class="Sidebar_Focus SBFocus1 Sidebar_Active" onclick="BTNDashboard()"><?php include "../Assets/SVG/dashboard.svg"?>  Dashboard</li>
          <li class="Sidebar_Focus SBFocus2 " onclick="BTNDoctors()"> <?php include "../Assets/SVG/clinical_notes.svg"?> Doctors</li>
          <li class="Sidebar_Focus SBFocus3 " onclick="BTNAccounts()"> <?php include "../Assets/SVG/person_FILL0.svg"?> Accounts</li> 
          <li class="Sidebar_Focus SBFocus4 " onclick="BTNActivity()"> <?php include "../Assets/SVG/document_scanner.svg"?> Activity Logs</li> 
          <li class="Sidebar_Focus SBFocus5 " onclick="BTNArchive()"> <?php include "../Assets/SVG/archive.svg"?> Archives</li> 
        </ul>
      </div>
      <div class="AdminSidebarDiv3">
        <button class="Btn_1"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
      </div>
    </section>

    <section class="AdminMain">
      <!-- Dashboard -->
      <div class="AdminDashboard AdminMainDiv">
        <div class="AdminDashboard-Header">
          <h4>DASHBOARD</h4>
          <div class="AdminDashboard-Profile-Box">
            <p>Welcome Admin</p>
            <div class="AdminDashboard-Profile-Box-Circle"></div>
          </div>
        </div>

        <div class="AdminDashboard-Container">
          <div class="AdminDashboard-Panel">
            <div class="AdminDashboard-Panel-Div AdminDashboard-Box1">
              <div class="Dashboard-Box-Ch Dashboard-Box1-Ch">
                <div class="Dashboard-Box-Total">
                  <p>Total Doctors</p>
                  <h2><i class="fa-solid fa-user-doctor"></i> 1,000</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total Active Doctors</p>
                  <h2><i class="fa-solid fa-user-large"></i> 700</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total Inactive Doctors</p>
                  <h2><i class="fa-solid fa-user-large-slash"></i> 300</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total Admins</p>
                  <h2><i class="fa-solid fa-user-tie"></i> 10</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total Visiting Consultation</p>
                  <h2><i class="fa-solid fa-user-nurse"></i> 50</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total Regular Consultation</p>
                  <h2><i class="fa-solid fa-hospital-user"></i> 100</h2>
                </div>
                <div class="Dashboard-Box-Total">
                  <p>Total HMOs</p>
                  <h2><i class="fa-solid fa-briefcase"></i> 420</h2>
                </div>
              </div>
              <div class="Dashboard-Box-Ch Dashboard-Box2-Ch">
                <div class="Dashboard-Box2-Header">
                  <h4>Chart</h4>
                </div>
                <div class="Dashboard-Box2-Chart">
                    <div class="">
                      <h4>TOP 5 Specification</h4>
                      <div id="DIV">
                        <div id="chart"></div>
                      </div>
                    </div>
                    <div class="">
                      <h4>TOP 5 HMO</h4>
                      <div id="chart2"></div>
                    </div>
                </div>
              </div>
            </div>
            <div class="AdminDashboard-Panel-Div AdminDashboard-Box2">
              <div class="Dashboard-Table Dashboard-Table1">
                <div class="Dashboard-Table-Header">
                  <h4>HMOs</h4>
                  <p>See More <i class="fa-solid fa-angle-right"></i></p>
                </div>
                <table>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Healthway Medi-Access</td>
                    <td>232</td>
                  </tr>
                </table>
              </div>
              <div class="Dashboard-Table Dashboard-Table2">
                <div class="Dashboard-Table-Header">
                  <h4>Specialization</h4>
                  <p>See More <i class="fa-solid fa-angle-right"></i></p>
                </div>
                <table>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                </table>
              </div>
              <div class="Dashboard-Table Dashboard-Table2">
                <div class="Dashboard-Table-Header">
                  <h4>Sub Specialization</h4>
                  <p>See More <i class="fa-solid fa-angle-right"></i></p>
                </div>
                <table>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>Obstetrics & Gynecology</td>
                    <td>232</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Doctors -->
      <div class="DoctorsDiv AdminMainDiv">
        <div class="MainDiv-Header">
          <div class="">
            <h4>Doctor</h4>
          </div>

          <div class="MainDiv-Header-Right">
            <button class="Btn_1"><i class="fa-solid fa-plus"></i> Add Doctor</button>
            <div class="InputText3">
              <input type="text" placeholder="Search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
        </div>
        <div class="MainDiv-Main DoctorsDiv-Main">


          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Specialization</td>
                <td>Secretary</td>
                <td>Room</td>
                <td>HMO</td>
                <td>Status</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>France</td>
                <td>Internal Medicine</td>
                <td>Sophia Marie L. Cruz</td>
                <td>2nd Floor - Room 2408</td>
                <td>78</td>
                <td>Active</td>
                <td><button class="Btn_1">View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Accounts -->
      <div class="AccountsDiv AdminMainDiv">
        <h4>Accounts</h4>
      </div>
      <!-- Activity Logs -->
      <div class="ActivityLogs AdminMainDiv">
        <h4>Activity Logs</h4>
      </div>
      <!-- Archives -->
      <div class="ArchivesDiv AdminMainDiv">
        <h4>Archives Logs</h4>
      </div>
    </section>
  </div>
<script type="text/javascript" src="../Assets/JS_Admin.js?ver=<?php echo time();?>"></script>
</body>
</html>

