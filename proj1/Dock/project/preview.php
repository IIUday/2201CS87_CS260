<?php
 session_start(); 
 include 'dbconnect.php';
 
 $con= dbcon();
 $id = $_SESSION['user_id'];
 $sql=mysqli_query($con,"SELECT * FROM users WHERE id = $id ");
 $sql1 =mysqli_query($con,"SELECT * FROM personal_details WHERE Id = $id");
 $sql2 =mysqli_query($con,"SELECT * FROM acaddetails WHERE id = $id");
 $sql3 =mysqli_query($con,"SELECT * FROM degreedetails WHERE id = $id");
 $sql4 =mysqli_query($con,"SELECT * FROM employmentdetails WHERE id = $id");
 $sql5 =mysqli_query($con,"SELECT * FROM employmenthistory WHERE id = $id");
 $sql6 =mysqli_query($con,"SELECT * FROM teachingexperience WHERE id = $id");
 $sql7 =mysqli_query($con,"SELECT * FROM researchexperience WHERE id = $id");
 $sql8 =mysqli_query($con,"SELECT * FROM industrialexperience WHERE id = $id");
 $sql9 =mysqli_query($con,"SELECT * FROM summpublication WHERE id = $id");
 $sql10 =mysqli_query($con,"SELECT * FROM bestpublications WHERE id = $id");
 $sql11 =mysqli_query($con,"SELECT * FROM patents WHERE id = $id");
 $sql12 =mysqli_query($con,"SELECT * FROM books WHERE id = $id");
 $sql13 =mysqli_query($con,"SELECT * FROM bookchapter WHERE id = $id");
 $sql14 =mysqli_query($con,"SELECT * FROM memprofsociety WHERE id = $id");
 $sql15 =mysqli_query($con,"SELECT * FROM professionaltraining WHERE id = $id");
 $sql16 =mysqli_query($con,"SELECT * FROM awards WHERE id = $id");
 $sql17 =mysqli_query($con,"SELECT * FROM phd_supervision WHERE id = $id");
 $sql18 =mysqli_query($con,"SELECT * FROM pg_supervision WHERE id = $id");
 $sql19 =mysqli_query($con,"SELECT * FROM ug_supervision WHERE id = $id");
 $sql20 =mysqli_query($con,"SELECT * FROM sponsoredprojects WHERE id = $id");
 $sql21 =mysqli_query($con,"SELECT * FROM consultancyprojects WHERE id = $id");
 $sql22 =mysqli_query($con,"SELECT * FROM relinfo WHERE id = $id");
 $sql23 =mysqli_query($con,"SELECT * FROM referees WHERE id = $id");
 $sql24 =mysqli_query($con,"SELECT * FROM documents WHERE id = $id");
 $user = mysqli_fetch_array($sql);
 $reg = mysqli_fetch_array($sql1);
 $acad = mysqli_fetch_array($sql2);
 $p_emp = mysqli_fetch_array($sql4);
 $pub = mysqli_fetch_array($sql9);
 $relinfo = mysqli_fetch_array($sql22);
 $docs = mysqli_fetch_array($sql24);
  
 // Initialize the session 
 // Store the submitted data sent 
 // via POST method, stored  
   
            
 ?> 
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<style type="text/css">
		@page {
			margin: 0.5in 0.5in 0.5in 0.5in;
		}

		.receipt {
			margin: 0 auto 1in auto;
			/*font-family:"verdana",monospace;*/
			border: solid #000;
			padding: 0 0.25in;
			width: 10in;
			min-height: 2.5in;
			height: auto;
			/*page-break-inside:avoid;
	        page-break-before:auto;
	        page-break-after:auto;*/
			/*word-wrap: break-word;*/
		}

		.receipt div,
		.receipt p,
		.receipt span {
			/*page-break-before:avoid;
	        page-break-after:avoid;*/
		}

		.receipt div {
			margin: 0;
			margin-bottom: 0.1in;
			padding: 0;
			/*word-wrap: break-word;*/
			/*background-color: green;*/


		}

		.receipt span {
			display: inline-block;
			line-height: 2;
		}

		.receipt p,
		.receipt span {
			margin: 0;
			padding: 0;


		}

		.title {
			font-family: Arial, sans-serif;
			font-size: 1.5em;
			color: #a40a0b;
			font-weight: bold;
			width: 100%;
		}

		.label {
			font-weight: bold;
			color: #a40a0b;
			background-color: #f1f1d1;
			margin-bottom: 10px !important;
			padding-left: 5px !important;
			padding-right: 5px !important;
			border-radius: 5px;
			font-size: 1.1em;
		}

		.date,
		.payee,
		.phone,
		.signature {
			border-bottom: solid thin #444;
		}

		.payee,
		.signature {
			width: 2in;
		}

		.phone,
		.date {
			width: 1.25in;
		}

		.amount,
		.payer {
			font-style: italic;
			text-decoration: underline;
		}

		.tab {
			border-collapse: collapse;
			width: 100%;
			/*word-break: break-all;
	    	word-wrap: break-word;*/

			/*background-color: green;*/
			/*word-wrap: break-word!important;*/

			/*white-space: pre-line!important;*/
			/*overflow:auto!important;*/
		}

		.tab td {
			border: 1px solid #CCC !important;
			padding-left: 10px;
			/*background-color:#DDFFFF;*/

			word-wrap: break-word !important;
			/*white-space: pre-line!important;*/
			/*overflow:auto!important;*/
			/*background-color: red;*/

		}

		.receipt_left {
			float: left;
			width: 5.5in;
			/*word-wrap: break-word;*/
		}

		.receipt_right {
			float: right;
			width: 1.5in;
			/*word-wrap: break-word;*/
		}

		.receipt_left1 {
			float: left;
			width: 4.5in;
			/*word-wrap: break-word;*/
		}

		.receipt_right1 {
			float: right;
			width: 4.5in;
			/*word-wrap: break-word;*/
		}

		.receipt_right img {
			height: 1in;
			width: 0.8in;
			padding: 2px;
			border: 1px solid #CCC;
		}

		.receipt_center {
			/*float: left;*/
			width: auto;
			height: 120px;
			/*word-wrap: break-word;*/
		}

		th {
			text-align: left;
		}

		.tr_title {
			color: #0a5398;
		}
	</style>
