<?php

include("admin/include/configpdo.php");

$draw   = isset($_POST['draw']) ? intval($_POST['draw']) : 0;
$start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
$length = isset($_POST['length']) ? intval($_POST['length']) : 10;

$search = '';
if(isset($_POST['search']['value'])){
    $search = $_POST['search']['value'];
}

$columns = [
"QC_ID",
"FirstName",
"EmailID",
"MobileNo",
"SourcePath",
"PageName",
"DateTime",
"device",
"address",
"district",
"city",
"state",
"country",
"longitude",
"latitude"
];

$orderColumn = "QC_ID";
$orderDir = "DESC";

if(isset($_POST['order'][0]['column'])){
    $orderColumn = $columns[$_POST['order'][0]['column']];
}

if(isset($_POST['order'][0]['dir'])){
    $orderDir = $_POST['order'][0]['dir'];
}


$where = "";
$params = [];

if($search != ""){

$where = "WHERE FirstName LIKE ? 
OR EmailID LIKE ? 
OR MobileNo LIKE ?";

$params[] = "%$search%";
$params[] = "%$search%";
$params[] = "%$search%";

}


# Total Records

$totalRecords = $conn->query("SELECT COUNT(*) FROM quickcontact")->fetchColumn();


# Filtered Records

if($search != ""){

$stmt = $conn->prepare("SELECT COUNT(*) FROM quickcontact $where");
$stmt->execute($params);

$filteredRecords = $stmt->fetchColumn();

}else{

$filteredRecords = $totalRecords;

}



# Main Data Query

$sql = "SELECT * FROM quickcontact $where
ORDER BY $orderColumn $orderDir
LIMIT $start, $length";


$stmt = $conn->prepare($sql);


# Bind values manually (important for LIMIT)

$bindIndex = 1;

foreach($params as $param){

if(is_int($param)){

$stmt->bindValue($bindIndex,$param,conn::PARAM_INT);

}else{

$stmt->bindValue($bindIndex,$param,conn::PARAM_STR);

}

$bindIndex++;

}


$stmt->execute();


$data = [];

$i = $start + 1;

while($row = $stmt->fetch()){

$row['srno'] = $i++;

$data[] = $row;

}

header('Content-Type: application/json');
echo json_encode([

"draw" => intval($draw),
"recordsTotal" => $totalRecords,
"recordsFiltered" => $filteredRecords,
"data" => $data

]);

?>