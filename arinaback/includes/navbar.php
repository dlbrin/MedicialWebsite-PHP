<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="home.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn" style="background-color: transparent;">Services</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="insert_services.php">INSERT</a>
                        <a href="edit_services.php">EDIT</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction1()" class="dropbtn" style="background-color: transparent;">Examples</button>
                    <div id="myDropdown1" class="dropdown-content">
                        <a href="insert_examples.php">INSERT</a>
                        <a href="edit_examples.php">EDIT</a>
                    </div>
                </div>
            </li>
            <li><a href="contact_msg.php">Messages</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
        </ul>
        <div class="out">
            <a href="?logout" style="color: red;">Logout</a>
        </div>
    </nav>

    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
</body>
</html>

       
        