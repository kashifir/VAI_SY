<template>
  <div class="home">
    <navigation/>
    <HelloWorld/>
  </div>
</template>

<script>
// @ is an alias to /src
import navigation from '@/components/nav';
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld,
    navigation
  }
}
</script>
