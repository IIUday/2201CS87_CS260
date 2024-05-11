<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $sql1 =mysqli_query($con,"SELECT * FROM documents WHERE Id = $id");
 $sql2 =mysqli_query($con,"SELECT * FROM referees WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 $reg = mysqli_fetch_array($sql1);
 $ref = mysqli_fetch_array($sql2);
  
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Referees &amp; Upload</title>
	<link rel="stylesheet" type="text/css" href="./Referees &amp; Upload_files/favicon.ico">
	<link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./Referees &amp; Upload_files/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Referees &amp; Upload_files/bootstrap-datepicker.css">
	<script type="text/javascript" src="./Referees &amp; Upload_files/jquery.js.download"></script>
	<script type="text/javascript" src="./Referees &amp; Upload_files/bootstrap.js.download"></script>
	<script type="text/javascript" src="./Referees &amp; Upload_files/bootstrap-datepicker.js.download"></script>

	<link href="./Referees &amp; Upload_files/css" rel="stylesheet"> 
	<link href="./Referees &amp; Upload_files/css(1)" rel="stylesheet"> 
	<link href="./Referees &amp; Upload_files/css(2)" rel="stylesheet"> 
	<link href="./Referees &amp; Upload_files/css(3)" rel="stylesheet"> 
	<link href="./Referees &amp; Upload_files/css(4)" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="./Referees &amp; Upload_files/css2" rel="stylesheet">


	
<style type="text/css">
	body { background-color: lightgray; padding-top:0px!important;}

</style></head>

<body>
<div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px;">
	<div class="container">
        <div class="row" style="margin-bottom:10px; ">
        	<div class="col-md-8 col-md-offset-2">

        		<!--  <img src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/IITIndorelogo.png" alt="logo1" class="img-responsive" style="padding-top: 5px; height: 120px; float: left;"> -->

        		<h3 style="text-align:center;color:#414002!important;font-weight: bold;font-size: 2.3em; margin-top: 3px; font-family: &#39;Noto Sans&#39;, sans-serif;">भारतीय प्रौद्योगिकी संस्थान पटना</h3>
    			<h3 style="text-align:center;color: #414002!important;font-weight: bold;font-family: &#39;Oswald&#39;, sans-serif!important;font-size: 2.2em; margin-top: 0px;">Indian Institute of Technology Patna</h3>
    			

        	</div>
        	

    	   
        </div>
		    <!-- <h3 style="text-align:center; color: #414002; font-weight: bold;  font-family: 'Fjalla One', sans-serif!important; font-size: 2em;">Application for Academic Appointment</h3> -->
    </div>
   </div> 
			<h3 style="color: rgb(225, 4, 37); margin-bottom: 20px; font-weight: bold; text-align: center; font-family: &quot;Noto Serif&quot;, serif; opacity: 0.872971;" class="blink_me">Application for Faculty Position</h3>

<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
label{
  /*padding: 10 !important;*/
  text-align: left!important;
  margin-top: -5px;
  font-family: 'Noto Serif', serif;
}
hr{
  border-top: 1px solid #025198 !important;
  border-style: dashed!important;
  border-width: 1.2px;
}

.panel-heading{
  font-size: 1.3em;
  font-family: 'Oswald', sans-serif!important;
  letter-spacing: .5px;
}

.panel-info .panel-heading{
  font-size: 1.1em;
  font-family: 'Oswald', sans-serif!important;
  padding-top: 5px;
  padding-bottom: 5px;
}

.panel-danger .panel-heading{
  font-size: 1.1em;
  font-family: 'Oswald', sans-serif!important;
  padding-top: 5px;
  padding-bottom: 5px;
}

.btn-primary {
  padding: 9px;
}

.Acae_data
{
  font-size: 1.1em;
  font-weight: bold;
  color: #414002;
}


.upload_crerti
{
  font-size: 1.1em;
  font-weight: bold;
  color: red;
  text-align: center;
}

.update_crerti
{
  font-size: 1.1em;
  font-weight: bold;
  color: green;
  text-align: center;
}
p
{
  padding-top: 10px;
}
</style>

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
    </script>
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
                        <h4>Welcome : <font color="#025198"><strong><?php echo htmlspecialchars($user['FirstName']); ?>&nbsp;<?php echo htmlspecialchars($user['LastName']); ?></strong></font></h4>
                    </div>
                    <div class="col-md-2">
                      <a onclick="logout()" class="btn btn-sm btn-success  pull-right">Logout</a>
                    </div>
                  </div>
                
                
        </legend>
       </fieldset>



<!-- publication file upload           -->

<form class="form-horizontal" action="savepage8.php" method="post" enctype="multipart/form-data">


   <!-- Reprints of 5 Best Research Papers  -->

  <h4 style="text-align:center; font-weight: bold; color: #6739bb;">20. Reprints of 5 Best Research Papers *</h4>
   <div class="row">

                        <div class="col-md-12">
          <div class="panel panel-info">
            <div class="panel-heading">Upload 5 Best Research Papers in a single PDF &lt; 6MB 
             <a href="<?php if(isset($reg["best_cert"])) echo $reg["best_cert"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a>
              <br>
              <br>
             
           </div>
              <div class="panel-body">
                <div class="col-md-5">
                <p class="update_crerti">Update 5 best papers</p>
                </div>
                <div class="col-md-7">
                 <input id="full_5_paper" name="userfile7" type="file" class="form-control input-md">
               </div>
            </div>
          </div>
        </div>

                
  </div>

 
 
<!-- certificate file code start -->
<h4 style="text-align:center; font-weight: bold; color: #6739bb;">21. Check List of the documents attached with the online application *</h4>

<div class="row">
  <div class="col-md-12">
  <div class="panel panel-success">
  <div class="panel-heading">Check List of the documents attached with the online application (Documents should be uploaded in PDF format only):
    <br>
    <small style="color: red;">Uploaded PDF files will not be displayed as part of the printed form.</small>
  </div>
    <div class="panel-body">
      <div class="row">
  
        <!-- <form action="https://ofa.iiti.ac.in/facrec_che_2023_july_02/submission_complete/upload" method="post" enctype="multipart/form-data"> -->
        <input type="hidden" name="ci_csrf_token" value="">
     
     <!-- phd certificate  -->
      <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading">PHD Certificate <a href="<?php if(isset($reg["phd_cert"])) echo $reg["phd_cert"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
        <div class="panel-body">
          <p class="update_crerti">Update PHD Certificate</p>
           <input id="phd" name="userfile" type="file" class="form-control input-md">
      </div>
    </div>
  </div>

        
         

     <!-- Master certificate  -->


                  <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading">PG Documents <a href="<?php if(isset($reg["pg_docs"])) echo $reg["pg_docs"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
            <div class="panel-body">
              <p class="update_crerti">Update All semester/year-Marksheets and degree certificate</p>
               <input id="post_gr" name="userfile1" type="file" class="form-control input-md">
          </div>
        </div>
      </div>

            
              

 
 <!-- Bachelor certificate  -->


      <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading">UG Documents <a href="<?php if(isset($reg["ug_docs"])) echo $reg["ug_docs"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
        <div class="panel-body">
          <p class="update_crerti">Update All semester/year-Marksheets and degree certificate  </p>
           <input id="under_gr" name="userfile2" type="file" class="form-control input-md">
      </div>
    </div>
  </div>

             


      <!-- 12th certificate  -->


                     <div class="col-md-4">
         <div class="panel panel-info">
           <div class="panel-heading">12th/HSC/Diploma Documents <a href="<?php if(isset($reg["docs_12"])) echo $reg["docs_12"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
             <div class="panel-body">
               <p class="update_crerti">Update 12th/HSC/Diploma/Marksheet(s) and passing certificate</p>
                <input id="higher_sec" name="userfile3" type="file" class="form-control input-md">
           </div>
         </div>
       </div>

                  



   <!-- 10th certificate  -->


            <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">10th/SSC Documents <a href="<?php if(isset($reg["docs_10"])) echo $reg["docs_10"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
          <div class="panel-body">
            <p class="update_crerti">Update 12th/HSC/Diploma/Marksheet(s) and passing certificate</p>
             <input id="high_school" name="userfile4" type="file" class="form-control input-md">
        </div>
      </div>
    </div>

            


    <!-- Pay Slip -->

            <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pay Slip <a href="<?php if(isset($reg["pay_slip"])) echo $reg["pay_slip"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
          <div class="panel-body">
            <p class="update_crerti">Update Pay Slip</p>
             <input id="pay_slip" name="userfile9" type="file" class="form-control input-md">
        </div>
      </div>
    </div>

            

<!-- Under Taking NOC -->

<!-- Pay Slip -->

<div class="col-md-6">
  <div class="panel panel-info">
    <div class="panel-heading">NOC or Undertaking <a href="<?php if(isset($reg["noc"])) echo $reg["noc"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a></div>
      <div class="panel-body">
        <p class="update_crerti">Undertaking-in case, NOC is not available at the time of application but will be provided at the time of interview</p>
         <input id="noc_under" name="userfile10" type="file" class="form-control input-md">
    </div>
  </div>
</div>

       
        <!-- 10 years post phd exp certificate  -->

                           <div class="col-md-5">
           <div class="panel panel-info">
             <div class="panel-heading">Post phd Experience Certificate/All Experience Certificates/ Last Pay slip/ 
              <a href="<?php if(isset($reg["post_phd"])) echo $reg["post_phd"] ?>" class="btn-sm btn-info " target="_blank">View Uploaded File </a>
              <br>

             </div>
               <div class="panel-body">
                 <p class="update_crerti">Update Certificate</p>
                  <input id="post_phd_10" name="userfile8" type="file" class="form-control input-md">
             </div>
           </div>
         </div>

                 


       

     <!-- Misc certificate  -->


            
          <div class="col-md-12">
            <div class="panel panel-info">
          <div class="panel-heading">Upload any other relevant document in a single PDF (For example award certificate, experience certificate etc) . If there are multiple documents, combine all the documents in a single PDF) &lt;1MB. </div>
              <div class="panel-body">
                <div class="col-md-5">
                  <p class="upload_crerti">Upload any other document</p>
                </div>
                <div class="col-md-7">
                <input id="misc_certi" name="userfile6" type="file" class="form-control input-md">
                </div>
            </div>
          </div>
        </div>
              





        <div class="col-md-2"> 
        <!-- <input type="submit" value="Upload" name="upload_submit" class="btn btn-danger" required="" /> -->
        <!-- <br /><br /> -->
        </div>
      <!-- </form> -->
      </div> 

      
    
   </div>
  </div>
<!-- </div> -->

</div>
</div>



<!-- Signature certificate  -->

<div class="row">
   <div class="col-md-4">
   <div class="panel panel-danger">
     <div class="panel-heading">Upload your Signature in JPG only 
      <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/attach/711_Ma_Agarwal_1698348165/711_sign_1698348500838566.jpg" class="btn-sm btn-info " target="_blank">View Uploaded File </a> -->
    </div>
       <div class="panel-body">
         <!-- <p class="update_crerti">Update your signature</p> -->
         <img src="<?php if(isset($reg["sign"]) and $reg["sign"]!=null){ echo $reg["sign"];} else {echo "documents/signature.png";}?>" style="height: 52px; width: 100px; margin-top: -10px;">
<input id="signature" name="userfile5" type="file" class="form-control input-md" accept=".jpg">
     </div>
     <p class="upload_crerti"></p>
   </div>
 </div>

         

   <div class="col-md-12">
  
   </div>

</div>

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">22. Referees *</h4>

       <div class="row">
       <div class="col-md-12">
         <div class="panel panel-success">
         <div class="panel-heading">Fill the Details</div>
           <div class="panel-body">
             <table class="table table-bordered">
                 <tbody id="acde">
                 
                 <tr height="30px">
                   <th class="col-md-2"> Name </th>
                   <th class="col-md-3"> Position </th>
                   <th class="col-md-3"> Association with Referee</th>
                   <th class="col-md-3"> Institution/Organization</th>
                   <th class="col-md-2"> E-mail </th>
                   <th class="col-md-2"> Contact No.</th>
                 </tr>
                 
                 
               

                 <tr height="60px">
                   <td class="col-md-2">  
                       <input id="ref_name1" name="ref_name1" type="text" value="<?php if(isset($ref["name1"])) echo htmlspecialchars($ref["name1"]);  ?>" placeholder="Name" class="form-control input-md" required="" autofocus=""> 
                   </td>

                   <td class="col-md-2"> 
                       <input id="position1" name="position1" type="text" value="<?php if(isset($ref["position1"])) echo $ref["position1"] ?>" placeholder="Position" class="form-control input-md" required=""> 
                     </td>

                   <td class="col-md-2"> 
                     <select id="association_referee1" name="association_referee1" class="form-control input-md" required="">

                       <option value="">Select</option>
                       <option value="Thesis Supervisor" <?php if(isset($ref["asso_ref1"]) and $ref["asso_ref1"] == 'Thesis Supervisor'){ echo ' selected="selected"'; } ?>>Thesis Supervisor</option>
                       <option value="Postdoc Supervisor" <?php if(isset($ref["asso_ref1"]) and $ref["asso_ref1"] == 'Postdoc Supervisor'){ echo ' selected="selected"'; } ?>>Postdoc Supervisor</option>
                       <option value="Research Collaborator" <?php if(isset($ref["asso_ref1"]) and $ref["asso_ref1"] == 'Research Collaborator'){ echo ' selected="selected"'; } ?>>Research Collaborator</option>
                       <option value="Other" <?php if(isset($ref["asso_ref1"]) and $ref["asso_ref1"] == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
                     </select>
                     </td>

                 
                    <td class="col-md-2"> 
                     <input id="org1" name="org1" type="text" value="<?php if(isset($ref["insti1"])) echo $ref["insti1"] ?>" placeholder="Institution/Organization" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="email1" name="email1" type="email" value="<?php if(isset($ref["email1"])) echo $ref["email1"] ?>" placeholder="E-mail" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="phone1" name="phone1" type="text" value="<?php if(isset($ref["contact1"])) echo $ref["contact1"] ?>" placeholder="Contact No." class="form-control input-md" maxlength="20" required=""> 
                   </td>

                   
                 </tr>
                 
               

                 <tr height="60px">
                   <td class="col-md-2">  
                       <input id="ref_name2" name="ref_name2" type="text" value="<?php if(isset($ref["name2"])) echo $ref["name2"] ?>" placeholder="Name" class="form-control input-md" required="" autofocus=""> 
                   </td>

                   <td class="col-md-2"> 
                       <input id="position2" name="position2" type="text" value="<?php if(isset($ref["position2"])) echo $ref["position2"] ?>" placeholder="Position" class="form-control input-md" required=""> 
                     </td>

                   <td class="col-md-2"> 
                     <select id="association_referee2" name="association_referee2" class="form-control input-md" required="">

                       <option value="">Select</option>
                       <option value="Thesis Supervisor" <?php if(isset($ref["asso_ref2"]) and $ref["asso_ref2"] == 'Thesis Supervisor'){ echo ' selected="selected"'; } ?>>Thesis Supervisor</option>
                       <option value="Postdoc Supervisor" <?php if(isset($ref["asso_ref2"]) and $ref["asso_ref2"] == 'Postdoc Supervisor'){ echo ' selected="selected"'; } ?>>Postdoc Supervisor</option>
                       <option value="Research Collaborator" <?php if(isset($ref["asso_ref2"]) and $ref["asso_ref2"] == 'Research Collaborator'){ echo ' selected="selected"'; } ?>>Research Collaborator</option>
                       <option value="Other" <?php if(isset($ref["asso_ref2"]) and $ref["asso_ref2"] == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
                     </select>
                     </td>

                 
                    <td class="col-md-2"> 
                     <input id="org2" name="org2" type="text" value="<?php if(isset($ref["insti2"])) echo $ref["insti2"] ?>" placeholder="Institution/Organization" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="email2" name="email2" type="email" value="<?php if(isset($ref["email2"])) echo $ref["email2"] ?>" placeholder="E-mail" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="phone2" name="phone2" type="text" value="<?php if(isset($ref["contact2"])) echo $ref["contact2"] ?>" placeholder="Contact No." class="form-control input-md" maxlength="20" required=""> 
                   </td>

                   
                 </tr>
                 
               

                 <tr height="60px">
                   <td class="col-md-2">  
                       <input id="ref_name3" name="ref_name3" type="text" value="<?php if(isset($ref["name3"])) echo $ref["name3"] ?>" placeholder="Name" class="form-control input-md" required="" autofocus=""> 
                   </td>

                   <td class="col-md-2"> 
                       <input id="position3" name="position3" type="text" value="<?php if(isset($ref["position3"])) echo $ref["position3"] ?>" placeholder="Position" class="form-control input-md" required=""> 
                     </td>

                   <td class="col-md-2"> 
                     <select id="association_referee3" name="association_referee3" class="form-control input-md" required="">

                       <option value="">Select</option>
                       <option value="Thesis Supervisor" <?php if(isset($ref["asso_ref3"]) and $ref["asso_ref3"] == 'Thesis Supervisor'){ echo ' selected="selected"'; } ?>>Thesis Supervisor</option>
                       <option value="Postdoc Supervisor" <?php if(isset($ref["asso_ref3"]) and $ref["asso_ref3"] == 'Postdoc Supervisor'){ echo ' selected="selected"'; } ?>>Postdoc Supervisor</option>
                       <option value="Research Collaborator" <?php if(isset($ref["asso_ref3"]) and $ref["asso_ref3"] == 'Research Collaborator'){ echo ' selected="selected"'; } ?>>Research Collaborator</option>
                       <option value="Other" <?php if(isset($ref["asso_ref3"]) and $ref["asso_ref3"] == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
                     </select>
                     </td>

                 
                    <td class="col-md-2"> 
                     <input id="org3" name="org3" type="text" value="<?php if(isset($ref["insti3"])) echo $ref["insti3"] ?>" placeholder="Institution/Organization" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="email3" name="email3" type="email" value="<?php if(isset($ref["email3"])) echo $ref["email3"] ?>" placeholder="E-mail" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="phone3" name="phone3" type="text" value="<?php if(isset($ref["contact3"])) echo $ref["contact3"] ?>" placeholder="Contact No." class="form-control input-md" maxlength="20" required=""> 
                   </td>

                   
                 </tr>
                                  
              
               </tbody>
             </table>

         </div>
       </div>
       </div>
       </div>

<!-- Payment file upload           -->



<!-- Referees Details -->


<input type="hidden" name="ci_csrf_token" value="">
    
 
<hr> 
<div class="form-group">
<div class="col-md-10">
  <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left">BACK</a> -->
  <a href="page7.php" class="btn btn-primary pull-left">PREV</a>
  
  <!-- <button type="submit" name="submit" value="Submit" class="btn btn-success">SAVE</button> -->


</div>

<div class="col-md-2">
  <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE &amp; NEXT</button>
  <!-- <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">Final Submission</button> -->

</div>


</div>

</form>
</div> 
</div>
<script type="text/javascript">
function confirm_box()
{
  if(confirm("Dear Candidate, \n\nAre you sure that you are ready to submit the application? Press OK to submit the application. Press CANCEL to edit. \nOnce you press OK you cannot make any changes.\n\nThank you."))
  {
    return true;
  }
  else
  {
    return false;
  }
}
function submit_frm()
{
  alert();
  document.getElementById("upload_frm").submit();
}
</script>



<script type="text/javascript">
  $(document).ready(function () 
  {
   
    var list1 = document.getElementById('applicant_cate');
     
    list1.options[0] = new Option('Select/Category', '');
    list1.options[1] = new Option('Other Applicants', 'Other Applicants');
    list1.options[2] = new Option('OBC-NC, PwD, EWS and Female Applicants', 'OBC-NC, PwD, EWS and Female Applicants');
    list1.options[3] = new Option('SC, ST and Faculty Applicants from IIT Indore', 'SC, ST and Faculty Applicants from IIT Indore');
   

    $("#applicant_cate option").each(function()
    {

           if($(this).val()==selectoption){
        $(this).attr('selected', 'selected');
      }
      // Add $(this).val() to your list
    });

    getFoodItem();
      $("#payment_amount option").each(function()
    {

           if($(this).val()==selectsubthemeoption){
        $(this).attr('selected', 'selected');
      }
      // Add $(this).val() to your list
    });
  });

  
  function getFoodItem()
  {
 
    var list1 = document.getElementById('applicant_cate');
    var list2 = document.getElementById("payment_amount");
    var list1SelectedValue = list1.options[list1.selectedIndex].value;


    if (list1SelectedValue=='Other Applicants')
    {
         
        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('INR 1000', 'INR 1000');
        
         
    }
    else if (list1SelectedValue=='OBC-NC, PwD, EWS and Female Applicants')
    {
         
        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('INR 500', 'INR 500');
       
         
    }

    else if (list1SelectedValue=='SC, ST and Faculty Applicants from IIT Indore')
    {
         
        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('NIL', 'NIL');
       
         
    }


    
}
</script>

<div id="footer"></div>



<script type="text/javascript">
	
	function blinker() {
	    $('.blink_me').fadeOut(500);
	    $('.blink_me').fadeIn(500);
	}

	setInterval(blinker, 1000);
</script></div></body></html>