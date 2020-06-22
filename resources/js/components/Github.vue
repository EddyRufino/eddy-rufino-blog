<template>
  <ul>
    <li class="pb-2">
      <!-- <a class="hover:underline" :href="repo.url">{{ repo.name }}</a> -->
      <a id="dark-color-white" class="hover:underline" href="#">{{ repo.title }}</a>
    </li>    
  </ul>
</template>

<script>
export default {
  props: ['repo']
}
</script>