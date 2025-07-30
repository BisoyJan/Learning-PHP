<?php

$name = "John";

echo 'Hello, $name!\n'; //Single quotes do not parse variables meaning its faster
echo "Hello, $name!\n"; //Double quotes parse variables meaning its looks for variable $name data.

$heredoc = <<<EOD
Multi-line string
with variable: $name
EOD;

$nowdoc = <<<'EOD'
Multi-line string
with variable: $name
EOD;

echo $heredoc;
echo "\n";
echo $nowdoc;
