<?php
session_start();
$_SESSION['pin']='9883239022';
  require_once "db.php"; 
  // $first=1;
  // $second=1;
  ?>
  <!DOCTYPE html>
<html>
    <head>
        <title> Unit Marks | Michaelnagar Shikshaniketan (H.S.) </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/mnsnhs_logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
</head>
  <body>
  <header>
		<div class="container mt-4">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-2 text-center">
							<img src="<?php echo $logo;?>" class="img-fluid">
						</div>
						<div class="col-md-10 text-center">
							<h3> <b><?php echo $school_name; ?></b> </h3>
							<h5><?php echo $topic; ?></h5>
							<h5 class="text-danger"> </h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
  <?php //if($first): ?>
    <form method="POST">
      <div class="card text-center first">
        <div class="card-header">
          <i class="fa fa-university" aria-hidden="true"></i>Enter Details of Student
        </div>
        <div class="row justify-content-md-center py-1 px-5">
          <div class="col-sm-2">
            <div class="form-group">
              <label class="col-sm-20"><b>Student ID: <font color="red">* </font></b></label>
            </div>
            <div class="p-1">
              <input type="text" class="form-control text-center text-uppercase" name="id" placeholder="Student ID" required  >
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label class="col-sm-20"><b>Class: <font color="red">* </font></b></label>
            </div>
            <div class="p-1">
              <select id="class" name="class" class="form-select text-center" required>
                <option value="" selected=""> </option>
                <option value="V" >V </option>
                <option value="VI">VI </option>
                <option value="VII">VII </option>
                <option value="VIII">VIII  </option>
                <option value="IX">IX  </option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label class="col-sm-20"><b>Section: <font color="red">* </font></b></label>
            </div>
            <div class="p-1">
              <select id="sec" name="sec" class="form-select text-center" required>
                <option value="" selected=""> </option>
                <option value="A">A </option>
                <option value="B">B </option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label class="col-sm-20"><b>Roll: <font color="red">* </font></b></label>
            </div>
            <div class="p-1">
              <input type="text" class="form-control text-center" name="roll" placeholder="Roll" required inputmode="numeric">
            </div>
          </div>
          <div class="row justify-content-md-center py-1 px-5" id="mycaptcha">
            <div class="col-sm-3">
              <div class="form-group" >
                  <label><b>Captcha: <font color="red">* </font></b></label>
                  <?php include_once 'captcha.php'; ?>   
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                  <input class="form-control text-center" type="text" id="captcha" name="captcha" placeholder="Enter Captcha" required>
              </div>
          </div>
          </div>
        </div>
        <div class="mt-3 mb-3 text-center">
          <button class="btn btn-outline-primary" type="submit" name="find" id="find"><i class="fas fa-search"></i> Search</button>
        </div>
      </div>
    </form>
    <?php //endif ?>
    <?php //if($second): ?>
      <div class="card second">
        <div class="card-header text-center">
          <i class="fas fa-file-spreadsheet"></i> Marks of 1st & 2nd Unit Test, 2022
        </div>
        <div class="card-body">
          <div class="row py-3 justify-content-md-center">
            <div class="col-md-4 py-1">
              <b>Name: &nbsp;</b> <input type="text" id="sname" disabled class="form-control"> 
            </div>
            <div class="col-md-2 py-1">
              <b>Class: &nbsp;</b> <input type="text" id="cname" disabled class="form-control ">
            </div>
            <div class="col-md-2 py-1">
              <b>Section: &nbsp;</b> <input type="text" id="section" disabled class="form-control">
            </div>
            <div class="col-md-2 py-1">
              <b>Roll: &nbsp;</b> <input type="text" id="roll" disabled class="form-control">
            </div>
            <div class="col-md-2">
            </div>
          </div>  
          <div class="table-responsive">
            <table class="table table-bordered text-center" > 
              <thead>
                <tr class="table-primary"><th colspan=3> Marks Obtained</th></tr>
                <tr class="table-primary">
                  <th>Subject</th>
                  <th>1st Unit</th>
                  <th>2nd Unit</th>
                </tr>
              </thead>
              <tbody id="myTable">
              </tbody>
            </table>
            <h3 class="text-danger">If you find any issues with the marks Contact your Class Teacher.</h3>
          </div>
        </div> 
      </div>  
      <?php //endif ?>
    
    <div class="card-footer text-center text-muted text-uppercase">
  &copy; <?php echo date("Y");?> <?php echo $school_name;?> | Designed By <a href="https://www.rajous.com/" target="_blank">Rajib Barui</a>
</div>
  </body>
  <script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $(".second").hide();
    $('form').on('submit', function (e) 
    // $("#find").on("click", function(e)
    {
      e.preventDefault();

      // $(".second").show();
      //     $(".first").hide();
      var cptcha = document.getElementById('captcha').value;
      var cp2 = '<?php echo $_SESSION['captcha']; ?>';
      if(cp2==cptcha)
      {
        $.ajax({
        type: 'post',
        url: 'fetch-record.php',
        data: $('form').serialize(),
        dataType: "JSON",
        success: function (data) {
          // alert('form was submitted');
          // alert(data.length);
          if(data.status==false)
          {
            alert(data.message);
            location.reload();
          }
          else{
            $(".first").hide();
            $(".second").show();
            document.getElementById('sname').value = data[0].sname;
            document.getElementById('cname').value = data[0].class;
            document.getElementById('section').value = data[0].section;
            document.getElementById('roll').value = data[0].roll;
            console.log(data[0].class);
            for (var i=0; i<data.length; i++) {
            var row = $('<tr><td>' + data[i].subject+ '</td><td>' + data[i].u1 + '</td><td>' + data[i].u2 + '</td></tr>');
            $('#myTable').append(row);
        }
      }   
    }
        });
      }
      else{
        alert("Invalid captcha");
      }
    });
  });

</script>
</html>
