<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-nav">
                    <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'home'}" >Home</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'houses'}" >Houses</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'about'}" >About</router-link></li>
                </div>
            </div>
        </nav>

        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
// import { defineComponent } from '@vue/composition-api'

// export default defineComponent({

// })
export default({

 })
</script>
