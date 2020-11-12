<?php
if(isset($_POST["state"])){
    // Capture selected state
    $state = $_POST["state"];
     
    // Define country and city array
    $stateArr = array(
                    "Andhra_Pradesh" => array("Adilabad", "Adoni", "Akiveedu", "Aleswaram", "Amalapuram", "Anakapalli", "Anantapur", "Anaparthi", "Ankapur", "Annavaram", "Araku", "Armoor", "Aswaraopet", "Rajavammangi"),
                    "Arunachal_Pradesh" => array("Parashuram Kund", "Bhismaknagar", "Malinithan", "Akashiganga", "Namdapha", "Itanagar", "Bomdila", "Anjaw", "Changlang", "East Kameng", "East Siang", "Kurung Kumey"),
                    "Assam" => array("Baghmara", "Barpeta", "Dhemaji", "Digboi", "Dibrugarh", "Doom Dooma", "Duliajan", "Golaghat", "Guwahati", "Haila Kamchi", "Hailakandi", "Halflong", "Jorhat", "Karimganj", "Lakhimpur"),
                    "Bihar" => array("London", "Manchester", "Liverpool"),
                    "Karnataka" => array("London", "Manchester", "Liverpool"),
                    "Kerala" => array("London", "Manchester", "Liverpool"),
                    "Chhattisgarh" => array("London", "Manchester", "Liverpool"),
                    "Uttar_Pradesh" => array("London", "Manchester", "Liverpool"),
                    "Goa" => array("London", "Manchester", "Liverpool"),
                    "Gujarat" => array("London", "Manchester", "Liverpool"),
                    "Haryana" => array("London", "Manchester", "Liverpool"),
                    "Himachal_Pradesh" => array("London", "Manchester", "Liverpool"),
                    "Jammu_and_Kashmir" => array("London", "Manchester", "Liverpool"),
                    "Jharkhand" => array("London", "Manchester", "Liverpool"),
                    "West_Bengal" => array("London", "Manchester", "Liverpool"),
                    "Madhya_Pradesh" => array("London", "Manchester", "Liverpool"),
                    "Maharashtra" => array("London", "Manchester", "Liverpool"),
                    "Manipur" => array("London", "Manchester", "Liverpool"),
                    "Meghalaya" => array("London", "Manchester", "Liverpool"),
                    "Mizoram" => array("London", "Manchester", "Liverpool"),
                    "Nagaland" => array("London", "Manchester", "Liverpool"),
                    "Orissa" => array("London", "Manchester", "Liverpool"),
                    "Punjab" => array("London", "Manchester", "Liverpool"),
                    "Rajasthan" => array("London", "Manchester", "Liverpool"),
                    "Sikkim" => array("London", "Manchester", "Liverpool"),
                    "Tamil_Nadu" => array("London", "Manchester", "Liverpool"),
                    "Telangana" => array("London", "Manchester", "Liverpool"),
                    "Tripura" => array("London", "Manchester", "Liverpool"),
                    "Uttarakhand" => array("London", "Manchester", "Liverpool")
                );

    // Display city dropdown based on state name
    if($state !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
        foreach($stateArr[$state] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>