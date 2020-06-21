<template>
  <div class="mb-8 leading-normal text-center text-xl text-gray-800 bg-gray-100 p-3 flex items-center flex-col justify-center">
    <h1 class="font-bold text-gray-800 text-3xl">Mi trabajo</h1>
    <p class="mb-3">Colaboracón y contribución de código</p>

    <github
      v-for="(repo, index) in repos" :key="index"
      :repo="repo"
    >
    </github>

    <div className="mt-8 text-center">
      <a class="rounded-lg block inline-block mt-4 px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-teal-500 hover:bg-teal-600 md:text-lg xl:text-base text-white font-semibold leading-tight shadow-md text-base" href="https://github.com/eddyrufino" target="_blank" rel="noopener noreferrer">
        Ver más en GitHub {{ repos.length }}
      </a>
    </div>

  </div>
</template>

<script type="application/javascript">
export default {
  data() {
    return {
      repos: [],
      countRepo: 0,
    }
  },

  methods: {
    async getGitub() {

      const repos = localStorage.getItem("repos");

      if (repos) {
        this.reposTotal = JSON.parse(repos);
        this.repos = JSON.parse(repos);
        this.repos = this.repos.slice(0, 8);
        return;
        // this.repos = JSON.parse(repos);
        // return;
      }

      // await axios.get('https://jsonplaceholder.typicode.com/posts')
      const response = await axios.get('https://jsonplaceholder.typicode.com/posts')
        // .then(response => {
          this.repos = response.data;
          this.repos = this.repos.slice(0, 8);
          localStorage.setItem('repos', JSON.stringify(this.repos));
        // })
        // .catch(error => {
        //   console.log(error);
        // });
    }
  },

  created() {
    this.getGitub();
  }
}
</script>