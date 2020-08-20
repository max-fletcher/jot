<template>
  
</template>


<script>
export default {
    name: "Logout",

    created(){
        // send a post request to logout
        axios.post('/logout',{})
        // finally will always trigger after an axios request
        .finally(error => {
            // redirect to the login route after logout request is sent
            window.location = '/login';
        });
    }
    
}
</script>    

<style>

</style>