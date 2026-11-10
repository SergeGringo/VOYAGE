const form = document.getElementById('booking-form');
const steps = Array.from(document.querySelectorAll('.step'));
const progress = document.getElementById('progress');
const progressTrack = document.querySelector('.progress-track');
const stepCount = document.getElementById('step-count');
const status = document.getElementById('form-status');
let currentStep = 0;

function updateProgress() {
    const progressPercentage = ((currentStep + 1) / steps.length) * 100;
    progress.style.width = progressPercentage + '%';
    progressTrack.setAttribute('aria-valuenow', String(currentStep + 1));
    stepCount.textContent = `Étape ${currentStep + 1} sur ${steps.length}`;
}

function showStep(index) {
    steps.forEach((step, stepIndex) => {
        step.hidden = stepIndex !== index;
    });
    status.hidden = true;
    updateProgress();
    steps[index].querySelector('input').focus();
}

document.querySelectorAll('.next').forEach(button => {
    button.addEventListener('click', () => {
        const input = steps[currentStep].querySelector('input');
        if (!input.reportValidity()) {
            return;
        }
        currentStep++;
        showStep(currentStep);
    });
});

document.querySelectorAll('.prev').forEach(button => {
    button.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });
});

form.addEventListener('submit', event => {
    event.preventDefault();
    if (!form.checkValidity()) {
        const invalidInput = form.querySelector(':invalid');
        currentStep = steps.findIndex(step => step.contains(invalidInput));
        showStep(currentStep);
        invalidInput.reportValidity();
        return;
    }
    status.textContent = 'Vos informations sont valides, mais aucun service d’envoi n’est encore configuré sur ce site.';
    status.hidden = false;
});

updateProgress();