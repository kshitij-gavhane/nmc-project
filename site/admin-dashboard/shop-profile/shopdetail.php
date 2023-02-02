
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Information</title>
    <link rel="stylesheet" href="shop_page2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
    </div>
   
    


	<div class="container-fluid d-flex mt-4">
    <div class="col-md-5 col-sm-12 ">
            <h2 >Shop Profile </h2>


            <?php  
 $connect = mysqli_connect("localhost", "root", "","shopdatabase");  
 $query ="SELECT * FROM shopdetails ";  
 $result = mysqli_query($connect, $query);
       
            if(mysqli_num_rows($result)>0){
                
                while($row = mysqli_fetch_array($result))  {

                    
                 ?>
                 <div class="card" style="width: 30rem;">
                 <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/062.webp" class="card-img-top" alt="Chicago Skyscrapers"/>
                 <div class="card-body">
                   <h5 class="card-title">Laxminagar</h5>
                   <p class="card-text">Kaamgaar coloney.</p>
                 </div>
                 <ul class="list-group list-group-info list-group-small">
                 <li class="list-group-item px-4">shopno:-<?php echo $row["shopno"];?>  </li>
                 <li class="list-group-item px-4">owners name:-<?php echo $row["owners name"];?></li>
                   <li class="list-group-item px-4">rent:-<?php echo $row["rent"];?></li>
                   <li class="list-group-item px-4">timeperiod:-<?php echo $row["timeperiod"];?></li>
                 </ul>
                
                 </div>
                 <?php
                }
            
            }
            
            
            ?>  


</div>
<div class="col-md-5 col-sm-12 right">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59536.92732933557!2d79.03597170954431!3d21.150091649509662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c096248ff37f%3A0xb59ddeff04510c95!2sNMC%20DHANTOLI%20ZONE%20NO.4!5e0!3m2!1sen!2sin!4v1663673985575!5m2!1sen!2sin" style="border:0;"  width="730" height="650"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
              

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous">

		$(document).ready(function(){  
			$('#Market_data').DataTable();  
		 });  
		
		</script>
</body>

</html>
