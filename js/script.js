function confirmAction(message) {
    return confirm(message);
}

document.addEventListener('DOMContentLoaded', () => {
    const skillForm = document.querySelector('#skill-form');
    if (skillForm) {
        skillForm.addEventListener('submit', (e) => {
            if (!confirm('Are you sure you want to add this skill?')) {
                e.preventDefault();
            }
        });
    }
});