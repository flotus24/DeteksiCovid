var product = [
	//rapid
	["Laboratorium Klinik Pramita", "Jl. Pasir Kaliki No.215, Sukabungah, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162", 400000, "rapid", "Rapid Test, Covid-19 Test", "RS/Lab-Pramita.jpg"],
	["Laboratorium Klinik Prodia", "Metro Indah Mall Blok B-5, Jl. MTC Tim. No.40286, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat", 255000, "rapid", "Rapid Test, Covid-19 Test", "RS/prodia.jpg"],
	["RSGM Maranatha Bandung", "Jl. Surya Sumantri No.65, Sukawarna, Kec. Sukajadi, Kota Bandung, Jawa Barat 40164", 350000, "rapid", "Rapid Test, Covid-19 Test", "RS/maranatha.jpg"],
	["Klinik Utama Mutiara Cikutra", "Jl. Cikutra No.115, Cikutra, Kota Bandung, Jawa Barat", 190000, "rapid", "Rapid Test, Covid-19 Test", "RS/mutiara.jpg"],
	["Rumah Sakit Immanuel", "Jl. Kopo No. 161, Situsaeur, Bojongloa Kidul, Kota Bandung, Jawa Barat 40117, Indonesia", 400000, "rapid", "Rapid Test, Covid-19 Test", "RS/imanuel.jpg"],
	["RSU Avisena Cimahi", "Jalan Melong No. 170, Kota Cimahi, Jawa Barat, 40534", 199000, "rapid", "Rapid Test, Covid-19 Test", "RS/avisena2.jfif"],
	["Biotest Laboratorium Klinik", "Jl. Naripan No.41, Bandung, Jawa Barat 40112, Indonesia", 340000, "rapid", "Rapid Test, Covid-19 Test", "RS/biotest.jpg"],
	["Laboratorium Klinik Kimia Farma", "Jl. Diponegoro No.40, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115", 200000, "rapid", "Rapid Test, Covid-19 Test", "RS/kimia.jpeg"],
	["RSUP Dr. Hasan Sadikin (RSHS)", "Jl. Pasteur No. 38 Pasteur, Sukajadi, Bandung, Jawa Barat", 149000, "rapid", "Rapid Test, Covid-19 Test", "RS/rshs.jpg"],
	["Santosa Hospital Bandung", "Jl. Kebon Jati No. 38 Andir, Kota Bandung, Jawa Barat", 350000, "rapid", "Rapid Test, Covid-19 Test", "RS/santosa.jpg"],
	["Rumah Sakit Santo Borromeus", "Jl. Ir. H.Djuanda No.100 Coblong, Kota Bandung, Jawa Barat 40132", 299000, "rapid", "Rapid Test, Covid-19 Test", "RS/borromeus.jfif"],
	["Bandara Husein Sastranegara", "Jalan Pajajaran No. 156, Husen Sastranegara, Cicendo, Jawa Barat 16142", 225000, "rapid", "Rapid Test, Covid-19 Test", "RS/husein.jpg"],

	//swab
	["Laboratorium Klinik Kimia Farma", "Jl. Diponegoro No.40, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115", 900000, "swab", "PCR Swab Test, Covid-19 Test", "RS/kimia.jpeg"],
	["Laboratorium Klinik Prodia", "Metro Indah Mall Blok B-5, Jl. MTC Tim. No.40286, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat", 2500000, "swab", "PCR Swab Test, Covid-19 Test", "RS/prodia.jpg"],
	["RS Umum Bungsu", "Jalan Veteran No.6, Kb. Pisang, Sumur Bandung, Kota Bandung, Jawa Barat", 1200000, "swab", "PCR Swab Test, Covid-19 Test", "RS/bungsu.jpg"],
	["RS Pendidikan Unpad", "Jl. Profesor Eyckman No. 38 Pasteur, Sukajadi, Bandung", 900000, "swab", "PCR Swab Test, Covid-19 Test", "RS/unpad.jpg"],
	["Santosa Hospital Bandung", "Jl. Kebon Jati No. 38 Andir, Kota Bandung, Jawa Barat", 2250000, "swab", "PCR Swab Test, Covid-19 Test", "RS/santosa.jpg"],
	["Rumah Sakit Immanuel", "Jl. Kopo No. 161, Situsaeur, Bojongloa Kidul, Kota Bandung, Jawa Barat 40117, Indonesia", 1650000, "swab", "PCR Swab Test, Covid-19 Test", "RS/imanuel.jpg"],
	["RS Advent", "Jl. Cihampelas No. 161 Cipaganti, Coblong, Bandung", 2200000, "swab", "PCR Swab Test, Covid-19 Test", "RS/advent.jpg"],
    ["Rumah Sakit Santo Borromeus", "Jl. Ir. H.Djuanda No.100 Coblong, Kota Bandung, Jawa Barat 40132", 3125000, "swab", "PCR Swab Test, Covid-19 Test", "RS/borromeus.jfif"],
	["RS Al Islam", "Jl. Soekarno-Hatta 644, Kota Bandung, Jawa Barat 40614", 1019000, "swab", "PCR Swab Test, Covid-19 Test", "RS/islam.jpg"],
    ["RS Hermina Arcamanik", "Jl. A.H. Nasution No. 50 Antapani Wetan, Antapani, Bandung", 1900000, "swab", "PCR Swab Test, Covid-19 Test", "RS/hermina2.jpg"],
    ["RS Hermina Pasteur", "Jl. Djunjunan No. 107 Pasteur, Cicendo, Kota Bandung", 1800000, "swab", "PCR Swab Test, Covid-19 Test", "RS/hermina.jpg"],
    ["RSUP Dr. Hasan Sadikin (RSHS)", "Jl. Pasteur No. 38 Pasteur, Sukajadi, Bandung, Jawa Barat", 900000, "swab", "PCR Swab Test, Covid-19 Test", "RS/rshs.jpg"]
];

//jika di local storage tidak ada pemesanan test, maka akan array pemesanan test akan ditambahkan
if (localStorage.getItem('product') === null) {
    localStorage.setItem('product', JSON.stringify(product));
}

var container;

for (var i = 0; i < product.length; i++) {
    if (product[i][3] == "rapid") {
        container = document.getElementById("flex-rapid");
    } else if (product[i][3] == "swab") {
        container = document.getElementById("flex-swab");
    }

    const flex_item = document.createElement('div');
    flex_item.setAttribute("class", "flex-item");

    const img = document.createElement('img');
    const description = document.createElement('h6');
    const name = document.createElement('p');
    const address = document.createElement('p');

    const price = document.createElement('span');
    price.setAttribute("class", "pull-right");
    price.append(description);

    const button = document.createElement('a');
    button.setAttribute("class", "btn");
    const textButton = document.createTextNode('Buat Janji');
    button.append(textButton);

    var session = localStorage.getItem('session_user');

    if (session != null) {//ada akun yang login
        button.setAttribute("href", "pemesanan.php");//direct ke pemesanan
    } else {
        button.setAttribute("href", "index.php#open-modal-login");//buka form login
    }

    img.src = product[i][5];
    description.innerHTML = product[i][4];
    name.innerHTML = product[i][0];
    address.innerHTML = product[i][1];
    price.innerHTML = product[i][2];

    description.append(price);
    flex_item.append(img, description, name, address,button);
    container.append(flex_item);
}