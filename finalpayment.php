<?php
//filename: finalpayment.php

if (!empty($_POST)) {
        
        switch ($_POST['code']) {
                case 1: 
                        $value = '3900';
                        break;
                case 2: 
                        $value = '3399';
                        break;
				case 3: 
                        $value = '5500';
                        break;
				case 4: 
                        $value = '6500';
                        break;
				case 5: 
                        $value = '4200';
                        break;
				case 6: 
                        $value = '4000';
                        break;
                default:
                        $value = '0000';            
        }
        
}


?>

<html>
<body>

<form method="post" action="finalpayment.php">

<select name="code" onchange="this.form.submit();">
        <option>Choose A Package</option>
        <option value="1">Vadodara</option>
        <option value="2">Junagadh</option>
		<option value="3">Ahmedabad</option>
		<option value="4">Jamnagar</option>
		<option value="5">Kutch</option>
		<option value="6">Porbandar</option>
		
</select>

<input type="text" name="test" value="<?php echo $value;?>" />
        
</body>
</html>