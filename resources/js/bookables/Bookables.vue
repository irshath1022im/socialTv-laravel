<template>
    <div>
        <bookable-list-item title="Cheap Villa 1" content="A Very cheap villa" v-bind:price="10"></bookable-list-item>
        <bookable-list-item title="Cheap Villa 2" content="A Very cheap villa"></bookable-list-item>
        <bookable-list-item title="Cheap Villa 3" content="A Very cheap villa"></bookable-list-item>
        <bookable-list-item title="Cheap Villa 4" content="A Very cheap villa"></bookable-list-item>

    </div>
</template>


<script>
import BookableListItem from './BookableListItem'

    export default {
        components: {
            BookableListItem
        }
    }
</script>
