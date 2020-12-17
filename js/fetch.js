function result(){
    let container = document.getElementById("suggestion");
    //fonction load utilise des promesses .then => .catch =>
	//.then => représente ce qu'on veut faire avec la valeur qu'on s'attend à recevoir.
    load().then(content => container.innerHTML = content)
        .catch(error => container.innerHTML = "<p>Une erreur s'est produite</p>");
}
//appel asynchrone. Await est un mot-clé pour pouvoir appeler des functions asynchrone.
//await permet d'attendre le résultat de la fonction sans bloquer l'application
async function load() {
    var animals = document.getElementById("animal").value;
    let response = await fetch("../PHP/recherche.php?q="+animals);
    let content = await response.text();
    return content;
}
