<!DOCTYPE html>
<html>
<head>
    <title>Input Huruf Hijaiyah - Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #e3f0ff; }
        .container { width: 90%; margin: 30px auto; background: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 30px 25px; }
        h2 { text-align: center; margin-bottom: 20px; }
        .stat-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px; }
        .stat-card { background: #f1f1f1; border-radius: 8px; padding: 18px 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.07); text-align: center; }
        .stat-title { font-size: 1.1em; margin-bottom: 8px; }
        .stat-value { font-size: 2em; font-weight: bold; margin-bottom: 10px; }
        .stat-btn { background: #4285f4; color: #fff; border: none; padding: 6px 16px; border-radius: 4px; cursor: pointer; font-size: 0.95em; }
        .stat-btn:hover { background: #357ae8; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Huruf Hijaiyah</h2>
        <div class="stat-grid">
            <div class="stat-card">
                <div class="stat-title">Total Pengguna</div>
                <div class="stat-value"><?php echo $total_pengguna; ?></div>
                <button class="stat-btn">Pengguna Input</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Fathah</div>
                <div class="stat-value"><?php echo $total_fathah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Kasrah</div>
                <div class="stat-value"><?php echo $total_kasrah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Dhommah</div>
                <div class="stat-value"><?php echo $total_dhommah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Tanwin Fathah</div>
                <div class="stat-value"><?php echo $total_tfathah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Tanwin Kasrah</div>
                <div class="stat-value"><?php echo $total_tkasrah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Tanwin Dhommah</div>
                <div class="stat-value"><?php echo $total_tdhommah; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Huruf Tajwid</div>
                <div class="stat-value"><?php echo $total_tajwid; ?></div>
                <button class="stat-btn">Lihat Lainnya</button>
            </div>
        </div>
    </div>
</body>
</html> 