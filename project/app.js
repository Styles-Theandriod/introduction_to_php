// Function to make an Ajax request
function fetchData() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse JSON response
            var data = JSON.parse(xhr.responseText);

            // Display data on the page
            displayData(data);
        }
    };

    // Replace the URL with your server endpoint
    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos", true);
    xhr.send();
}

// Function to display data on the page
function displayData(data) {
    var container = document.getElementById("data-container");

    // Clear previous content
    container.innerHTML = "";

    // Create a list to display the data
    var list = document.createElement("ul");

    // Iterate through the data and create list items
    data.forEach(function(item) {
        var listItem = document.createElement("li");
        listItem.textContent = item.title;
        list.appendChild(listItem);
    });

    // Append the list to the container
    container.appendChild(list);
}

// Fetch data when the page loads
window.onload = fetchData;