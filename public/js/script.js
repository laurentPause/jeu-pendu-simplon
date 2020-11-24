const buttonsLettre = document.querySelectorAll('.pendu-btn');

buttonsLettre.forEach(btnLettre => {
    btnLettre.addEventListener('click',() => verifLettre(btnLettre));
});

async function verifLettre(btnLettre) {
    const lettre = btnLettre.innerHTML;
    btnLettre.setAttribute('disabled', true);
    try {
        const verifLettre = await axios.get(`/?lettre=${lettre}`);
        console.log(verifLettre);

        if(verifLettre.data.limite) {
            alert('Vous avez perdu !!!');
            window.location.reload();
        }

        if(verifLettre.data.trouver) {
            alert('Vous avez Trouver !!!');
            window.location.reload();
        }

        if(verifLettre.data.asLetter) {
            placeLettre(verifLettre.data.posLetter, lettre);
        }else{
            displayPendu(verifLettre.data.erreur);
        }
    } catch (error) {
        console.log(error);
    }
}

function placeLettre(positions, lettre){
    const divMot = document.getElementById('pendu-mot');
    positions.forEach(pos => {
        divMot.children[pos].innerHTML = lettre;
    });
}

function displayPendu(erreur){
    const divImg = document.getElementById('pendu-img');
    const posImg = erreur * -250;
    divImg.setAttribute('style',`background-position:${posImg}px 0px`);
    
}
