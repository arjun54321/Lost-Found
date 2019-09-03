<?php
error_reporting(0); 
require 'vendor/autoload.php';
$args = [
'credentials'=>[
'key'=>'AKIAJW5CYIGWNM6BR5GA',
'secret'=>'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',
],
'region' => 'us-east-1',
'version' => 'latest'
];
$client = new Aws\Rekognition\RekognitionClient($args);
$result=$client->compareFaces([
'SimilarityThreshold'=>70,
'SourceImage'=>[
'Bytes'=>file_get_contents("IMAGES/persons/1.jpg"),
],
'TargetImage'=>[
'Bytes'=>file_get_contents("IMAGES/persons/5.jpg"),
],
]);
print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Tags</title>
</head>
<body>
<br>
<?php
echo $result['FaceMatches'][0]['Similarity'];
?>
</body>
</html>
