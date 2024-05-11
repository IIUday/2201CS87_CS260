<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $sql1 =mysqli_query($con,"SELECT * FROM acaddetails WHERE id = $id");
 $sql2 =mysqli_query($con,"SELECT * FROM degreedetails WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 $reg = mysqli_fetch_array($sql1);
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Academic Details</title>
  <link rel="stylesheet" type="text/css" href="./Academic Details_files/favicon.ico">
  <link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./Academic Details_files/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./Academic Details_files/bootstrap-datepicker.css">
  <script type="text/javascript" src="./Academic Details_files/jquery.js.download"></script>
  <script type="text/javascript" src="./Academic Details_files/bootstrap.js.download"></script>
  <script type="text/javascript" src="./Academic Details_files/bootstrap-datepicker.js.download"></script>

  <link href="./Academic Details_files/css" rel="stylesheet">
  <link href="./Academic Details_files/css(1)" rel="stylesheet">
  <link href="./Academic Details_files/css(2)" rel="stylesheet">
  <link href="./Academic Details_files/css(3)" rel="stylesheet">
  <link href="./Academic Details_files/css(4)" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="./Academic Details_files/css2" rel="stylesheet">



  <style type="text/css">
    body {
      background-color: lightgray;
      padding-top: 0px !important;
    }
  </style>
</head>

<body>
  <div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px;">
    <div class="container">
      <div class="row" style="margin-bottom:10px; ">
        <div class="col-md-8 col-md-offset-2">

          <!--  <img src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/IITIndorelogo.png" alt="logo1" class="img-responsive" style="padding-top: 5px; height: 120px; float: left;"> -->

          <h3
            style="text-align:center;color:#414002!important;font-weight: bold;font-size: 2.3em; margin-top: 3px; font-family: &#39;Noto Sans&#39;, sans-serif;">
            भारतीय प्रौद्योगिकी संस्थान पटना</h3>
          <h3
            style="text-align:center;color: #414002!important;font-weight: bold;font-family: &#39;Oswald&#39;, sans-serif!important;font-size: 2.2em; margin-top: 0px;">
            Indian Institute of Technology Patna</h3>


        </div>



      </div>
      <!-- <h3 style="text-align:center; color: #414002; font-weight: bold;  font-family: 'Fjalla One', sans-serif!important; font-size: 2em;">Application for Academic Appointment</h3> -->
    </div>
  </div>
  <h3
    style="color: rgb(225, 4, 37); margin-bottom: 20px; font-weight: bold; text-align: center; font-family: &quot;Noto Serif&quot;, serif; opacity: 0.295675;"
    class="blink_me">Application for Faculty Position</h3>


  <script type="text/javascript">
    var tr = "";
    var counter_acde = 0;
    $(document).ready(function () {
      $("#add_more_acde").click(function () {
        create_tr();
        create_input('add_degree[]', 'Degree', 'add_degree' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_college[]', 'College', 'add_college' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_subjects[]', 'Subjects', 'add_subjects' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_yoj[]', 'Year Of Joining', 'add_yoj' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_yog[]', 'Year Of Graduation', 'add_yog' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_duration[]', 'Duration', 'add_duration' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_perce[]', 'Percentage', 'add_perce' + counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_rank[]', 'Rank', 'add_rank' + counter_acde, 'acde', counter_acde, 'acde', true);
        counter_acde++;
        return false;
      });

    });

    function create_tr() {
      tr = document.createElement("tr");
    }
    function for_date_picker(obj) {
      obj.setAttribute("data-provide", "datepicker");
      obj.className += " datepicker";
      return obj;

    }
    function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn = false, datepicker_set = false, length = 80) {
      var input = document.createElement("input");
      input.setAttribute("type", "text");
      input.setAttribute("name", t_name);
      input.setAttribute("id", id);
      input.setAttribute("placeholder", place_value);
      input.setAttribute("class", "form-control input-md");
      input.setAttribute("required", "");
      if (datepicker_set == true) {
        input = for_date_picker(input);
      }
      var td = document.createElement("td");
      td.appendChild(input);
      if (btn == true) {
        // alert();
        var but = document.createElement("button");
        but.setAttribute("class", "close");
        but.setAttribute("onclick", "remove_row('" + remove_name + "','" + counter + "')");
        but.innerHTML = "<span style='color:red; font-weight:bold;'>x</span>";
        td.appendChild(but);
      }
      tr.setAttribute("id", "row" + counter);
      tr.appendChild(td);
      document.getElementById(tbody_id).appendChild(tr);
      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
      });
    }
    function remove_row(remove_name, n) {
      var tab = document.getElementById(remove_name);
      var tr = document.getElementById("row" + n);
      tab.removeChild(tr);
    }
  </script>

  <script type="text/javascript">
    $(function () {
      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
      });
    });
    function logout() {
    // Clear session variables
    sessionStorage.clear();

    // Redirect to Home_Page.php
    document.location = 'logout.php';
}
function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
  </script>
  <style type="text/css">
    body {
      padding-top: 30px;
    }

    .form-control {
      margin-bottom: 10px;
    }

    .floating-box {
      display: inline-block;
      width: 150px;
      height: 75px;
      margin: 10px;
      border: 3px solid #73AD21;
    }
  </style>
  <style type="text/css">
    body {
      padding-top: 30px;
    }

    .form-control {
      margin-bottom: 10px;
    }

    label {
      padding: 0 !important;
    }

    hr {
      border-top: 1px solid #025198 !important;
    }

    span {
      font-size: 1.2em;
      font-family: 'Oswald', sans-serif !important;
      text-align: left !important;
      padding: 0px 10px 0px 0px !important;
      /*margin-bottom: 20px!important;*/

    }

    hr {
      border-top: 1px solid #025198 !important;
      border-style: dashed !important;
      border-width: 1.2px;
    }

    .panel-heading {
      font-size: 1.3em;
      font-family: 'Oswald', sans-serif !important;
      letter-spacing: .5px;
    }

    .btn-primary {
      padding: 9px;
    }
  </style>





  <div class="container">




    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 well">
        <form class="form-horizontal" action="savepage2.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ci_csrf_token" value="">
          <fieldset>

            <legend>
              <div class="row">
                <div class="col-md-10">
                <h4>Welcome : <font color="#025198"><strong> <?php echo htmlspecialchars($user['FirstName']); ?>&nbsp;<?php echo htmlspecialchars($user['LastName']); ?></strong></font></h4>
                  </h4>
                </div>
                <div class="col-md-2">
                  <a onclick="logout()"
                    class="btn btn-sm btn-success  pull-right">Logout</a>
                </div>
              </div>


            </legend>

            <h4 style="text-align:center; font-weight: bold; color: #6739bb;">2. Educational Qualifications</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">(A) Details of PhD *</div>
                  <div class="panel-body">

                    <span class="col-md-2 control-label" for="college_phd">University/Institute</span>
                    <div class="col-md-4">
                      <input id="college_phd" value="<?php if(isset($reg['university'])) echo htmlspecialchars($reg['university']); ?>" name="college_phd" type="text"
                        placeholder="University/Institute" class="form-control input-md" autofocus="" required="">
                    </div>

                    <span class="col-md-2 control-label" for="stream">Department</span>
                    <div class="col-md-4">
                      <input id="stream" value="<?php if(isset($reg['department'])) echo htmlspecialchars($reg['department']); ?>" name="stream" type="text" placeholder="Department"
                        class="form-control input-md" autofocus="">
                    </div>

                    <span class="col-md-2 control-label" for="duration_phd">Name of PhD Supervisor</span>
                    <div class="col-md-4">
                      <input id="supervisor" name="supervisor" type="text" placeholder="Name of Ph. D. Supervisor"
                        value="<?php if(isset($reg['phdSupervisor'])) echo htmlspecialchars($reg['phdSupervisor']); ?>" class="form-control input-md"
                        required="">
                    </div>

                    <span class="col-md-2 control-label" for="yoj_phd">Year of Joining</span>
                    <div class="col-md-4">
                      <input id="yoj_phd" value="<?php if(isset($reg['yearOfJoining'])) echo htmlspecialchars($reg['yearOfJoining']); ?>" name="yoj_phd" type="text" placeholder="Year of Joining"
                        class="form-control input-md" required="">
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <span class="col-md-2 control-label" for="dod_phd">Date of Successful Thesis Defence</span>
                        <div class="col-md-4">
                          <input id="dod_phd" name="dod_phd" type="text" data-provide="datepicker"
                            placeholder="Date of Defence" value="<?php if(isset($reg['dateOfThesis'])) echo htmlspecialchars($reg['dateOfThesis']); ?>" class="form-control input-md datepicker"
                            required="">
                        </div>

                        <span class="col-md-2 control-label" for="doa_phd">Date of Award</span>
                        <div class="col-md-4">
                          <input id="doa_phd" name="doa_phd" type="text" data-provide="datepicker"
                            placeholder="Date of Award" value="<?php if(isset($reg['dateOfAward'])) echo htmlspecialchars($reg['dateOfAward']); ?>" class="form-control input-md datepicker"
                            required="">
                        </div>
                      </div>
                    </div>
                    <br>
                    <span class="col-md-2 control-label" for="phd_title">Title of PhD Thesis</span>
                    <div class="col-md-10">
                      <input id="phd_title" value="<?php if(isset($reg['titleOfThesis'])) echo htmlspecialchars($reg['titleOfThesis']); ?>" name="phd_title" type="text"
                        placeholder="Title of PhD Thesis" class="form-control input-md" required="">
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">(B) Academic Details - M. Tech./ M.E./ PG Details</div>
                  <div class="panel-body">

                    <span class="col-md-2 control-label" for="pg_degree">Degree/Certificate</span>
                    <div class="col-md-4">
                      <input id="pg_degree" value="<?php if(isset($reg['pg_deg'])) echo htmlspecialchars($reg['pg_deg']); ?>" name="pg_degree" type="text"
                        placeholder="Degree/Certificate" class="form-control input-md" autofocus="">
                    </div>

                    <span class="col-md-2 control-label" for="pg_college">University/Institute</span>
                    <div class="col-md-4">
                      <input id="pg_college" value="<?php if(isset($reg['pg_uni'])) echo htmlspecialchars($reg['pg_uni']); ?>"
                        name="pg_college" type="text" placeholder="University/Institute" class="form-control input-md"
                        autofocus="">
                    </div>

                    <span class="col-md-2 control-label" for="pg_subjects">Branch/Stream</span>
                    <div class="col-md-4">
                      <input id="pg_subjects" name="pg_subjects" type="text" placeholder="Branch/Stream"
                        value="<?php if(isset($reg['pg_branch'])) echo htmlspecialchars($reg['pg_branch']); ?>" class="form-control input-md">
                    </div>

                    <span class="col-md-2 control-label" for="pg_yoj">Year of Joining</span>
                    <div class="col-md-4">
                      <input id="pg_yoj" value="<?php if(isset($reg['pg_yoj'])) echo htmlspecialchars($reg['pg_yoj']); ?>"
                        name="pg_yoj" type="text" placeholder="Year of Joining" class="form-control input-md">
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <span class="col-md-2 control-label" for="pg_yog">Year of Completion</span>
                        <div class="col-md-4">
                          <input id="pg_yog" name="pg_yog" type="text" placeholder="Year of Completion"
                            value="<?php if(isset($reg['pg_yoc'])) echo htmlspecialchars($reg['pg_yoc']); ?>" class="form-control input-md">
                        </div>

                        <span class="col-md-2 control-label" for="pg_duration">Duration (in years)</span>
                        <div class="col-md-4">
                          <input id="pg_duration" name="pg_duration" type="text" placeholder="Duration" value="<?php if(isset($reg['pg_duration'])) echo htmlspecialchars($reg['pg_duration']); ?>"
                            class="form-control input-md">
                        </div>

                        <span class="col-md-2 control-label" for="pg_perce">Percentage/ CGPA</span>
                        <div class="col-md-4">
                          <input id="pg_perce" name="pg_perce" type="text" placeholder="Percentage/ CGPA"
                            value="<?php if(isset($reg['pg_cgpa'])) echo htmlspecialchars($reg['pg_cgpa']); ?>" class="form-control input-md">
                        </div>

                        <span class="col-md-2 control-label" for="pg_rank">Division/Class</span>
                        <div class="col-md-4">
                          <input id="pg_rank" name="pg_rank" type="text" placeholder="Division/Class"
                            value="<?php if(isset($reg['pg_div'])) echo htmlspecialchars($reg['pg_div']); ?>"
                            class="form-control input-md">
                        </div>

                      </div>
                    </div>
                    <br>


                  </div>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">(C) Academic Details - B. Tech /B.E. / UG Details *</div>
                  <div class="panel-body">

                    <span class="col-md-2 control-label" for="ug_degree">Degree/Certificate</span>
                    <div class="col-md-4">
                      <input id="ug_degree" value="<?php if(isset($reg['ug_deg'])) echo htmlspecialchars($reg['ug_deg']); ?>" name="ug_degree" type="text"
                        placeholder="Degree/Certificate" class="form-control input-md" autofocus="" required="">
                    </div>

                    <span class="col-md-2 control-label" for="ug_college">University/Institute</span>
                    <div class="col-md-4">
                      <input id="ug_college"
                        value="<?php if(isset($reg['ug_uni'])) echo htmlspecialchars($reg['ug_uni']); ?>"
                        name="ug_college" type="text" placeholder="University/Institute" class="form-control input-md"
                        autofocus="">
                    </div>

                    <span class="col-md-2 control-label" for="ug_subjects">Branch/Stream</span>
                    <div class="col-md-4">
                      <input id="ug_subjects" name="ug_subjects" type="text" placeholder="Branch/Stream"
                        value="<?php if(isset($reg['ug_branch'])) echo htmlspecialchars($reg['ug_branch']); ?>" class="form-control input-md" required="">
                    </div>

                    <span class="col-md-2 control-label" for="ug_yoj">Year of Joining</span>
                    <div class="col-md-4">
                      <input id="ug_yoj" value="<?php if(isset($reg['ug_yoj'])) echo htmlspecialchars($reg['ug_yoj']); ?>" name="ug_yoj"
                        type="text" placeholder="Year of Joining" class="form-control input-md" required="">
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <span class="col-md-2 control-label" for="ug_yog">Year of Completion</span>
                        <div class="col-md-4">
                          <input id="ug_yog" name="ug_yog" type="text" placeholder="Year of Completion"
                            value="<?php if(isset($reg['ug_yoc'])) echo htmlspecialchars($reg['ug_yoc']); ?>" class="form-control input-md" required="">
                        </div>

                        <span class="col-md-2 control-label" for="ug_duration">Duration (in years)</span>
                        <div class="col-md-4">
                          <input id="ug_duration" name="ug_duration" type="text" placeholder="Duration" value="<?php if(isset($reg['ug_duration'])) echo htmlspecialchars($reg['ug_duration']); ?>"
                            class="form-control input-md" required="">
                        </div>

                        <span class="col-md-2 control-label" for="ug_perce">Percentage/ CGPA</span>
                        <div class="col-md-4">
                          <input id="ug_perce" name="ug_perce" type="text" placeholder="Percentage/ CGPA"
                            value="<?php if(isset($reg['ug_cgpa'])) echo htmlspecialchars($reg['ug_cgpa']); ?>" class="form-control input-md" required="">
                        </div>

                        <span class="col-md-2 control-label" for="ug_rank">Division/Class</span>
                        <div class="col-md-4">
                          <input id="ug_rank" name="ug_rank" type="text" placeholder="Division/Class"
                            value="<?php if(isset($reg['ug_div'])) echo htmlspecialchars($reg['ug_div']); ?>" class="form-control input-md"
                            required="">
                        </div>



                      </div>
                    </div>
                    <br>


                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">(D) Academic Details - School *

                  </div>
                  <div class="panel-body">
                    <table class="table table-bordered">

                      <tbody>
                        <tr height="30px">
                          <th class="col-md-3"> 10th/12th/HSC/Diploma </th>
                          <th class="col-md-3"> School </th>
                          <th class="col-md-1"> Year of Passing</th>
                          <th class="col-md-2"> Percentage/ Grade </th>
                          <th class="col-md-2"> Division/Class </th>
                        </tr>


                        <tr height="60px">
                          <td class="col-md-2">
                            <input id="hsc_ssc1" name="hsc_ssc1" type="text" value="12th/HSC/Diploma" placeholder=""
                              class="form-control input-md" readonly="" required="">
                          </td>

                          <td class="col-md-2">
                            <input id="school1" name="school1" type="text" value="<?php if(isset($reg['school12th'])) echo htmlspecialchars($reg['school12th']); ?>"
                              placeholder="School" class="form-control input-md" maxlength="80" required="">
                          </td>
                          <td class="col-md-2">
                            <input id="passing_year1" name="passing_year1" type="text" value="<?php if(isset($reg['yearOfPass12th'])) echo htmlspecialchars($reg['yearOfPass12th']); ?>"
                              placeholder="Passing Year" class="form-control input-md" maxlength="5" required="">
                          </td>



                          <td class="col-md-2">
                            <input id="s_perce1" name="s_perce1" type="text" value="<?php if(isset($reg['percentage12th'])) echo htmlspecialchars($reg['percentage12th']); ?>"
                              placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                          </td>


                          <td class="col-md-2">
                            <input id="s_rank1" name="s_rank1" type="text" value="<?php if(isset($reg['division12th'])) echo htmlspecialchars($reg['division12th']); ?>" placeholder="Division"
                              class="form-control input-md" maxlength="5" required="">
                          </td>


                        </tr>

                        <tr height="60px">
                          <td class="col-md-2">
                            <input id="hsc_ssc2" name="hsc_ssc2" type="text" value="10th" placeholder=""
                              class="form-control input-md" readonly="" required="">
                          </td>

                          <td class="col-md-2">
                            <input id="school2" name="school2" type="text"
                              value="<?php if(isset($reg['school10th'])) echo htmlspecialchars($reg['school10th']); ?>" placeholder="School"
                              class="form-control input-md" maxlength="80" required="">
                          </td>
                          <td class="col-md-2">
                            <input id="passing_year2" name="passing_year2" type="text" value="<?php if(isset($reg['yearOfPass10th'])) echo htmlspecialchars($reg['yearOfPass10th']); ?>"
                              placeholder="Passing Year" class="form-control input-md" maxlength="5" required="">
                          </td>



                          <td class="col-md-2">
                            <input id="s_perce2" name="s_perce2" type="text" value="<?php if(isset($reg['percentage10th'])) echo htmlspecialchars($reg['percentage10th']); ?>"
                              placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                          </td>


                          <td class="col-md-2">
                            <input id="s_rank2" name="s_rank2" type="text" value="<?php if(isset($reg['division12th'])) echo htmlspecialchars($reg['division12th']); ?>" placeholder="Division"
                              class="form-control input-md" maxlength="5" required="">
                          </td>


                        </tr>


                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">(E) Additional Educational Qualification (If any)
                    <button class="btn btn-sm btn-danger" id="add_more_acde">Add More</button>
                  </div>
                  <div class="panel-body">
                    <table class="table table-bordered">
                      <tbody id="acde">

                        <tr height="30px">
                          <th class="col-md-2"> Degree/Certificate </th>
                          <th class="col-md-2"> University/Institute </th>
                          <th class="col-md-2"> Branch/Stream </th>
                          <th class="col-md-1"> Year of Joining</th>
                          <th class="col-md-1"> Year of Completion </th>
                          <th class="col-md-1"> Duration (in years)</th>
                          <th class="col-md-3"> Percentage/ CGPA </th>
                          <th class="col-md-3"> Division/Class</th>
                        </tr>
                        
                        <?php
                              while ($row = mysqli_fetch_assoc($sql2)) {
                                
                                ?>
                                <tr height="60px">
                <td class="col-md-2">  
                    <input name="add_degree[]" type="text" value="<?php if(isset($row['degree'])) echo htmlspecialchars($row['degree']); ?>" placeholder="Degree" class="form-control input-md" maxlength="10" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input name="add_college[]" type="text" value="<?php if(isset($row['university'])) echo htmlspecialchars($row['university']); ?>" placeholder="College" class="form-control input-md" maxlength="80" required=""> 
                  </td>

                 <td class="col-md-2"> 
                    <input name="add_subjects[]" type="text" value="<?php if(isset($row['branch'])) echo htmlspecialchars($row['branch']); ?>" placeholder="Subjects" class="form-control input-md" maxlength="80" required=""> 
                  </td>

                <td class="col-md-2"> 
                  <input name="add_yoj[]" type="text" value="<?php if(isset($row['yearOfJoining'])) echo htmlspecialchars($row['yearOfJoining']); ?>" placeholder="Year of Joining" class="form-control input-md" maxlength="5" required=""> 
                </td>
                <td class="col-md-2"> 
                  <input name="add_yog[]"  type="text" value="<?php if(isset($row['yearOfCompletion'])) echo htmlspecialchars($row['yearOfCompletion']); ?>" placeholder="Year of Graduation" class="form-control input-md" maxlength="5" required=""> 
                </td>
                <td class="col-md-2"> 
                  <input name="add_duration[]"  type="text" value="<?php if(isset($row['duration'])) echo htmlspecialchars($row['duration']); ?>" placeholder="Duration" class="form-control input-md" maxlength="4" required=""> 
                </td>

                <td class="col-md-2"> 
                  <input name="add_perce[]"  type="text" value="<?php if(isset($row['cgpa'])) echo htmlspecialchars($row['cgpa']); ?>" placeholder="Percentage" class="form-control input-md" maxlength="5" required="">
                </td>

                <td class="col-md-2"> 
                  <input name="add_rank[]"  type="text" value="<?php if(isset($row['division'])) echo htmlspecialchars($row['division']); ?>" placeholder="Rank" class="form-control input-md" maxlength="5" required="">
                </td>
                
              </tr>
                        <?php
                              }
                        ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>


            <!-- Form Name -->



            <div class="form-group">

              <div class="col-md-1">
                <a href="page1.php"
                  class="btn btn-primary pull-left">PREV</a>
              </div>

              <div class="col-md-11">
                <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right"
                  style="margin-left: 75%;">SAVE &amp; NEXT</button>

              </div>


            </div>

          </fieldset>
        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    
    function yearcalc() {
      // alert('hi');
      var num1 = document.getElementById("yoj").value;
      var num2 = document.getElementById("yog").value;

      var duration_year = parseFloat(num2) - parseFloat(num1);
      // alert(duration_year);
      document.getElementById("result_test").value = duration_year;

    }


  </script>

  <div id="footer"></div>



  <script type="text/javascript">

    function blinker() {
      $('.blink_me').fadeOut(500);
      $('.blink_me').fadeIn(500);
    }

    setInterval(blinker, 1000);
  </script>
</body>

</html>