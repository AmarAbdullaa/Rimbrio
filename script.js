document.addEventListener("DOMContentLoaded", function () {
  // Define default prices (can be adjusted as needed)
  const defaultPrices = {
    room: {
      single: 25000,
      double: 35000,
      triple: 40000,
    },
    // bookingTypes: {
    //   room: 100,
    //   adventure: 50,
    //   restaurant: 30,
    // },
    // pricePerPerson: 20,
  };

  // Function to calculate the booking cost
  function calculateBookingCost() {
    const roomType = document.getElementById("roomType").value;
    const bookingType = document.getElementById("type").value;
    const numberOfPersons = parseInt(
      document.getElementById("NoofPersons").value
    );
    console.log("numberOfPersons", typeof numberOfPersons);

    const checkInDate = new Date(document.getElementById("chechin").value);
    const checkOutDate = new Date(document.getElementById("Checkout").value);
    const durationInDays = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24); // Calculate duration in days

    console.log("durationInDays", typeof durationInDays, durationInDays);

    // Calculate the base cost based on room type and duration of stay
    let baseCost =
      defaultPrices.room[roomType] * durationInDays * numberOfPersons;

    console.log("baseCost", typeof baseCost, baseCost);

    // Calculate additional costs based on booking type and number of persons
    // baseCost += defaultPrices.bookingTypes[bookingType];
    // console.log("bookingType", bookingType);

    // console.log(typeof defaultPrices.bookingTypes[bookingType]);

    // baseCost += defaultPrices.pricePerPerson * numberOfPersons * durationInDays;

    // console.log(
    //   "last",
    //   typeof defaultPrices.pricePerPerson * numberOfPersons * durationInDays
    // );

    // console.log("baseCost", baseCost);
    return baseCost;
  }

  // Function to handle form submission and store booking details in JSON
  function bookNow() {
    const bookingDetails = {
      fullName: document.getElementById("fname").value,
      contactNumber: document.getElementById("cNo").value,
      branch: document.getElementById("country").value,
      bookingType: document.getElementById("type").value,
      roomType: document.getElementById("roomType").value,
      numberOfPersons: parseInt(document.getElementById("NoofPersons").value),
      checkInDate: document.getElementById("chechin").value,
      checkOutDate: document.getElementById("Checkout").value,
      promoCode: document.getElementById("promoCode").value,
    };

    // Calculate the booking cost
    const bookingCost = calculateBookingCost();

    console.log("bookingCost", bookingCost);

    // Retrieve existing bookings from localStorage or initialize an empty array
    let bookings = JSON.parse(localStorage.getItem("bookings")) || [];

    // Add the new booking details to the array
    bookings.push(bookingDetails);

    // Save the updated bookings array back to localStorage
    localStorage.setItem("bookings", JSON.stringify(bookings));

    // Update the UI with the current booking information and cost
    displayBookingInfo(bookingDetails, bookingCost);

    // Show an alert for successful booking
    alert("Booking successful!");

    // Clear form fields after booking
    clearFormFields();
  }

  // Function to display booking information in a table
  function displayBookingInfoInTable(bookingDetails) {
    const tableBody = document.getElementById("currentBookingTableBody");

    const newRow = document.createElement("tr");
    newRow.innerHTML = `
    <td>${bookingDetails.fullName}</td>
    <td>${bookingDetails.contactNumber}</td>
    <td>${bookingDetails.branch}</td>
    <td>${bookingDetails.bookingType}</td>
    <td>${bookingDetails.roomType}</td>
    <td>${bookingDetails.numberOfPersons}</td>
    <td>${bookingDetails.checkInDate}</td>
    <td>${bookingDetails.checkOutDate}</td>
    <td>${bookingDetails.promoCode}</td>
  `;

    tableBody.appendChild(newRow);
  }

  // Update the UI with the current booking information and cost
  function displayBookingInfo(bookingDetails, bookingCost) {
    displayBookingInfoInTable(bookingDetails);
    updateOverallBookingCost(); // Update overall booking cost

    console.log("bookingCost in the dspl..", bookingCost);

    if (localStorage.getItem("bookingCost") != "") {
      localStorage.setItem("bookingCost", bookingCost);
    }

    // localStorage.getItem("bookingCost") ?

    console.log(
      "locl cst",
      JSON.stringify(localStorage.getItem("bookingCost"))
    );

    // const bookingCostStr = JSON.parse(localStorage.getItem("bookings")) || [];
  }

  // Function to update overall booking cost
  function updateOverallBookingCost() {
    let totalCost = 0;
    const bookings = JSON.parse(localStorage.getItem("bookings")) || [];

    bookings.forEach((booking) => {
      totalCost += calculateBookingCostForBooking(booking);
    });

    document.getElementById("overallBooking").textContent =
      bookings.length > 0 ? "Yes" : "None";
    document.getElementById("overallBookingCost").textContent =
      localStorage.getItem("bookingCost") + " " + "LKR";

    // totalCost.toFixed(2) + " LKR"; // Display total cost as LKR
  }

  // Function to calculate the booking cost for an individual booking
  function calculateBookingCostForBooking(booking) {
    const roomType = booking.roomType;
    const bookingType = booking.bookingType;
    const numberOfPersons = booking.numberOfPersons;
    const checkInDate = new Date(booking.checkInDate);
    const checkOutDate = new Date(booking.checkOutDate);
    const durationInDays = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24); // Calculate duration in days

    let baseCost = defaultPrices.room[roomType] * durationInDays;
    // baseCost += defaultPrices.bookingTypes[bookingType];
    // baseCost += defaultPrices.pricePerPerson * numberOfPersons * durationInDays;

    return baseCost;
  }

  // Function to clear form fields after successful booking
  function clearFormFields() {
    document.getElementById("fname").value = "";
    document.getElementById("cNo").value = "";
    document.getElementById("country").value = "";
    document.getElementById("type").value = "";
    document.getElementById("roomType").value = "";
    document.getElementById("NoofPersons").value = "";
    document.getElementById("chechin").value = "";
    document.getElementById("Checkout").value = "";
    document.getElementById("promoCode").value = "";
  }

  // Attach event listener to the "Book Now" button
  document
    .getElementById("bookingForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      bookNow();
    });
});
document.getElementById("logoutBtn").addEventListener("click", function() {
  // Redirect to the logout page
  window.location.href = "logout.php";
});

document.getElementById("editProfileBtn").addEventListener("click", function() {
  // Redirect to the edit profile page
  window.location.href = "edit_profile.php";
});
