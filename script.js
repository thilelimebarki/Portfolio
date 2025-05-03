document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".toggle-jobs");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const jobList = this.previousElementSibling; // Cible la liste de métiers juste avant le bouton

            if (jobList.style.display === "none" || jobList.style.display === "") {
                jobList.style.display = "block";
                this.textContent = "Masquer les métiers";
            } else {
                jobList.style.display = "none";
                this.textContent = "Découvrez les métiers accessibles";
            }
        });
    });

    
});
