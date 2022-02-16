// If you are using CommonJS modules:
const $ = require('jquery');
import  Dropzone  from "dropzone";

import JSONEditor from "./jquery.json-editor.min";

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
                console.log(response)
                // editor = new JSONEditor("#json-display", response)
                var editor =new JsonEditor('#json-display', response);
            }
        });
    }
});

var dropzone_default = new Dropzone(".dropzone", {
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
                console.log(response)
               // editor = new JSONEditor("#json-display", response)
                var editor =new JsonEditor('#json-display', response);
                }

        });
    }
});