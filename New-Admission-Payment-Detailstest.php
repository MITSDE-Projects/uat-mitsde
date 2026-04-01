<?php
// Database Configuration
$host = 'localhost';
$username = 'mitsde_onlinepay';
$password = 'jNq%,6!)0RmK';
$database = 'mitsde_onlinepayment';

// Create Connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pagination & Search Settings
$results_per_page = isset($_GET['show']) ? (int) $_GET['show'] : 10;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$search = isset($_GET['search']) ? trim($conn->real_escape_string($_GET['search'])) : '';
$sort = isset($_GET['sort']) ? $conn->real_escape_string($_GET['sort']) : 'othr_id';
$order = isset($_GET['order']) ? $conn->real_escape_string($_GET['order']) : 'DESC';

// Total Records
$total_query = "SELECT COUNT(*) AS count FROM New_erp_student_admission_transaction WHERE email LIKE '%$search%' OR leadID LIKE '%$search%'";
$total_result = $conn->query($total_query);
$total_records = $total_result->fetch_assoc()['count'];
$total_pages = ceil($total_records / $results_per_page);

// Offset Calculation
$start = ($page - 1) * $results_per_page;

// Data Fetch Query
$query = "SELECT * FROM New_erp_student_admission_transaction WHERE email LIKE '%$search%' OR leadID LIKE '%$search%' ORDER BY $sort $order LIMIT $start, $results_per_page";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Admission Payment Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .table-container {
            position: relative;
        }

        .sortable {
            cursor: pointer;
        }

        .sortable:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row mb-3">
            <h1 class="text-center mb-3">New Admission Payment Details</h1>
            <div class="col-md-6">
                <form method="GET" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search by Email / LeadID"
                        value="<?php echo htmlspecialchars($search); ?>">

                    <select name="show" class="form-select w-auto me-2" onchange="this.form.submit()">
                        <option value="10" <?php echo ($results_per_page == 10) ? 'selected' : ''; ?>>10</option>
                        <option value="25" <?php echo ($results_per_page == 25) ? 'selected' : ''; ?>>25</option>
                        <option value="50" <?php echo ($results_per_page == 50) ? 'selected' : ''; ?>>50</option>
                        <option value="100" <?php echo ($results_per_page == 100) ? 'selected' : ''; ?>>100</option>
                    </select>

                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12 table-container">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Data Table</span>
                        <span class="text-muted">Total Records: <?php echo $total_records; ?></span>
                        <a href="download-csv-for-new-erp-admission-payment.php" class="btn btn-primary">
                            <i class="bi bi-download"></i> Download All
                        </a>
                    </div>
                    <div class="card-body overflow-auto text-nowrap p-0">
                        <table class="table table-striped table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="sortable" onclick="sortTable('leadID')">ID <i
                                            class="bi bi-arrow-down-up"></i></th>
                                    <th class="sortable" onclick="sortTable('DT')">Payment Date <i
                                            class="bi bi-arrow-down-up"></i></th>
                                    <th class="sortable" onclick="sortTable('name')">Name <i
                                            class="bi bi-arrow-down-up"></i></th>
                                    <th class="sortable" onclick="sortTable('email')">Email <i
                                            class="bi bi-arrow-down-up"></i></th>
                                    <th>Password</th>
                                    <th>Phone</th>
                                    <th>Course Name</th>
                                    <th>Specialization</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>PayU_ID</th>
                                    <th>Payment Response</th>
                                    <th>Lead Push Response</th>
                                    <th>Counselor Email</th>
                                    <th>Action (Push)</th>
                                    <th>Action (Pay)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['leadID']); ?></td>
                                        <td><?php echo htmlspecialchars($row['DT']); ?></td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['password']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td><?php echo htmlspecialchars($row['CourseName']); ?></td>
                                        <td><?php echo htmlspecialchars($row['SpecializationID']); ?></td>
                                        <td><?php echo htmlspecialchars($row['amount']); ?></td>
                                        <td><?php echo htmlspecialchars($row['FeesType']); ?></td>
                                        <td><?php echo htmlspecialchars($row['PayU_ID']); ?></td>
                                        <td><?php echo htmlspecialchars($row['response']); ?></td>
                                        <td><?php echo htmlspecialchars($row['response2']); ?></td>
                                        <td><?php echo htmlspecialchars($row['counseller_email']); ?></td>

                                        <td>
                                            <?php
                                            $response = $row['response2'];

                                            if (
                                                $response !== 'Lead saved successfully and login details sent on your registered email id.' &&
                                                strpos($response, 'already exists.') === false &&
                                                !is_null($row['response2'])
                                            ): ?>
                                                <a href="leadupdatedetailapi.php?PayU_ID=<?php echo htmlspecialchars($row['PayU_ID']); ?>"
                                                    onclick="return confirm('Are you sure you want to push the lead?');">
                                                    Push Lead
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $response = $row['response2'];

                                            if (
                                                ($response === 'Lead saved successfully and login details sent on your registered email id.' || strpos($response, 'already exists.') !== false) &&
                                                $row['response'] !== 'Receipt saved successfully.' &&
                                                $row['response'] !== 'receipt received' &&
                                                !is_null($row['response'])
                                            ):
                                                ?>
                                                <a href="paymentupdatedetailapi.php?PayU_ID=<?php echo $row['PayU_ID']; ?>"
                                                    onclick="return confirm('Are you sure you want to push the payment?');">
                                                    Push Payment
                                                </a>
                                                <?php
                                            endif;
                                            ?>
                                        </td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            Showing
                            <?php echo ($start + 1) . ' to ' . min($start + $results_per_page, $total_records) . ' of ' . $total_records; ?>
                            entries
                        </div>
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link"
                                        href="?page=<?php echo max(1, $page - 1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                                        Previous
                                    </a>
                                </li>
                                <?php
                                $start_page = max(1, $page - 2);
                                $end_page = min($total_pages, $page + 2);

                                for ($i = $start_page; $i <= $end_page; $i++): ?>
                                    <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                                        <a class="page-link"
                                            href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                    <a class="page-link"
                                        href="?page=<?php echo min($total_pages, $page + 1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function sortTable(column) {
            const currentUrl = new URL(window.location.href);
            const currentSort = currentUrl.searchParams.get('sort');
            const currentOrder = currentUrl.searchParams.get('order');

            let newOrder = 'ASC';
            if (currentSort === column) {
                newOrder = (currentOrder === 'ASC') ? 'DESC' : 'ASC';
            }

            currentUrl.searchParams.set('sort', column);
            currentUrl.searchParams.set('order', newOrder);
            window.location.href = currentUrl.toString();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>