<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $empdtl =mysqli_query($con,"SELECT * FROM employmentdetails WHERE id = $id");
 $emphis =mysqli_query($con,"SELECT * FROM employmenthistory WHERE id = $id");
 $indexp =mysqli_query($con,"SELECT * FROM industrialexperience WHERE id = $id");
 $resexp =mysqli_query($con,"SELECT * FROM researchexperience WHERE id = $id");
 $tchexp =mysqli_query($con,"SELECT * FROM teachingexperience WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 $emp = mysqli_fetch_array($empdtl);
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Employment Details</title>
	<link rel="stylesheet" type="text/css" href="./Employment Details_files/favicon.ico">
	<link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./Employment Details_files/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Employment Details_files/bootstrap-datepicker.css">
	<script type="text/javascript" src="./Employment Details_files/jquery.js.download"></script>
	<script type="text/javascript" src="./Employment Details_files/bootstrap.js.download"></script>
	<script type="text/javascript" src="./Employment Details_files/bootstrap-datepicker.js.download"></script>

	<link href="./Employment Details_files/css" rel="stylesheet"> 
	<link href="./Employment Details_files/css(1)" rel="stylesheet"> 
	<link href="./Employment Details_files/css(2)" rel="stylesheet"> 
	<link href="./Employment Details_files/css(3)" rel="stylesheet"> 
	<link href="./Employment Details_files/css(4)" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="./Employment Details_files/css2" rel="stylesheet">


	
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
			<h3 style="color: rgb(225, 4, 37); margin-bottom: 20px; font-weight: bold; text-align: center; font-family: &quot;Noto Serif&quot;, serif; opacity: 0.599855;" class="blink_me">Application for Faculty Position</h3>


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
hr{
  border-top: 1px solid #025198 !important;
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

<script type="text/javascript">
var tr="";
var counter_exp=1;
var counter_t_exp=1;
var counter_r_exp=1;
var counter_ind_exp=1;


  $(document).ready(function(){
    
    $("#add_more_exp").click(function(){
        create_tr();
        create_serial('exp');
        create_input('position[]', 'Position','position'+counter_exp, 'exp',counter_exp, 'exp');
        create_input('employer[]', 'Organization/Institution', 'employer'+counter_exp,'exp',counter_exp, 'exp');
        create_input('doj[]', 'DD/MM/YYYY', 'doj'+counter_exp,'exp',counter_exp, 'exp');
        create_input('dol[]', 'DD/MM/YYYY', 'dol'+counter_exp,'exp',counter_exp, 'exp');
        create_input('exp_duration[]', 'Duration','exp_duration'+counter_exp, 'exp',counter_exp,'exp', true);
        counter_exp++;
        return false;
    });

    $("#add_more_t_exp").click(function(){
        create_tr();
        create_serial('t_exp');
        create_input('te_position[]', 'Position','te_position'+counter_t_exp, 't_exp',counter_t_exp, 't_exp');
        create_input('te_employer[]', 'Employer', 'te_employer'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_course[]', 'Courses', 'te_course'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_ug_pg[]', 'UG/PG', 'te_ug_pg'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_no_stu[]', 'No. of Students', 'te_no_stu'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_doj[]', 'DD/MM/YYYY', 'te_doj'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_dol[]', 'DD/MM/YYYY', 'te_dol'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_duration[]', 'Duration', 'te_duration'+counter_t_exp,'t_exp',counter_t_exp, 't_exp', true);
        counter_t_exp++;
        return false;
    });

    
    $("#add_more_r_exp").click(function(){
        create_tr();
        create_serial('r_exp');
        create_input('r_exp_position[]', 'Position','r_exp_position'+counter_r_exp, 'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_institute[]', 'Institute', 'r_exp_institute'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_supervisor[]', 'Supervisor', 'r_exp_supervisor'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_doj[]', 'DD/MM/YYYY', 'r_exp_doj'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_dol[]', 'DD/MM/YYYY', 'r_exp_dol'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_duration[]', 'Duration', 'r_exp_duration'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp', true);
        counter_r_exp++;
        return false;
    });



$("#add_more_ind_exp").click(function(){
    create_tr();
    create_serial('ind_exp');
    create_input('org[]', 'Organization','org'+counter_ind_exp, 'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('work[]', 'Work Profile', 'work'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('ind_doj[]', 'DD/MM/YYYY', 'ind_doj'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('ind_dol[]', 'DD/MM/YYYY', 'ind_dol'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('period[]', 'Duration', 'period'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp',true);
    counter_ind_exp++;
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
<!-- all bootstrap buttons classes -->
<!-- 
  class="btn btn-sm, btn-lg, "
  color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



<a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/layout"></a>

<div class="container">




    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well">
            <form class="form-horizontal" action="savepage3.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="ci_csrf_token" value="">
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

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">3. Employment Details</h4>


            <!-- Form Name -->

<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(A) Present Employment</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="pres_emp_position">Position</span>  
          <div class="col-md-4">
          <input id="pres_emp_position" value="<?php if(isset($emp['position'])) echo htmlspecialchars($emp['position']); ?>" name="pres_emp_position" type="text" placeholder="Position" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="pres_emp_employer">Organization/Institution</span>  
          <div class="col-md-4">
          <input id="pres_emp_employer" value="<?php if(isset($emp['organization'])) echo htmlspecialchars($emp['organization']); ?>" name="pres_emp_employer" type="text" placeholder="Organization/Institution" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="pres_status">Status</span>  
          <div class="col-md-4">
          <select id="pres_status" name="pres_status" class="form-control input-md" required="">
              <option value="">Select</option>
              <option value="Central Govt." <?php if(isset($emp["status"]) and $emp["status"] == 'Central Govt.'){ echo ' selected="selected"'; } ?>>Central Govt.</option>
              <option value="State Government" <?php if(isset($emp["status"]) and $emp["status"] == 'State Government'){ echo ' selected="selected"'; } ?>>State Government</option>
              <option value="Private" <?php if(isset($emp["status"]) and $emp["status"] == 'Private'){ echo ' selected="selected"'; } ?>>Private</option>
              <option value="Quasi Govt." <?php if(isset($emp["status"]) and $emp["status"] == 'Quasi Govt.'){ echo ' selected="selected"'; } ?>>Quasi Govt.</option>
              <option value="Other" <?php if(isset($emp["status"]) and $emp["status"] == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
          </select>
          </div>

          <span class="col-md-2 control-label" for="pres_emp_doj">Date of Joining</span>  
          <div class="col-md-4">
          <input id="pres_emp_doj" name="pres_emp_doj" type="text" placeholder="Date of Joining" value="<?php if(isset($emp['dateOfJoining'])) echo htmlspecialchars($emp['dateOfJoining']); ?>" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="pres_emp_dol">Date of Leaving <br>(Mention Continue if working)</span>  
          <div class="col-md-4">
          <input id="pres_emp_dol" value="<?php if(isset($emp['dateOfLeaving'])) echo htmlspecialchars($emp['dateOfLeaving']); ?>" name="pres_emp_dol" type="text" placeholder="Date of Leaving" class="form-control input-md" required="">
          </div>
          
          <span class="col-md-2 control-label" for="pres_emp_duration">Duration (in years &amp; months)</span>  
          <div class="col-md-4">
          <input id="pres_emp_duration" name="pres_emp_duration" type="text" placeholder="Duration" value="<?php if(isset($emp['duration'])) echo htmlspecialchars($emp['duration']); ?>" class="form-control input-md" required="">
          </div>


         

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel-heading">(B) Employment History (After PhD, Starting with Latest)  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-danger" id="add_more_exp">Add Details</button></div>
      <div class="panel-body">
        
           <table class="table table-bordered">
              <tbody id="exp">
              
                <tr height="30px">
                <th class="col-md-1"> S. No.</th>
                <th class="col-md-3"> Position </th>
                <th class="col-md-4"> Organization/Institution </th>
                <th class="col-md-1"> Date of Joining</th>
                <th class="col-md-1"> Date of Leaving </th>
                <th class="col-md-2"> Duration (in years &amp; months)</th>
              </tr>
            
              <?php
                              $a=1;
                              while ($row = mysqli_fetch_assoc($emphis)) {
                                
                                ?>
                                <tr height="60px">
                    <td class="col-md-1"> 
                    <?php echo htmlspecialchars($a); ?>        </td>
                  <td class="col-md-2">  
                      <input value="<?php if(isset($row['position'])) echo htmlspecialchars($row['position']); ?>" name="position[]" type="text" placeholder="Position" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                      <input value="<?php if(isset($row['organization'])) echo htmlspecialchars($row['organization']); ?>" name="employer[]" type="text" placeholder="Employer" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input  name="doj[]" value="<?php if(isset($row['dateOfJoining'])) echo htmlspecialchars($row['dateOfJoining']); ?>" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input  name="dol[]" value="<?php if(isset($row['dateOfLeaving'])) echo htmlspecialchars($row['dateOfLeaving']); ?>" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input name="exp_duration[]" value="<?php if(isset($row['duration'])) echo htmlspecialchars($row['duration']); ?>" type="text" placeholder="Duration" class="form-control input-md" required=""> 
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

<!-- Teaching Experience  -->
          
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
    <div class="panel-heading">(C) Teaching Experience (After PhD)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_t_exp">Add Details</button></div>
      <div class="panel-body">
        <table class="table table-bordered">
            <tbody id="t_exp">
            
            <tr height="30px">
              <th class="col-md-1"> S. No.</th>
              <th class="col-md-2"> Position</th>
              <th class="col-md-1"> Employer </th>
              <th class="col-md-1"> Course Taught </th>
              <th class="col-md-1"> UG/PG </th>
              <th class="col-md-1"> No. of Students </th>
              <th class="col-md-1"> Date of Joining the Institute</th>
              <th class="col-md-1"> Date of Leaving the Institute</th>
              <th class="col-md-1"> Duration (in years &amp; months) </th>
              
            </tr>


                        
            <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($tchexp)) {
              
              ?>
              <tr height="60px">
              <td class="col-md-1"> 
              <?php echo htmlspecialchars($a); ?></td>
              <td class="col-md-2"> 
                  <input id="te_position1" name="te_position[]" type="text" value="<?php echo htmlspecialchars($row["position"]); ?>" placeholder="Position" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="te_employer1" name="te_employer[]" type="text" value="<?php echo htmlspecialchars($row["employer"]); ?>" placeholder="Employer" class="form-control input-md" required=""> 
              </td>

              <td class="col-md-2"> 
                <input id="te_course1" name="te_course[]" type="text" value="<?php echo htmlspecialchars($row["courseTaught"]); ?>" placeholder="Course Taught" class="form-control input-md" required=""> 
              </td>
             
             <td class="col-md-2"> 
               <input id="te_ug_pg1" name="te_ug_pg[]" type="text" value="<?php echo htmlspecialchars($row["ug_pg"]); ?>" placeholder="UG/PG" class="form-control input-md" required=""> 
             </td>

             <td class="col-md-2"> 
               <input id="te_no_stu1" name="te_no_stu[]" type="text" value="<?php echo htmlspecialchars($row["noOfStudents"]); ?>" placeholder="No. of Students" class="form-control input-md" required=""> 
             </td>

              <td class="col-md-1"> 
                <input id="te_doj1" name="te_doj[]" type="text" value="<?php echo htmlspecialchars($row["dateOfJoining"]); ?>" placeholder="Joining" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_dol1" name="te_dol[]" type="text" value="<?php echo htmlspecialchars($row["dateOfLeaving"]); ?>" placeholder="Leaving" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_duration1" name="te_duration[]" type="text" value="<?php echo htmlspecialchars($row["duration"]); ?>" placeholder="Duration" class="form-control input-md" required=""> 
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

  <!-- c) Research Experience: (including Postdoctoral) input-->
                 
<div class="row">
<div class="col-md-12">
  <div class="panel panel-success">
  <div class="panel-heading">(D) Research Experience (Post PhD, including Post Doctoral)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_r_exp">Add Details</button></div>
    <div class="panel-body">
      <table class="table table-bordered">
          <tbody id="r_exp">
          
          <tr height="30px">
            <th class="col-md-1"> S. No.</th>
            <th class="col-md-1"> Position </th>
            <th class="col-md-2"> Institute</th>
            <th class="col-md-2"> Supervisor</th>
            <!-- <th class="col-md-2"> Topic </th> -->
            <th class="col-md-1"> Date of Joining</th>
            <th class="col-md-1"> Date of Leaving</th>
            <th class="col-md-1"> Duration (in years &amp; months) </th>
            
          </tr>


                    
          
          <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($resexp)) {
              
              ?>              
              <tr height="60px">
            <td class="col-md-1"> 
            <?php echo htmlspecialchars($a); ?>   </td>
            <td class="col-md-2"> 
                <input id="r_exp_position1" name="r_exp_position[]" type="text" value="<?php echo htmlspecialchars($row["position"]); ?>  " placeholder="Position" class="form-control input-md" required=""> 
              </td>
            <td class="col-md-2"> 
              <input id="r_exp_institute1" name="r_exp_institute[]" type="text" value="<?php echo htmlspecialchars($row["institute"]); ?>  " placeholder="Institute" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-2"> 
              <input id="r_exp_supervisor1" name="r_exp_supervisor[]" type="text" value="<?php echo htmlspecialchars($row["supervisor"]); ?>  " placeholder="Supervisor" class="form-control input-md" required=""> 
            </td>
           <!--  <td class="col-md-2"> 
              <input id="r_exp_topic1" name="r_exp_topic[]" type="text" value=""  placeholder="Topic" class="form-control input-md" required=""> 
            </td> -->
            <td class="col-md-1"> 
              <input id="r_exp_doj1" name="r_exp_doj[]" type="text" value="<?php echo htmlspecialchars($row["dateOfJoining"]); ?>  " placeholder="Joining" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_dol1" name="r_exp_dol[]" type="text" value="<?php echo htmlspecialchars($row["dateOfLeaving"]); ?>  " placeholder="Leaving" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_duration1" name="r_exp_duration[]" type="text" value="<?php echo htmlspecialchars($row["duration"]); ?>  " placeholder="Duration" class="form-control input-md" required=""> 
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


<!-- g)  Industrial Experience Interaction -->
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(E) Industrial Experience &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_ind_exp">Add Details</button></div>
        <div class="panel-body">

            <table class="table table-bordered">
                <tbody id="ind_exp">
                
                <tr height="30px">
                  <th class="col-md-1"> S. No.</th>
                  <th class="col-md-2"> Organization </th>
                  <th class="col-md-3"> Work Profile</th>
                  <th class="col-md-2"> Date of Joining</th>
                  <th class="col-md-2"> Date of Leaving</th>
                  <th class="col-md-2"> Duration (in years &amp; months)</th>
                </tr>


                                
                <?php
            $a=1;
            while ($row = mysqli_fetch_assoc($indexp)) {
              
              ?>
              <tr height="60px">
                  <td class="col-md-1"> 
                  <?php echo htmlspecialchars($a); ?>    </td>
                  <td class="col-md-2"> 
                      <input  name="org[]" type="text" value="<?php echo htmlspecialchars($row["organization"]); ?>  " placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input name="work[]" type="text" value="<?php echo htmlspecialchars($row["workprofile"]); ?>  " placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input name="ind_doj[]" type="text" value="<?php echo htmlspecialchars($row["dateOfJoining"]); ?> " placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input  name="ind_dol[]" type="text" value="<?php echo htmlspecialchars($row["dateOfLeaving"]); ?>  " placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input  name="period[]" type="text" value="<?php echo htmlspecialchars($row["duration"]); ?>  " placeholder="Period" class="form-control input-md" required=""> 
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


<h4 style="text-align:center; font-weight: bold; color: #6739bb;">4. Area(s) of Specialization and Current Area(s) of Research</h4>
 <div class="row">
  <div class="col-md-6">
    <div class="panel panel-success">
      <!-- <div class="panel-heading">9. Area(s) of Specialization *</div> -->
      <div class="panel-body">
        <strong>Areas of specialization</strong>
        <textarea style="height:150px" placeholder="Areas of specialization" class="form-control input-md" name="area_spl" maxlength="500" required=""><?php if(isset($emp['areaOfSpecialization'])) echo htmlspecialchars($emp['areaOfSpecialization']); ?></textarea>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-success">
      <!-- <div class="panel-heading">10. Current Area(s) of Research *</div> -->
      <div class="panel-body">
        <strong>Current Area of research</strong>
        <textarea style="height:150px" placeholder="Current Area of research" class="form-control input-md" name="area_rese" maxlength="500" required=""><?php if(isset($emp['currentAreaOfResearch'])) echo htmlspecialchars($emp['currentAreaOfResearch']); ?></textarea>
      </div>
    </div>
  </div>
 </div>

<div class="form-group">
  
  <div class="col-md-1">
    <a href="page2.php" class="btn btn-primary pull-left">PREV</a>
  </div>

  <div class="col-md-11">
    <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right" style="margin-left: 75%;">SAVE &amp; NEXT</button>
    
  </div>
  
</div>
          
</div></div></fieldset>
</form>

        </div>
    </div>
</div>

<script type="text/javascript">
  
  function yearcalc()
  { 
    // alert('hi');
    var num1=document.getElementById("yoj").value;
    var num2=document.getElementById("yog").value;

    var duration_year=parseFloat(num2)-parseFloat(num1);
    // alert(duration_year);
    document.getElementById("result_test").value = duration_year ;
   
  }

 
</script>

<div id="footer"></div>



<script type="text/javascript">
	
	function blinker() {
	    $('.blink_me').fadeOut(500);
	    $('.blink_me').fadeIn(500);
	}

	setInterval(blinker, 1000);
</script></body></html>