const applicationList = document.getElementById("applicationList");

// Function to process the job application
function processApplication(fullName, email, phone, resume, coverLetter) {
    // Here, you can implement the logic to process the job application, such as sending an email to the applicant or storing the application in a database.
    // For demonstration purposes, we'll simply log the application details to the console.
    console.log("Received Job Application:");
    console.log("Full Name: " + fullName);
    console.log("Email: " + email);
    console.log("Phone: " + phone);
    console.log("Resume: " + resume);
    console.log("Cover Letter: " + coverLetter);
}

// Function to display the job applications
function displayApplications(applications) {
    applicationList.innerHTML = "";
    applications.forEach(function(application) {
        const li = document.createElement("li");
        li.innerHTML = `<h3>${application.fullName}</h3><p>Email: ${application.email}</p><p>Phone: ${application.phone}</p><p>Resume: ${application.resume}</p><p>Cover Letter: ${application.coverLetter}</p>`;
        applicationList.appendChild(li);
    });
}

// Sample job applications (for testing)
const jobApplications = [
    {
        fullName: "John Doe",
        email: "johndoe@example.com",
        phone: "123456789",
        resume: "resume1.pdf",
        coverLetter: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
    },
    {
        fullName: "Jane Smith",
        email: "janesmith@example.com",
        phone: "987654321",
        resume: "resume2.pdf",
        coverLetter: "Nulla facilisi. Curabitur vestibulum, turpis quis porttitor viverra."
    }
];

// Display the job applications
displayApplications(jobApplications);
