function function1(){
    var wrch = /[a-zA-Z]/;
    var name = document.getElementById('name-area').value;
    document.getElementById('error-area').style.top='10px';
    if(name == ''){

        document.getElementById('error-area').style.visibility = 'visible';
        document.getElementById('error-msg').innerHTML = "Вы не указали имя.";
        var t = setTimeout(function(){
        document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;
    }
    if(!wrch.test(name)){

        document.getElementById('error-area').style.visibility = 'visible';
        document.getElementById('error-msg').innerHTML = "Вы ввели в неверном формате";
        var t = setTimeout(function(){
        document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;
    }
    return function2();

}
function function2(){
   var wrch = /[a-zA-Z]/;
    var surname = document.getElementById('surname-area').value;
    document.getElementById('error-area').style.top='30px';
    if(surname == ''){

        document.getElementById('error-area').style.visibility = 'visible';
        document.getElementById('error-msg').innerHTML = "Вы не указали фамилию.";
        var t = setTimeout(function(){
        document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;
    }
    if(!wrch.test(surname)){

        document.getElementById('error-area').style.visibility = 'visible';
        document.getElementById('error-msg').innerHTML = "Вы ввели в неверном формате";
        var t = setTimeout(function(){
        document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;
    }

    return function3();}

function function3(){

    var e = document.getElementById('email-area').value;
    document.getElementById('error-area').style.top='50px';
    var wrch = /[0-9a-z_]+@[0-9a-z_][0-9a-z_]+\.[a-z]{2,5}/i;
    if(e.length == 0){document.getElementById('error-area').style.visibility = 'visible';
                      document.getElementById('error-msg').innerHTML ="Вы не указали логин";

                      var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);
                     return false;
                     }
    else if (!wrch.test(e)) {document.getElementById('error-area').style.visibility = 'visible';
    document.getElementById('error-msg').innerHTML = "Your email is wrong.";

                             var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);
                        return false;
                            }
        else{document.getElementById('error-area').style.visibility = "hidden";return function4();}
}

function function4(){
        var wrch = /[\W_]/;
        var p = document.getElementById('password-area').value;
        document.getElementById('error-area').style.top='70px';
    if(p.length == 0){document.getElementById('error-area').style.visibility = 'visible';document.getElementById('error-msg').innerHTML = "Вы не указали пароль.";
                     var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;}
        else if (wrch.test(p)) {
            document.getElementById('error-area').style.visibility = 'visible';
            document.getElementById('error-msg').innerHTML = "Вы ввели пороль в неверном формате";
            var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);
            return false;}
        else if ((p.length < 6) || (p.length > 20)) {
            document.getElementById('error-area').style.visibility = 'visible';
            document.getElementById('error-msg').innerHTML = "Вы ввели длину в неверном формате ";
        var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);return false;}
        else if ( (p.search(/[0-9]+/)==-1) ) {
            document.getElementById('error-area').style.visibility = 'visible';
            document.getElementById('error-msg').innerHTML = "Должен содержать минимум 1 цифр";
        var t = setTimeout(function(){
                         document.getElementById('error-area').style.visibility = 'hidden';},3000);
            return false;}
        else{
            document.getElementById('error-area').style.visibility = "hidden";
        }
        return true;


}
function function7(){
    var d = function1();
    if(d){
        result = true;

        }else{result=false}
    }