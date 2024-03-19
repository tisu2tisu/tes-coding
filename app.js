var klubElements = document.getElementsByClassName('klub');
getKlub(); // Call getKlub() function after the change event
for (var i = 0; i < klubElements.length; i++) {
  klubElements[i].addEventListener('change', function() {
    this.selectedIndex = this.options.selectedIndex;
    this.value = this.options[this.selectedIndex].value;

  });
}

function inputData() {

    var form = new FormData();
    const nama_klub = document.getElementById('nama_klub').value;
    const kota_klub = document.getElementById('kota_klub').value;
   
    teks(nama_klub);

    form.append('nama_klub', nama_klub);
    form.append('kota_klub', kota_klub);
    form.append('tipe',"inputdata");

    axios.post('func.php', form)
    .then(function (response) {
        console.log('Response:', response.data);

        if(response.data === 'Duplicate'){

            document.getElementById('success').classList.add('d-none');
            document.getElementById('val_form').classList.remove('d-none');
            document.getElementById('val_form').textContent = "Nama klub sudah ada.";
            throw new Error("Duplicate");
        }
        document.getElementById('submit').disabled = true;
        document.getElementById('success').classList.remove('d-none');
        document.getElementById('success').textContent = "Berhasil menyimpan data.";
        setTimeout(function() {
            document.getElementById('submit').disabled = false;
            document.getElementById('success').classList.add('d-none');
        }, 3000);        

    })
    .catch(function (error) {
        console.log(error);
    });
}

    function getKlub(){
        var form = new FormData();
        form.append('tipe',"getKlub");

        axios.post('func.php', form)
        .then(function (response) {
            var klubSelects = document.getElementsByClassName('klub');

            var options = '';
            var data = response.data;
            console.log(response.data);
            data.forEach(function(item) {
                options += `<option value="${item.nama_klub}">${item.nama_klub}</option>`;
            });

           
            for (var i = 0; i < klubSelects.length; i++) {
                klubSelects[i].innerHTML = options;
               
              }
           
              
     
        })
        .catch(function (error) {
            console.log(error);
        });
}


function teks(input){
     if (input === "") {
        document.getElementById('val_form').classList.remove('d-none');
        document.getElementById('val_form').textContent = "Nama Klub / Kota Klub tidak boleh ada yang kosong.";
        throw new Error("kosong");
    
     }
     

     if (/^[A-Za-z ]+$/.test(input)) {
        
         return true;
     } else {
            document.getElementById('val_form').classList.remove('d-none');
            document.getElementById('val_form').textContent = "Nama Klub / Kota Klub hanya boleh teks.";
            throw new Error("hanya boleh text");
     }
}

function inputScoreSingle(){
    const klub1 = document.getElementById('klub1').value;
    const klub2 = document.getElementById('klub2').value;
    const skor1 = document.getElementById('skor1').value;
    const skor2 = document.getElementById('skor2').value;

    var form = new FormData();

   

    form.append('klub1', klub1);
    form.append('klub2', klub2);
    form.append('skor1', skor1);
    form.append('skor2', skor2);
    form.append('tipe',"inputScoreSingle");

    axios.post('func.php', form)
    .then(function (response) {
        console.log(response.data);
       
          
 
    })
    .catch(function (error) {
        console.log(error);
    });

}
