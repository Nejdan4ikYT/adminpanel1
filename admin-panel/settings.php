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
    <title>Settings - Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        <?php include 'includes/sidebar.php'; ?>
        
        <main class="main-content">
            <div class="content-wrapper">
                <h1>Settings</h1>
                
                <div class="settings-container">
                    <div class="settings-form">
                        <div class="form-section">
                            <h3>General Settings</h3>
                            
                            <div class="form-group">
                                <label for="siteName">Site Name</label>
                                <input type="text" id="siteName" name="siteName" value="My Admin Panel">
                            </div>
                            
                            <div class="form-group">
                                <label for="siteDescription">Site Description</label>
                                <textarea id="siteDescription" name="siteDescription" rows="3">A beautiful admin panel for managing your application.</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="timezone">Timezone</label>
                                <select id="timezone" name="timezone">
                                    <option value="UTC">UTC</option>
                                    <option value="EST">EST</option>
                                    <option value="PST">PST</option>
                                    <option value="GMT">GMT</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Security Settings</h3>
                            
                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="twoFactor" checked>
                                    <span class="checkmark"></span>
                                    Enable Two-Factor Authentication
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="sessionTimeout">
                                    <span class="checkmark"></span>
                                    Enable Session Timeout
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label for="timeoutDuration">Session Timeout Duration (minutes)</label>
                                <input type="number" id="timeoutDuration" name="timeoutDuration" value="30" min="5" max="120">
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Email Settings</h3>
                            
                            <div class="form-group">
                                <label for="smtpHost">SMTP Host</label>
                                <input type="text" id="smtpHost" name="smtpHost" value="smtp.gmail.com">
                            </div>
                            
                            <div class="form-group">
                                <label for="smtpPort">SMTP Port</label>
                                <input type="number" id="smtpPort" name="smtpPort" value="587">
                            </div>
                            
                            <div class="form-group">
                                <label for="smtpUser">SMTP Username</label>
                                <input type="text" id="smtpUser" name="smtpUser" value="your-email@gmail.com">
                            </div>
                            
                            <div class="form-group">
                                <label for="smtpPass">SMTP Password</label>
                                <input type="password" id="smtpPass" name="smtpPass" value="your-password">
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/script.js"></script>
</body>
</html>