

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>




</body>
</html>


<section class="container-fulid">
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
</div>



</div>
</div>
</div>

<section class="container-fulid">
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
<div class='row'>
<div class='col-xs-12  '>
</p>
</div>
</div>
</div>


<section class="container">
<form action="{{ url('article') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="text" name="title"class="form-control">
<textarea name="content"  cols="30" rows="10" class="form-control"></textarea>
<input type="submit" value="送出" class="btn btn-primary">
</section>
</form>
