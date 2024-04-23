function switchPage() {
  document.getElementById("layout1").style.display = "none";
  document.getElementById("form").style.display = "block";
}

function hienthiLich() {
  document.getElementById("date").style.display = "block";
  document.getElementById("dateTitle").style.display = "block";
}
function offdate(){
  document.getElementById("date").style.display = "none";
  document.getElementById("dateTitle").style.display = "none";
}
const button = document.querySelector('button');

button.addEventListener('mouseover', () => {
  button.style.backgroundColor = 'red';
  button.textContent = 'Gửi thì bấm vào';
});

button.addEventListener('mouseout', () => {
  button.style.backgroundColor = '';
  button.textContent = 'Gửi';
});

function submitForm() {
  
  const name = document.getElementById("name").value;
  const phone = document.getElementById("phone").value;
  const service = document.querySelector('input[name="service"]:checked').value;
  const date = document.getElementById("date").value; 
  
  if (name === "") {
      alert("Vui lòng nhập tên!")
      return false;
    }
  
  if (phone === "") {
      alert("Vui lòng nhập số điện thoại!")
      return false;
    }
    if (phone.length !== 10 || isNaN(phone)) {
      alert("Vui lòng nhập số điện thoại đủ 10 số!")
      return false;
    }
  if (service === undefined) {
      alert("Vui lòng chọn yêu cầu!");
      return false;
    }
  if (service === "consult") {
      const date = document.getElementById("date").value;
      if (date === "") {
      alert("Vui lòng chọn ngày đặt lịch!");
      return false;
      }
  }
  if (service === "newsletter") {
      if (confirm("Bạn có chắc chắn muốn đăng ký nhận thông báo tin mới?")) {
        alert("Cảm ơn bạn đã đăng ký nhận thông báo!")
        document.getElementById("date").style.display = "none";
        document.getElementById("dateTitle").style.display = "none";
        document.getElementById("name").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("consult").checked = false;
        document.getElementById("newsletter").checked = false;
      }else{
          alert('Bạn đã hủy bỏ đăng ký!')
      }
    } else if (service === "consult") {
      if (confirm(`Bạn có chắc chắn muốn đăng ký tư vấn vào ngày ${date}?\nTên: ${name}\nSố điện thoại: ${phone}`)) {
        alert("Cảm ơn bạn đã đăng ký tư vấn! Chúng tôi sẽ sớm liên hệ với bạn.")
        document.getElementById("date").style.display = "none";
        document.getElementById("dateTitle").style.display = "none";
        document.getElementById("name").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("consult").checked = false;
        document.getElementById("newsletter").checked = false;
      }else{
          alert('Bạn đã hủy bỏ đăng ký!')
      }
    }
  
  const colors = [
    '#f44336', '#e91e63', '#9c27b0', '#673ab7',
    '#3f51b5', '#2196f3', '#03a9f4', '#00bcd4',
    '#009688', '#4caf50', '#8bc34a', '#cddc39',
    '#ffeb3b', '#ffc107', '#ff9800', '#ff5722'
  ];
  document.body.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
}