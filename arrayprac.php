<?php
//How to use array_change_key_case
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
$inputArray = array(
    "Name" => "John",
    "Age" => 30,
    "Country" => "USA"
);
print_r(array_change_key_case($inputArray, CASE_UPPER));
echo "<br>";
//How to use array_chunk
print_r(array_chunk($cars, 2));
echo "<br>";
//How to use array_column
$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  print_r(array_column($a, 'last_name'))
  echo "<br>";
//How to use 
?>