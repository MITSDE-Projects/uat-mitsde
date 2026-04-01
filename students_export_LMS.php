<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['download'])){

    set_time_limit(0);
    ini_set('memory_limit', '512M');

    $apiKey = "88a81e2a029696860c4257bbfa4adb1b";
    $orgId  = "3";
    $baseUrl = "https://mitsde-api.edmingle.com/nuSource/api/v1/organization/students";

    $per_page = 100;
    $page = 1;

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=students_export_1.csv');

    $output = fopen('php://output', 'w');
    $headerWritten = false;

    do {

        $url = $baseUrl . "?organization_id=".$orgId."&search=&is_archived=1&page=".$page."&per_page=".$per_page;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "apikey: ".$apiKey,
            "ORGID: ".$orgId,
            "Accept: application/json"
        ));

        $response = curl_exec($ch);

        if(curl_errno($ch)){
            die("Curl Error: " . curl_error($ch));
        }

        curl_close($ch);

        $result = json_decode($response, true);

        if (!isset($result['students']) || empty($result['students'])) {
            break;
        }

        foreach ($result['students'] as $student) {

            if(!$headerWritten){
                $headers = array_keys($student);
                fputcsv($output, $headers);
                $headerWritten = true;
            }

            $row = array();

            foreach ($headers as $field) {
                if(isset($student[$field])){
                    if(is_array($student[$field])){
                        $row[] = json_encode($student[$field]);
                    } else {
                        $row[] = $student[$field];
                    }
                } else {
                    $row[] = '';
                }
            }

            fputcsv($output, $row);
        }

        $page++;

    } while (count($result['students']) == $per_page);

    fclose($output);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Export Students</title>
    <style>
        body { font-family: Arial; text-align:center; margin-top:100px; }
        .btn {
            background:#007bff;
            color:#fff;
            padding:15px 30px;
            border:none;
            font-size:18px;
            border-radius:6px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<h2>Download Complete Students Data</h2>

<form method="post">
    <button type="submit" name="download" class="btn">Download Full CSV</button>
</form>

</body>
</html>
