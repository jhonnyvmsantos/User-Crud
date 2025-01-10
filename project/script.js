// NAVBAR

const navbar = document.querySelector("nav");
const mButton = document.querySelector("#menu-button");

mButton.addEventListener("click", () => {
    navbar.classList.toggle("menu-visible");
});

const pages = [
    {
        component: document.getElementById("home-page"),
        page: "index.html"
    },
    {
        component: document.getElementById("list-page"),
        page: "pages/list.php"
    },
    {
        component: document.getElementById("reg-page"),
        page: "pages/reg.php"
    }
]

pages.forEach((e, i) => {
    e.component.addEventListener('click', () => {
        if (window.location.href.includes("index.html") || !window.location.href.includes("pages")) {
            window.location.href = e.page;
        } else {
            window.location.href = `../${e.page}`;
        }
    });
});
