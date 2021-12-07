window.addEventListener('load', initSite);

async function initSite() {
    let response = await fetch('./api/postHoroscope.php', {method: "POST"});
    let result = await response.json();
    console.log(response);
    console.log(result);
}

function makeRequest(url){
 
    fetch(url)
        
        then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        callback(result)
    }).catch((err) => {
        console.log("Error : ",err); 
    })
}




