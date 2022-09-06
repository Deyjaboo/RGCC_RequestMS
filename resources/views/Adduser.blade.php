<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/adduser.css">
    <link rel="stylesheet" href="css/modal.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <title>Add User</title>
    
 <!----======== Bootstrap CSS ======== -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   <!----======== Bootstrap JS ======== -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<body>  
 
  </head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">RGCC</span>
                    <span class="profession">Request System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="dashboard"method="GET">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        
                        </a>
                    </li>

                    <li class="nav-link">
                    <a href="Adduser"method="GET">

                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Add User</span>
                        </a>
                    </li>

                     <li class="nav-link">
                        <a href="NewRequest">
                        <i class='bx bxs-file-plus icon'></i>
                            <span class="text nav-text">New Request</span>
                        </a>
                    </li> 

                    <li class="nav-link">
                        <a href="Claimed"method="GET">
                        <i class='bx bx-task icon'></i>
                            <span class="text nav-text">Claimed</span>
                        </a>
                    </li> 

                    <li class="nav-link">
                        <a href="Unclaimed">
                        <i class='bx bxs-file icon'></i>
                            <span class="text nav-text">Unclaimed </span>
                        </a>
                    </li> 

                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                    <li class="nav-link">
                   
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                    </li>
                  </form>

               </ul>
            </div>
        </div>
    </nav>

    <section class="home">
        <!-- <div class="text">Online Document Request System</div> -->
        <div class="text">Add User</div>

  <div class="wrapper">
    <div class="form_container">

    <div class="form_wrap fullname">
      <div class="form_item">
        <h5><label><span class="text-danger">*</span><i>Required</i></label></h5>
      </div>

      <!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button> -->



       <!-- <div class="form_item">
        <button onclick="document.getElementById('id01').style.display='block'" id="batch_add" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-user-plus'></i> Batch Add</button>
      </div> -->
    </div>
        
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
  <!-- <form action="user_reg" method="post" enctype="multipart/form-data"> -->
  <form method="POST" action="{{ route('register') }}"> 
            @csrf

<div class="form_wrap fullname">
  <div class="form_item">
    <label>Student ID<span class="text-danger">*</span></label>
    <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student ID">
  </div>

  <div class="form_item">
    <label>First Name<span class="text-danger">*</span></label>
    <input type="text" name="First_Name" id="First_Name"  class="form-control" placeholder="Enter First Name" required>
  </div>
</div>


<div class="form_wrap fullname">
  <div class="form_item">
    <label>Last Name<span class="text-danger">*</span></label>
    <input type="text" name="Last_Name" id="Last_Name" class="form-control" placeholder="Enter Last Name" required>
  </div>
  <div class="form_item">
    <label>MiddleName<span class="text-danger"></span></label>
    <input type="text" name="Middle_Name" id="Middle_Name" class="form-control" placeholder="Enter Middle Name">
  </div>

</div>

<div class="form_wrap fullname">
    <div class="form_item">
      <label>Suffix<span class="text-danger"></span></label>
      <input type="text"  name="suffix" id="suffix" class="form-control" placeholder="Suffix">
    </div>
    <div class="form_item">
      <label>Mobile Number<span class="text-danger">*</span></label>
      <input type="text"  name="CP_number" id="CP_number" class="form-control" placeholder="+639......" required>
    </div>
</div>

<div class="form_wrap fullname">
    <div class="form_item">
      <label>User Name<span class="text-danger">*</span></label>
      <input type="text"  name="UserName" id="UserName" class="form-control" placeholder="User Name" required>
    </div>
    <div class="form_item">
      <label>Password<span class="text-danger">*</span></label>
      <input type="password"  name="Password" id="Password" class="form-control" placeholder="Password" required>
    </div>
</div>

<div class="form_wrap fullname">
    
    <div class="form_item">
      <label>Course<span class="text-danger">*</span></label>
      <select class="form-control col-12" name="course" id="course" required>
          <option value="" selected="selected" disabled="disabled">Course</option>
          <option value="BSIT">BSIT</option>
          <option value="BSEED">BSEED</option>
      </select>      
    </div>
    <div class="form_item">
      <label>Year<span class="text-danger">*</span></label>
      <select class="form-control col-12" name="year" id="year" required>
          <option value="" selected="selected" disabled="disabled">Year</option>
          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
      </select>      
    </div>
</div>
  
    <button id="submit" type="submit" value="Submit">Submit</button>
     <!-- <button type="submit">Submit</button> -->
 
  </form>
 </div>
</div>

<!-- Button trigger modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>  -->
<!-- 
<div id="id01" class="w3-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" >&times;</span> 
     
      <div class="heading">
        <h2>Select Excel File to Import:</h2>
      </div>
<center>
  <form action="#" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="modal-body">
						<p>Select Excel File to Import:</p>
				    <input type="file" name="select_file">
					</div>
				</form>
        </center>
<br><br>
      <button class="button button2">Import</button>
      <button class="button button3"  data-dismiss="modal" value="Cancel" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
    </div>
  </div>
</div>  -->

    </section>

    <script>
      const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

      toggle.addEventListener("click" , () =>{
          sidebar.classList.toggle("close");
      })
      searchBtn.addEventListener("click" , () =>{
          sidebar.classList.remove("close");
      })
    </script>

</body>


</html>
