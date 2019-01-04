<?php
require_once "service.class.php";

$startTime = microtime(true);

// Create a Game Center Service Instance
$service = new GameCPService([
    // Game Center server basic URL
    "baseUri" => "https://gss-cn.game.hicloud.com/gameservice/",
    // appId of the game
//    "appId" => "10000",
    "appId" => "100526975",
    // cpId of the game
//    "cpId" => "1000",
    "cpId" => "201d0780b6ac23c1682c352b5ba0e804",
    // Signature private key. Note that the private key statement must be added before and after the private key.
    "privateKey" => "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0gEAAoIBAQCHJJ1kxhOXDh4M9QgXj2sXahxG7clGnWDp5YW9f/+Xyf2RzZma1JB76KqXh2ZNyJfpG/4tsUqm1KBQ3w1glvsvUsCcuiAhVmT3CkN7+M/S+ttcXIlNfT+x2UH4h50d1IPLr7qSjgiBkPcW2WFFXxRfaUqSg7xhLp+9ydXJJFQbvTBKCpr2HFRl4DEuF5SxganG8SQau/swCf2l3lHnrIm4ER5B+O4RNqYr/AMo6tge1LXaYp9ss8TM3VmTTGNHGcIaPvSIeBsT4XolhkZ0RyyT++m1ABSKn1kA8Rv5vjzj5WbHDi8LefreQ3gcBax26h/6tbvgTgMwIDzokRrUOM39AgMBAAECggEAcpm7GtTZkfP3ybcUKJ6HCvEBj6hfUZFtuIrZccwUW4x/id/WzTRKXbj8yMiaGYXsRFJnpim9C2ItnMa5mloOIaBEE+PGEV8o+VDrzzo8SkZONLGIAX0fwVpiFjYyJzSqmtSnG1Z0oiLjVa37TY+GQC6SfVJXMfYOoiuBLjOvW2FB8AJQX6G8dU6S4WZc1RdJ9ZyyQgcfKtt/kvja/JroMkOx2SQ13Yd7BU19xFVJCPiEPF9K+CtTIYO/hkHdUwh8+p74QaEHemJ1HfE2bFtZMEplBoSa06zwzUVx0WV1Y3j/qg7rxrDNl6ITmWTyQEn3bdJn0XPrvcRmv4sgce1K4QKBgQDWNyEUlg3yMKJyNmnK8oLUggXNkBC7ayRkN67MsUdS9gsFBhlOZeocrzb+T9GZUpVfDGmLO5708P8eZbRDDNRSVMyr0eV89sPXx579kyV9/nMzA65LasldlNC15gyr61/ldp6Uleb3bUEeYe7AkRnzSrJfLOTLUoTi7huVY59vKQKBgQChgP/FoWD9U/Ahz72IGS3CFFeHZMjFQfryrVBu5aL8iXeTj9ansKeUbIecYW3UqS+HbO6vbx+VvHeG5wlSEbernMNWrny5FQzeichKjbOkXmp50dQVvuebyvPYaIAkB7BFLEXqk0rBn5TPPQFS4bLcXe/xeCkF0Gd+uBrI4IpGtQKBgG1uFjkU+qTZUXL09xBU2J7EmUBMsy966UlE5MfuXBg2VqTHW9Af4furSnWZwuIHPQUkKxqUZ3yLTFhz7iU+fYxdg3zWqdwvlxY5BLBXJhT6ElFiNPyT3bAvoHr7vUdp40AuW45eEXIeXuCteLDorxAI/Zv/LBXt3rKqnm6vSLgZAoGASa7dAoGaCnndOM/anNk/8yfstyzYHIb5wvYnmDDUp3rgP0aEnIUQL7tEM6iPv1JhCNw+GXQNaPdPYRDPQ84pifY/eLCq3pYoBO+/naQAraEV2vZMWI98g6uYjMdAjy+i0CxeyaLhnGz+K36dt/6Y58lDy1sS/EAUt8+vCK7I53ECgYEAu/Sup6U7CPpNarNbfgNJGpNtijMWSwuM5cwB/7T1uhiA9pR9pxkjOA2RxopokqmjfhKSNi6MLSfkxayK/x/33VqJotqMylQns2G9ZlAJ+zUkB/Ihe1eSkP14e3jiFDaYuXwdW8JUUHVXv+dagCdu/aTZdrJg9UmrnYY6qx9F7gc=\n-----END PRIVATE KEY-----\n",
    // Signature public key. Note that the public key statement must be added before and after the public key.
    "publicKey" => "-----BEGIN PUBLIC KEY-----\nMIGfMAiQKBgQCLyuTXVJ3mK8/eh5r2OcGknMvBimaJJE7ocuyd6bVjB/NQaSL1EdBgmdPVt4TENSYky+wt3W8C5nIIp5rB4F/eOgs+V4j0AmgVzpvrmdAVXVhuVLfhAtFCWgPvZ4KsDKFOw1VbWUWM6TetW57KpQ+xb1lLDFSI8PZFxvP1KpDP9QIDAQAB\n-----END PUBLIC KEY-----\n"
]);

// Initiate a request for verifying player signature
$request = [
    // Player ID obtained from playerId in the GameUserData object returned by the client login interface
    "playerId" => "100",
    // Player level obtained from playerLevel in the GameUserData object returned by the client login interface
    "playerLevel" => "10",
    // Time stamp obtained from ts in the GameUserData object returned by the client login interface
//    "ts" => "1546081722267",
    "ts" => time() * 1000,
    // Request parameter signature value obtained from gameAuthSign in the GameUserData object returned by the client login interface
    "playerSSign" => "VUOoWexHeQFHyWb6IvPutKO0Z/wSVU3SDoK7/vnaLsYte6cYJu/RVWxoGh8lJfHuMoMucKutoNEXnAnPgTG5cfXf79DCtTnhMJ3lHBjaYFD03RWb2XBRKlnF7m455DeU2bvPZOsi7BhTDNPD0bTxY7PWlASLCSX7C7WqHN4/AWxDiU+ki2pPBstuSDecoUQQATBU35bQE2V7DtOsoGAhseuKXZe7yExMqszyZHLKaaqsbqq1rCua6FvJtwlwO82eY7N5kyW29r3MQ/uW1XGh4aPDods9UfD90BSLoPPmLjV9tREX/HFIdxkZ3FVWbkcWR4YQ=="
];

$isValid = false;
try {
    $isValid = $service->checkPlayerSign($request);
} catch (Exception $e) {
    echo "Call checkPlayerSign failed. " . $e->getMessage();
    return;
}
echo "<br> Check player sign result: " . json_encode($isValid);
$timeDiff = (microtime(true) - $startTime) * 1000;

echo "<br> timeDiff: " . $timeDiff;
