
let name1=document.getElementById("prop1_name");
let costpn1=document.getElementById("prop1_cost");
let loc1=document.getElementById("prop1_location");
let img1=document.getElementById("img1");
let prop1_anchor=document.getElementById("prop1_anchor");

let name2=document.getElementById("prop2_name");
let costpn2=document.getElementById("prop2_cost");
let loc2=document.getElementById("prop2_location");
let img2=document.getElementById("img2");
let prop2_anchor=document.getElementById("prop2_anchor");



let name3=document.getElementById("prop3_name");
let costpn3=document.getElementById("prop3_cost");
let loc3=document.getElementById("prop3_location");
let img3=document.getElementById("img3");
let prop3_anchor=document.getElementById("prop3_anchor");



let agent1name=document.getElementById("agent1_name")
let agent1_dep=document.getElementById("agent1_department")
let agent1_pfp=document.getElementById("agent1_img")

let agent2name=document.getElementById("agent2_name")
let agent2_dep=document.getElementById("agent2_department")
let agent2_pfp=document.getElementById("agent2_img")


let agent3name=document.getElementById("agent3_name")
let agent3_dep=document.getElementById("agent3_department")
let agent3_pfp=document.getElementById("agent3_img")

let ids=[];
let randomIds = [];
const count = 3;

fetch('get-data.php/get_guest_house_ids')
    .then(response=>response.json())
    .then(items=>{
        items.forEach(item=>{
            ids.push(item);})
 
    ids=ids.sort(() => Math.random() - 0.5).slice(0, 3);
    fetch('get-data.php/get_guest_house_index')
        .then(response=>response.json())
        .then(items=>{

            const carousel1=items.find((item)=>item.guest_house_id==ids[0].guest_house_id);
            const carousel2=items.find((item)=>item.guest_house_id==ids[1].guest_house_id);
            const carousel3=items.find((item)=>item.guest_house_id==ids[2].guest_house_id);        
            name1.textContent = carousel1.guest_house_name;
            costpn1.textContent = carousel1.cost+"$";
            loc1.textContent = carousel1.location_desc;
            img1.src = carousel1.image_path ;
            prop1_anchor.setAttribute("href",`property-single.php?guest_house_id=${ids[0].guest_house_id}`);

            name2.textContent =carousel2.guest_house_name;
            costpn2.textContent = carousel2.cost+"$";
            loc2.textContent = carousel2.location_desc;
            img2.src = carousel2.image_path ;
            prop2_anchor.setAttribute("href",`property-single.php?guest_house_id=${ids[1].guest_house_id}`);


            name3.textContent = carousel3.guest_house_name;
            costpn3.textContent = carousel3.cost+"$";
            loc3.textContent = carousel3.location_desc;
            img3.src = carousel3.image_path ;
            prop3_anchor.setAttribute("href",`property-single.php?guest_house_id=${ids[2].guest_house_id}`);

    })
    .catch(error => console.error('Error fetching guest house images:', error));

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
    
})
    
    

    function decodeHtmlEntity(str) {
        var doc = new DOMParser().parseFromString(str, 'text/html');
        return doc.documentElement.textContent;
    }
    
    
    