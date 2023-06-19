<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Youth Programs - Available Jobs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            padding: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f2f2f2;
        }

        h2 {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Online Youth Programs - Available Jobs</h1>
    </header>

    <section>
        <h2>Available Jobs</h2>
        <ul id="jobList"></ul>
        <form action="" >
            <input type="submit" value="apply">
           </form>
    </section>

    <script>
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
            li.innerHTML = `<h3>${job.title}</h3><p>${job.description}</p>`;
            jobList.appendChild(li);
        });
    </script>
</body>
</html>
