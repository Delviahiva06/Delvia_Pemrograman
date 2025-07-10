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
        .quiz-score {
            margin-top: 24px;
            font-size: 1.2em;
            color: #5b21b6;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <div id="quiz-question" class="quiz-question"></div>
        <div id="quiz-huruf" class="quiz-huruf"></div>
        <form id="quizForm" class="quiz-options"></form>
        <div id="feedback" class="quiz-feedback"></div>
        <div id="quiz-score" class="quiz-score"></div>
    </div>
    <script>
        const quizData = [
            {
                huruf: 'ب',
                question: 'Huruf apakah ini?',
                options: ['Alif', 'Ba', 'Ta', 'Jim'],
                answer: 'Ba'
            },
            {
                huruf: 'ت',
                question: 'Huruf apakah ini?',
                options: ['Ta', 'Tsa', 'Jim', 'Dal'],
                answer: 'Ta'
            },
            {
                huruf: 'ج',
                question: 'Huruf apakah ini?',
                options: ['Ha', 'Jim', 'Kha', 'Dzal'],
                answer: 'Jim'
            },
            {
                huruf: 'د',
                question: 'Huruf apakah ini?',
                options: ['Dal', 'Dzal', 'Ra', 'Zai'],
                answer: 'Dal'
            },
            {
                huruf: 'ر',
                question: 'Huruf apakah ini?',
                options: ['Zai', 'Ra', 'Sin', 'Syin'],
                answer: 'Ra'
            },
            {
                huruf: 'س',
                question: 'Huruf apakah ini?',
                options: ['Syin', 'Sad', 'Sin', 'Dhad'],
                answer: 'Sin'
            },
            {
                huruf: 'ص',
                question: 'Huruf apakah ini?',
                options: ['Syin', 'Sad', 'Sin', 'Dhad'],
                answer: 'Sad'
            },
            {
                huruf: 'ط',
                question: 'Huruf apakah ini?',
                options: ['Tha', 'Dha', 'Ta', 'Dal'],
                answer: 'Tha'
            },
            {
                huruf: 'ف',
                question: 'Huruf apakah ini?',
                options: ['Fa', 'Qaf', 'Kaf', 'Lam'],
                answer: 'Fa'
            },
            {
                huruf: 'م',
                question: 'Huruf apakah ini?',
                options: ['Mim', 'Nun', 'Lam', 'Ya'],
                answer: 'Mim'
            }
        ];
        let current = 0;
        let score = 0;

        function loadQuiz() {
            document.getElementById('feedback').textContent = '';
            document.getElementById('quiz-score').textContent = '';
            const q = quizData[current];
            document.getElementById('quiz-question').textContent = q.question;
            document.getElementById('quiz-huruf').textContent = q.huruf;
            const form = document.getElementById('quizForm');
            form.innerHTML = '';
            q.options.forEach(opt => {
                const label = document.createElement('label');
                label.innerHTML = `<input type="radio" name="jawaban" value="${opt}"> ${opt}`;
                form.appendChild(label);
            });
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'quiz-btn';
            btn.textContent = 'Cek Jawaban';
            btn.onclick = cekJawaban;
            form.appendChild(btn);
        }

        function cekJawaban() {
            var jawaban = document.querySelector('input[name=jawaban]:checked');
            var feedback = document.getElementById('feedback');
            if (!jawaban) {
                feedback.textContent = 'Pilih salah satu jawaban!';
                feedback.className = 'quiz-feedback salah';
                return;
            }
            if (jawaban.value === quizData[current].answer) {
                feedback.textContent = 'Benar!';
                feedback.className = 'quiz-feedback benar';
                score++;
            } else {
                feedback.textContent = 'Salah, jawaban yang benar: ' + quizData[current].answer;
                feedback.className = 'quiz-feedback salah';
            }
            // Tombol Next
            const form = document.getElementById('quizForm');
            let nextBtn = document.createElement('button');
            nextBtn.type = 'button';
            nextBtn.className = 'quiz-btn';
            nextBtn.textContent = (current < quizData.length - 1) ? 'Soal Selanjutnya' : 'Lihat Skor';
            nextBtn.onclick = nextSoal;
            form.appendChild(document.createElement('br'));
            form.appendChild(nextBtn);
            // Disable radio dan tombol cek
            Array.from(form.querySelectorAll('input[type=radio]')).forEach(i => i.disabled = true);
            form.querySelector('.quiz-btn').disabled = true;
        }

        function nextSoal() {
            current++;
            if (current < quizData.length) {
                loadQuiz();
            } else {
                showScore();
            }
        }

        function showScore() {
            document.getElementById('quiz-question').textContent = 'Quiz Selesai!';
            document.getElementById('quiz-huruf').textContent = '';
            document.getElementById('quizForm').innerHTML = '';
            document.getElementById('feedback').textContent = '';
            document.getElementById('quiz-score').textContent = `Skor kamu: ${score} dari ${quizData.length}`;
            // Redirect ke halaman data pengguna setelah 2 detik
            setTimeout(function() {
                window.location.href = "/Tugas_Delvia/CodeIgniter-3.1.13/index.php/Users";
            }, 2000);
        }

        // Load soal pertama
        loadQuiz();
    </script>
</body>
</html> 