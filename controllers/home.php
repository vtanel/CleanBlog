<?

//data from database
$q = mysqli_query($db, "SELECT * FROM posts NATURAL JOIN author");
while ($row = mysqli_fetch_assoc($q)) {
        $posts[] = $row;
    }
