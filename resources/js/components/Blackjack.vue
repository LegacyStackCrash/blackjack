<template>
  <div class="flex mt-12 justify-center items-center">
    <lobby/>
  </div>
</template>

<script>
import Lobby from "./Lobby.vue";
export default {
  components: {
    Lobby
  },
  mounted() {
    console.log("Component mounted Blackjack.");
  }
};
</script>
