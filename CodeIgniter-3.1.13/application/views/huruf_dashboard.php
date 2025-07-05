<!DOCTYPE html>
<html>
<head>
    <title>Huruf Hijaiyah</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #23272f;
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #23272f;
            color: #fff;
            padding: 24px 0 10px 0;
            text-align: center;
            border-bottom: 3px solid #444;
        }
        .header .logo {
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .intro {
            background: #2d313a;
            color: #fff;
            margin: 0 auto 18px auto;
            padding: 18px 30px 10px 30px;
            border-radius: 0 0 18px 18px;
            max-width: 700px;
            font-size: 1.1em;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }
        .container {
            width: 92%;
            margin: 30px auto;
            background: #23272f;
            border-radius: 18px;
            box-shadow: 0 0 18px rgba(0,0,0,0.18);
            padding: 0 0 35px 0;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #fff;
            font-size: 2em;
            letter-spacing: 2px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .tab {
            background: #444;
            border: none;
            padding: 12px 22px;
            margin: 0 7px 7px 0;
            border-radius: 20px 20px 0 0;
            cursor: pointer;
            font-weight: bold;
            color: #fff;
            font-size: 1.1em;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            transition: background 0.2s, color 0.2s;
        }
        .tab.active, .tab:hover {
            background: #ffb600;
            color: #23272f;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-top: 20px;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            padding: 22px 14px 18px 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.13);
            text-align: center;
            border: 2px solid #ffb600;
            position: relative;
            transition: transform 0.15s;
            min-height: 170px;
        }
        .card:hover {
            transform: scale(1.04) rotate(-2deg);
            box-shadow: 0 8px 24px rgba(255,182,0,0.18);
        }
        .huruf {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #ffb600;
            text-shadow: 1px 1px 0 #fff, 0 2px 8px #ffb60044;
        }
        .sound {
            font-size: 1.1em;
            color: #23272f;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .desc {
            font-size: 1em;
            color: #444;
            margin-top: 8px;
        }
    </style>
    <script>
        function filterKategori(kat) {
            var cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                if (kat === 'all' || card.dataset.kategori === kat) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
            var tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            document.getElementById('tab-' + kat).classList.add('active');
        }
    </script>
</head>
<body>
    <div class="header">
        <div class="logo">Huruf Hijaiyah</div>
    </div>
    <div class="intro">
        <b>Pengenalan Huruf Hijaiyah:</b> <br>
        Halaman ini berisi daftar huruf hijaiyah beserta cara membaca dan penjelasan singkatnya. Silakan pilih kategori di atas untuk melihat huruf sesuai kelompoknya.
    </div>
    <div class="container">
        <div class="tabs">
            <button class="tab active" id="tab-all" onclick="filterKategori('all')">Home</button>
            <button class="tab" id="tab-fathah" onclick="filterKategori('fathah')">Fathah</button>
            <button class="tab" id="tab-kasrah" onclick="filterKategori('kasrah')">Kasrah</button>
            <button class="tab" id="tab-dhommah" onclick="filterKategori('dhommah')">Dhommah</button>
            <button class="tab" id="tab-tfathah" onclick="filterKategori('tfathah')">Tanwin Fathah</button>
            <button class="tab" id="tab-tdhommah" onclick="filterKategori('tdhommah')">Tanwin Dhommah</button>
            <button class="tab" id="tab-tkasrah" onclick="filterKategori('tkasrah')">Tanwin Kasrah</button>
            <button class="tab" id="tab-tajwid" onclick="filterKategori('tajwid')">Tajwid</button>
        </div>
        <div class="intro-boxes" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 18px; margin-bottom: 18px;">
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ا</div><div style="font-size: 1.1em; color: #444;">Alif</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ب</div><div style="font-size: 1.1em; color: #444;">Ba</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ت</div><div style="font-size: 1.1em; color: #444;">Ta</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ث</div><div style="font-size: 1.1em; color: #444;">Tsa</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ج</div><div style="font-size: 1.1em; color: #444;">Jim</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ح</div><div style="font-size: 1.1em; color: #444;">Ha</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">خ</div><div style="font-size: 1.1em; color: #444;">Kho</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">د</div><div style="font-size: 1.1em; color: #444;">Dal</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ذ</div><div style="font-size: 1.1em; color: #444;">Dzal</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ر</div><div style="font-size: 1.1em; color: #444;">Ro</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ز</div><div style="font-size: 1.1em; color: #444;">Zai</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">س</div><div style="font-size: 1.1em; color: #444;">Sin</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ش</div><div style="font-size: 1.1em; color: #444;">Syin</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ص</div><div style="font-size: 1.1em; color: #444;">Shad</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ض</div><div style="font-size: 1.1em; color: #444;">Dhad</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ط</div><div style="font-size: 1.1em; color: #444;">Tha</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ظ</div><div style="font-size: 1.1em; color: #444;">Zha</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ع</div><div style="font-size: 1.1em; color: #444;">Ain</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">غ</div><div style="font-size: 1.1em; color: #444;">Ghoin</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ف</div><div style="font-size: 1.1em; color: #444;">Fa</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ق</div><div style="font-size: 1.1em; color: #444;">Qaf</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ك</div><div style="font-size: 1.1em; color: #444;">Kaf</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ل</div><div style="font-size: 1.1em; color: #444;">Lam</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">م</div><div style="font-size: 1.1em; color: #444;">Mim</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ن</div><div style="font-size: 1.1em; color: #444;">Nun</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">و</div><div style="font-size: 1.1em; color: #444;">Wau</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ه</div><div style="font-size: 1.1em; color: #444;">Ha</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ء</div><div style="font-size: 1.1em; color: #444;">Hamzah</div></div>
            <div style="background: #fffbe7; border: 2px solid #ffb6b9; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,182,185,0.10);"><div style="font-size: 2em; color: #ff7eb9; font-weight: bold;">ي</div><div style="font-size: 1.1em; color: #444;">Ya</div></div>
        </div>
        <div class="grid">
            <?php foreach($huruf as $h): ?>
            <div class="card" data-kategori="<?= isset($h->h_cbg) ? strtolower($h->h_cbg) : '' ?>">
                <div class="huruf"><?= htmlspecialchars($h->huruf_1) ?></div>
                <div class="sound">Suara: <?= htmlspecialchars($h->h_sound) ?></div>
                <?php if (!empty($h->deskripsi)): ?>
                <div class="desc"><?= htmlspecialchars($h->deskripsi) ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 