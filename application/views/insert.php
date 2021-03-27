<html>
<head>
<title>Display records</title>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>id</th>
    <th>First_name</th>
    <th>Last_name</th>

  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->PERSON_ID."</td>";
  echo "<td>".$row->FIRST_NAME."</td>";
  echo "<td>".$row->LAST_NAME."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>