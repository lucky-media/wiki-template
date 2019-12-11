<template>
    <div class="w-3/5 flex items-center justify-center px-5 relative">
        <input placeholder="Search" type="text" v-model="query"
               class="w-full h-16 border border-white rounded-lg bg-transparent text-white placeholder-white appearance-none outline-none px-5">
        <transition name="fade">
            <div v-if="query" class="w-full absolute inset-0 mt-10">
                <div class="flex flex-col mx-5 mt-10 shadow-lg">
                    <a
                            v-for="(result, index) in results"
                            :href="result.link"
                            class="bg-white hover:bg-blue-100 text-xl cursor-pointer border-b border-gray-400 last:border-transparent p-4">
                        {{ result.title }}
                        <span class="block font-normal text-gray-700 text-sm my-1" v-html="result.snippet"></span>
                    </a>
                    <div
                            v-if="! results.length"
                            class="bg-white w-full flex items-center h-16 hover:bg-blue-100 border-b border-blue-400 rounded-lg shadow-lg cursor-pointer px-5"
                    >
                        <p class="my-0">No results for <strong>{{ query }}</strong></p>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                fuse: null,
                query: '',
            }
        },

        computed: {
            results() {
                return this.query ? this.fuse.search(this.query) : [];
            },
        },

        created() {
            axios('/index.json').then(response => {
                this.fuse = new fuse(response.data, {
                    minMatchCharLength: 6,
                    keys: ['title', 'snippet', 'categories'],
                });
            });
        },
    }
</script>

<style scoped>
    .fade-enter-active {
        transition: opacity .5s;
    }
    .fade-leave-active {
        transition: opacity 0s;
    }
    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }
</style>