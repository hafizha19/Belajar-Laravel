let items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', './asset/logitek.jpg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', './asset/msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', './asset/genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', './asset/jerry.jpg']
]

let listItems = document.getElementById("listBarang");
let searchField = document.getElementById("keyword").value.toLowerCase();
let searchButton = document.getElementById("searchItem");
let formItem = document.getElementById("formItem");


let cartCount = 0;

function addToCart(){
    
    cartCount += 1;
    cart.innerHTML = `<i class="fas fa-shopping-cart"></i> ${cartCount}`
}

function showItems() {
    listItems.innerHTML = "";

    for (let i = 0; i < items.length; i++) {

        listItems.innerHTML +=
            `
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="` + items[i][4] + `" class="card-img-top" alt="Gambar" style="height:150px">
                    <div class="card-body">
                        <h5 class="card-title" id="itemName">` + items[i][1] + `</h5>
                        <p class="card-text" id="itemDesc" style="font-size: smaller">` + items[i][3] + `</p>
                        <p class="card-text">Rp ` + items[i][2] + `</p>
                        <a href="#" class="btn btn-primary" id="addCart" onclick="addToCart()">Tambahkan ke keranjang</a>
                    </div>
                </div>
            </div>`;
    }
    
    cart.innerHTML = `<i class="fas fa-shopping-cart"></i> ${cartCount}`
}

// let addCart = document.getElementById("addCart");
// addCart.addEventListener("click", addToCart)

function filteredItems() {
    let hasil = [];
    let splitString;
    searchField = document.getElementById("keyword").value.toLowerCase();

    for (let i = 0; i < items.length; i++) {
        splitString = items[i][1].toLowerCase();
        if (splitString.includes(searchField)) {
            hasil.push(items[i]);
        }
    }

    listItems.innerHTML = "";

    for (let j = 0; j < hasil.length; j++) {

        listItems.innerHTML +=
            `
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="` + hasil[j][4] + `" class="card-img-top" alt="Gambar" style="height:150px">
                    <div class="card-body">
                        <h5 class="card-title" id="itemName">` + hasil[j][1] + `</h5>
                        <p class="card-text" id="itemDesc" style="font-size: smaller">` + hasil[j][3] + `</p>
                        <p class="card-text">Rp ` + hasil[j][2] + `</p>
                        <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                    </div>
                </div>
            </div>`;
    }

}


showItems();