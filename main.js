const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [],
      details: {},
    };
  },

  mounted() {
    axios
      .get("http://localhost/PHP/php-dischi-json/discInfo.php")
      .then((res) => {
        console.log(res.data);
        console.log(res.data[0].title);
        this.discs = res.data;
      });
  },

  methods: {
    showDisc(index) {
      alert(index);

      axios
        .get("http://localhost/PHP/php-dischi-json/discInfo.php", {
          params: { discIndex: index },
        })
        .then((res) => {
          this.details = res.data;

          console.log(this.details);
        });
    },
  },
}).mount("#app");
