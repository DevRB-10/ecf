let url = "https://www.prevision-meteo.ch/services/json/";

let ville = document.getElementById("city-select");
let meteo = document.getElementById("meteo");
let url2 = "";

ville.addEventListener('change', ()=>{
    url2 = ville.options[ville.selectedIndex].value;

    url = "https://www.prevision-meteo.ch/services/json/" + url2;

    /* if (ville.selectedIndex  == 1) {
        url = "https://www.prevision-meteo.ch/services/json/angouleme";
        console.log('c bien angou');
    }
    if (ville.selectedIndex  == 2) {
        url = "https://www.prevision-meteo.ch/services/json/cognac";
        console.log('c cognac');
    }
    if (ville.selectedIndex  == 3) {
        url = "https://www.prevision-meteo.ch/services/json/royan";
        console.log('c a royan');
    } */

    fetch(url).then(res=>{
        console.log(res);
        return res.json();
    }).then(data=>{
        /* console.log(data);
        console.log(data.fcst_day_0);
        console.log('tmax= ' + data.fcst_day_0.tmax); */

        if (data.fcst_day_0.tmax >= 25) {
            meteo.innerHTML = "";
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/sunglasses.png');
            post.setAttribute('id', 'sunsoleil');
            post.setAttribute('width', '200');
            meteo.insertAdjacentElement("afterbegin", post);
        }
        if (data.fcst_day_0.tmax > 15 && data.fcst_day_0.tmax < 25) {
            meteo.innerHTML = "";
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/clothes.png');
            post.setAttribute('id', 'pull');
            post.setAttribute('width', '200');
            meteo.insertAdjacentElement("afterbegin", post);
        }
        if (data.fcst_day_0.tmax <= 15) {
            meteo.innerHTML = "";
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/umbrella.png');
            post.setAttribute('id', 'parapluie');
            post.setAttribute('width', '200');
            meteo.insertAdjacentElement("afterbegin", post);
        }
    })
}
)