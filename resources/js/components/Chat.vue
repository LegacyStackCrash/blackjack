<template>
  <div class="flex flex-col">
    <ul
      id="chatWindow"
      class="h-64 bg-yellow-100 rounded border-solid border-2 border-black overflow-y-auto"
    >
      <li
        v-for="(message, index) in messages"
        :key="index"
      >{{ message.user }}: {{ message.message }}</li>
    </ul>
    <div class="flex flex-row mt-1">
      <input
        class="flex-1 border-solid border-4 border-black"
        type="text"
        name="message"
        id="message"
        v-model="message"
        @keyup.enter="sendChatMessage"
      >
      <button
        class="bg-blue-700 hover:bg-blue-500 p-2 ml-1 rounded text-white"
        @click="sendChatMessage"
      >Send</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "",
      messages: []
    };
  },
  methods: {
    sendChatMessage() {
      if (this.message.trim() != "") {
        axios
          .post("/lobby/message", {
            message: this.message
          })
          .then(() => {
            this.message = "";
          });
      }
    }
  },
  mounted() {
    Echo.channel("lobby").listen("NewLobbyChatMessage", e => {
      this.messages.push({
        message: e.chatMessage.message,
        user: e.chatMessage.user
      });

      this.$nextTick(() => {
        let chatWindow = document.getElementById("chatWindow");
        chatWindow.scrollTop = chatWindow.scrollHeight;
      });
    });
  }
};
</script>

<style>
</style>
