
        function showSampleCodes() {
            // Retrieve the element where you want to display the sample codes
            var sampleCodesElement = document.getElementById("sample-codes");
            
            // Define the sample codes (you can replace this with your actual sample codes)
            var sampleCodes = [
                "Sample Code 1",
                "Sample Code 2",
                "Sample Code 3"
            ];
            
            // Clear any existing content in the sample codes element
            sampleCodesElement.innerHTML = "";
            
            // Create a list element for each sample code and append it to the sample codes element
            sampleCodes.forEach(function(code) {
                var listItem = document.createElement("li");
                listItem.textContent = code;
                sampleCodesElement.appendChild(listItem);
            });
        }
   