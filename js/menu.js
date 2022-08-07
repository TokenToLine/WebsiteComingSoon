// nav
function nav() {
  // nav block scrolling
  const Body = document.body
  if (Body.style.overflow === 'auto') {
    Body.style.overflow = 'hidden';
  }
  else {
    Body.style.overflow = 'auto';
    console.log("nav block scrolling working!");
  }

  // troggle class nav
  var element = document.getElementById("links");
    element.classList.toggle("nav");
    console.log("nav working!");
}