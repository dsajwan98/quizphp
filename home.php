<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:login1.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'data');
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
         .animateuse{
         animation: leelaanimate 0.5s infinite;
         }
         @keyframes leelaanimate{
         0% { color: red },
         10% { color: yellow },
         20%{ color: blue }
         40% {color: green },
         50% { color: pink }
         60% { color: orange },
         80% {  color: black },
         100% {  color: brown }
         }
      </style>
      <script type="text/javascript">
         function check() {
            document.getElementById("red").checked = true;
         }

         function uncheck() {
            document.getElementById("red").checked = false;
         }
         function change(id){
          // if(document.getElementById(id).checked==true)
            document.getElementById(id).checked=false
         }
         function uncheckRadio(id) {
               var choice = id;
               for (i = 0; i < choice.length; i++) {
                  if ( choice[i].checked = true ) 
                     choice[i].checked = false; 
            }
         }
      </script>
   </head>
   
   <body>

      <?php 
      $_GET['page']=1;
      $page1 = $_GET['page'];

      if($page1=="" ||  $page1==1){
         $page1 = 0;
      } else{
         $page1 = (($page1 * 1)-1);

      }

      ?>

      <div>
       
         <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark">Welcome to Online Quiz </h1><br>
      <div class="container "><br>
         <div class="container">
         
            
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a> Welcome to Quiz Competition </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               <br>
               <form name="form1" action="checked.php" method="post">
                  <?php
                     for($i=1;$i<6;$i++){
                     //$l = 1;
                       $j=0;
                     $ansid = $i;

                     $sql1 = "SELECT * FROM questions WHERE qid = $i";
                     	$result1 = mysqli_query($con, $sql1);
                     		if (mysqli_num_rows($result1) > 0) 
                           {
                     						while($row1 = mysqli_fetch_assoc($result1)) 
                                       {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header">  <?php echo $i ." : ". $row1['question']; ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM answer WHERE ans_id = $i limit $page1, 4";
                        	$result = mysqli_query($con, $sql);
                        		if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_assoc($result)) {
                        	?>	
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $row['aid']; ?>" value="<?php echo $row['aid']; ?>" ondblclick="uncheckRadio($row['aid')"> <?php echo $row['answer']; ?> 
                        <br>
                     </div>
                     <?php
                        
                        } } 
                      //  $ansid = $ansid + $l;
                        } }}
                       
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" id="btnSubmit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
            <br>
            <a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br>
         </div>
         <br>
      </div>


     
      </div>



   </body>
</html>
