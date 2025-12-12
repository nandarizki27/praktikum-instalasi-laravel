<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Praktikum Instalasi</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        
        .logo {
            font-size: 80px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 15px;
        }
        
        .subtitle {
            color: #666;
            font-size: 18px;
            margin-bottom: 40px;
        }
        
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: left;
        }
        
        .info-box h3 {
            color: #667eea;
            margin-bottom: 15px;
        }
        
        .info-item {
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-item strong {
            color: #555;
        }
        
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: #f8f9fa;
            color: #667eea;
            border: 2px solid #667eea;
        }
        
        .btn-secondary:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(17, 153, 142, 0.4);
        }
        
        .footer {
            margin-top: 30px;
            color: #888;
            font-size: 14px;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 40px 20px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            .logo {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🚀</div>
        <h1>Selamat Datang di Laravel!</h1>
        <p class="subtitle">Praktikum Instalasi & Konfigurasi Laravel</p>
        
        <div class="info-box">
            <h3>📚 Informasi Praktikum</h3>
            <div class="info-item">
                <strong>Nama:</strong> NANDA RIZKI RAMADHAN
            </div>
            <div class="info-item">
                <strong>NIM:</strong> G.211.23.0025
            </div>
            <div class="info-item">
                <strong>Mata Kuliah:</strong> Rekayasa Web
            </div>
            <div class="info-item">
                <strong>Laravel Version:</strong> {{ app()->version() }}
            </div>
            <div class="info-item">
                <strong>PHP Version:</strong> {{ PHP_VERSION }}
            </div>
        </div>
        
        <div class="buttons">
            <a href="/profil" class="btn btn-primary">
                📝 Lihat Profil Mahasiswa
            </a>
            
            <a href="/dashboard" class="btn btn-secondary">
                📊 Dashboard
            </a>
            
            <a href="/hello" class="btn btn-success">
                👋 Hello World
            </a>
        </div>
        
        <div class="footer">
            <p>© {{ date('Y') }} Praktikum Laravel - Rekayasa Web</p>
        </div>
    </div>
</body>
</html>