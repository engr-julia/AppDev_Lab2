<?php
echo '<h3>Job Listings</h3>';

// 1. Create multi-dimensional array of associative arrays
$listings = [
    [
        'id' => 1,
        'job_title' => 'PHP Developer',
        'company' => 'IBM',
        'email' => 'john@ibm.com',
        'contact_no' => '09168457456',
        'skills' => ['PHP', 'MySQL', 'JavaScript']
    ],
    [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company' => 'AWS',
        'email' => 'jane@aws.com',
        'contact_no' => '09175597456',
        'skills' => ['PhotoShop', 'Illustrator', 'CSS']
    ],
    [
        'id' => 3,
        'job_title' => 'Network Admin',
        'company' => 'CISCO',
        'email' => 'James@cisco.com',
        'contact_no' => '09202224575',
        'skills' => ['Database', 'CyberSecurity', 'Networking']
    ]
];

// 2. Create a new record using array_push()
array_push($listings, [
    'id' => 4,
    'job_title' => 'Graphic Artist',
    'company' => 'ADOBE',
    'email' => 'princess@adobe.com',
    'contact_no' => '09208456544',
    'skills' => ['Photoshop', 'Bootstrap', 'Flutter']
]);

// Display the array as requested in the sample output
echo '<pre>';
print_r($listings);
echo '</pre>';

// 3. Print job_title, company and email of the second listing (index 1)
echo $listings[1]['job_title'] . " " . $listings[1]['company'] . " " . $listings[1]['email'] . "<br>";

// 4. Print first and third skill of the third listing (index 2)
echo $listings[2]['skills'][0] . " and " . $listings[2]['skills'][2];
?>