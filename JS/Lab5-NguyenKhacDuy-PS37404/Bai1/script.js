function SayHi() {
    var nameInput = document.getElementById('nameInput').value;
    var greetingText = document.getElementById('greetingText');
    greetingText.textContent = "Xin chào, " + nameInput + "!";
  }