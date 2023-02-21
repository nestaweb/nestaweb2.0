const Pizzas = {
    "Marguerite": {"ingrédients": "tomate, mozzarella, origan", "prix": "7.50"},
    "Napolitaine": {"ingrédients": "tomate, mozzarella, anchois, câpres, origan", "prix": "8.50"},
    "Romaine": {"ingrédients": "tomate, mozzarella", "prix": "8.50"}, 
    "Rabalise": {"ingrédients": "tomate, mozzarella, jambon, origan", "prix": "8.50"},
    "Reine": {"ingrédients": "tomate, mozzarella, champignons, jambon, origan", "prix": "10.00"},
    "Orientale": {"ingrédients": "tomate, mozzarella, jambon, chorizo, origan", "prix": "10.00"},
    "Quatre Saisons": {"ingrédients": "tomate, mozzarella, artichauts, asperges, poivrons, champignons, origan", "prix": "10.50"},
    "Gourmande": {"ingrédients": "tomate, mozzarella, thon, oeuf, crème, origan", "prix": "10.00"},
    "Chef": {"ingrédients": "tomate, mozzarella, lardons, champignons, sauce à l'ail, origan", "prix": "10.50"},
    "Paysanne": {"ingrédients": "tomate, mozzarella, lardons, oignons, oeuf, crème, origan", "prix": "11.00"},
    "Calzone": {"ingrédients": "tomate, mozzarella, jambon, oeuf, origan, champignons", "prix": "11.00"},
    "Quatre fromages": {"ingrédients": "tomate, mozzarella, chèvre, bleu, emmental, origan", "prix": "12.50"},
    "Italienne": {"ingrédients": "tomate, mozzarella, bolognaise maison, origan", "prix": "11.00"},
    "Norvégienne": {"ingrédients": "tomate, mozzarella, saumon fumé, crème, origan", "prix": "13.00"},
    "Spéciale": {"ingrédients": "tomate, mozzarella, chèvre, bleu, emmental, chorizo, crème, origan", "prix": "13.00"},
    "St Jacques": {"ingrédients": "tomate, mozzarella, noix de St Jacques au cury, crème, origan", "prix": "14.00"},
    "Méridionale": {"ingrédients": "tomate, mozzarella, chorizo, merguez, jambon du pays, origan", "prix": "12.00"},
    "Exotique": {"ingrédients": "tomate, mozzarella, jambon, ananas, rondelles de tomates, origan", "prix": "11.00"},
    "Tartiflette": {"ingrédients": "tomate, mozzarella, pommes de terre, lardons, reblochon, origan", "prix": "13.50"},
    "Fermière": {"ingrédients": "tomate, mozzarella, jambon, chorizo, poulet, origan", "prix": "12.00"},
    "Campagnarde": {"ingrédients": "tomate, mozzarella, oignons, magret de canard fumé, oeuf, origan", "prix": "11.50"}
}
const Panninis = {
    "Cowboy": {"ingrédients": "sauce burger, laitue iceberg, tomate, oignons rouges, cheddar, steak haché 150grs VBF, cornichons, servi avec frites à part", "prix": "9.00"},
    "Américain": {"ingrédients": "sauce au choix, salade, tomate, emmentale, steak haché, frites", "prix": "6.50"},
    "New-Yorkais": {"ingrédients": "sauce au choix, salade, tomates, oignons, steak, frites", "prix": "6.50"},
    "Spécial Croque": {"ingrédients": "beurre, jambon, emmentale", "prix": "5.50"},
    "Parisien": {"ingrédients": "sauce au choix, salade, tomate, emmentale, jambon", "prix": "6.00"},
    "Norvégien": {"ingrédients": "crème ciboulette, saumon fumé", "prix": "6.50"},
    "Chevretine": {"ingrédients": "huile d'olive au basilic, salade, tomate, chèvre", "prix": "6.00"},
    "3fromages": {"ingrédients": "crème, emmental, chèvre, reblochon", "prix": "6.50"},
    "Italien": {"ingrédients": "sauce bolognaise, emmental", "prix": "6.00"},
    "Océanique": {"ingrédients": "sauce au choix, salade, tomate, oignons, thon", "prix": "6.00"},
    "Oriental": {"ingrédients": "sauce au choix, merguez, frites", "prix": "6.00"},
    "Gargantua": {"ingrédients": "salade, tomate, lardons, crème", "prix": "6.00"},
}
const Burgers = {
    "Burger classique": {"ingrédients": "sauce burger, steak haché 150grs VBF, bacon, cheddar, oignons rouges, laitue iceberg, tomate, cornichons aigr-doux", "prix": "9.00"},
    "Burger raclette": {"ingrédients": "sauce béarnaise, steak haché 150grs VBF, fromage à raclette, coppa, laitue iceberg, tomate, cornichons aigr-doux", "prix": "10.00"}
}
const Salades = {
    "Norvégienne": {"ingrédients": "salade, tomate, saumon fumé, crevettes, crème ciboulette", "prix": "9.00"},
    "Niçoise": {"ingrédients": "salade, tomate, haricots verts, thon, poivrons, anchois, olives", "prix": "7.00"},
    "Paysanne": {"ingrédients": "salade, tomate, pommes de terre, lardons, oignons", "prix": "8.00"},
    "César": {"ingrédients": "salade, tomate cerise, poulet, parmesan, croutons, oeuf", "prix": "8.50"},
    "Chèvre chaud": {"ingrédients": "salade, noix, tomate, toasts de chèvre", "prix": "7.00"},
    "Camembert": {"ingrédients": "salade, tomate, camembert pané, jambon serrano", "prix": "8.50"},
}
const Desserts = {
    "Mousse au chocolat maison": "5.80",
    "Salade de fruits frais": "5.50",
    "Tiramisu maison": "5.50"
}
const Boissons = {
    "Sodas": {"Volume": "33cL", "prix": "2.00"},
    "Eau": {"Volume": "1,5L", "prix": "2.20"},
    "San Pellegrino": {"Volume": "50cL", "prix": "2.00"},
    "Despérado": {"Volume": "33cL", "prix": "3.80"},
    "Café": {"Volume": "", "prix": "1.50"}
}
const Spécialités = {
    "Gargantuesque": {"ingrédients": "tomate, mozzarella, champignons, poivrons, chorizo, jambon, lardons, oeuf, sauce à l'ail, origan", "prix": "15.50"},
    "Clara": {"ingrédients": "tomate, mozzarella, poireaux, St Jacques, saumon fumé, crème, origan", "prix": "15.50"},
    "Bergère": {"ingrédients": "tomate, mozzarella, magret de canard, pommes fruit, chèvre, miel, emmental, crème, origan", "prix": "14.50"},
    "Périgourdine": {"ingrédients": "tomate, mozzarella, gésiers confits, cammembert, oeuf, origan", "prix": "16.00"},
    "Rustique": {"ingrédients": "tomate, mozzarella, rileaux, andouillette, pommes de terres, origan", "prix": "17.00"},
    "Mexicaine": {"ingrédients": "tomate, mozzarella, viande de boeuf hacé, chorizo, poivrons, oignons, origan", "prix": "15.00"},
    "Burger": {"ingrédients": "tomate, mozzarella, viande de boeuf haché, oignons rouges, cheddar, tomates fraiches", "prix": "14.00"},
    "Indienne": {"ingrédients": "tomate, mozzarella, poulet au curry, poivrons, oignons, olives noires", "prix": "14.50"},
    "Lexa": {"ingrédients": "crème fraiche, mozzarella, fondu de poireaux, lard grillé, saint-marcellin", "prix": "15.50"},
}
const dishes = {
    "spécialité": Spécialités,
    "salade": Salades,
    "pizza": Pizzas,
    "burger": Burgers,
    "panninis": Panninis,
    "dessert": Desserts
}