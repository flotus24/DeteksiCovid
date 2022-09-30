var product = [];
product = JSON.parse(localStorage.getItem('product'));

var product_name = document.getElementById("name");
var option;
var option_item;

var name;
var qty;
var category;
var price;
var image;
var sub_total;

var booking;
var person = localStorage.getItem('session_user');

if (localStorage.getItem('order') === null) {
    booking = [];
} else {
    booking = JSON.parse(localStorage.getItem('order'));
}

let index;

for (var i = 0; i < booking.length; i++) {
    if (booking[i].person_name == person) {
        index = i;
    }
}

if(index != undefined){
    document.getElementById("hidden_button").style.display = 'block';
}

function showProdukByCategory(select) {//menampilkan jenis test dan lokasi
    product_name.options.length = 0;
    for (var i = 0; i < product.length; i++) {
        if (product[i][3] == select.value) {
            option = document.createElement("OPTION");
            option.setAttribute("value", product[i][0]);
            option_item = document.createTextNode(product[i][0]);
            option.appendChild(option_item);
            product_name.appendChild(option);
        }
    }
    showImage(product_name);
}

function showImage(select) {//menampilkan gambar lokasi rumah sakit dan harga
    for (var i = 0; i < product.length; i++) {
        if (select.value == product[i][0]) {
            document.getElementById("image_product").src = product[i][5];
            document.getElementById('hidden_div').style.display = "block";
            document.getElementById("price").value = product[i][2];
        }
    }
}

function addItem() {
    name = document.getElementById("name").value;
    qty = parseInt(document.getElementById("quantity").value);
    category = document.getElementById("category").value;
    price = parseInt(document.getElementById("price").value);
    image = document.getElementById("image_product").src;

    sub_total = price * qty;

    if (localStorage.getItem('order') === null || index == undefined) {
        booking.push({
            "person_name": person,
            "rs": [[image, name, price, category, qty, sub_total]],
            "total": sub_total
        });
    } else {
        if (booking[index].person_name == person) {
            booking[index].rs.push([image, name, price, category, qty, sub_total]);
            booking[index].total = booking[index].total + sub_total;
        } else {
            booking.push({
                "person_name": person,
                "rs": [[image, name, price, category, qty, sub_total]],
                "total": sub_total
            });
        }
    }
    localStorage.setItem('order', JSON.stringify(booking));
}


var table = document.getElementById("table_order");
for (var i = 0; i < booking.length; i++) {
    if (booking[i].person_name == person) {

        for (var j = 0; j < booking[i].rs.length; j++) {
            var tr = document.createElement("TR");
            for (var k = 0; k < booking[i].rs[j].length; k++) {
                var td = document.createElement("TD");
                var td_text = document.createTextNode(booking[i].rs[j][k]);

                if (k == 0) {
                    var img = document.createElement("IMG");
                    img.setAttribute("width", "150")
                    img.src = booking[i].rs[j][k];
                    td.appendChild(img);
                } else {
                    td.appendChild(td_text);
                }

                tr.appendChild(td);
            }

            table.appendChild(tr);
        }
    }
}


function clearData() {
    localStorage.removeItem("order");
    booking.splice(index,1);
    localStorage.setItem('order', JSON.stringify(booking));
    location.href = "http://localhost/TUBES/pemesanan.php";
}

function checkOut() {
     var total;
     for (var i = 0; i < booking.length; i++) {
         if (booking[i].person_name == person) {
             total = booking[i].total;

             for (var j = 0; j < booking[i].rs.length; j++) {
                 var table = document.createElement("TABLE");
                 table.setAttribute("class", "order-table");
                 table.setAttribute("id", "order-table");

                 var tr1 = document.createElement("TR");

                 var td1 = document.createElement("TD");
                 var image = document.createElement("IMG");
                 image.src = booking[i].rs[j][0];
                 image.setAttribute("class", "full-width");

                 td1.appendChild(image);

                 var td2 = document.createElement("TD");

                 var span1 = document.createElement("SPAN");
                 span1.setAttribute("class", "thin");

                 var span1_text = document.createTextNode(booking[i].rs[j][1]);
                 span1.appendChild(span1_text);

                 var span2 = document.createElement("SPAN");
                 span2.setAttribute("class", "thin small");

                 var span2_text = document.createTextNode("Jenis Test : " + booking[i].rs[j][3]);
                 span2.appendChild(span2_text);

                 var span3 = document.createElement("SPAN");
                 span3.setAttribute("class", "thin small");

                 var span3_text = document.createTextNode("Jumlah : " + booking[i].rs[j][4]);
                 span3.appendChild(span3_text);

                 var br = document.createElement("BR");
                 var br2 = document.createElement("BR");

                 td2.appendChild(span1);
                 td2.appendChild(br);
                 td2.appendChild(span2);
                 td2.appendChild(br2);
                 td2.appendChild(span3);

                 tr1.appendChild(td1);
                 tr1.appendChild(td2);

                 var td3 = document.createElement("TD");

                 var div = document.createElement("div");
                 div.setAttribute("class", "price");

                 var div_text = document.createTextNode("Rp " + booking[i].rs[j][2]);
                 div.appendChild(div_text);

                 td3.appendChild(div);

                 var tr2 = document.createElement("TR");
                 tr2.appendChild(td3);

                 table.appendChild(tr1);
                 table.appendChild(tr2);

                 var line = document.createElement("div");
                 line.setAttribute("class", "line");
                 document.getElementById("order-info").appendChild(table, line);

                 document.getElementById("order-info").appendChild(table);
                 document.getElementById("order-info").appendChild(line);

             }
         }
     }

     document.getElementById("total_price").innerHTML = "Rp " + total;

 }


 function payment() {
     location.href = "http://localhost/TUBES/index.php";
     alert("Terima Kasih Telah Melakukan Reservasi melalui DeteksiCovid!");
     localStorage.removeItem("order");
     booking.splice(index,1);
     localStorage.setItem('order', JSON.stringify(booking));
    
 }

function deleterow(){
    var Table = document.getElementById("order-table");
    Table.innerHTML = "";
}