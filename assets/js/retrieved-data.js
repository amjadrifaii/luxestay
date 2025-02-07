let title = document.getElementById("house_name");
let desc = document.getElementById("house_description");
let about = document.getElementById("guest_house_about");
let loc = document.getElementById("house_location");

fetch('get-data.php/get_guest_house')
    .then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            console.log(item);
            title.innerHTML = item[0].guest_house_name;
            desc.innerHTML = item[0].guest_house_des;
            about.innerHTML = item[0].guest_house_about; // Assuming you want the same description here
            loc.innerHTML = item[0].location_id; // Assuming location_id is the location name
        } else {
            title.innerHTML = "Guest house not found.";
        }
    })
    .catch(error => console.error('Error fetching guest house data:', error));