// Bài 1
// Nhập 2 số từ màn hình
alert('Tính biểu thức của 2 số');
const num1 = parseFloat(prompt("Nhập số thứ 1: "));
const num2 = parseFloat(prompt("Nhập số thứ 2: "));

function tong2so(num1, num2) {
  return num1 + num2;
}
const sum = tong2so(num1,num2);
function hieu2so(num1, num2) {
  return num1 - num2;
}
const difference = hieu2so(num1,num2);
function thuong2so(num1, num2) {
  return num1 / num2;
}
const quotient = thuong2so(num1, num2);
function tich2so(num1, num2) {
  return num1 * num2;
}
const product = tich2so(num1, num2);


alert(`Tổng: ${sum}`);
alert(`Hiệu: ${difference}`);
alert(`Thương: ${quotient}`);
alert(`Tích: ${product}`);

//Bài 2
function Dangxuat() {
    let confirmed = confirm('Bạn xác nhận đăng xuất?');
    if(confirmed === true){
        alert('Đăng xuất thành công!');
    }else{
        alert('Bạn đã hủy bỏ đăng xuất!')
    }
}
//Bài 3
function sumEvenNumbers(numbers) {
    let sum = 0;
    for (let i = 0; i < numbers.length; i++) {
      let num = numbers[i];
      if (num % 2 === 0) {
        sum += num;
      }
    }
    return sum;
  }
  const input = prompt("Nhập một dãy số, các số cách nhau 1 dấu phẩy");
  const numbers= input.split(",").map(Number);
  const totalEvenNumbers = sumEvenNumbers(numbers);
  alert(`Tổng các số chẵn trong dãy là: ${totalEvenNumbers}`);

//Bài 4
function dangky() {
    let confirmed = confirm('Bạn xác nhận đăng ký?');
    if(confirmed === true){
        alert('Đăng ký thành công!');
    }else{
        alert('Bạn đã hủy bỏ đăng ký!')
    }
}