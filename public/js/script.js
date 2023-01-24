var toggle_btn;
var big_wrapper;
var hamburger_menu;



function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");
const logo = document.getElementById('logos');


declare();


let dark = false;

function toggleAnimation() {
  // Clone the wrapper


  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");

  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  const rootElem = document.documentElement
    let dataTheme = rootElem.getAttribute('data-theme'),
        newTheme
    
    newTheme = (dataTheme === 'light') ? 'dark' : 'light'

    //set the new html attribute
    rootElem.setAttribute('data-theme', newTheme)

    //set the new local storage

    localStorage.setItem('theme', newTheme)
    
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
  VanillaTilt.init(document.querySelector(".right"),{
		max: 25,
		speed: 400
	});
  VanillaTilt.init(document.querySelector(".shape"),{
		max: 25,
		speed: 400
	});
}

let toggle = true;

toggle_btn.addEventListener('click', function() {

  toggle = !toggle;
  if(toggle) {
    logo.src = '../images/logo2.png';

  }else {
    logo.src = '../images/logo.png';
  }
})



events();


const pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password");

      //javascript for hide/show passowrd
      pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () =>{
            pwFields.forEach(pwField =>{
                if(pwField.type === "password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye-slash", "fa-eye")
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye", "fa-eye-slash")
                    })
                }
            })
        })
      })

      eleven = document.querySelector(".eleven");
      
      
      document.querySelectorAll('input[class="eleven"]').forEach(input =>{
        input.oninput = () =>{
            if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    }
  })


