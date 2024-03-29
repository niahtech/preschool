<?php include 'libs/connection.inc.php' ?>
<?php
// if (!isset($_SESSION['id'])) {
//     header('location:loginAdmin.php');
// }
?>
<?php
$sql = $db->query("SELECT DISTINCT session FROM bio");
$result = mysqli_fetch_all($sql);
// var_dump($result);

for ($i = 0; $i < count($result); $i++) {
   $section = ($result[$i][0]);
   // echo $section;
   $check = $db->query("SELECT gender,session FROM bio WHERE session='$section' AND gender='male'");
   $male[] = mysqli_num_rows($check);
   $explode_year = explode('/', $section);
   $year[] = $explode_year[0];
}

for ($i = 0; $i < count($result); $i++) {
   $section = ($result[$i][0]);
   // echo $section;
   $check = $db->query("SELECT gender,session FROM bio WHERE session='$section' AND gender='female'");
   $Female[] = mysqli_num_rows($check);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <title>Preskool - Dashboard</title>
   <link rel="shortcut icon" href="assets/img/favicon.png">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
   <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <div class="main-wrapper">
      <?php include 'admin-sidebar.php' ?>
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row">
                  <div class="col-sm-12">
                     <h3 class="page-title">Welcome Admin!</h3>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-sm-6 col-12 d-flex">
                  <div class="card bg-one w-100">
                     <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                           <div class="db-icon">
                              <i class="fas fa-user-graduate"></i>
                           </div>
                           <div class="db-info">
                              <h3><?php echo countAllStudents() ?></h3>
                              <h6>Students</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12 d-flex">
                  <div class="card bg-two w-100">
                     <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                           <div class="db-icon">
                              <i class="fas fa-crown"></i>
                           </div>
                           <div class="db-info">
                              <h3><?php echo countAllDepartments() ?></h3>
                              <h6>Department</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12 d-flex">
                  <div class="card bg-three w-100">
                     <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                           <div class="db-icon">
                              <i class="fas fa-building"></i>
                           </div>
                           <div class="db-info">
                              <h3><?php echo countAllStudents() ?></h3>
                              <h6>Lecturers</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12 d-flex">
                  <div class="card bg-four w-100">
                     <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                           <div class="db-icon">
                              <i class="fas fa-file-invoice-dollar"></i>
                           </div>
                           <div class="db-info">
                              <h3><?php echo countLevel() ?></h3>
                              <h6>Level</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- <div class="col-md-12 col-lg-6">
                  <div class="card-header">
                     <h5 class="card-title">Star Students</h5>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-hover table-center">
                           <thead class="thead-light">
                              <tr>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th class="text-center">Marks</th>
                                 <th class="text-center">Percentage</th>
                                 <th class="text-right">Year</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="text-nowrap">
                                    <div>PRE2209</div>
                                 </td>
                                 <td class="text-nowrap">John Smith</td>
                                 <td class="text-center">1185</td>
                                 <td class="text-center">98%</td>
                                 <td class="text-right">
                                    <div>2019</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-nowrap">
                                    <div>PRE1245</div>
                                 </td>
                                 <td class="text-nowrap">Jolie Hoskins</td>
                                 <td class="text-center">1195</td>
                                 <td class="text-center">99.5%</td>
                                 <td class="text-right">
                                    <div>2018</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-nowrap">
                                    <div>PRE1625</div>
                                 </td>
                                 <td class="text-nowrap">Pennington Joy</td>
                                 <td class="text-center">1196</td>
                                 <td class="text-center">99.6%</td>
                                 <td class="text-right">
                                    <div>2017</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-nowrap">
                                    <div>PRE2516</div>
                                 </td>
                                 <td class="text-nowrap">Millie Marsden</td>
                                 <td class="text-center">1187</td>
                                 <td class="text-center">98.2%</td>
                                 <td class="text-right">
                                    <div>2016</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="text-nowrap">
                                    <div>PRE2209</div>
                                 </td>
                                 <td class="text-nowrap">John Smith</td>
                                 <td class="text-center">1185</td>
                                 <td class="text-center">98%</td>
                                 <td class="text-right">
                                    <div>2015</div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div> -->
               <div class="col-md-12 col-lg-6">
                  <div class="card card-chart">
                     <div class="card-header">
                        <div class="row align-items-center">
                           <div class="col-6">
                              <h5 class="card-title">Number of Students</h5>
                           </div>
                           <div class="col-6">
                              <ul class="list-inline-group text-right mb-0 pl-0">
                                 <li class="list-inline-item">
                                    
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="bar"></div>
                     </div>
                  </div>
               </div>
            </div>
      
         
         </div>
      </div>
   </div>
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
   <script src="assets/plugins/apexchart/chart-data.js"></script>
   <script>
      // Bar chart

      if ($('#bar').length > 0) {
         var optionsBar = {
            chart: {
               type: 'bar',
               height: 350,
               width: '100%',
               stacked: true,
               toolbar: {
                  show: false
               },
            },
            dataLabels: {
               enabled: false
            },
            plotOptions: {
               bar: {
                  columnWidth: '45%',
               }
            },
            series: [{
               name: "Males",
               color: '#fdbb38',
               data: <?php echo json_encode($male) ?>,

            }, {
               name: "Females",
               color: '#19affb',
               data: <?php echo json_encode($Female) ?>,
            }],
            labels: <?php echo json_encode($year) ?>,
            xaxis: {
               labels: {
                  show: false
               },
               axisBorder: {
                  show: false
               },
               axisTicks: {
                  show: false
               },
            },
            yaxis: {
               axisBorder: {
                  show: false
               },
               axisTicks: {
                  show: false
               },
               labels: {
                  style: {
                     colors: '#777'
                  }
               }
            },
            title: {
               text: '',
               align: 'left',
               style: {
                  fontSize: '18px'
               }
            }

         }

         var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
         chartBar.render();
      }
   </script>
   <script src="assets/js/script.js"></script>
</body>

</html>