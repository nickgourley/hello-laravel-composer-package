<template>
    <div>
        <p>Hey hello how are you</p>
        <button @click="cat">BING BONG</button>
    </div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.min.css';
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