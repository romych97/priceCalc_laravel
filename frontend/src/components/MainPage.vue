<template>
  <b-container>
    <table class="w-100">
      <thead>
        <td class="text-nowrap">Status</td>
        <td class="text-nowrap">Accomodation</td>
        <td class="text-nowrap">Room count</td>
        <td class="text-nowrap">Room type</td>
        <td class="text-nowrap">Ckeck-in date</td>
        <td class="text-nowrap">NTS</td>
        <td class="text-nowrap">Price</td>
        <td class="text-nowrap">Cost</td>
        <td class="text-nowrap"></td>
      </thead>
      <tbody>
        <!-- {{tableItems}} -->
        <tr v-for="(item, i) in tableItems" :key="i">
        <!-- <div v-for="(item, i) in tableItems" :key="i">{{item}}</div> -->
          <td>
            <!-- <div class="btn btn-danger">&nbsp;</div> -->
              <b-dropdown style="background-color: red" :ref="'dropdown'+i" class="btn no-caret p-0" text="" variant="white">
                <div class="d-flex">
                  <button style="background-color: red" @click="(e) => changeStatus(e, i)" class="btn mr-1">&nbsp;</button>
                  <button style="background-color: yellow" @click="(e) => changeStatus(e, i)" class="btn mr-1">&nbsp;</button>
                  <button style="background-color: orange" @click="(e) => changeStatus(e, i)" class="btn mr-1">&nbsp;</button>
                  <button style="background-color: blue" @click="(e) => changeStatus(e, i)" class="btn mr-1">&nbsp;</button>
                  <button style="background-color: green" @click="(e) => changeStatus(e, i)" class="btn mr-1">&nbsp;</button>
                </div>
              </b-dropdown>
          </td>
          <td>
              <b-dropdown text="Dropdown" variant="white">
                <b-dropdown-item>Action A</b-dropdown-item>
                <b-dropdown-item>Action B</b-dropdown-item>
              </b-dropdown>
          </td>
          <td>
            <b-form-input type="number" min="0.00"></b-form-input>
          </td>
          <td>
             <b-form-input type="text" min="0.00"></b-form-input>
          </td>
          <td>
             <b-form-input type="date" min="0.00"></b-form-input>
          </td>
          <td>
             <b-form-input type="number" min="0.00"></b-form-input>
          </td>
          <td>
             <b-form-input type="number" min="0.00"></b-form-input>
          </td>
          <td>
             <b-form-input type="number" min="0.00"></b-form-input>
          </td>
          <td>
             <button style="padding: 0px 8px" class="rounded-circle btn btn-primary">
               x
             </button>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <td><button class="btn btn-primary">ADD</button></td>
        <td></td>
        <td>0</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
        <td>0</td>
      </tfoot>
    </table>
    <!-- <div class="d-flex mt-5">
      <button class="btn btn-primary">ADD</button>
    </div> -->
  </b-container>
</template>

<script lang="ts">
import Vue from 'vue';

export default Vue.extend({
  name: 'HelloWorld',
  props: {
    msg: String,
  },
  methods: {
    changeStatus(e, i) {
      this.$refs['dropdown'+i][0].$el.style.backgroundColor = e.target.style.backgroundColor
      console.log(e)
      // this.$refs['dropdown'+i].remove()
    }
  },
  data() {
    return {
      tableItems: [
        {
          status: 'null',
          accomodation: 'null',
          roomCount: 'null',
          roomType: 'null',
          date: 'null',
          nts: 'null',
          price: 'null',
          cost: 'null',
        },
        {
          status: 'null',
          accomodation: 'null',
          roomCount: 'null',
          roomType: 'null',
          date: 'null',
          nts: 'null',
          price: 'null',
          cost: 'null',
        },
      ]
    }
  }
});
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.btn-warning-light {
  background-color: #ffd760;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
