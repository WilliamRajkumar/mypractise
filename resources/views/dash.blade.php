<!DOCTYPE html>
<html lang="en">
<head>
  <title>DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Friends </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        
        <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
    
      <i class="fa fa-search" style="font-size:24px"></i>
       <input type="text" placeholder="Search Friends" class="">
        
      </div>
      
       <h1>Welcome   {{ Auth::user()->name }}</h1>
       <img src="/public/images/{{ Auth::user()->name }}" alt="user">

        
       
     <div>
     <div id="users-list"></div>
     </div>
       
      </div>
    </div>
  </div>
</div>

</body>
<script>
        $(document).ready(function() {
            $.ajax({
                url: "/willyvel/public/users",
                type: "GET",
                success: function(response) {
                   
                    var users = response.data;
                    var userList = "<ul>";
                    users.forEach(function(user) {
                        userList += "<li>" + user.name + "</li>";
                    });
                    userList += "</ul>";
                    $("#users-list").html(userList);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching users: " + error);
                }
            });
        });
    </script>
</html>
