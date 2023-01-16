window.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('#submit-ajax')?.addEventListener('click', function() {
        const formData = new FormData();

        document.querySelectorAll('form [name]').forEach(function(el) {
            if (el.name.endsWith('[]') && el.checked == false) {
                return;
            }

            formData.append(el.name, el.value);
        });

        fetch('show.php', {
            method: 'POST',
            cache: 'no-cache',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
              // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: formData
        });
    });
});