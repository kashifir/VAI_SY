// If you are using CommonJS modules:
const $ = require('jquery');
import  Dropzone  from "dropzone";

import JSONEditor from "./jquery.json-editor.min";


var point1 =0;
var point2 =100;
var point3 =0;
var point4 =0;
var point5 =0;
var percentage1 =0;
var percentage2 =0;
var percentage3 =0;

var dropzoneit = new Dropzone(".my-dropzone", {
    url: "/api/v1/test",
    maxFiles: 1,
    dictMaxFilesExceeded: 'Only 1 Image can be uploaded',
    maxFilesize: 3,  // in Mb
    addRemoveLinks: true,
    uploadMultiple: false,
    forceFallback: false,
    init: function () {
        this.on("maxfilesexceeded", function(file) {
            this.removeFile(file);
        });
        this.on("sending", function(file, xhr, formData) {
            // send additional data with the file as POST data if needed.
            // formData.append("key", "value");
        });
        this.on("success", function(file, response) {
            if (response){
                for (let i = 0; i < response.length; i++) {

                    if(response[i].bar1) {
                        if(response[i].bar1.point !== null) {
                            point1 += parseFloat(response[i].bar1.point)

                        }
                    } if(response[i].bar2) {
                        if(response[i].bar2.point !== null) {
                            if(point2 >= 0) {
                                point2 += parseFloat(response[i].bar2.point)
                            }
                            else{
                                point2 = 1;
                            }
                            }

                        }
                    if(response[i].bar3) {
                        if(response[i].bar3.point !== null) {
                            point3 += parseFloat(response[i].bar3.point)
                        }
                    }if(response[i].bar4) {
                        if(response[i].bar4.point !== null) {
                            point4 += parseFloat(response[i].bar4.point)
                        }
                    }if(response[i].bar5) {
                        if(response[i].bar5.point !== null) {
                            console.log(response[i].bar5.point);
                            point5 += parseFloat(response[i].bar5.point)
                        }
                    }if(response[i].Marker1) {
                        if(response[i].Marker1.point !== null) {

                            percentage1 += parseFloat(response[i].Marker1.point)
                        }
                    }if(response[i].Marker2) {

                        if(response[i].Marker2.point !== null) {
                            percentage2 += parseFloat(response[i].Marker2.point)

                        }
                    }if(response[i].Marker3) {
                        if(response[i].Marker3.point !== null) {
                            percentage3 += parseFloat(response[i].Marker3.point)

                        }
                    }
                }
                point1 = (point1 * 10) /100;
                gauges[1].updateGauge(point1)
                point2 = (point2 / 10) * 100;
                gauges[2].updateGauge(point2)
                point3 = (point3 / 100) * 100;
                gauges[3].updateGauge(point3);
                point4 = (point4 / 100) * 100;
                gauges[4].updateGauge(point4);
                point5 = (point5 / 100) * 100;
                gauges[5].updateGauge(point5);


                percentage1 = percentage1 / 100;
                $('#progressBar1').attr('aria-valuenow', percentage1);
                $("#progressBar1").css({ "width": percentage1 + "%" });
                percentage2 = (percentage2 / 100) * 100;
                $('#progressBar2').attr('aria-valuenow', percentage2);
                $("#progressBar2").css({ "width": percentage2 + "%" });
                percentage3 = (percentage3 / 100) * 100;
                $('#progressBar3').attr('aria-valuenow', percentage3);
                $("#progressBar3").css({ "width": percentage3 + "%" });

                var editor =new JsonEditor('#json-display', response);
            }
        });
    }
});



var gauges = [];

document.addEventListener("DOMContentLoaded", function (event) {
    var opt = {
        gaugeRadius: 100,
        minVal: 0,
        maxVal: 100,
        needleVal: Math.round(point1),
        tickSpaceMinVal: 1,
        tickSpaceMajVal: 10,
        divID: "gaugeBox1",
        gaugeUnits: "%"
    }
    gauges[1] = new drawGauge(opt);
});
document.addEventListener("DOMContentLoaded", function (event) {
    var opt = {
        gaugeRadius: 100,
        minVal: 0,
        maxVal: 100,
        needleVal: Math.round(point1),
        tickSpaceMinVal: 1,
        tickSpaceMajVal: 10,
        divID: "gaugeBox2",
        gaugeUnits: "%"
    }
    gauges[2] = new drawGauge(opt);
});

document.addEventListener("DOMContentLoaded", function (event) {
    var opt = {
        gaugeRadius: 100,
        minVal: 0,
        maxVal: 100,
        needleVal: Math.round(point1),
        tickSpaceMinVal: 1,
        tickSpaceMajVal: 10,
        divID: "gaugeBox3",
        gaugeUnits: "%"
    }
    gauges[3] = new drawGauge(opt);
})

document.addEventListener("DOMContentLoaded", function (event) {
    var opt = {
        gaugeRadius: 100,
        minVal: 0,
        maxVal: 100,
        needleVal: Math.round(point1),
        tickSpaceMinVal: 1,
        tickSpaceMajVal: 10,
        divID: "gaugeBox4",
        gaugeUnits: "%"
    }
    gauges[4] = new drawGauge(opt);
})

document.addEventListener("DOMContentLoaded", function (event) {
    var opt = {
        gaugeRadius: 100,
        minVal: 0,
        maxVal: 100,
        needleVal: Math.round(point1),
        tickSpaceMinVal: 1,
        tickSpaceMajVal: 10,
        divID: "gaugeBox5",
        gaugeUnits: "%"
    }
    gauges[5] = new drawGauge(opt);
})

$(document).ready(function() {
    var $formHeight = $('#form_height');
    var $formWeight = $('#form_Weight');
    var $formBMI = $('#form_BMI');
    $formWeight.on('change', function (e) {
        if($formHeight.val() !== 0)
            $formBMI.val($formWeight.val() / $formHeight.val()^2)
    });
});






