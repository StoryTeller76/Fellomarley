document.getElementById("role").addEventListener("change", function() {
    var role = this.value;
    var cvContainer = document.getElementById("cvContainer");
    var proofsContainer = document.getElementById("proofsContainer");
  
    if (role === "supervisor") {
      cvContainer.style.display = "block";
      proofsContainer.style.display = "block";
    } else {
      cvContainer.style.display = "none";
      proofsContainer.style.display = "none";
    }
  });
  
  document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var role = document.getElementById("role").value;
  
    var cvFile = null;
    var proofsFiles = null;
  
    if (role === "supervisor") {
      cvFile = document.getElementById("cv").files[0];
      proofsFiles = document.getElementById("proofs").files;
    }
  
    console.log("Name:", name);
    console.log("Email:", email);
    console.log("Password:", password);
    console.log("Role:", role);
    console.log("CV File:", cvFile);
    console.log("Proofs Files:", proofsFiles);
  
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("role").value = "supervisor";
    document.getElementById("cv").value = "";
    document.getElementById("proofs").value = "";
  });
  