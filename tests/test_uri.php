<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Src\Http\Uri;

$uriString = 'https://username:password@www.example.com:8080/path/to/resource?foo=bar&baz=qux#section1';
$uri = new \Src\Http\Uri($uriString);

echo 'Scheme: ' . $uri->getScheme() . PHP_EOL;
echo 'Authority: ' . $uri->getAuthority() . PHP_EOL;
echo 'UserInfo: ' . $uri->getUserInfo() . PHP_EOL;
echo 'Host: ' . $uri->getHost() . PHP_EOL;
echo 'Port: ' . $uri->getPort() . PHP_EOL;
echo 'Path: ' . $uri->getPath() . PHP_EOL;
echo 'Query: ' . $uri->getQuery() . PHP_EOL;
echo 'Fragment: ' . $uri->getFragment() . PHP_EOL;
?>
