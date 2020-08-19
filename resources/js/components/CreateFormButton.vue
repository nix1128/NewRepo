

<template>
 <div>

     <button  :type="submit" class ="my-button" v-text="text"></button>






 </div>


</template>

<script type="text/babel">
    export default {
        mounted() {

        },

        data:function(){
            return{

            }
        },

        props:[
            "text",
                "type"


        ]


    }


</script>

<style>

    .my-button{
        background-color:#0E9A00;
        padding: 1px 10px;
        box-shadow: inset;

    }

</style>
