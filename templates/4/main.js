function initDishes(mode, dish = null) {
    if (mode === "all") {
        keys = Array.from(Object.keys(dishes));
        section = document.getElementById("allDishes")
        section.innerHTML = ""
        keys.forEach(key => {
            section.innerHTML += `
            <section class="sectionMenu" id="${key}">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">${key[0].toUpperCase()}</span>${key.substr(1)}</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            `
            currentSectionDishes = dishes[key]
            namesCurrentDishes = Array.from(Object.keys(currentSectionDishes));
            namesCurrentDishes.forEach(nameCurrentDishe => {
                document.getElementById(key).innerHTML += `
                <div class="dishe">
                    <div class="topInfosDishe">
                        <p class="nameDishe">${nameCurrentDishe}</p>
                        <p class="priceDishe">${currentSectionDishes[nameCurrentDishe]["prix"]} €</p>
                    </div>
                    <p class="ingredients">${currentSectionDishes[nameCurrentDishe]["ingrédients"]}</p>
                </div>
                `
            });
        });
    }
    else if (mode === "nall" && dish != null){
        currentSectionDishes = dishes[dish]
        namesCurrentDishes = Array.from(Object.keys(currentSectionDishes));
        section = document.getElementById("allDishes")
        section.innerHTML = `
        <section class="sectionMenu" id="${dish}">
            <div class="headerSection">
                <div class="sideTransitionBar"></div>
                <h2 class="titleSection">Nos <span class="firstLetter">${dish[0].toUpperCase()}</span>${dish.substr(1)}</h2>
                <div class="sideTransitionBar"></div>
            </div>
        </section>
        `
        namesCurrentDishes.forEach(nameCurrentDishe => {
            document.getElementById(dish).innerHTML += `
            <div class="dishe">
                <div class="topInfosDishe">
                    <p class="nameDishe">${nameCurrentDishe}</p>
                    <p class="priceDishe">${currentSectionDishes[nameCurrentDishe]["prix"]} €</p>
                </div>
                <p class="ingredients">${currentSectionDishes[nameCurrentDishe]["ingrédients"]}</p>
            </div>
            `
        });
    }
}
function redirectFacebook() {
    window.location.href = "https://fr-fr.facebook.com/people/Le-gargantua/100063740882579/";
}
function changeDishes() {
    dish = document.getElementById("nameDishe").value
    Ingredient = document.getElementById("nameIngr").value
    if (dish == "default") {
        initDishes("all")
        document.getElementById("nameIngr").value = "default"
    }
    else {
        initDishes("nall", dish)
        if (Ingredient != "default") {
            searchAvailableDishes()
        }
    }
}
function searchAvailableDishes() {
    SelectDish = document.getElementById("nameDishe").value
    Ingredient = document.getElementById("nameIngr").value
    if (dish != "default") {
        dish = dishes[SelectDish]
        lstNameDishes = Array.from(Object.keys(dish))
        for (nameDish in dish) {
            lstIngredients = dish[nameDish]["ingrédients"]
            ingredients = lstIngredients.split(", ")
            ingredients.forEach(ingredient => {
                if (ingredient == Ingredient) {
                    indexDish = lstNameDishes.indexOf(nameDish)
                    lstNameDishes.splice(indexDish, 1)
                }
            });
        }
        document.getElementById(SelectDish).innerHTML = `
        <div class="headerSection">
            <div class="sideTransitionBar"></div>
            <h2 class="titleSection">Nos <span class="firstLetter">${SelectDish[0].toUpperCase()}</span>${SelectDish.substr(1)}</h2>
            <div class="sideTransitionBar"></div>
        </div>
        `
        lstNameDishes.forEach(nameDishe => {
            document.getElementById(SelectDish).innerHTML += `
            <div class="dishe">
                <div class="topInfosDishe">
                    <p class="nameDishe">${nameDishe}</p>
                    <p class="priceDishe">${dish[nameDishe]["prix"]} €</p>
                </div>
                <p class="ingredients">${dish[nameDishe]["ingrédients"]}</p>
            </div>
            `
        });
        if (lstNameDishes.length == 0) {
            document.getElementById(SelectDish).innerHTML += `
            <p class="errorMessageNoDishes">Aucun plat ne correspond à vos préférences</p>
            `
        }
    }
}