<?php
session_start();
$authenticated = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;

if (!$authenticated) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        <?php include 'includes/sidebar.php'; ?>
        
        <main class="main-content">
            <div class="content-wrapper">
                <h1>Users Management</h1>
                
                <div class="table-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add User
                    </button>
                    <div class="search-box">
                        <input type="text" placeholder="Search users...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#002</td>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>Editor</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#003</td>
                                <td>Robert Johnson</td>
                                <td>robert@example.com</td>
                                <td>User</td>
                                <td><span class="status inactive">Inactive</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#004</td>
                                <td>Emily Davis</td>
                                <td>emily@example.com</td>
                                <td>User</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/script.js"></script>
</body>
</html>