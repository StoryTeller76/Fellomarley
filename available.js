const jobList = document.getElementById("jobList");

// Sample job data
const jobs = [
    {
        title: "Content Writer",
        description: "We are looking for talented content writers to create engaging articles and blog posts on various topics."
    },
    {
        title: "Virtual Assistant",
        description: "We need a reliable virtual assistant to provide administrative support and handle tasks remotely."
    },
    {
        title: "Online Tutor",
        description: "We are seeking experienced online tutors to teach various subjects to students in virtual classrooms."
    }
];

// Display available jobs
jobs.forEach(function(job) {
    const li = document.createElement("li");
    li.innerHTML = `
        <h3>${job.title}</h3>
        <p>${job.description}</p>
        <button class="applyButton">Apply</button>`;
    jobList.appendChild(li);
});

// Handle apply button click
const applyButtons = document.getElementsByClassName("applyButton");
Array.from(applyButtons).forEach(function(button) {
    button.addEventListener("click", function() {
        // Redirect to admin_panel.php
        window.location.href = "admin panel.php";
    });
});