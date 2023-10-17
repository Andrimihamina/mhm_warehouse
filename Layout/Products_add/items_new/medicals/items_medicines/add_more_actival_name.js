//Actives variables
var add = document.querySelector('input[id="flexSwitchCheckDefault"]');
var add_1 = document.querySelector('div[id="active-1"]');
var add_2 = document.querySelector('div[id="active-2"]');

add_1.style.display = 'none';
add_2.style.display = 'none';

add.onchange = function() {
    if (add.checked) {
        add_1.style.display = 'inline-table';
        add_1.value = '';
        add_2.style.display = 'inline-table';
        add_2.value = '';
    } else {
        add_1.style.display = 'none';
        add_2.style.display = 'none';
    }
};