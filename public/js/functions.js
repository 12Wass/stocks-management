function fetchProductByBarcode(){
    let searchValue = document.getElementById('es_barcode').value;
    if (searchValue.length === 12){
        let jx = new XMLHttpRequest()
        jx.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let div = document.getElementById('searchResults');
                let hiddenInput = document.getElementById('es_id');
                document.getElementById('es_button_send').disabled = false;
                let rs = JSON.parse(this.responseText);
                div.innerHTML = "<span class='badge badge-pill badge-primary'>" + rs.name + "</span>"
                hiddenInput.value = rs.id;
            }
        };
        jx.open("POST", "http://wassimdahmane.fr/product/search", true);
        jx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        jx.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        jx.send("&searchValue=" + searchValue);
    }
}

function generateBarcode(){
    let searchValue = document.getElementById('product_barcode').value;
    if (searchValue.length === 12 || window.location.pathname.includes('edit') === false){
        let jx = new XMLHttpRequest()
        jx.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let div = document.getElementById('generated_barcode');
                let rs = JSON.parse(this.responseText);
                div.innerHTML = rs.image;
                if (rs.code !== false){
                    let bc = document.getElementById('product_barcode');
                    bc.value = rs.code;
                }
            }
        };
        jx.open("POST", "http://wassimdahmane.fr/product/generate_barcode", true);
        jx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        jx.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        if (window.location.pathname.includes('edit')){
            jx.send("&searchValue=" + searchValue + "&isEdit=" + true);
        } else {
            jx.send("&searchValue=" + searchValue);
        }
    } else {
        alert('La longueur du code-barre doit être de 12 caractères');
    }
}

function addToTable(){
    let select = document.getElementById("product_select");
    let selectedProduct = select.options[select.selectedIndex].text;
    let quantity = document.getElementById('quantity').value;

    if (selectedProduct !== undefined && quantity !== undefined){
        let append = '<tr><td id="' + select.value + '">' + selectedProduct +'</td><td>' + quantity + '</td></tr>';
        $("#productsTable tbody").append(append);
    }
}

function generateLabels() {
    let TableData = [];
    $('#productsTable tr').each(function (row, tr) {
        TableData[row] = {
            "productId": $(tr).find('td:eq(0)').attr('id'),
            "productName": $(tr).find('td:eq(0)').text(),
            "productQuantity": $(tr).find('td:eq(1)').text(),
        }
    });
    TableData.shift();
    if (TableData.length > 0) {
        let data = JSON.stringify(TableData);
        let jx = new XMLHttpRequest()
        jx.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                let response = JSON.parse(this.response);
                if (response.success === true){
                    window.location.replace('http://wassimdahmane.fr/label/download');
                }
            }
        };
        jx.open("POST", "http://wassimdahmane.fr/label/generateWord", true);
        jx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        jx.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        jx.send("&data=" + data);
    }
}
