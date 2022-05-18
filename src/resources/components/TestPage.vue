<template>
    <div>
        <p>Hey hello how are you</p>
        <button @click="cat">BING BONG</button>
    </div>
</template>
<script>
import axios from "axios"
export default {
    methods: {
        cat()
        {
            axios('/').then(res => {
                console.log(res)
            })
        }
    }
}
</script>