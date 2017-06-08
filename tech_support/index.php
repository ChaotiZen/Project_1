<?php
/**
 * File name: index.php
 * Project : project_start
 * User: ChaotiZen | Trendon Ellis
 * Date: 6/8/2017
 * Using PhpStorm.
 * Notes:
 */
include 'view/header.php'; ?>
<main>
    <nav>
    <h2>Administrators</h2>
    <ul>
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="under_construction.php">Manage Technicians</a></li>
        <li><a href="customer_manager/index.php">Manage Customers</a></li>
        <li><a href="under_construction.php">Create Incident</a></li>
        <li><a href="under_construction.php">Assign Incident</a></li>
        <li><a href="under_construction.php">Display Incidents</a></li>
    </ul>

    <h2>Technicians</h2>    
    <ul>
        <li><a href="under_construction.php">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul>
        <li><a href="under_construction.php">Register Product</a></li>
    </ul>
    </nav>
</main>
<?php include 'view/footer.php'; ?>