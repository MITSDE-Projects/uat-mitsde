<?php
include("admin/include/configpdo.php");

// Insert or update
if (isset($_POST['save'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($id) {

        $stmt = $conn->prepare("UPDATE tbl_counselor SET full_name=?, email=? WHERE id=?");
        $stmt->execute(array($name, $email, $id));

        header("Location: add_counselor_for_payment.php?msg=Updated successfully");

    } else {

        $stmt = $conn->prepare("INSERT INTO tbl_counselor (full_name, email, active) VALUES (?, ?, 1)");
        $stmt->execute(array($name, $email));

        header("Location: add_counselor_for_payment.php?msg=Added successfully");
    }

    exit;
}


// Edit
$id = "";
$name = "";
$email = "";

if (isset($_GET['edit'])) {

    $stmt = $conn->prepare("SELECT * FROM tbl_counselor WHERE id=?");
    $stmt->execute(array(intval($_GET['edit'])));

    if ($stmt->rowCount()) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $id = $row['id'];
        $name = $row['full_name'];
        $email = $row['email'];
    }
}


// Search
$search = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search)) {

    $stmt = $conn->prepare("SELECT * FROM tbl_counselor WHERE full_name LIKE ? OR email LIKE ?");
    $stmt->execute(array("%$search%", "%$search%"));

} else {

    $stmt = $conn->prepare("SELECT * FROM tbl_counselor");
    $stmt->execute();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counselor Payment List</title>
    <style>
        form, table {
            margin: 20px auto;
        }

        input[type=text], input[type=email] {
            padding: 5px;
            width: 200px;
        }

        button {
            padding: 5px 10px;
        }

        .message-box {
            margin: 20px auto;
            padding: 10px;
            width: 80%;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            background-color: #ccc;
            border-radius: 24px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: 0.4s;
        }

        .slider:before {
            content: "";
            position: absolute;
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        .toggle-switch input:checked + .slider {
            background-color: #4CAF50;
        }

        .toggle-switch input:checked + .slider:before {
            transform: translateX(26px);
        }

        .status-label {
            font-weight: bold;
            margin-left: 8px;
        }
    </style>
</head>
<body>

<?php if (isset($_GET['msg'])): ?>
    <div class="message-box">
        <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
<?php endif; ?>

<!-- Counselor Form -->
<form method="post" style="text-align:center;">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="name" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>" required>
    <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
    <button type="submit" name="save"><?php echo $id ? "Update" : "Add"; ?></button>
</form>

<!-- Search Bar -->
<form method="get" style="text-align:center; margin-bottom: 20px;">
    <input type="text" name="search" placeholder="Search by Name or Email"
           value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
           style="padding:5px; width:300px;">
    <button type="submit" style="padding:5px 10px;">Search</button>
    <a href="add_counselor_for_payment.php" style="margin-left:10px;">Clear</a>
</form>

<!-- Data Table -->
<table border="1" cellpadding="5" cellspacing="0">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Status</th>
<th>Actions</th>
</tr>

<?php foreach ($result as $row): ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo htmlspecialchars($row['full_name']); ?></td>
<td><?php echo htmlspecialchars($row['email']); ?></td>

<td>

<label class="toggle-switch">
<input type="checkbox"
onchange="toggleStatus(<?php echo $row['id']; ?>, this)"
<?php echo $row['active'] == 1 ? 'checked' : ''; ?>>
<span class="slider"></span>
</label>

<span class="status-label" id="status-<?php echo $row['id']; ?>">
<?php echo $row['active'] == 1 ? 'Active' : 'Inactive'; ?>
</span>

</td>

<td>
<a href="?edit=<?php echo $row['id']; ?>">Edit</a>
</td>

</tr>

<?php endforeach; ?>

</table>


<script>

function toggleStatus(id, checkbox) {

const status = checkbox.checked ? 1 : 0;

const xhr = new XMLHttpRequest();

xhr.open("POST", "toggle_status.php", true);

xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onload = function () {

if (xhr.status === 200) {

const label = document.getElementById("status-" + id);

label.innerText = status === 1 ? "Active" : "Inactive";

} else {

alert("Failed to update status.");

checkbox.checked = !checkbox.checked;

}

};

xhr.send("id=" + id + "&status=" + status);

}

</script>

</body>
</html>