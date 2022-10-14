<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
   
    <link rel="stylesheet" href="css/styles.css"> 


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>New Request</title>
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

<section id="home">
<div class="wrapper">

    <div class="form_container">


    </div>
        </div>  

</section>
    <section class="home">
        <div class="text">New Request</div>
        <!-- <h5 class="add">Dashboard</h5> -->
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
        
 @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple" class="TableData">
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
                                            <th>Processes</th>
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
                                            <th>Processes</th>
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
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary" id="editbtn"><i class='bx bx-mail-send' data-toggle="tooltip" title="Edit"></i></a>
                                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-edit-alt'></i></button> -->
                                                <!-- <button type="button" class="btn btn-success"><i class='bx bx-receipt'></i></button> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

    </section>

    
<!-- Modal start -->
 <div id="SendMe" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="SendReady" method="post" enctype="multipart/form-data" id="SendForm">
      {{ csrf_field() }}
      <div class="modal-body">
      <!-- <input type="text" name="TrasnID" id="TrasnID" class="form-control" disabled> -->
      <!-- <input type="text" name="FullName" id="FullName" class="form-control" disabled> -->
		The Document is <b>Ready</b> for release!
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Send">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div> 
<!-- Modal end -->

<script>
     // Edit
     $(document).ready(function(){

        $('.TableData').on('click', '#editbtn', function(){
        $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            $('#TrasnID').val(data[0]);
            $('#FullName').val(data[2]);
            // $('#EditLastName').val(data[3]);
            // $('#EditMiddleName').val(data[4]);
            // $('#EditSuffix').val(data[5]);
            // $('#EditCourse').val(data[6]);
            // $('#EditYear').val(data[7]);
            $('#EditMobileNumber').val(data[8]);
            // $('#delete_modal_Form').attr('action', 'assets-delete/'+data[0]);
            $('#SendForm').attr('action', 'SendReady/'+data[0]);
            $('#SendMe').modal('show');
        });
});
</script>
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
