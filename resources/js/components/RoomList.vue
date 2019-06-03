<template>
  <div class="flex overflow-y-auto break-all h-64">
    <ul class="bg-green-gray-700 flex-1 mb-2 rounded">
      <li>
        <div class="flex justify-between bg-green-700 px-2 text-white">
          <div class="text-left">Room #</div>
          <div class="text-left">Room Name</div>
          <div class="text-left">Number of Players</div>
          <div class="text-left">Join Room</div>
        </div>
      </li>
      <li v-for="room in rooms" :key="room.room_id">
        <div class="flex justify-between bg-gray-700 px-2 text-white my-1">
          <div class="text-left">{{ room.room_id }}</div>
          <div class="text-left">{{ room.room_name }}</div>
          <div class="text-left">{{ room.room_player_count }}/4</div>
          <div>
            <button class="px-2 bg-blue-700 hover:bg-blue-500">Join</button>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      rooms: [
        {
          room_id: 1,
          room_name: "Hustlin Jacks",
          room_player_count: 1
        },
        {
          room_id: 2,
          room_name: "Hustlin Jacks 2",
          room_player_count: 2
        },
        {
          room_id: 3,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 4,
          room_name: "Hustlin Jacks 4",
          room_player_count: 4
        },
        {
          room_id: 5,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 6,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 7,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 8,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 9,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 10,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 11,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 12,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 13,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 14,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 15,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 16,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        },
        {
          room_id: 17,
          room_name: "Hustlin Jacks 3",
          room_player_count: 3
        }
      ]
    };
  },
  mounted() {
    console.log("Room List Mounted");
  }
};
</script>

<style>
</style>
