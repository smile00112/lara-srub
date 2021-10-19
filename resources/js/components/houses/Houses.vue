<template>
    <div class="container">
        <h1>Дома</h1>
        <div class="row">
            <div class="col-lg-4" v-for="house in houses" v-bind:key="house.id">
                <div class="card mt-3">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <a href="#" class="card-body"><h5 class="card-title">{{house.title}}</h5></a>
                         <p class="card-text">{{house.description}}</p>
                        <a href="#" class="btn btn-primary">Go to house</a>
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
                houses: []
            }
        },
        mounted() {
            console.log('Component "Houses" mounted.')
        },
        mounted(){
            axios.get('/api/houses')
            .then(response => {
                this.houses = response.data.data;

            })
        }
})
</script>
