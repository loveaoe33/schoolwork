<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <div align="right">
      <button type="button" name="BackUp" id="BackUp" class="btn btn-success btn-sm">返回管理頁面</button></p>
     </div>

 
     <br />
     <div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Record</h4>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" action="{{ url('article/'.$query->ID) }}"  >
      


         <input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="hidden" name="_method" value="PUT">  
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="hidden" name="_method" value="PUT">  
          <div class="form-group">
            <label class="control-label col-md-4" >顧客姓名 : </label>
            <div class="col-md-8">
             <input type="text" name="first_name" id="first_name" class="form-control" value='{{ $query->first_name }}' />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">顧客住址 : </label>
            <div class="col-md-8">
             <input type="text" name="last_address" id="last_address" class="form-control" value='{{ $query->last_address }}'/>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">居住城市 : </label>
            <div class="col-md-8">
             <input type="text" name="last_City" id="last_City" class="form-control"value='{{ $query->last_City }}' />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">code : </label>
            <div class="col-md-8">
             <input type="text" name="first_Code" id="first_Code" class="form-control" value='{{ $query->first_Code }}'/>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">居住國家 : </label>
            <div class="col-md-8">
             <input type="text" name="first_Country" id="first_Country" class="form-control"value='{{ $query->first_Country }}' />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">材質 : </label>
            <div class="col-md-8">
            <select class="form-control" id="exampleFormControlSelect1" name='exampleFormControlSelect1' value='{{ $query->exampleFormControlSelect1 }}'>
            <option>請選擇</option>
      <option>一般簾</option>
      <option>蛇廉</option>
 
      
    </select>
    
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=1.65>
  <label class="form-check-label" for="inlineRadio1">熟客</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value=1.35 checked="true">
  <label class="form-check-label" for="inlineRadio2">散客</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">未開發 (disabled)</label>
</div>

            </div>
           </div>

      

           <div class="form-group">
            <label class="control-label col-md-4">總價 : </label>
            <div class="col-md-8">
             <input type="text" name="first_Total" id="first_Total" class="form-control" value='{{ $query->first_Total }}'>
            </div>
           </div>

           
           <div class="form-group">
            <label class="control-label col-md-4">寬度 : </label>
            <div class="col-md-8">
             <input type="text" name="first_width" id="first_width" class="form-control" value='{{ $query->first_width }}'>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">高度 : </label>
            <div class="col-md-8">
             <input onkeyup="value=value.replace(/[^\d]/g,'') " type="text" name="first_height" id="first_height" class="form-control" value='{{ $query->first_height }}'>
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">尺 : </label>
            <div class="col-md-8">
             <input type="text" name="first_rule" id="first_rule" class="form-control" value='{{ $query->first_rule }}'>
            </div>
           </div>
           
                <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action" id="action" value="Add" />
                 <input type="hidden" name="hidden_id" id="hidden_id" />
                 <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="更新訂單" />
                </div>
         </form>

        </div>
     </div>
    </div>
</div>
<script>
$(document).ready(function () {
     
 $('#first_height').attr("readonly","readonly")
 $('#first_rule').attr("readonly","readonly")

  $('.modal-title').text('Update Record');
  $('#action_button').val('更新訂單');
  $('#action').val('Add');
  $('#form_result').html('');

  $('#formModal').modal('show');


  $('#first_Total').attr("readonly","readonly")
  $('#first_width').attr("readonly","readonly")

  $('#exampleFormControlSelect1').change(function(){
var a =$('#exampleFormControlSelect1').val();

$('#first_height').attr("readonly","readonly")
  $('#first_height').attr("readonly","readonly")
  $('#first_rule').attr("readonly","readonly")
$("#first_Total").val('');
$("#first_width").val('');
$("#first_rule").val('');
$("#first_height").val('');
 if(a =="一般簾")
{

  $("#first_width").removeAttr("readonly");
price=35;
}
else
{
  $("#first_width").removeAttr("readonly");
price=45;
}
});

  if ($("#first_Code").val() == '')
  {
    setRandom(1, 1000);
  $("#first_Code").val(random);

  }
  




  $('input[type=radio][name=inlineRadioOptions]').change(function() {
        if (this.value == '1.65') {
          $("#first_width").val('');
          $("#first_height").val('');
          $("#first_Total").val('');
          $("#first_rule").val('');
              $("#first_rule").attr("readonly","readonly");
              $("#first_height").attr("readonly","readonly");
              $("#first_Total").attr("readonly","readonly");
        }
        else if (this.value == '1.35') {
          $("#first_width").val('');
          $("#first_height").val('');
          $("#first_Total").val('');
          $("#first_rule").val('');
              $("#first_rule").attr("readonly","readonly");
              $("#first_height").attr("readonly","readonly");
              $("#first_Total").attr("readonly","readonly");
        }
    });
  
 

var h=0; /*寬度*/
var w=0; 
var Customer=0; /*顧客*/
var price=0; /*材質*/
var rule=0;  /*軌*/ 
var ta=0; /*福*/
var Ma=0 /*碼*/
var tatal=0;/*總額*/
var C=0;/*高度*/
var random=0;
var r=0; /*尺*/

$('#first_width').on('keyup', function() {
   h= Number($(this).val());
   ta=h*2.3/5;
  
   $("#first_height").removeAttr("readonly");
  

  
            var val=$('input:radio[name="inlineRadioOptions"]:checked').val();
            if(val=='1.65'){
              Customer=1.35;
             
            }
            else{
              Customer=1.65;
            
            }
           
         
    

  
  });
  $('#BackUp').click(function(){
  document.location.href="article"
 });
  $('#first_rule').on('keyup', function() {
    r= Number($(this).val());
   rule=r*price*h;
   set(r);
   var val=$('input:radio[name="inlineRadioOptions"]:checked').val();
            if(val=='1.65'){
              Customer=1.35;

            }
            else{
              Customer=1.65;
        
            }
   
  });
 

  $('#first_height').on('keyup', function() {
     C= Number($(this).val());
     $("#first_rule").removeAttr("readonly");
   
     var val=$('input:radio[name="inlineRadioOptions"]:checked').val();
            if(val=='1.65'){
              Customer=1.35;
             
            }
            else{
              Customer=1.65;
            
            }
           
  });
 
function set(a)
{
  Ma=a+C;
  var Mb=Ma*ta
  var Mc=Mb/3;
  tatal=(Mc+rule+ta)*Customer;
  console.log(ta);
  console.log(Ma);
  console.log(Mb);
  console.log(Mc);
  $("#first_Total").val(tatal);
}

function setRandom(minNum, maxNum) { //取得 minNum(最小值) ~ maxNum(最大值) 之間的亂數
     random= Math.floor( Math.random() * (maxNum - minNum + 1) ) + minNum;
}

  
});

</script>
<script>

</script>