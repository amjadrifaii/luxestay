<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Property Single - GuestHouse Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #2e7d32;
        }

        /* Calendar Container */
        #calendar-container {
          
            max-width: 450px;
            margin: 20px ;
            background:rgba(255, 255, 255, 0.68);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        

        /* Calendar Grid */
        #calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        #calendarNext {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        /* Day Style */
        .day {
            padding: 15px;
            border-radius: 8px;
            background: #e8f5e9;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
        }

        .day:hover {
            background: #a5d6a7;
        }

        /* Selected Days */
        .selected {
            background: #4caf50 !important;
            color: white;
        }

        /* Disabled (Booked) Days */
        .disabled {
            background: #c8c8c8 !important;
            color: #777;
            cursor: not-allowed;
        }

        /* Reservation Info */
        #reservationDetails {
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
            color: #388e3c;
        }

        /* Buttons */
        button {
            background: #388e3c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
            transition: 0.3s;
        }

        button:hover {
            background: #2e7d32;
        }
    </style>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="property-single-page">

<?php

  include("header.html");
 
  ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Cozy Heaven</h1>
              <p class="mb-0">Nestled in the heart of Bint Jbeil, 
                Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">bint jbeil</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Real Estate 2 Section -->
    <section id="real-estate-2" class="real-estate-2 section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/property-slide/cozyHaven.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/property-slide/cozyHaven2.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/property-slide/cozyHaven3.jpg" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>About this Place</h2>
              <p>
                Nestled in the heart of Bint Jbeil, Cozy Heaven House offers a warm and inviting
                 retreat for those seeking comfort and tranquility. This charming guesthouse features cozy interiors,
                  modern amenities, and a peaceful outdoor space, perfect for relaxing and unwinding. 
                  Whether you're visiting family, exploring the beauty of South Lebanon, or simply escaping the city,
                   our home provides the ideal setting for a memorable stay.
                 Book your getaway today and experience true comfort in a welcoming atmosphere!
              </p>
          
   

    
 </div><!-- End Portfolio Description -->
   <form method="POST">
 <h2><b>Reservation Calendar:</b></h2>
    <div id="calendar-container">
        <div id="calendar"></div>
        <div id="calendarNext"></div>
        <p id="checkin">Select your reservation dates.</p>
        <p id="checkout"></p>
        <p id="totalNights"></p>
        <p id="price"></p>
        <input type="hidden" name="checkin_date" id="checkin_date">
        <input type="hidden" name="checkout_date" id="checkout_date">
        <input type="hidden" name="total_nights" id="total_nights">
        <input type="hidden" name="total_price" id="total_price">
        <button type="button" onclick="confirmReservation()">Confirm Reservation</button>
        
          </form>
          
    </div>
    
   
    <script>
   const calendar = document.getElementById("calendar");
const calendarNext = document.getElementById("calendarNext");
const reservationDetails = document.getElementById("checkin");
const checkout = document.getElementById("checkout");
const totalNights = document.getElementById("totalNights");
const prices = document.getElementById("price");
let selectedStart = null;
let selectedEnd = null;
const pricePerNight = 120; // Price per night

// Example of booked dates (Disable them)
const bookedDates = ["2025-02-12", "2025-02-15", "2025-02-20"];

function generateCalendar(year, month, cal) {
    cal.innerHTML = ""; // Clear previous calendar
    const firstDay = new Date(year, month + 1, 1);//first day of current month
    const lastDay = new Date(year, month + 1, 0); // last day of current month
    for (let day = 1; day <= lastDay.getDate(); day++) {
        const dateStr = `${year}-${String(month + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
        /* this is a common way for dates to get or send dates to a DB:
          gets year - gets month and convert it to string then pad it with 0 if string less than 2 cahracters
          gets day convert it to string then pad it with 0 if string less than 2 cahracters*/
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");
        dayElement.textContent = day;
        dayElement.setAttribute("data-date", dateStr); // Add a data attribute for the date

        // Disable booked dates
        if (bookedDates.includes(dateStr)) {
            dayElement.classList.add("disabled"); //adds disabled class to taken dates to make them grayed out in css line 74
        } else {
            dayElement.addEventListener("click", () => selectDate(dateStr, dayElement));
        }

        cal.appendChild(dayElement);//add button of day of the month
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
              highlightRange(selectedStart, selectedEnd);
              const nights = calculateNights(selectedStart, selectedEnd);
              const totalPrice = nights * pricePerNight;

              reservationDetails.innerText = `Check in: ${selectedStart}`;
              checkout.innerText = `Checkout: ${selectedEnd}`;
              totalNights.innerText = `Total Nights: ${nights}`;
              prices.innerText = `Price: $${totalPrice}`;
              }
    }
        else if (!selectedEnd && dateStr == selectedStart) {
              selectedEnd = dateStr;
              highlightRange(selectedStart, selectedEnd);
              const totalPrice =pricePerNight;
              nights=1;
              reservationDetails.innerText = `Check in: ${selectedStart}`;
              checkout.innerText = `Checkout: ${selectedEnd}`;
              totalNights.innerText = `Total Nights: ${nights}`;
              prices.innerText = `Price: $${pricePerNight}`;
          
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
    const startDate = new Date(start); // this takes the string that looks like 25-02-2025 and trasnforms it into a date format 
    const endDate = new Date(end);
    const diffTime = Math.abs(endDate - startDate);// the answer is returned in milliseconds
    return Math.ceil(diffTime / (1000 * 60 * 60 * 24))+1;//added +1 for option staying 1 night
    
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

    // Calculate nights and total price here
    const nights = calculateNights(selectedStart, selectedEnd);
    const totalPrice = nights * pricePerNight;

    // Set the hidden fields for form submission
    document.getElementById("checkin_date").value = selectedStart;
    document.getElementById("checkout_date").value = selectedEnd;
    document.getElementById("total_nights").value = nights;
    document.getElementById("total_price").value = totalPrice;

    // Now submit the form
    document.querySelector("form").submit();
    alert("Your booking has been successfully made \n" + " total price " + totalPrice);
}

// Initialize Calendars
const today = new Date();
generateCalendar(today.getFullYear(), today.getMonth(), calendar); // Current month
generateCalendar(today.getFullYear(), today.getMonth() + 1, calendarNext); // Next month
</script>
             
          

           
            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="real-estate-2-tab1">

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="real-estate-2-tab2">
                <img src="assets/img/floor-plan.jpg" alt="" class="img-fluid">
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="real-estate-2-tab3">
                <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Tab 3 Content -->

            </div><!-- End Tab Content -->

          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Quick Summary</h3>
              <ul>
                <li><strong>Property ID:</strong> 1</li>
                <li><strong>Location:</strong> Bint Jbeil</li>
                <li><strong>Property Type:</strong> House</li>
                <li><strong>Status:</strong> Rent</li>
                <li><strong>Area:</strong> <span>120m <sup>2</sup></span></li>
                <li><strong>Beds:</strong> 4</li>
                <li><strong>Baths:</strong> 2</li>
                <li><strong>Rent:</strong> 120$</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

  </main>
  <?php
  include("footer.html");
  ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
 
</body>

</html>
 