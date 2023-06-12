const validateModal = document.querySelector("#validate-modal");
const buttonModifiers = document.querySelectorAll("#button-modifier"); 

let buttonModifier = "";

const validateSupprimer = document.querySelector("#validate-supprimer"); 
const buttonSupprimers = document.querySelectorAll("#button-supprimer"); 

buttonModifiers.forEach(button => {
    button.addEventListener("click", event => {
        // Obtient l'élément (bouton) qui a été cliqué
        
            buttonModifier = event.target;

        // Faites quelque chose avec le bouton cliqué
        console.log("Le bouton cliqué est :", buttonModifier);
    });
});

validateModal.addEventListener('click',  event => {
    
    const idValue = document.querySelector(".id-value");
    idValue.value = buttonModifier.getAttribute('data-id');
    // idValue.
    console.log('senegal');
    // alert(buttonModifier.getAttribute('data-id'));

});


let buttonSupprimer = "";

// Récupérer le bouton de suppression
buttonSupprimers.forEach(button => {
    button.addEventListener('click',event => {
        buttonSupprimer = event.target;
        let nom = buttonSupprimer.getAttribute('data-libelle');
        let h6 = document.querySelector("#msg-sup");
        h6.textContent = "Etes vous sur de vouloir supprimer "+ nom+" ?" ;
    })

  
});

validateSupprimer.addEventListener('click', () => {
    let idvalueM = document.querySelector('.id-valueM');
    idvalueM.value = buttonSupprimer.getAttribute("data-id");
    
})



const buttonEnregistrer = document.getElementById("button-enregistrer");
const buttonModifies = document.querySelectorAll("#modifier-eleve");

let buttonModifir = "";
buttonModifies.forEach(button => {
    button.addEventListener('click', event => {
        buttonModifies = event.target;
        Alert(buttonModifies);
    }
    )
});
