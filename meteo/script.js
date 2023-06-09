let url = "https://www.prevision-meteo.ch/services/json/";

let ville = document.getElementById("city-select");
let meteo = document.getElementById("meteo");

ville.addEventListener('change', ()=>{
    if (ville.selectedIndex  == 1) {
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
    }

    
    console.log('lien: ' + url);
    fetch(url).then(res=>{
        console.log(res);
        return res.json();
    }).then(data=>{
        console.log(data);
        console.log(data.fcst_day_0);
        console.log('tmax= ' + data.fcst_day_0.tmax);

        if (data.fcst_day_0.tmax >= 25) {
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/sunglasses.png');
            post.setAttribute('id', 'pull');
            meteo.insertAdjacentElement("afterbegin", post);
        }
        if (data.fcst_day_0.tmax > 15 && data.fcst_day_0.tmax < 25) {
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/clothes.png');
            post.setAttribute('id', 'pull');
            meteo.insertAdjacentElement("afterbegin", post);
        }
        if (data.fcst_day_0.tmax <= 15) {
            let post = document.createElement('img');
            post.setAttribute('src', '/meteo/img/umbrella.png');
            post.setAttribute('id', 'parapluie');
            meteo.insertAdjacentElement("afterbegin", post);
        }
    })
}
)