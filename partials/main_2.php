<main id="app">
  <div class="container">
    <div class="disc" v-for="disco in dischi">
      <img :src="disco.poster" alt="">
      <p><strong>{{ disco.title }}</strong></p>
      <p>{{ disco.author }}</p>
      <p>{{ disco.year }}</p>
    </div>
  </div>
</main>
