function purchase() {
    var quantityInput = document.getElementById('quantityInput').value;
    const unitPrice = 200000; 
    var totalPrice = quantityInput * unitPrice;
    document.getElementById('totalQuantity').innerHTML = "Tổng số lượng: " + quantityInput;
    document.getElementById('totalPrice').innerHTML = "Tổng giá trị đơn hàng: " + totalPrice;
  }
  