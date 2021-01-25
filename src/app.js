import Vue from 'vue';
import axios from 'axios';

new Vue({
    el: '#app',
    data: {
      dischi: []
    },
    mounted() {
      var self = this;
      axios.get("partials/database_2.php").then((response) => {
        self.dischi = response.data;
      })
    }
});
