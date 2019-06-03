<template>
  <div class="flex flex-col">
    <ul class="h-64 bg-yellow-100 rounded border-solid border-2 border-black overflow-y-auto">
      <li v-for="message in messages" :key="message.id">{{ message.user }}: {{ message.message }}</li>
    </ul>
    <div class="flex flex-row mt-1">
      <input
        class="flex-1 border-solid border-4 border-black"
        type="text"
        name="message"
        id="message"
      >
      <button class="bg-blue-700 hover:bg-blue-500 p-2 ml-1 rounded text-white">Send</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      messages: [
        {
          id: 1,
          user: "Random Person 1",
          message: "Test Message 1"
        },
        {
          id: 2,
          user: "Random Person 2",
          message: "Test Message 2"
        },
        {
          id: 3,
          user: "Random Person 3",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        },
        {
          id: 4,
          user: "Random Person 4",
          message: "Test Message 4"
        }
      ]
    };
  },
  mounted() {
    console.log("Chat Mounted");
  }
};
</script>

<style>
</style>
