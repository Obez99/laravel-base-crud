require('./bootstrap');

window.addEventListener("DOMContentLoaded", () => {
  $form = document.querySelector(".delete-form");

  $form.addEventListener("submit", (e) => {
    if (!confirm("Sicuro di voler eliminare il fumetto? L'operazione sarà irreversibile.")) {
      e.preventDefault();
    };
  });
});