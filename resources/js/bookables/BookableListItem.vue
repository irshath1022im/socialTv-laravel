<template>
    <div>
        <h3>{{ title}}</h3>
        <p>{{ content}}</p>
        <p>{{ price}}</p>
    </div>
</template>


<script>
export default {
   props:{title : String, content: String, price:Number}

}
</script>
