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
	
	
	<?php if (empty($error_message)) { 
	// if there is no error message, place empty strings in each field
	// ie if error message is empty
		$investment="";
		$interest_rate = "";
		$years = "";	
	} ?>
	
	
    <?php if (!empty($error_message)) { // if error message is not empty (so, there is an error)
	// give the paragraph element class error, and echo the php error message 
	// note the opening brace opens inside a php tag on line 23, but closes within a different one below on line 28
	?>   
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
	
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Future Value:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br />

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br />

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>