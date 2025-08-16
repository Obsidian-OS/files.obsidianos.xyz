<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObsidianOS Files</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <?php include "/var/www/header.php"?>
        
        <div class="content-card">
            <div class="download-section">
                <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f6feb;">Latest ISO</h2>
                <p class="info-text">Get the most recent ObsidianOS release</p>
                <a href="/latest.iso" class="download-btn">Download Latest ISO</a>
                <a href="/latest.iso.sha256" class="download-btn secondary-btn">SHA256</a>
            </div>
        </div>
        
        <div class="content-card">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: #1f6feb;">Older Releases</h2>
            <p class="info-text">Previous versions and legacy ISOs</p>
            <a href="https://sourceforge.net/projects/obsidianos/" target="_blank" rel="noopener noreferrer" class="download-btn secondary-btn">Browse on SourceForge</a>
        </div>
        
        <div class="footer">
            <p>Thank you for using ObsidianOS!</p>
        </div>
    </div>
</body>
</html>
