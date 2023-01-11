const inputBlur = document.getElementById("blur");
const inputTransparency = document.getElementById("transparency");
const inputRadius = document.getElementById("radius");
const inputColor = document.getElementById("color");
const code = document.getElementsByClassName("contentcode")[0].firstElementChild;
const glass = document.getElementsByClassName("glass")[0];
const isBackground = document.getElementById("isBackground");
const result = document.getElementsByClassName("result")[0];

isBackground.checked = "true"
result.style.backgroundImage = "url(none)"

function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
      r: parseInt(result[1], 16),
      g: parseInt(result[2], 16),
      b: parseInt(result[3], 16)
    } : null;
  }

function inputChange(){
    inputBlur.parentElement.lastElementChild.textContent = inputBlur.value + "px";
    inputTransparency.parentElement.lastElementChild.textContent = inputTransparency.value + "%";
    inputRadius.parentElement.lastElementChild.textContent = inputRadius.value + "px";
    inputColor.parentElement.lastElementChild.textContent = inputColor.value;
    
    
}

inputChange();
codeChange();
changeStyle();

inputBlur.addEventListener("input", function(){
    inputChange();
    codeChange();
    changeStyle();
})

inputTransparency.addEventListener("input", function(){
    inputChange();
    codeChange();
    changeStyle();
})

inputRadius.addEventListener("input", function(){
    inputChange();
    codeChange();
    changeStyle();
})

inputColor.addEventListener("input", function(){
    inputChange();
    codeChange();
    changeStyle();
})

isBackground.addEventListener("change", function(){
    if(this.checked){
        result.style.backgroundImage = "url(none)"
        console.log("checked")
    }else{
        result.style.backgroundImage = "none"
        console.log("unchecked")
    }
})


function codeChange(){
    var content = "background-color: rgba(" + "rgba("+hexToRgb(inputColor.value).r +","+ hexToRgb(inputColor.value).g +"," + hexToRgb(inputColor.value).b+","+ inputTransparency.value/100 +");<br>border-radius:"+inputRadius.value + "px"+";<br>backdrop-filter:blur("+inputBlur.value + "px"+");<br>box-shadow: 0 8px 32px 0 rgba( 0, 0, 0, 0.37 );"
    code.innerHTML = content;
}

function changeStyle(){
    glass.style.color = "red";
    glass.style.backgroundColor = "rgba("+hexToRgb(inputColor.value).r +","+ hexToRgb(inputColor.value).g +"," + hexToRgb(inputColor.value).b+","+ inputTransparency.value/100 +")";
    glass.style.borderRadius = inputRadius.value + "px";
    glass.style.backdropFilter = "blur("+ inputBlur.value + "px"+")";
    glass.style.boxShadow = "0 8px 32px 0 rgba( 0, 0, 0, 0.37 )";
}