const formTinhDiem = document.getElementById("form-tinh-diem");
const ketQua = document.getElementById("ket-qua");

formTinhDiem.addEventListener("submit", function(event) {
    event.preventDefault();
    
    const hoTen = document.getElementById("ho-ten").value;
    const diemMidterm = parseFloat(document.getElementById("diem-midterm").value);
    const diemFinal = parseFloat(document.getElementById("diem-final").value);
    const diemBonus = parseFloat(document.getElementById("diem-bonus").value) || 0;

    const diemTB = (diemMidterm + diemFinal + diemBonus) / 3;

    document.getElementById("ket-qua").style.display = "block";
    
    ketQua.innerHTML = `
        <h2>Kết quả</h2>
        <p>Họ tên: ${hoTen}</p>
        <p>Điểm giữa kì: ${diemMidterm}</p>
        <p>Điểm cuối kì: ${diemFinal}</p>
        <p>Điểm rèn luyện: ${diemBonus}</p>
        <p>Điểm trung bình: ${diemTB.toFixed(2)}</p>
        <p>Xếp loại: ${xepLoai(diemTB)}</p>
    `;
});

function xepLoai(diemTB) {
    if (diemTB >= 9) {
        return "Xuất sắc";
    } else if (diemTB >= 8) {
        return "Giỏi";
    } else if (diemTB >= 7) {
        return "Khá";
    } else if (diemTB >= 5) {
        return "Trung bình";
    } else {
        return "Yếu";
    }
}
function cancel() {
    let confirmed = confirm('Bạn xác nhận hủy?');
    const diemBonus = parseFloat(document.getElementById("diem-bonus").value) || 0;
    if(confirmed === true ){
        alert('Đăng hủy thành công!');
        document.getElementById("ho-ten").value = "";
        document.getElementById("diem-midterm").value = "";
        document.getElementById("diem-final").value = "";
        document.getElementById("diem-bonus").value = "";
        document.getElementById("ket-qua").style.display = "none";
    }
}
function book() {
    const ketQua = document.getElementById("container");
  
    ketQua.style.display = "block";
  
    ketQua.innerHTML = `
    <h1>Danh sách sách</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div id="#ADD8E6" class="card h-100">
                <img id="0.3" src="images.png" class="card-img-top" alt="Sách 1">
                <div class="card-body">
                    <h5 id="40px" class="card-title">Tên sách 1</h5>
                    <p class="card-text">Tác giả 1</p>
                    <button onclick="changestyles()" class="btn btn-primary">Chi tiết</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div id="yellow" class="card h-100">
                <img id="0.1" src="images.png" class="card-img-top" alt="Sách 2">
                <div class="card-body">
                    <h5 id="40px" class="card-title">Tên sách 2</h5>
                    <p class="card-text">Tác giả 2</p>
                    <button onclick="changestyles()" class="btn btn-primary">Chi tiết</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div id="pink" class="card h-100">
                <img id="0.5" src="images.png" class="card-img-top" alt="Sách 3">
                <div class="card-body">
                    <h5 id="40px" class="card-title">Tên sách 3</h5>
                    <p class="card-text">Tác giả 3</p>
                    <button onclick="changestyles()" class="btn btn-primary">Chi tiết</button>
                </div>
            </div>
        </div>
    </div>
    `;
  }
  function changestyles() {
    divs=document.getElementsByTagName("div");
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = divs[i].id;
    }
    imgs=document.getElementsByTagName("img");
    for (let i = 0; i < imgs.length; i++) {
        imgs[i].style.opacity = imgs[i].id;
    }
    h5s=document.getElementsByTagName("h5");
    for (let i = 0; i < imgs.length; i++) {
        h5s[i].style.fontSize = h5s[i].id;
  }
  }