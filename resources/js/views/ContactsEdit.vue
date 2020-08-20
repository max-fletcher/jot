<template>
    <div>
        <!-- Back Button -->
        <a href="#" class="text-blue-400" @click="$router.back()">
            < Back
        </a>
        <!-- need to use the @submit.prevent directive to prevent page reload otherwise it wouldn't be an SPA -->
        <form @submit.prevent="submitForm" class="pt-4">
        <!-- sending props data into the input fields so that each will give us field with different labels & placeholders.
        @update:field -->
            <InputField name="name" label="Contact Name" :errors="errors"
             placeholder="Enter Contact Name" @update:field="form.name = $event" :data="form.name" />
            <InputField name="email" label="E-mail" :errors="errors"
             placeholder="Enter E-Mail Address" @update:field="form.email = $event" :data="form.email" />
            <InputField name="company" label="Company" :errors="errors"
             placeholder="Enter Company Name" @update:field="form.company = $event" :data="form.company" />
            <InputField name="birthday" label="Birthday" :errors="errors"
             placeholder="MM/DD/YYYY" @update:field="form.birthday = $event" :data="form.birthday" />
             <!-- submit and cancel buttons -->
            <div class="flex justify-end">
                <button class="bg-white py-2 px-4 rounded text-red-700 border mr-5 hover:border-red-700"> Cancel </button>
                <button class="bg-blue-500 py-2 px-4 rounded text-white hover:bg-blue-400"> Submit </button>                       
            </div>
        </form>
    </div>
</template>

<script>
// import the InputField component from components folder
// Two dots means one directory back. The first dot is there by default and any subsequent dots represent how many directories back
    import InputField from '../components/InputField';

    export default {
        name: "ContactsCreate",
        
        mounted() {
            // Show a contact. Grabs the id from the URL and appends it to the request.
            axios.get('/api/contacts/' + this.$route.params.id)
                .then(response => {
                this.form = response.data.data;

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

            components: {
                InputField
            },

        data: function() {
            return {
                form: {
                    'name' : '',
                    'email' : '',
                    'company' : '',
                    'birthday' : '',
                },

                errors: null,
            }
        },

        methods: {
            // submit form
            submitForm: function () {
                axios.patch('/api/contacts/' + this.$route.params.id, this.form)
                    .then(response => {
                        // pushes a new link into vue router. Basically redirects after submission
                        // (i.e after request receives a response)
                       this.$router.push(response.data.links.self);
                    })
                    .catch(errors => {
                    // "errors" variable in "data" is initially empty. Fill it with any errors that the backend provides
                    // (if any)when making the API call.
                       this.errors = errors.response.data.errors;
                    });
            }
        },
    }
</script>
