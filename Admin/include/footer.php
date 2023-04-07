 </div>
        </div>
    </div>

    <script src="js/custom.js"></script>
    <script src="js/ambulance-book-otp-verify.js"></script>
    <script src="js/new-appointment.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="js/view_doctor.js"></script>
    <script src="js/add_doctor.js"></script>
    <script src="js/view_nurse.js"></script>
    <script type="text/javascript" src="js/add_nurse.js"></script>
    <script type="text/javascript" src="js/add_patient.js"></script>
    <script type="text/javascript" src="js/view_patient.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/visitedPatient_appointment.js"></script>



<!--Chart area start here-->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
       animationEnabled: true,
       exportEnabled: true,
       theme: "light1", // "light1", "light2", "dark1", "dark2"
       title:{
              text: "Parbhat Tata Hospital"
       },
       axisY: {
      includeZero: true
    },
       data: [{
              type: "column", //change type to bar, line, area, pie, etc
              //indexLabel: "{y}", //Shows y value on all Data Points
              indexLabelFontColor: "#5A5757",
              indexLabelFontSize: 16,
              indexLabelPlacement: "outside",
              dataPoints: [
                     { x: 10, y: 71 },
                     { x: 20, y: 55 },
                     { x: 30, y: 50 },
                     { x: 40, y: 65 },
                     { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                     { x: 60, y: 68 },
                     { x: 70, y: 38 },
                     { x: 80, y: 71 },
                     { x: 90, y: 54 },
                     { x: 100, y: 60 },
                     { x: 110, y: 36 },
                     { x: 120, y: 49 },
                     { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
              ]
       }]
});
chart.render();

}
</script>
</body>
</html>