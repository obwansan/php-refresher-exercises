<?php

# NESTED TERNARY
$score = 9;
$age =15;

echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'average' : 'exceptional') : ($age > 10 ? 'horrible' : 'average'));

