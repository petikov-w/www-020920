function s1()
{
    let a123 = window.getComputedStyle(document.getElementById('overlay')).display;
    if(a123==='none') {
        document.getElementById('overlay').style.display='flex';
    }
}

function s2()
{
    let a123 = window.getComputedStyle(document.getElementById('overlay')).display;
    if(a123==='flex') {
        document.getElementById('overlay').style.display='none';
    }
}

function empty_form () {
    var txt = document.getElementById('name').value;
    if(txt === '') {
        alert('Вы забыли ввести текст.');
        document.getElementById('error1').style.display='block';
        return false;
    }
    return true;
}