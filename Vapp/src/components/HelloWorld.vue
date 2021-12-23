<template>
  <div class="hello">
    <div class="logo">
      <img alt="logo" src='/img/logo.png'>
    </div>
    <div class="content">
      <div class="columns">
        <div class="colums">
          <form>
            <div class="form-group">
              <input id="prenom" v-model="fromdata.prenom" class="form-control" placeholder="prenom" type="text">
            </div>
            <div class="form-group">
              <input id="nom" v-model="fromdata.Noms" class="form-control" placeholder="Nom" type="text">
            </div>
            <div class="form-group">
              <input v-model="fromdata.data_de_naissance" class="form-control" placeholder="data_de_naissance"
                     type="date">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <input v-model="fromdata.age" class="form-control" placeholder="age"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Taille" class="form-control" placeholder="Taille"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.BMI" class="form-control" placeholder="BMI"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Terrin" class="form-control" placeholder="Terrin"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Jeune" class="form-control" placeholder="Jeune"
                           type="text">
                  </div>
                </div>
                <div class="col-6">

                  <div class="form-group">
                    <select v-model="sexe" class="form-control form-control-lg">
                      <option selected>Choose...</option>
                      <option value="H">Man</option>
                      <option value="F">Woman</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Poids" class="form-control" placeholder="Poids"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.blood_group" class="form-control" placeholder="Group sanguin"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Pression" class="form-control" placeholder="Pression"
                           type="text">
                  </div>
                  <div class="form-group">
                    <input v-model="fromdata.Pression" class="form-control" placeholder="Pression"
                           type="text">
                  </div>

                </div>
              </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
          </form>

        </div>
        <div class="colums">
          <div class="container">
            <div class="row">
              <div class="col-2 ">
                <div class="d-flex justify-content-center "><span>Risque générale</span>
                </div>
                <VueSvgGauge :end-angle="90"
                             :gauge-color="[{ offset: 0, color: '#347AB0'}, { offset: 100, color: '#8CDFAD'}]"
                             :max="4"
                             :min="0"
                             :scale-interval="0.1"
                             :separator-step="1"
                             :start-angle="-90"
                             :value="0.5"
                             class="mt-4 mb-5"
                />
                <div class="stats mt-2">
                  <div class="d-flex justify-content-between "><span>Puissance de précison</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <input class="form-control" name="" type="text">
                    <input class="form-control" name="" type="text">
                  </div>
                </div>

              </div>
              <div class="col-2 ">
                <div class="d-flex justify-content-center "><span>Risque santé</span>
                </div>
                <div class="d-flex justify-content-center ">
                  <div id="gaugeBox"></div>
                </div>
                <div class="stats mt-2">
                  <div class="d-flex justify-content-start "><span>Puissance de précison</span>
                  </div>
                  <div class="d-flex justify-content-between ">
                    <input class="form-control" name="" type="text">
                    <input class="form-control" name="" type="text">

                  </div>
                </div>


              </div>
              <div class="col-2 ">
                <div class="d-flex justify-content-center "><span>Risque alcoolique</span>
                </div>
                <VueSvgGauge
                    :end-angle="90"
                    :gauge-color="[{ offset: 0, color: '#347AB0'}, { offset: 100, color: '#8CDFAD'}]"
                    :max="4"
                    :min="0"
                    :scale-interval="0.1"
                    :separator-step="1"
                    :start-angle="-90"
                    :value="100"
                    class="mt-4 mb-5"
                />
                <div class="stats mt-2">
                  <div class="d-flex justify-content-start "><span>Puissance de précison</span>
                  </div>
                  <div class="d-flex justify-content-between ">
                    <input class="form-control" name="" type="text">
                    <input class="form-control" name="" type="text">

                  </div>
                </div>


              </div>
              <div class="col-2 ">
                <div class="d-flex justify-content-center "><span>Risque anorexique</span>
                </div>
                <VueSvgGauge
                    :end-angle="90"
                    :gauge-color="[{ offset: 0, color: '#347AB0'}, { offset: 100, color: '#8CDFAD'}]"
                    :max="4"
                    :min="0"
                    :scale-interval="0.1"
                    :separator-step="1"
                    :start-angle="-90"
                    :value="100"
                    class="mt-4 mb-5"
                />
                <div class="stats mt-2">
                  <div class="d-flex justify-content-start "><span>Puissance de précison</span>
                  </div>
                  <div class="d-flex justify-content-between ">
                    <input class="form-control" name="" type="text">
                    <input class="form-control" name="" type="text">

                  </div>
                </div>


              </div>
              <div class="col-2 ">
                <div class="d-flex justify-content-center "><span>Risque physique</span>
                </div>
                <VueSvgGauge
                    :end-angle="90"
                    :gauge-color="[{ offset: 0, color: '#347AB0'}, { offset: 100, color: '#8CDFAD'}]"
                    :max="4"
                    :min="0"
                    :scale-interval="0.1"
                    :separator-step="1"
                    :start-angle="-90"
                    :value="100"
                    class="mt-4 mb-5"
                />
                <div class="stats mt-2">
                  <div class="d-flex justify-content-start "><span>Puissance de précison</span>
                  </div>
                  <div class="d-flex justify-content-between ">
                    <input class="form-control" name="" type="text">
                    <input class="form-control" name="" type="text">

                  </div>
                </div>


              </div>
            </div>

          </div>
          <div class="container mt-5">
            <div class="d-flex">
              <div class="col-8">
                <div class="rowM">
                  <progress-bar bar-color="#dc720f" size="medium" text="60%" title="60%" val="60"></progress-bar>
                </div>
              </div>
              <div class="col-1">
                <input id="" name="" type="text">

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</template>

<script>

import {VueSvgGauge} from 'vue-svg-gauge'
import ProgressBar from 'vue-simple-progress'

export default {
  name: 'navigation',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    VueSvgGauge,
    ProgressBar
  },
  data() {
    return {
      fromdata: {},
      url: "http://152.228.172.26:3000",
      test: "",
      age: "",
      sexe: "",
      selectedFile: "",
      progress: 0,
      listDataString: String,
      listData: [], // placeholder
      listtest: [],
      Unit_de_mesure: "",
      data: "",

    };
  },
  methods: {}
  ,
  mounted() {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.hello {
  width: 100%;
  height: 100vh;
  padding: 1%;
}

.rowM {
  border: 2px solid blue;
  margin: 0 auto;
  padding: 2%;
}

.col-3 {
  border: #0048CD 1px solid;
  margin: 0.5%;
}

.gauge {
  height: inherit !important;
}

p {
  text-align: center;
  font-size: 14px;
}

.logo {
  text-align: left;
}

.columns {
  display: grid;
  grid-template-columns:18% 81%;
  gap: 1%;
}

.colums {
  border: #0048CD 2px solid;
  padding-top: 2%;
}

input[type=text] {
  width: 100%;
  padding: 12px 25px;
  margin: 8px 0;
  box-sizing: border-box;
}

select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style>
