<template>
    <div>
        <button class="btn btn-primary ml-3 w-100" @click="followUser">
            Follow
        </button>
    </div>
</template>

<script>
export default {
    props: ["userId"],

    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        followUser() {
            axios.post("/follow/" + this.userId).then(response => {
                alert(response.data);
            });
        }
    }
};
</script>
