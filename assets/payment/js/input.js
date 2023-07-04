function show_hidden(id) {
    var elements = document.getElementsByClassName('m-3');

    // Masquer tous les éléments <input>
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = 'none';
    }

    var element = document.getElementById(id);
    var computedStyle = window.getComputedStyle(element);

    if (computedStyle.display === 'none') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}