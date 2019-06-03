<template>
  <div
    class="w-full max-w-6xl bg-gray-800 rounded p-2 border-solid border-2 border-black"
    style="height: 37rem;"
  >
    <div class="flex flex-col h-full">
      <div class="mb-2">
        <room-list></room-list>
      </div>
      <div class>
        <chat></chat>
      </div>
    </div>
  </div>
</template>

<script>
import RoomList from "./RoomList.vue";
import Chat from "./Chat.vue";

export default {
  components: {
    RoomList,
    Chat
  },
  mounted() {
    console.log("Lobby Mounted.");
  }
};
</script>
