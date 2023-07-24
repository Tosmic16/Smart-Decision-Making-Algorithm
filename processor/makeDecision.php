<?php
// $post = $_POST;
$post = [
    "Hi" => [
        "jink" => "2",
        "live" => "1"
    ],
    "ki" => [
        "jink" => "1",
        "live" => "1"
    ]
];

// $multiplier = $_SESSION['criterias'];
$multiplier = ["jink" => 0.5, "live" => 0.5];

$result = [];

foreach ($post as $key1 => $innerArray) {
    $temp = [];
    foreach ($innerArray as $key2 => $value) {
        if (isset($multiplier[$key2])) {
            $temp[$key2] = $value * $multiplier[$key2];
        } else {
           
            $temp[$key2] = 0;
        }
    }
    $result[$key1] = $temp;
}



$resultArray = array();

foreach ($result as $key => $innerArray) {
    $total = 0;
    foreach ($innerArray as $value) {
        if (is_numeric($value)) {
            $total += $value;
        }
    }
    $resultArray[$key] =  $total;
}
asort($resultArray);
$highestCandidate = array_keys($resultArray, max($resultArray))[0];
$highestScore = max($resultArray);

if($resultArray):
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Alternative</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-md mt-10">
        <h1 class="text-2xl font-bold mb-4">Best Alternative</h1>
       
        <p class="mb-4">The highest score is <?php echo $highestScore; ?> obtained by <?php echo $highestCandidate; ?>.</p>
        <h2 class="text-xl font-bold mb-2">Alternative Points:</h2>
        <ul>
            <?php
            // Display the candidate scores
            foreach ($resultArray as $candidate => $score) {
                echo "<li>{$candidate}: {$score}</li>";
            }
            ?>
        </ul>
        <p class="mt-4 text-gray-500">Note: These scores are for illustrative purposes only.</p>
    </div>
</body>

</html>
<?php
        endif;
?>
