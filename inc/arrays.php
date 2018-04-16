<?php

// List of Carriers
$carriers = array(
    array(
        "name" => "Florida Blue",
        "logo" => "florida-blue"
    ),
    array(
        "name" => "Aetna",
        "logo" => "aetna"
    ),
    array(
        "name" => "Cigna",
        "logo" => "cigna"
    ),
    array(
        "name" => "AIG",
        "logo" => "aig"
    ),
);

$lineOfBusiness = array(
    array(
        "name" => "Health"
    ),
    array(
        "name" => "Dental"
    ),
    array(
        "name" => "Vision"
    ),
    array(
        "name" => "Pediatric Dental"
    ),
    array(
        "name" => "Short Term Life"
    ),
    array(
        "name" => "AD&D"
    ),
    // array(
    //     "name" => "Vision"
    // ),
    // array(
    //     "name" => "Travel"
    // ),
    // array(
    //     "name" => "Health"
    // ),
    // array(
    //     "name" => "Dental"
    // ),
    // array(
    //     "name" => "Vision"
    // ),
    // array(
    //     "name" => "Travel"
    // ),
);


$allStates = array(
	'AL'=>"Alabama",  
	'AK'=>"Alaska",  
	'AZ'=>"Arizona",  
	'AR'=>"Arkansas",  
	'CA'=>"California",  
	'CO'=>"Colorado",  
	'CT'=>"Connecticut",  
	'DE'=>"Delaware",  
	'FL'=>"Florida",  
	'GA'=>"Georgia",  
	'HI'=>"Hawaii",  
	'ID'=>"Idaho",  
	'IL'=>"Illinois",  
	'IN'=>"Indiana",  
	'IA'=>"Iowa",  
	'KS'=>"Kansas",  
	'KY'=>"Kentucky",  
	'LA'=>"Louisiana",  
	'ME'=>"Maine",  
	'MD'=>"Maryland",  
	'MA'=>"Massachusetts",  
	'MI'=>"Michigan",  
	'MN'=>"Minnesota",  
	'MS'=>"Mississippi",  
	'MO'=>"Missouri",  
	'MT'=>"Montana",
	'NE'=>"Nebraska",
	'NV'=>"Nevada",
	'NH'=>"New Hampshire",
	'NJ'=>"New Jersey",
	'NM'=>"New Mexico",
	'NY'=>"New York",
	'NC'=>"North Carolina",
	'ND'=>"North Dakota",
	'OH'=>"Ohio",  
	'OK'=>"Oklahoma",  
	'OR'=>"Oregon",  
	'PA'=>"Pennsylvania",  
	'RI'=>"Rhode Island",  
	'SC'=>"South Carolina",  
	'SD'=>"South Dakota",
	'TN'=>"Tennessee",  
	'TX'=>"Texas",  
	'UT'=>"Utah",  
	'VT'=>"Vermont",  
	'VA'=>"Virginia",  
	'WA'=>"Washington",  
	'WV'=>"West Virginia",  
	'WI'=>"Wisconsin",  
	'WY'=>"Wyoming"
);

?>

<script type="text/javascript">
    var statesJS = [<?php echo json_encode($allStates); ?>];
</script>