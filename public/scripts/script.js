document.getElementById('title-search-input').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
        const name = row.cells[0].textContent.toLowerCase();
        const phone = row.cells[1].textContent.toLowerCase();
        const email = row.cells[2].textContent.toLowerCase();

        if (name.includes(searchValue) || phone.includes(searchValue) || email.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

function removeContact(contact){
    if (confirm(`Deseja realmente remover este contato?\n\n${contact.name}\n${contact.phone}\n${contact.email}`)) {
        window.location.href = `./actions/removal.php?id=${contact.id}`;
    }
}

function alterContact(contact){
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'form-alteration.php';
    for (const c in contact) {
        if (contact.hasOwnProperty(c)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = c;
            input.value = contact[c];
            form.appendChild(input);
        }
    }
    document.body.appendChild(form);
    form.submit();
}
