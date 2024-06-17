php
<?php
$shortenedURL = $_GET['short'];
$redirects = [
    'abc123' => 'https://www.example.com/page1',
    'def456' => 'https://www.example.com/page2',
    'ghi789' => 'https://www.example.com/page3'
];

if (array_key_exists($shortenedURL, $redirects)) {
    $redirectURL = $redirects[$shortenedURL];
    header("Location: $redirectURL");
    exit();
} else {
    echo "URL not found";
}
?>
