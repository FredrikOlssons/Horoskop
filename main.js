window.addEventListener("load", initSite);

document.getElementById("saveButton").addEventListener("click", saveHoroscope);
document.getElementById("updateButton").addEventListener("click", updateHoroscope);
document.getElementById("deleteButton").addEventListener("click", deleteHoroscope);

async function initSite() {}

async function addResultInput() {
    document.getElementById("addResult").innerText = result
    let resultHoroscope = await makeRequest(url, body, option, addDate);
    console.log(resultHoroscope)
}


async function saveHoroscope() {
  let addHoroscope = document.getElementById("inputDate").value;
  let date = new Date(addHoroscope);
  let body = new FormData();
  let inputDate = {month: date.getMonth() +1, day: date.getDate()}
  body.set("date", JSON.stringify(inputDate));
  let option = {method: "POST" , body:body}
  let result = await makeRequest("./api/addHoroscope.php", option);
  console.log(result)
  
 
 // document.getElementById('addResult').innerText = month'
 

}

async function deleteHoroscope() {
  let deleteHoroscope = document.getElementById("inputDate").value;
  let option = {method: "DELETE"}
  let result = await makeRequest("./api/deleteHoroscope.php", option);
  console.log(result)
  //console.log(deleteHoroscope)

}

  async function updateHoroscope() {
    let updateHoroscope = document.getElementById("inputDate").value;
    let body = new FormData();
    let option = {method: "POST", body}
    body.set(updateHoroscope, "date");
    let result = await makeRequest("./api/updateHoroscope.php", option);
    console.log(result)
}

  async function makeRequest(url, option) {
    try {
        let response = await fetch(url, option)
        let result = await response.json()
        return result

    } catch(err) {
        console.error(err)
    }
  }

  


  
/* 
  formdata variabel
  addeventlistener på knappar
  funktion makerequest med url, olika för olika phps
  !istället på andra iffen
   */
