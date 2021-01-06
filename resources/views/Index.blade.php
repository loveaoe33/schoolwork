<head>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css"/>
</head>
<div class='nav' id='nav'name='nav'>
         

</div>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<div align="right">
      <button type="button" name="Manager_record" id="BackUp"" class="btn btn-success btn-sm">返回</button></br>
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

<div class='row'>
<div class='col-xs-12  '>
<table class="table table-hover">
<tr>
         <th>顧客姓名</th>
         <th>顧客地址</th>
         <th>居住城市</th>
         <th>居住國家</th>
         <th>選擇材質</th>
         <th>長</th>
         <th>寬</th>
         <th>尺</th>
         <th>金額</th>
         <th>編輯</th>
         <th>刪除</th>
        </tr>
@foreach ($query as $var)
<tr>

<td>{{ $var->first_name }}</td>
<td>{{ $var->last_address }}</td>
<td>{{ $var->last_City }}</td>
<td>{{ $var->first_Country }}</td>
<td>{{ $var->exampleFormControlSelect1	 }}</td>
<td>{{ $var->first_width }}</td>
<td>{{ $var->first_height }}</td>
<td>{{ $var->first_rule }}</td>
<td>{{ $var->first_Total }}</td>
<td><a href="{{ url('article/'.$var->ID.'/edit') }}" role='btn' class='btn btn-primary'>編輯</a></td>

<td>
<form action="{{ url('article/'.$var->ID) }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="hidden" name="_method" value="delete">
<input type="submit" value="刪除"  role="btn" class="btn btn-danger" >
</form> 
</td>
</tr>
@endforeach
</div>
</div>
</table>
</section>

<script>
 $('#BackUp').click(function(){
  history.go(-1)
 });
</script>