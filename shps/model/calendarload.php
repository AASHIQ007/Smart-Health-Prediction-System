<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=idslbdco_better_business', 'idslbdco_better_business', 'O~r?)])2]RFo');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>