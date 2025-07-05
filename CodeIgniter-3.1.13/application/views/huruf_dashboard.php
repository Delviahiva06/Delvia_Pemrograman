<!DOCTYPE html>
<html>
<head>
    <title>Huruf Hijaiyah</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #e3f0ff;
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: #e3f0ff;
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
            background: #e3f0ff;
            border-radius: 18px;
            box-shadow: 0 0 18px rgba(0,0,0,0.08);
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
            <div style="background: #fff; border: 2px solid #b2b2ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(178,178,255,0.10);"><div style="font-size: 2em; color: #b2b2ff; font-weight: bold;">ا</div><div style="font-size: 1.1em; color: #fff; background:#b2b2ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">alif</div></div>
            <div style="background: #fff; border: 2px solid #6fd3ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(111,211,255,0.10);"><div style="font-size: 2em; color: #6fd3ff; font-weight: bold;">ب</div><div style="font-size: 1.1em; color: #fff; background:#6fd3ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ba</div></div>
            <div style="background: #fff; border: 2px solid #baffb2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(186,255,178,0.10);"><div style="font-size: 2em; color: #baffb2; font-weight: bold;">ت</div><div style="font-size: 1.1em; color: #fff; background:#baffb2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ta</div></div>
            <div style="background: #fff; border: 2px solid #ffb2e6; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,230,0.10);"><div style="font-size: 2em; color: #ffb2e6; font-weight: bold;">ث</div><div style="font-size: 1.1em; color: #fff; background:#ffb2e6; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">tsa</div></div>
            <div style="background: #fff; border: 2px solid #ffd966; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,217,102,0.10);"><div style="font-size: 2em; color: #ffd966; font-weight: bold;">ج</div><div style="font-size: 1.1em; color: #fff; background:#ffd966; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">jim</div></div>
            <div style="background: #fff; border: 2px solid #ffb2b2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,178,0.10);"><div style="font-size: 2em; color: #ffb2b2; font-weight: bold;">ح</div><div style="font-size: 1.1em; color: #fff; background:#ffb2b2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ha</div></div>
            <div style="background: #fff; border: 2px solid #ffb266; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,102,0.10);"><div style="font-size: 2em; color: #ffb266; font-weight: bold;">خ</div><div style="font-size: 1.1em; color: #fff; background:#ffb266; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">kho</div></div>
            <div style="background: #fff; border: 2px solid #b2b2ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(178,178,255,0.10);"><div style="font-size: 2em; color: #b2b2ff; font-weight: bold;">د</div><div style="font-size: 1.1em; color: #fff; background:#b2b2ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">dal</div></div>
            <div style="background: #fff; border: 2px solid #6fd3ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(111,211,255,0.10);"><div style="font-size: 2em; color: #6fd3ff; font-weight: bold;">ذ</div><div style="font-size: 1.1em; color: #fff; background:#6fd3ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">dzal</div></div>
            <div style="background: #fff; border: 2px solid #baffb2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(186,255,178,0.10);"><div style="font-size: 2em; color: #baffb2; font-weight: bold;">ر</div><div style="font-size: 1.1em; color: #fff; background:#baffb2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ra</div></div>
            <div style="background: #fff; border: 2px solid #ffb2e6; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,230,0.10);"><div style="font-size: 2em; color: #ffb2e6; font-weight: bold;">ز</div><div style="font-size: 1.1em; color: #fff; background:#ffb2e6; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">zai</div></div>
            <div style="background: #fff; border: 2px solid #ffd966; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,217,102,0.10);"><div style="font-size: 2em; color: #ffd966; font-weight: bold;">س</div><div style="font-size: 1.1em; color: #fff; background:#ffd966; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">sin</div></div>
            <div style="background: #fff; border: 2px solid #ffb2b2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,178,0.10);"><div style="font-size: 2em; color: #ffb2b2; font-weight: bold;">ش</div><div style="font-size: 1.1em; color: #fff; background:#ffb2b2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">syin</div></div>
            <div style="background: #fff; border: 2px solid #ffb266; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,102,0.10);"><div style="font-size: 2em; color: #ffb266; font-weight: bold;">ص</div><div style="font-size: 1.1em; color: #fff; background:#ffb266; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">shad</div></div>
            <div style="background: #fff; border: 2px solid #b2b2ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(178,178,255,0.10);"><div style="font-size: 2em; color: #b2b2ff; font-weight: bold;">ض</div><div style="font-size: 1.1em; color: #fff; background:#b2b2ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">dhad</div></div>
            <div style="background: #fff; border: 2px solid #6fd3ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(111,211,255,0.10);"><div style="font-size: 2em; color: #6fd3ff; font-weight: bold;">ط</div><div style="font-size: 1.1em; color: #fff; background:#6fd3ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">tha</div></div>
            <div style="background: #fff; border: 2px solid #baffb2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(186,255,178,0.10);"><div style="font-size: 2em; color: #baffb2; font-weight: bold;">ظ</div><div style="font-size: 1.1em; color: #fff; background:#baffb2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">zha</div></div>
            <div style="background: #fff; border: 2px solid #ffb2e6; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,230,0.10);"><div style="font-size: 2em; color: #ffb2e6; font-weight: bold;">ع</div><div style="font-size: 1.1em; color: #fff; background:#ffb2e6; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ain</div></div>
            <div style="background: #fff; border: 2px solid #ffd966; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,217,102,0.10);"><div style="font-size: 2em; color: #ffd966; font-weight: bold;">غ</div><div style="font-size: 1.1em; color: #fff; background:#ffd966; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ghin</div></div>
            <div style="background: #fff; border: 2px solid #ffb2b2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,178,0.10);"><div style="font-size: 2em; color: #ffb2b2; font-weight: bold;">ف</div><div style="font-size: 1.1em; color: #fff; background:#ffb2b2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">fa</div></div>
            <div style="background: #fff; border: 2px solid #ffb266; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,102,0.10);"><div style="font-size: 2em; color: #ffb266; font-weight: bold;">ق</div><div style="font-size: 1.1em; color: #fff; background:#ffb266; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">qaf</div></div>
            <div style="background: #fff; border: 2px solid #b2b2ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(178,178,255,0.10);"><div style="font-size: 2em; color: #b2b2ff; font-weight: bold;">ك</div><div style="font-size: 1.1em; color: #fff; background:#b2b2ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">kaf</div></div>
            <div style="background: #fff; border: 2px solid #6fd3ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(111,211,255,0.10);"><div style="font-size: 2em; color: #6fd3ff; font-weight: bold;">ل</div><div style="font-size: 1.1em; color: #fff; background:#6fd3ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">lam</div></div>
            <div style="background: #fff; border: 2px solid #baffb2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(186,255,178,0.10);"><div style="font-size: 2em; color: #baffb2; font-weight: bold;">م</div><div style="font-size: 1.1em; color: #fff; background:#baffb2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">mim</div></div>
            <div style="background: #fff; border: 2px solid #ffb2e6; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,230,0.10);"><div style="font-size: 2em; color: #ffb2e6; font-weight: bold;">ن</div><div style="font-size: 1.1em; color: #fff; background:#ffb2e6; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">nun</div></div>
            <div style="background: #fff; border: 2px solid #ffd966; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,217,102,0.10);"><div style="font-size: 2em; color: #ffd966; font-weight: bold;">و</div><div style="font-size: 1.1em; color: #fff; background:#ffd966; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">wau</div></div>
            <div style="background: #fff; border: 2px solid #ffb2b2; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(255,178,178,0.10);"><div style="font-size: 2em; color: #ffb2b2; font-weight: bold;">ه</div><div style="font-size: 1.1em; color: #fff; background:#ffb2b2; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ha</div></div>
            <div style="background: #fff; border: 2px solid #b2b2ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(178,178,255,0.10);"><div style="font-size: 2em; color: #b2b2ff; font-weight: bold;">ء</div><div style="font-size: 1.1em; color: #fff; background:#b2b2ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">hamzah</div></div>
            <div style="background: #fff; border: 2px solid #6fd3ff; border-radius: 12px; padding: 18px 28px; min-width: 120px; text-align: center; box-shadow: 0 2px 8px rgba(111,211,255,0.10);"><div style="font-size: 2em; color: #6fd3ff; font-weight: bold;">ي</div><div style="font-size: 1.1em; color: #fff; background:#6fd3ff; border-radius:8px; padding:2px 10px; display:inline-block; margin-top:6px;">ya</div></div>
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