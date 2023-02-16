<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Menu</title>

        <link rel='stylesheet' href='./default.css'>
        <link rel='stylesheet' href='./menu.css'>
    </head>
    <body onload="initDishes('all')">
        <nav class='topNavBar'>
            <p class='nameWebsite' onclick="window.location.href = './index.php'">Gargantua</p>
            <ul class='listNavItems'>
                <li class='navItem' onclick="window.location.href = './index.php'">Accueil</li>
                <li class='navItem' onclick="window.location.href = './menu.php'">La carte</li>
            </ul>
        </nav>
        <header>
            <button class="btnPrimary" onclick="window.location.href = '#spécialité'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M35 44V28H29.25V12.75Q29.25 8.8 31.65 6.4Q34.05 4 38 4V44ZM14.25 44V25.6Q11.65 25.05 9.825 22.975Q8 20.9 8 18V4H11V18H14.25V4H17.25V18H20.5V4H23.5V18Q23.5 20.9 21.675 22.975Q19.85 25.05 17.25 25.6V44Z"/></svg>
                Spécialité
            </button>
            <button class="btnPrimary" onclick="window.location.href = '#salade'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M7 42 4 39H44L41 42ZM6.35 35.95Q6.7 35.15 7.025 34.5Q7.35 33.85 8.05 33.15V16.9H6V14.4H8.05V12.7H6V10.2H8.05V8.5H6V6H21Q22.2 6 22.85 6.65Q23.5 7.3 23.5 8.5V10.2H42V12.7H23.5V14.4Q23.5 15.6 22.85 16.25Q22.2 16.9 21 16.9H15.75V30.45Q16.75 30.55 17.7 30.95Q18.65 31.35 19.5 32.05Q20.3 28.9 23.075 26.725Q25.85 24.55 29.65 24.55Q34.3 24.55 37.225 27.6Q40.15 30.65 40.15 35.3V35.95ZM22.5 32.95H36.8Q36.35 30.7 34.35 29.125Q32.35 27.55 29.65 27.55Q26.95 27.55 24.95 29.125Q22.95 30.7 22.5 32.95ZM15.75 10.2H21V8.5Q21 8.5 21 8.5Q21 8.5 21 8.5H15.75ZM15.75 14.4H21Q21 14.4 21 14.4Q21 14.4 21 14.4V12.7H15.75ZM10.5 10.2H13.25V8.5H10.5ZM10.5 14.4H13.25V12.7H10.5ZM10.5 31.4Q10.9 31.1 11.7 30.775Q12.5 30.45 13.25 30.4V16.9H10.5ZM22.5 32.95Q22.95 32.95 24.95 32.95Q26.95 32.95 29.65 32.95Q32.35 32.95 34.35 32.95Q36.35 32.95 36.8 32.95Z"/></svg>
                Salades
            </button>
            <button class="btnPrimary" onclick="window.location.href = '#pizza'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 44 4 13.75Q8.3 10.15 13.4 8.075Q18.5 6 24 6Q29.5 6 34.6 8.075Q39.7 10.15 44 13.75ZM24 38.65 40.05 14.45Q36.45 12.1 32.4 10.55Q28.35 9 24 9Q19.65 9 15.6 10.55Q11.55 12.1 7.95 14.45ZM18.5 19.75Q19.65 19.75 20.45 18.95Q21.25 18.15 21.25 17Q21.25 15.85 20.45 15.05Q19.65 14.25 18.5 14.25Q17.35 14.25 16.55 15.05Q15.75 15.85 15.75 17Q15.75 18.15 16.55 18.95Q17.35 19.75 18.5 19.75ZM24 30.5Q25.15 30.5 25.95 29.7Q26.75 28.9 26.75 27.75Q26.75 26.6 25.95 25.8Q25.15 25 24 25Q22.85 25 22.05 25.8Q21.25 26.6 21.25 27.75Q21.25 28.9 22.05 29.7Q22.85 30.5 24 30.5ZM24.15 38.65Q24.15 38.65 24.15 38.65Q24.15 38.65 24.15 38.65Q24.15 38.65 24.15 38.65Q24.15 38.65 24.15 38.65Z"/></svg>
                Pizza
            </button>
            <button class="btnPrimary" onclick="window.location.href = '#burger'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M4 20.1V18.1Q4 12.65 9.25 9.325Q14.5 6 24 6Q33.5 6 38.75 9.325Q44 12.65 44 18.1V20.1ZM7.1 17.1H40.9Q40.75 13.65 36.075 11.325Q31.4 9 24 9Q16.6 9 11.875 11.325Q7.15 13.65 7.1 17.1ZM4 28.9V25.9Q5.65 25.9 6.875 24.8Q8.1 23.7 10.8 23.7Q13.5 23.7 14.375 24.8Q15.25 25.9 17.3 25.9Q19.35 25.9 20.325 24.8Q21.3 23.7 24 23.7Q26.7 23.7 27.675 24.8Q28.65 25.9 30.7 25.9Q32.75 25.9 33.625 24.8Q34.5 23.7 37.2 23.7Q39.9 23.7 41.125 24.8Q42.35 25.9 44 25.9V28.9Q41.3 28.9 40.275 27.8Q39.25 26.7 37.2 26.7Q35.15 26.7 34.275 27.8Q33.4 28.9 30.7 28.9Q28 28.9 27.025 27.8Q26.05 26.7 24 26.7Q21.95 26.7 20.975 27.8Q20 28.9 17.3 28.9Q14.6 28.9 13.725 27.8Q12.85 26.7 10.8 26.7Q8.75 26.7 7.725 27.8Q6.7 28.9 4 28.9ZM7 42Q5.8 42 4.9 41.1Q4 40.2 4 39V32.6H44V39Q44 40.2 43.1 41.1Q42.2 42 41 42ZM7 39H41Q41 39 41 39Q41 39 41 39V35.6H7V39Q7 39 7 39Q7 39 7 39ZM7 35.6Q7 35.6 7 35.6Q7 35.6 7 35.6H41Q41 35.6 41 35.6Q41 35.6 41 35.6ZM7.1 17.1Q7.15 17.1 11.875 17.1Q16.6 17.1 24 17.1Q31.4 17.1 36.075 17.1Q40.75 17.1 40.9 17.1Z"/></svg>
                Burger
            </button>
            <button class="btnPrimary" onclick="window.location.href = '#panninis'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M11.5 42Q10.2 42 9.35 41.15Q8.5 40.3 8.5 39V20.65Q6.55 19.55 5.275 17.825Q4 16.1 4 13.4Q4 10.25 6.125 8.125Q8.25 6 11.4 6H36.6Q39.75 6 41.875 8.125Q44 10.25 44 13.4Q44 16.1 42.725 17.825Q41.45 19.55 39.55 20.65V39Q39.55 40.3 38.7 41.15Q37.85 42 36.55 42ZM11.5 39H36.55V19.25L38.3 18.15Q39.45 17.45 40.225 16.3Q41 15.15 41 13.4Q41 11.55 39.725 10.275Q38.45 9 36.6 9H11.4Q9.55 9 8.275 10.275Q7 11.55 7 13.4Q7 15.2 7.75 16.325Q8.5 17.45 9.75 18.2L11.5 19.25ZM22.95 35.55Q23.45 36.05 24.025 36.05Q24.6 36.05 25.1 35.55L33.6 27.05Q34.1 26.55 34.1 25.975Q34.1 25.4 33.6 24.9L25.1 16.4Q24.7 16 24.025 16Q23.35 16 22.95 16.4L14.45 24.9Q13.95 25.4 13.95 25.975Q13.95 26.55 14.45 27.05ZM24 32.5 17.6 26.1 24 19.7 30.4 26.1ZM24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Q24.05 24 24.05 24Z"/></svg>
                Panninis
            </button>
            <button class="btnPrimary" onclick="window.location.href = '#dessert'">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M23.95 46 14.9 27.6Q11.45 28.2 8.725 26.1Q6 24 6 20.25Q6 18 7.375 15.85Q8.75 13.7 11.4 12.95Q12.2 8 15.825 5Q19.45 2 24 2Q28.55 2 32.15 5Q35.75 8 36.6 12.95Q39.25 13.7 40.625 15.85Q42 18 42 20.25Q42 24 39.175 26.1Q36.35 28.2 33.2 27.6ZM13.3 24.75Q14.2 24.75 15 24.5Q15.8 24.25 16.25 23.8L17.55 22.45L18.7 23.45Q19.95 24.3 21.425 24.525Q22.9 24.75 24.15 24.75Q25.4 24.75 26.7 24.525Q28 24.3 29.25 23.45L30.45 22.45L31.7 23.8Q32.15 24.25 32.975 24.5Q33.8 24.75 34.65 24.75Q36.35 24.75 37.675 23.375Q39 22 39 20.25Q39 18.7 38.05 17.55Q37.1 16.4 35.35 16.1L33.6 15.85L33.5 13.9Q32.95 9.95 30.425 7.475Q27.9 5 24 5Q20.1 5 17.55 7.475Q15 9.95 14.5 13.9L14.35 15.85L12.6 16.25Q11.1 16.65 10.05 17.675Q9 18.7 9 20.25Q9 22 10.325 23.375Q11.65 24.75 13.3 24.75ZM23.95 39.2 30.35 26.6 30.05 26.3Q28.65 27.05 27.025 27.4Q25.4 27.75 24.15 27.75Q22.55 27.75 20.9 27.4Q19.25 27.05 18 26.3L17.7 26.55ZM24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Q24 14.9 24 14.9Z"/></svg>
                Dessert
            </button>
        </header>
        <fieldset class="advanceSearch">
            <legend>Recherche</legend>
            <p>Je prefères </p>
            <select name="nameDishe" id="nameDishe" class="search" onchange="changeDishes()">
                <option value="default">un plat</option>
                <option value="spécialité">une spécialité</option>
                <option value="salade">une salade</option>
                <option value="pizza">une pizza</option>
                <option value="burger">un burger</option>
                <option value="panninis">un panninis</option>
            </select>
            <p>sans</p>
            <select name="nameIngr" id="nameIngr" class="search" onchange="searchAvailableDishes()">
                <option value="default">cet ingrédient</option>
                <option value="mozzarella">mozzarella</option>
                <option value="champignons">champignons</option>
                <option value="poivrons">poivrons</option>
                <option value="chorizo">chorizo</option>
                <option value="jambon">jambon</option>
                <option value="oeuf">oeuf</option>
                <option value="sauce à l'ail">sauce à l'ail</option>
                <option value="origan">origan</option>
                <option value="poireaux">poireaux</option>
                <option value="saumon fumé">saumon fumé</option>
                <option value="crème">crème</option>
                <option value="chèvre">chèvre</option>
                <option value="emmental">emmental</option>
                <option value="cammembert">cammembert</option>
                <option value="cheddar">cheddar</option>
                <option value="oignons">oignons</option>
            </select>
        </fieldset>
        <div id="allDishes">

            <section class="sectionMenu" id="spécialité">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">S</span>pécialités</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            <section class="sectionMenu" id="salade">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">S</span>alades</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            <section class="sectionMenu" id="pizza">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">P</span>izzas</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            <section class="sectionMenu" id="burger">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">B</span>urgers</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            <section class="sectionMenu" id="panninis">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">P</span>anninis</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
            <section class="sectionMenu" id="dessert">
                <div class="headerSection">
                    <div class="sideTransitionBar"></div>
                    <h2 class="titleSection">Nos <span class="firstLetter">D</span>esserts</h2>
                    <div class="sideTransitionBar"></div>
                </div>
            </section>
        </div>
        <footer>
            
        </footer>
        <script src='./data.js'></script>
        <script src='./main.js'></script>
    </body>
<html>