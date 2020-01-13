<?php
		$nm = $_GET["nm"];
		
		if($nm == "")
		{
		}
		else
		{
			include("mydatabaseinfo.php");
			mysql_connect($dbs,$dbu,$dbp);
			mysql_select_db($dbn);
			$res = mysql_query("select * from places where city like('$nm%')");
			
			echo "<table border=\"0\" >";
			while($row = mysql_fetch_array($res))
			{
				$a=$row['id'];
				echo "<tr >";
				
					echo "<td><a href='link.php?id=<?php echo $a;?>'><img src='pictures/$row[image]' width='80' height='80'/></td>";
					echo "<td>";?> <font color="red"><a href="link.php?id=<?php echo $a;?>"><?php echo $row["city"];?> </a><?php
					echo "</td></font>";
			echo "</tr>";
			}
			echo "</table>";
		}
?>
	