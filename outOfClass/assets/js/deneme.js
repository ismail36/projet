

//console.log(inputVal);
  
// var kut = document.getElementById('kutu');

// kut.addEventListener("click", function(){
//     alert("merhaba");
// })




var bton = document.getElementById('btn');

bton.addEventListener("click", function(){
    var numer = document.getElementById('num').value;
    alert(OddEven(numer));
})



function OddEven(number) {
    var number2="";
    if(number%2 == 0){
        number2 = "Even Number !!";
    }else if(number%2 != 0){
        number2 = "Odd Number !!";
    }

    return number2;
}