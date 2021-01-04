var menu_icon = document.getElementById("img");
var menu = document.getElementById("menu");

function menu_togle(){
    if(menu.style.display == "block"){
        menu.style.display = "none";
        menu_icon.src="menu.png";
        menu.style.margin = "0px";
    }
    else{
        menu.style.display = "block";
        menu_icon.src="cross_mark.png";
        menu.style.margin = "-10px";
    }

}
function hide(){
    if(innerWidth<=900){
          menu.style.display = "none";
            menu_icon.src="menu.png";
    }
}

var err = document.getElementById("error");

function validate(){
    var mess = document.getElementById("mess").value;
    var name = document.getElementById("nme").value;
    if(name==""){
        err.innerHTML = "please enter name";
        return false;
    }
    
    var phone_no = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var reg = /^([0-9]){10}$/;
    if(!reg.test(phone_no)){
        if(phone_no!=""){
            err.innerHTML = "Enter a valid Phone No.";
            return false;
        }
    }
    reg = /^([a-zA-Z0-9\_\.]+)@([a-zA-Z]+)\.([a-zA-Z]+)$/;
    if(!reg.test(email)){
        if(email!=""){
            err.innerHTML = "Enter a valid email";
            return false;
        }    
    }

    if(mess==""){
        err.innerHTML = "write something";
        return false;
    }
    // load_data();
    return true;

}
