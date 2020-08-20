<template>
    <div>
        <!-- This loading div is to make sure axios inside mounted completes its action before -->        
            <div class=" mt-64 flex justify-center" v-if="loading">
                <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(252, 252, 252); display: block; shape-rendering: auto;" width="204px" height="204px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <g transform="rotate(0 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9473684210526315s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(18.94736842105263 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8947368421052632s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(37.89473684210526 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8421052631578947s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(56.8421052631579 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7894736842105263s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(75.78947368421052 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7368421052631579s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(94.73684210526316 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6842105263157895s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(113.6842105263158 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.631578947368421s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(132.6315789473684 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5789473684210527s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(151.57894736842104 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5263157894736842s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(170.52631578947367 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.47368421052631576s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(189.47368421052633 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.42105263157894735s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(208.42105263157896 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3684210526315789s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(227.3684210526316 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3157894736842105s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(246.31578947368422 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.2631578947368421s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(265.2631578947368 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.21052631578947367s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(284.2105263157895 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.15789473684210525s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(303.1578947368421 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.10526315789473684s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(322.10526315789474 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.05263157894736842s" repeatCount="indefinite"></animate>
                </rect>
                </g><g transform="rotate(341.05263157894734 50 50)">
                <rect x="48.5" y="19.5" rx="1.5" ry="3.74" width="3" height="11" fill="#1d3f72">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                </rect>
                </g>
                <!-- [ldio] generated by https://loading.io/ --></svg>
            </div>

            <div v-else>
                <div v-if="contacts.length === 0">
                    <p> No Contacts Yet !! <router-link to="/contacts/create"> Get Started !! </router-link> </p>
                </div>                
                <div v-else>
                    <div v-for="contact in contacts" :key="contact.id">
                        <router-link :to="'contacts/' + contact.data.contact_id" class="flex items-center
                         border-b border-gray-400 p-4 hover:bg-gray-100">
                            <!-- Each contact we got from axios follows a certain format. Each contact array has a data subsection(array) that
                            contains all the fields(name, email etc.). Uncomment console.log(response.data.data) to see the format and
                            unserstand why it has to be {{ contact.data.name }}-->
                            <UserCircle :name="contact.data.name" />
                            <div class="pl-4">
                                <p class="text-blue-400 font-bold"> {{ contact.data.name }} </p>                            
                                <p class="text-gray-600"> {{ contact.data.email }} </p>
                            </div>
                        </router-link>                        
                    </div>                    
                </div>
            </div>
            
    </div>
</template>

<script>
import UserCircle from "./UserCircle";

    export default {
        name: "ContactsList",
        mounted() {
            // Get list of contacts. Endpoint is a prop. We are using it because we can make custom calls depending on
            // what is being passed to this component
            axios.get(this.endpoint).then(response => {
                    this.contacts = response.data.data;
                    //console.log(response.data.data);
                    this.loading = false;
                })
                .catch(error => {
                    this.loading = false;
                    alert('Unable to Fetch Contacts !!');
                });
                console.log("ContactsList Mounted !!");
        },
        props: [
            'endpoint' , 
        ],

        components: {
            UserCircle
        },
        
        data: function() {
            return {
                loading: true,
                contacts: null,                
            }
        },

        methods: {            
            
            
            
        },
        
    }
</script>

<style scoped>

</style>
