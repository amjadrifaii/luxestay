let agent1name=document.getElementById("agent1_name")
let agent1_dep=document.getElementById("agent1_department")
let agent1_pfp=document.getElementById("agent1_img")

let agent2name=document.getElementById("agent2_name")
let agent2_dep=document.getElementById("agent2_department")
let agent2_pfp=document.getElementById("agent2_img")


let agent3name=document.getElementById("agent3_name")
let agent3_dep=document.getElementById("agent3_department")
let agent3_pfp=document.getElementById("agent3_img")


fetch('get-data.php/get_agents')
    .then(response=>response.json())
    .then(items=>{
        agent1name.innerHTML=items[0].full_name;
        agent1_dep.innerHTML=items[0].department;
        agent1_pfp.src=items[0].image_path;

        agent2name.innerHTML=items[1].full_name;
        agent2_dep.innerHTML=items[1].department;
        agent2_pfp.src=items[1].image_path;


        agent3name.innerHTML=items[2].full_name;
        agent3_dep.innerHTML=items[2].department;
        agent3_pfp.src=items[2].image_path;
    })
    .catch(error => console.error('Error fetching agents info :', error));