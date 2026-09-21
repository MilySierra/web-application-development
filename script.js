const news = document.querySelectorAll(".new");
let current = 0;

news[current].classList.add("active");

setInterval(() => {
    news[current].classList.remove("active");

    current = (current + 1) % news.length;

    news[current].classList.add("active");
}, 5000);