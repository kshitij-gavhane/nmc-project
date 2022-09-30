<?php  
 $connect = mysqli_connect("localhost", "root", "","shopdatabase");  
 $query ="SELECT * FROM ownertable ";  
 $result = mysqli_query($connect, $query);

 ?>  


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NMC-Markets</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
<h1>Market Table</h1>

<div id="toolbar">
		<select class="form-control">
				<option value="">Export Basic</option>
				<option value="all">Export All</option>
				<option value="selected">Export Selected</option>
		</select>
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">Owners Name</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">Market Name</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true">Area</th>
			<th data-field="note" data-sortable="true">View</th>
		</tr>
	</thead>
	
		<?php  
		if(mysqli_num_rows($result)>0){

		
		while($row = mysqli_fetch_array($result))  
		{  
		  echo '  
		  <tr>  
		  <td>'.$row["OwnerName"].'</td> 
		  	   <td>'.$row["OwnerName"].'</td> 
			   <td>'.$row["MarketName"].'</td>  
			   <td>'.$row["Area"].'</td>  
			   <td>'.$row["view"].'</td>  
		

		  </tr>  
		   ';  
	 }  
		}
	 ?>  

	
			
	
</table>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
<script src='//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script><script  src="./script.js"></script>

</body>
</html>
