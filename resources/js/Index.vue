<template>
    <div>
        <nav class="nav justify-content-center">
         <router-link class="nav-link" v-bind:to="{ name:'home'}">Home</router-link>
         <router-link class="nav-link" v-bind:to="{ name:'contact'}">Contact</router-link>
        </nav>

        <div class="container">

             <router-view></router-view>

        </div>
    </div>
</template>
