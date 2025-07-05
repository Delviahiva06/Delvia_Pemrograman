<!DOCTYPE html>
<html>
<head>
    <title>Input Huruf Hijaiyah</title>
    <style>
        body {
            font-family: 'Comic Sans MS', 'Comic Sans', cursive, Arial, sans-serif;
            background: linear-gradient(135deg, #f9d6e9 0%, #d6f9f3 100%);
            min-height: 100vh;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            background: #fffbe7;
            border-radius: 18px;
            box-shadow: 0 0 18px rgba(0,0,0,0.08);
            padding: 35px 25px;
            border: 3px dashed #ffd6e0;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ff7eb9;
            font-size: 2.2em;
            letter-spacing: 2px;
            text-shadow: 1px 2px 0 #fff, 0 2px 8px #ffb6b9;
        }
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .tab {
            background: #ffe0f7;
            border: none;
            padding: 12px 22px;
            margin: 0 7px 7px 0;
            border-radius: 20px 20px 0 0;
            cursor: pointer;
            font-weight: bold;
            color: #ff7eb9;
            font-size: 1.1em;
            box-shadow: 0 2px 6px rgba(255,126,185,0.08);
            transition: background 0.2s, color 0.2s;
        }
        .tab.active, .tab:hover {
            background: #ffb6b9;
            color: #fff;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
        }
        .card {
            background: linear-gradient(135deg, #f9f7d6 0%, #d6f9f3 100%);
            border-radius: 16px;
            padding: 22px 14px;
            box-shadow: 0 4px 12px rgba(255,182,185,0.13);
            text-align: center;
            border: 2px solid #ffb6b9;
            position: relative;
            transition: transform 0.15s;
        }
        .card:hover {
            transform: scale(1.04) rotate(-2deg);
            box-shadow: 0 8px 24px rgba(255,182,185,0.18);
        }
        .huruf {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #ff7eb9;
            text-shadow: 1px 1px 0 #fff, 0 2px 8px #ffb6b9;
        }
        .sound {
            font-size: 1.1em;
            color: #6ec6ca;
            margin-bottom: 8px;
        }
        .desc {
            font-size: 1em;
            color: #444;
        }
        /* Tambahan dekorasi lucu */
        .card:before {
            content: '★';
            position: absolute;
            top: 10px;
            left: 18px;
            color: #ffe066;
            font-size: 1.3em;
            opacity: 0.7;
        }
        .card:after {
            content: '♡';
            position: absolute;
            bottom: 10px;
            right: 18px;
            color: #ffb6b9;
            font-size: 1.2em;
            opacity: 0.6;
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
    <div class="container">
        <h2>Input Huruf Hijaiyah</h2>
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
        <div class="grid">
            <?php foreach($huruf as $h): ?>
            <div class="card" data-kategori="<?= isset($h->h_cbg) ? strtolower($h->h_cbg) : '' ?>">
                <div class="huruf"><?= htmlspecialchars($h->huruf_1) ?></div>
                <div class="sound">Suara: <?= htmlspecialchars($h->h_sound) ?></div>
                <div class="desc"><?= htmlspecialchars($h->deskripsi) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 