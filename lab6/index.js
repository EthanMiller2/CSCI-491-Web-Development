var inputDiv = document.getElementsByTagName("input");
var errDiv = document.getElementsByTagName("div");
function ConvertCtoF(degreesCelsius) {
  var fahrenheitDiv = inputDiv[1];
  var c = degreesCelsius;
  var f;
  f = c * (9 / 5) + 32;

  if (!isANumber(f)){
    errDiv[0].innerText = c + " is not a number";
  }
  else {
    errDiv[0].innerText = "";
    fahrenheitDiv.value = f;
  }
  return f;
}
function ConvertFtoC(degreesFahrenheit) {
  var celciusDiv = inputDiv[0];
  var fah = degreesFahrenheit;
  var cel;
  cel = (fah - 32) * (5 / 9);
  if (!isANumber(cel)){
    errDiv[0].innerText = fah + " is not a number";
  }
  else {
    errDiv[0].innerText = "";
    celciusDiv.value = cel;
  }
  return cel;
}

function clearValue(userInput) {
  userInput.value = "";
}

function isANumber(num){
  return parseFloat(num)
}
function changeImage(){
  var weatherImageDiv = document.getElementById("WeatherImage");
  var fahrenheitDiv = inputDiv[1];
  if(fahrenheitDiv.value < 32) {
    weatherImageDiv.src = "cold.gif";
  }
  else if (fahrenheitDiv.value >= 32 && fahrenheitDiv.value <= 50){
    weatherImageDiv.src = "cool.gif"
  }
  else{
    weatherImageDiv.src = "warm.gif";
  }
}
function bodyLoaded() {
  document.addEventListener("input", function(){
    var eve = event.target;
    var fahrenheitDiv = inputDiv[1];
    var celciusDiv = inputDiv[0];
    var fInput = fahrenheitDiv.value;
    var cInput = celciusDiv.value;
    if (eve == CInput){
      if(fInput.length !== 0){
        clearValue(fahrenheitDiv);
      }
      else{
        return cInput;
      }
    }
    else if (eve == FInput) {
      if(cInput !== 0){
        clearValue(celciusDiv);
      }
      else{
        return fInput;
      }
    }
  });

  var convertButton = document.getElementById("ConvertButton");
  var celciusInput = inputDiv[0];
  var farenheitInput = inputDiv[1];

  convertButton.addEventListener("click", function(){
    if (celciusInput.value.length !== 0){
      ConvertCtoF(celciusInput.value);
      changeImage();
    }
    else{
      ConvertFtoC(farenheitInput.value);
      changeImage();
    }
  });
}
