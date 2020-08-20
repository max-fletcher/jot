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
            <div class="flex justify-between">
                <!-- $router.back() takes you back to the previous route. The href is so that it looks like a button/link. -->
                <a href="#" class="text-blue-400" @click="$router.back()">
                   < Back
                </a>
                <div class="relative">
                    <!-- Edit Button -->
                    <router-link :to="'/contacts/' + contact.contact_id + '/edit'" class="px-4 py-2 rounded text-sm text-green-500
                    border border-green-500 font-bold mr-2"> Edit </router-link>
                    <!-- Delete Button. Calls the destroy method. -->
                    <!-- Needs the .prevent directive otherwise it refreshes and disappears-->
                    <a href="" class="px-4 py-2 rounded text-sm text-red-500 border border-red-500 font-bold"
                    @click.prevent="modal = ! modal"> Delete </a>

                    <!-- Modal for confirmation of delete -->
                    <div v-if="modal" class="absolute bg-blue-900 text-white rounded-lg z-20 p-8 w-64 right-0 mt-4 mr-8">
                        <p> Are You Sure You Want To Delete This Contact ?? </p>                        
                        <div class="flex items-center mt-6 justify-end">
                            <button class="text-white px-3 py-1 mr-4 border border-white rounded" @click="modal = !modal"> Cancel </button>
                            <button class="px-4 py-2 bg-red-500 rounded font-bold text-sm"
                            @click="destroy"> Delete </button>
                        </div>                                             
                    </div>
                </div>
                <div @click="modal = ! modal" v-if="modal" class="bg-black opacity-25 absolute right-0 left-0 top-0 bottom-0 z-10"></div>
            </div> 

            <div class="flex items-center mt-6">
                <UserCircle :name="contact.name" />
                <p class="pl-5 text-xl"> {{ contact.name }} </p>
            </div>

            <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Contact</p>        
            <p class="pt-2 text-blue-400"> {{ contact.email }} </p>
            <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Company</p>
            <p class="pt-2 text-blue-400"> {{ contact.company }} </p>
            <p class="pt-6 text-gray-600 font-bold uppercase text-sm">Birthday</p>
            <p class="pt-2 text-blue-400"> {{ contact.birthday }} </p>
        </div>        
    </div>
</template>

<script>
    import UserCircle from '../components/UserCircle';
    export default {
        name: "ContactsShow",
        mounted() {
            // Show a contact. Grabs the id from the URL and appends it to the request.
            axios.get('/api/contacts/' + this.$route.params.id)
                .then(response => {
                    console.log(response);
                    this.contact = response.data.data;

                    this.loading = false;
                })
                .catch(error => {
                    this.loading = false;
                    // if a user is not found, redirect to /contacts page
                    if(error.response.status === 404){
                        this.$router.push('/contacts');
                    }
                });
        },

        data: function(){ 
            return{
                contact: null,
                loading: true,
                modal: false,
            }
        },
        components: {
            UserCircle
        },
        methods: {
            destroy: function(){
                // destroy method. Grabs the id from the URL and appends it to the request.
                axios.delete('/api/contacts/' + this.$route.params.id)
                .then(response=> {
                    // if delete is successful, will redirect to the index page since this contact no longer exists.
                    this.$router.push('/contacts');
                })
                .catch(error => {
                    alert('Internal Error ! Cannot Delete Contact !!');
                })
            }
        }    
    }
</script>
