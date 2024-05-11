<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $profsoc =mysqli_query($con,"SELECT * FROM memprofsociety WHERE id = $id");
 $proftrain =mysqli_query($con,"SELECT * FROM professionaltraining WHERE id = $id");
 $award =mysqli_query($con,"SELECT * FROM awards WHERE id = $id");
 $sponsproj =mysqli_query($con,"SELECT * FROM sponsoredprojects WHERE id = $id");
 $consproj =mysqli_query($con,"SELECT * FROM consultancyprojects WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Academic Industrial Experience</title>
	<link rel="stylesheet" type="text/css" href="./Academic Industrial Experience_files/favicon.ico">
	<link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./Academic Industrial Experience_files/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Academic Industrial Experience_files/bootstrap-datepicker.css">
	<script type="text/javascript" src="./Academic Industrial Experience_files/jquery.js.download"></script>
	<script type="text/javascript" src="./Academic Industrial Experience_files/bootstrap.js.download"></script>
	<script type="text/javascript" src="./Academic Industrial Experience_files/bootstrap-datepicker.js.download"></script>

	<link href="./Academic Industrial Experience_files/css" rel="stylesheet"> 
	<link href="./Academic Industrial Experience_files/css(1)" rel="stylesheet"> 
	<link href="./Academic Industrial Experience_files/css(2)" rel="stylesheet"> 
	<link href="./Academic Industrial Experience_files/css(3)" rel="stylesheet"> 
	<link href="./Academic Industrial Experience_files/css(4)" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="./Academic Industrial Experience_files/css2" rel="stylesheet">


	
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
			<h3 style="color: rgb(225, 4, 37); margin-bottom: 20px; font-weight: bold; text-align: center; font-family: &quot;Noto Serif&quot;, serif; opacity: 0.00319434;" class="blink_me">Application for Faculty Position</h3>

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
  padding: 0 !important;
}

span{
  font-size: 1.2em;
  font-family: 'Oswald', sans-serif!important;
  text-align: left!important;
  padding: 0px 10px 0px 0px!important;
  /*margin-bottom: 20px!important;*/

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
.btn-primary {
  padding: 9px;
}
</style>
<script type="text/javascript">
             
            $(function () {
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                });
            });
</script>

