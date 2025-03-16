function generateCalendar(year, month, cal) {


    cal.innerHTML = ""; // Clear previous calendar
    const firstDay = new Date(year, month, 1);  // First day of the current month
    const lastDay = new Date(year, month , 0); // Last day of the current month


    let strMonth;
    switch(month){
        case 1: strMonth="January";
                break;
        case 2: strMonth="February";
                break;
        case 3: strMonth="March";
                break;
        case 4: strMonth="April";
                break;
        case 5: strMonth="May";
                break;
        case 6: strMonth="June";
                break;
        case 7: strMonth="July";
                break;
        case 8: strMonth="August";
                break;
        case 9: strMonth="September";
                break;
        case 10: strMonth="October";
                break;
        case 11: strMonth="November";
                break;
        case 12: strMonth="December";
                break;
        default: strMonth="Invalid Month";

        
    }
    let monthElement=`<div>${strMonth}</div>`;
    let m = document.createElement("div");
    m.classList.add("monthdiv");
    m.innerHTML=monthElement;
     m.style.marginBottom = "7px";
     m.style.width="75px";
    cal.appendChild(m);


    // Loop through each day of the month
    for (let day = 1; day <= lastDay.getDate(); day++) {
        const dateStr = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");
        dayElement.textContent = day;
        dayElement.setAttribute("data-date", dateStr); // Add a data attribute for the date
        // Check if the date is booked

        fetch('get-data.php/get_reservations')
        .then(response => response.json())
        .then(item => {
            let bookedDates = '';
            let booked = [];    
            if (item && item.length > 0) {
                for (let i = 0; i < item.length; i++) {
                    if (item[i].reservation_date) {
                        bookedDates += item[i].reservation_date + ',';
                    }
                }
                if (bookedDates.endsWith(',')) {
                    bookedDates = bookedDates.slice(0, -1);
                }
                booked = bookedDates.split(',');
            }
        if (booked.includes(dateStr)) {
            dayElement.classList.add("disabled");
        } else {
            dayElement.addEventListener("click", () => selectDate(dateStr, dayElement));
        }

})     .catch(error => console.error('Error fetching reservation dates:', error));;

      

        // Append the day element to the calendar
      
        
        
        
        cal.appendChild(dayElement);
    }
    
}


function selectDate(dateStr, dayElement) { 
      prevdateChecker=new Date(dateStr);
      startOfDay=new Date();
      startOfDay.setHours(0,0,0,0);
      if(prevdateChecker<startOfDay){ // we check reservation time and the start of today if the selected end is before today it cant be picked
        resetSelectedDays();
      }
        else{
          if (!selectedStart) {
      

              selectedStart = dateStr;
              
              dayElement.classList.add("selected");
              reservationDetails.innerText = `Start Date: ${selectedStart}`;
              totalNights.innerText = "";
        }
          else if (!selectedEnd && dateStr !== selectedStart) {
                precedenseChecker=new Date(selectedStart);
                selectedEnd = dateStr;
                if(new Date(selectedEnd)-precedenseChecker<0){
                alert("end date is before start date");
                resetSelectedDays();
      }
              else{
                let costpn=document.getElementById("house_costpn");
              highlightRange(selectedStart, selectedEnd);
              const nights = calculateNights(selectedStart, selectedEnd);
              const noDollar = parseFloat(costpn.innerHTML.replace('$', ''));
              const totalPrice = noDollar*nights;

              reservationDetails.innerText = `Check in: ${selectedStart}`;
              checkout.innerText = `Checkout: ${selectedEnd}`;
              totalNights.innerText = `Total Nights: ${nights}`;
              prices.innerText = `Price: $${totalPrice}`;
              
              }
    }
        else if (!selectedEnd && dateStr == selectedStart) {
              selectedEnd = dateStr;
              highlightRange(selectedStart, selectedEnd);
              const totalPrice =document.getElementById("house_costpn").innerHTML;
              nights=1;
              reservationDetails.innerText = `Check in: ${selectedStart}`;
              const checkoutOneNight=new Date(selectedStart);
              checkoutOneNight.setDate(checkoutOneNight.getDate()+1);
              const formattedDate = formatDate(checkoutOneNight);
              
              checkout.innerText = `Checkout: ${formattedDate} Morning`;
              totalNights.innerText = `Total Nights: ${nights}`;
              prices.innerText = `Price: ${totalPrice}`;
          
    } else {
        resetSelection();
        selectDate(dateStr, dayElement);
    }
  /* SUMMARY OF FUCNTION:
    if we press a day for first time its selected start
    if its second time then client staying one night only
    if second button pressed is different than first then 
    its selected end and we call fucntion to highlight dates
    and calculate the cost. SIMPLE AF BUT LOOKS SCARY

    if both start and end selected reset them and start the 
    function anew with the same parameters sent last time 
    (recursive)

  */
        }
        
   
}

