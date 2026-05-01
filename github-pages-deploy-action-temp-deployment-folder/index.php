<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255,255,255,0.95);
            padding: 60px 30px;
            text-align: center;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .header h1 {
            font-size: 48px;
            color: #333;
            margin-bottom: 15px;
        }

        .header p {
            font-size: 20px;
            color: #666;
        }

        .box-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .box .icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .box h3 {
            font-size: 24px;
            color: #667eea;
            margin-bottom: 15px;
        }

        .box p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .box button {
            background: #667eea;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s;
        }

        .box button:hover {
            background: #764ba2;
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .card h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-box {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .stat-box:hover {
            transform: scale(1.05);
        }

        .stat-number {
            font-size: 48px;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
            font-size: 16px;
        }

        .footer {
            background: rgba(255,255,255,0.95);
            padding: 30px;
            text-align: center;
            border-radius: 20px;
            color: #666;
        }

        @media (max-width: 768px) {
            .two-col {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER BOX - REPLACE THIS TEXT -->
        <div class="header">
            <h1>🌍 Welcome to My Digital Space</h1>
            <p>Creating beautiful websites made simple and fun!</p>
        </div>

        <!-- 3 BOXES GRID - REPLACE THESE TEXTS -->
        <div class="box-grid">
            <div class="box">
                <div class="icon">💼</div>
                <h3>Our Services</h3>
                <p>We offer professional web design, development, and consulting services tailored to your needs.</p>
                <button>Explore Services →</button>
            </div>

            <div class="box">
                <div class="icon">🌟</div>
                <h3>Our Mission</h3>
                <p>To help people create stunning websites without any coding stress or technical difficulties.</p>
                <button>Learn More →</button>
            </div>

            <div class="box">
                <div class="icon">🤝</div>
                <h3>Get Support</h3>
                <p>24/7 customer support to help you with any questions or issues you might encounter.</p>
                <button>Contact Us →</button>
            </div>
        </div>

        <!-- TWO COLUMN SECTION - REPLACE THESE TEXTS -->
        <div class="two-col">
            <div class="card">
                <h2>📖 Our Story</h2>
                <p>We started this journey to make website creation accessible to everyone. No complicated coding, no expensive software - just simple tools that work.</p>
                <p>Today, we've helped hundreds of people launch their websites and grow their online presence.</p>
                <p><strong>✨ Join our community:</strong> It's free and always will be!</p>
            </div>

            <div class="card">
                <h2>🎯 Why Choose Us</h2>
                <ul style="margin-left: 20px; line-height: 1.8;">
                    <li>✅ 100% Free to use</li>
                    <li>✅ No coding required</li>
                    <li>✅ Mobile responsive designs</li>
                    <li>✅ Fast and reliable hosting</li>
                    <li>✅ Regular updates & support</li>
                </ul>
            </div>
        </div>

        <!-- STATS BOXES - REPLACE THESE NUMBERS AND LABELS -->
        <div class="stats">
            <div class="stat-box">
                <div class="stat-number">1,000+</div>
                <div class="stat-label">Active Users</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">⭐ 4.9</div>
                <div class="stat-label">User Rating</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">50+</div>
                <div class="stat-label">Countries</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">∞</div>
                <div class="stat-label">Possibilities</div>
            </div>
        </div>

        <!-- FOOTER - REPLACE THIS TEXT -->
        <div class="footer">
            <p>❤️ Built with passion | © 2026 My Awesome Website</p>
            <p style="margin-top: 10px; font-size: 14px;">📧 Contact: hello@mywebsite.com | 📱 Follow us on social media</p>
        </div>
    </div>
</body>
</html>
