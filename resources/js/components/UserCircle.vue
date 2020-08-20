<template>
    <div>
        <div class="rounded-full text-white border border-gray-400 bg-blue-400 w-10 h-10 flex items-center justify-center">
            {{ userCircle }}
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserCircle",
        mounted() {
 
        },

        props:[
            'name',
        ],

        data: function(){
            return{
                initials : null,
                nameArray: null,
            }
        },

        computed: {
            userCircle: function(){
                this.nameArray = this.name.split(" ", 2);
                if(this.nameArray.length > 1){
                    this.nameArray[0] = this.nameArray[0].toUpperCase();
                    this.nameArray[1] = this.nameArray[1].toUpperCase();
                    this.initials = this.nameArray[0].charAt(0).concat(this.nameArray[1].charAt(0));
                }
                else{
                    this.nameArray[0] = this.nameArray[0].toUpperCase();
                    this.initials = this.nameArray[0].charAt(0);
                }
                return this.initials;
                // From coders tape. This line is obsolete as I changed it with the chuck above.
                //return this.name.match(/[A-Z]/g).slice(0,2).join('');
            },

        }
    }
</script>