// Open weather API:  2d480b390f0a798553d5c58f302ec0f9

// Declaring the variables
let lon;
let lat;
let cityname,
  weatherState,
  temperature,
  humanity,
  pressure,
  visibility,
  sunrise,
  hoursOfLight,
  sunset,
  feelsLike,
  windDirection,
  windSpeed;
//   Formating Date
var d = new Date();
var weekday = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
let month = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

window.addEventListener("load", () => {
  // Getting Location Information
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      console.log(position);
      lon = position.coords.longitude;
      lat = position.coords.latitude;

      // API ID
      const api = "2d480b390f0a798553d5c58f302ec0f9";
      const units = "metric";
      // API URL
      const base = `http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=${units}&appid=${api}`;
      // const base = `api.openweathermap.org/data/2.5/forecast/daily?lat=22&lon=70&appid=${api}`;

      // Fetching data from API
      fetch(base)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          console.log(data);
          // Converting unix date to Local Date
          const unixTime = data.dt;
          date = new Date(unixTime * 1000);
          console.log(date);
          // Getting Data from API Response
          cityname = data.name;
          temperature = data.main["temp"];
          pressure = data.main["pressure"];
          visibility = data.visibility;
          sunrise = data.sys["sunrise"];
          sunset = data.sys["sunset"];
          feelsLike = data.main["feels_like"];
          windDirection = data.wind["deg"];
          windSpeed = data.wind["speed"];
          humanity = data.main["humidity"];
          weatherState = data.weather[0].description;
          // console.log(weatherState);
          // Get open weather ICons From here
          // http://openweathermap.org/img/w/01n.png

          // Formating Date
          $("#date .day").text(weekday[d.getDay()]);
          $("#date .date").text(d.getDate());
          $("#date .month").text(month[d.getMonth()]);
          $("#date .year").text(d.getFullYear());
          // Date Formating Ends Here

          $("#location span").text(cityname);
          $("#icon-temp p").text(weatherState);
          $("#ctb").text(temperature);
          $("#hd").text(humanity);
          $("#pd").text(pressure);
          $("#vd").text(visibility);
          $("#srd").text(sunrise);
          $("#td").text(hoursOfLight);
          $("#ssd").text(sunset);
          $("#cd").text(feelsLike);
          $("#dd").text(windDirection);
          $("#sd").text(windSpeed);
        });
    });
  }
});
