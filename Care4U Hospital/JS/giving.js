function sectionDropdown_show(){
    if(document.getElementById('giving--submenu').style.display == "block"){
        document.getElementById('giving--submenu').style.display = "none";
        document.getElementById('icon-change').className = "fas fa-angle-down";
        document.getElementById('giving--front-image').style.paddingTop = "0px";
    }else{
        document.getElementById('giving--submenu').style.display = "block";
        document.getElementById('icon-change').className = "fas fa-angle-up";
        document.getElementById('giving--front-image').style.paddingTop = "200px";
    }
}