const applicationForm = document.getElementById("applicationForm");

applicationForm.addEventListener("submit", function(event) {
    event.preventDefault();
    submitApplication();
});

function submitApplication() {
   
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const resume = document.getElementById("resume").value;
    const coverLetter = document.getElementById("coverLetter").value;

    setTimeout(function() {
        alert("Application submitted successfully!");
        applicationForm.reset();
    }, 1000);
}
