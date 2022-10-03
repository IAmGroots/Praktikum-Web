
// Light Mode or Dark Mode
function lightMode(){
  const isLight = document.body.classList.toggle("light-theme")
  let mode = ""
  if (isLight){
    mode = "Light Mode"
  } else {
    mode = "Dark Mode"
  }

  // Manipulasi DOM 1
  document.getElementById("change-mode").innerHTML = mode
}

// Pop Up
function popUp(){
  alert("To Be Continue ...")
}

// AddEventListener
const button = document.querySelector(".btn-more")
button.addEventListener("click", function view(){
  let read = ""
  const teks = document.querySelector("#teks")
  if (teks.style.display == 'none'){
    // Manipulasi DOM 2
    teks.style.display = 'block'
    read = "Read Less"
  } else {
    teks.style.display = 'none'
    read = "Read More"
  }
  document.querySelector(".btn-more").innerHTML = read
})
