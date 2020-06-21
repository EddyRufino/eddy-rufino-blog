<template>
  <ul>
    <li class="pb-2">
      <!-- <a class="hover:underline" :href="repo.url">{{ repo.name }}</a> -->
      <a class="hover:underline" href="#">{{ repo.title }}</a>
    </li>    
  </ul>
</template>

<script type="application/javascript">
export default {
  props: ['repo']
}
</script>