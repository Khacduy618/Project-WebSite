function tinhdiemTB() {
    document.getElementById("xethocba").style.display = "block";
}
function dangkyduthi() {
    document.getElementById("xethocba").style.display = "none";
}
function submit() {
    const toan = parseFloat(document.getElementById("toan").value);
    const van = parseFloat(document.getElementById("van").value);
    const anh = parseFloat(document.getElementById("anh").value);
    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;
    const xettuyen = document.querySelector('input[name="xettuyen"]:checked').value;
    if (name === "") {
        alert("Vui lòng nhập tên!")
        return false;
    }

    if (phone === "") {
        alert("Vui lòng nhập số điện thoại!")
        return false;
    }
    if (xettuyen === undefined) {
        alert("Vui lòng chọn yêu cầu!");
        return false;
    }

    if (isNaN(toan) || isNaN(van) || isNaN(anh)) {
        alert("Vui lòng nhập điểm hợp lệ!");
        return false;
    }

    const average = (toan + van + anh) / 3;

    let result;
    if (average < 5) {
        result = "Không đủ điều kiện học";
    } else {
        result = "Đủ điều kiện học";
    }

    alert(`Điểm trung bình: ${average.toFixed(2)}. ${result}`)

}