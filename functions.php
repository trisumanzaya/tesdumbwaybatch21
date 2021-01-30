<?php 


// koneksi ke database
$conn = mysqli_connect("localhost","root", "","Schooldata" );

// ambildata
function query ($query) {
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] =$row;
	}
	return $rows;

}


function insertSchool($data)
{
	global $conn;
	$query = "Insert INTO school_tb
          VALUES
           ('','{$data['NPSN']}', '{$data['name_school']}' , '{$data['address']}' , '{$data['logo_school']}', '{$data['school_level']}', '{$data['status_school']}', 1)
  ";

	mysqli_query($conn, $query);
}




 ?>