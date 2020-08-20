<template>
    <div>
        <!-- Uses the ContactList component. Sends it an endpoint as prop that will be accesses using get method. -->
        <ContactsList endpoint="/api/birthdays" />                
    </div>
</template>

<script>

    import ContactsList from '../components/ContactsList';

    export default {
        name: "BirthdaysIndex",

        components: {
            ContactsList
        },

        mounted() {
            console.log("BirthdaysIndex Mounted !!");
        },
        props: [
            
        ],
        
        data: function() {
            return {
              
            }
        },

        methods: {            
            
            
        },
        
    }
</script>

<style scoped>

</style>
