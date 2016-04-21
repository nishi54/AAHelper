<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Product Page Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Check login status -->
<?php include_once 'login.php'; ?>

<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Computer Science Major</a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li> </li>
        <li> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">John Doe</a></li>
        <li>&nbsp;</li>
        <li><a href="#">002-12-1234</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			<p class="table-bordered">Required Courses - 13 Courses Below (42 CS Units Required)</p>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
    <table class="table table-condensed table-bordered">
      <thead>
        <tr>
          <th>Course ID </th>
          <th colspan="2">Title </th>
          <th>Prereqs</th>
          <th>Units</th>
          <th colspan="2">2015</th>
          <th colspan="2">2016</th>
          <th colspan="2">2017</th>
          <th colspan="2">2018</th>
          <th colspan="2">2019</th>
          <th>Grades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><strong>CS220</strong><br></th>
          <td colspan="2">Intro to Computer Science I</td>
          <td>MATH110</td>
          <td>4</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS225</th>
          <td colspan="2">Intro to Computer Science II</td>
          <td>CS220</td>
          <td>4</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
          <th scope="row">CS250</th>
          <td colspan="2">Operating Systems</td>
          <td>CS225</td>
          <td>3</td>
          <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS330</th>
          <td colspan="2">Systems Programming I</td>
          <td>CS225</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS340</th>
          <td colspan="2">Systems Programming II</td>
          <td>CS225, 330</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS350</th>
          <td colspan="2">Discrete Structures</td>
          <td>CS220, MATH151 or 161</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS380</th>
          <td colspan="2">Data Structures</td>
          <td>CS225, 350</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS390</th>
          <td colspan="2">Database Mgt Systems</td>
          <td>CS225, 350</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS400</th>
          <td colspan="2">Compiler Construction</td>
          <td>CS380</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS445</th>
          <td colspan="2">Computer Architecture & Org</td>
          <td>CS225, 350</td>
          <td>4</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS455</th>
          <td colspan="2">Numerical Analysis</td>
          <td>CS220, MATH161</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS470</th>
          <td colspan="2">Software Engineering I</td>
          <td>CS380, 390</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS480</th>
          <td colspan="2">Software Engineering II</td>
          <td>CS470</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
      </tbody>
</table>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			<p class="table-bordered">Upper Division Computer Science Electives - 3 Courses Below (9 Elective Units Required)</p>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
    <table class="table table-condensed table-bordered">
      <thead>
        <tr>
          <th>Course ID </th>
          <th colspan="2">Title </th>
          <th>Prereqs</th>
          <th>Units</th>
          <th colspan="2">2015</th>
          <th colspan="2">2016</th>
          <th colspan="2">2017</th>
          <th colspan="2">2018</th>
          <th colspan="2">2019</th>
          <th>Grades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">CS363</th>
          <td colspan="2">Web Programming</td>
          <td>CS225</td>
          <td>3</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS420</th>
          <td colspan="2">Telecom &amp; Interfacing</td>
          <td>CS330</td>
          <td>3</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
          <th scope="row">CS425</th>
          <td colspan="2">Fundamentals of Network Admin</td>
          <td>CS420</td>
          <td>3</td>
          <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS430</th>
          <td colspan="2">Artificial Intelligence</td>
          <td>CS225</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS435</th>
          <td colspan="2">Advanced Database</td>
          <td>CS330, 390</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td colspan="2"><strong>UDWI: Upper Division Writing Intensive</strong></td>
          <td>&nbsp;</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">CS496</th>
          <td colspan="2">Senior Seminar: Ethics in CS</td>
          <td>UDWI</td>
          <td>3</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
      </tbody>
</table>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			<p class="table-bordered">Math Track and Requirements- 2 Math Courses Below (9 Math Units Required)</p>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
  <div class="panel-body">
    <table class="table table-condensed table-bordered">
      <thead>
        <tr>
          <th>Course ID </th>
          <th colspan="2">Title </th>
          <th>Prereqs</th>
          <th>Units</th>
          <th colspan="2">2015</th>
          <th colspan="2">2016</th>
          <th colspan="2">2017</th>
          <th colspan="2">2018</th>
          <th colspan="2">2019</th>
          <th>Grades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">MATH110</th>
          <td colspan="2">College Alegebra </td>
          <td>&nbsp;</td>
          <td>3</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">MATH150</th>
          <td colspan="2">Precalculus </td>
          <td>MATH110</td>
          <td>3</td>
            <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
          <th scope="row">MATH161</th>
          <td colspan="2"><strong>Calculus I</strong></td>
          <td>MATH150</td>
          <td>5</td>
          <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <th scope="row">MATH162</th>
          <td colspan="2"><b>Calculus II</b></td>
          <td>MATH161</td>
          <td>4</td>
           <td></td>
            <td background="../Documents/black"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
      </tbody>
</table>
</div>
    </div>
  </div>
</div>
</div>
  </div>
</div>
<center><a href="includes/logout.php">Logout</a></center>

  <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>&copy; 2015 Finger Puppet Mafia <br/ > Azusa Pacific University <br/ > Rapid Prototype: October 23, 2015</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
