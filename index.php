<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>eSewa PHP Integration Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            padding: 40px;
            color: #2d3436;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        h1 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 20px;
            margin-top: 30px;
            color: #34495e;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }

        p {
            font-size: 15px;
            line-height: 1.7;
            margin-top: 10px;
            color: #555;
        }

        ul,
        ol {
            margin-top: 10px;
            margin-left: 20px;
        }

        code {
            background: #ecf0f1;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: Consolas, monospace;
        }

        pre {
            background: #f4f4f4;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            font-size: 14px;
        }

        .footer {
            margin-top: 60px;
            font-size: 14px;
            color: #888;
            text-align: center;
        }

        .footer a {
            color: #2c3e50;
            margin: 0 10px;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .tagline {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .badge {
            display: inline-block;
            background: #198754;
            color: white;
            font-size: 13px;
            padding: 4px 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <span class="badge">eSewa Integration Kit</span>
        <h1>PHP eSewa Integration Starter</h1>
        <p class="tagline">A simple and reusable structure to help integrate eSewa into your PHP-based project quickly and efficiently.</p>

        <h2>📁 Project Structure</h2>
        <ul>
            <li><code>esewa_config.php</code> – Configure mode (<code>sandbox</code> or <code>live</code>), merchant code, and secret key.</li>
            <li><code>product_info.php</code> – Set product amount, ID, and create the digital signature.</li>
            <li><code>send_esewa_request.php</code> – HTML form that submits data to eSewa server.</li>
            <li><code>esewa_success.php</code> – Redirect page after a successful payment.</li>
            <li><code>esewa_failure.php</code> – Redirect page after a failed or cancelled payment.</li>
        </ul>

        <h2>🔁 How It Works</h2>
        <ol>
            <li>Edit <code>esewa_config.php</code> and set <code>$mode</code> to either <code>'sandbox'</code> for testing or <code>'live'</code> for production.</li>
            <li>Fill in your actual <code>merchant code</code> and <code>secret key</code> for live mode 'production'.</li>
            <li>Update product details in <code>product_info.php</code>.</li>
            <li>Run <code>send_esewa_request.php</code> to initiate a payment.</li>
            <li>eSewa redirects users to <code>esewa_success.php</code> or <code>esewa_failure.php</code> based on transaction result.</li>
        </ol>

        <h2>🧪 Testing Credentials (Sandbox)</h2>
        <ul>
            <li><strong>eSewa ID:</strong> 9806800001 / 2 / 3 / 4 / 5</li>
            <li><strong>Password:</strong> Nepal@123</li>
            <li><strong>MPIN:</strong> 1122</li>
            <li><strong>Token:</strong> 123456</li>
        </ul>

        <h2>⚙️ Customize for Your Project</h2>
        <ul>
            <li><strong>Redirect URLs:</strong> Set your <code>$success_url</code> and <code>$failure_url</code> in <code>product_info.php</code>.</li>
            <li><strong>Payment Info:</strong> Adjust amount, reference ID, and signature logic based on your product.</li>
            <li><strong>Design:</strong> Customize the form and result pages to match your site branding.</li>
        </ul>

        <h2>💡 Example: Switching to Live Mode</h2>
        <pre><code>$mode = 'live'; // In esewa_config.php</code></pre>

        <div class="footer">
            <p>Developed by Nikesh Adhikari</p>
            <p>
                <a href="https://www.facebook.com/nikeshadhikari9.com.np" target="_blank">Facebook</a> |
                <a href="https://github.com/nikeshadhikari9" target="_blank">GitHub</a>
            </p>
        </div>
    </div>
</body>

</html>