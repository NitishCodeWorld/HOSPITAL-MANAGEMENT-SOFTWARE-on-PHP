
function autoFillDetail(){
    $cVillage = document.getElementById('cVillage');
    $cPost = document.getElementById('cPost');
    $cPoliceStation = document.getElementById('cPoliceStation');
    $cDistrict = document.getElementById('cDistrict');
    $cState = document.getElementById('cState');
    $cPinCode = document.getElementById('cPinCode');

    $pVillage = document.getElementById('pVillage');
    $pPost = document.getElementById('pPost');
    $pPoliceStation = document.getElementById('pPoliceStation');
    $pDistrict = document.getElementById('pDistrict');
    $pState = document.getElementById('pState');
    $pPinCode = document.getElementById('pPinCode');

    $checkbox = document.getElementById('checkBox');

    if($checkbox.checked == true){
        $cVillageValue = $cVillage.value;
        $cPostValue = $cPost.value;
        $cPoliceStationValue = $cPoliceStation.value;
        $cDistrictValue = $cDistrict.value;
        $cStateValue = $cState.value;
        $cPinCodeValue = $cPinCode.value;
    
        $pVillage.value = $cVillageValue;
        $pPost.value = $cPostValue;
        $pPoliceStation.value = $cPoliceStationValue;
        $pDistrict.value = $cDistrictValue;
        $pState.value = $cStateValue;
        $pPinCode.value = $cPinCodeValue; 
    }else{
        $pVillage.value = "";
        $pPost.value = "";
        $pPoliceStation.value = "";
        $pDistrict.value = "";
        $pState.value = "";
        $pPinCode.value = "";
    }
}


function validateForm(){
    var name = document.getElementById('name').value;
    var fname = document.getElementById('fname').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var dob = document.getElementById('dob').value;
    var adhar = document.getElementById('adhar').value;

    if(name == '' || fname == '' || mobile == '' || email == '' || dob == '' || adhar == '')
    {
        alert("Name Field required");
        return false;
        name.focus.name;
    }
    else if(name == NULL || fname == NULL || mobile == NULL || email == NULL || dob == NULL || adhar == NULL){
        alert("Name Field required");
        return false;
        name.focus.name;
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}