<?php
/*
Plugin Name: Sorties
Description: Recupere le contenu 
Author: Kenzo Vongkingkeo
*/


function api_display() {
    $api_url = 'http://localhost/asvel/public/api/api-sorties.php';
// Read JSON file
    $json_data = file_get_contents($api_url);
// Decode JSON data into PHP array
    $response_data = json_decode($json_data);
// All user data exists in 'data' object

// Cut long data into small & select only first 10 records

// Print data if need to debug
print_r($sorties);

// Traverse array and display user data
//     foreach ($user_data as $user) {
// 	    echo "name: ".$user->employee_name;
// 	    echo "<br />";
// 	    echo "name: ".$user->employee_age;
// 	    echo "<br /> <br />";
// }
}

add_shortcode('api_display', 'api_display'); 


?>



