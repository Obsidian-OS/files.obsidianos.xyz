<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObsidianOS Changelog</title>
    <link rel="stylesheet" href="../styles.css">
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
            <img src="https://obsidianos.xyz/logo.svg" alt="ObsidianOS Logo" class="logo">
            <h1 class="main-title">ObsidianOS Changelog</h1>
            <p class="subtitle">Latest version only</p>
        </header>

        <section class="features">
            <div class="feature-card">
                <div>
                    <h2>Recent Changes</h2>
                    <pre class="changelog-content"><?php include "../changelog.txt"; ?></pre>
                </div>
            </div>
        </section>

        <div class="download-section">
            <a href="/" class="download-btn">Back to Downloads</a>
        </div>

        <section class="community">
            <h2>Stay Updated</h2>
            <p>Follow our community channels to stay informed about the latest updates and releases.</p>
            <div class="community-links">
                <a href="https://www.reddit.com/r/obsidian_OS/" target="_blank" rel="noopener noreferrer" class="community-link">Reddit</a>
                <a href="https://dsc.gg/obsidianos" target="_blank" rel="noopener noreferrer" class="community-link">Discord</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 ObsidianOS Project</p>
        <div class="footer-links">
            <a href="https://wiki.obsidianos.xyz/">Wiki</a>
            <a href="https://github.com/Obsidian-OS/" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="https://sourceforge.net/projects/obsidianos/" target="_blank" rel="noopener noreferrer">SourceForge</a>
        </div>
    </footer>
    <script>
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
