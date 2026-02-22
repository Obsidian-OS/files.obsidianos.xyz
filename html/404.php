<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - ObsidianOS Files</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://obsidianos.xyz/logo.svg" type="image/svg+xml">
</head>
<body>
    <div class="background-container"></div>
    <div class="mouse-follower mouse-follower-1"></div>
    <div class="mouse-follower mouse-follower-2"></div>
    <div class="mouse-follower mouse-follower-3"></div>
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <img src="https://obsidianos.xyz/logo.svg" alt="ObsidianOS Logo" class="nav-logo">
                <a href="https://obsidianos.xyz" class="nav-title">ObsidianOS</a>
            </div>
            <div class="nav-links">
                <a href="https://files.obsidianos.xyz">Downloads</a>
                <a href="https://wiki.obsidianos.xyz/">Wiki</a>
                <a href="https://github.com/Obsidian-OS/" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="https://www.reddit.com/r/obsidian_OS/" target="_blank" rel="noopener noreferrer">Reddit</a>
                <a href="https://dsc.gg/obsidianos" target="_blank" rel="noopener noreferrer">Discord</a>
            </div>
        </div>
    </nav>

    <main>
        <header>
            <img src="/oboslogo-gif-dark.gif" alt="ObsidianOS Logo" class="logo gif-transparent">
            <h1 class="main-title">404</h1>
            <p class="subtitle"><?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (str_starts_with($path, '/latest')) {
  echo "You are looking for an ISO that has not been uploaded or has not built yet. If this page persists for more than a day, you may want to email odd@obsidianos.xyz, the ISO builder, uploader, and server hoster. Thanks for (trying) to use ObsidianOS!";
} else {
  echo "The page " . $_SERVER['PHP_SELF'] . " was not found.";
}?></p>
    </main>

    <footer>
        <p>&copy; 2026 ObsidianOS Project</p>
        <div class="footer-links">
            <a href="https://wiki.obsidianos.xyz/">Wiki</a>
            <a href="https://github.com/Obsidian-OS/" target="_blank" rel="noopener noreferrer">GitHub</a>
        </div>
    </footer>

    <script>});
        const followers = document.querySelectorAll('.mouse-follower');
        document.addEventListener('mousemove', (e) => {
            followers.forEach((follower, index) => {
                setTimeout(() => {
                    follower.style.left = e.pageX + 'px';
                    follower.style.top = e.pageY + 'px';
                }, index * 100);
            });
        });
    </script>
</body>
</html>
