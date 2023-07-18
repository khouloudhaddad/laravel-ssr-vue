<script setup>
import { onMounted , ref} from 'vue';
const posts = ref([]);

function getCreateData(url = '/post'){
    window.axios.get(url)
            .then((response) => {
                console.log(response.data)
                posts.value = response.data;
            })
            .catch( (error) => {

            });
}

onMounted(()=>{
    getCreateData()
})
</script>
<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div v-for="post in posts.data" :key="post.id" class="card">
                <div class="card-header">{{ post.name }}</div>
                <div class="card-body">
                    {{ post.short_description }}
                    <a :href="'/post/'+post.id">read more</a>
                </div>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" @click="getCreateData(posts.prev_page_url)">Previous</a></li>
                    <li class="page-item"><a class="page-link" >{{ posts.current_page }} / {{ posts.total }}</a></li>
                    <li class="page-item"><a class="page-link" @click="getCreateData(posts.next_page_url)">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</template>
