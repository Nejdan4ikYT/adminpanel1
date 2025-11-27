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
    <title>Products - Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        <?php include 'includes/sidebar.php'; ?>
        
        <main class="main-content">
            <div class="content-wrapper">
                <h1>Products Management</h1>
                
                <div class="table-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Product
                    </button>
                    <div class="search-box">
                        <input type="text" placeholder="Search products...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#P001</td>
                                <td>
                                    <div class="product-info">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="product-img">
                                        <span>Wireless Headphones</span>
                                    </div>
                                </td>
                                <td>Electronics</td>
                                <td>$99.99</td>
                                <td>50</td>
                                <td><span class="status active">In Stock</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#P002</td>
                                <td>
                                    <div class="product-info">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="product-img">
                                        <span>Smart Watch</span>
                                    </div>
                                </td>
                                <td>Wearables</td>
                                <td>$199.99</td>
                                <td>25</td>
                                <td><span class="status active">In Stock</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#P003</td>
                                <td>
                                    <div class="product-info">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="product-img">
                                        <span>Bluetooth Speaker</span>
                                    </div>
                                </td>
                                <td>Audio</td>
                                <td>$79.99</td>
                                <td>0</td>
                                <td><span class="status inactive">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#P004</td>
                                <td>
                                    <div class="product-info">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="product-img">
                                        <span>Smartphone Case</span>
                                    </div>
                                </td>
                                <td>Accessories</td>
                                <td>$24.99</td>
                                <td>100</td>
                                <td><span class="status active">In Stock</span></td>
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