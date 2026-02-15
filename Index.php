<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miraheze Local UTRS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3366cc; /* Miraheze/Wikipedia Blue */
            --bg: #f8f9fa;
            --text: #202122;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* The Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .box { 
            background: white;
            padding: 40px; 
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            max-width: 90%;
            width: 400px;
            animation: fadeInUp 0.8s ease-out;
            text-align: center;
            border-top: 5px solid var(--primary);
        }

        h1 { 
            font-weight: 800; 
            margin-bottom: 10px;
            color: var(--primary);
            letter-spacing: -0.5px;
        }

        p { 
            line-height: 1.6; 
            color: #54595d;
        }

        hr {
            border: 0;
            border-top: 1px solid #eaecf0;
            margin: 20px 0;
        }

        .status-badge {
            background: #eaf3ff;
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
        }

        a { 
            display: inline-block;
            text-decoration: none; 
            color: white; 
            background-color: var(--primary);
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        a:hover {
            background-color: #2a52a4;
        }
    </style>
</head>
<body>

    <div class="box">
        <div class="status-badge">Phase: Initial Setup</div>
        <h1>Miraheze Local UTRS</h1>
        <p>A structured, private appeal system for local wiki administrators.</p>
        <hr>
        <p>Status: <b>Developing on GitHub</b></p>
        <br>
        <a href="https://github.com/YOUR_USERNAME/YOUR_REPO">Explore the Source</a>
    </div>

</body>
</html>
