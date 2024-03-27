function binhPhuongSo() {
  var numberInput = document.getElementById('numberInput').value;
  var resultText = document.getElementById('resultText');
  var square = Math.pow(numberInput, 2);
  resultText.textContent = `Bình phương của số ${numberInput} là: ` + square;
}
