<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap Table - Filter control</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'><link rel="stylesheet" href="./profile.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       Malhaar 
                                    </h5>
                                    <h6>
                                        Accountant
                                    </h6>
                                   <p class="proile-rating"> <span>      </span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
               

                    <?php  
                  $connect = mysqli_connect("localhost", "root", "","shopdatabase");  
                   $query ="SELECT * FROM customerprofile ";  
                   $result = mysqli_query($connect, $query);
       
                  if(mysqli_num_rows($result)>0){
                
                while($row = mysqli_fetch_array($result))  {

                    
                 ?>


                 <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p></p>
                            <a href=""></a><br/>
                            
                            <p></p>
                            <a href=""></a><br/>
                            
                        </div>
                    </div>


                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <h3>Name :-<?php echo $row["Name"];?></h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Email :-<?php echo $row["Email"];?> </h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Phone :-<?php echo $row["phone"];?></h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3 >Profession :-<?php echo $row["profession"];?></h3>
                            </div>
                                </div>
                                  <div class="row">
                                            <div class="col-md-6">
                                                <h3>User Id:- <?php echo $row["user id"];?></h3>
                                        </div>
                            </div>
                            </div>
                            

                            <?php
                        }
                    
                    }
                    
                    ?>  

                
</div>

</form>
</div>
</body>
</html>
