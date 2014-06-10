<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<head>
<title>php 2nd page</title>
<script type="text/javascript">
	function getID(oObject) {
    	var id = oObject.id;
    	// alert("This object's ID attribute is set to \"" + id + "\"."); 
    	// bar();
    	loadXMLDoc(id);
	}
	// function bar(){
	// 	alert("in bar");
	// }
	function loadXMLDoc(oObject)
{

	// alert(oObject);
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("page").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("get","sample.php?id="+oObject,true);
xmlhttp.send();
}
</script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-2" >
			<?php		
				include("dbconn.php");
				$result = mysqli_query($con,"SELECT name FROM test");		
				while($row = mysqli_fetch_array($result)){			
					echo "<a href='#'><label onclick='getID(this)' id='" . $row['name'] . "'>" . $row['name'] . "</label></a><br>";
				}	
				mysqli_close($con);
			?>	
		</div>
		<div class="col-md-8" id="page"> 2nd</div>
	</div>
</div>