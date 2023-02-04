let opinions = Array.from(document.querySelectorAll(".opinion"));

if (opinions) {
    opinions.forEach(opinion => {
        opinion.querySelector(".acceptButton").addEventListener("click", function(e) {
            id = e.srcElement.parentNode.parentNode.id;
            id = id.split("opinion")[1];
            window.location.href = "../backend/verifiedOpinion.php?id=" + id;
        })
        opinion.querySelector(".rejectButton").addEventListener("click", function(e) {
            id = e.srcElement.parentNode.parentNode.id;
            id = id.split("opinion")[1];
            window.location.href = "../backend/rmOpinion.php?id=" + id;
        })
    });
}