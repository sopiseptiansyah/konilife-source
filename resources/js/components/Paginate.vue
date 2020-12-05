<template>
    <nav class="d-flex justify-content-center pt-4 pb-5">
        <!-- {{data}} -->
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(data.meta.current_page - 1)">
                    <span aria-hidden="true">&laquo; Prev</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            <!-- <li class="page-item" v-for="data in data.meta" :key="data.index">
                <a  class="page-link" href="#">{{data.current_page + 1}}</a>
            </li> -->

            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(data.meta.current_page + 1)">
                    <span aria-hidden="true">Next &raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props:{
        data:{
            type: Object,
            default: () => ({
                links: null,
                meta: null
            })
        }
    },
    methods : {
      changePage(page) {
          if(page > 0){
            console.log(page);
            this.data.current_page = page;
            return this.$emit('paginate', page);
          }
      }
    }
}
</script>

<style>

</style>