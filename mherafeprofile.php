<?php
// User information
$userInfo = array(
    'fullname' => 'Mherafe P. Cabug',
    'address' => 'Purok-7 Sibaroc, Jimenez Misamis Occidental',
    'contact_number' => '09556250395',
    'hobbies' => array('Reading', 'Dancing', 'Singing'),
    'social_media' => array(
        'facebook' => 'https://www.facebook.com/mherafe.cabug?mibextid=ZbWKwL',
        'instagram' => 'https://www.instagram.com/myngkaay?igsh=MW5rYnZzMWFwajQ3Nw=='
        
    )
);

// Display user information
echo "Full Name: " . $userInfo['fullname'] . "<br>\n";
echo "Address: " . $userInfo['address'] . "<br>\n";
echo "Contact Number: " . $userInfo['contact_number'] . "<br>\n";
echo "Hobbies: " . implode(', ', $userInfo['hobbies']) . "<br>\n";
echo "_____________________________________________________<br><br>\n";
echo "Social Media Links:<br>\n";
foreach ($userInfo['social_media'] as $platform => $link) {
    echo ucfirst($platform) . ": <br><br>" . $link . "\n";
}
?>