<script type="text/javascript">
var tr="";
var counter_s_proj=0;
var counter_award=0;
var counter_prof_trg=0;
var counter_membership=0;
var counter_consultancy=0;

  $(document).ready(function(){
  

$("#add_more_s_proj").click(function(){
        create_tr();
        create_serial('s_proj');
        create_input('agency[]', 'Sponsoring Agency','agency'+counter_s_proj, 's_proj',counter_s_proj, 's_proj');
        create_input('stitle[]', 'Title of Project', 'stitle'+counter_s_proj,'s_proj',counter_s_proj, 's_proj');
        create_input('samount[]', 'Amount of grant', 'samount'+counter_s_proj,'s_proj',counter_s_proj, 's_proj');
        create_input('speriod[]', 'Period', 'speriod'+counter_s_proj,'s_proj',counter_s_proj, 's_proj');
        create_input('s_role[]', 'Role', 's_role'+counter_s_proj,'s_proj',counter_s_proj, 's_proj',false,true);
        create_input('s_status[]', 'Status', 's_status'+counter_s_proj,'s_proj',counter_s_proj, 's_proj',true);
        counter_s_proj++;
        return false;
  });
  
  $("#add_more_award").click(function(){
          create_tr();
          create_serial('award');
          create_input('award_nature[]', 'Name of Award','award_nature'+counter_award, 'award',counter_award, 'award');
          create_input('award_org[]', 'Granting body/Organization', 'award_org'+counter_award,'award',counter_award, 'award');
          create_input('award_year[]', 'Year', 'award_year'+counter_award,'award',counter_award, 'award',true);
          counter_award++;
          return false;
    });

  $("#add_more_prog_trg").click(function(){
          create_tr();
          create_serial('prof_trg');
          create_input('trg[]', 'Taining Received','trg'+counter_prof_trg, 'prof_trg',counter_prof_trg, 'prof_trg');
          create_input('porg[]', 'Organization', 'porg'+counter_prof_trg,'prof_trg',counter_prof_trg, 'prof_trg');
          create_input('pyear[]', 'Year', 'pyear'+counter_prof_trg,'prof_trg',counter_prof_trg, 'prof_trg');
          create_input('pduration[]', 'Duration', 'pduration'+counter_prof_trg,'prof_trg',counter_prof_trg, 'prof_trg',true);
          counter_prof_trg++;
          return false;
    });

  $("#add_membership").click(function(){
          create_tr();
          create_serial('membership');
          create_input('mname[]', 'Name of the Professional Society','mname'+counter_membership, 'membership',counter_membership, 'membership');
          create_input('mstatus[]', 'Membership Status (Lifetime/Annual)', 'mstatus'+counter_membership,'membership',counter_membership, 'membership',true);
          counter_membership++;
          return false;
    });

  $("#add_consultancy").click(function(){
          create_tr();
          create_serial('consultancy');
          create_input('c_org[]', 'Organization','c_org'+counter_consultancy, 'consultancy',counter_consultancy, 'consultancy');
          create_input('ctitle[]', 'Title of Project','ctitle'+counter_consultancy, 'consultancy',counter_consultancy, 'consultancy');
          create_input('camount[]', 'Amount of grant','camount'+counter_consultancy, 'consultancy',counter_consultancy, 'consultancy');
          create_input('cperiod[]', 'Period','cperiod'+counter_consultancy, 'consultancy',counter_consultancy, 'consultancy');

          create_input('c_role[]', 'Role', 'c_role'+counter_consultancy,'consultancy',counter_consultancy, 'consultancy',false,true);
          create_input('c_status[]', 'Status', 'c_status'+counter_consultancy,'consultancy',counter_consultancy, 'consultancy',true);
          counter_consultancy++;
          return false;
    });


});
  function create_select()
  {
    
  }
  function create_tr()
  {
    tr=document.createElement("tr");
  }
  function create_serial(tbody_id)
  {
    //console.log(tbody_id);
    var td=document.createElement("td");
    // var x=0;
     var x = document.getElementById(tbody_id).rows.length;
    // if(document.getElementById(tbody_id).rows)
    // {
    // }
    td.innerHTML=x;
     tr.appendChild(td);
  }
   function for_date_picker(obj)
  {
    obj.setAttribute("data-provide", "datepicker");
    obj.className += " datepicker";
    return obj;

  }
  function deleterow(e){
    var rowid=$(e).attr("data-id");
    var textbox=$("#id"+rowid).val();
    $.ajax({
            type: "POST",
            url  : "https://ofa.iiti.ac.in/facrec_che_2023_july_02/Acd_ind/deleterow/",
            data: {id: textbox},
                success: function(result) { 
                if(result.status=="OK"){
                $('.row_'+rowid).remove();
                            //remove_row('award',rowid, 'award');
                }
                   
                }});

   
    }
  function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn=false, select=false, datepicker_set=false)
  {
    //console.log(counter);
    if(select==false)
    {

      var input=document.createElement("input");
      input.setAttribute("type", "text");
      input.setAttribute("name", t_name);
      input.setAttribute("id", id);
      input.setAttribute("placeholder", place_value);
      input.setAttribute("class", "form-control input-md");
      input.setAttribute("required", "");
      var td=document.createElement("td");
      td.appendChild(input);
    }
    if(select==true)
    {

      var sel=document.createElement("select");
      sel.setAttribute("name", t_name);
      sel.setAttribute("id", id);
      sel.setAttribute("class", "form-control input-md");
      sel.innerHTML+="<option>Select</option>";
      sel.innerHTML+="<option value='Principal Investigator'>Principal Investigator</option>";
      sel.innerHTML+="<option value='Co-investigator'>Co-investigator</option>";
      // sel.innerHTML+="<option value='in_preparation'>In-Preparation</option>";
      var td=document.createElement("td");
      td.appendChild(sel);
    }
    if(datepicker_set==true)
    {
      input=for_date_picker(input);
    }
    if(btn==true)
    {
      // alert();
      var but=document.createElement("button");
      but.setAttribute("class", "close");
      but.setAttribute("onclick", "remove_row('"+remove_name+"','"+counter+"', '"+tbody_id+"')");
      but.innerHTML="x";
      td.appendChild(but);
    }
    tr.setAttribute("id", "row"+counter);
    tr.appendChild(td);
    document.getElementById(tbody_id).appendChild(tr);
     $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                });
    
  }
  function remove_row(remove_name, n, tbody_id)
  {
    var tab=document.getElementById(remove_name);
    var tr=document.getElementById("row"+n);
    tab.removeChild(tr);
    var x = document.getElementById(tbody_id).rows.length;
    for(var i=0; i<=x; i++)
    {
      $("#"+tbody_id).find("tr:eq("+i+") td:first").text(i);
      
    }
    
  }
