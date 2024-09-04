<?php
//My Information
$fullname = "Junly Love L. Arcenas";
$address = "Purok Doña Luz, Señor, Sinacaban  Misamis Occidental ";
$contactNumber = "09317377622";
$hobbies = ["gardening", "cooking", "reading"];
$socialMedia = [
    "Facebook" => "Junly Love Arcenas",
    "Instagram" => "junly_arcenas",
    "TikTok" => "jny_lab",
];

// Show my information
echo "<h3> My Information </h3><br>";
echo "________________________________________________________<br><br>";
echo "<strong>Fullname: </strong>" . $fullname . "<br> \n";
echo "<strong>Address: </strong>" . $address . "<br> \n";
echo "<strong>Contact Number: </strong>" . $contactNumber . "<br><br>\n\n";

// Show my hobbies
echo "<strong>My hobbies are: </strong>";
foreach ($hobbies as $hobby) {
    echo "" . $hobby . "\n";
}
echo "<br><br>\n";

echo "Social Media Accounts: ";
foreach ($socialMedia as $platform => $link) {
    echo "<b><br>" . $platform . ":</b> " . $link . "\n";
}
?>