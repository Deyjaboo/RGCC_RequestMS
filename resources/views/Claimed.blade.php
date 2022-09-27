<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
   
    <link rel="stylesheet" href="css/styles.css"> 

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Claimed Documents</title>
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


                <ul class="menu-link">
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
        <div class="text">Claimed Documents</div>
        
        <div class="row">
       
        <div class="main-section">
        <div class="columns">
		<div class="dashbord">
			<div class="icon-section">
				<i class="bx bx-task" aria-hidden="true"></i><br>
				<small>Claimed Documents</small>
				<p>{{$claimed}}</p>
			</div>
			<div class="detail-section">
				<a href="Claimed">More Info </a>
			</div>
		</div>
        </div>
        <div class="columns">
		<div class="dashbord dashbord-red">
			<div class="icon-section">
				<i class="bx bxs-file-plus" aria-hidden="true"></i><br>
				<small>New Request</small>
				<p>{{$new}}</p>
			</div>
			<div class="detail-section">
				<a href="NewRequest" method="GET">More Info </a>
			</div>
		</div>
        </div>
        <div class="columns">
		<div class="dashbord dashbord-orange">
			<div class="icon-section">
				<i class="bx bxs-file" aria-hidden="true"></i><br>
				<small>Unclaimed Process Document</small>
				<p>{{$ready}}</p>
			</div>
			<div class="detail-section">
				<a href="Unclaimed">More Info </a>
			</div>
            </div>
		</div>
	</div>
        </div>
      <br>
    <div class="wrapper">
    <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Course</th>
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
                                            <th>ID</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Course</th>
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
                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->stud_id}}</td>
                                            <td>{{$data->Name}}</td>
                                            <td>{{$data->cp}}</td>
                                            <td>{{$data->Course}}</td>
                                            <td>{{$data->date}}</td>
                                            <td id="item">{{$data->HonDismissal}}</td>
                                            <td id="item">{{$data->Special_Order}}</td>
                                            <td id="item">{{$data->Diploma}}</td>
                                            <td id="item">{{$data->TOR}}</td>
                                            <td id="item">{{$data->Form137}}</td>
                                            <td id="item">{{$data->GoodMoral}}</td>
                                            <td id="item">{{$data->UnitEarned}}</td>
                                            <td id="item">{{$data->Graduation}}</td>
                                            <td id="item">{{$data->GWA}}</td>
                                            <td id="item">{{$data->Grades}}</td>
                                            <td id="item">{{$data->Auth_Transcript}}</td>
                                            <td id="item">{{$data->Auth_Special_Order}}</td>
                                            <td id="item">{{$data->Auth_Diploma}}</td>
                                            <td>{{$data->Purpose}}</td>
                                            <td>{{$data->Status}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

    </section>

    <style>
        #item{
            color: red;
        }
    </style>
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

        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>   grap link
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
      
</body>
</html>
