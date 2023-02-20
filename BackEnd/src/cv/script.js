let button = document.querySelector('#button-submit');

button.addEventListener('click', function () {
    const myFormData = new FormData();

    document.querySelectorAll('form [name]').forEach(function (el) {
        if (el.name.endsWith('[]') && el.checked == false) {
            return;
        } else {
            myFormData.append(el.name, el.value);
        }
    });

    fetch('app.php', {
        method: 'POST',
        cache: 'no-cache',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: myFormData
    });

});