<?php {

	require('library/102task5f.php');

	do {

		echo PHP_EOL . "Rate convertion" . PHP_EOL . "1. USD to MYR" . PHP_EOL . "2. MYR to USD" . PHP_EOL;

		$select = (int)readline();

		if ( $select != 'x' ) {

			if ( $select == '1' ) {
		
				$inputUSD = (int)readline( "USD: " . PHP_EOL );
		
				$USD = conversionUSD($inputUSD);

				echo "MYR: ". number_format($USD['MYR'], 2, '.', ',') . PHP_EOL;

			}

			else if ( $select == '2' ) {
		
				$inputMYR = (int)readline( "MYR: " . PHP_EOL );
		
				$MYR = conversionMYR($inputMYR);

				echo "USD: ". number_format($MYR['USD'], 2, '.', ',') . PHP_EOL;

			}

			else {
				echo "Invalid" . PHP_EOL;
			}

		}

	} while ( $select != 'x' );

} ?>