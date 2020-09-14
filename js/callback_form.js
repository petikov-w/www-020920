function visible_form(form_id){
    if(window.getComputedStyle(document.getElementById(form_id)).display==='flex') {
        document.getElementById(form_id).style.display='none';
        return true;
    }
    if(window.getComputedStyle(document.getElementById(form_id)).display==='none') {
        document.getElementById(form_id).style.display='flex';
        return true;
    }
}

function empty_form() {
     let flag = true;
     let field_1 = document.getElementById('name').value;
     let field_2 = document.getElementById('telefon').value;

     if(field_1 === '') {
        document.getElementById('error1').style.display='block';
        flag = false;
     }
    if(field_2 === '') {
        document.getElementById('error2').style.display='block';
        flag = false;
    }
    return flag;
}



function empty_field(name, id) {
    let ass = document.getElementById(name).value;
    if( ass.trim().length !== 0) {
         document.getElementById(id).style.display='none';
    }
    else {
        document.getElementById(id).style.display='block';
    }
}

// function testFunction() {
//     var z = document.getElementById("name");
//     z.value = z.value.toUpperCase();
// }