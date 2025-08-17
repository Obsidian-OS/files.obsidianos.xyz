<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObsidianOS Changelog</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0f;
            color: #e6e8eb;
            line-height: 1.6;
            min-height: 100vh;
        }
        

        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 4rem 2rem;
            text-align: center;
        }
        
        .header {
            margin-bottom: 3rem;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
        }
        
        .title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1f6feb;
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #8b949e;
            margin-bottom: 2rem;
        }
        
        .content-card {
            background: #101018;
            border: 1px solid #2a2a3a;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .download-section {
            margin-bottom: 2rem;
        }
        
        .download-btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background: #1f6feb;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.2s ease;
            margin: 0.5rem;
        }
        
        .download-btn:hover {
            background: #2d7be5;
        }
        
        .secondary-btn {
            background: #2a2a3a;
            border: 1px solid #3a3a4a;
        }
        
        .secondary-btn:hover {
            background: #3a3a4a;
        }
        
        .info-text {
            color: #8b949e;
            margin: 1rem 0;
        }
        
        .footer {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #8b949e;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 2rem 1rem;
            }
            
            .title {
                font-size: 2.5rem;
            }
            
            .content-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="https://obsidianos.xyz/"><img src="https://obsidianos.xyz/logo.png" alt="ObsidianOS Logo" style="width: 100%; height: 100%; object-fit: contain;"></a>
            </div>
            <h1 class="title">ObsidianOS Changelog</h1>
            <p class="subtitle">Latest version only</p>
        </div>
        
        <p><?php import "../changelog.txt"; ?></p>
        <div class="footer">
            <p>Thank you for using ObsidianOS!</p>
        </div>
    </div>
</body>
</html>
