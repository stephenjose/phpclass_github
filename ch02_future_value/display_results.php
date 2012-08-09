<?php
    // get the data from the form
    $investment = $_POST['investment'];
    $interest_rate = $_POST['interest_rate'];
    $years = $_POST['years'];

    // validate investment entry
    if ( empty($investment) ) {
        $error_message = 'Investment is a required field.'; 
    } else if ( !is_numeric($investment) )  {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.';        
    // validate interest rate entry
    } else if ( empty($interest_rate) ) {
        $error_message = 'Interest rate is a required field.'; 
    } else if ( !is_numeric($interest_rate) )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 || $interest_rate > 15 ) {
        $error_message = 'Interest rate must be greater than zero and less than or equal to 15.';
	} else if ( !is_numeric($years) )  {
        $error_message = 'Number of Years must be a valid number.'; 
    } else if ( $years <= 0 || $years > 50 ) {
        $error_message = 'Number of Years must be greater than zero and less than or equal to 50.';		
    // set error message to empty string if no invalid entries
    } else {
        $error_message = '';
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
	// for loop to add interest each year
    $future_value = $investment;
		
    /*for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    } */  
	
    $future_value = $future_value / pow(1.0 + ($interest_rate * 0.01), $years);
    

    // apply currency and percent formatting
    $investment_f = '$'.number_format($future_value, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Amount to Invest:</label>
        <span><?php echo $investment_f; ?></span><br />

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br />

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br />

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br />
		
		<p>This calculation was done on <span> <?php echo date('d/m/Y'); ?> </span> </p>
		
    </div>
</body>
</html>