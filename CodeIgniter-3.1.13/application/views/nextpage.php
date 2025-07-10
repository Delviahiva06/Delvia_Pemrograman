<!DOCTYPE html>
<html>
<head>
    <title>Quiz Hijaiyah</title>
    <style>
        body { font-family: 'Poppins', Arial, sans-serif; background: #f3e8ff; margin: 0; }
        .quiz-container {
            max-width: 420px;
            margin: 60px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #a78bfa33;
            padding: 36px 28px 32px 28px;
            text-align: center;
        }
        .quiz-huruf {
            font-size: 3.5em;
            color: #a78bfa;
            margin-bottom: 18px;
        }
        .quiz-question {
            font-size: 1.2em;
            margin-bottom: 18px;
            color: #5b21b6;
        }
        .quiz-options label {
            display: block;
            background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%);
            margin: 10px 0;
            padding: 12px 0;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1em;
            color: #5b21b6;
            transition: background 0.2s, color 0.2s;
        }
        .quiz-options input[type=radio] { margin-right: 10px; }
        .quiz-btn {
            margin-top: 18px;
            padding: 12px 36px;
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 999px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .quiz-btn:hover { background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%); color: #5b21b6; }
        .quiz-feedback {
            margin-top: 18px;
            font-size: 1.15em;
            font-weight: bold;
        }
        .quiz-feedback.benar { color: #22c55e; }
        .quiz-feedback.salah { color: #ef4444; }
    </style>
</head>
<body>
    <div class="quiz-container">
        <div class="quiz-question">Huruf apakah ini?</div>
        <div class="quiz-huruf">ب</div>
        <form id="quizForm" class="quiz-options">
            <label><input type="radio" name="jawaban" value="alif"> Alif</label>
            <label><input type="radio" name="jawaban" value="ba"> Ba</label>
            <label><input type="radio" name="jawaban" value="ta"> Ta</label>
            <label><input type="radio" name="jawaban" value="jim"> Jim</label>
            <button type="button" class="quiz-btn" onclick="cekJawaban()">Cek Jawaban</button>
        </form>
        <div id="feedback" class="quiz-feedback"></div>
    </div>
    <script>
        function cekJawaban() {
            var jawaban = document.querySelector('input[name=jawaban]:checked');
            var feedback = document.getElementById('feedback');
            if (!jawaban) {
                feedback.textContent = 'Pilih salah satu jawaban!';
                feedback.className = 'quiz-feedback salah';
                return;
            }
            if (jawaban.value === 'ba') {
                feedback.textContent = 'Benar! Ini adalah huruf Ba.';
                feedback.className = 'quiz-feedback benar';
            } else {
                feedback.textContent = 'Salah, coba lagi!';
                feedback.className = 'quiz-feedback salah';
            }
        }
    </script>
</body>
</html> 