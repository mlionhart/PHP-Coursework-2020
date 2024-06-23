<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Building Exercise 5</title>
</head>
<body>
    <p><strong>Select a State:</strong>&nbsp; 
    <select>
        <?php
            $us_state_abbrevs_names = array(
                'AL'=>'ALABAMA',
                'AK'=>'ALASKA',
                'AS'=>'AMERICAN SAMOA',
                'AZ'=>'ARIZONA',
                'AR'=>'ARKANSAS',
                'CA'=>'CALIFORNIA',
                'CO'=>'COLORADO',
                'CT'=>'CONNECTICUT',
                'DE'=>'DELAWARE',
                'DC'=>'DISTRICT OF COLUMBIA',
                'FM'=>'FEDERATED STATES OF MICRONESIA',
                'FL'=>'FLORIDA',
                'GA'=>'GEORGIA',
                'GU'=>'GUAM GU',
                'HI'=>'HAWAII',
                'ID'=>'IDAHO',
                'IL'=>'ILLINOIS',
                'IN'=>'INDIANA',
                'IA'=>'IOWA',
                'KS'=>'KANSAS',
                'KY'=>'KENTUCKY',
                'LA'=>'LOUISIANA',
                'ME'=>'MAINE',
                'MH'=>'MARSHALL ISLANDS',
                'MD'=>'MARYLAND',
                'MA'=>'MASSACHUSETTS',
                'MI'=>'MICHIGAN',
                'MN'=>'MINNESOTA',
                'MS'=>'MISSISSIPPI',
                'MO'=>'MISSOURI',
                'MT'=>'MONTANA',
                'NE'=>'NEBRASKA',
                'NV'=>'NEVADA',
                'NH'=>'NEW HAMPSHIRE',
                'NJ'=>'NEW JERSEY',
                'NM'=>'NEW MEXICO',
                'NY'=>'NEW YORK',
                'NC'=>'NORTH CAROLINA',
                'ND'=>'NORTH DAKOTA',
                'MP'=>'NORTHERN MARIANA ISLANDS',
                'OH'=>'OHIO',
                'OK'=>'OKLAHOMA',
                'OR'=>'OREGON',
                'PW'=>'PALAU',
                'PA'=>'PENNSYLVANIA',
                'PR'=>'PUERTO RICO',
                'RI'=>'RHODE ISLAND',
                'SC'=>'SOUTH CAROLINA',
                'SD'=>'SOUTH DAKOTA',
                'TN'=>'TENNESSEE',
                'TX'=>'TEXAS',
                'UT'=>'UTAH',
                'VT'=>'VERMONT',
                'VI'=>'VIRGIN ISLANDS',
                'VA'=>'VIRGINIA',
                'WA'=>'WASHINGTON',
                'WV'=>'WEST VIRGINIA',
                'WI'=>'WISCONSIN',
                'WY'=>'WYOMING',
                'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
                'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
                'AP'=>'ARMED FORCES PACIFIC'
            );

            $stateAbbr = array_values($us_state_abbrevs_names);
            $state = array_keys($us_state_abbrevs_names);
            foreach ($us_state_abbrevs_names as $stateAbbr => $state) {
                echo "<option value=$stateAbbr>$state</option>";
            }
        ?>
    </select>
</body>
</html>