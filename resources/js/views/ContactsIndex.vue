<template>
    <div>
        <!-- Uses the ContactList component. Sends it an endpoint as prop that will be accesses using get method. -->
        <ContactsList endpoint="/api/contacts" />
    </div>
</template>

<script>

    import ContactsList from '../components/ContactsList';

    export default {
        name: "ContactsIndex",

        components: {
            ContactsList
        },

        mounted() {
 

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
