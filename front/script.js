// NAVBAR

const navbar = document.querySelector("nav");
const mButton = document.querySelector("#menu-button");

mButton.addEventListener("click", () => {
    navbar.classList.toggle("menu-visible");
});

const pages = [
    {
        component: document.getElementById("home_page"),
        page: "/index.html"
    },
    {
        component: document.getElementById("list_page"),
        page: "/pages/list.html"
    },
    {
        component: document.getElementById("reg_page"),
        page: "/pages/reg.html"
    }
]

pages.forEach((e, i) => {
    e.component.addEventListener('click', () => {
        window.location.href = e.page;
    });
});
