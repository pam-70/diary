<template>
  <table class="table">
    <tbody>
      <tr>
        <td v-for="(day, index) in day_m">
          <div style="background-color: lavender" v-if="index < 5">
            <p class="text-center">{{ day }}</p>
          </div>
          <div style="background-color: coral" v-else>
            <p class="text-center">{{ day }}</p>
          </div>
        </td>
      </tr>
      <tr>
        <td v-for="(str1, index) in str1_m">
          <div style="background-color: lavender" v-if="index < 5">
            <p class="text-center">{{ str1.dt }}</p>
          </div>
          <div style="background-color: coral" v-else>
            <p class="text-center">{{ str1.dt}}</p>
          </div>
        </td>
      </tr>

      <tr>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
      </tr>
      <tr>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
        <td><div class="alert alert-secondary" role="alert">44</div></td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import axios from "axios";
//import jspdf from 'jspdf';
export default {
  data: function () {
    return {
      day_m: ["ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ", "ВС"],
      str1_m: [
        {ms:0, nd: 1, dt: 27 },
        {ms:0, nd: 2, dt: 28 },
        {ms:0, nd: 3, dt: 29 },
        {ms:0, nd: 4, dt: 30 },
        {ms:1, nd: 5, dt: 1 },
        {ms:1, nd: 6, dt: 2 },
        {ms:1, nd: 7, dt: 3 },
      ],
      currentTab: "lists",
      istitutation: [],
      selected: "",
      institution: [],
      surname: "",
      surnameres: "",
      asc: 1,
      del: 0,
      bat: "Сохранить",
      user_id: "",
      choice: 1,
      rezult: [],
      lastin: "",
      fsurname: "",
      html: "",
      istitut_id: "",
    };
  },
  mounted() {
    // this.selectedLang = this.items[0].value;
    this.update();
    //this.addanswer();
  },
  methods: {
    print_result: function (rez_id) {
      console.log(rez_id);
      const data_form = {
        id_result: rez_id,
      };
      axios.get("/print_result", data_form).then((response) => {
        // console.log(response.data.url_i);
      });
    },
    filtersurname: function () {
      const data_form = {
        id_institution: this.selected,
        asc: this.asc,
        del: this.del,
        surname: this.lastin,
      };
      axios.post("/filter_surname", data_form).then((response) => {
        this.institution = response.data.url_institution;
      });
    },

    admin_result: function (id) {
      const data_form = {
        user_id: id,
        choice: this.choice,
      };
      axios.post("/admin_result", data_form).then((response) => {
        // console.log(response.data.url_surnameres);
        this.rezult = response.data.url_rezult;
        this.surnameres = response.data.url_surnameres;
        //this.surname = response.data.url_user;
      });
    },
    swon_user: function (id) {
      this.bat = "Сохранить";
      this.user_id = id;
      const data_form = {
        user_id: id,
      };
      axios.post("/swon_user", data_form).then((response) => {
        this.user_id = response.data.url_user_id;
        this.surname = response.data.url_user;
      });
    },
    addlist: function () {
      if (this.bat === "Добавить") {
        const data_form = {
          id_institution: this.selected,
          surname: this.surname,
        };
        axios.post("/add_user", data_form).then((response) => {});
      }
      if (this.bat === "Сохранить") {
        //console.log("Сработало сохранить");
        const data_form = {
          id_institution: this.selected,
          surname: this.surname,
          del: this.del,
          user_id: this.user_id,
        };
        axios.post("/updat_user", data_form).then((response) => {});
      }
      this.showlist();
    },
    namebat: function () {
      this.bat = "Добавить";
    },

    update: function () {
      axios.post("/adm_updat").then((response) => {
        this.istitutation = response.data.url_istitutation;
      });
    },
    showlist: function () {
      this.istitut_id = this.selected;
      const data_form = {
        id_institution: this.selected,
        asc: this.asc,
        del: this.del,
      };
      axios.post("/show_list", data_form).then((response) => {
        this.institution = response.data.url_institution;
      });
    },
    lists: function () {
      this.currentTab = "lists";
    },
  },
};
</script>
