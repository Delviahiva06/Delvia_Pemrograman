<!DOCTYPE html>
<html>
<head>
    <title>Huruf Hijaiyah</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            text-align: center;
            padding: 18px 0 8px 0;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 2px 8px rgba(91,33,182,0.10);
        }
        .header .logo {
            font-size: 2.7em;
            font-weight: 700;
            color: #5b21b6;
            letter-spacing: 2px;
            text-shadow: 0 2px 12px #fff8, 0 1px 0 #fff;
        }
        .container {
            width: 96%;
            max-width: 1200px;
            margin: 0 auto 40px auto;
            background: rgba(255,255,255,0.92);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(91,33,182,0.08);
            padding: 30px 18px 40px 18px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 32px;
        }
        .tab {
            background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%);
            border: none;
            padding: 12px 28px;
            border-radius: 999px;
            cursor: pointer;
            font-weight: 600;
            color: #5b21b6;
            font-size: 1.1em;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(91,33,182,0.04);
        }
        .tab.active, .tab:hover {
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #fff;
            box-shadow: 0 4px 16px rgba(91,33,182,0.10);
        }
        .intro-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            margin-bottom: 24px;
        }
        .intro-boxes > div {
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
            border: 2px solid #a78bfa;
            border-radius: 16px;
            padding: 18px 28px;
            min-width: 120px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(91,33,182,0.07);
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .intro-boxes > div:hover {
            transform: translateY(-6px) scale(1.04);
            box-shadow: 0 8px 24px rgba(91,33,182,0.13);
        }
        .intro-boxes .huruf {
            font-size: 2em;
            color: #a78bfa;
            font-weight: bold;
        }
        .intro-boxes .latin {
            font-size: 1.1em;
            color: #fff;
            background: #a78bfa;
            border-radius: 8px;
            padding: 2px 10px;
            display: inline-block;
            margin-top: 6px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
            gap: 6px;
            margin-top: 4px;
        }
        .card {
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
            border-radius: 8px;
            padding: 6px 2px 6px 2px;
            box-shadow: 0 1px 4px rgba(91,33,182,0.10);
            text-align: center;
            border: 1px solid #a78bfa;
            position: relative;
            transition: transform 0.18s, box-shadow 0.18s;
            min-height: 38px;
            opacity: 1;
            animation: fadeIn 0.5s;
        }
        .card.hide {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }
        .card:hover {
            transform: translateY(-8px) scale(1.08);
            box-shadow: 0 12px 32px rgba(91,33,182,0.16);
            animation: bounce 0.4s;
        }
        @keyframes bounce {
            0% { transform: translateY(-8px) scale(1.08); }
            30% { transform: translateY(-18px) scale(1.12); }
            60% { transform: translateY(-4px) scale(1.04); }
            100% { transform: translateY(-8px) scale(1.08); }
        }
        .huruf {
            font-size: 1.2em;
            margin-bottom: 4px;
            color: #a78bfa;
            text-shadow: 1px 1px 0 #fff, 0 2px 8px #a78bfa44;
        }
        .sound {
            font-size: 1.1em;
            color: #5b21b6;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .desc {
            font-size: 1em;
            color: #444;
            margin-top: 8px;
        }
        .audio-btn {
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            top: 18px;
            right: 18px;
            padding: 0;
            outline: none;
        }
        .audio-btn svg {
            width: 28px;
            height: 28px;
            fill: #5b21b6;
            transition: fill 0.2s;
        }
        .audio-btn:hover svg {
            fill: #f59e42;
        }
        @media (max-width: 700px) {
            .container { padding: 10px 2vw 30px 2vw; }
            .intro-boxes { gap: 8px; }
            .intro-boxes > div { min-width: 80px; padding: 10px 8px; }
            .grid { gap: 10px; }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.98); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
    <script>
        const explanations = {
            'all': 'Selamat datang di dashboard pengenalan huruf hijaiyah. Pilih kategori di atas untuk melihat huruf beserta penjelasan dan contohnya.',
            'fathah': 'Fathah (َ) adalah harakat berupa garis pendek di atas huruf. Fathah menghasilkan bunyi "a" setelah huruf hijaiyah. Contoh: بَ = ba.',
            'kasrah': 'Kasrah (ِ) adalah harakat berupa garis pendek di bawah huruf. Kasrah menghasilkan bunyi "i" setelah huruf hijaiyah. Contoh: بِ = bi.',
            'dhommah': 'Dhommah (ُ) adalah harakat berbentuk seperti huruf waw kecil di atas huruf. Dhommah menghasilkan bunyi "u" setelah huruf hijaiyah. Contoh: بُ = bu.',
            'tfathah': 'Tanwin Fathah (ً) adalah dua fathah di atas huruf. Tanwin Fathah menghasilkan bunyi "an" setelah huruf hijaiyah. Contoh: بً = ban.',
            'tdhommah': 'Tanwin Dhommah (ٌ) adalah dua dhommah di atas huruf. Tanwin Dhommah menghasilkan bunyi "un" setelah huruf hijaiyah. Contoh: بٌ = bun.',
            'tkasrah': 'Tanwin Kasrah (ٍ) adalah dua kasrah di bawah huruf. Tanwin Kasrah menghasilkan bunyi "in" setelah huruf hijaiyah. Contoh: بٍ = bin.',
            'tajwid': 'Tajwid adalah ilmu membaca Al-Qur\'an dengan kaidah yang benar, meliputi hukum bacaan, makhraj, sifat huruf, dan tanda-tanda khusus. Memahami tajwid penting agar bacaan Al-Qur\'an menjadi benar dan indah.'
        };
        function filterKategori(kat) {
            var cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                if (kat === 'all' || card.dataset.kategori === kat) {
                    card.classList.remove('hide');
                } else {
                    card.classList.add('hide');
                }
            });
            var tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            document.getElementById('tab-' + kat).classList.add('active');
            // Tampilkan penjelasan kategori
            document.getElementById('kategori-explanation').innerText = explanations[kat] || '';
        }
        function playAudio(huruf, latin) {
            // Path audio: assets/audio/{latin}.mp3
            var audioPath = 'assets/audio/' + latin.toLowerCase().replace(/\s+/g, '_') + '.mp3';
            var audio = document.getElementById('audio-player');
            if (!audio) {
                audio = document.createElement('audio');
                audio.id = 'audio-player';
                document.body.appendChild(audio);
            }
            audio.src = audioPath;
            audio.play().catch(function(e){
                alert('File audio tidak ditemukan untuk huruf: ' + huruf + '\n(' + audioPath + ')');
            });
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
        <div id="kategori-explanation" style="margin: 0 auto 24px auto; max-width: 700px; background: linear-gradient(90deg,#e0c3fc 0%,#8ec5fc 100%); color: #4b2997; border-radius: 14px; padding: 18px 24px; font-size: 1.13em; font-weight: 500; box-shadow: 0 2px 12px #a78bfa22; text-align: center;">
            Selamat datang di dashboard pengenalan huruf hijaiyah. Pilih kategori untuk melihat huruf dan penjelasannya.
        </div>
        <div class="intro-boxes">
            <div><div class="huruf">ا</div><div class="latin">alif</div></div>
            <div><div class="huruf">ب</div><div class="latin">ba</div></div>
            <div><div class="huruf">ت</div><div class="latin">ta</div></div>
            <div><div class="huruf">ث</div><div class="latin">tsa</div></div>
            <div><div class="huruf">ج</div><div class="latin">jim</div></div>
            <div><div class="huruf">ح</div><div class="latin">ha</div></div>
            <div><div class="huruf">خ</div><div class="latin">kho</div></div>
            <div><div class="huruf">د</div><div class="latin">dal</div></div>
            <div><div class="huruf">ذ</div><div class="latin">dzal</div></div>
            <div><div class="huruf">ر</div><div class="latin">ra</div></div>
            <div><div class="huruf">ز</div><div class="latin">zai</div></div>
            <div><div class="huruf">س</div><div class="latin">sin</div></div>
            <div><div class="huruf">ش</div><div class="latin">syin</div></div>
            <div><div class="huruf">ص</div><div class="latin">shad</div></div>
            <div><div class="huruf">ض</div><div class="latin">dhad</div></div>
            <div><div class="huruf">ط</div><div class="latin">tha</div></div>
            <div><div class="huruf">ظ</div><div class="latin">zha</div></div>
            <div><div class="huruf">ع</div><div class="latin">ain</div></div>
            <div><div class="huruf">غ</div><div class="latin">ghin</div></div>
            <div><div class="huruf">ف</div><div class="latin">fa</div></div>
            <div><div class="huruf">ق</div><div class="latin">qaf</div></div>
            <div><div class="huruf">ك</div><div class="latin">kaf</div></div>
            <div><div class="huruf">ل</div><div class="latin">lam</div></div>
            <div><div class="huruf">م</div><div class="latin">mim</div></div>
            <div><div class="huruf">ن</div><div class="latin">nun</div></div>
            <div><div class="huruf">و</div><div class="latin">wau</div></div>
            <div><div class="huruf">ه</div><div class="latin">ha</div></div>
            <div><div class="huruf">ء</div><div class="latin">hamzah</div></div>
            <div><div class="huruf">ي</div><div class="latin">ya</div></div>
        </div>
        <div class="grid">
            <?php foreach($huruf as $h): ?>
            <?php
            $harakat = '';
            switch(strtolower($h->h_cbg ?? '')) {
                case 'fathah': $harakat = 'َ'; break;
                case 'kasrah': $harakat = 'ِ'; break;
                case 'dhommah': $harakat = 'ُ'; break;
                case 'tfathah': $harakat = 'ً'; break;
                case 'tdhommah': $harakat = 'ٌ'; break;
                case 'tkasrah': $harakat = 'ٍ'; break;
                // case 'tajwid': $harakat = ''; break;
            }
            ?>
            <div class="card" data-kategori="<?= isset($h->h_cbg) ? strtolower($h->h_cbg) : '' ?>">
                <button class="audio-btn" onclick="playAudio('<?= htmlspecialchars($h->huruf_1) ?>', '<?= isset($h->latin) ? htmlspecialchars($h->latin) : htmlspecialchars($h->huruf_1) ?>')" title="Dengarkan Suara">
                    <svg viewBox="0 0 24 24"><path d="M3 10v4h4l5 5V5L7 10H3zm13.5 2c0-1.77-1-3.29-2.5-4.03v8.06c1.5-.74 2.5-2.26 2.5-4.03zM14 3.23v2.06c3.39.49 6 3.39 6 6.71s-2.61 6.22-6 6.71v2.06c4.5-.52 8-4.31 8-8.77s-3.5-8.25-8-8.77z"></path></svg>
                </button>
                <div class="huruf"><?= htmlspecialchars($h->huruf_1) . $harakat ?></div>
                <div class="sound">Suara: <?= htmlspecialchars($h->h_sound) ?></div>
                <?php if (!empty($h->deskripsi)): ?>
                <div class="desc"><?= htmlspecialchars($h->deskripsi) ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div style="text-align:center; margin-top: 32px;">
        <a href="/Tugas_Delvia/CodeIgniter-3.1.13/index.php/nextpage" class="next-btn">Next &rarr;</a>
    </div>
    <style>
        .next-btn {
            display: inline-block;
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #fff;
            font-weight: 600;
            font-size: 1.2em;
            padding: 14px 38px;
            border-radius: 999px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(91,33,182,0.10);
            margin-top: 18px;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }
        .next-btn:hover {
            background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%);
            color: #5b21b6;
            box-shadow: 0 8px 24px rgba(91,33,182,0.13);
        }
    </style>
</body>
</html> 