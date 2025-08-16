<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObsidianOS Files - Building...</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <?php include "/var/www/header.php"?>
        
        <div class="status-card">
            <div class="status-title">
                <span class="status-indicator"></span>
                ISO Building in Progress
            </div>
            <p class="status-text">A new ObsidianOS ISO is currently being built and will be available soon.</p>
                    <div class="spinner"></div>
        <p class="status-text">Refresh the page to check current status</p>
        </div>
        
        <div class="content-card">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f6feb;">Latest Published ISO</h2>
            <p class="info-text">While the new version builds, you can download the most recent stable release</p>
            <a href="/latest.iso" class="download-btn">Download Latest ISO</a>
            <a href="/latest.iso.sha256" class="download-btn secondary-btn">SHA256</a>
        </div>
        
        <div class="content-card">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f6feb;">Previous Releases</h2>
            <p class="info-text">Browse older versions and legacy ISOs</p>
            <a href="https://sourceforge.net/projects/obsidianos/" target="_blank" rel="noopener noreferrer" class="download-btn secondary-btn">Browse on SourceForge</a>
        </div>
        
        <div class="footer">
            <p>Thank you for using ObsidianOS!</p>
        </div>
    </div>
    

</body>
</html>
