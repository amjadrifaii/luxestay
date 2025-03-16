let image=document.getElementById("aboutimage");
let image1=document.getElementById("aboutimg1");
let image2=document.getElementById("aboutimg2");
fetch('get-data.php/get-web-images')
    .then(response=>response.json())
        .then(items=>{
            image.src=items[0].image_path;
            image1.src=items[1].image_path;
            image2.src=items[2].image_path;            
        }  
       
        )

.catch(error => console.error('Error fetching about images:', error));

