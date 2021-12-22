window.addEventListener("load", initSite);

document.getElementById("saveButton").addEventListener("click", saveHoroscope);
document.getElementById("updateButton").addEventListener("click", updateHoroscope);
document.getElementById("deleteButton").addEventListener("click", deleteHoroscope);

async function initSite() {
  addResultInput();
}

async function addResultInput() {
  try {
    let resultHoroscope = await makeRequest("./api/viewHoroscope.php", {
      method: "GET",
    });
    console.log(resultHoroscope)
    if (resultHoroscope) {
      document.getElementById("addResult").innerHTML = resultHoroscope;
    } else {
      document.getElementById("addResult").innerHTML = "";
    }
  } catch (error) {
    console.error(error);
  }
}

async function saveHoroscope() {
  let addHoroscope = document.getElementById("inputDate").value;
  document.getElementById("inputDate").value = "";
  if (!addHoroscope.length) {
    console.log("Inget datum ifyllt");
    alert("Var god fyll i ditt födelsedatum");
    return;
  }
  console.log(addHoroscope);
  let date = new Date(addHoroscope);
  let body = new FormData();
  let inputDate = { month: date.getMonth() + 1, day: date.getDate() };
  body.set("date", JSON.stringify(inputDate));
  let option = { method: "POST", body: body };
  let result = await makeRequest("./api/addHoroscope.php", option);
  console.log(result);
  addResultInput();
}

async function deleteHoroscope() {
  document.getElementById("inputDate").value = "";
  let option = { method: "DELETE" };
  let result = await makeRequest("./api/deleteHoroscope.php", option);
  console.log(result);

  addResultInput();
}

async function updateHoroscope() {
  let updateHoroscope = document.getElementById("inputDate").value;
  console.log(updateHoroscope)
  
  if (!updateHoroscope.length) {
    console.log("Inget datum ifyllt");
    alert("Var god fyll i ditt födelsedatum");
    return;
  }
  let date = new Date(updateHoroscope);
  let body = new FormData();
  let inputDate = { month: date.getMonth() + 1, day: date.getDate() };
  body.set("date", JSON.stringify(inputDate));

  let option = { method: "POST", body };
  let result = await makeRequest("./api/updateHoroscope.php", option);
  console.log(result);

  if (result == true){
    console.log(result)
    addResultInput()     
  }    
} 

async function makeRequest(url, option) {
  try {
    let response = await fetch(url, option);
    let result = await response.json();
    return result;
  } catch (err) {
    console.error(err);
  }
}
