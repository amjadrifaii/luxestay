let title = document.getElementById("house_name");
let desc = document.getElementById("house_description");
let about = document.getElementById("guest_house_about");
let loc = document.getElementById("house_location");
let type=document.getElementById("property_type");

fetch('get-data.php/get_guest_house')
    .then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            title.innerHTML = item[0].guest_house_name;
            desc.innerHTML = item[0].guest_house_des;
            about.innerHTML = item[0].guest_house_about;
            type.innerHTML=item[0].house_type;
        } else {
            title.innerHTML = "Guest house not found.";
        }

    })
    .catch(error => console.error('Error fetching guest house data:', error));


fetch('get-data.php/get_guest_house_location')
.then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            loc.innerHTML= item[0].location_desc;

        } else {
            title.innerHTML = "Unkown Location"
        }
    })
    .catch(error => console.error('Error fetching guest house location data:', error));

    fetch('get-data.php/get_house_type')
.then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            type.innerHTML= item[0].type_desc;
            console.log(item[0].type_desc);

        } else {
            title.innerHTML = "Unkown Location"
        }
    })
    .catch(error => console.error('Error fetching guest house location data:', error));