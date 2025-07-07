<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', '', 'ajax_demo');
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$stmt = mysqli_prepare($con, "SELECT * FROM user WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $q);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['FirstName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Age']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Hometown']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Job']) . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<?php
?>