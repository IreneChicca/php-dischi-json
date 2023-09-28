const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [],
    };
  },

  mounted() {
    axios
      .get("http://localhost/PHP/php-dischi-json/discInfo.php")
      .then((res) => {
        console.log(res.data);

        // const discInfo = ;
        this.discs = res.data;
      });
  },
}).mount("#app");
