window.onload = function() {
    var seletor = document.getElementById('seletor');
    var f1 = document.getElementById('f1');
    var f2 = document.getElementById('f2');

    seletor.onchange = function() {
        if (seletor.value == 'segurança') {
            f1.className = 'cor';
            f2.className = 'hide';
        } else if (seletor.value == 'gerais') {
            f1.className = 'hide';
            f2.className = 'cor';
        } else {
            f1.className = 'hide';
            f2.className = 'hide';
        }
    }
}