</script>




<a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/layout"></a>

<div class="container">
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-8 well">
            <form class="form-horizontal" action="savepage5.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <input type="hidden" name="ci_csrf_token" value="">
             
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



<!-- Membership of Professional Societies -->

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">9. Membership of Professional Societies </h4>

<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading">Fill the Details  &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_membership">Add Details</button></div>
  <div class="panel-body">

        <table class="table table-bordered">
            <tbody id="membership">
            
            <tr height="30px">
              <th class="col-md-1"> S. No.</th>
              <th class="col-md-3"> Name of the Professional Society </th>
              <th class="col-md-3"> Membership Status (Lifetime/Annual)</th>
              
            </tr>


                        
            <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($profsoc)) {
              
              ?>
              <tr height="60px" class="row_1">
              <td class="col-md-1"> 
              <?php echo htmlspecialchars($a); ?>     </td>
              <td class="col-md-2"> 
                <input id="id1" name="id[]" type="hidden" value="<?php echo htmlspecialchars($row["name"]); ?>" class="form-control input-md" required=""> 
                  <input id="mname1" name="mname[]" type="text" value="Simone Camacho" placeholder="Name of the Professional Society" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="mstatus1" name="mstatus[]" type="text" value="<?php echo htmlspecialchars($row["status"]); ?>" placeholder="Membership Status (Lifetime/Annual)" class="form-control input-md" required=""> 
              </td>
              
             
            </tr>
                 <?php
                 $a++;
                    }
                    ?>       
           
                      </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Professional Training -->

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">10. Professional Training </h4>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
    <div class="panel-heading">Fill the Details  &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_prog_trg">Add Details</button></div>
      <div class="panel-body">

            <table class="table table-bordered">
                <tbody id="prof_trg">
                
                <tr height="30px">
                  <th class="col-md-1"> S. No.</th>
                  <th class="col-md-3"> Type of Training Received </th>
                  <th class="col-md-3"> Organisation</th>
                  <th class="col-md-2"> Year</th>
                  <th class="col-md-2"> Duration (in years &amp; months)</th>
                  
                </tr>


                                
                <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($proftrain)) {
              
              ?>
              <tr height="60px" class="row_1">
                  <td class="col-md-1"> 
                  <?php echo htmlspecialchars($a); ?></td>
                  <td class="col-md-2"> 
                      <input id="trg1" name="trg[]" type="text" value="<?php echo htmlspecialchars($row["type"]); ?>" placeholder="Type of Training" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="porg1" name="porg[]" type="text" value="<?php echo htmlspecialchars($row["organization"]); ?>" placeholder="Organization" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="pyear1" name="pyear[]" type="text" value="<?php echo htmlspecialchars($row["year"]); ?>" placeholder="Year" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="pduration1" name="pduration[]" type="text" value="<?php echo htmlspecialchars($row["duration"]); ?>" placeholder="Amount of grant" class="form-control input-md" required=""> 
                  </td>
                </tr>
                 <?php
                 $a++;
                    }
                    ?>
                                
                
                              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<!-- Award(s) and Recognition(s) -->

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">11. Award(s) and Recognition(s)</h4>
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading">Fill the Details  &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_award">Add Details</button></div>
  <div class="panel-body">

        <table class="table table-bordered">
            <tbody id="award">
            
            <tr height="30px">
              <th class="col-md-1"> S. No.</th>
              <th class="col-md-3"> Name of Award </th>
              <th class="col-md-3"> Awarded By</th>
              <th class="col-md-2"> Year</th>
              
            </tr>


                        
            <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($award)) {
              
              ?>
              <tr height="60px" class="row_1">
              <td class="col-md-1"> 
                1                </td>
              <td class="col-md-2"> 
                <input id="id1" name="id[]" type="hidden" value="1575" class="form-control input-md" required=""> 
                  <input id="award_nature1" name="award_nature[]" type="text" value="<?php echo htmlspecialchars($row["name"]); ?>" placeholder="Name of Award" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="award_org1" name="award_org[]" type="text" value="<?php echo htmlspecialchars($row["awardedBy"]); ?>" placeholder="Awarded by" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-2"> 
                <input id="award_year1" name="award_year[]" type="text" value="<?php echo htmlspecialchars($row["year"]); ?>" placeholder="Year" class="form-control input-md" required=""> 
                
              </td>
             
            </tr>
            <?php
            $a++;
                    }
                    ?>
                      </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<h4 style="text-align:center; font-weight: bold; color: #6739bb;">12. Sponsored Projects/ Consultancy Details</h4>
