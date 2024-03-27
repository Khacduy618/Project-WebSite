//Bài 1
//1. Khai báo let
let name = "Duy";
//2. Khai báo const
const age = 22;
//3. Tạo biến và gán giá trị chuỗi
let hienthi = `Xin chào, tôi là ${name} và tôi ${age} tuổi.`;
console.log(hienthi);
//.load Lab-2_NguyenKhacDuy_PS37404.js
let a = 0.873457689;
//a. xác định xem tham số
console.log(isNaN(a));
//b. chuyển num thành string, giữ lại 3 số thập phân
let a1 = a.toFixed(3);
console.log(a1);
//c. chuyển num thành string, giữ lại 5 số thập phân
let a2 = a.toFixed(5);
console.log(a2);
//d. làm tròn lên 2 chữ số tp
let a3 = a.toPrecision(2);
console.log(a3);
//e.làm tròn lên 5 chữ số tp
let a4 = a.toPrecision(5);
console.log(a4);
//bài 3
let a5 = "Sinh viên Công nghệ thông tin";
let a6 = "FPT Polytechnic";
//a. truy xuất 4 ký tự đầu của mỗi chuỗi
alert(a5.substring(0,4));
alert(a6.substring(0,4));
//b. nối 2 chuổi , sử dụng -
let text = a5.concat("-",a6);
console.log(text);
//c. Viết hoa tất cả các chữ cái của A, viết thường các chữ cái của B rồi nối 2 chuỗi này lại, dùng dấu “ “
let text1 = a5.toUpperCase();
console.log(text1);
let text2 = a6.toLowerCase();
console.log(text2);
let text3 = text1.concat(" ",text2);
console.log(text3);
//bài 4  Nhập 2 số từ màn hình, viết chương trình tính tổng, hiệu, thương, tích của 2 số đó. 
function inputNum() {
    const num1 =  parseFloat(prompt("Nhập số a"));
    const num2 = parseFloat(prompt("Nhập số b"));
    return [num1, num2];
}
function calculate(num1, num2) {
    const sum = num1 + num2;
    const difference = num1 - num2;
    const quotient = num1 / num2;
    const product = num1 * num2;
    return {
      sum,
      difference,
      quotient,
      product,
    };
}
const [num1, num2] = inputNum();
const results = calculate(num1, num2);
console.log(`Tổng: ${results.sum}`);
console.log(`Hiệu: ${results.difference}`);
console.log(`Thương: ${results.quotient}`);
console.log(`Tích: ${results.product}`);
//bài 5 
const diemSinhVien = [9.5, 8.5, 9.0, 9.0, 10];
function DiemTrungBinh(diem) {
  let tongDiem = 0;
  for (let i = 0; i < diem.length; i++) {
    tongDiem += diem[i];
  }
  return tongDiem / diem.length;
}
const diemTrungBinh = DiemTrungBinh(diemSinhVien);
console.log(`Điểm trung bình của lớp là: ${diemTrungBinh}`);