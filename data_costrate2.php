<?php
// Include database connection
include 'koneksi.php';

// Fetch data directly from database instead of file
$query = "SELECT TerritoryID, TerritoryName, CountryRegionCode, Availability 
          FROM dimsalesterritory 
          ORDER BY CountryRegionCode DESC";
$result = mysqli_query($conn, $query);

$locations = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $locations[] = [
            'TerritoryID' => $row['TerritoryID'],
            'TerritoryName' => $row['TerritoryName'],
            'CountryRegionCode' => $row['CountryRegionCode'],
            'Availability' => $row['Availability']
        ];
    }
}

// Convert locations to JSON for JavaScript use
$locations_json = json_encode($locations);
?>