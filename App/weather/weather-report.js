// Open weather API:  2d480b390f0a798553d5c58f302ec0f9


// Getting User's Location 
const userLocation = document.getElementById("info-msg");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    userLocation.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  userLocation.innerHTML = '<div class="msg-box"><h1>'+ position.coords.latitude +'</h1> <p>'+ position.coords.longitude+'</p> </div>'
}

// Fetch data from API 
const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://ip-geo-location.p.rapidapi.com/ip/check?format=json",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Host": "ip-geo-location.p.rapidapi.com",
		"X-RapidAPI-Key": "SIGN-UP-FOR-KEY"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});
