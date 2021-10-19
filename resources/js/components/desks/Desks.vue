<template>
    <div class="container">
        <h1>Доски</h1>
        <div class="row">
            <div class="col-lg-4" v-for="">
                <div class="card mt-3">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <a href="#" class="card-body"><h5 class="card-title">Card title</h5></a>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default ({
        data(){
            return{
                desks: []
            }
        },
        mounted() {
            console.log('Component "Desks" mounted.')
        },
        mounted(){
            axios.get('/api/houses')
            .then(response => {
                this.desks = response.data.data;
            })
        }
})
</script>
