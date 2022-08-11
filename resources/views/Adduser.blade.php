<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Add User</title>
    <!----======== Bootstrap CSS ======== -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   <!----======== Bootstrap JS ======== -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </head>
<style>
    .home .add{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
}

body{
  height: 100vh;
  background: #e1edf9;
}

.wrapper{
  max-width: 650px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}
.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],input[type="password"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"],[type="password"]:focus{
  border-color: #6271f0;
}
.text-danger{
  color: #FF0000;
}


#submit{
  background: rgba(175, 0, 0, 0.95);
  border: 1px solid white;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}
#submit:hover {
  background-color: rgba(195, 0, 0, 0.95); /* Green */
  color: white;
}
#batch_add{
        background: rgba(28, 106, 36, 0.8);
        border: 1px solid white;
        width: 40%;
        height:  110%;
        font-size: 16px;
        cursor: pointer;
        color: #fff;
        float: right;
}
#batch_add:hover {
  background-color: rgba(33, 122, 42, 0.8); /* Green */
  color: white;
}
</style>
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

                    <!-- <li class="nav-link">
                    <a href="Transaction"method="GET">
                        <i class='bx bx-transfer-alt icon'></i>
                            <span class="text nav-text">Transaction</span>
                        </a>
                    </li> -->

                    <!-- <li class="nav-link">
                        <a href="#">
                        <i class='bx bxs-comment-add icon'></i>
                            <span class="text nav-text">Feedback</span>
                        </a>
                    </li> -->

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
        <div class="text">Online Document Request System</div>
        <div class="add">Add User</div>
             
        
       


  <div class="wrapper">
    <div class="form_container">

    <div class="form_wrap fullname">
      <div class="form_item">
        <h5><label><span class="text-danger">*</span><i>Required</i></label></h5>
      </div>

      <!-- <div class="form_item">
        <button id="batch_add" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-user-plus'></i> Batch Add</button>
      </div> -->
    </div>
        
        <br>
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
    <input type="text" name="stud_id" id="stud_id" class="form-control" placeholder="Student ID">
  </div>

  <div class="form_item">
    <label>First Name<span class="text-danger">*</span></label>
    <input type="text" name="Fname" id="Fname"  class="form-control" placeholder="Enter First Name" required>
  </div>
</div>


<div class="form_wrap fullname">
  <div class="form_item">
    <label>Last Name<span class="text-danger">*</span></label>
    <input type="text" name="Lname" id="Lname" class="form-control" placeholder="Enter Last Name" required>
  </div>
  <div class="form_item">
    <label>MiddleName<span class="text-danger"></span></label>
    <input type="text" name="Mname" id="Mname" class="form-control" placeholder="Enter Middle Name">
  </div>

</div>

<div class="form_wrap fullname">
    <div class="form_item">
      <label>Suffix<span class="text-danger"></span></label>
      <input type="text"  name="suffix" id="suffix" class="form-control" placeholder="Suffix">
    </div>
    <div class="form_item">
      <label>Mobile Number<span class="text-danger"></span></label>
      <input type="text"  name="CP_number" id="CP_number" class="form-control" placeholder="+639......" required>
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
</div>
  
    <button id="submit" type="submit" value="Submit">Submit</button>
     <!-- <button type="submit">Submit</button> -->
 
  </form>
 </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal start -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="#" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="modal-body">
						<p>Select Excel File to Import:</p>
				    <input type="file" name="select_file">
					</div>
				</form>

      </div>
      <div class="modal-footer">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-primary" value="Import">
      </div>
    </div>
  </div>
</div> -->
<!-- Modal end -->
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

<style>
  
.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #084298;
  background-color: #cfe2ff;
  border-color: #b6d4fe;
}
.alert-primary .alert-link {
  color: #06357a;
}

.alert-secondary {
  color: #41464b;
  background-color: #e2e3e5;
  border-color: #d3d6d8;
}
.alert-secondary .alert-link {
  color: #34383c;
}

.alert-success {
  color: #0f5132;
  background-color: #d1e7dd;
  border-color: #badbcc;
}
.alert-success .alert-link {
  color: #0c4128;
}

.alert-info {
  color: #055160;
  background-color: #cff4fc;
  border-color: #b6effb;
}
.alert-info .alert-link {
  color: #04414d;
}

.alert-warning {
  color: #664d03;
  background-color: #fff3cd;
  border-color: #ffecb5;
}
.alert-warning .alert-link {
  color: #523e02;
}

.alert-danger {
  color: #842029;
  background-color: #f8d7da;
  border-color: #f5c2c7;
}
.alert-danger .alert-link {
  color: #6a1a21;
}

.alert-light {
  color: #636464;
  background-color: #fefefe;
  border-color: #fdfdfe;
}
.alert-light .alert-link {
  color: #4f5050;
}

.alert-dark {
  color: #141619;
  background-color: #d3d3d4;
  border-color: #bcbebf;
}
.alert-dark .alert-link {
  color: #101214;
}
</style>
</html>
