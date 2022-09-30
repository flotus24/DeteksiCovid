$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})


  // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

//login transition
const toggleForm = () => {
    const container = document.querySelector('.container');
    container.classList.toggle('active');
};


var session = localStorage.getItem('session_user');//mengambil key session-user

if (session != null) {//jika session tidak kosong
    document.getElementById("set_user").href = "#open-modal-logout";
    document.getElementById("pesan").href = "pemesanan.php";
} else {
    document.getElementById("set_user").href = "#open-modal-login";
    document.getElementById("pesan").href = "#open-modal-login";
}

function addLocalStorage() {//register
    var iusername = document.getElementById("username").value;//ngambil value username pakai id yang di form
    var ipassword = document.getElementById("password").value;//ngambil value password pakai id yang di form


    let user;//variabel user
    if (localStorage.getItem('user') === null) {//cek di local storage mengambil key user, jika tidak ada user belum ada
        user = [];//bikin array
    } else {//jika user ada
        user = JSON.parse(localStorage.getItem('user'));//konversi JSON di local storage ke array
    }
    
    var test = 0;//untuk mengecek di local storage
    for (var i = 0; i < user.length; i++) {//sepanjang data array user
        if (user[i][0] == iusername && user[i][1] == ipassword) {//jika username dan password sama
            test = 1;
        }
    }

    if (test == 0) {//jika salah
        alert('Data Berhasil Ditambahkan');
        user.push([iusername, ipassword]);//data username dan password dimasukan ke array user
        localStorage.setItem('user', JSON.stringify(user));//menyimpan data baru dengan key 'user', konversi array ke JSON
    }else{
        alert('Data Gagal Ditambahkan');
    }
    
}

function getlocalStorage() {//login
    var iusername = document.getElementById("usernameLogin").value;//ngambil value username pakai id yang di form
    var ipassword = document.getElementById("passwordLogin").value;//ngambil value password pakai id yang di form
    let user = [];//variabel user
    user = JSON.parse(localStorage.getItem('user'));//mengambil key user yang ada di local storage, semua data di konversi ke array user

    var test = 0;//untuk mengecek di local storage
    for (var i = 0; i < user.length; i++) {//sepanjang data array user
        if (user[i][0] == iusername && user[i][1] == ipassword) {//jika username dan password sama
            test = 1;
            localStorage.setItem('session_user', iusername);//masukin data username yang keynya session user
        }
    }

    if (test == 0) {//jika salah
        alert('Username atau Password yang Anda Masukan Salah');
    }else{
        alert('Berhasil Login');
    }
}


function logout() {
    localStorage.removeItem('session_user');//menghapus session user pada local storage
    alert('Berhasil Logout');//jika sudah berhasil
}