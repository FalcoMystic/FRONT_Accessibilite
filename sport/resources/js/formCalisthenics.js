const form = document.getElementById("formulaire-contact");
const successMessage = document.getElementById("message-succes");

const messages = {
    nom: "Veuillez saisir votre nom.",
    prenom: "Veuillez saisir votre prénom.",
    email: "Veuillez saisir une adresse e-mail valide, par exemple : nom@exemple.fr.",
    niveau: "Veuillez choisir votre niveau de pratique.",
};

function showError(control, key) {
    const error = document.getElementById(`${key}-erreur`);
    error.textContent = messages[key];
    error.hidden = false;
    control.setAttribute("aria-invalid", "true");
}

function clearError(control, key) {
    const error = document.getElementById(`${key}-erreur`);
    error.hidden = true;
    error.textContent = "";
    control.removeAttribute("aria-invalid");
}

form.addEventListener("submit", (event) => {
    event.preventDefault();

    let firstInvalid = null;

    ["nom", "prenom", "email"].forEach((id) => {
        const field = document.getElementById(id);
        if (field.validity.valid) {
            clearError(field, id);
        } else {
            showError(field, id);
            firstInvalid ??= field;
        }
    });

    const fieldset = form.querySelector("fieldset");
    const radios = form.querySelectorAll('input[name="niveau"]');
    if ([...radios].some((r) => r.checked)) {
        clearError(fieldset, "niveau");
    } else {
        showError(fieldset, "niveau");
        firstInvalid ??= radios[0];
    }

    if (firstInvalid) {
        firstInvalid.focus(); // focus sur la PREMIÈRE erreur, à la soumission seulement
        successMessage.hidden = true;
        return;
    }

    successMessage.textContent =
        "Votre message a bien été envoyé. Nous vous répondrons prochainement.";
    successMessage.hidden = false;
});

// Efface l'erreur dès que l'utilisateur corrige, sans jamais déplacer le focus
form.addEventListener("input", (event) => {
    const field = event.target;
    if (
        field.name &&
        field.validity.valid &&
        field.hasAttribute("aria-invalid")
    ) {
        clearError(field, field.id);
    }
});
