function handleResponseData(data) {
    console.log(data)
}

function collectAsFormData() {
    const formData = new FormData();

    document.querySelectorAll('form [name]').forEach(function(el) {
        const elAttrType = el.getAttribute('type');

        if (elAttrType == 'checkbox' && el.checked == false) {
            return;
        }

        if (elAttrType == 'file') {
            if (el.files[0]) {
                formData.append(el.name, el.files[0]);
            }
        } else {
            formData.append(el.name, el.value);
        }
    });

    return formData;
}

function collectAsObject() {
    const data = {};

    document.querySelectorAll('form [name]').forEach(function(el) {
        const elAttrType = el.getAttribute('type');

        if (elAttrType == 'file') {
            return;
        }

        if (elAttrType == 'checkbox' && el.checked == false) {
            return;
        }

        let name = el.name;

        if (name.endsWith('[]')) {
            name = name.replace('[]', '');

            if (!(name in data)) {
                data[name] = [];
            }

            data[name].push(el.value);
        } else {
            data[name] = el.value;
        }
    });

    return data;
}

window.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('#submit-ajax-form_data')?.addEventListener('click', async function() {
        const response = await fetch(window.location.href, {
            method: 'POST',
            cache: 'no-cache',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'text/html'
            },
            body: collectAsFormData()
        });

        const htmlData = await response.text();

        document.open();
        document.write(htmlData);
        document.close();
    });

    document.querySelector('#submit-ajax-json')?.addEventListener('click', async function() {
        const response = await fetch(window.location.href, {
            method: 'POST',
            cache: 'no-cache',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(collectAsObject())
        });

        const responseData = await response.json();

        handleResponseData(responseData);
    });

    document.querySelector('#submit-ajax-json-v2')?.addEventListener('click', async function() {
        const response = await fetch(window.location.href, {
            method: 'POST',
            cache: 'no-cache',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: collectAsFormData()
        });

        const responseData = await response.json();

        handleResponseData(responseData);
    });
});