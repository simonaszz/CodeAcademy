const SVG_PATH_TRASH = 'M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z';
const SVG_PATH_PENCIL = 'M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z';
const SVG_PATH_BELL = 'M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z';

function createTdWithText(text) {
	const td = document.createElement('td');

	// https://developer.mozilla.org/en-US/docs/Web/API/Document/createTextNode
	const textNode = document.createTextNode(text);
	
	td.appendChild(textNode);

	return td;
}

function getTrashButton() {
	const trashButton = document.createElement('button');

	trashButton.appendChild(getBootstrapIcon(SVG_PATH_TRASH));

	trashButton.addEventListener('click', (event) => {
		// https://developer.mozilla.org/en-US/docs/Web/API/Element/remove
		// https://developer.mozilla.org/en-US/docs/Web/API/Element/closest

		if (confirm('Are you sure?')) {
			event.target.closest('tr').remove();
		}
	});

	return trashButton;
}

function getActions() {
	const td = document.createElement('td');

	td.classList.add('actions');

	const pencilButton = document.createElement('button');

	pencilButton.disabled = true;

	pencilButton.appendChild(getBootstrapIcon(SVG_PATH_PENCIL));

	td.appendChild(pencilButton);
	td.appendChild(getTrashButton());

	const bellButton = document.createElement('button');

	bellButton.appendChild(getBootstrapIcon(SVG_PATH_BELL));
	bellButton.addEventListener('click', () => alert('Notification sent'));

	td.appendChild(bellButton);

	return td;
}

function getBootstrapIcon(pathValue) {
    const xmlns = 'http://www.w3.org/2000/svg';

    const svg = document.createElementNS(xmlns, 'svg');

    // https://developer.mozilla.org/en-US/docs/Web/API/Element/setAttribute
    // https://developer.mozilla.org/en-US/docs/Web/API/Element/getAttribute
    svg.setAttribute('width', 16);
    svg.setAttribute('height', 16);
    svg.setAttribute('viewBox', '0 0 16 16');

    const path = document.createElementNS(xmlns, 'path');
    
    path.setAttribute('d', pathValue);

    svg.appendChild(path);

    return svg;
}

function appendCompany(company, contact, country) {
	// https://developer.mozilla.org/en-US/docs/Web/API/Document/createElement
	const tr = document.createElement('tr');

	if (Math.random() < 0.5) {
		tr.style['background-color'] = '#FF5733';
	}

	const tdCompany = createTdWithText(company);

	// https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild
	tr.appendChild(tdCompany);

	const tdContact = createTdWithText(contact);

	tr.appendChild(tdContact);

	const tdCountry = createTdWithText(country);

	// https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild
	tr.appendChild(tdCountry);

	tr.appendChild(getActions());

	companiesTbody.appendChild(tr);
}

const companiesTbody = document.querySelector('#companies > tbody');

const companies = [
    [
        'Alfreds Futterkiste',
        'Maria Anders',
        'Germany',
    ],
    [
        'Centro comercial Moctezuma',
        'Francisco Chang',
        'Mexico',
    ],
    [
        'Ernst Handel',
        'Roland Mendel',
        'Austria',
    ],
    [
        'Island Trading',
        'Helen Bennett',
        'UK',
    ],
    [
        'Laughing Bacchus Winecellars',
        'Yoshi Tannamuri',
        'Canada',
    ],
    [
        'Magazzini Alimentari Riuniti',
        'Giovanni Rovelli',
        'Italy',
    ],
];

window.addEventListener('DOMContentLoaded', (event) => {
	console.log('DOM fully loaded and parsed', event);

	for (let data of companies) {
		appendCompany(data[0], data[1], data[2]);
	}
	
	document.querySelector('#company-create')?.addEventListener('click', () => {
		appendCompany(
			document.querySelector('#company').value,
			document.querySelector('#contact').value,
			document.querySelector('#country').value
		);
	});
});