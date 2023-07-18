<script setup>
const props = defineProps(['post'])
</script>
<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ post.name }}</div>
                <div class="card-body">
                    {{ post.description }}
                </div>
            </div>
        </div>
    </div>
</div>
</template>
