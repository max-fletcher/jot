<template>
    <div>
        <div class="relative pb-4">
            <label :for="name" class="text-blue-500 pt-2 uppercase text-xs font-bold absolute"> {{ label }} </label>
            <!--
            v-model="value" will copy the data keyed into "value" variable. At the same time, the @input will trigger
            (when data was keyed into the fields). It will trigger the updateField function, which will in turn, emit an
            event that will emit that "value" onto a listener in the ContactsCreate.vue file and fill in the respective
            field. There, the @update:field will set the data to a form array in data section. A bit of a roundabout way
            to do this.
            The props will only set the name, label and placeholder for each field.
            updateField is taking in the "name" which corresponds to the specific field name(name, email, birthday etc).
            In vue, the :class calls the errorClassObject with the "name"(name, email, birthday etc) of the field. It is only
            applies to classes when a certain condition is met. See method below on when it is applied and when what is applied.
            -->
            <input :id="name" class="name pt-8 w-full border-b pb-2 text-gray-900 focus:outline-none focus:border-blue-400"
            type="text" :class="errorClassObject(name)" :placeholder="placeholder" v-model="value" @input="updateField(name)">
            <!--
            Errors will be displayed if errors are caught in submitForm method inside ContactsCreate.vue.
            "name" is simply, the name of each field(name, email, birthday etc.) and not just the 1st field name
            -->
            <p class="text-red-600 text-sm" v-text="errorMessage(name)"> Error Here </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "InputField",
        mounted() {

        },
        props: [
            // 'data' prop is for edit page only
            'name', 'label', 'placeholder', 'errors', 'data',
        ],

        data: function() {
            return {
                value: '',
            }
        },

        methods: {
            // accept each field name(name, email, birthday etc.) as parameter
            // You can use "this.name" as parameter instead of "field". That way, the update:field and errorClassObject methods
            // inside the template section will not require a parameter(which is currently "name").
            updateField: function(field){
            // clear errors. It is a separate function defined below. Field name is sent as parameter so that that field is
            // cleared only
                this.clearErrors(field);
            // " $emit " emits an event. In this case, it emits the "value" variable/property to the listener called @update:field
            // inside the ContactsCreate.vue file.
                this.$emit('update:field', this.value);
            },

            // accept each field name(name, email, birthday etc.) as parameter
            // You can use "this.name" as parameter instead of "field". That way, the update:field and errorClassObject methods
            // inside the template section will not require a parameter(which is currently "name").
            errorMessage: function(field){
                // if errors exist && if errors for "this" specific field exists && if errors have a string length greater
                // than 0(to be extra sure), then return the first error (0 index) that is present
                if(this.errors && this.errors[field] && this.errors[field].length > 0){
                    return this.errors[field][0];
                }
            },

            // accept each field name(name, email, birthday etc.) as parameter
            // You can use "this.name" as parameter instead of "field". That way, the update:field and errorClassObject methods
            // inside the template section will not require a parameter(which is currently "name").
            clearErrors: function(field){
                // if errors exist && if errors for "this" specific field exists && if errors have a string length greater
                // than 0(to be extra sure), then return the first error (0 index) that is present
                if(this.errors && this.errors[field] && this.errors[field].length > 0){
                    // set the error variable to null when new data is typed
                    this.errors[field] = null;
                }
            },

            // accept each field name(name, email, birthday etc.) as parameter
            // You can use "this.name" as parameter instead of "field". That way, the update:field and errorClassObject methods
            // inside the template section will not require a parameter(which is currently "name").
            errorClassObject: function(field){
                // apply 'error-field' classes if there are errors present for a particular field
                return {
                    'error-field' : this.errors && this.errors[field] && this.errors[field].length > 0
                }
            },
        },

        // watcher method(a special method. works like a computed property.) for edit page only.
        watch: {
            // If data attribute in prop changes, then grab that value and set it to value variable inside data
            data: function (val) {
                this.value = val;
            }
        }
    }
</script>

<style scoped>
    .error-field {
        @apply .border-red-300 .border-b-2
    }
</style>
