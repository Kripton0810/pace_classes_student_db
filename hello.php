<html>
<head>
<title>Table by PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
date_default_timezone_set('Asia/Kolkata');
echo date('Y-m-d H:i:s e');
?>
<table class="table table-striped table-hover">
<thead>
<tr>
	<th scope="col">S.no </th>
      	<th scope="col">Name</th>
      	<th scope="col">Class</th>
      	<th scope="col">Roll</th>
</tr>
</thead>
<tbody>
<?php
	$data = array(array("name"=>"subhankar","roll"=>23,"class"=>12),
			array("name"=>"ankita","roll"=>24,"class"=>11),
			array("name"=>"deepsagor","roll"=>25,"class"=>12),
			array("name"=>"barun","roll"=>26,"class"=>11));
	for($i=0;$i<count($data);$i++)
	{
		$j = $i+1;
		echo "<tr><td>$j</td><td>{$data[$i]['name']}</td><td>{$data[$i]['class']}</td><td>{$data[$i]['roll']}</td></tr>";
	}
?>
</tbody>


</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>
