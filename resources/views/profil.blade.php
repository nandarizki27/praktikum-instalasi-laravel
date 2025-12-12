<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 30px;
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>📝 Profil Mahasiswa</h1>
        
        <div class="info">
            <span class="label">Nama:</span>
            <div class="value">NANDA RIZKI RAMADHAN</div>
        </div>
        
        <div class="info">
            <span class="label">NIM:</span>
            <div class="value">G.211.23.0025</div>
        </div>
        
        <div class="info">
            <span class="label">Mata Kuliah:</span>
            <div class="value">Rekayasa Web</div>
        </div>
        
        <div class="info">
            <span class="label">Topik Praktikum:</span>
            <div class="value">Instalasi Laravel</div>
        </div>
        
        <div class="footer">
            © {{ date('Y') }} - Praktikum Laravel
        </div>
    </div>
</body>
</html>