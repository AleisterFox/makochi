const nextActivity = document.getElementById("activity_next");
const prevActivity = document.getElementById("activity_prev");
const dance = document.querySelector(".baile");
const art = document.querySelector(".arte");

const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 769) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        list.style.background = "white";
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
      }
    });
  }
});

nextActivity.addEventListener("click", () => {
  dance.style.animation = "fadeOut 1s linear";
  setTimeout(() => {
    dance.classList.add("hide");
    art.classList.remove("hide");
    art.style.animation = "fadeIn 1s linear";
  }, 990);
});

prevActivity.addEventListener("click", () => {
  art.style.animation = "fadeOut 1s linear";
  setTimeout(() => {
    art.classList.add("hide");
    dance.classList.remove("hide");
    dance.style.animation = "fadeIn 1s linear";
  }, 990);
});
