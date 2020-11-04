// import vue since npm install was run, it placed files in node_modules folder including vue
import Vue from 'vue';
//import router.js from root folder(js folder for this case)
import router from './router';
//import App component from components folder. This is the main component which will be used
import App from './components/App';


// bootstrapping some vue files(e.g axios) and csrf tokens from the bootstrap.js files
require('./bootstrap');

// initialize the components and router to be injected into the application
const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router
});
