<!DOCTYPE html>
<html>
<head>
	<title>IndiaCorona</title>
	<?php include 'links/link.php'; ?>
	<?php include 'css/style.php'; ?>

</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-style p-3">
  <a class="navbar-brand pl-5" href="index.php"><h1 class="animated infinite heartBeat delay-2s">LuminousHeads</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" index.php #aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="corona.php">World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">India</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #sympid">Symptom</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php #preventid">Prevention</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="index.php #contactid">Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>


<section class="corona_update container-fluid">
<div class="mt-5">
  <h3 class="text-uppercase text-center">Covid-19 live updates of India</h3>
  <br>
</div>

<div class="table-responsive">
  <table class=" table table-bordered table-striped text-center" id="tabval">
    <tr>
      <th>Lastupdatedtime</th>
      <th>state</th>
      <th>confirmed</th>
      <th>active</th>
      <th>recovered</th>
      <th>deaths</th>
    </tr>

  </table>
</div>

</section>





<!-- //////up btn///// -->
<div class="container scrollTop float-right pt-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>



<!-- /////footer//// -->



<script type="text/javascript">
  
 mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction(){
  if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100){
    mybutton.style.display = "block";
  }else{
    mybutton.style.display = "none";
  }
}

function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

  function fetch(){
  $.get("https://api.covid19india.org/data.json",
       function (data){
        var tabval = document.getElementById('tabval');

        for(var i=1; i<(data['statewise'].length); i++){
          var x = tabval.insertRow();
          x.insertCell(0);
          tabval.rows[i].cells[0].innerHTML = data['statewise'][i-1][
          'lastupdatedtime'];
          tabval.rows[i].cells[0].style.background = '#DEB887';
          

          x.insertCell(1);
          tabval.rows[i].cells[1].innerHTML = data['statewise'][i-1][
          'state'];
          tabval.rows[i].cells[1].style.background = '#4bb7d8';

          x.insertCell(2);
          tabval.rows[i].cells[2].innerHTML = data['statewise'][i-1][
          'confirmed'];
          tabval.rows[i].cells[2].style.background = '##FFFACD';


          x.insertCell(3);
          tabval.rows[i].cells[3].innerHTML = data['statewise'][i-1][
          'active'];
          tabval.rows[i].cells[3].style.background = '#f36e23';


          x.insertCell(4);
          tabval.rows[i].cells[4].innerHTML = data['statewise'][i-1][
          'recovered'];
          tabval.rows[i].cells[4].style.background = '#ADFF2F';


          x.insertCell(5);
          tabval.rows[i].cells[5].innerHTML = data['statewise'][i-1][
          'deaths'];
          tabval.rows[i].cells[5].style.background = '#FF0000';

          


        } 
       }
  );
}

</script>

</body>
</html>