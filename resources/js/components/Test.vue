<template>
    <div class="container">
        <h1>Vue Test:</h1>
        <p>Welcome to the {{title}} store.</p>
    </div>
</template>

<script>
    export default {
        props : {
            title: {
                type: String
            }
        }
    }
</script>