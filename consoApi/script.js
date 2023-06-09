let url = "http://localhost:8080/api/marques";
let marque = document.getElementById('marques');

fetch(url).then(res=>{
    console.log(res);
    return res.json();
}).then(data=>{
    console.log(data);


    for (let i = 0; i < data.length; i++) {
        console.log(data[i]);

        let update = data[i].update; 
        let updateElt = document.createElement('p');
        updateElt.setAttribute('style', 'display: inline');
        updateElt.textContent = update;
        marque.insertAdjacentElement("afterbegin", updateElt);

        let sp = document.createElement('p');
        sp.setAttribute('style', 'display: inline');
        sp.textContent = '  ';
        marque.insertAdjacentElement("afterbegin", sp);

        let name = data[i].name; 
        let nameElt = document.createElement('p');
        nameElt.setAttribute('style', 'display: inline');
        nameElt.textContent = name;
        marque.insertAdjacentElement("afterbegin", nameElt);

        
        let space = document.createElement('p');
        space.setAttribute('style', 'display: inline');
        space.textContent = '  ';
        marque.insertAdjacentElement("afterbegin", space);

        let id = data[i].id; 
        let idElt = document.createElement('p');
        idElt.setAttribute('style', 'display: inline');
        idElt.textContent = id;
        marque.insertAdjacentElement("afterbegin", idElt);


        let br = document.createElement('br');
        marque.insertAdjacentElement("afterbegin", br);
    }

    let titre = document.createElement('p');
    titre.setAttribute('style', 'font-weight: bold');
    titre.textContent = 'id  nom  update';
    marque.insertAdjacentElement("afterbegin", titre);
    
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