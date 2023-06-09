let url = "http://localhost:8080/api/marques";
let marque = document.getElementById('marques');

fetch(url).then(res=>{
    console.log(res);
    return res.json();
}).then(data=>{
    console.log(data);

    for (let i = 0; i < data.length; i++) {
        console.log(data[i]);

        let id = data[i].id; 
        let idElt = document.createElement('p');
        idElt.textContent = id;
        marque.insertAdjacentElement("afterbegin", idElt);

        let name = data[i].name; 
        let nameElt = document.createElement('p');
        nameElt.textContent = name;
        marque.insertAdjacentElement("afterbegin", nameElt);

        let update = data[i].update; 
        let updateElt = document.createElement('p');
        updateElt.textContent = update;
        marque.insertAdjacentElement("afterbegin", updateElt);
    }

    
})

/*
function render(data){
    for (let i = 0; i < data.Search.length; i++) {
        console.log(data.Search[i]);
        //console.log(data.Search[i].Poster); // poster
        

        let affiche = data.Search[i].Poster;
        let post = document.createElement('img');
        post.setAttribute('src', affiche);
        post.setAttribute('id', 'posteraff'+[i]);
        poster.insertAdjacentElement("afterbegin", post);
        console.log(post);
    } 
}  */