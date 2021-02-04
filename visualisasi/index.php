<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding-bottom: 10px;
  height: 5%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row" style="align: center;">
  <div class="column" style="background-color:none; align:center;">
    <?php include 'chart_suhu.php'; ?>
  </div>
  <div class="column" style="background-color:none;">
    <?php include 'chart_cahaya.php'; ?>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:none;">
    <?php include 'chart_waterlevel.php'; ?>
  </div>
  <div class="column" style="background-color:none;">
     <?php include 'chart_waterflow.php'; ?>
  </div>
</div>

</body>
</html>
