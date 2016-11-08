
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        </head>
<body>
    
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">play-BETA</a>
    </div>
    <ul class="nav navbar-nav">
       
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="signup.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Up</a></li>
    <li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
    
    </ul>
  </div>
</nav>   
    

<div class="container" style="color:red">
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ALERT</h4>
        </div>
        <div class="modal-body">
          <p><?php echo $alert;?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="myopen()">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>
<?php
if($alert="wrong password")
        $redirect="index.html";
?>
<script>
  $(window).load(function()
{
    $('#myModal').modal('show');
});
  function myopen()
  {
window.open("<?php echo $redirect?>",name="_parent");

  }
</script>

</html>