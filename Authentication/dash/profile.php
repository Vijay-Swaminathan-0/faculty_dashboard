<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>


<body class="overlay-scrollbar">

	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fa fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item faculty">
				<b>Faculty_Name</b>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="Search..">
			<i class="fa fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fa fa-moon-o dark"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">
      				<i class="fa fa-bell" aria-hidden="true"></i>
   				 </a>
   			<li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					
          <img src="https://randomuser.me/api/portraits/women/71.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fa fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="logout.php" class="dropdown-menu-link">
								<div>
									<i class="fa fa-sign-out"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-calendar"></i>
					</div>
					<span class='span'>
						Schedule
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link active">
					<div>
						<i class="fa fa-user"></i>
					</div>
					<span class='span'>My profile</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-bell"></i>
					</div>
					<span class='span'>Notifications</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-th-list"></i>
					</div>
					<span class='span'>Attendance</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-home"></i>
					</div>
					<span class='span'>Gatepass</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-question-circle"></i>
					</div>
					<span class='span'>Help</span>
				</a>
			</li>
		</ul>
	</div>
  
	<div class="wrapper">
		
		<div class="row">
      
			<div class="col-10 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h1>
							Profile
						</h1>
            <i><a href="#" class="fancy-button bg-gradient1"><span>Edit Profile</span></a></i>
 </div>
					<div class="card-content">
						<table>
							<tbody>
								<tr>
									<td></td>
									<td> <img src="https://randomuser.me/api/portraits/women/71.jpg" alt="User image" class="mainphoto"></td>
									
								</tr>
								<tr>
									<td>Name</td>
									<td>Faculty_Name</td>
                  
                  <tr>
									<td>Faculty ID</td>
									<td>ID</td>
                    
								<tr>
									<td>Qualifications</td>
									<td>Qualifications</td>
                  
                <tr>
									<td>Email ID</td>
									<td>EmailID</td>
                  
                 <tr>
									<td>Phone No.</td>
									<td>PhoneNo.</td>
                   
                  <tr>
									<td>Position</td>
									<td>Position</td>
                    
                    <tr>
									<td>Areas of Interest</td>
									<td>SOSO</td>
                      
                       <tr>
									<td>Residential Address</td>
									<td>SOSO</td>
                         
                   <tr>
									<td>Password</td>
                     <td><p align='centre' ><span class="hidetext">text to hide</span>
                   <a href="#" class="fancy-button bg-gradient1"><span>Change Password</span></a></p></td>
                  
									
							</tbody>
						</table>
					</div>
          <div class="col-11 col-m-12 col-sm-12" id="publication">
				<div class="card">
					<div class="card-header">
						<h3>
							Publications
						</h3>
            <table>
							<tbody>
								<tr>
									<td></td>
									
								</tr>
								<tr>
									<td class='t1'>Name</td>
									<td class='t2'>Faculty_Name</td>
                  
                  <tr>
									<td class='t1'>Faculty ID</td>
									<td class='t1'>ID</td>
                    
								<tr>
									<td class='t1'>Qualifications</td>
									<td class='t1'>Qualifications</td>
                  
                <tr>
									<td class='t1'>Email ID</td>
									<td>EmailID</td>
                  
                 <tr>
									<td>Phone No.</td>
									<td>PhoneNo.</td>
                   
                  <tr>
									<td>Position</td>
									<td>Position</td>
                    
                    <tr>
									<td>Areas of Interest</td>
									<td>SOSO</td>
                      
                       <tr>
									<td>Residential Address</td>
									<td>SOSO</td>
									
							</tbody>
						</table>
					</div>
					
			
						
					</div>
				</div>
			</div>
		</div>
	</div>

<script src='profile.js'></script>

	
</body>
</html>

