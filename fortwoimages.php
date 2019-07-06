<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
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

<h2>Two Equal Columns</h2>

<div class="row" style="
    background: bisque;
">
  <div class="column" >
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" >
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>

</body>
</html>