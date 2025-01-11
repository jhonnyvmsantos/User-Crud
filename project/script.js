// NAVBAR

const navbar = document.querySelector("nav");
const mButton = document.querySelector("#menu-button");

mButton.addEventListener("click", () => {
    navbar.classList.toggle("menu-visible");
});

const pages = [
    {
        component: document.getElementById("home-page"),
        page: "index.php"
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
        if (window.location.href.includes("index.php") || !window.location.href.includes("pages")) {
            window.location.href = e.page;
        } else {
            window.location.href = `../${e.page}`;
        }
    });
});

function pass_verification(event) {
    const form = event.target;

    if (form.password.value.length < 6) {
        event.preventDefault();
        alert("A senha deve conter, ao menos, 6 caracteres...");
    }
}