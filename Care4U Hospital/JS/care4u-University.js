function univ_showOptions(){
        document.getElementById('myCare4u-span').style.display = "none";
        document.getElementById('myCare4u-options').style.display = "block";
}        

function univ_showOptions1(){
        document.getElementById('myCare4u-options').style.display = "none";
        document.getElementById('myCare4u-span').style.display = "block";   
}

function univ_display_options(){
        document.getElementById('univ--nav-options').style.display = "block";
}
function univ_hide_options(){
        document.getElementById('univ--nav-options').style.display = "none";
}

function univ_display_options1(){
        document.getElementById('univ--nav-options1').style.display = "block";
}
function univ_hide_options1(){
        document.getElementById('univ--nav-options1').style.display = "none";
}

function univ_display_options2(){
        document.getElementById('univ--nav-options2').style.display = "block";
}
function univ_hide_options2(){
        document.getElementById('univ--nav-options2').style.display = "none";
}

function univ_display_options3(){
        document.getElementById('univ--nav-options3').style.display = "block";
}
function univ_hide_options3(){
        document.getElementById('univ--nav-options3').style.display = "none";
}

function univ_display_options4(){
        document.getElementById('univ--nav-options4').style.display = "block";
}
function univ_hide_options4(){
        document.getElementById('univ--nav-options4').style.display = "none";
}

function univ_display_options5(){
        document.getElementById('univ--nav-options5').style.display = "block";
}
function univ_hide_options5(){
        document.getElementById('univ--nav-options5').style.display = "none";
}



function form_design(){
        document.getElementById('program-search-form').style.outline = "2px solid black";
        document.getElementById('program-search-form').style.borderRadius = "3px";
}
function form_design1(){
        document.getElementById('program-search-form').style.outline = "none";
}



function showByInterestLinks(){
        if(document.getElementById('byInterestLinks').style.display == "none"){
        document.getElementById('byInterestLinks').style.display = "block";
        document.getElementById('byInterestIcon').className = "fas fa-angle-up";
        document.getElementById('byDegreeLinks').style.display = "none";
        document.getElementById('byDegreeIcon').className = "fas fa-angle-down";
        }else{
                document.getElementById('byInterestLinks').style.display = "none";
                document.getElementById('byInterestIcon').className = "fas fa-angle-down";
                document.getElementById('byDegreeLinks').style.display = "none";
                document.getElementById('byDegreeIcon').className = "fas fa-angle-down";  
        }
}
function showByDegreeLinks(){
        if(document.getElementById('byDegreeLinks').style.display == "none"){
        document.getElementById('byDegreeLinks').style.display = "block";
        document.getElementById('byDegreeIcon').className = "fas fa-angle-up";
        document.getElementById('byInterestLinks').style.display = "none";
        document.getElementById('byInterestIcon').className = "fas fa-angle-down";
        }else{
                document.getElementById('byDegreeLinks').style.display = "none";
                document.getElementById('byDegreeIcon').className = "fas fa-angle-down";
                document.getElementById('byInterestLinks').style.display = "none";
                document.getElementById('byInterestIcon').className = "fas fa-angle-down";  
        }
}


function videoPlay(){
        document.getElementById("video-frame1").style.display = "block";
}