<!-- sponsored projects  -->
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(A) Sponsored Projects &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_s_proj">Add Details</button></div>
        <div class="panel-body">

              <table class="table table-bordered">
                  <tbody id="s_proj">
                  
                  <tr height="30px">
                    <th class="col-md-1"> S. No.</th>
                    <th class="col-md-2"> Sponsoring Agency </th>
                    <th class="col-md-2"> Title of Project</th>
                    <th class="col-md-2"> Sanctioned Amount (₹) </th>
                    <th class="col-md-1"> Period</th>
                    <th class="col-md-2"> Role </th>
                    <th class="col-md-2"> Status (Completed/On-going)</th>
                    
                  </tr>


                                    
                  <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($sponsproj)) {
              
              ?>
              <tr height="60px">
                    <td class="col-md-1"> 
                    <?php echo htmlspecialchars($a); ?>    </td>
                    <td class="col-md-2"> 
                      
                        <input id="agency1" name="agency[]" type="text" value="<?php echo htmlspecialchars($row["agency"]); ?>" placeholder="Sponsoring Agency" class="form-control input-md" required=""> 
                      </td>
                    <td class="col-md-2"> 
                      <input id="stitle1" name="stitle[]" type="text" value="<?php echo htmlspecialchars($row["title"]); ?>" placeholder="Title of Project" class="form-control input-md" required=""> 
                    </td>
                    <td class="col-md-2"> 
                      <input id="samount1" name="samount[]" type="text" value="<?php echo htmlspecialchars($row["amount"]); ?>" placeholder="Amount of grant" class="form-control input-md" required=""> 
                    </td>
                    <td class="col-md-1"> 
                      <input id="speriod1" name="speriod[]" type="text" value="<?php echo htmlspecialchars($row["period"]); ?>" placeholder="Period" class="form-control input-md" required=""> 
                    </td>

                    <td class="col-md-2"> 
                      <select id="s_role" name="s_role[]" class="form-control input-md" required="">
                          <option value="">Select</option>
                          <option value="Principal Investigator" <?php if(isset($row["role"]) and $row["role"]=="Principal Investigator") echo 'selected = "selected"' ?>>Principal Investigator</option>
                          <option value="Co-investigator" <?php if(isset($row["role"]) and $row["role"]=="Co-investigator") echo 'selected = "selected"' ?>>Co-investigator</option>
                      </select>
                    </td>

                    <td class="col-md-2"> 
                      <input id="s_status1" name="s_status[]" type="text" value="<?php echo htmlspecialchars($row["status"]); ?>" placeholder="Status" class="form-control input-md" required=""> 
                    </td>
                    
                   
                  </tr>
                      <?php
                      $a++;
                    }
                    ?>              
                  
                                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

     <!-- Consultancy Details -->
             <div class="row">
                 <div class="col-md-12">
                   <div class="panel panel-success">
                   <div class="panel-heading">(B) Consultancy Projects  &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_consultancy">Add Details</button></div>
                     <div class="panel-body">

                           <table class="table table-bordered">
                               <tbody id="consultancy">
                               
                               <tr height="30px">
                                 <th class="col-md-1"> S. No.</th>
                                 <th class="col-md-3"> Organization </th>
                                 <th class="col-md-2"> Title of Project</th>
                                 <th class="col-md-2"> Amount of Grant</th>
                                 <th class="col-md-1"> Period</th>
                                 <th class="col-md-2"> Role</th>
                                 <th class="col-md-2"> Status</th>
                                 
                               </tr>


                                                              
                               <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($consproj)) {
              
              ?>
              <tr height="60px" class="row_1">
                                 <td class="col-md-1"> 
                                 <?php echo htmlspecialchars($a); ?>                           </td>
                                 <td class="col-md-2"> 
                                   <input id="id1" name="id[]" type="hidden" class="form-control input-md" required=""> 

                                     <input id="c_org1" name="c_org[]" type="text" value="<?php echo htmlspecialchars($row["organization"]); ?>" placeholder="Organization" class="form-control input-md" required=""> 
                                   </td>
                                 <td class="col-md-2"> 
                                   <input id="ctitle1" name="ctitle[]" type="text" value="<?php echo htmlspecialchars($row["title"]); ?>" placeholder="Title of Project" class="form-control input-md" required=""> 
                                 </td>
                                 <td class="col-md-2"> 
                                   <input id="camount1" name="camount[]" type="text" value="<?php echo htmlspecialchars($row["amount"]); ?>" placeholder="Amount" class="form-control input-md" required=""> 
                                 </td>
                                 <td class="col-md-1"> 
                                   <input id="cperiod1" name="cperiod[]" type="text" value="<?php echo htmlspecialchars($row["period"]); ?>" placeholder="Period" class="form-control input-md" required=""> 
                                 </td>

                                 <td class="col-md-2"> 
                                   <select id="c_role" name="c_role[]" class="form-control input-md" required="">
                                       <option value="">Select</option>
                                       <option value="Principal Investigator" <?php if(isset($row["role"]) and $row["role"]=="Principal Investigator") echo 'selected = "selected"' ?>>Principal Investigator</option>
                                       <option value="Co-investigator" <?php if(isset($row["role"]) and $row["role"]=="Co-investigator") echo 'selected = "selected"' ?>>Co-investigator</option>
                                   </select>
                                 </td>

                                 <td class="col-md-2"> 
                                   <input id="c_status1" name="c_status[]" type="text" value="<?php echo htmlspecialchars($row["status"]); ?>" placeholder="Status" class="form-control input-md" required=""> 
                                 </td>
                                 
                                
                               </tr>
                               <?php
                               $a++;
                    }
                    ?>
                             
                                                            </tbody>
                           </table>
                         </div>
                       </div>
                     </div>

                   </div>
 
    


      




            <!-- Button -->

            <div class="form-group">
              
              <div class="col-md-1">
                <a href="page4.php" class="btn btn-primary pull-left">PREV</a>
              </div>

              <div class="col-md-11">
                <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE &amp; NEXT</button>
                
              </div>
              
            </div>

            <!-- <div class="form-group">
              <label class="col-md-5 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-primary">SUBMIT</button>

              </div>
            </div> -->

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