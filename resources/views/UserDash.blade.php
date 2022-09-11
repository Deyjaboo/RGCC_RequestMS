<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Request Form</title>

    <link rel="stylesheet" href="css/styles.css"> 
</head>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    background: #D7DDE5;
    font-family: "Roboto", sans-serif;
}

nav {
    display: flex;
    justify-content: space-between;
    padding: 15px 5%;
    align-items: center;
    background: #fff;
}

.logo {
    color: #b30000;
    font-size: 22px;
}

ul {
    list-style: none;
    margin-bottom: -5px;
}

ul li {
    display: inline-block;
}

ul li a {
    text-decoration: none;
    color: #b30000;
    padding: 8px 30px;
    border-radius: 7px;
    transition: all .3s ease;
}

ul li a:hover,
ul li a.active {
    color: #FFF;
    background:#b30000;
}

#icon {
    background-color: #b30000;
    padding: 5px 7px 3px 7px;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s ease;
}

#icon svg {
    color: #FFF;
    height: 28px;
    transition: all .3s ease;
}

#icon:hover {
    background: #FFF;
}

#icon:hover svg {
  background:  #b30000;
    color: #FFF;
    padding: 5px 7px 3px 7px;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s ease;
}

#checkbox,
#icon {
    display: none;
}


.link i {
    padding-left: 7px;
}

.link:hover {
    text-decoration: underline;
    background-color: black;
}
@media screen and (max-width: 768px) {
    /* nav {
        border-bottom: 1px solid #455468;
    } */

    ul {
        position: absolute;
        width: 100%;
        height: calc(20vh - 40px);
        background-color: #fff;
        left: 0;
        top: 0;
        text-align: center;
        display: none;
        margin-top: 70px;
    }

    ul li {
        display: block;
        padding: 10px 15px;
       
    }

    ul li a {
        display: block;
        padding: 10px 0;
    }

    #icon {
        display: block;
    }

    #checkbox:checked~ul {
        display: block;
    }
}


/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 80.5%;
    
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}


.header{
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    background-color: white;
}

.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #b30000;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color:#b30000;
}

@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-item {
        margin: 2.5rem 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }

}

.hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    } */



    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
 
}

body{
  height: 100vh;
  background: #e1edf9;
}

.wrapper{
  max-width: 620px;
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

.heading{
  /* background:#b30000;  */
  background:	 #f2f2f2; 
  margin: -30px;
  text-align: center;
  /* color: white; */
   color: #b30000; 
  font-size: 19px;
  margin-bottom: 5px;
  padding: 10px;
}

.btn{
  background:#b30000; 
  color:white;
  border: 1px solid white;
}
#sub:hover{
  background-color: rgba(195, 0, 0, 0.95); /* Green */
  color: white;
}

#table1{
  background-color: white;
} 
/* .dat{

  text-align: right;
}

ul {
  margin: 0px;
  padding: 0px;
  list-style-type: none;
  position: relative;
}



ul li a {
  padding: 15px;
  color: #292929;
  text-decoration: none;
  display: block;
}



ul ul {
  position: absolute;
  min-width: auto;
  background: lightgrey;
  display: none;
}

ul ul li {
  display: block;
  background: #e3e3e3;
}

ul li:hover ul {
  display: block;
}

@media (max-width:600px) {
  ul {
    display: none;
    position: static;
    background: #e3e3e3;
  }
  ul li {
    display: block;
  }
  ul ul {
    position: static;
    background: #e3e3e3;
  }

  ul li:hover ul {
  display: block;
}

ul li a {
  padding: 15px;
  color: #292929;
  text-decoration: none;
  display: block;
}
}
#table1{
  background-color: white;
} */
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}




</style>
<body>

<nav>
 <!-- <img src="images/logo.png" width="50" height="40"> -->
      <b><div class="logo">RGCC</div></b>  
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
        <ul>
           

          <b>
            <li><a href="#">Request</a></li>
            <li><a href="#">LogOut</a></li>
            </b>
        </ul>
    </nav>

<!-- <header class="header">
        <nav class="navbar">
        <img src="images/logo.png" width="60" height="70"> 
           
            <ul class="nav-menu">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="nav-link">Hi, James</span>
                    </a>
                </form>
              </li>
              <li>
              <a href="UserReq">Request</a>
              </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header> -->


