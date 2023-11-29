document.addEventListener("DOMContentLoaded", function () {

    // Diagnosis Chat GPT
    const form = document.getElementById("chat-form");
    const inputs = document.querySelectorAll(".form-control");
    const messages = document.getElementById("isi-diagnosis");
    const loading = document.getElementById("loading");
    const logoTextAnalisis = document.getElementById("logo-text-analisis");
    const pdiagnosis = document.getElementById("p-diagnosis");
    const submit_button = document.getElementById("submit-button");
    const apiKey = "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";
  
    logoTextAnalisis.style.display = "block";
    pdiagnosis.style.display = "flex";
  
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
  
      // Pengecekan input
      const input1 = inputs[0].value;
      const input2 = inputs[1].value;
      const input3 = inputs[2].value;
  
      if (input1 === "" || input2 === "" || input3 === "") {
        Swal.fire({
          icon: 'error',
          title: 'Pilihan Kosong!',
          text: 'Anda Harus Memilih Semua Pilihan!',
          confirmButtonColor: "#e94040",
        })
        return;
      }
  
      const message = `Saya memilih jenis ternak ${input1}, dengan memilih hasil ternak yaitu ${input2}, dan saya ingin mencari hasil ternak ${input2} yang ${input3}. Berikan penjelasan terkait cara memilih hasil ternak ${input2} yang ${input3}.`;
  
  
      loading.style.display = "block";
      logoTextAnalisis.style.display = "none";
      submit_button.style.backgroundColor = "#7FC334";
  
      // Axios Library untuk membuat POST request ke OpenAI API chatgpt
      const response = await axios.post(
        "https://api.openai.com/v1/completions",
        {
          prompt: message,
          model: "text-davinci-003",
          temperature: 0,
          max_tokens: 300,
          top_p: 1,
          frequency_penalty: 0.0,
          presence_penalty: 0.0,
        },
        {
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${apiKey}`,
          },
        }
      );
      const chatbotResponse = response.data.choices[0].text;
  
      
      loading.style.display = "none";
      pdiagnosis.style.display = "none";
      logoTextAnalisis.style.display = "block";
  
      Swal.fire({
        icon: "success",
        title: "Selesai!",
        text: "Hasil Jawaban Ada di Bawah.",
        confirmButtonColor: "#7FC334",
      });
  
      messages.innerHTML = `<div class="message bot-message">
        <span>${chatbotResponse}</span>
      </div>`;
    });
  
    // Select Option Logic
    document.getElementById('jenis_ternak').addEventListener('change', function() {
      var selectedOption = this.value;
      var hasilTernakSelect = document.getElementById('hasil_ternak');
    
      hasilTernakSelect.innerHTML = '';
      
      var optionPlaceholder = document.createElement('option');
      optionPlaceholder.disabled = true;
      optionPlaceholder.selected = true;
      optionPlaceholder.textContent = 'Hasil Ternak Apa yang ingin ditanyakan?';
      hasilTernakSelect.appendChild(optionPlaceholder);
    
      if (selectedOption === 'Sapi') {
        var optionDaging = document.createElement('option');
        optionDaging.value = 'Daging';
        optionDaging.textContent = 'Daging';
        hasilTernakSelect.appendChild(optionDaging);
  
        var optionSusu = document.createElement('option');
        optionSusu.value = 'Susu';
        optionSusu.textContent = 'Susu';
        hasilTernakSelect.appendChild(optionSusu);
  
  
      } else if(selectedOption === 'Kambing') {
        var optionDaging = document.createElement('option');
        optionDaging.value = 'Daging';
        optionDaging.textContent = 'Daging';
        hasilTernakSelect.appendChild(optionDaging);
  
        var optionSusu = document.createElement('option');
        optionSusu.value = 'Susu';
        optionSusu.textContent = 'Susu';
        hasilTernakSelect.appendChild(optionSusu);
  
      } else if (selectedOption === 'Ayam'){
        var optionDaging = document.createElement('option');
        optionDaging.value = 'Daging';
        optionDaging.textContent = 'Daging';
        hasilTernakSelect.appendChild(optionDaging);
  
        var optionTelur = document.createElement('option');
        optionTelur.value = 'Telur';
        optionTelur.textContent = 'Telur';
        hasilTernakSelect.appendChild(optionTelur);
  
      }
    });
  });
  