function resetSelectedDays(){
  selectedEnd=null;
  selectedStart=null;
  document.querySelectorAll('.selected').forEach(function(element) {
  element.classList.remove('selected');
});
  
}
function highlightRange(start, end) {
    // Clear previous selections
    document.querySelectorAll(".day").forEach(day => day.classList.remove("selected"));

    // Convert start and end dates to Date objects
    const startDate = new Date(start);
    const endDate = new Date(end);

    // Loop through all days in both calendars
    document.querySelectorAll(".day").forEach(day => {
        const dayDateStr = day.getAttribute("data-date");
      
        const dayDate = new Date(dayDateStr);
       

        // Highlight if the day is within the selected range
        if (dayDate >= startDate && dayDate <= endDate && !bookedDates.includes(dayDateStr)) { 
            day.classList.add("selected");
            /* compare current box with end and start date and if its between or equals
            add class selected that changes its color in css line 68*/
        }
    });
}

function calculateNights(start, end) {
    const startDate = new Date(start);
    const endDate = new Date(end);
    let nights = 0;

    // Loop through each day in the range
    for (let currentDate = new Date(startDate); currentDate <= endDate; currentDate.setDate(currentDate.getDate() + 1)) {
        const dateStr = formatDate(currentDate); // Format the date as YYYY-MM-DD
        const dayElement = document.querySelector(`.day[data-date="${dateStr}"]`);

        // Check if the day is not disabled (not reserved)
        if (dayElement && !dayElement.classList.contains("disabled")) {
            nights++; // Increment the night count
        }
    }

    return nights;
}

function resetSelection() {
    selectedStart = null;
    selectedEnd = null;
    document.querySelectorAll(".day").forEach(day => day.classList.remove("selected"));
    reservationDetails.innerText = "Select your reservation dates.";
    totalNights.innerText = "";
    checkout.innerText = "";
    prices.innerText = "";
}
function confirmReservation() {
    // Check if the user has selected a start and end date
    if (!selectedStart || !selectedEnd) {
        alert("Please select both a check-in and check-out date.");
        return;
    }

    const nights = calculateNights(selectedStart, selectedEnd);
    const totalPrice = nights * pricePerNight;

    // Set the hidden fields for form submission
          let dateArray = [];
          let currentDay=new Date(selectedStart);
          while(currentDay<=new Date(selectedEnd)){
                dateArray.push(formatDate(currentDay));
                currentDay.setDate(currentDay.getDate()+1); // we add each day between start and end to the string ,GO
                //                                                                         TO insert-reservation.php
          }
          document.getElementById("checkin_date").value = formatDate(selectedStart);
          document.getElementById("checkout_date").value = formatDate(selectedEnd);
          document.getElementById("total_nights").value = nights;
          document.getElementById("total_price").value = totalPrice;
          document.getElementById("selected_dates").value = dateArray.join(',');
          // Submit the form
         document.getElementById("reservation-form").submit();
          
    }



function formatDate(date) {
    const d = new Date(date);
    let day = d.getDate();
    let month = d.getMonth() + 1; // months are 0-based
    let year = d.getFullYear().toString(); // get last 2 digits of the year
    
    if(day < 10) day = '0' + day;
    if(month < 10) month = '0' + month;
    return year+'-'+month+'-'+day;
}



