  // script.js
// Buat peta dan tentukan lokasi awal (koordinat latitude dan longitude Bogor)
var map = L.map('map').setView([-6.5946, 106.8067], 13);

// Tambahkan layer peta dari Leaflet
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Tambahkan beberapa marker (titik lokasi) di beberapa titik di Bogor dengan ikon yang berbeda
var markers = [
    L.marker([-6.5946, 106.8067]).addTo(map).bindPopup("Kota Bogor"),
    L.marker([-6.6025, 106.7955]).addTo(map).bindPopup("Kebun Raya Bogor"),
    L.marker([-6.5971, 106.7975]).addTo(map).bindPopup("Bogor Palace"),
    L.marker([-6.5912, 106.7911]).addTo(map).bindPopup("Bogor Botanical Gardens"),
    // Tambahkan tanda tambahan sesuai kebutuhan Anda
];

// Anda dapat mengganti ikon dengan gambar kustom untuk masing-masing marker
// var customIcon = L.icon({
//     iconUrl: 'path/to/custom-icon.png',
//     iconSize: [32, 32],
//     iconAnchor: [16, 32]
// });
// var marker = L.marker([latitude, longitude], {icon: customIcon}).addTo(map);

const chatLauncher = document.getElementById('chat-launcher');
const chatContainer = document.getElementById('chat-container');
const chatBox = document.getElementById('chat-box');
const userInput = document.getElementById('user-input');
const sendButton = document.getElementById('send-button');

const questions = [
    "Apa itu kecerdasan buatan (AI)?",
    "Apa perbedaan antara machine learning dan deep learning?",
    "Bagaimana cara kerja chat bot?",
    "Apakah chat bot bisa menggantikan pekerjaan manusia?",
    "Apa yang dimaksud dengan 'pengajaran mesin'?",
];

// Fungsi untuk menampilkan daftar pertanyaan
function showQuestions() {
    for (let i = 0; i < questions.length; i++) {
        const questionButton = document.createElement('button');
        questionButton.classList.add('question-button');
        questionButton.textContent = questions[i];
        chatBox.appendChild(questionButton);

        questionButton.addEventListener('click', () => {
            const selectedQuestion = questionButton.textContent;
            const botReply = botResponse(selectedQuestion);
            appendMessage(`Pertanyaan: ${selectedQuestion}`, false);
            setTimeout(() => {
                appendMessage(`Jawaban: ${botReply}`, true);
            }, 500);
        });
    }
}

// Fungsi untuk menampilkan pesan chat bot ke layar
function appendMessage(message, isBot) {
    const messageElement = document.createElement('div');
    messageElement.classList.add(isBot ? 'bot-message' : 'user-message');
    messageElement.textContent = message;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
}

// Respon otomatis dari chat bot berdasarkan pertanyaan pengguna
function botResponse(userQuestion) {
    switch (userQuestion) {
        case "Apa itu kecerdasan buatan (AI)?":
            return "Kecerdasan buatan (AI) adalah cabang ilmu komputer yang berfokus pada pengembangan sistem komputer yang dapat melakukan tugas-tugas yang biasanya memerlukan kecerdasan manusia, seperti pemrosesan bahasa alami, pengenalan gambar, dan pengambilan keputusan.";
        case "Apa perbedaan antara machine learning dan deep learning?":
            return "Machine learning adalah subbidang dari AI yang mencakup berbagai metode yang memungkinkan komputer untuk belajar dari data dan meningkatkan kinerjanya dalam tugas-tugas tertentu. Deep learning adalah salah satu jenis machine learning yang menggunakan jaringan saraf tiruan (neural networks) dengan banyak lapisan (deep) untuk pemrosesan data yang kompleks.";
        // Tambahkan lebih banyak pertanyaan dan jawaban di sini
        default:
            return "Maaf, saya tidak mengerti pertanyaan Anda.";
    }
}

// Menampilkan daftar pertanyaan saat halaman dimuat
showQuestions();

// Menangani klik tombol kirim
sendButton.addEventListener('click', () => {
    const userQuestion = userInput.value;
    if (userQuestion.trim() !== '') {
        const botReply = botResponse(userQuestion);
        appendMessage(`Pertanyaan: ${userQuestion}`, false);
        setTimeout(() => {
            appendMessage(`Jawaban: ${botReply}`, true);
        }, 500);
        userInput.value = '';
    }
});

// Menangani tombol "Enter"
userInput.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        sendButton.click();
    }
});

// Menampilkan chat bot saat launcher diklik
chatLauncher.addEventListener('click', () => {
    chatContainer.style.display = 'block';
    chatLauncher.style.display = 'none';
});

// Contoh pesan sambutan awal dari chat bot
setTimeout(() => {
    const welcomeMessage = "Halo! Saya adalah Chat Bot. Bagaimana saya bisa membantu Anda?";
    appendMessage(welcomeMessage, true);
}, 2000);
