function changeProduct() {
  divs=document.getElementsByTagName("div");
  for(let i = 0; i < divs.length; i++){
    divs[i].style.backgroundColor = divs[i].id;
  }
  imgs=document.getElementsByTagName("img");
  for (let i = 0; i < imgs.length; i++) {
    imgs[i].style.opacity = imgs[i].id;
  }
  h3s=document.getElementsByTagName("h3");
  for (let i = 0; i < imgs.length; i++) {
    h3s[i].style.fontSize = h3s[i].id;
  }
} 