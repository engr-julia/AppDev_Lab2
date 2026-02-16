echo '<h3>Job Listings</h3>';

$listings = [];

// 1. Create multi-dimensional associative array
$listings[] = [
    'id' => 1,
    'job_title' => 'PHP Developer',
    'company' => 'IBM',
    'email' => 'john@ibm.com',
    'contact_no' => '09168457456',
    'skills' => ['PHP', 'MySQL', 'JavaScript']
];

$listings[] = [
    'id' => 2,
    'job_title' => 'Web Designer',
    'company' => 'AWS',
    'email' => 'jane@aws.com',
    'contact_no' => '09175597456',
    'skills' => ['PhotoShop', 'Illustrator', 'CSS']
];

$listings[] = [
    'id' => 3,
    'job_title' => 'Network Admin',
    'company' => 'CISCO',
    'email' => 'James@cisco.com',
    'contact_no' => '09202224575',
    'skills' => ['Database', 'CyberSecurity', 'Networking']
];

// 2. Add new record using array_push
array_push($listings, [
    'id' => 4,
    'job_title' => 'Graphic Artist',
    'company' => 'ADOBE',
    'email' => 'princess@adobe.com',
    'contact_no' => '09208456544',
    'skills' => ['Photoshop', 'Bootstrap', 'Flutter']
]);

// Print full array
print_r($listings);

// 3. Print job_title, company, email of second listing
echo "<br>";
echo $listings[1]['job_title'] . " " .
     $listings[1]['company'] . " " .
     $listings[1]['email'];

echo "<br>";

// 4. Print first and third skill of third listing
echo $listings[2]['skills'][0] . " and " .
     $listings[2]['skills'][2];
