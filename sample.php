<html>
<script type="text/javascript">
</script>
<?php 
echo "clicked id is : ";
$name=$_GET["id"];
echo $name;	
				include("dbconn.php");				
				$f_result = mysqli_query($con,"SELECT * FROM test WHERE name='$name'");										
				include("table_format.php");				
					while($rows = mysqli_fetch_array($f_result))
  					{ 
  						// echo $rows;
		  				echo "<tr>";
  						echo "<td>" . $rows['s.no'] . "</td>";
  						echo "<td>" . $rows['name'] . "</td>";
  						echo "<td>" . $rows['identify'] . "</td>";
						echo "</tr>";				
					}
					echo "</table>";
					mysqli_close($con);				
?>
</html>