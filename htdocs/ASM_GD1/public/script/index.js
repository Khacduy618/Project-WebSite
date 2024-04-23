const inputStok = document.querySelector('.input-stok');
  const btnTru = document.querySelector('.btn-tru');
  const btnCong = document.querySelector('.btn-cong');
  btnTru.addEventListener('click', () => {
    if (inputStok.value > 1) {
      inputStok.value = parseInt(inputStok.value) - 1;
    }
  });

  btnCong.addEventListener('click', () => {
    inputStok.value = parseInt(inputStok.value) + 1;
  });