<div class="container">
    <div class="main-body">
    
    <br>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name[0]}}. {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</h4>
                      <p class="text-muted font-size-sm">ID: <b>{{Auth::user()->student_id}}</b></p>
                      <p class="text-secondary mb-1">{{Auth::user()->course}} - {{Auth::user()->year}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">

                <div class="container" id="table1">
          <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                           
                                            <th>Date</th>
                                            <th>Honorable Dismissal</th>
                                            <th>Special Order</th>
                                            <th>Diploma</th>
                                            <th>Transcript Of Record</th>
                                            <th>Form137</th>
                                            <th>Good Moral</th>
                                            <th>Unit Earned</th>
                                            <th>Graduation</th>
                                            <th>GWA</th>
                                            <th>Grades</th>
                                            <th>Authenticate Transcript</th>
                                            <th>Authenticate Special_Order</th>
                                            <th>Authenticate Diploma</th>
                                            <th>Purpose</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                            <th>Date</th>
                                            <th>Honorable Dismissal</th>
                                            <th>Special Order</th>
                                            <th>Diploma</th>
                                            <th>Transcript Of Record</th>
                                            <th>Form137</th>
                                            <th>Good Moral</th>
                                            <th>Unit Earned</th>
                                            <th>Graduation</th>
                                            <th>GWA</th>
                                            <th>Grades</th>
                                            <th>Authenticate Transcript</th>
                                            <th>Authenticate Special_Order</th>
                                            <th>Authenticate Diploma</th>
                                            <th>Purpose</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                       
                                            <td>Aug 23 2022</td>
                                            <td id="item">Honorable Dismissal</td>
                                            <td id="item">Special Order</td>
                                            <td id="item">Diploma</td>
                                            <td id="item">TOR</td>
                                            <td id="item">Form137</td>
                                            <td id="item">GoodMoral</td>
                                            <td id="item">UnitEarned</td>
                                            <td id="item">Graduation</td>
                                            <td id="item">GWA</td>
                                            <td id="item">Grades</td>
                                            <td id="item">Auth_Transcript</td>
                                            <td id="item">Auth_Special_Order</td>
                                            <td id="item">Auth_Diploma</td>
                                            <td>Purpose</td>
                                            <td>Status</td>
                                        </tr>
                                        <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                   <tr>
                                       
                                       <td>Aug 23 2022</td>
                                       <td id="item">Honorable Dismissal</td>
                                       <td id="item">Special Order</td>
                                       <td id="item">Diploma</td>
                                       <td id="item">TOR</td>
                                       <td id="item">Form137</td>
                                       <td id="item">GoodMoral</td>
                                       <td id="item">UnitEarned</td>
                                       <td id="item">Graduation</td>
                                       <td id="item">GWA</td>
                                       <td id="item">Grades</td>
                                       <td id="item">Auth_Transcript</td>
                                       <td id="item">Auth_Special_Order</td>
                                       <td id="item">Auth_Diploma</td>
                                       <td>Purpose</td>
                                       <td>Status</td>
                                   </tr>
                                    </tbody>
                                 
                                </table>
                            </div>
                          </div>
                          </div>
                         </div>
                        </div>
                       </div>
        
                <!-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Student ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth::user()->student_id}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth::user()->First_Name}} {{Auth::user()->Middle_Name}} {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Course & Year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth::user()->course}} - {{Auth::user()->year}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">User Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$pass}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth::user()->cp_num}}
                    </div>
                  </div> -->
                  
            
               <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Student ID</h6>
                    <span class="text-secondary"> {{Auth::user()->student_id}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Full Name</h6>
                    <span class="text-secondary">{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name}} {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Course & Year</h6>
                    <span class="text-secondary"> {{Auth::user()->course}} - {{Auth::user()->year}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">User Name</h6>
                    <span class="text-secondary"> {{Auth::user()->email}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Password</h6>
                    <span class="text-secondary"> {{$pass}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Mobile Number</h6>
                    <span class="text-secondary">{{Auth::user()->cp_num}}</span>
                  </li>
                </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
   
           
  
    
    


 
<script>
         const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

</script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>


</html>