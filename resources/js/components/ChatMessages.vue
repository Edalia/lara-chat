<template>
    <div class="card">
        <h5 class="card-header">Chats</h5>
        <div class="card-body">
            <p class="alert alert-dark" v-for="message in messages">
                <b>{{ message.user.name }}:</b> <br />
                {{ message.message_content }}
            </p>

            <p class="alert alert-primary" v-if="messages.length < 1">
                <b>No messages yet</b>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    props: ["messages"],
};
</script>
