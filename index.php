<?php
$item_list = array( "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belau (Palau)", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia Herzegovina", "Botswana", "Brazil", "British Indian Ocean", "British Virgin Islands", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Rep.", "Chad", "Chile", "China (PR)", "Christmas Island", "Cocos Island", "Colombia", "Comoros", "Congo", "Congo Dem. Rep.", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Antarctic", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Irish Republic", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kirghizstan/Kyrgyzstan", "Kiribati", "Korea (DPR)", "Korea (Republic of)", "Kuwait", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia (FYR)", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru Island", "Nepal", "Netherland Antilles", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger Republic", "Nigeria", "Norfolk Island", "Northern Mariana Isl", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Samoa (American)", "San Marino", "Sao Tome & Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "St Kitts & Nevis", "St Helena", "St Lucia", "St Pierre & Miquelon", "St Vincent & Grenadines", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands (USA)", "Wallis & Futuna Islands", "Western Samoa", "Yemen", "Zambia", "Zimbabwe");

$minimum_items_per_page = 30;

$page_list = paginate_items($item_list, $minimum_items_per_page);

print_r($page_list);

//------------------------------------------------------------

function paginate_items($item_list, $minimum_items_per_page){

    // Your code goes here.a<?php
    $item_list = array( "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belau (Palau)", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia Herzegovina", "Botswana", "Brazil", "British Indian Ocean", "British Virgin Islands", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Rep.", "Chad", "Chile", "China (PR)", "Christmas Island", "Cocos Island", "Colombia", "Comoros", "Congo", "Congo Dem. Rep.", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Antarctic", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Irish Republic", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kirghizstan/Kyrgyzstan", "Kiribati", "Korea (DPR)", "Korea (Republic of)", "Kuwait", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia (FYR)", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru Island", "Nepal", "Netherland Antilles", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger Republic", "Nigeria", "Norfolk Island", "Northern Mariana Isl", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Samoa (American)", "San Marino", "Sao Tome & Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "St Kitts & Nevis", "St Helena", "St Lucia", "St Pierre & Miquelon", "St Vincent & Grenadines", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands (USA)", "Wallis & Futuna Islands", "Western Samoa", "Yemen", "Zambia", "Zimbabwe");

    $minimum_items_per_page = 30;

    $page_list = paginate_items( $item_list, $minimum_items_per_page );

    print "<pre>";
    print_r($page_list);
    print "</pre>";

/*
    Flow.
    1. Calculate total number of items in the array
    2. Calulate total number of pages using $minimum_items_per_page. items/pages=total
    3. Create 'page' array
    4. set the offset to 0 - increase this after each pass of if statement
    5. Calulate remaining items
    6. if statement, if the remaining number of items is greater than 0 then
        a. for each pass/increment divide the remaining items between all the pages - needs to be rounded up to full number
        b. calculate the new number of items per page
        c. increment the page limit by the number of items
        d. get the current offset - start at 0 (step 4)
        e. calculate and set the new offset based of previous step
        f. calculate remaining items of first pass/increment
        g. loop
    7. else...
        a. set the page limit to $minimum_items_per_page as set above in original code
        b. get the curent offset like above - start at 0 (like step 4)
        c. set offset to current offset plus $minimum_items_per_page
    
*/

    function paginate_items( $item_list, $minimum_items_per_page ){
        
        $total_items_in_list = count( $item_list ); //count total number of items in the array
        $total_number_of_pages = floor( $total_items_in_list / $minimum_items_per_page ); //round down to nearest int
        
        $page = array(); //create an empty array to store elements
        $offset = 0; //set page offset to 0
        
        $mod = $total_items_in_list % $minimum_items_per_page; //calculate modulus of pages i.e 100 items and 30 per page = 3 pages and 10 remaining
        
        if ( $mod > 0 ) {
            
            for( $i=0; $i < $total_number_of_pages; $i++ ){
                $remaining_items = ceil( $mod / ( $total_number_of_pages - $i ) ); //divide the remainders between all pages subtract number of the increment/pass. Round result up to nearest int.
                $total_items_actual = $minimum_items_per_page + $remaining_items; //calculate new amount of total items per page
                $page[$i]['limit'] = $total_items_actual;  //set new items per page limit
                
                $page[$i]['offset'] = $offset;  //get the offset
                $offset += $minimum_items_per_page + $remaining_items; //calculate and set new offset - min items per page + items remaining
                
                $mod = $mod - $remaining_items; //remove the remaining items from the mod and run again
                
            }
            
        } else {  // else if there are no remainders
            
            for( $i=0; $i < $total_number_of_pages; $i++ ){
                $page[$i]['limit'] = $minimum_items_per_page;
                
                $page[$i]['offset'] = $offset;
                $offset += $minimum_items_per_page; //set offset to current offset plus $minimum_items_per_page
            }
            
        } 
        return $page;
    }
?>

<pre style="margin-top:75px;">
&lt;?php

    function paginate_items( $item_list, $minimum_items_per_page ){
        
        $total_items_in_list = count( $item_list ); 
        $total_number_of_pages = floor( $total_items_in_list / $minimum_items_per_page ); 
        
        $page = array();
        $offset = 0; 
        
        $mod = $total_items_in_list % $minimum_items_per_page; 
        
        if ( $mod > 0 ) {
            
            for( $i=0; $i < $total_number_of_pages; $i++ ){
                $remaining_items = ceil( $mod / ( $total_number_of_pages - $i ) );
                $total_items_actual = $minimum_items_per_page + $remaining_items; 
                $page[$i]['limit'] = $total_items_actual;
                
                $page[$i]['offset'] = $offset; 
                $offset += $minimum_items_per_page + $remaining_items;
                
                $mod = $mod - $remaining_items; 
                
            }
            
        } else {  // else if there are no remainders
            
            for( $i=0; $i < $total_number_of_pages; $i++ ){
                $page[$i]['limit'] = $minimum_items_per_page;
                
                $page[$i]['offset'] = $offset;
                $offset += $minimum_items_per_page;
            }
            
        } 
        
        return $page;
    }
    
/&gt;
</pre>

}
?>
