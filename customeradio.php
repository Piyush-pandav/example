<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Circle Button with submit - Bootsnipp.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
      body{margin:40px;}
      .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
      }
      .btn-circle.btn-lg {
        width: 50px;
        height: 50px;
        padding: 13px 13px;
        font-size: 18px;
        line-height: 1.33;
        border-radius: 25px;
      }

  </style>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <form class="form-horizontal col-xs-10 col-xs-offset-1" method="post" action="">
      <div class="form-group">
      <h4>select it</h4></br>
        <div data-toggle="buttons">
          <label class="btn btn-default btn-circle btn-lg active"><input type="radio" name="q1" value="0"><i class="glyphicon glyphicon-home" checked></i></label>
          <label class="btn btn-default btn-circle btn-lg">       <input type="radio" name="q1" value="1"><i class="glyphicon glyphicon-ok"></i></label>
          <label class="btn btn-default btn-circle btn-lg">       <input type="radio" name="q1" value="2"><i class="glyphicon glyphicon-remove"></i></label>
        </div>
      </div>
      <div class="form-group">
      <h4>select it</h4></br>
        <div data-toggle="buttons">
          <label class="btn btn-primary btn-circle">       <input type="radio" name="q2" value="0"><i class="glyphicon glyphicon-home"></i></label>
          <label class="btn btn-info    btn-circle active"><input type="radio" name="q2" value="1"><i class="glyphicon glyphicon-ok" checked></i></label>
          <label class="btn btn-danger  btn-circle">       <input type="radio" name="q2" value="2"><i class="glyphicon glyphicon-remove"></i></label>
        </div>
      </div>
      <div class="form-group">
      <h4>select it</h4></br>
        <div data-toggle="buttons">
          <label class="btn btn-primary btn-circle btn-lg">       <input type="radio" name="q2" value="0"><i class="glyphicon glyphicon-home"></i></label>
          <label class="btn btn-info    btn-circle btn-lg active"><input type="radio" name="q2" value="1"><i class="glyphicon glyphicon-ok" checked></i></label>
          <label class="btn btn-danger  btn-circle btn-lg">       <input type="radio" name="q2" value="2"><i class="glyphicon glyphicon-remove"></i></label>
        </div>
      </div>
    </form>
  </div>
</body>
</html>