function getUsers(){
    const app = document.getElementById("app");
    fetch("/users").then(function(reponse){
        console.log(reponse.json())
    })
}