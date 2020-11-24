const buttonsLettre = document.querySelectorAll('.pendu-btn');
const btnModal = document.getElementById('penduModalBtn');

buttonsLettre.forEach(btnLettre => {
    btnLettre.addEventListener('click', () => verifLettre(btnLettre));
});

btnModal.addEventListener('click', () =>  window.location.reload());



async function verifLettre(btnLettre) {
    const lettre = btnLettre.innerHTML;
    btnLettre.setAttribute('disabled', true);
    try {
        const verifLettre = await axios.get(`/?lettre=${lettre}`);

        if (verifLettre.data.limite) {
            // window.location.reload();
            showModalLimite(verifLettre.data.mot);


        }

        if (verifLettre.data.trouver) {
            // alert('Vous avez Trouver !!!');
            // window.location.reload();
            showModalTrouver();
        }

        if (verifLettre.data.asLetter) {
            placeLettre(verifLettre.data.posLetter, lettre);
        } else {
            displayPendu(verifLettre.data.erreur);
        }
    } catch (error) {
        alert('Erreur serveur !!');
        console.log(error);
        window.location.reload();
    }
}

function placeLettre(positions, lettre) {
    const divMot = document.getElementById('pendu-mot');
    positions.forEach(pos => {
        divMot.children[pos].innerHTML = lettre;
    });
}

function displayPendu(erreur) {
    const divImg = document.getElementById('pendu-img');
    const posImg = erreur * -250;
    divImg.setAttribute('style', `background-position:${posImg}px 0px`);

}

function showModalLimite(mot) {
    $('#penduModal').modal('show');
    const modalTitle = document.getElementById('penduModalTitle');
    const modalContent = document.getElementById('penduModalContent');
    modalTitle.innerHTML = "Perdu !!!";
    modalContent.innerHTML = `Le mot était : ${mot}`;
}

function showModalTrouver() {
    $('#penduModal').modal('show');
    const modalTitle = document.getElementById('penduModalTitle');
    const modalContent = document.getElementById('penduModalContent');
    modalTitle.innerHTML = "Félicitation !!!";
    modalContent.innerHTML = `Vous avez trouver le bon mots`;

}
