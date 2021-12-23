<template>

  <section class="section">
    <div class="columns">
      <div class="column">
        <div class="drop-zone">
          <span class="drop-zone__prompt">Drop file here or click to upload</span>
          <input class="drop-zone__input" name="myFile" type="file" @change="onFileChange">
        </div>
        <div v-if="progress" :style="{ width: progress }" class="progess-bar">
          {{ progress }}
        </div>
        <button
            :disabled="!this.selectedFile"
            class="upload-button"
            @click="onUploadFile"
        >
          Upload file
        </button>
      </div>
      <div class="column">
        <h5>
          JSON
        </h5>
        <vue-json-pretty :data="listData"></vue-json-pretty>
      </div>
    </div>
  </section>
</template>

<script>
import 'vue-json-pretty/lib/styles.css';
import VueJsonPretty from 'vue-json-pretty';

export default {
  name: 'about',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    VueJsonPretty,
  },
  data() {
    return {
      selectedFile: "",
      progress: 0,
      listData: ['Wait ....'], // placeholder
      urlpro: "http://152.228.172.26:3000/api/v1/test",
      url: 'http://152.228.172.26:3000/api/v1/test',
      config: {
        headers: {
          "Content-Type": "application/json",
          'Access-Control-Allow-Origin': '*',
        }
      }
    };
  },
  mounted() {
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
      const dropZoneElement = inputElement.closest(".drop-zone");

      dropZoneElement.addEventListener("click", (e) => {
        inputElement.click();
      });

      inputElement.addEventListener("change", (e) => {
        if (inputElement.files.length) {
          updateThumbnail(dropZoneElement, inputElement.files[0]);
        }
      });

      dropZoneElement.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZoneElement.classList.add("drop-zone--over");
      });

      ["dragleave", "dragend"].forEach((type) => {
        dropZoneElement.addEventListener(type, (e) => {
          dropZoneElement.classList.remove("drop-zone--over");
        });
      });

      dropZoneElement.addEventListener("drop", (e) => {
        e.preventDefault();

        if (e.dataTransfer.files.length) {
          inputElement.files = e.dataTransfer.files;
          updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
        }

        dropZoneElement.classList.remove("drop-zone--over");
      });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
      let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

      // First time - remove the prompt
      if (dropZoneElement.querySelector(".drop-zone__prompt")) {
        dropZoneElement.querySelector(".drop-zone__prompt").remove();
      }

      // First time - there is no thumbnail element, so lets create it
      if (!thumbnailElement) {
        thumbnailElement = document.createElement("div");
        thumbnailElement.classList.add("drop-zone__thumb");
        dropZoneElement.appendChild(thumbnailElement);
      }

      thumbnailElement.dataset.label = file.name;

      // Show thumbnail for image files
      if (file.type.startsWith("image/")) {
        const reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = () => {
          thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
        };
      } else {
        thumbnailElement.style.backgroundImage = null;
      }
    }
  },

  methods: {
    onFileChange(e) {
      this.selectedFile = e.target.files[0];
      this.progress = 0;
      this.listData = ['Wait ....'];
      this.onUploadFile();
    },
    onUploadFile() {
      const formData = new FormData();
      formData.append("file", this.selectedFile); // appending file
      this.axios
          .post(this.url, formData, {
            onUploadProgress: (ProgressEvent) => {
              this.progress = Math.round((ProgressEvent.loaded / ProgressEvent.total) * 100) +
                  "%";
            },
          })
          .then((res) => {
            this.listData = res.data
            console.log(res.data)
          })
          .catch((err) => {
            console.log(err);
          });
    },
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.drop-zone {
  max-width: 200px;
  height: 200px;
  padding: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 20px;
  cursor: pointer;
  color: #cccccc;
  border: 4px dashed #009578;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}

.columns {
  display: grid;
  grid-template-columns:50% 50%;
}

.field {
  text-align: left;
  padding: 2%;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

.margin-bottom {
  margin-bottom: 15px;
}

.fade-enter, .fade-leave-active {
  opacity: 0;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}

</style>


