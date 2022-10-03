<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <title>User</title>
</head>

<style>

.wrapper{
  max-width: 100%;
  width: 80%;
  height: 100%;
  
}


.wrapper .form_containers{
 height: 400px;
  background: white;
  color: #0000b3;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 10px;
}
    :root {
  --navbar-bg-color: hsl(0, 0%, 15%);
  --navbar-text-color: hsl(0, 0%, 85%);
  --navbar-text-color-focus: white;
  --navbar-bg-contrast: hsl(0, 0%, 25%);
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  height: 100vh;
  font-family: "Roboto", sans-serif;
  background: #e6ecff;
  
}
.container {
  max-width: 1000px;
  padding-left: 1.4rem;
  padding-right: 1.4rem;
  margin-left: auto;
  margin-right: auto;
}
#navbar {
  --navbar-height: 64px;
  position: block;
  height: var(--navbar-height);
  background-color:#b30000;
  left: 0;
  right: 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
 color:white;
  display: flex;
    justify-content: space-between;
    padding: 15px 5%;
    align-items: center;
  

}
.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 100%;
  align-items: center;
  /* color: #0000b3; */
  color: white;

}
.navbar-item {
  margin: 0.4em;
  width: 100%;
  font-size: 20px;
  /* color:#b30000; */
  color: white;


}

.home-link,
.navbar-link {
  /* color: #b30000; */
  color: white;
  text-decoration: none;
  display: flex;
  font-weight: 100;
  align-items: center;
}

.home-link:is(:focus, :hover) {
  color: #ff1a1a;
}

.navbar-link {
  justify-content: center;
  width: 120%;
  padding: 0.4em 0.8em;
  border-radius: 5px;
  font-size: 18px;
  /* color:#b30000; */
  color:white; 
  font-family: Helvetica;
}

.navbar-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
  /* background-color:#b30000; */
  background-color: #e60000;

}
.navbar-logo {
  border-radius: 50%;
  width: 10px;
  height: 30px;
  margin-right: 0.5em;
 color:white;
}
#navbar-toggle {
  cursor: pointer;
  border: none;
  background-color: transparent;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.icon-bar {
  display: block;
  width: 25px;
  height: 4px;
  margin: 2px;
  /* background-color:#b30000; */
  background-color:white;
}
#navbar-toggle:is(:focus, :hover) .icon-bar {
  background-color: #ffe6e6;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
  position: absolute;
  margin: 0;
  width: 30px;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
  transform: rotate(45deg);
}
#navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
  opacity: 0;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
  transform: rotate(-45deg);
}
#navbar-menu {
  position: fixed;
  top: var(--navbar-height);
  bottom: 0;
  opacity: 0;
  visibility: hidden;
  left: 0;
  right: 0;
}
#navbar-toggle[aria-expanded="true"] + #navbar-menu {
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 1;
  visibility: visible;
}
.navbar-links {
  list-style: none;
  position: absolute;
  background-color: #b30000;
  color:white;
  display: flex;
  flex-direction: column;
  align-items: center;
  left: 0;
  right: 0;
  margin: 1.4rem;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

#navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
  padding: 1em;
}
@media screen and (min-width: 700px) {
  #navbar-toggle,
  #navbar-toggle[aria-expanded="true"] {
    display: none;
  }

  #navbar-menu,
  #navbar-toggle[aria-expanded="true"] #navbar-menu {
    visibility: visible;
    opacity: 1;
    position: static;
    display: block;
    height: 100%;

  }

  .navbar-links,
  #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links  {
    margin: 0;
    padding: 0;
    box-shadow: none;
    position: static;
    flex-direction: row;
    width: 100%;
    height: 100%;
  }

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

.form_item input[type="text"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}

@media only screen and (max-width: 768px) {


  .navbar-link {
  justify-content: center;
  width: 100%;
  padding: 0.4em 0.8em;
  font-size: 18px;
  /* color:#b30000; */
  color:white;
}

}


.nav-link{
  color:white;
}

.list-group-item{
  height: 40px;
}


 .row {
  display: flex;
}

.column {
  flex: 50%;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.item{
  font-weight: bold;
  font-size: 22px;
  color:white;
}
.main-profile-img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        border-style: solid;
        border-color: #FFFFFF;
        box-shadow: 0 0 8px 3px #B8B8B8;
    }
</style>
<body>

 <header id="navbar">
  <nav class="navbar-container container">

     <b><div class="item">RGCC</div></b>

    </a>
    <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div id="navbar-menu" aria-labelledby="navbar-toggle">
      <ul class="navbar-links">

     <li class="navbar-item"><a class="navbar-link" href="UserReq">Request</a></li>

     <li class="navbar-item"><form action="{{ route('logout') }}" method="POST">
                                @csrf
                    <a  class="navbar-link"  href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <span >Logout</span>
     </a>
                    </form>
    </li>
    </ul>
    </div>
  </nav>

</header>
<center>

<div class="column">

    <div class="wrapper">
      <div class="form_container" id="back1">

      <div class="row">
  <div class="column">

        <form name="form">
        <img src="images\icon.png" class="main-profile-img" />
        
                          <div class="mt-3">
                          <h4>{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name[0]}}. {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</h4>
                            <p class="text-muted font-size-sm">ID: <b>{{Auth::user()->student_id}}</b></p>
                            <p class="text-secondary mb-1">{{Auth::user()->course}} - {{Auth::user()->year}}</p>
                          </div>
          </form>

  </div>

  <div class="column">

      <table>

  <tr>
    <td>Student ID</td>
    <td>{{Auth::user()->student_id}}</td>

  </tr>
  <tr>
    <td>Full Name</td>
    <td>{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name}} {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</td>

  </tr>
  <tr>
    <td>Course</td>
    <td>{{Auth::user()->course}}</td>
  </tr>
  <tr>
    <td>Year</td>
    <td>{{Auth::user()->year}}</td>
  </tr>
  <tr>
    <td>User Name</td>
    <td>{{Auth::user()->email}}</td>

  </tr>
  <!-- <tr>
    <td>Password</td>
    <td>{{$pass}}</td>

  </tr> -->
  <tr>
    <td>Mobile Number</td>
    <td>{{Auth::user()->cp_num}}</td>

  </tr>
</table>


  </div>

</div>
      </div>
    </div>
    </div>






<div class="wrapper">
 <div class="form_container">
   <form name="form">
    <div class="heading">
  </div>
  <br>

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
                                    </tbody>

                                </table>
                            </div>


  </form>
 </div>
</div>
</center>




<script>
  const navbarToggle = navbar.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);
</script>




        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>