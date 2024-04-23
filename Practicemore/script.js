function more1() {
    document.getElementById("cart1").innerHTML = `
    <h1 class="title">Bánh kem</h1>
    <input type="number" id="soLuong" class="input-group-text" value="1" min="1" max="20">
    <h2 class="content">200.000 <span> đ</span></h2>
    `;
    const xemthem = document.querySelector("#xemthem1")
    xemthem.parentNode.removeChild(xemthem)
}
function more2() {
    document.getElementById("cart2").innerHTML = `
    <h1 class="title">Bánh kem</h1>
    <input type="number" id="soLuong" class="input-group-text" value="1" min="1" max="20">
    <h2 class="content">200.000 <span> đ</span></h2>
    `;
    const xemthem = document.querySelector("#xemthem2")
    xemthem.parentNode.removeChild(xemthem)
}
function more3() {
    document.getElementById("cart3").innerHTML = `
    <h1 class="title">Bánh kem</h1>
    <input type="number" id="soLuong" class="input-group-text" value="1" min="1" max="20">
    <h2 class="content">200.000 <span> đ</span></h2>
    `;
    const xemthem = document.querySelector("#xemthem3")
    xemthem.parentNode.removeChild(xemthem)
}
function more4() {
    document.getElementById("cart4").innerHTML = `
    <h1 class="title">Bánh kem</h1>
    <input type="number" id="soLuong" class="input-group-text" value="1" min="1" max="20">
    <h2 class="content">200.000 <span> đ</span></h2>
    `;
    const xemthem = document.querySelector("#xemthem4")
    xemthem.parentNode.removeChild(xemthem)
}

var giohang = new Array()
function addtocart(x) {
    var cart = x.parentElement.children
    var hinh = cart[0].src
    var tensp = cart[1].children[0].innerText
    var soluong = cart[1].children[1].value
    var gia = cart[1].children[2].innerText
    var sp = new Array(hinh,tensp,soluong,gia)
    const foundProductIndex = giohang.findIndex(item => item[0] === hinh)
    if (foundProductIndex !== -1) {
        giohang[foundProductIndex][2] = parseInt(giohang[foundProductIndex][2]) + parseInt(soluong)
    }else{
        giohang.push(sp)
    }
    
    countsp()
    showcart()
    showmycart()
}
function countsp() {
    document.getElementById("countsp").innerHTML = giohang.length
}
function showcart() {
    document.getElementById("tableCart").style.display = "block"
}
function showmycart() {
    var ttgh="";
    var tong=0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = parseInt(giohang[i][2]) * parseFloat(giohang[i][3].replace(".", ""))
        tong += tt
        ttgh += '<tr>'+
        '<td>'+(i+1)+'</td>'+
        '<td><img src="'+giohang[i][0]+'" alt=""></td>'+
        '<td>'+giohang[i][1]+'</td>'+
        '<td>'+giohang[i][2]+'</td>'+
        '<td>'+tt+'</td>'+
        '<td><button id="remove-produt">Xóa</button></td>'+
    '</tr>';
    }
    ttgh+= '<tr>'+
    
    '<td></td>'+
    '<td>Tổng: '+ tong +' đ</td>'+
    '</td>';
    document.getElementById("mycart").innerHTML = ttgh
}