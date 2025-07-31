<?php

$mb_string = "Hello, 世界"; // Multibyte string with both ASCII and non-ASCII characters
var_dump(mb_strlen($mb_string));

$url = "https://example.com/path/to/resource?query=string#fragment";
var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));

$html = "<p>This is a <strong>test</strong> string.</p>";

var_dump(htmlentities($html));

$encoded = base64_encode("Hello, World!");

var_dump(base64_decode($encoded));
