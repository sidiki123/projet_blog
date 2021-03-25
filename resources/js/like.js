const forms = document.querySelectorAll('#form-js');

forms.forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const url = this.getAttribute('action');
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const formation_liste_id = this.querySelector('#formation_liste-id-js').value;
        const count = this.querySelector('#count-js');
        console.log(url);

        fetch(url, {
            headers: {
                'Content-Type': 'apllication/json',
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            method: 'POST',
            body: JSON.stringify({
                id: formation_liste_id
            })
        }).then(response => {
            response.json().then(data => {
                count.innerHTML = data.count + ' Like(s)';
            })
        }).catch(error => {
            console.log(error)
        });
    });
});