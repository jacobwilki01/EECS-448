function checkPurchase(){
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var item1 = document.getElementById("item1");
    var item2 = document.getElementById("item2");
    var item3 = document.getElementById("item3");
    var shipping = document.getElementById("shipping");

    var user_at = false;
    var user_dot = false;

    for (let i=0; i < username.value.length; i++){
        if (username.value[i] == "@"){
            user_at = true;
        }
        if (username.value[i] == "." & user_at == true){
            user_dot = true;
        }
    }

    if (user_at == False || user_dot == False){
        alert("Invalid username!");
        return false;
    }
    if (password.value.lenth <= 0){
        alert("Invalid password!");
        return false;
    }
    if (item1.value == ""){
        alert("Invalid Kitchen Timer Quantity!");
        return false;
    }
    if (item2.value == ""){
        alert("Invalid Fancy Laptop Quantity!");
        return false;
    }
    if (item3.value == ""){
        alert("Invalid Coca-Cola Quantity!");
        return false;
    }
    if (shipping.value == ""){
        alert("Invalid shipping choice!");
        return false;
    }

    return true;
}