<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>  </title>
    </head>
    
    <body>
        
        <?php
		
		include_once 'tidzon_skript.php';
		
        ?>
        
		<form method="post">
			<fieldset>
				<legend>Tidzonen 1</legend>
				Tidzon
				<select name="timezone1">
					<option value="">- Afrika -</option>
					<option value="Africa/Cairo">Cairo</option>
					<option value="Africa/Johannesburg">Johannesburg</option>
					<option value="">- Amerika -</option>
					<option value="America/Chicago">Chicago</option>
					<option value="America/Los_Angeles">Los Angeles</option>
					<option value="America/Mexico_City">Mexico City</option>
					<option value="America/New_York">New York</option>
					<option value="America/Toronto">Toronto</option>
					<option value="">- Asian -</option>
					<option value="Asia/Bangkok">Bangkok</option>
					<option value="Asia/Hong_Kong">Hong Kong</option>
					<option value="Asia/Singapore">Singapore</option>
					<option value="Asia/Tokyo">Tokyo</option>
					<option value="">- Europe -</option>
					<option value="Europe/Amsterdam">Amsterdam</option>
					<option value="Europe/Athens">Aten</option>
					<option value="Europe/Berlin">Berlin</option>
					<option value="Europe/Copenhagen">Köpenhamn</option>
					<option value="Europe/Helsinki">Helsingfors</option>
					<option value="Europe/Stockholm">Stockholm</option>
				</select> <br>
				Årtal 
					<input type="number" name="artal1" value="2019">
				Månad 
					<select name="manad1">
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Mars</option>
					<option value="4">April</option>
					<option value="5">Maj</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Augusti</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				Datum <input type="number" name="dag1" min="1" max="31" step="1" value="1">
			</fieldset>
			
			<br>
			
			<fieldset>
				<legend>Tidzonen 2</legend>
				Tidzon
				<select name="timezone2">
					<option value="">- Afrika -</option>
					<option value="Africa/Cairo">Cairo</option>
					<option value="Africa/Johannesburg">Johannesburg</option>
					<option value="">- Amerika -</option>
					<option value="America/Chicago">Chicago</option>
					<option value="America/Los_Angeles">Los Angeles</option>
					<option value="America/Mexico_City">Mexico City</option>
					<option value="America/New_York">New York</option>
					<option value="America/Toronto">Toronto</option>
					<option value="">- Asian -</option>
					<option value="Asia/Bangkok">Bangkok</option>
					<option value="Asia/Hong_Kong">Hong Kong</option>
					<option value="Asia/Singapore">Singapore</option>
					<option value="Asia/Tokyo">Tokyo</option>
					<option value="">- Europe -</option>
					<option value="Europe/Amsterdam">Amsterdam</option>
					<option value="Europe/Athens">Aten</option>
					<option value="Europe/Berlin">Berlin</option>
					<option value="Europe/Copenhagen">Köpenhamn</option>
					<option value="Europe/Helsinki">Helsingfors</option>
					<option value="Europe/Stockholm">Stockholm</option>
				</select> <br>
				Årtal 
					<input type="number" name="artal2" value="2019">
				Månad 
					<select name="manad2">
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Mars</option>
					<option value="4">April</option>
					<option value="5">Maj</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Augusti</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				Datum <input type="number" name="dag2" min="1" max="31" step="1" value="1">
			</fieldset>
			<br>
			
			<input type="submit" name="submit" value="Submit">
			
		</form>
    
        
    </body>
</html>