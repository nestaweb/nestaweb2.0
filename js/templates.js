let templates = Array.from(document.querySelectorAll(".websiteEx"));

templates.forEach(template => {
    template.addEventListener("click", function(e) {
        id = (e.target.id).split("website")[1];
        window.open(id + "/", "_blank");
    })
});