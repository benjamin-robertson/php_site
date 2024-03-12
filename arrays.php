<?php
// Build the crew
$mission = [
    'STS395' => [
        ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'],
        ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'],
        ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist']
        // How would you add a new crew member?
    ]
];
// How would you access the Computer Specialist's first name?
echo $mission['STS395'][2]['specialty'];