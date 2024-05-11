<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $sql1 =mysqli_query($con,"SELECT * FROM relinfo WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 $rel = mysqli_fetch_array($sql1);
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Rel Info</title>
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/favicon.ico">
  <link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/bootstrap-datepicker.css">
  <script type="text/javascript" src="./Rel Info_files/jquery.js.download"></script>
  <script type="text/javascript" src="./Rel Info_files/bootstrap.js.download"></script>
  <script type="text/javascript" src="./Rel Info_files/bootstrap-datepicker.js.download"></script>

  <link href="./Rel Info_files/css" rel="stylesheet">
  <link href="./Rel Info_files/css(1)" rel="stylesheet">
  <link href="./Rel Info_files/css(2)" rel="stylesheet">
  <link href="./Rel Info_files/css(3)" rel="stylesheet">
  <link href="./Rel Info_files/css(4)" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="./Rel Info_files/css2" rel="stylesheet">



  <style type="text/css">
    body {
      background-color: lightgray;
      padding-top: 0px !important;
    }
  </style>
  <style>
    .cke {
      visibility: hidden;
    }
  </style>
  <script type="text/javascript" src="./Rel Info_files/config.js.download"></script>
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/editor.css">
  <script type="text/javascript" src="./Rel Info_files/en.js.download"></script>
  <script type="text/javascript" src="./Rel Info_files/styles.js.download"></script>
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/scayt.css">
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/dialog.css">
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/tableselection.css">
  <link rel="stylesheet" type="text/css" href="./Rel Info_files/dialog(1).css">
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
    style="color: rgb(225, 4, 37); margin-bottom: 20px; font-weight: bold; text-align: center; font-family: &quot;Noto Serif&quot;, serif; opacity: 0.131243;"
    class="blink_me">Application for Faculty Position</h3>

  <script type="text/javascript" src="./Rel Info_files/ckeditor.js.download"></script>

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

    .Acae_data {
      font-size: 1.1em;
      font-weight: bold;
      color: #414002;
    }

    p {
      padding-top: 10px;
    }
  </style>

  <!-- all bootstrap buttons classes -->
  <!-- 
  class="btn btn-sm, btn-lg, "
  color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



  <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/layout"></a>

  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 well">


        <fieldset>

          <legend>
            <div class="row">
              <div class="col-md-10">
              <h4>Welcome : <font color="#025198"><strong> <?php echo htmlspecialchars($user['FirstName']); ?>&nbsp;<?php echo htmlspecialchars($user['LastName']); ?></strong></font></h4>
              </div>
              <div class="col-md-2">
              <a onclick="logout()"
                    class="btn btn-sm btn-success  pull-right">Logout</a>
              </div>
            </div>


          </legend>

          <form class="form-horizontal" action="savepage7.php" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="ci_csrf_token" value="">


            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    14. Significant research contribution and future plans<small class="pull-right">(not more than 500
                      words)</small><br>
                    <small>(Please provide a Research Statement describing your research plans and one or two specific
                      research projects to be conducted at IIT Indore in 2-3 years time frame)</small>
                  </div>
                  <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Significant research contribution and future plans"
                      class="form-control input-md" name="research_statement" maxlength="3500"><?php if(isset($rel["reContri"])) echo htmlspecialchars($rel["reContri"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                  15. Significant teaching contribution and future plans *<small class="pull-right">(not more than 500
                      words)</small><br>
                    <small>(Please list UG/PG courses that you would like to develop and/or teach at IIT Indore)</small>
                  </div>
                  <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Significant teaching contribution and future plans"
                      class="form-control input-md" name="teaching_statement" maxlength="3500"><?php if(isset($rel["teContri"])) echo htmlspecialchars($rel["teContri"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>

            <!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading"> Awards and recognition <small class="pull-right">(not more 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="award_recg" maxlength="3500" required=""></textarea>
      </div>
    </div>
    </div> -->

            <!-- 
<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">27. Contribution to Continuing Education Programs  <small class="pull-right">(not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Contribution to Continuing Education Programs" class="form-control input-md" name="cep" maxlength="3500" ></textarea>
      </div>
    </div>
    </div> -->

            <!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">28. Short-term Courses/Workshop/Seminars/Conference etc. organized  <small class="pull-right">(not more than 500 words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Short-term Courses/Workshop/Seminars etc. organized" class="form-control input-md" name="short_course" maxlength="3500"></textarea>
      </div>
    </div>
    </div> -->

    <div class="row">
              <div class="col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                  16. Any other relevant information.<small class="pull-right">(not more than 500
                      words)</small><br>
                    <small></small>
                  </div>
                  <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Any other relevant information you may like to furnish"
                      class="form-control input-md" name="rel_in" maxlength="3500"><?php if(isset($rel["otherRelevant"])) echo htmlspecialchars($rel["otherRelevant"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>

            <!-- <div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">27. Highlighting how your work fits with  the overall research activities of the department/institute.<small class="pull-right">(Research plan 500 Words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="highlights" maxlength="3000"></textarea>
      </div>
    </div>
    </div>

<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">28. Courses you have taught earlier if any/ Your plan for new courses/ What kind of novel teaching methodologies you can include.<small class="pull-right">(Research plan 500 Words)</small></div>
        <div class="panel-body">
          <textarea style="height:150px" placeholder="Any other relevant information you may like to furnish" class="form-control input-md" name="novel_teching" maxlength="3000"></textarea>
      </div>
    </div>
    </div> -->

    <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success ">
                <div class="panel-heading">17. Professional Service : Editorship/Reviewership <small
                    class="pull-right">(not
                    more than 500 words)</small></div>
                    <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Professional Service as Reviewer/Editor etc"
                      class="form-control input-md" name="prof_serv" maxlength="3500"><?php if(isset($rel["profService"])) echo htmlspecialchars($rel["profService"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success ">
                <div class="panel-heading">18. Detailed List of Journal Publications <br>(Including Sr. No., Author's
                  Names, Paper Title, Volume, Issue, Year, Page Nos., Impact Factor (if any), DOI,
                  Status[Published/Accepted] )</div>
                  <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Detailed List of Journal Publications"
                      class="form-control input-md" name="jour_details" maxlength="3500"><?php if(isset($rel["journalPub"])) echo htmlspecialchars($rel["journalPub"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success ">
                <div class="panel-heading">19. Detailed List of Conference Publications<br>(Including Sr. No.,
                  Author's Names, Paper Title, Name of the conference, Year, Page Nos., DOI [If any] )</div>
                  <div class="panel-body">
                    <textarea style="height: 150px;" placeholder="Detailed List of Conference Publications"
                      class="form-control input-md" name="conf_details" maxlength="3500"><?php if(isset($rel["cnfPub"])) echo htmlspecialchars($rel["cnfPub"]); ?></textarea>
                  </div>
                </div>

                
              </div>
            </div>



      </div>

      <div class="form-group">
        <div class="col-md-10">
          <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left">BACK</a> -->
          <a href="page6.php" class="btn btn-primary pull-left">PREV</a>


        </div>
        <div class="col-md-2">

          <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE
            &amp; NEXT</button>

        </div>


      </div>


    </fieldset>
</form>
  
</div>
    </div>
</div>

<div id="footer"></div>



<script type="text/javascript">
	function logout() {
    // Clear session variables
    sessionStorage.clear();

    // Redirect to Home_Page.php
    document.location = 'logout.php';
}
function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
	function blinker() {
	    $('.blink_me').fadeOut(500);
	    $('.blink_me').fadeIn(500);
	}

	setInterval(blinker, 1000);
</script></body></html>