</head>

<body style="font-family:Arial,sans-serif;">

	<div class="receipt">
		<div class="receipt_center">
			<img src="IIT-Patna-logo.webp" style="height: 85px; float: left;">
			<p style="text-align: center; font-size: 1.7em;">भारतीय प्रौद्योगिकी संस्थान पटना<br>Indian Institute of
				Technology Patna</p>
			<p
				style="text-align: center; margin-top: 10px; background-color: #175395; line-height: 25px; color: #FFF; font-weight: bold;">
				Application for the Faculty Position</p>
		</div>
		<hr>
		<div class="title"></div>
		<div class="receipt_left">
			<p style="width:10in;">Advertisement Number : <?php if(isset($reg["AdvertisementNumber"])) echo $reg["AdvertisementNumber"] ?></p>
			<p>Date of Application : <?php if(isset($reg["DateofApplication"])) echo $reg["DateofApplication"] ?></p>
			<p>Post Applied for : <?php if(isset($reg["PostAppliedfor"])) echo $reg["PostAppliedfor"] ?></p>
			<p>Department : <?php if(isset($reg["Department_School"])) echo $reg["Department_School"] ?></p>
			<p>Application Number : <?php if(isset($reg["ApplicationNumber"])) echo $reg["ApplicationNumber"] ?></p>

		</div>
		<div class="receipt_right" style="margin-top: -30px;">
			<img src="<?php if(isset($reg["Filename"])) echo $reg["Filename"]; else echo "userdetails/person-dummy.jpg";?>">
		</div>
		<div style="clear:both"></div>
		<div>
			<span class="label">1. Personal Details</span>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td><strong class="tr_title">First Name</strong></td>
						<td><strong class="tr_title">Middle Name</strong></td>
						<td><strong class="tr_title">Last Name</strong></td>
					</tr>
					<tr>
						<td><?php if(isset($reg["FirstName"])) echo $reg["FirstName"] ?></td>
						<td><?php if(isset($reg["MiddleName"])) echo $reg["MiddleName"] ?></td>
						<td><?php if(isset($reg["LastName"])) echo $reg["LastName"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>


			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td><strong class="tr_title">Date of Birth</strong></td>
						<!-- <td><strong class="tr_title">Age</strong></td> -->
						<td><strong class="tr_title">Gender</strong></td>
						<td><strong class="tr_title">Marital Status</strong></td>
						<td><strong class="tr_title">Category</strong></td>
						<td><strong class="tr_title">Nationality</strong></td>
						<td><strong class="tr_title">ID Proof</strong></td>

					</tr>
					<tr>
						<td><?php if(isset($reg["DateofBirth"])) echo $reg["DateofBirth"] ?></td>
						<!-- <td></td> -->
						<td><?php if(isset($reg["Gender"])) echo $reg["Gender"] ?></td>
						<td><?php if(isset($reg["MaritalStatus"])) echo $reg["MaritalStatus"] ?></td>
						<td><?php if(isset($reg["Category"])) echo $reg["Category"] ?></td>
						<td><?php if(isset($reg["Nationality"])) echo $reg["Nationality"] ?></td>
						<td><?php if(isset($reg["IDProof"])) echo $reg["IDProof"] ?></td>
					</tr>
					<tr>
						<td><strong>Father's Name</strong></td>
						<td colspan="6">D<?php if(isset($reg["FathersName"])) echo $reg["FathersName"] ?></td>

					</tr>
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td width="50%"><strong class="tr_title">Current Address </strong></td>
						<td width="50%"><strong class="tr_title">Permanent Address </strong></td>

					</tr>

					<tr>
						<td><?php if(isset($reg["Street"])) echo $reg["Street"] ?></td>
						<td><?php if(isset($reg["Street1"])) echo $reg["Street1"] ?></td>

					</tr>
					<tr>
						<td><?php if(isset($reg["City"])) echo $reg["City"] ?></td>
						<td><?php if(isset($reg["City1"])) echo $reg["City1"] ?></td>

					</tr>
					<tr>
						<td><?php if(isset($reg["State"])) echo $reg["State"] ?></td>
						<td><?php if(isset($reg["State1"])) echo $reg["State1"] ?></td>

					</tr>
					<tr>
						<td><?php if(isset($reg["Country"])) echo $reg["Country"] ?></td>
						<td><?php if(isset($reg["Country1"])) echo $reg["Country1"] ?></td>

					</tr>
					<tr>
						<td><?php if(isset($reg["PIN_ZIP"])) echo $reg["PIN_ZIP"] ?></td>
						<td><?php if(isset($reg["PIN_ZIP1"])) echo $reg["PIN_ZIP1"] ?></td>

					</tr>
				</tbody>
			</table>
			<br>

			<span class="label"></span>
			<table class="tab">
				<!-- <tr>
			<td colspan="2"><strong>Mobile & Email</strong></td>
			
		</tr> -->
				<tbody>
					<tr>
						<td style="background-color:#f1f1f1;"><strong class="tr_title">Mobile</strong></td>
						<td><?php if(isset($reg["Mobile"])) echo $reg["Mobile"] ?></td>
					</tr>

					<tr>
						<td style="background-color:#f1f1f1;"><strong class="tr_title">Alternate Mobile</strong></td>
						<td><?php if(isset($reg["AlternateMobile"])) echo $reg["AlternateMobile"] ?></td>
					</tr>

					<tr>
						<td style="background-color:#f1f1f1;"><strong class="tr_title">Landline Phone No.</strong></td>
						<td><?php if(isset($reg["LandlineNumber"])) echo $reg["LandlineNumber"] ?></td>
					</tr>

					<tr>
						<td style="background-color:#f1f1f1;"><strong class="tr_title">E-mail</strong></td>
						<td><?php if(isset($reg["Email"])) echo $reg["Email"] ?></td>
					</tr>

					<tr>
						<td style="background-color:#f1f1f1;"><strong class="tr_title">Alternate E-mail</strong></td>
						<td><?php if(isset($reg["AlternateEmail"])) echo $reg["AlternateEmail"] ?></td>
					</tr>






				</tbody>
			</table>
			<br>

			<span class="label">2. Educational Qualifications</span>
			<table class="tab">

				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6" class="tr_title"><strong>(A) Ph. D. Details</strong></td>
					</tr>

					<tr>
						<td width="30%"><strong>University/<br>Institute</strong></td>
						<td width="12%"><strong>Department</strong></td>
						<td width="17%"><strong>Name of Ph. D. <br>Supervisor</strong></td>
						<td width="10%"><strong>Year of <br>Joining</strong></td>
						<td width="15%"><strong>Date of <br>successful <br>thesis Defence</strong></td>
						<td width="15%"><strong>Date of <br>Award</strong></td>
					</tr>

					<tr>
						<td><?php if(isset($acad["university"])) echo $acad["university"] ?></td>
						<td><?php if(isset($acad["department"])) echo $acad["department"] ?></td>
						<td><?php if(isset($acad["phdSupervisor"])) echo $acad["phdSupervisor"] ?></td>
						<td><?php if(isset($acad["yearOfJoining"])) echo $acad["yearOfJoining"] ?></td>
						<td><?php if(isset($acad["dateOfThesis"])) echo $acad["dateOfThesis"] ?></td>
						<td><?php if(isset($acad["dateOfAward"])) echo $acad["dateOfAward"] ?></td>


					</tr>

					<tr>
						<td><strong>Title of Ph. D. Thesis</strong></td>
						<td colspan="5"><?php if(isset($acad["titleOfThesis"])) echo $acad["titleOfThesis"] ?></td>
					</tr>

				</tbody>
			</table>
			<br>

			<table class="tab">

				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8" class="tr_title"><strong>(B) Academic Details - PG</strong></td>
					</tr>


					<tr>
						<td width="10%"><strong>Degree</strong></td>
						<td width="25%"><strong>University/<br>Institute</strong></td>
						<td width="20%"><strong>Subjects</strong></td>
						<td width="10%"><strong>Year of <br>Joining</strong></td>
						<td width="12%"><strong>Year of <br>Graduation</strong></td>
						<td width="10%"><strong>Duration <br>(in years)</strong></td>
						<td width="30%"><strong>Percentage/CGPA </strong></td>
						<td width="30%"><strong>Division/Class </strong></td>



					</tr>
					<tr>
						<td><?php if(isset($acad["pg_deg"])) echo $acad["pg_deg"] ?></td>
						<td><?php if(isset($acad["pg_uni"])) echo $acad["pg_uni"] ?></td>
						<td><?php if(isset($acad["pg_branch"])) echo $acad["pg_branch"] ?></td>
						<td><?php if(isset($acad["pg_yoj"])) echo $acad["pg_yoj"] ?></td>
						<td><?php if(isset($acad["pg_yoc"])) echo $acad["pg_yoc"] ?></td>
						<td><?php if(isset($acad["pg_duration"])) echo $acad["pg_duration"] ?></td>
						<td><?php if(isset($acad["pg_cgpa"])) echo $acad["pg_cgpa"] ?></td>
						<td><?php if(isset($acad["pg_div"])) echo $acad["pg_div"] ?></td>


					</tr>
				</tbody>
			</table>
			<br>

			<table class="tab">

				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8" class="tr_title"><strong>(C) Academic Details - UG</strong></td>
					</tr>

					<tr>
						<td width="10%"><strong>Degree</strong></td>
						<td width="25%"><strong>University/<br>Institute</strong></td>
						<td width="20%"><strong>Subjects</strong></td>
						<td width="10%"><strong>Year of <br>Joining</strong></td>
						<td width="12%"><strong>Year of <br>Graduation</strong></td>
						<td width="10%"><strong>Duration <br>(in years)</strong></td>
						<td width="30%"><strong>Percentage/CGPA </strong></td>
						<td width="30%"><strong>Division/Class </strong></td>



					</tr>
					<tr>
                    <td><?php if(isset($acad["ug_deg"])) echo $acad["ug_deg"] ?></td>
						<td><?php if(isset($acad["ug_uni"])) echo $acad["ug_uni"] ?></td>
						<td><?php if(isset($acad["ug_branch"])) echo $acad["ug_branch"] ?></td>
						<td><?php if(isset($acad["ug_yoj"])) echo $acad["ug_yoj"] ?></td>
						<td><?php if(isset($acad["ug_yoc"])) echo $acad["ug_yoc"] ?></td>
						<td><?php if(isset($acad["ug_duration"])) echo $acad["ug_duration"] ?></td>
						<td><?php if(isset($acad["ug_cgpa"])) echo $acad["ug_cgpa"] ?></td>
						<td><?php if(isset($acad["ug_div"])) echo $acad["ug_div"] ?></td>


					</tr>
				</tbody>
			</table>
			<br>

			<table class="tab">

				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8" class="tr_title"><strong>(D) Academic Details - School</strong></td>
					</tr>

					<tr>
						<td width="20%"><strong>10th/12th/HSC/Diploma</strong></td>
						<td width="20%"><strong>School</strong></td>
						<td width="15%"><strong>Year of Passing</strong></td>
						<td width="15%"><strong>Percentage/CGPA</strong></td>
						<td width="15%"><strong>Division/Class</strong></td>



					</tr>
					<tr>
						<td>12th/HSC/Diploma</td>
						<td><?php if(isset($acad["school12th"])) echo $acad["school12th"] ?></td>
						<td><?php if(isset($acad["yearOfPass12th"])) echo $acad["yearOfPass12th"] ?></td>
						<!-- <td></td> -->
						<td><?php if(isset($acad["percentage12th"])) echo $acad["percentage12th"] ?></td>
						<td><?php if(isset($acad["division12th"])) echo $acad["division12th"] ?></td>

					</tr>
					<tr>
						<td>10th</td>
						<td><?php if(isset($acad["school10th"])) echo $acad["school10th"] ?></td>
						<td><?php if(isset($acad["yearOfPass10th"])) echo $acad["yearOfPass10th"] ?></td>
						<!-- <td></td> -->
						<td><?php if(isset($acad["percentage10th"])) echo $acad["percentage10th"] ?></td>
						<td><?php if(isset($acad["division10th"])) echo $acad["division10th"] ?></td>

					</tr>
				</tbody>
			</table>
			<br>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8" class="tr_title"><strong>(E) Additional Educational Qualifications (If any)
							</strong></td>
					</tr>

					<tr>
						<td width="10%"><strong>Degree</strong></td>
						<td width="25%"><strong>University/<br>Institute</strong></td>
						<td width="20%"><strong>Subjects</strong></td>
						<td width="10%"><strong>Year of <br>Joining</strong></td>
						<td width="12%"><strong>Year of <br>Graduation</strong></td>
						<td width="10%"><strong>Duration <br>(in years)</strong></td>
						<td width="30%"><strong>Percentage/CGPA </strong></td>
						<td width="30%"><strong>Division/Class </strong></td>
					</tr>
					<tr>
                        <?php
                            while($row = mysqli_fetch_assoc($sql3)){
                        ?>
						<td><?php if(isset($row["degree"])) echo $row["degree"] ?></td>
						<td><?php if(isset($row["university"])) echo $row["university"] ?></td>
						<td><?php if(isset($row["branch"])) echo $row["branch"] ?></td>
						<td><?php if(isset($row["yearOfJoining"])) echo $row["yearOfJoining"] ?></td>
						<td><?php if(isset($row["yearOfCompletion"])) echo $row["yearOfCompletion"] ?></td>
						<td><?php if(isset($row["duration"])) echo $row["duration"] ?></td>
						<td><?php if(isset($row["cgpa"])) echo $row["cgpa"] ?></td>
						<td><?php if(isset($row["division"])) echo $row["division"] ?></td>
					</tr>
                    <?php
                            }
                    ?>
					
				</tbody>
			</table>
			<br>

			<span class="label">3. Employment Details </span>

			<table class="tab">

				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="5" class="tr_title"><strong>(A) Present Employment</strong></td>
					</tr>


					<tr>
						<td width="20"><strong>Position </strong></td>
						<td width="30"><strong>Organization/Institution</strong></td>
						<td width="15"><strong>Date of <br>Joining</strong></td>
						<td width="15"><strong>Date of <br>Leaving </strong></td>
						<td width="15"><strong>Duration <br>(in years)</strong></td>
					</tr>
					<tr>
						<td><?php if(isset($p_emp["position"])) echo $p_emp["position"] ?></td>
						<td><?php if(isset($p_emp["organization"])) echo $p_emp["organization"] ?></td>
						<td><?php if(isset($p_emp["dateOfJoining"])) echo $p_emp["dateOfJoining"] ?></td>
                        <td><?php if(isset($p_emp["dateOfLeaving"])) echo $p_emp["dateOfLeaving"] ?></td>
						<td><?php if(isset($p_emp["duration"])) echo $p_emp["duration"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label"> </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="5" class="tr_title"><strong>(B) Employment History (After PhD )</strong></td>
					</tr>

					<tr>
						<td width="20"><strong>Position </strong></td>
						<td width="30"><strong>Organization/Institution</strong></td>
						<td width="15"><strong>Date of <br>Joining</strong></td>
						<td width="15"><strong>Date of <br>Leaving </strong></td>
						<td width="15"><strong>Duration <br>(in years)</strong></td>
					</tr>
					<tr>
                    <?php
                            while($row = mysqli_fetch_assoc($sql5)){
                        ?>
						<td><?php if(isset($row["position"])) echo $row["position"] ?></td>
						<td><?php if(isset($row["organization"])) echo $row["organization"] ?></td>
						<td><?php if(isset($row["dateOfJoining"])) echo $row["dateOfJoining"] ?></td>
						<td><?php if(isset($row["dateOfLeaving"])) echo $row["dateOfLeaving"] ?></td>
						<!-- <td>Possimus fugit aspernatur.</td> -->
						<td><?php if(isset($row["duration"])) echo $row["duration"] ?></td>
					</tr>
                    <?php
                            }
                            ?>
					
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8" class="tr_title"><strong>(C) Teaching Experience (After PhD)</strong></td>
					</tr>

					<tr>
						<!-- <td><strong>S. No.</strong></td> -->
						<td width="25%"><strong>Position</strong></td>
						<td width="30%"><strong>Employer</strong></td>
						<td width="30%"><strong>Course Taught</strong></td>
						<td width="30%"><strong>UG/PG</strong></td>
						<td width="30%"><strong>No. of Students</strong></td>
						<td width="10%"><strong>Date of <br>Joining</strong></td>
						<td width="10%"><strong>Date of <br>Leaving</strong></td>
						<td width="10%"><strong>Duration</strong></td>
					</tr>
					<tr>
						<!-- <td></td> -->
                        <?php
                            while($row = mysqli_fetch_assoc($sql6)){
                        ?>
						<td><?php if(isset($row["position"])) echo $row["position"] ?></td>
						<td><?php if(isset($row["employer"])) echo $row["employer"] ?></td>
						<td><?php if(isset($row["courseTaught"])) echo $row["courseTaught"] ?></td>
						<td><?php if(isset($row["ug_pg"])) echo $row["ug_pg"] ?></td>
						<td><?php if(isset($row["noOfStudents"])) echo $row["noOfStudents"] ?></td>
						<td><?php if(isset($row["dateOfJoining"])) echo $row["dateOfJoining"] ?></td>
						<td><?php if(isset($row["dateOfLeaving"])) echo $row["dateOfLeaving"] ?></td>
						<td><?php if(isset($row["duration"])) echo $row["duration"] ?></td>
					</tr>
                    <?php
                            }
                            ?>
					
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1">
						<td colspan="6" class="tr_title"><strong>(D) Research Experience </strong></td>
					</tr>

					<tr>
						<!-- <td><strong>S. No.</strong></td> -->
						<td width="20%"><strong>Position</strong></td>
						<td width="20%"><strong>Institute</strong></td>
						<td width="20%"><strong>Supervisor</strong></td>
						<td width="10%"><strong>Date of <br>Joining</strong></td>
						<td width="10%"><strong>Date of <br>Leaving</strong></td>
						<td width="10%"><strong>Duration</strong></td>
					</tr>
					<tr>
                    <?php
                            while($row = mysqli_fetch_assoc($sql7)){
                        ?>
						<!-- <td></td> -->
						<td><?php if(isset($row["position"])) echo $row["position"] ?></td>
						<td><?php if(isset($row["institute"])) echo $row["institute"] ?></td>
						<td><?php if(isset($row["supervisor"])) echo $row["supervisor"] ?></td>
						<td><?php if(isset($row["dateOfJoining"])) echo $row["dateOfJoining"] ?></td>
						<td><?php if(isset($row["dateOfLeaving"])) echo $row["dateOfLeaving"] ?></td>
						<td><?php if(isset($row["duration"])) echo $row["duration"] ?></td>
					</tr>
                    <?php
                            }

                        ?>
					
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1">
						<td colspan="5"><strong class="tr_title">(E) Industrial Experience </strong></td>
					</tr>

					<tr>
						<!-- <td><strong>S. No.</strong></td> -->
						<td width="20%"><strong>Organization</strong></td>
						<td width="20%"><strong>Work Profile</strong></td>
						<td width="10%"><strong>Date of <br>Joining</strong></td>
						<td width="10%"><strong>Date of <br>Leaving</strong></td>
						<td width="10%"><strong>Duration</strong></td>
					</tr>
					<tr>
						<!-- <td></td> -->
                        <?php
                            while($row = mysqli_fetch_assoc($sql8)){
                        ?>
						<td><?php if(isset($row["organization"])) echo $row["organization"] ?></td>
						<td><?php if(isset($row["workprofile"])) echo $row["workprofile"] ?></td>
						<td><?php if(isset($row["dateOfJoining"])) echo $row["dateOfJoining"] ?></td>
						<td><?php if(isset($row["dateOfLeaving"])) echo $row["dateOfLeaving"] ?></td>
						<td><?php if(isset($row["duration"])) echo $row["duration"] ?></td>
					</tr>
                    <?php
                            }
                            ?>
					
				</tbody>
			</table>
			<br>

			<span class="label">4. Area(s) of Specialization and Current Area(s) of Research</span>
			<table class="tab">
				<!-- <tr style="background-color:#f1f1f1"> 
				<td><strong class="tr_title">4. Area(s) of Specialization & Current Area(s) of Research</strong></td>
			</tr> -->
				<tbody>
					<tr>
						<td width="25%" style="background-color: #f1f1f1;"><strong class="tr_title">Area(s) of
								Specialization</strong></td>
						<td><?php if(isset($p_emp["areaOfSpecialization"])) echo $p_emp["areaOfSpecialization"] ?></td>
					</tr>

					<tr>
						<td width="25%" style="background-color: #f1f1f1;"><strong class="tr_title">Current Area(s) of
								Research</strong></td>
						<td><?php if(isset($p_emp["currentAreaOfResearch"])) echo $row["currentAreaOfResearch"] ?></td>
					</tr>


				</tbody>
			</table>
			<br>


			<span class="label">5. Summary of Publications</span>
			<table class="tab">



				<tbody>
					<tr>
						<td width="50%"><strong>Number of International Journal Papers </strong></td>
						<td><?php if(isset($pub["noOfIntJnlPps"])) echo $pub["noOfIntJnlPps"] ?></td>
					</tr>

					<tr>
						<td width="50%"><strong>Number of National Journal Papers </strong></td>
						<td><?php if(isset($pub["noOfNatJnlPps"])) echo $pub["noOfNatJnlPps"] ?></td>
					</tr>

					<tr>
						<td><strong> Number of International Conference Papers </strong></td>
						<td><?php if(isset($pub["noOfIntCnfPps"])) echo $pub["noOfIntCnfPps"] ?></td>
					</tr>

					<tr>
						<td><strong> Number of National Conference Papers </strong></td>
						<td><?php if(isset($pub["noOfNatCnfPps"])) echo $pub["noOfNatCnfPps"] ?></td>
					</tr>

					<tr>
						<td><strong> Number of Patent(s) </strong></td>
						<td><?php if(isset($pub["noOfPatents"])) echo $pub["noOfPatents"] ?></td>
					</tr>

					<tr>
						<td><strong> Number of Book(s) </strong></td>
						<td><?php if(isset($pub["noOfBooks"])) echo $pub["noOfBooks"] ?></td>
					</tr>

					<tr>
						<td><strong>Number of Book Chapter(s) </strong></td>
						<td><?php if(isset($pub["noOfBookChpt"])) echo $pub["noOfBookChpt"] ?></td>
					</tr>


				</tbody>
			</table>
			<br>


			<span class="label">6. List of 10 Best Research Publications (Journal/Conference)</span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8"><strong class="tr_title">(A) Journals(s)</strong></td>
					</tr>
					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="25%"><strong>Author(s) </strong></td>
						<td width="30%"><strong>Title</strong></td>
						<td width="25%"><strong>Name of Journal</strong></td>
						<td width="10%"><strong>Year, Vol., Page</strong></td>
						<td width="5%"><strong>Impact Factor</strong></td>
						<td width="1%"><strong>DOI</strong></td>
						<td width="5%"><strong>Status</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql10)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["author"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["year"] ?></td>
						<td><?php echo $row["impactFactor"] ?></td>
						<td><?php echo $row["doi"] ?></td>
						<td><?php echo $row["status"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
					
				</tbody>
			</table>
			<br>

			<!-- <table class="tab">
			<tr style="background-color:#f1f1f1;">
				<td colspan="3"><strong class="tr_title">(B) Conference(s)</strong></td>
			</tr>
			<tr>
				<td width="20%"><strong>Name of the Conference </strong></td>
				<td width="20%"><strong>Title of Paper</strong></td>
				<td width="10%"><strong>Year</strong></td>
			</tr>
					</table>
		<br />	 -->

			<span class="label">7. List of Patent(s), Book(s), Book Chapter(s)</span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="8"><strong class="tr_title">(A) Patent(s)</strong></td>
					</tr>
					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Inventor(s) </strong></td>
						<td width="20%"><strong>Title of Patent</strong></td>
						<td width="15%"><strong>Country of<br> Patent</strong></td>
						<td width="10%"><strong>Patent <br>Number</strong></td>
						<td width="10%"><strong>Date of <br>Filing</strong></td>
						<td width="10%"><strong>Date of <br>Published</strong></td>
						<td width="10%"><strong>Status<br>Filed/Published</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql11)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["inventor"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["country"] ?></td>
						<td><?php echo $row["patentNo"] ?></td>
						<td><?php echo $row["dof"] ?></td>
						<td><?php echo $row["dop"] ?></td>
						<td><?php echo $row["status"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="5"><strong class="tr_title">(B) Book(s)</strong></td>
					</tr>
					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="30%"><strong>Author(s) </strong></td>
						<td width="40%"><strong>Title of the Book Chapter</strong></td>
						<td width="20%"><strong>Year of Publication</strong></td>
						<td width="10%"><strong>ISBN</strong></td>

					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql12)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["author"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["yop"] ?></td>
						<td><?php echo $row["isbn"] ?></td>
						
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>
            <table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="5"><strong class="tr_title">(C) Book Chapter(s)</strong></td>
					</tr>
					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="30%"><strong>Author(s) </strong></td>
						<td width="40%"><strong>Title of the Book Chapter</strong></td>
						<td width="20%"><strong>Year of Publication</strong></td>
						<td width="10%"><strong>ISBN</strong></td>

					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql13)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["author"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["yop"] ?></td>
						<td><?php echo $row["isbn"] ?></td>
						
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>
			<span class="label">8. Google Scholar Link </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6"><strong class="tr_title">URL</strong></td>
					</tr>
					<tr>
						<td width="12%"><a
								href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/finalpage/Exercitationem%20excepturi%20commodi%20magnam%20placeat%20impedit%20illum%20eligendi%20nobis."
								target="_blank"><?php echo $pub["googleLink"] ?></a></td>
					</tr>

				</tbody>
			</table>
			<br>

			<span class="label">9. Membership of Professional Societies </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="3"><strong class="tr_title">Details</strong></td>
					</tr>

					<tr>
						<td width="3%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Name of the Professional Society</strong></td>
						<td width="20%"><strong>Membership Status (Lifetime/Annual)</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql14)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["status"] ?></td>
						
						
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
					
					
				</tbody>
			</table>
			<br>

			<span class="label">10. Professional Training </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="5"><strong class="tr_title">Details</strong></td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Type of Training Received</strong></td>
						<td width="20%"><strong>Organisation</strong></td>
						<td width="10%"><strong>Year</strong></td>
						<td width="10%"><strong>Duration</strong></td>
					</tr>
                    <tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql15)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["type"] ?></td>
						<td><?php echo $row["organization"] ?></td>
						<td><?php echo $row["year"] ?></td>
						<td><?php echo $row["duration"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>

			<span class="label">11. Award(s) and Recognition(s) </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="4"><strong class="tr_title">Details</strong></td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Name of Award</strong></td>
						<td width="20%"><strong>Awarded By</strong></td>
						<td width="10%"><strong>Year</strong></td>
					</tr>
                    <tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql16)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["awardedBy"] ?></td>
						<td><?php echo $row["year"] ?></td>
						
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>

			<span class="label">12. Research Supervision</span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6"><strong class="tr_title">(A) PhD Thesis Supervision</strong></td>
					</tr>
					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="25%"><strong>Name of Student/Research Scholar</strong></td>
						<td width="30%"><strong>Title of Thesis</strong></td>
						<td width="10%"><strong>Role</strong></td>
						<td width="10%"><strong>Ongoing/Completed</strong></td>
						<td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql17)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["role"] ?></td>
						<td><?php echo $row["status"] ?></td>
                        <td><?php echo $row["yop"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6"><strong class="tr_title">(B) M.Tech/M.E./Master's Thesis Supervision</strong>
						</td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="25%"><strong>Name of Student/Research Scholar</strong></td>
						<td width="30%"><strong>Title of Thesis</strong></td>
						<td width="10%"><strong>Role</strong></td>
						<td width="10%"><strong>Ongoing/Completed</strong></td>
						<td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql18)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["role"] ?></td>
						<td><?php echo $row["status"] ?></td>
                        <td><?php echo $row["yop"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>

				</tbody>
			</table>
			<br>

			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6"><strong class="tr_title">(C) B.Tech/B.E./Bachelor's Project Supervision</strong>
						</td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="25%"><strong>Name of Student</strong></td>
						<td width="30%"><strong>Title of Project</strong></td>
						<td width="10%"><strong>Role</strong></td>
						<td width="10%"><strong>Ongoing/Completed</strong></td>
						<td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql19)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["role"] ?></td>
                        <td><?php echo $row["status"] ?></td>
						<td><?php echo $row["yop"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>

				</tbody>
			</table>
			<br>

			<span class="label">13. Sponsored Projects/ Consultancy Details </span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="7"><strong class="tr_title">(A) Sponsored Projects</strong></td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Sponsoring Agency</strong></td>
						<td width="20%"><strong>Title of Project</strong></td>
						<td width="10%"><strong>Sanctioned Amount</strong></td>
						<td width="10%"><strong>Period</strong></td>
						<td width="10%"><strong>Role</strong></td>
						<td width="10%"><strong>Status</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql20)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["agency"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["amount"] ?></td>
						<td><?php echo $row["period"] ?></td>
                        <td><?php echo $row["role"] ?></td>
                        <td><?php echo $row["status"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>


			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="7"><strong class="tr_title">(B) Consultancy Projects</strong></td>
					</tr>

					<tr>
						<td width="5%"><strong>S. No.</strong></td>
						<td width="20%"><strong>Organization</strong></td>
						<td width="20%"><strong>Title of Project</strong></td>
						<td width="15%"><strong>Amount of Grant</strong></td>
						<td width="15%"><strong>Period</strong></td>
						<td width="15%"><strong>Role</strong></td>
						<td width="15%"><strong>Status</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
                            while($row = mysqli_fetch_assoc($sql21)){
                        ?>
						<td><?php echo $a?></td>
						<td><?php echo $row["organization"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["amount"] ?></td>
						<td><?php echo $row["period"] ?></td>
                        <td><?php echo $row["role"] ?></td>
                        <td><?php echo $row["status"] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>


			<span class="label">14. Significant research contribution and future plans</span>
			<table class="tab">
				<tbody>
					<tr>
						<td style="text-align:justify;">
							<p><td><?php if(isset($relinfo["reControl"])) echo $relinfo["reControl"] ?></td></p>
						</td>
					</tr>

				</tbody>
			</table>
			<br>

			<span class="label">15. Significant teaching contribution and future plans</span>

			<table class="tab">

				<tbody>
					<tr>
						<td style="text-align:justify;">
							<p><?php if(isset($relinfo["teControl"])) echo $relinfo["teControl"] ?></p>
						</td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label">16. Any other relevant information</span>

			<table class="tab">
				<tbody>
					<tr>
						<td style="text-align:justify;"><?php if(isset($relinfo["otherRelevant"])) echo $relinfo["otherRelevant"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label">17. Professional Service as Reviewer/Editor etc.</span>
			<table class="tab">
				<tbody>
					<tr>
						<td style="text-align:justify;"><?php if(isset($relinfo["profService"])) echo $relinfo["profService"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label">18. Detailed List of Journal Publications<br>(Including Sr. No., Author's Names, Paper
				Title, Volume, Issue, Year, Page Nos., Impact Factor (if any), DOI, Status [Published/Accepted])</span>
			<table class="tab">
				<tbody>
					<tr>
						<td style="text-align:justify;"><?php if(isset($relinfo["journalPub"])) echo $relinfo["journalPub"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label">19. Detailed List of Conference Publications<br>(Including Sr. No., Author's Names,
				Paper Title, Name of the conference, Year, Page Nos., DOI [If any])</span>
			<table class="tab">
				<tbody>
					<tr>
						<td style="text-align:justify;"><?php if(isset($relinfo["cnfPub"])) echo $relinfo["cnfPub"] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<span class="label">20. Reprints of 5 Best Research Papers-Attached </span>

			<br>
			<br>

			<span class="label">21. Check List of the documents attached with the online application </span><br>

			1. PHD Certificate<br>
			2. PG Certificate<br>
			3. UG Certificate<br>
			4. 12th/HSC/Diploma<br>
			5. 10th/SSC Certificate<br>
			6. 10 Years Post phd Experience Certificate <br>
			7. Any other relevant documents ( Experience Certificate, Award Certificate, etc.)
			<br>
			<br>


			<span class="label">22. Referees</span>
			<table class="tab">
				<tbody>
					<tr style="background-color:#f1f1f1;">
						<td colspan="6"><strong class="tr_title">Details of Referees</strong></td>
					</tr>

					<tr>
						<!-- <td><strong>S. No.</strong></td> -->
						<td width="20%"><strong>Name</strong></td>
						<td width="20%"><strong>Position</strong></td>
						<td width="15%"><strong>Association with Referee</strong></td>
						<td width="15%"><strong>Institution/<br>Organization</strong></td>
						<td width="15%"><strong>E-mail</strong></td>
						<td width="15%"><strong>Contact No.</strong></td>
					</tr>
					<tr>
                    <?php
                    $a=1;
					$row= mysqli_fetch_array($sql23);
                            while($a <= 3){
                        ?>
						<td><?php if(isset($row["name".$a])) echo $row["name".$a] ?></td>
						<td><?php if(isset($row["position".$a])) echo $row["position".$a] ?></td>
						<td><?php if(isset($row["asso_ref".$a])) echo $row["asso_ref".$a] ?></td>
						<td><?php if(isset($row["insti".$a])) echo $row["insti".$a] ?></td>
                        <td><?php if(isset($row["email".$a])) echo $row["email".$a] ?></td>
                        <td><?php if(isset($row["contact".$a])) echo $row["contact".$a] ?></td>
					</tr>
                    <?php
                    $a++;
                            }
                            ?>
				</tbody>
			</table>
			<br>




			<span class="label">23. Final Declaration</span>

			<table class="tab">

				<tbody>
					<tr>
						<td> I hereby declare that I have carefully read and understood the instructions and particulars
							mentioned in the advertisment and this application form. I further declare that all the
							entries along with the attachments uploaded in this form are true to the best of my
							knowledge and belief</td>
					</tr>
				</tbody>
			</table>
			<br>

			<img src="<?php if(isset($docs["sign"])) echo $docs["sign"] ?>" style="height:50; "><br>
			Signature of Applicant

		</div>


		<div id="non_print_area">
			<button
				onclick="moveback()">Back
			</button>
			<button onclick="window.print();">Print Application</button> <br>
		</div>
	</div>
    <script>
		function moveback(){
			window.location.assign('page9.php');
		}
	</script>
	<style>
		@media print {
			#non_print_area {
				display: none !important;
			}
		}
	</style>

	<div id="volume-booster-visusalizer">
		<div class="sound">
			<div class="sound-icon"></div>
			<div class="sound-wave sound-wave_one"></div>
			<div class="sound-wave sound-wave_two"></div>
			<div class="sound-wave sound-wave_three"></div>
		</div>
		<div class="segments-box">
			<div data-range="1-20" class="segment"><span></span></div>
			<div data-range="21-40" class="segment"><span></span></div>
			<div data-range="41-60" class="segment"><span></span></div>
			<div data-range="61-80" class="segment"><span></span></div>
			<div data-range="81-100" class="segment"><span></span></div>
		</div>
	</div>
</body>

</html>