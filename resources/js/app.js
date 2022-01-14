require('./bootstrap');

window.addEventListener("DOMContentLoaded", () => {
  $deleteButton = document.querySelector(".delete-form");

  $deleteButton.addEventListener("submit", (e) => {
    if (!confirm("Sicuro di voler eliminare il fumetto? L'operazione sarà irreversibile.")) {
      e.preventDefault();
    };
  });
});