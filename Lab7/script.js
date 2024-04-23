
function xemthem1(){
  const sanpham = document.getElementById("product1");
  sanpham.innerHTML = "<h1>Bánh Kem</h1>"+
  "<h3>200.000<span> đ</span></h3>"+
  `<input type="number" id="soLuongInput1" value="1" min="1" max="20">`;
  const xemThem = document.querySelector(".xem-them1");
  xemThem.parentNode.removeChild(xemThem);
  hopInput= document.getElementById("soLuongInput1");
  hopInput.style.padding = "10px";
  hopInput.style.width = "70px";
  hopInput.style.borderRadius = "100px";
  hopInput.style.border = "1px solid black";
  hopInput.style.marginTop = "10px";
}
function xemthem2(){
  const sanpham = document.getElementById("product2")
  sanpham.innerHTML = "<h1>Bánh Kem</h1>"+
  "<h3>200.000<span> đ</span></h3>"+
  `<input type="number" id="soLuongInput2" value="1" min="1" max="20">`;
  const xemThem = document.querySelector(".xem-them2");
  xemThem.parentNode.removeChild(xemThem);
  hopInput= document.getElementById("soLuongInput2");
  hopInput.style.padding = "10px";
  hopInput.style.width = "70px";
  hopInput.style.borderRadius = "100px";
  hopInput.style.border = "1px solid black";
  hopInput.style.marginTop = "10px";
}
function xemthem3(){
  const sanpham = document.getElementById("product3")
  sanpham.innerHTML = "<h1>Bánh Kem</h1>"+
  "<h3>200.000<span> đ</span></h3>"+
  `<input type="number" id="soLuongInput3" value="1" min="1" max="20">`;
  const xemThem = document.querySelector(".xem-them3");
  xemThem.parentNode.removeChild(xemThem);
  hopInput= document.getElementById("soLuongInput3");
  hopInput.style.padding = "10px";
  hopInput.style.width = "70px";
  hopInput.style.borderRadius = "100px";
  hopInput.style.border = "1px solid black";
  hopInput.style.marginTop = "10px";
}

var giohang = new Array();
function themvaogiohang(x){
    var boxsp = x.parentElement.children;
    var hinh = boxsp[0].src;
    var tensp = boxsp[1].children[0].innerHTML;
    var gia = boxsp[1].children[1].innerHTML;
    var soLuong = boxsp[1].children[2].value;

    var sp = new Array(hinh, tensp, soLuong, gia);
    const foundProductIndex = giohang.findIndex(item => item[0] === hinh);
    if (foundProductIndex !== -1) {
    giohang[foundProductIndex][2] = parseInt(giohang[foundProductIndex][2]) + parseInt(soLuong);}else{
    giohang.push(sp);}
    
    showcountsp();
    showcart();
    showmycart();
}
function showcountsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}
function showcart(){
    document.getElementById("tableCart").style.display = "block";
}
function showmycart() {
    var ttgh="";
    var total=0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = parseInt(giohang[i][2]) *  parseFloat(giohang[i][3].replace(".", ""));
       
        total+=tt;
        ttgh+=
        '<tr>' +
          '<td class="img"><img src="'+giohang[i][0]+'" alt=""></td>' +
            '<td>' + giohang[i][1] + '</td>' +
            '<td>' + giohang[i][2] + '</td>' +
            '<td>' + tt + ' đ</td>'+
            '<td><button class="remove-product" style="margin-top: unset;" data-product-index="' + i + '">Xóa</button><td>' +
        '</tr>';
    }
    ttgh+='<div class="total">'+
    '<Span>Tổng: <strong>' + total + ' đ</strong></Span>'+
  '</div>'+
  '';
  document.getElementById("mycart").innerHTML = ttgh;

  const removeButtons = document.querySelectorAll(".remove-product");
  for (const button of removeButtons) {
    button.addEventListener("click", function() {
      const productIndex = parseInt(this.dataset.productIndex);
      removeFromCart(productIndex);
    });
  }
}
function removeFromCart(productIndex) {
  // Validate product index to prevent errors
  if (productIndex < 0 || productIndex >= giohang.length) {
    console.error("Invalid product index:", productIndex);
    return;
  }

  // Remove the product from the giohang array
  giohang.splice(productIndex, 1);

  // Update cart display
  showmycart();
  showcountsp();

  // Optionally hide the cart if it becomes empty
  if (giohang.length === 0) {
    document.getElementById("tableCart").style.display = "none";
  }
}