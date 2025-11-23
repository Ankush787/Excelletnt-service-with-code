<?php
session_start();
require "db_connect.php"; 

// ---- AUTO LOGOUT AFTER 10 MIN OF INACTIVITY ----
$inactive_limit = 600; // 600 seconds = 10 minutes

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    // If last_activity is set and idle time > limit → logout
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactive_limit)) {
        session_unset();
        session_destroy();
        header("Location: admin_login.php?timeout=1");
        exit;
    }
    // Update last activity time
    $_SESSION['last_activity'] = time();
} else {
    // Not logged in
    header("Location: admin_login.php");
    exit;
}
// -----------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    * { box-sizing: border-box; font-family: Arial, sans-serif; }
    body { margin: 0; background: #f5f7fb; }

    .navbar {
        background: #1a73e8;
        color: white;
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    .navbar .welcome { font-size: 15px; }
    .logout-btn {
        background: #e53935;
        color: #fff;
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        transition: .2s;
        white-space: nowrap;
    }
    .logout-btn:hover { opacity: .9; }

    .container {
        max-width: 1100px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h2 {
        margin-top: 0;
        font-size: 20px;
    }

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    table { width: 100%; border-collapse: collapse; margin-top: 10px; min-width: 700px; }
    thead { background: #e2f1ff; }
    th, td { padding: 10px 12px; border-bottom: 1px solid #ddd; font-size: 14px; text-align: left; }
    tr:nth-child(even) { background: #fafafa; }
    tr:hover { background: #e2f1ff5e; }

    .delete-btn {
        background: #d32f2f;
        color: #fff;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 13px;
        text-decoration: none;
        transition: .2s;
        display: inline-block;
    }
    .delete-btn:hover {
        opacity: 0.85;
    }

    .section-title {
        margin-bottom: 5px;
    }
    .section-desc {
        color:#555; 
        font-size: 14px; 
        margin-bottom: 10px;
    }

    /* -------- RESPONSIVE STYLES -------- */
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .container {
            margin: 15px;
            padding: 15px;
        }

        h2 {
            font-size: 18px;
        }

        th, td {
            font-size: 13px;
            padding: 8px 10px;
        }
    }

    @media (max-width: 480px) {
        .navbar {
            align-items: center;
            text-align: center;
        }
        .navbar .welcome {
            width: 100%;
        }
    }
</style>
</head>
<body>

<div class="navbar">
    <div class="welcome">
        Welcome, <strong><?php echo htmlspecialchars($_SESSION['admin_id']); ?></strong>
    </div>
    <a href="admin_logout.php" class="logout-btn">Logout</a>
</div>

<div class="container">
    <!-- SECTION 1: requests table -->
    <h2 class="section-title">Quote Requests </h2>
    <p class="section-desc">This table shows data submitted from your request / quote forms.</p>

    <?php
        $sql1 = "SELECT * FROM requests ORDER BY id DESC";
        $result1 = $conn->query($sql1);
    ?>

    <?php if ($result1 && $result1->num_rows > 0): ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <?php
                        $fields1 = [];
                        while ($field = $result1->fetch_field()) {
                            $fields1[] = $field->name;
                            echo "<th>" . htmlspecialchars($field->name) . "</th>";
                        }
                        ?>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result1->data_seek(0);
                    while ($row = $result1->fetch_assoc()):
                    ?>
                        <tr>
                            <?php foreach ($fields1 as $colName): ?>
                                <td><?php echo htmlspecialchars($row[$colName]); ?></td>
                            <?php endforeach; ?>
                            <td>
                                <a href="delete_request.php?id=<?php echo $row['id']; ?>" 
                                   class="delete-btn"
                                   onclick="return confirm('Are you sure you want to delete this request record?');">
                                   Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p style="text-align:center; padding:15px; color:#777;">No records found in <b>requests</b> table.</p>
    <?php endif; ?>
</div>

<div class="container">
    <!-- SECTION 2: contact_messages table -->
    <h2 class="section-title">Contact Enquiries </h2>
    <p class="section-desc">These are messages submitted from your contact page form.</p>

    <?php
        $sql2 = "SELECT * FROM contact_messages ORDER BY id DESC";
        $result2 = $conn->query($sql2);
    ?>

    <?php if ($result2 && $result2->num_rows > 0): ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <?php
                        $fields2 = [];
                        while ($field = $result2->fetch_field()) {
                            $fields2[] = $field->name;
                            echo "<th>" . htmlspecialchars($field->name) . "</th>";
                        }
                        ?>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result2->data_seek(0);
                    while ($row = $result2->fetch_assoc()):
                    ?>
                        <tr>
                            <?php foreach ($fields2 as $colName): 
                                $value = $row[$colName];
                                $full   = htmlspecialchars($value);
                                $short  = strlen($value) > 60 ? htmlspecialchars(substr($value, 0, 60)) . '...' : $full;
                            ?>
                                <td title="<?php echo $full; ?>">
                                    <?php echo $short; ?>
                                </td>
                            <?php endforeach; ?>
                            <td>
                                <a href="delete_contact.php?id=<?php echo $row['id']; ?>" 
                                   class="delete-btn"
                                   onclick="return confirm('Are you sure you want to delete this contact message?');">
                                   Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p style="text-align:center; padding:15px; color:#777;">No records found in <b>contact_messages</b> table.</p>
    <?php endif; ?>

</div>

</body>
</html>
