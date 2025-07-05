<!DOCTYPE html>
<html>
<head>
    <title>Input Huruf Hijaiyah</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; }
        .container {
            width: 90%;
            margin: 30px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 30px 20px;
        }
        h2 { text-align: center; margin-bottom: 20px; }
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
        }
        .tab {
            background: #e9ecef;
            border: none;
            padding: 10px 18px;
            margin: 0 5px;
            border-radius: 4px 4px 0 0;
            cursor: pointer;
            font-weight: bold;
        }
        .tab.active, .tab:hover {
            background: #4285f4;
            color: #fff;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: #f1f1f1;
            border-radius: 8px;
            padding: 18px 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.07);
            text-align: center;
        }
        .huruf {
            font-size: 2.2em;
            margin-bottom: 10px;
        }
        .sound {
            font-size: 1em;
            color: #666;
            margin-bottom: 8px;
        }
        .desc {
            font-size: 0.95em;
            color: #444;
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