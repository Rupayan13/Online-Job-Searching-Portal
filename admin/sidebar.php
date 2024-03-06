<div class="sidebar">
    <div class="actions">
        <div class="menu-item"><a href="./index.php">Dashboard</a></div>
        <div class="menu-item"><a href="./user.php">Users</a></div>
        <div class="menu-item"><a href="./add-job.php">Add Job</a></div>
        <div class="menu-item"><a href="./view-blog.php">View Blog</a></div>
    </div>
    <div class="dropdown">
            <div class="menu-item"><i class="fa-regular fa-user"></i> <?php echo $_SESSION['username'] ?> <i class="fa-solid fa-arrow-up"></i></div>
            <div class="dropdown-content">
                <a href="./admin-logout.php">Logout</a>
            </div>
        </div> 
</div>
