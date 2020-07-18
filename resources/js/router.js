// import vue since npm install was run, it placed files in node_modules folder including vue
import Vue from 'vue';
// This is for importing vuerouter from node_modules/dependencies. Since it is a plugin,
// you will need to initialize and create an object of this class later
// You can use any name you want but your router name(in this case, Vuerouter) has to match the name
// inside Vue.use(routeName);
import VueRouter from 'vue-router'
// importing components to be viewed in front end
import ExampleComponent from './components/ExampleComponent';

//This line is to initialize vue router after import from node_modules/dependencies
Vue.use(VueRouter);

// make new VueRouter object
export default new VueRouter({
    // an array of routes
    routes: [
        { path: '/', component: ExampleComponent },
    ],
    mode: 'history'
});