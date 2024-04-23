function xemthem1() {
    const card = document.getElementById("card")
    card.innerHTML = `
    <h4 class="card-title">Bông lan trứng muối</h4>
    <input type="number" value="1" min="1" max="50" class="input-group-text">
    <h6 class="card-text mt-2"><span>250.000</span><span> đ</span></h6>`
    const xemThem = document.querySelector("#xem-them1")
    xemThem.parentNode.removeChild(xemThem)
}
function xemthem2() {
    const card = document.getElementById("card1")
    card.innerHTML = `
    <h4 class="card-title">Bông lan trứng muối</h4>
    <input type="number" value="1" min="1" max="50" class="input-group-text">
    <h6 class="card-text mt-2"><span>250.000</span><span> đ</span></h6>`
    const xemThem = document.querySelector("#xem-them2")
    xemThem.parentNode.removeChild(xemThem)
}
function xemthem3() {
    const card = document.getElementById("card2")
    card.innerHTML = `
    <h4 class="card-title">Bông lan trứng muối</h4>
    <input type="number" value="1" min="1" max="50" class="input-group-text">
    <h6 class="card-text mt-2"><span>250.000</span><span> đ</span></h6>`
    const xemThem = document.querySelector("#xem-them3")
    xemThem.parentNode.removeChild(xemThem)
}
function xemthem4() {
    const card = document.getElementById("card3")
    card.innerHTML = `
    <h4 class="card-title">Bông lan trứng muối</h4>
    <input type="number" value="1" min="1" max="50" class="input-group-text">
    <h6 class="card-text mt-2"><span>250.000</span><span> đ</span></h6>`
    const xemThem = document.querySelector("#xem-them4")
    xemThem.parentNode.removeChild(xemThem)
}

var giohang = new Array()
function addtocart(x) {
    var card = x.parentElement.children
    var hinh = card[0].src
    var tensp = card[1].children[0].innerText
    var soluong = card[1].children[1].value
    var gia = card[1].children[2].children[0].innerText

    var sp = new Array(hinh,tensp,soluong,gia)
    const foundProductIndex = giohang.findIndex(item => item[0] === hinh)
    if(foundProductIndex !== -1){
        giohang[foundProductIndex][2] = parseInt(giohang[foundProductIndex][2]) + parseInt(soluong);}else{
            giohang.push(sp);
        }
    console.log(giohang)
    
    countsp()
    showcart()
    showmycart()
}
function showcart() {
    document.getElementById("tableCart").style.display = "block"
}
function countsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}
function showmycart() {
    var ttgh="";
    var tong=0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = parseInt(giohang[i][2]) * parseFloat(giohang[i][3].replace(".", ""))
        tong += tt;
        ttgh+='<tr>'+
        '<td>'+ (i + 1) +'</td>'+
        '<td><img class="w-50" src="'+ giohang[i][0] +'" alt="#"></td>'+
        '<td>'+ giohang[i][1] +'</td>'+
        '<td>'+ giohang[i][2] +'</td>'+
        '<td>'+ tt +' đ</td>'+
        '<td><button class="btn btn-secondary">Xóa</button></td>'+
    '</tr>';
    }
    ttgh+='<tr>'+
    '<td></td><td></td><td></td><td></td>'+
    '<td><strong>Tổng:</strong> '+ tong +' đ</td><td></td>'+
    '</td>';
    document.getElementById("mycart").innerHTML = ttgh;
    const removeButtons = document.querySelectorAll(".btn-secondary")
    for (const button of removeButtons) {
       button.addEventListener("click", function(){
        const productIndex = parseInt(this.dataset.productIndex)
        removeFromCart(productIndex)
       })
    }
}
function removeFromCart(productIndex){
    if (productIndex < 0 || productIndex >= giohang.length) {
        console.error("Invalid product index:", productIndex);
        return;
    }
    giohang.splice(productIndex, 1);
    showmycart();
    countsp();
    if (giohang.length === 0) {
        document.getElementById("tableCart").style.display = "none"
    }
}