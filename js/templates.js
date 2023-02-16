let templates = Array.from(document.querySelectorAll(".websiteEx"));

templates.forEach(template => {
    template.addEventListener("click", function(e) {
        while (!e.target.classList.contains("websiteEx"))
        {
            e = e.parentNode
        }
        id = e.target.id;
        console.log(e);
        // window.location.href = id + "/";
    })
});