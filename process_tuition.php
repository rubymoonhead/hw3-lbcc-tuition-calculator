<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
    <title>Process Tuition</title>
		<link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
	<img src="lbcc_viking_logo.jpg" alt="LBCC Viking logo" width="300" height="225" style="border: 1px solid black">

	<h2>LBCC Balance Due</h2>

    <?php # process_tuition.php

		// Create shorthand for form data
		$caliRes = $_POST['caliRes'];
		$numUnits = $_POST['numUnits'];
		$healthfee = 20;
		$collServCard = $_POST['collServCard'];
		$parkPermit = $_POST['parkPermit'];
		// Scholarship award subtract the award from the cost of tuition
		// Do not let the total tuition go into negative values
		$scholarship = rand(0, 60);

		// Calculations
		// California Resident if yes $46 if no $331
		if ($caliRes == 'Yes') {
			$caliRes = $_POST['caliRes'];
		} else {
			$caliRes = $_POST['caliRes'];
		}

		$tuition = $caliRes;
		$units = $numUnits;
		$totalA = $tuition * $units;

		// Mandatory health Fee
		$totalB = $totalA + $healthfee;

		// Add Optional Fees
		$totalC = $totalB + $collServCard + $parkPermit;

		// Subtract scholarship award
		$totalD = $totalC - $scholarship;
		
		// Print the submitted information
		echo "<fieldset><p>Cost of Tuition: <strong>\$$tuition</strong> x <strong>$units</strong> unit(s) = <strong>\$$totalA</strong></p>
		<p>Student Health Fee: <strong>\$$healthfee</strong></p>
		<p>College Services card: <strong>\$$collServCard</strong></p>
		<p>Parking Permit: <strong>\$$parkPermit</strong></p>
		<p><strong>Total Registration Cost: \$$totalC</strong></p>
		<p>Scholarship Award: <strong>\$$scholarship</strong></p>
		<p><strong>Total College Balance Due: \$$totalD</strong></p>\n</fieldset>";
		
		?>

	<h4>Thank you for choosing Long Beach City College!</h4>

  </body>

</html>