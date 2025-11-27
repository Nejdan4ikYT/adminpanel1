<header class="header">
    <div class="header-content">
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>
        
        <div class="header-left">
            <h1>Admin Panel</h1>
        </div>
        
        <div class="header-right">
            <div class="user-info">
                <i class="fas fa-user-circle"></i>
                <span><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?></span>
                <i class="fas fa-chevron-down"></i>
            </div>
            
            <div class="header-actions">
                <div class="notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
                
                <a href="logout.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
    </div>
</header>